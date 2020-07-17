<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Gate\GateDelivery;

require __DIR__ .'../../../vendor/autoload.php';


$gate=new GateDelivery();

//You can set special needs
$gate->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

try {
    $result=$gate->market()->getTickers(['settle'=>'usdt']);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->market()->getOrderBook([
        'settle'=>'usdt',
        'contract'=>'BTC_USDT_WEEKLY_'.date('Ymd',time())
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->market()->getTrades([
        'settle'=>'usdt',
        'contract'=>'BTC_USDT_WEEKLY_'.date('Ymd',time())
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->market()->getCandlesticks([
        'settle'=>'usdt',
        'contract'=>'BTC_USDT_WEEKLY_'.date('Ymd',time())
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

?>