<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Future;

use Lin\Gate\Request;

class Order extends Request
{
    /**
     *POST /futures/{settle}/orders
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/futures/orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/orders
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /futures/{settle}/orders
     * */
    public function deletes(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/futures/'.$data['settle'].'/orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/orders/{order_id}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/orders/'.$data['order_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /futures/{settle}/orders/{order_id}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/futures/'.$data['settle'].'/orders/'.$data['order_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /futures/{settle}/price_orders
     * */
    public function postPriceOrders(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/futures/'.$data['settle'].'/price_orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/price_orders
     * */
    public function getPriceOrders(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/price_orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /futures/{settle}/price_orders
     * */
    public function deletePriceOrders(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/futures/'.$data['settle'].'/price_orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/price_orders/{order_id}
     * */
    public function getPriceOrder(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/price_orders/'.$data['order_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /futures/{settle}/price_orders/{order_id}
     * */
    public function deletePriceOrder(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/futures/'.$data['settle'].'/price_orders/'.$data['order_id'];
        $this->data=$data;
        return $this->exec();
    }
}