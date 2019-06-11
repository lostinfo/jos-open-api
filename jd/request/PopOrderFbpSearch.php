<?php

namespace JD\request;

/**
 * 新接口fbp查询订单
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2159&apiName=jingdong.pop.order.fbp.search
 * Class PopOrderFbpSearch
 * @package Jd\request
 */
class PopOrderFbpSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.fbp.search";
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
     * @param String $startDate
     * FBP订单查询的结算时间(开始时间和结束时间，不得相差超过1个月。此时间针对订单修改的时间) 
     * Required: true
     * Example Value: 2018-11-14 10:00:00
     */
    private $startDate;

    /**
     * @param String $startDate
     * FBP订单查询的结算时间(开始时间和结束时间，不得相差超过1个月。此时间针对订单修改的时间) 
     * Example Value: 2018-11-14 10:00:00
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param String $endDate
     * FBP订单查询的开始时间(开始时间和结束时间，不得相差超过1个月。此时间针对订单修改的时间) 
     * Required: true
     * Example Value: 2018-11-22 10:00:00
     */
    private $endDate;

    /**
     * @param String $endDate
     * FBP订单查询的开始时间(开始时间和结束时间，不得相差超过1个月。此时间针对订单修改的时间) 
     * Example Value: 2018-11-22 10:00:00
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param String $orderState
     * 请用逗号拼接英文状态。1）DengDaiDaYin 等待打印 2）DengDaiChuKu 等待出库  3）DengDaiDaBao 等待打包 4）DengDaiFaHuo 等待发货 5）ZiTiTuZhong 自提途中 6）ShangMenTiHuo 上门提货 7）ZiTiTuiHuo 自提退货 8）DengDaiQueRenShouHuo 等待确认收货 9）PeiSongTuiHuo 货到付款退货 10）HuoDaoFuKuanQueRen 货到付款确认（暂无了） 11）WanCheng 完成 12）DengDaiFenQiFuKuan 等待分期付款（暂无了） 13）ServiceFinished 收款确认(服务完成) 14）SuoDing 锁定 15）DengDaiTuiKuan 等待退款
     * Required: true
     * Example Value: TRADE_CANCELED
     */
    private $orderState;

    /**
     * @param String $orderState
     * 请用逗号拼接英文状态。1）DengDaiDaYin 等待打印 2）DengDaiChuKu 等待出库  3）DengDaiDaBao 等待打包 4）DengDaiFaHuo 等待发货 5）ZiTiTuZhong 自提途中 6）ShangMenTiHuo 上门提货 7）ZiTiTuiHuo 自提退货 8）DengDaiQueRenShouHuo 等待确认收货 9）PeiSongTuiHuo 货到付款退货 10）HuoDaoFuKuanQueRen 货到付款确认（暂无了） 11）WanCheng 完成 12）DengDaiFenQiFuKuan 等待分期付款（暂无了） 13）ServiceFinished 收款确认(服务完成) 14）SuoDing 锁定 15）DengDaiTuiKuan 等待退款
     * Example Value: TRADE_CANCELED
     */
    public function setOrderState($orderState)
    {
        $this->orderState             = $orderState;
        $this->apiParas["orderState"]  = $orderState;
    }

    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param String $page
     * 查询的页数，取值范围:大于零的整数; 
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param String $page
     * 查询的页数，取值范围:大于零的整数; 
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
     * @param String $pageSize
     * 每页的条数（取值范围:大于零的整数，最大page_size 100条）
     * Required: true
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param String $pageSize
     * 每页的条数（取值范围:大于零的整数，最大page_size 100条）
     * Example Value: 100
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

    /**
     * @param Number $colType
     * 商家类型，FBP订单写1 
     * Required: true
     * Example Value: 1
     */
    private $colType;

    /**
     * @param Number $colType
     * 商家类型，FBP订单写1 
     * Example Value: 1
     */
    public function setColType($colType)
    {
        $this->colType             = $colType;
        $this->apiParas["colType"]  = $colType;
    }

    public function getColType()
    {
        return $this->colType;
    }

    /**
     * @param String $optionalFields
     * 商家希望返回的订单的信息字段, 可选值: OrderInfo数据结构中的以下字段:order_id,vender_id,pay_type等每个字段以逗号分隔 
     * Required: true
     * Example Value: venderId,orderType,orderState,mdbStoreId,salesPin,couponDetailList
     */
    private $optionalFields;

    /**
     * @param String $optionalFields
     * 商家希望返回的订单的信息字段, 可选值: OrderInfo数据结构中的以下字段:order_id,vender_id,pay_type等每个字段以逗号分隔 
     * Example Value: venderId,orderType,orderState,mdbStoreId,salesPin,couponDetailList
     */
    public function setOptionalFields($optionalFields)
    {
        $this->optionalFields             = $optionalFields;
        $this->apiParas["optionalFields"]  = $optionalFields;
    }

    public function getOptionalFields()
    {
        return $this->optionalFields;
    }

    /**
     * @param Number $orderId
     * 订单ID
     * Required: false
     * Example Value: 442424243
     */
    private $orderId;

    /**
     * @param Number $orderId
     * 订单ID
     * Example Value: 442424243
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
     * @param Number $sortType
     * 排序，默认升序,1是降序,其它数字都是升序 
     * Required: false
     * Example Value: 1
     */
    private $sortType;

    /**
     * @param Number $sortType
     * 排序，默认升序,1是降序,其它数字都是升序 
     * Example Value: 1
     */
    public function setSortType($sortType)
    {
        $this->sortType             = $sortType;
        $this->apiParas["sortType"]  = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * @param Number $dateType
     * 查询时间类型，默认按修改时间查询。 1为按订单创建时间查询；其它数字为按订单（订单状态、修改运单号）修改时间
     * Required: false
     * Example Value: 1
     */
    private $dateType;

    /**
     * @param Number $dateType
     * 查询时间类型，默认按修改时间查询。 1为按订单创建时间查询；其它数字为按订单（订单状态、修改运单号）修改时间
     * Example Value: 1
     */
    public function setDateType($dateType)
    {
        $this->dateType             = $dateType;
        $this->apiParas["dateType"]  = $dateType;
    }

    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * @param String $storeId
     * 仓库ID
     * Required: false
     * Example Value: 21
     */
    private $storeId;

    /**
     * @param String $storeId
     * 仓库ID
     * Example Value: 21
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param String $cky2
     * 配送中心
     * Required: false
     * Example Value: 1
     */
    private $cky2;

    /**
     * @param String $cky2
     * 配送中心
     * Example Value: 1
     */
    public function setCky2($cky2)
    {
        $this->cky2             = $cky2;
        $this->apiParas["cky2"]  = $cky2;
    }

    public function getCky2()
    {
        return $this->cky2;
    }

}