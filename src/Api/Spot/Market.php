<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Spot;

use Lin\Gate\Request;

class Market extends Request
{
    /**
     * GET /spot/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/tickers';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /spot/order_book
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/order_book';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /spot/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /spot/candlesticks
     * */
    public function getCandlesticks(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/candlesticks';
        $this->data=$data;
        return $this->exec();
    }
}