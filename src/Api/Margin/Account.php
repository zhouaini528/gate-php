<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Margin;

use Lin\Gate\Request;

class Account extends Request
{
    /**
     * GET /margin/accounts
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/accounts';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /margin/funding_accounts
     * */
    public function getFunding(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/funding_accounts';
        $this->data=$data;
        return $this->exec();
    }
}