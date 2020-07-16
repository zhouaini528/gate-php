<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate;

use Lin\Gate\Api\Margin\Account;
use Lin\Gate\Api\Margin\Currency;
use Lin\Gate\Api\Margin\Market;
use Lin\Gate\Api\Margin\Loan;

class GateMargin
{
    protected $key;
    protected $secret;
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
    function loan(){
        return new Loan($this->init());
    }
}