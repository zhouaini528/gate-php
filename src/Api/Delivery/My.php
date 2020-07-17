<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Delivery;

use Lin\Gate\Request;

class My extends Request
{
    /**
     *GET /delivery/{settle}/my_trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/my_trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/position_close
     * */
    public function getPositionClose(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/position_close';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/liquidates
     * */
    public function getLiquidates(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/liquidates';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/settlements
     * */
    public function getSettlements(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/settlements';
        $this->data=$data;
        return $this->exec();
    }
}