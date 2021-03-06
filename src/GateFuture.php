<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate;



use Lin\Gate\Api\Future\Account;
use Lin\Gate\Api\Future\Contract;
use Lin\Gate\Api\Future\Market;
use Lin\Gate\Api\Future\My;
use Lin\Gate\Api\Future\Order;
use Lin\Gate\Api\Future\Position;

class GateFuture
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $host='https://api.gateio.ws'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }
    
    /**
     * 
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,
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
    function account(){
        return new Account($this->init());
    }
    
    /**
     *
     * */
    function contract(){
        return new Contract($this->init());
    }
    
    /**
     *
     * */
    function market(){
        return new Market($this->init());
    }
    
    /**
     *
     * */
    function my(){
        return new My($this->init());
    }
    
    /**
     *
     * */
    function order(){
        return new Order($this->init());
    }
    
    /**
     *
     * */
    function position(){
        return new Position($this->init());
    }
}