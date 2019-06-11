<?php

namespace Lostinfo\JosOpenApi\request;

/**
 *  删除商品细节图
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=913&apiName=jingdong.ept.warecenter.wareimg.delete
 * Class EptWarecenterWareimgDelete
 * @package Jd\request
 */
class EptWarecenterWareimgDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.warecenter.wareimg.delete";
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
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
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
     * @param int $index
     * 图片索引
     * Required: true
     * Example Value: 
     */
    private $index;

    /**
     * @param int $index
     * 图片索引
     * Example Value: 
     */
    public function setIndex($index)
    {
        $this->index             = $index;
        $this->apiParas["index"]  = $index;
    }

    public function getIndex()
    {
        return $this->index;
    }

}