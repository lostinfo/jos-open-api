<?php

namespace JD\request;

/**
 * 提交预约
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1981&apiName=jingdong.edi.book.submit
 * Class EdiBookSubmit
 * @package Jd\request
 */
class EdiBookSubmit
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.book.submit";
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
     * @param String $bookDate
     * 预约送货日期
     * Required: true
     * Example Value: 
     */
    private $bookDate;

    /**
     * @param String $bookDate
     * 预约送货日期
     * Example Value: 
     */
    public function setBookDate($bookDate)
    {
        $this->bookDate             = $bookDate;
        $this->apiParas["bookDate"]  = $bookDate;
    }

    public function getBookDate()
    {
        return $this->bookDate;
    }

    /**
     * @param String $bookTimePeriod
     * 预约送货时间段
     * Required: true
     * Example Value: 
     */
    private $bookTimePeriod;

    /**
     * @param String $bookTimePeriod
     * 预约送货时间段
     * Example Value: 
     */
    public function setBookTimePeriod($bookTimePeriod)
    {
        $this->bookTimePeriod             = $bookTimePeriod;
        $this->apiParas["bookTimePeriod"]  = $bookTimePeriod;
    }

    public function getBookTimePeriod()
    {
        return $this->bookTimePeriod;
    }

    /**
     * @param Number $bookID
     * 预约业务编号
     * Required: true
     * Example Value: 
     */
    private $bookID;

    /**
     * @param Number $bookID
     * 预约业务编号
     * Example Value: 
     */
    public function setBookID($bookID)
    {
        $this->bookID             = $bookID;
        $this->apiParas["bookID"]  = $bookID;
    }

    public function getBookID()
    {
        return $this->bookID;
    }

}