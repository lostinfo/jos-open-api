<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 操作.快车.新增商品计划
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1301&apiName=jingdong.dsp.kc.campain.add
 * Class DspKcCampainAdd
 * @package Jd\request
 */
class DspKcCampainAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campain.add";
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

    /**
     * @param int $dayBudget
     * 预算
     * Required: true
     * Example Value: 
     */
    private $dayBudget;

    /**
     * @param int $dayBudget
     * 预算
     * Example Value: 
     */
    public function setDayBudget($dayBudget)
    {
        $this->dayBudget             = $dayBudget;
        $this->apiParas["dayBudget"]  = $dayBudget;
    }

    public function getDayBudget()
    {
        return $this->dayBudget;
    }

}