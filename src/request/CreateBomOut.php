<?php

namespace JD\request;

/**
 * 创建报价单
 * 企悦对外开放API-企悦对外开放API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=216&apiId=1864&apiName=jingdong.createBomOut
 * Class CreateBomOut
 * @package Jd\request
 */
class CreateBomOut
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.createBomOut";
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
     * @param Number $serviceId
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceId;

    /**
     * @param Number $serviceId
     * 服务单号
     * Example Value: 
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"]  = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param String $venderCode
     * 厂商编码
     * Required: true
     * Example Value: 
     */
    private $venderCode;

    /**
     * @param String $venderCode
     * 厂商编码
     * Example Value: 
     */
    public function setVenderCode($venderCode)
    {
        $this->venderCode             = $venderCode;
        $this->apiParas["venderCode"]  = $venderCode;
    }

    public function getVenderCode()
    {
        return $this->venderCode;
    }

    /**
     * @param String $operatorPin
     * 操作人PIN
     * Required: true
     * Example Value: 
     */
    private $operatorPin;

    /**
     * @param String $operatorPin
     * 操作人PIN
     * Example Value: 
     */
    public function setOperatorPin($operatorPin)
    {
        $this->operatorPin             = $operatorPin;
        $this->apiParas["operatorPin"]  = $operatorPin;
    }

    public function getOperatorPin()
    {
        return $this->operatorPin;
    }

    /**
     * @param String $operatorName
     * 操作人名称
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
     * 操作人名称
     * Example Value: 
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["operatorName"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param Number[] $materialNum
     * 物料数量
     * Required: true
     * Example Value: 
     */
    private $materialNum;

    /**
     * @param Number[] $materialNum
     * 物料数量
     * Example Value: 
     */
    public function setMaterialNum($materialNum)
    {
        $this->materialNum             = $materialNum;
        $this->apiParas["materialNum"]  = $materialNum;
    }

    public function getMaterialNum()
    {
        return $this->materialNum;
    }

    /**
     * @param String[] $materialCode
     * 物料编码
     * Required: true
     * Example Value: 
     */
    private $materialCode;

    /**
     * @param String[] $materialCode
     * 物料编码
     * Example Value: 
     */
    public function setMaterialCode($materialCode)
    {
        $this->materialCode             = $materialCode;
        $this->apiParas["materialCode"]  = $materialCode;
    }

    public function getMaterialCode()
    {
        return $this->materialCode;
    }

}