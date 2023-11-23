<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Gate\GateMargin;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$gate=new GateMargin($key,$secret);

//You can set special needs
$gate->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
]);

try {
    $result=$gate->loan()->gets([
        'status'=>'open',
        'side'=>'lend',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

?>