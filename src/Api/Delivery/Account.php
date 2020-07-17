<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Delivery;

use Lin\Gate\Request;

class Account extends Request
{
    /**
     *GET /delivery/{settle}/accounts
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/accounts';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/account_book
     * */
    public function getBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/account_book';
        $this->data=$data;
        return $this->exec();
    }
}