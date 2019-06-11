<?php

namespca Lostinfo\JosOpenApi;

/**
 * 取消预约
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1982&apiName=jingdong.edi.book.cancel
 * Class EdiBookCancel
 * @package Jd\request
 */
class EdiBookCancel
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.book.cancel";
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
     * @param string $reason
     * 取消原因
     * Required: true
     * Example Value: 
     */
    private $reason;

    /**
     * @param string $reason
     * 取消原因
     * Example Value: 
     */
    public function setReason($reason)
    {
        $this->reason             = $reason;
        $this->apiParas["reason"]  = $reason;
    }

    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param int $bookID
     * 预约业务编号
     * Required: true
     * Example Value: 
     */
    private $bookID;

    /**
     * @param int $bookID
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

    /**
     * @param bool $isCancelAll
     * 是否是全部取消
     * Required: false
     * Example Value: 
     */
    private $isCancelAll;

    /**
     * @param bool $isCancelAll
     * 是否是全部取消
     * Example Value: 
     */
    public function setIsCancelAll($isCancelAll)
    {
        $this->isCancelAll             = $isCancelAll;
        $this->apiParas["isCancelAll"]  = $isCancelAll;
    }

    public function getIsCancelAll()
    {
        return $this->isCancelAll;
    }

    /**
     * @param string[] $poNo
     * 采购单号
     * Required: true
     * Example Value: 
     */
    private $poNo;

    /**
     * @param string[] $poNo
     * 采购单号
     * Example Value: 
     */
    public function setPoNo($poNo)
    {
        $this->poNo             = $poNo;
        $this->apiParas["poNo"]  = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

}