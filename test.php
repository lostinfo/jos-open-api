<?php
$client = new \JD\JdClient();
$client->appKey = 'you appKey';
$client->appSecret = 'you appSecret';
$client->accessToken = 'you accessToken';

$req = new \JD\request\CategoryReadFindValuesByAttrIdUnlimit();
$req->setCategoryAttrId('you category attr id');
$req->setFields('id,attId');
$resp = $client->execute($req, 'you accessToken');
var_export($resp);
