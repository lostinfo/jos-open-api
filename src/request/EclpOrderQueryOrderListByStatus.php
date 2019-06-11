<?php

namespca Lostinfo\JosOpenApi;

/**
 * 客户订单按状态查询接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1420&apiName=jingdong.eclp.order.queryOrderListByStatus
 * Class EclpOrderQueryOrderListByStatus
 * @package Jd\request
 */
class EclpOrderQueryOrderListByStatus
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderListByStatus";
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
     * @param string $deptNo
     * ECLP事业部编号
     * Required: true
     * Example Value: EBU00000000001
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * ECLP事业部编号
     * Example Value: EBU00000000001
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param int $soStatus
     * 订单状态
     * Required: true
     * Example Value: 10010
     */
    private $soStatus;

    /**
     * @param int $soStatus
     * 订单状态
     * Example Value: 10010
     */
    public function setSoStatus($soStatus)
    {
        $this->soStatus             = $soStatus;
        $this->apiParas["soStatus"]  = $soStatus;
    }

    public function getSoStatus()
    {
        return $this->soStatus;
    }

    /**
     * @param int $pageNo
     * 页码数，pageNo=1表示第1页
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码数，pageNo=1表示第1页
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     * 返回每页记录数
     * Required: true
     * Example Value: 8
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 返回每页记录数
     * Example Value: 8
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
     * @param string $startDate
     * 查询开始时间，格式为：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-06-18 08:00:00
     */
    private $startDate;

    /**
     * @param string $startDate
     * 查询开始时间，格式为：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-06-18 08:00:00
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
     * @param string $endDate
     * 查询结束时间，格式为：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-06-18 10:00:00
     */
    private $endDate;

    /**
     * @param string $endDate
     * 查询结束时间，格式为：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-06-18 10:00:00
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
     * @param string $billType
     * 单据类型(物流云专用),枚举值：1-中小件；2-大件
     * Required: false
     * Example Value: 
     */
    private $billType;

    /**
     * @param string $billType
     * 单据类型(物流云专用),枚举值：1-中小件；2-大件
     * Example Value: 
     */
    public function setBillType($billType)
    {
        $this->billType             = $billType;
        $this->apiParas["billType"]  = $billType;
    }

    public function getBillType()
    {
        return $this->billType;
    }

}