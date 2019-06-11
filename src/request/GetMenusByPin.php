<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据账号和系统类型获取菜单
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=2786&apiName=jingdong.getMenusByPin
 * Class GetMenusByPin
 * @package Jd\request
 */
class GetMenusByPin
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getMenusByPin";
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
     * @param string $pin
     * 账号
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param string $pin
     * 账号
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param int $system
     * 菜单所属系统(1:营销中台)
     * Required: true
     * Example Value: 
     */
    private $system;

    /**
     * @param int $system
     * 菜单所属系统(1:营销中台)
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