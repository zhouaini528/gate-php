<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Future;

use Lin\Gate\Request;

class My extends Request
{
    /**
     *GET /futures/{settle}/my_trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/my_trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/position_close
     * */
    public function getPositionClose(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/position_close';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/liquidates
     * */
    public function getLiquidates(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/liquidates';
        $this->data=$data;
        return $this->exec();
    }
}