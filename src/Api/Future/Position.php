<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Future;

use Lin\Gate\Request;

class Position extends Request
{
    /**
     *GET /futures/{settle}/positions
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/positions';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/positions/{contract}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/positions/'.$data['contract'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /futures/{settle}/positions/{contract}/margin
     * */
    public function postMargin(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/futures/'.$data['settle'].'/positions/'.$data['contract'].'/margin';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /futures/{settle}/positions/{contract}/leverage
     * */
    public function postLeverage(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/futures/'.$data['settle'].'/positions/'.$data['contract'].'/leverage';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /futures/{settle}/positions/{contract}/risk_limit
     * */
    public function postRiskLimit(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/futures/'.$data['settle'].'/positions/'.$data['contract'].'/risk_limit';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /futures/{settle}/position_close
     *@my.php
     * */
    public function getClose(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/futures/'.$data['settle'].'/position_close';
        $this->data=$data;
        return $this->exec();
    }
}