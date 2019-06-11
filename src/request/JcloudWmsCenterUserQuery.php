<?php

namespace JD\request;

/**
 * 查询用户
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1846&apiName=jingdong.jcloud.wms.center.user.query
 * Class JcloudWmsCenterUserQuery
 * @package Jd\request
 */
class JcloudWmsCenterUserQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.center.user.query";
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
     * @param String $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户
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
     * @param String $outUser
     * 用户名
     * Required: true
     * Example Value: 
     */
    private $outUser;

    /**
     * @param String $outUser
     * 用户名
     * Example Value: 
     */
    public function setOutUser($outUser)
    {
        $this->outUser             = $outUser;
        $this->apiParas["userId"]  = $outUser;
    }

    public function getOutUser()
    {
        return $this->outUser;
    }

    /**
     * @param String $origin
     * 来源
     * Required: true
     * Example Value: 
     */
    private $origin;

    /**
     * @param String $origin
     * 来源
     * Example Value: 
     */
    public function setOrigin($origin)
    {
        $this->origin             = $origin;
        $this->apiParas["origin"]  = $origin;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

}