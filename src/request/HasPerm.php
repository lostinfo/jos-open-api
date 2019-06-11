<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据账号和权限码判断是否有当前权限
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=2788&apiName=jingdong.hasPerm
 * Class HasPerm
 * @package Jd\request
 */
class HasPerm
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.hasPerm";
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
     * @param string $permCode
     * 权限码
     * Required: true
     * Example Value: 
     */
    private $permCode;

    /**
     * @param string $permCode
     * 权限码
     * Example Value: 
     */
    public function setPermCode($permCode)
    {
        $this->permCode             = $permCode;
        $this->apiParas["permCode"]  = $permCode;
    }

    public function getPermCode()
    {
        return $this->permCode;
    }

    /**
     * @param int $system
     * 所属系统(2:营销中台)
     * Required: true
     * Example Value: 
     */
    private $system;

    /**
     * @param int $system
     * 所属系统(2:营销中台)
     * Example Value: 
     */
    public function setSystem($system)
    {
        $this->system             = $system;
        $this->apiParas["system"]  = $system;
    }

    public function getSystem()
    {
        return $this->system;
    }

}