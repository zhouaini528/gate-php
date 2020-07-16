<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Margin;

use Lin\Gate\Request;

class Loan extends Request
{
    /**
     * POST /margin/loans
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/margin/loans';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /margin/loans
     * */
    public function gets(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/loans';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /margin/merged_loans
     * */
    public function postMerged(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/margin/merged_loans';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /margin/loans/{loan_id}
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/loans/'.$data['loan_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *PATCH /margin/loans/{loan_id}
     * */
    public function patch(array $data=[]){
        $this->type='PATCH';
        $this->path='/api/v4/margin/loans/'.$data['loan_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *DELETE /margin/loans/{loan_id}
     * */
    public function delete(array $data=[]){
        $this->type='DELETE';
        $this->path='/api/v4/margin/loans/'.$data['loan_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /margin/loans/{loan_id}/repayment
     * */
    public function postRepayment(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/margin/loans/'.$data['loan_id'].'/repayment';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /margin/loans/{loan_id}/repayment
     * */
    public function getRepayment(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/loans/'.$data['loan_id'].'/repayment';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /margin/loan_records
     * */
    public function getRecords(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/loan_records';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /margin/loan_records/{loan_record_id}
     * */
    public function getRecord(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/loan_records/'.$data['loan_record_id'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *PATCH /margin/loan_records/{loan_record_id}
     * */
    public function patchRecords(array $data=[]){
        $this->type='PATCH';
        $this->path='/api/v4/margin/loan_records/'.$data['loan_record_id'];
        $this->data=$data;
        return $this->exec();
    }
}