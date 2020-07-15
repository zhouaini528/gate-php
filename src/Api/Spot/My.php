<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Spot;

use Lin\Gate\Request;

class My extends Request
{
    /**
     * GET /spot/my_trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/my_trades';
        $this->data=$data;
        return $this->exec();
    }
}