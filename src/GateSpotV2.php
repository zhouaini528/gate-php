<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate;



use Lin\Gate\Api\SpotV2\Publics;
use Lin\Gate\Api\SpotV2\Privates;

class GateSpotV2
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://api.gateio.la'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }
    
    /**
     * 
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,
            'vision'=>'v2',
        ];
    }
    
    /**
     * 
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }
    
    /**
     * 
     * */
    function publics(){
        $this->host='https://data.gateio.la';
        return new Publics($this->init());
    }
    
    /**
     *
     * */
    function privates(){
        return new Privates($this->init());
    }
}