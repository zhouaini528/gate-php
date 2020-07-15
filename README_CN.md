### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin](https://github.com/zhouaini528/Kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Gate](https://github.com/zhouaini528/gate-php)   支持 V2/V4

#### 安装方式
```
composer require linwj/gate
```

支持更多的请求设置
```php
$gate=new GateSpot();//默认API V4
$gate=new GateSpotV2();//默认API V2

//You can set special needs
$gate->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);
```

### 现货公共API V2

Market related API [More](https://github.com/zhouaini528/gate-php/blob/master/tests/spot_v2/publics.php)

```php
$gate=new GateSpotV2();

try {
    $result=$gate->publics()->pairs();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$gate->publics()->marketinfo();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

### 现货私有API V2

Private API V2 [More](https://github.com/zhouaini528/gate-php/blob/master/tests/spot_v2/privates.php)

```php
$gate=new GateSpotV2($key,$secret);

//bargaining transaction
try {
    $result=$gate->privates()->buy([
        'currencyPair'=>'btc_usdt',
        'rate'=>'3000',
        'amount'=>'0.01',
        //'text'=>'t-xxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//track the order
try {
    $result=$gate->privates()->getOrder([
        'currencyPair'=>'btc_usdt',
        'orderNumber'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//cancellation of order
try {
    $result=$gate->privates()->cancelOrder([
        'currencyPair'=>'btc_usdt',
        'orderNumber'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//more
try {
    $result=$gate->privates()->balances();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$gate->privates()->depositAddress(['currency'=>'BTC']);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```
