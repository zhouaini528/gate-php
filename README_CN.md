### 建议优先阅读官方文档

官方文档地址 [API2](https://www.gatecn.io/api2) [API4](https://www.gatecn.io/docs/futures/api/index.html)

所有的接口方式初始化与gate提供的接口方式一样，详细请看[src/api](https://github.com/zhouaini528/gate-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/gate-php/blob/master/README.md)

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

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

### 现货市场数据 API V4

Market related API [More](https://github.com/zhouaini528/gate-php/blob/master/tests/spot/market.php)

```php
$gate=new GateSpot();

try {
    $result=$gate->market()->getTickers();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->market()->getOrderBook([
        'currency_pair'=>'BTC_USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->market()->getTrades([
        'currency_pair'=>'BTC_USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->market()->getCandlesticks([
        'currency_pair'=>'BTC_USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

### 现货订单 API V4

Order API V4 [More](https://github.com/zhouaini528/gate-php/blob/master/tests/spot/order.php)

```php
$gate=new GateSpot($key,$secret);

//bargaining transaction
try {
    $result=$gate->order()->post([
        //'text'=>'t-xxxxxxxxxx',//custom ID
        'currency_pair'=>'BTC_USDT',
        'type'=>'limit',
        'side'=>'buy',
        'amount'=>'0.1',
        'price'=>'4000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//track the order
try {
    $result=$gate->order()->get([
        'currency_pair'=>'BTC_USDT',
        'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//cancellation of order
try {
    $result=$gate->order()->delete([
        'currency_pair'=>'BTC_USDT',
        'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

更多用例请查看 [more](https://github.com/zhouaini528/gate-php/tree/master/tests/spot)

更多API请查看 [more](https://github.com/zhouaini528/gate-php/tree/master/src/Api/Spot)


### 交割与永续合约市场 API V4

Market related API [More](https://github.com/zhouaini528/gate-php/blob/master/tests/future/market.php)

```php
$gate=new GateFuture();
$gate=new GateDelivery();

try {
    $result=$gate->market()->getTickers(['settle'=>'btc']);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->market()->getOrderBook([
        'settle'=>'btc',
        'contract'=>'BTC_USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->market()->getTrades([
        'settle'=>'btc',
        'contract'=>'BTC_USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->market()->getCandlesticks([
        'settle'=>'btc',
        'contract'=>'BTC_USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

### 交割与永续合约市场 API V4

Order API V4 [More](https://github.com/zhouaini528/gate-php/blob/master/tests/future/order.php)

```php
$gate=new GateFuture($key,$secret);
$gate=new GateDelivery($key,$secret);

//bargaining transaction
try {
    $result=$gate->order()->post([
        //'text'=>'t-xxxxxxxxxx',//custom ID
        'settle'=>'btc',
        'contract'=>'BTC_USD',
        'size'=>'1',
        'price'=>'4000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//track the order
try {
    $result=$gate->order()->get([
        'settle'=>'btc',
        'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//cancellation of order
try {
    $result=$gate->order()->delete([
        'settle'=>'btc',
        'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```



### 现货公共API V2

Market related API [More](https://github.com/zhouaini528/gate-php/blob/master/tests/spot_v2/publics.php)

```php
$gate=new GateSpotV2();

try {
    $result=$gate->publics()->pairs();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


try {
    $result=$gate->publics()->marketinfo();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
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
    print_r($e->getMessage());
}

//track the order
try {
    $result=$gate->privates()->getOrder([
        'currencyPair'=>'btc_usdt',
        'orderNumber'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//cancellation of order
try {
    $result=$gate->privates()->cancelOrder([
        'currencyPair'=>'btc_usdt',
        'orderNumber'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//more
try {
    $result=$gate->privates()->balances();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$gate->privates()->depositAddress(['currency'=>'BTC']);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

更多用例请查看 [more](https://github.com/zhouaini528/gate-php/tree/master/tests/spot_v2)

更多API请查看 [more](https://github.com/zhouaini528/gate-php/tree/master/src/Api/SpotV2)
