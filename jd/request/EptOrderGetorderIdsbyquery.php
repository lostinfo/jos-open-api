<?php

namespace JD\request;

/**
 * 根据查询条件查询订单ID列表
 * EPT全球售API-EPT全球售业务，开放订单查询、发货、商品查询、新增商品、修改商品等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=137&apiId=892&apiName=jingdong.ept.order.getorderIdsbyquery
 * Class EptOrderGetorderIdsbyquery
 * @package Jd\request
 */
class EptOrderGetorderIdsbyquery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ept.order.getorderIdsbyquery";
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
     * @param Number $orderStatus
     * 订单状态 4已付款,等待发货 5已发货6已完成 99取消
     * Required: false
     * Example Value: 
     */
    private $orderStatus;

    /**
     * @param Number $orderStatus
     * 订单状态 4已付款,等待发货 5已发货6已完成 99取消
     * Example Value: 
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["orderStatus"]  = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param Number $locked
     * 订单锁定状态 1 未锁定 2 锁定 
     * Required: false
     * Example Value: 
     */
    private $locked;

    /**
     * @param Number $locked
     * 订单锁定状态 1 未锁定 2 锁定 
     * Example Value: 
     */
    public function setLocked($locked)
    {
        $this->locked             = $locked;
        $this->apiParas["locked"]  = $locked;
    }

    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param Number $disputed
     * 订单纠纷状态 1 无 2 有
     * Required: false
     * Example Value: 
     */
    private $disputed;

    /**
     * @param Number $disputed
     * 订单纠纷状态 1 无 2 有
     * Example Value: 
     */
    public function setDisputed($disputed)
    {
        $this->disputed             = $disputed;
        $this->apiParas["disputed"]  = $disputed;
    }

    public function getDisputed()
    {
        return $this->disputed;
    }

    /**
     * @param String $bookTimeBegin
     * 下单时间开始
     * Required: false
     * Example Value: 
     */
    private $bookTimeBegin;

    /**
     * @param String $bookTimeBegin
     * 下单时间开始
     * Example Value: 
     */
    public function setBookTimeBegin($bookTimeBegin)
    {
        $this->bookTimeBegin             = $bookTimeBegin;
        $this->apiParas["bookTimeBegin"]  = $bookTimeBegin;
    }

    public function getBookTimeBegin()
    {
        return $this->bookTimeBegin;
    }

    /**
     * @param String $bookTimeEnd
     * 下单时间结束
     * Required: false
     * Example Value: 
     */
    private $bookTimeEnd;

    /**
     * @param String $bookTimeEnd
     * 下单时间结束
     * Example Value: 
     */
    public function setBookTimeEnd($bookTimeEnd)
    {
        $this->bookTimeEnd             = $bookTimeEnd;
        $this->apiParas["bookTimeEnd"]  = $bookTimeEnd;
    }

    public function getBookTimeEnd()
    {
        return $this->bookTimeEnd;
    }

    /**
     * @param String $userPin
     * 下单用户
     * Required: false
     * Example Value: 
     */
    private $userPin;

    /**
     * @param String $userPin
     * 下单用户
     * Example Value: 
     */
    public function setUserPin($userPin)
    {
        $this->userPin             = $userPin;
        $this->apiParas["userPin"]  = $userPin;
    }

    public function getUserPin()
    {
        return $this->userPin;
    }

    /**
     * @param Number $startRow
     * 起始行数。startRow=0，返回第一页；startRow=20，返回第二页数据（默认每页返回20条数据）
     * Required: false
     * Example Value: 
     */
    private $startRow;

    /**
     * @param Number $startRow
     * 起始行数。startRow=0，返回第一页；startRow=20，返回第二页数据（默认每页返回20条数据）
     * Example Value: 
     */
    public function setStartRow($startRow)
    {
        $this->startRow             = $startRow;
        $this->apiParas["startRow"]  = $startRow;
    }

    public function getStartRow()
    {
        return $this->startRow;
    }

}