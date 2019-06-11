<?php

namespca Lostinfo\JosOpenApi;

/**
 * 大家电备件库确认收货
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1888&apiName=jingdong.las.spare.zerostock.confirm
 * Class LasSpareZerostockConfirm
 * @package Jd\request
 */
class LasSpareZerostockConfirm
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.spare.zerostock.confirm";
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
     * @param string $afsServiceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $afsServiceId;

    /**
     * @param string $afsServiceId
     * 服务单号
     * Example Value: 
     */
    public function setAfsServiceId($afsServiceId)
    {
        $this->afsServiceId             = $afsServiceId;
        $this->apiParas["afs_no"]  = $afsServiceId;
    }

    public function getAfsServiceId()
    {
        return $this->afsServiceId;
    }

    /**
     * @param string $venderCode
     * 供应商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param string $venderCode
     * 供应商编码
     * Example Value: 
     */
    public function setVenderCode($venderCode)
    {
        $this->venderCode             = $venderCode;
        $this->apiParas["ven_cod"]  = $venderCode;
    }

    public function getVenderCode()
    {
        return $this->venderCode;
    }

    /**
     * @param string $wareDetail
     * 商品明细（参数结构为JSON数组。数组中一个{}为一件商品完整信息，多件商品以,分隔向后追加，参省略号部分）
     * Required: true
     * Example Value: [{“jdGoodsSku”:“京东商品SKU”,“vendorDocNo”:“厂家单据号”},{...},...]
     */
    private $wareDetail;

    /**
     * @param string $wareDetail
     * 商品明细（参数结构为JSON数组。数组中一个{}为一件商品完整信息，多件商品以,分隔向后追加，参省略号部分）
     * Example Value: [{“jdGoodsSku”:“京东商品SKU”,“vendorDocNo”:“厂家单据号”},{...},...]
     */
    public function setWareDetail($wareDetail)
    {
        $this->wareDetail             = $wareDetail;
        $this->apiParas["war_det"]  = $wareDetail;
    }

    public function getWareDetail()
    {
        return $this->wareDetail;
    }

}