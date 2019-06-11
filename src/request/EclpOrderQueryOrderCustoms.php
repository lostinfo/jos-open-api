<?php

namespca Lostinfo\JosOpenApi;

/**
 * 赤道独立站查询服务
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2217&apiName=jingdong.eclp.order.queryOrderCustoms
 * Class EclpOrderQueryOrderCustoms
 * @package Jd\request
 */
class EclpOrderQueryOrderCustoms
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderCustoms";
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
     * Required: true
     * Example Value: EBU0000000005922
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号
     * Example Value: EBU0000000005922
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
     * @param string $isvUUID
     * isv出库单号
     * Required: false
     * Example Value: 3056005761212
     */
    private $isvUUID;

    /**
     * @param string $isvUUID
     * isv出库单号
     * Example Value: 3056005761212
     */
    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID             = $isvUUID;
        $this->apiParas["isvUUID"]  = $isvUUID;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    /**
     * @param int $pageNo
     * 页码
     * Required: false
     * Example Value: 1，(默认值:1)
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码
     * Example Value: 1，(默认值:1)
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
     * 每页记录数
     * Required: true
     * Example Value: 10，(默认值:4000)
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数
     * Example Value: 10，(默认值:4000)
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
     * 起始时间
     * Required: true
     * Example Value: 2018-10-10 10:10:10
     */
    private $startDate;

    /**
     * @param string $startDate
     * 起始时间
     * Example Value: 2018-10-10 10:10:10
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
     * 结束时间
     * Required: true
     * Example Value: 2018-10-10 10:10:10
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束时间
     * Example Value: 2018-10-10 10:10:10
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

}