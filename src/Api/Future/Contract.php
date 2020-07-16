<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Future;

use Lin\Gate\Request;

class Contract extends Request
{
    /**
     *GET /futures/{settle}/contracts
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/contracts';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/contracts/{contract}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/contracts/'.$data['contract'];
        $this->data=$data;
        return $this->exec();
    }
}