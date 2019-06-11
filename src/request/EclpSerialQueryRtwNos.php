<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量查询退货入库单号
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1964&apiName=jingdong.eclp.serial.queryRtwNos
 * Class EclpSerialQueryRtwNos
 * @package Jd\request
 */
class EclpSerialQueryRtwNos
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.queryRtwNos";
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
     * 事业部编号，格式：EBU开头，最大长度：20
     * Required: true
     * Example Value: EBUXXXXXXXXXXXXX
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号，格式：EBU开头，最大长度：20
     * Example Value: EBUXXXXXXXXXXXXX
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
     * @param string $status
     * 退货入库单状态，0:新建；100:初始；200:已完成；400：取消成功；500:超期拒收；600:整单拒收；700:已反馈商家，最大长度：11
     * Required: true
     * Example Value: 100
     */
    private $status;

    /**
     * @param string $status
     * 退货入库单状态，0:新建；100:初始；200:已完成；400：取消成功；500:超期拒收；600:整单拒收；700:已反馈商家，最大长度：11
     * Example Value: 100
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
     * @param string $startDate
     * 开始时间，格式：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-01-01 00:00:00
     */
    private $startDate;

    /**
     * @param string $startDate
     * 开始时间，格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-01-01 00:00:00
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
     * 结束时间，格式：yyyy-MM-dd HH:mm:ss
     * Required: true
     * Example Value: 2018-01-02 00:00:00
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束时间，格式：yyyy-MM-dd HH:mm:ss
     * Example Value: 2018-01-02 00:00:00
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
     * @param string $pageStart
     * 开始页数，最大长度：11
     * Required: true
     * Example Value: 1
     */
    private $pageStart;

    /**
     * @param string $pageStart
     * 开始页数，最大长度：11
     * Example Value: 1
     */
    public function setPageStart($pageStart)
    {
        $this->pageStart             = $pageStart;
        $this->apiParas["pageStart"]  = $pageStart;
    }

    public function getPageStart()
    {
        return $this->pageStart;
    }

    /**
     * @param string $pageSize
     * 每页显示记录数，最大长度：11
     * Required: true
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param string $pageSize
     * 每页显示记录数，最大长度：11
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

}