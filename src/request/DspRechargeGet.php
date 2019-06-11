<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询.通用.充值记录
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=869&apiName=jingdong.dsp.recharge.get
 * Class DspRechargeGet
 * @package Jd\request
 */
class DspRechargeGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.recharge.get";
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
     * @param string $beginDate
     * 开始时间
     * Required: false
     * Example Value: 
     */
    private $beginDate;

    /**
     * @param string $beginDate
     * 开始时间
     * Example Value: 
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate             = $beginDate;
        $this->apiParas["beginDate"]  = $beginDate;
    }

    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param string $endDate
     * 结束时间
     * Required: false
     * Example Value: 
     */
    private $endDate;

    /**
     * @param string $endDate
     * 结束时间
     * Example Value: 
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
     * @param int $pageOffset
     * 页数
     * Required: false
     * Example Value: 
     */
    private $pageOffset;

    /**
     * @param int $pageOffset
     * 页数
     * Example Value: 
     */
    public function setPageOffset($pageOffset)
    {
        $this->pageOffset             = $pageOffset;
        $this->apiParas["pageOffset"]  = $pageOffset;
    }

    public function getPageOffset()
    {
        return $this->pageOffset;
    }

}