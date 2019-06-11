<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询广告词申请列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1161&apiName=jingdong.vc.item.advertise.applies.find
 * Class VcItemAdvertiseAppliesFind
 * @package Jd\request
 */
class VcItemAdvertiseAppliesFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.advertise.applies.find";
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
     * @param string $wid
     * 商品编号
     * Required: false
     * Example Value: 2677015
     */
    private $wid;

    /**
     * @param string $wid
     * 商品编号
     * Example Value: 2677015
     */
    public function setWid($wid)
    {
        $this->wid             = $wid;
        $this->apiParas["ware_id"]  = $wid;
    }

    public function getWid()
    {
        return $this->wid;
    }

    /**
     * @param string $cid3
     * 三级分类
     * Required: false
     * Example Value: 672
     */
    private $cid3;

    /**
     * @param string $cid3
     * 三级分类
     * Example Value: 672
     */
    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["category"]  = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

    /**
     * @param string $name
     * 商品名
     * Required: false
     * Example Value: 商品名称样例
     */
    private $name;

    /**
     * @param string $name
     * 商品名
     * Example Value: 商品名称样例
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["product_name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $brandId
     * 品牌id
     * Required: false
     * Example Value: 15127
     */
    private $brandId;

    /**
     * @param string $brandId
     * 品牌id
     * Example Value: 15127
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $beginApplyTime
     * 申请开始时间（精确到天）
     * Required: false
     * Example Value: 2015-7-22 00:00:00
     */
    private $beginApplyTime;

    /**
     * @param string $beginApplyTime
     * 申请开始时间（精确到天）
     * Example Value: 2015-7-22 00:00:00
     */
    public function setBeginApplyTime($beginApplyTime)
    {
        $this->beginApplyTime             = $beginApplyTime;
        $this->apiParas["begin_apply_time"]  = $beginApplyTime;
    }

    public function getBeginApplyTime()
    {
        return $this->beginApplyTime;
    }

    /**
     * @param string $endApplyTime
     * 申请结束时间（精确到天）
     * Required: false
     * Example Value: 2015-7-22 00:00:00
     */
    private $endApplyTime;

    /**
     * @param string $endApplyTime
     * 申请结束时间（精确到天）
     * Example Value: 2015-7-22 00:00:00
     */
    public function setEndApplyTime($endApplyTime)
    {
        $this->endApplyTime             = $endApplyTime;
        $this->apiParas["end_apply_time"]  = $endApplyTime;
    }

    public function getEndApplyTime()
    {
        return $this->endApplyTime;
    }

    /**
     * @param int $state
     * 状态(302:待审 303:驳回 304:通过)
     * Required: false
     * Example Value: 302
     */
    private $state;

    /**
     * @param int $state
     * 状态(302:待审 303:驳回 304:通过)
     * Example Value: 302
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
     * @param int $offset
     * 记录起始值（相对于总条目的偏移，从0开始）
     * Required: true
     * Example Value: 0
     */
    private $offset;

    /**
     * @param int $offset
     * 记录起始值（相对于总条目的偏移，从0开始）
     * Example Value: 0
     */
    public function setOffset($offset)
    {
        $this->offset             = $offset;
        $this->apiParas["offset"]  = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $pageSize
     * 每次获取记录数
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每次获取记录数
     * Example Value: 10
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}