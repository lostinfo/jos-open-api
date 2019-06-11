<?php

namespca Lostinfo\JosOpenApi;

/**
 * 设置商品限购/可购区域
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1243&apiName=jingdong.arealimit.write.updateWareAreaLimits
 * Class ArealimitWriteUpdateWareAreaLimits
 * @package Jd\request
 */
class ArealimitWriteUpdateWareAreaLimits
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.arealimit.write.updateWareAreaLimits";
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
     * 商品编号
     * Required: true
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品编号
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

    /**
     * @param int[] $areaId
     * 区域地址id集合
     * Required: false
     * Example Value: areaId
     */
    private $areaId;

    /**
     * @param int[] $areaId
     * 区域地址id集合
     * Example Value: areaId
     */
    public function setAreaId($areaId)
    {
        $this->areaId             = $areaId;
        $this->apiParas["areaId"]  = $areaId;
    }

    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @param int $limitType
     * 限制类型[1:限购]
     * Required: true
     * Example Value: 1
     */
    private $limitType;

    /**
     * @param int $limitType
     * 限制类型[1:限购]
     * Example Value: 1
     */
    public function setLimitType($limitType)
    {
        $this->limitType             = $limitType;
        $this->apiParas["limitType"]  = $limitType;
    }

    public function getLimitType()
    {
        return $this->limitType;
    }

}