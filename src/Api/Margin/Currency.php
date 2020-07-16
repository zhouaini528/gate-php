<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Margin;

use Lin\Gate\Request;

class Currency extends Request
{
    /**
     * GET /margin/currency_pairs
     * */
    public function getPairsList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/currency_pairs';
        $this->data=$data;
        return $this->exec();
    }
}