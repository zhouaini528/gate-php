<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Spot;

use Lin\Gate\Request;

class Account extends Request
{
    /**
     * GET /spot/accounts
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/accounts';
        $this->data=$data;
        return $this->exec();
    }
}