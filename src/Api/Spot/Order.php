<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Spot;

use Lin\Gate\Request;

class Order extends Request
{
    /**
     * POST /spot/batch_orders
     * */
    public function postBatch(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/spot/batch_orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /spot/orders
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/spot/orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /spot/orders
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /spot/orders
     * */
    public function deletes(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/spot/orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /spot/cancel_batch_orders
     * */
    public function postCancelBatch(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/spot/cancel_batch_orders';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /spot/orders/{order_id}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/spot/orders/'.$data['order_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /spot/orders/{order_id}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/spot/orders/'.$data['order_id'];

        unset($data['order_id']);
        $this->data=$data;
        return $this->exec();
    }
}