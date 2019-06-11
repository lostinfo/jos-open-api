<?php

namespace JD\request;

/**
 * 退款审核单列表查询
 * 退款API-提供退款审核列表、退款审核详情功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=71&apiId=925&apiName=jingdong.pop.afs.soa.refundapply.queryPageList
 * Class PopAfsSoaRefundapplyQueryPageList
 * @package Jd\request
 */
class PopAfsSoaRefundapplyQueryPageList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.afs.soa.refundapply.queryPageList";
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
     * @param String $ids
     * 批量传入退款单id，格式为'id,id'，传入id数不能超过pageSize
     * Required: false
     * Example Value: 1,1
     */
    private $ids;

    /**
     * @param String $ids
     * 批量传入退款单id，格式为'id,id'，传入id数不能超过pageSize
     * Example Value: 1,1
     */
    public function setIds($ids)
    {
        $this->ids             = $ids;
        $this->apiParas["ids"]  = $ids;
    }

    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param Number $status
     * 退款申请单状态 0、未审核 1、审核通过；2、审核不通过 ；3、京东财务审核通过（退款成功）； 4、京东财务审核不通过 （退款失败）；5、人工审核通过 6、拦截并退款 7、青龙拦截成功 8、青龙拦截失败 9、强制关单并退款 10、物流待跟进  11、用户撤销。不传是查询全部状态
     * Required: false
     * Example Value: 0
     */
    private $status;

    /**
     * @param Number $status
     * 退款申请单状态 0、未审核 1、审核通过；2、审核不通过 ；3、京东财务审核通过（退款成功）； 4、京东财务审核不通过 （退款失败）；5、人工审核通过 6、拦截并退款 7、青龙拦截成功 8、青龙拦截失败 9、强制关单并退款 10、物流待跟进  11、用户撤销。不传是查询全部状态
     * Example Value: 0
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $orderId
     * 订单id
     * Required: false
     * Example Value: 123
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单id
     * Example Value: 123
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $buyerId
     * 客户帐号
     * Required: false
     * Example Value: aaa
     */
    private $buyerId;

    /**
     * @param String $buyerId
     * 客户帐号
     * Example Value: aaa
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId             = $buyerId;
        $this->apiParas["buyerId"]  = $buyerId;
    }

    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * @param String $buyerName
     * 客户姓名
     * Required: false
     * Example Value: aaa
     */
    private $buyerName;

    /**
     * @param String $buyerName
     * 客户姓名
     * Example Value: aaa
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName             = $buyerName;
        $this->apiParas["buyerName"]  = $buyerName;
    }

    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * @param String $applyTimeStart
     * 申请日期（start）格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Required: false
     * Example Value: 2013-08-06 21:02:07
     */
    private $applyTimeStart;

    /**
     * @param String $applyTimeStart
     * 申请日期（start）格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Example Value: 2013-08-06 21:02:07
     */
    public function setApplyTimeStart($applyTimeStart)
    {
        $this->applyTimeStart             = $applyTimeStart;
        $this->apiParas["applyTimeStart"]  = $applyTimeStart;
    }

    public function getApplyTimeStart()
    {
        return $this->applyTimeStart;
    }

    /**
     * @param String $applyTimeEnd
     * 申请日期（end）格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Required: false
     * Example Value: 2013-08-06 21:02:07
     */
    private $applyTimeEnd;

    /**
     * @param String $applyTimeEnd
     * 申请日期（end）格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Example Value: 2013-08-06 21:02:07
     */
    public function setApplyTimeEnd($applyTimeEnd)
    {
        $this->applyTimeEnd             = $applyTimeEnd;
        $this->apiParas["applyTimeEnd"]  = $applyTimeEnd;
    }

    public function getApplyTimeEnd()
    {
        return $this->applyTimeEnd;
    }

    /**
     * @param String $checkTimeStart
     * 审核日期(start) 格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Required: false
     * Example Value: 2013-08-06 21:02:07
     */
    private $checkTimeStart;

    /**
     * @param String $checkTimeStart
     * 审核日期(start) 格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Example Value: 2013-08-06 21:02:07
     */
    public function setCheckTimeStart($checkTimeStart)
    {
        $this->checkTimeStart             = $checkTimeStart;
        $this->apiParas["checkTimeStart"]  = $checkTimeStart;
    }

    public function getCheckTimeStart()
    {
        return $this->checkTimeStart;
    }

    /**
     * @param String $checkTimeEnd
     * 审核日期(END) 格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Required: false
     * Example Value: 2013-08-06 21:02:07
     */
    private $checkTimeEnd;

    /**
     * @param String $checkTimeEnd
     * 审核日期(END) 格式类型（yyyy-MM-dd hh:mm:ss,2013-08-06 21:02:07）
     * Example Value: 2013-08-06 21:02:07
     */
    public function setCheckTimeEnd($checkTimeEnd)
    {
        $this->checkTimeEnd             = $checkTimeEnd;
        $this->apiParas["checkTimeEnd"]  = $checkTimeEnd;
    }

    public function getCheckTimeEnd()
    {
        return $this->checkTimeEnd;
    }

    /**
     * @param Number $pageIndex
     * 页码(显示多少页，区间为1-100)
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页码(显示多少页，区间为1-100)
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $pageSize
     * 每页显示多少条（区间为1-50）
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页显示多少条（区间为1-50）
     * Example Value: 20
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}