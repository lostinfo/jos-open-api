<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据条件检索订单信息
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2388&apiName=jingdong.pop.order.enSearch
 * Class PopOrderEnSearch
 * @package Jd\request
 */
class PopOrderEnSearch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.enSearch";
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
     * @param string $startDate
     *  WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为否（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必须为是（开始时间和结束时间，不得相差超过1个月。此时间仅针对订单状态及运单号修改的时间）
     * Required: false
     * Example Value: 
     */
    private $startDate;

    /**
     * @param string $startDate
     *  WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为否（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必须为是（开始时间和结束时间，不得相差超过1个月。此时间仅针对订单状态及运单号修改的时间）
     * Example Value: 
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
     * @param string $endDate
     * WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为否（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必须为是（开始时间和结束时间，不得相差超过1个月。此时间仅针对订单状态及运单号修改的时间） 
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * WAIT_SELLER_STOCK_OUT 等待出库，则start_date可以为否（开始时间和结束时间均为空，默认返回前一个月的订单），order_state为其他值，则start_date必须为是（开始时间和结束时间，不得相差超过1个月。此时间仅针对订单状态及运单号修改的时间） 
     * Example Value: 
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
     * @param string $orderState
     * 多订单状态可以用英文逗号隔开,请用英文逗号拼接英文状态传递给jos，而不是数字。 1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为'等待境内发货'标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金 可传此状态。
     * Required: true
     * Example Value: 
     */
    private $orderState;

    /**
     * @param string $orderState
     * 多订单状态可以用英文逗号隔开,请用英文逗号拼接英文状态传递给jos，而不是数字。 1）WAIT_SELLER_STOCK_OUT 等待出库 2）WAIT_GOODS_RECEIVE_CONFIRM 等待确认收货  3）WAIT_SELLER_DELIVERY等待发货（只适用于海外购商家，含义为'等待境内发货'标签下的订单,非海外购商家无需使用） 4) PAUSE 暂停（loc订单可通过此状态获取） 5）FINISHED_L 完成 6）TRADE_CANCELED 取消 7）LOCKED 已锁定 8）POP_ORDER_PAUSE pop业务暂停，如3c号卡/履约/黄金 可传此状态。
     * Example Value: 
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
     * @param string $optionalFields
     * 需返回的字段列表。可选值，请参考返回结果集中的对象参数描述：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Required: true
     * Example Value: 
     */
    private $optionalFields;

    /**
     * @param string $optionalFields
     * 需返回的字段列表。可选值，请参考返回结果集中的对象参数描述：orderInfo结构体中的所有字段；字段之间用,分隔 
     * Example Value: 
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
     * @param string $page
     * 查询的页数 
     * Required: true
     * Example Value: 
     */
    private $page;

    /**
     * @param string $page
     * 查询的页数 
     * Example Value: 
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
     * @param string $pageSize
     *  每页的条数（最大page_size 100条）
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param string $pageSize
     *  每页的条数（最大page_size 100条）
     * Example Value: 
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
     * @param int $sortType
     * 排序方式，默认升序,1是降序,其它数字都是升序 
     * Required: false
     * Example Value: 
     */
    private $sortType;

    /**
     * @param int $sortType
     * 排序方式，默认升序,1是降序,其它数字都是升序 
     * Example Value: 
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
     * @param int $dateType
     * 查询时间类型，默认按修改时间查询。 1为按订单创建时间查询；其它数字为按订单（订单状态、修改运单号）修改时间 
     * Required: false
     * Example Value: 
     */
    private $dateType;

    /**
     * @param int $dateType
     * 查询时间类型，默认按修改时间查询。 1为按订单创建时间查询；其它数字为按订单（订单状态、修改运单号）修改时间 
     * Example Value: 
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