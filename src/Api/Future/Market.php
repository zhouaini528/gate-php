<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Future;

use Lin\Gate\Request;

class Market extends Request
{
    /**
     *GET /futures/{settle}/order_book
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/order_book';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/candlesticks
     * */
    public function getCandlesticks(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/candlesticks';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/tickers';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/funding_rate
     * */
    public function getFundingRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/funding_rate';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/insurance
     * */
    public function getInsurance(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/insurance';
        $this->data=$data;
        return $this->exec();
    }
}