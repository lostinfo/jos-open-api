<?php

namespace JD\request;

/**
 * 修改商品主图
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=891&apiName=jingdong.ept.warecenter.wareimg.update
 * Class EptWarecenterWareimgUpdate
 * @package Jd\request
 */
class EptWarecenterWareimgUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.wareimg.update";
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
     * 商品编号
     * Required: true
     * Example Value: 
     */
    private $wareId;

    /**
     * @param Number $wareId
     * 商品编号
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

    /**
     * @param byte[] $img
     * 图片信息
     * Required: true
     * Example Value: 
     */
    private $img;

    /**
     * @param byte[] $img
     * 图片信息
     * Example Value: 
     */
    public function setImg($img)
    {
        $this->img             = $img;
        $this->apiParas["img"]  = $img;
    }

    public function getImg()
    {
        return $this->img;
    }

}