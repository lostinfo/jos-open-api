<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取全部透图,包含待审
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2506&apiName=jingdong.transparentImage.read.findAllByWareId
 * Class TransparentImageReadFindAllByWareId
 * @package Jd\request
 */
class TransparentImageReadFindAllByWareId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.transparentImage.read.findAllByWareId";
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