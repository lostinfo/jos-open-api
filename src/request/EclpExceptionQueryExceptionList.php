<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * JOS开放商家查询异常订单信息接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3239&apiName=jingdong.eclp.exception.queryExceptionList
 * Class EclpExceptionQueryExceptionList
 * @package Jd\request
 */
class EclpExceptionQueryExceptionList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.exception.queryExceptionList";
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
     * 事业部编号
     * Required: false
     * Example Value: EBU0000000005159
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号
     * Example Value: EBU0000000005159
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
     * @param string[] $orderNos
     * ECLP单号
     * Required: false
     * Example Value: [ESL4418639118766,ESL4418644480336]
     */
    private $orderNos;

    /**
     * @param string[] $orderNos
     * ECLP单号
     * Example Value: [ESL4418639118766,ESL4418644480336]
     */
    public function setOrderNos($orderNos)
    {
        $this->orderNos             = $orderNos;
        $this->apiParas["orderNos"]  = $orderNos;
    }

    public function getOrderNos()
    {
        return $this->orderNos;
    }

    /**
     * @param string[] $isvOrderNos
     * 商家单号
     * Required: false
     * Example Value: [83990866788,83704637249]
     */
    private $isvOrderNos;

    /**
     * @param string[] $isvOrderNos
     * 商家单号
     * Example Value: [83990866788,83704637249]
     */
    public function setIsvOrderNos($isvOrderNos)
    {
        $this->isvOrderNos             = $isvOrderNos;
        $this->apiParas["isvOrderNos"]  = $isvOrderNos;
    }

    public function getIsvOrderNos()
    {
        return $this->isvOrderNos;
    }

    /**
     * @param string $orderType
     * 单据类型
     * Required: true
     * Example Value: 1
     */
    private $orderType;

    /**
     * @param string $orderType
     * 单据类型
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
     * @param string $bizType
     * 单据阶段
     * Required: false
     * Example Value: 2
     */
    private $bizType;

    /**
     * @param string $bizType
     * 单据阶段
     * Example Value: 2
     */
    public function setBizType($bizType)
    {
        $this->bizType             = $bizType;
        $this->apiParas["bizType"]  = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    /**
     * @param string $createTimeStart
     * 京东接单起始时间
     * Required: false
     * Example Value: 2018-12-25
     */
    private $createTimeStart;

    /**
     * @param string $createTimeStart
     * 京东接单起始时间
     * Example Value: 2018-12-25
     */
    public function setCreateTimeStart($createTimeStart)
    {
        $this->createTimeStart             = $createTimeStart;
        $this->apiParas["createTimeStart"]  = $createTimeStart;
    }

    public function getCreateTimeStart()
    {
        return $this->createTimeStart;
    }

    /**
     * @param string $createTimeEnd
     * 京东接单终止时间
     * Required: false
     * Example Value: 2018-12-29
     */
    private $createTimeEnd;

    /**
     * @param string $createTimeEnd
     * 京东接单终止时间
     * Example Value: 2018-12-29
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["createTimeEnd"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

    /**
     * @param int $pageNo
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码
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
     * 每页条数
     * Required: false
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页条数
     * Example Value: 10
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