<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Spot;

use Lin\Gate\Request;

class Currency extends Request
{
    /**
     * GET /spot/currency_pairs
     * */
    public function getPairsList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/currency_pairs';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /spot/currency_pairs/{currency_pair}
     * */
    public function getPairs(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/currency_pairs/'.$data['currency_pair'];
        $this->data=$data;
        return $this->exec();
    }
}