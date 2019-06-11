<?php

namespace JD\request;

/**
 * 查询商品申请列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1673&apiName=jingdong.vc.item.product.applies.find
 * Class VcItemProductAppliesFind
 * @package Jd\request
 */
class VcItemProductAppliesFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.product.applies.find";
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
     * @param String $wareId
     * 商品编码
     * Required: false
     * Example Value: 20221
     */
    private $wareId;

    /**
     * @param String $wareId
     * 商品编码
     * Example Value: 20221
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param String $wareName
     * 商品名称
     * Required: false
     * Example Value: 京东电脑
     */
    private $wareName;

    /**
     * @param String $wareName
     * 商品名称
     * Example Value: 京东电脑
     */
    public function setWareName($wareName)
    {
        $this->wareName             = $wareName;
        $this->apiParas["ware_name"]  = $wareName;
    }

    public function getWareName()
    {
        return $this->wareName;
    }

    /**
     * @param Number $state
     * 状态:(302:待采销审核,304:待产品审核,306:审核通过,303:采销驳回,305:产品驳回,309:待经理审核,310:经理驳回,311:待总监审核,312:总监驳回,319:待质量管理部审核,320:质量管理部驳,321:待质量负责人审核,322:质量负责人驳回)
     * Required: false
     * Example Value: 306
     */
    private $state;

    /**
     * @param Number $state
     * 状态:(302:待采销审核,304:待产品审核,306:审核通过,303:采销驳回,305:产品驳回,309:待经理审核,310:经理驳回,311:待总监审核,312:总监驳回,319:待质量管理部审核,320:质量管理部驳,321:待质量负责人审核,322:质量负责人驳回)
     * Example Value: 306
     */
    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"]  = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    /**
     * @param String $beginTimeStr
     * 开始时间
     * Required: false
     * Example Value: 2015-11-15 23:59:59
     */
    private $beginTimeStr;

    /**
     * @param String $beginTimeStr
     * 开始时间
     * Example Value: 2015-11-15 23:59:59
     */
    public function setBeginTimeStr($beginTimeStr)
    {
        $this->beginTimeStr             = $beginTimeStr;
        $this->apiParas["begin_time"]  = $beginTimeStr;
    }

    public function getBeginTimeStr()
    {
        return $this->beginTimeStr;
    }

    /**
     * @param String $endTimeStr
     * 结束时间
     * Required: false
     * Example Value: 2015-11-15 23:59:59
     */
    private $endTimeStr;

    /**
     * @param String $endTimeStr
     * 结束时间
     * Example Value: 2015-11-15 23:59:59
     */
    public function setEndTimeStr($endTimeStr)
    {
        $this->endTimeStr             = $endTimeStr;
        $this->apiParas["end_time"]  = $endTimeStr;
    }

    public function getEndTimeStr()
    {
        return $this->endTimeStr;
    }

    /**
     * @param Number $page
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param Number $length
     * 步长
     * Required: false
     * Example Value: 10
     */
    private $length;

    /**
     * @param Number $length
     * 步长
     * Example Value: 10
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

}