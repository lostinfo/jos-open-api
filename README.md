# Jos PHP Open Api SDK


## 使用

复制jd目录至项目根目录
composer.json 新增 psr-4
```
"autoload": {
    "psr-4": {
        "JD\\": "jd/"
    }
}
```

## 示例

jingdong.category.read.findValuesByAttrIdUnlimit

根据venderId等条件加密查询订单总数

* 请求参数

名称 | 类型 | 必须 | 示例值 | 描述    
---- | --- | --- | --- | ---
categoryAttrId | Number   | 是  | 1234     | 属性ID  
field          | String[] | 否  | id,attId | 可选的返回项

```
$client = new \JD\JdClient();
$client->appKey = 'you appKey';
$client->appSecret = 'you appSecret';
$client->accessToken = 'you accessToken';

$req = new \JD\request\CategoryReadFindValuesByAttrIdUnlimit();
$req->setCategoryAttrId('you category attr id');
$req->setFields('id,attId');
$resp = $client->execute($req, 'you accessToken');
var_export($resp);
```

## 更新sdk
```
git clone git@github.com:lostinfo/jos-php-open-api-sdk-generate.git

cd jos-php-open-api-sdk-generate

composer install

// 获取doc内容
php GetJdDoc.php

// 更新skd
php jd_sdk_generate.php
```