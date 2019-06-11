<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询申请列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1156&apiName=jingdong.vc.item.attr.applies.find
 * Class VcItemAttrAppliesFind
 * @package Jd\request
 */
class VcItemAttrAppliesFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.attr.applies.find";
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
     * @param string $wareGroupId
     * 分组编号
     * Required: false
     * Example Value: 2677015
     */
    private $wareGroupId;

    /**
     * @param string $wareGroupId
     * 分组编号
     * Example Value: 2677015
     */
    public function setWareGroupId($wareGroupId)
    {
        $this->wareGroupId             = $wareGroupId;
        $this->apiParas["ware_group_id"]  = $wareGroupId;
    }

    public function getWareGroupId()
    {
        return $this->wareGroupId;
    }

    /**
     * @param int $cid3
     * 三级分类
     * Required: false
     * Example Value: 672
     */
    private $cid3;

    /**
     * @param int $cid3
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
     * @param string $beginApplyTime
     * 开始时间(精确到天)
     * Required: false
     * Example Value: 2015-7-22 00:00:00
     */
    private $beginApplyTime;

    /**
     * @param string $beginApplyTime
     * 开始时间(精确到天)
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
     * 结束时间(精确到天)
     * Required: false
     * Example Value: 2015-7-22 00:00:00
     */
    private $endApplyTime;

    /**
     * @param string $endApplyTime
     * 结束时间(精确到天)
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
     * 申请状态(302:待采销审 303:采销驳回 306:待上柜员审核 307:上柜员驳回 304:通过)
     * Required: false
     * Example Value: 302
     */
    private $state;

    /**
     * @param int $state
     * 申请状态(302:待采销审 303:采销驳回 306:待上柜员审核 307:上柜员驳回 304:通过)
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
     * @param string $publicName
     * 公共名
     * Required: false
     * Example Value: 公共名样例
     */
    private $publicName;

    /**
     * @param string $publicName
     * 公共名
     * Example Value: 公共名样例
     */
    public function setPublicName($publicName)
    {
        $this->publicName             = $publicName;
        $this->apiParas["public_name"]  = $publicName;
    }

    public function getPublicName()
    {
        return $this->publicName;
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