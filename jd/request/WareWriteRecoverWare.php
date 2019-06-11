<?php

namespace JD\request;

/**
 * 恢复删除商品
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1252&apiName=jingdong.ware.write.recoverWare
 * Class WareWriteRecoverWare
 * @package Jd\request
 */
class WareWriteRecoverWare
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.recoverWare";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas, JSON_FORCE_OBJECT);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    /**
     * @param Number $wareId
     * 商品ID
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品ID
     * Example Value: wareId
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}