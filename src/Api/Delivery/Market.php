<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Delivery;

use Lin\Gate\Request;

class Market extends Request
{
    /**
     *GET /delivery/{settle}/order_book
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/order_book';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/candlesticks
     * */
    public function getCandlesticks(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/candlesticks';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/tickers';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /delivery/{settle}/insurance
     * */
    public function getInsurance(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/delivery/'.$data['settle'].'/insurance';
        $this->data=$data;
        return $this->exec();
    }
}