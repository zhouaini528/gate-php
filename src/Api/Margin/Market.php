<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Margin;

use Lin\Gate\Request;

class Market extends Request
{
    /**
     * GET /margin/funding_book
     * */
    public function getFundingBook(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/margin/funding_book';
        $this->data=$data;
        return $this->exec();
    }
}