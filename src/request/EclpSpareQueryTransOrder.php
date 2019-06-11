<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询流转单接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2922&apiName=jingdong.eclp.spare.queryTransOrder
 * Class EclpSpareQueryTransOrder
 * @package Jd\request
 */
class EclpSpareQueryTransOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.spare.queryTransOrder";
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
     * @param string $deptName
     * 事业部名称；最大长度100
     * Required: false
     * Example Value: 第六事业部
     */
    private $deptName;

    /**
     * @param string $deptName
     * 事业部名称；最大长度100
     * Example Value: 第六事业部
     */
    public function setDeptName($deptName)
    {
        $this->deptName             = $deptName;
        $this->apiParas["deptName"]  = $deptName;
    }

    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * @param int $orderType
     * 单据类型；枚举1：中小件，2：大件；最大长度1
     * Required: true
     * Example Value: 1
     */
    private $orderType;

    /**
     * @param int $orderType
     * 单据类型；枚举1：中小件，2：大件；最大长度1
     * Example Value: 1
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param string $destWarehouseNo
     * 目的库房编号；最大长度50
     * Required: false
     * Example Value: 21
     */
    private $destWarehouseNo;

    /**
     * @param string $destWarehouseNo
     * 目的库房编号；最大长度50
     * Example Value: 21
     */
    public function setDestWarehouseNo($destWarehouseNo)
    {
        $this->destWarehouseNo             = $destWarehouseNo;
        $this->apiParas["destWarehouseNo"]  = $destWarehouseNo;
    }

    public function getDestWarehouseNo()
    {
        return $this->destWarehouseNo;
    }

    /**
     * @param string $sellerName
     * 商家名称；最大长度100
     * Required: false
     * Example Value: 靖哥哥测试
     */
    private $sellerName;

    /**
     * @param string $sellerName
     * 商家名称；最大长度100
     * Example Value: 靖哥哥测试
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName             = $sellerName;
        $this->apiParas["sellerName"]  = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param string $sellerNo
     * 商家编号；最大长度50
     * Required: true
     * Example Value: ECP0000000000009
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * 商家编号；最大长度50
     * Example Value: ECP0000000000009
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param int $pageSize
     * 每页数量
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页数量
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

    /**
     * @param string $startTime
     * 创建开始时间；格式yyyy-MM-dd HH:mm:ss；最大长度20
     * Required: false
     * Example Value: 2017-07-10 18:19:45
     */
    private $startTime;

    /**
     * @param string $startTime
     * 创建开始时间；格式yyyy-MM-dd HH:mm:ss；最大长度20
     * Example Value: 2017-07-10 18:19:45
     */
    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"]  = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $startWarehouseNo
     * 起始库房编号；最大长度50
     * Required: false
     * Example Value: 65
     */
    private $startWarehouseNo;

    /**
     * @param string $startWarehouseNo
     * 起始库房编号；最大长度50
     * Example Value: 65
     */
    public function setStartWarehouseNo($startWarehouseNo)
    {
        $this->startWarehouseNo             = $startWarehouseNo;
        $this->apiParas["startWarehouseNo"]  = $startWarehouseNo;
    }

    public function getStartWarehouseNo()
    {
        return $this->startWarehouseNo;
    }

    /**
     * @param string $endTime
     * 创建结束时间；格式yyyy-MM-dd HH:mm:ss；最大长度20
     * Required: false
     * Example Value: 2017-07-11 18:19:45
     */
    private $endTime;

    /**
     * @param string $endTime
     * 创建结束时间；格式yyyy-MM-dd HH:mm:ss；最大长度20
     * Example Value: 2017-07-11 18:19:45
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int $type
     * 操作类型
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param int $type
     * 操作类型
     * Example Value: 1
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $pageNum
     * 页码
     * Required: true
     * Example Value: 1
     */
    private $pageNum;

    /**
     * @param int $pageNum
     * 页码
     * Example Value: 1
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param string $deptNo
     * 事业部编号；最大长度50
     * Required: true
     * Example Value: EBU0000000000231
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号；最大长度50
     * Example Value: EBU0000000000231
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

}