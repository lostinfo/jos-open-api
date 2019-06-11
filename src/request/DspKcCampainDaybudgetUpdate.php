<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.快车.修改计划预算
 * 京准通-快车API-京准通快车相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=151&apiId=1303&apiName=jingdong.dsp.kc.campain.daybudget.update
 * Class DspKcCampainDaybudgetUpdate
 * @package Jd\request
 */
class DspKcCampainDaybudgetUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.kc.campain.daybudget.update";
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
     * 计划ID
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 计划ID
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["campaignId"]  = $id;
    }

    public function getId()
    {
        return $this->id;
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