<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品同三级类目下的末级(四级)修改
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2899&apiName=jingdong.ware.write.transferMultiCategory
 * Class WareWriteTransferMultiCategory
 * @package Jd\request
 */
class WareWriteTransferMultiCategory
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.transferMultiCategory";
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
     * 商品ID
     * Required: true
     * Example Value: 1234
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品ID
     * Example Value: 1234
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

    /**
     * @param int $multiCategoryId
     * 末级类目ID
     * Required: true
     * Example Value: 123456
     */
    private $multiCategoryId;

    /**
     * @param int $multiCategoryId
     * 末级类目ID
     * Example Value: 123456
     */
    public function setMultiCategoryId($multiCategoryId)
    {
        $this->multiCategoryId             = $multiCategoryId;
        $this->apiParas["multiCategoryId"]  = $multiCategoryId;
    }

    public function getMultiCategoryId()
    {
        return $this->multiCategoryId;
    }

}