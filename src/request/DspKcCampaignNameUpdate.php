<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.快车.修改计划名称
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=3461&apiName=jingdong.dsp.kc.campaign.name.update
 * Class DspKcCampaignNameUpdate
 * @package Jd\request
 */
class DspKcCampaignNameUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campaign.name.update";
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
     * @param int $id
     * 计划id
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 计划id
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * 计划名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 计划名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}