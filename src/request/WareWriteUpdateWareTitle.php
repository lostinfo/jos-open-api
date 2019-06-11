<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改商品名称
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1249&apiName=jingdong.ware.write.updateWareTitle
 * Class WareWriteUpdateWareTitle
 * @package Jd\request
 */
class WareWriteUpdateWareTitle
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.updateWareTitle";
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
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
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

    /**
     * @param string $title
     * 商品标题
     * Required: true
     * Example Value: 商品标题
     */
    private $title;

    /**
     * @param string $title
     * 商品标题
     * Example Value: 商品标题
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

}