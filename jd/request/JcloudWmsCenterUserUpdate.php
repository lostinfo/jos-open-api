<?php

namespace JD\request;

/**
 * 修改用户
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1848&apiName=jingdong.jcloud.wms.center.user.update
 * Class JcloudWmsCenterUserUpdate
 * @package Jd\request
 */
class JcloudWmsCenterUserUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.center.user.update";
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
     * @param String $mobile
     * 手机
     * Required: false
     * Example Value: 
     */
    private $mobile;

    /**
     * @param String $mobile
     * 手机
     * Example Value: 
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
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

    /**
     * @param String $nickName
     * 用户昵称
     * Required: false
     * Example Value: 
     */
    private $nickName;

    /**
     * @param String $nickName
     * 用户昵称
     * Example Value: 
     */
    public function setNickName($nickName)
    {
        $this->nickName             = $nickName;
        $this->apiParas["name"]  = $nickName;
    }

    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * @param Number $isManager
     * 是否管理员
     * Required: false
     * Example Value: 
     */
    private $isManager;

    /**
     * @param Number $isManager
     * 是否管理员
     * Example Value: 
     */
    public function setIsManager($isManager)
    {
        $this->isManager             = $isManager;
        $this->apiParas["isManager"]  = $isManager;
    }

    public function getIsManager()
    {
        return $this->isManager;
    }

    /**
     * @param String $status
     * 用户状态
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param String $status
     * 用户状态
     * Example Value: 
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
     * @param String $operator
     * 操作者
     * Required: true
     * Example Value: 
     */
    private $operator;

    /**
     * @param String $operator
     * 操作者
     * Example Value: 
     */
    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operator"]  = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

}