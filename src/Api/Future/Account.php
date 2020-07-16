<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Future;

use Lin\Gate\Request;

class Account extends Request
{
    /**
     *GET /futures/{settle}/accounts
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/accounts';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/account_book
     * */
    public function getBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/account_book';
        $this->data=$data;
        return $this->exec();
    }
}