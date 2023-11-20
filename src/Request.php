<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate;

use GuzzleHttp\Exception\RequestException;
use Lin\Gate\Exceptions\Exception;

class Request
{
    protected $key='';

    protected $secret='';

    protected $host='';

    protected $nonce='';

    protected $signature='';

    protected $headers=[];

    protected $type='';

    protected $path='';

    protected $data=[];

    protected $options=[];

    protected $vision='';

    public function __construct(array $data)
    {
        $this->key=$data['key'] ?? '';
        $this->secret=$data['secret'] ?? '';
        $this->host=$data['host'] ?? '';

        $this->options=$data['options'] ?? [];
        $this->vision=$data['vision'] ?? '';
    }

    /**
     *
     * */
    protected function auth(){
        $this->nonce();

        $this->signature();

        $this->headers();

        $this->options();
    }

    /**
     *
     * */
    protected function nonce(){
        if($this->vision=='v2'){
            $mt = explode(' ', microtime());
            $this->nonce = $mt[1].substr($mt[0], 2, 6);
        }else{
            $this->nonce = time();
        }
    }

    /**
     *
     * */
    protected function signature(){
        if($this->vision=='v2'){
            if($this->type=='POST'){
                $this->data['nonce']=$this->nonce;
                $data = http_build_query($this->data, '', '&');
                $this->signature = hash_hmac('sha512', urldecode($data), $this->secret);
            }
        }else{
            $fmt = "%s\n%s\n%s\n%s\n%s";

            if($this->type=='POST'){
                $data=json_encode($this->data);
            }else{
                $query_string = empty($this->data) ? '' : http_build_query($this->data, '', '&') ;
            }
            $hashed_payload = hash("sha512", $data ?? '');
            $signature_string = sprintf($fmt, $this->type, $this->path,$query_string ?? '',$hashed_payload, $this->nonce);

            $this->signature = hash_hmac("sha512", $signature_string, $this->secret);
        }
    }

    /**
     *
     * */
    protected function headers(){
        $this->headers= [
            'KEY'=>$this->key,
            'SIGN'=>$this->signature,
        ];

        if($this->vision=='v2'){
            $this->headers['Content-Type']='application/x-www-form-urlencoded';
        }else{
            $this->headers['Content-Type']='application/json';
            $this->headers['Timestamp']=$this->nonce;
        }
    }

    /**
     *
     * */
    protected function options(){
        if(isset($this->options['headers'])) $this->headers=array_merge($this->headers,$this->options['headers']);

        $this->options['headers']=$this->headers;
        $this->options['timeout'] = $this->options['timeout'] ?? 60;
    }

    /**
     *
     * */
    protected function send(){
        $client = new \GuzzleHttp\Client();

        $url=$this->host.$this->path;

        if($this->vision=='v2'){
            if($this->type=='GET') $url.='?'.http_build_query($this->data);
            else $this->options['form_params']=$this->data;
        }else{
            if($this->type=='POST') $this->options['body']=json_encode($this->data);
            else $url.='?'.http_build_query($this->data);
        }

        $response = $client->request($this->type, $url, $this->options);

        return $response->getBody()->getContents();
    }

    /*
     *
     * */
    protected function exec(){
        $this->auth();

        try {
            return json_decode($this->send(),true);
        }catch (RequestException $e){
            if(method_exists($e->getResponse(),'getBody')){
                $contents=$e->getResponse()->getBody()->getContents();

                $temp=json_decode($contents,true);
                if(!empty($temp)) {
                    $temp['_method']=$this->type;
                    $temp['_url']=$this->host.$this->path;
                }else{
                    $temp['_message']=$e->getMessage();
                }
            }else{
                $temp['_message']=$e->getMessage();
            }

            $temp['_httpcode']=$e->getCode();

            throw new Exception(json_encode($temp));
        }
    }
}
