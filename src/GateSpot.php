<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate;

use Lin\Gate\Api\Spot\Account;
use Lin\Gate\Api\Spot\Currency;
use Lin\Gate\Api\Spot\Market;
use Lin\Gate\Api\Spot\My;
use Lin\Gate\Api\Spot\Order;

class GateSpot
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
            'vision'=>'v4',
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
    function currency(){
        return new Currency($this->init());
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
}