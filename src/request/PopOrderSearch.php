<?php

namespace JD\request;

/**
 * 根据条件检索订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=1566&apiName=jingdong.pop.order.search
 * Class PopOrderSearch
 * @package Jd\request
 */
class PopOrderSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.search";
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
     * 以订单创建时间检索。 WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为空（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必传（开始时间和结束时间，不得相差超过1个月。）
     * Required: false
     * Example Value: 2018-11-14 10:00:00
     */
    private $startDate;

    /**
     * @param String $startDate
     * 以订单创建时间检索。 WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为空（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必传（开始时间和结束时间，不得相差超过1个月。）
     * Example Value: 2018-11-14 10:00:00
     */
    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["start_date"]  = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param String $endDate
     * 以订单创建时间检索。WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为空（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必传（开始时间和结束时间，不得相差超过1个月。） 
     * Required: false
     * Example Value: 2018-11-22 12:00:00
     */
    private $endDate;

    /**
     * @param String $endDate
     * 以订单创建时间检索。WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为空（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必传（开始时间和结束时间，不得相差超过1个月。） 
     * Example Value: 2018-11-22 12:00:00
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param String $orderState
     * 多订单状态可以用英文逗号隔开,请不要使用数字，请用英文逗号拼接英文状态传递给jos系统。 1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为“等待境内发货”标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金 可传此状态。
     * Required: true
     * Example Value: TRADE_CANCELED
     */
    private $orderState;

    /**
     * @param String $orderState
     * 多订单状态可以用英文逗号隔开,请不要使用数字，请用英文逗号拼接英文状态传递给jos系统。 1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为“等待境内发货”标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金 可传此状态。
     * Example Value: TRADE_CANCELED
     */
    public function setOrderState($orderState)
    {
        $this->orderState             = $orderState;
        $this->apiParas["order_state"]  = $orderState;
    }

    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param String $optionalFields
     * 需返回的字段列表。必填，不填或者为空则请求被拒绝。请参考返回结果集中的对象参数描述：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Required: true
     * Example Value: itemInfoList,orderId,isShipmenttype,scDT,idSopShipmenttype,orderStartTime
     */
    private $optionalFields;

    /**
     * @param String $optionalFields
     * 需返回的字段列表。必填，不填或者为空则请求被拒绝。请参考返回结果集中的对象参数描述：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Example Value: itemInfoList,orderId,isShipmenttype,scDT,idSopShipmenttype,orderStartTime
     */
    public function setOptionalFields($optionalFields)
    {
        $this->optionalFields             = $optionalFields;
        $this->apiParas["optional_fields"]  = $optionalFields;
    }

    public function getOptionalFields()
    {
        return $this->optionalFields;
    }

    /**
     * @param String $page
     * 查询的页数。此处建议通过时间滚动的方式拉取订单，页数要尽量少；如果您之前频繁的翻页，页数较大，请尽快调整为时间滚动方式。
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param String $page
     * 查询的页数。此处建议通过时间滚动的方式拉取订单，页数要尽量少；如果您之前频繁的翻页，页数较大，请尽快调整为时间滚动方式。
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
     *  每页的条数（最大page_size 100条）
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param String $pageSize
     *  每页的条数（最大page_size 100条）
     * Example Value: 20
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

    /**
     * @param Number $sortType
     * 排序方式，默认升序,1是降序,其它数字都是升序 
     * Required: false
     * Example Value: 1
     */
    private $sortType;

    /**
     * @param Number $sortType
     * 排序方式，默认升序,1是降序,其它数字都是升序 
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
     * 查询时间类型，0按修改时间查询，1为按订单创建时间查询；其它数字同0，也按订单修改（订单状态、修改运单号）修改时间 
     * Required: false
     * Example Value: 0
     */
    private $dateType;

    /**
     * @param Number $dateType
     * 查询时间类型，0按修改时间查询，1为按订单创建时间查询；其它数字同0，也按订单修改（订单状态、修改运单号）修改时间 
     * Example Value: 0
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

}