# Jos PHP Open Api SDK

src/request 目录文件过多，不建议composer使用，可部分下载导入使用

## 示例

jingdong.category.read.findValuesByAttrIdUnlimit

根据venderId等条件加密查询订单总数

* 请求参数

名称 | 类型 | 必须 | 示例值 | 描述    
---- | --- | --- | --- | ---
categoryAttrId | Number   | 是  | 1234     | 属性ID  
field          | String[] | 否  | id,attId | 可选的返回项

```
$client = new \Lostinfo\JosOpenApi\JdClient();
$client->appKey = 'you appKey';
$client->appSecret = 'you appSecret';
$client->accessToken = 'you accessToken';

$req = new \Lostinfo\JosOpenApi\request\CategoryReadFindValuesByAttrIdUnlimit();
$req->setCategoryAttrId('you category attr id');
$req->setFields('id,attId');
$resp = $client->execute($req, 'you accessToken');
var_export($resp);
```
