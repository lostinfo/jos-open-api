<?php

namespace JD\request;

/**
 * 商品资料删除
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1633&apiName=jingdong.jcloud.wms.SkuAcceptServiceHandler.delete
 * Class JcloudWmsSkuAcceptServiceHandlerDelete
 * @package Jd\request
 */
class JcloudWmsSkuAcceptServiceHandlerDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.SkuAcceptServiceHandler.delete";
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
     * @param String $code
     * 商品码
     * Required: true
     * Example Value: 
     */
    private $code;

    /**
     * @param String $code
     * 商品码
     * Example Value: 
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param String $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户ID
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param String $ownerNo
     * 货主编码
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编码
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $operateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operateUser;

    /**
     * @param String $operateUser
     * 操作人
     * Example Value: 
     */
    public function setOperateUser($operateUser)
    {
        $this->operateUser             = $operateUser;
        $this->apiParas["operateUser"]  = $operateUser;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    /**
     * @param Date $operateTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param Date $operateTime
     * 操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["operateTime"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

}