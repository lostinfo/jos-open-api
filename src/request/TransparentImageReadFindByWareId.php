<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取已审核透图
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2493&apiName=jingdong.transparentImage.read.findByWareId
 * Class TransparentImageReadFindByWareId
 * @package Jd\request
 */
class TransparentImageReadFindByWareId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.transparentImage.read.findByWareId";
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
     * @param int $wareId
     * 商品id
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
     * Example Value: 
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