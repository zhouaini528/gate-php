<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Gate\GateSpot;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$gate=new GateSpot($key,$secret);

//You can set special needs
$gate->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
]);


//bargaining transaction
try {
    $result=$gate->order()->post([
        'text'=>'t-'.microtime(true)*10000,//custom ID
        'currency_pair'=>'BTC_USDT',
        'type'=>'limit',
        'side'=>'buy',
        'amount'=>'0.00015',
        'price'=>'10000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//track the order
try {
    $result=$gate->order()->get([
        'currency_pair'=>'BTC_USDT',
        'order_id'=>$result['id'],
        //'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//cancellation of order
try {
    $result=$gate->order()->delete([
        'currency_pair'=>'BTC_USDT',
        'order_id'=>$result['id'],
        //'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


?>