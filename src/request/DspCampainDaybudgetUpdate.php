<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.聚效.修改计划预算
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=882&apiName=jingdong.dsp.campain.daybudget.update
 * Class DspCampainDaybudgetUpdate
 * @package Jd\request
 */
class DspCampainDaybudgetUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.campain.daybudget.update";
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
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $dayBudget
     * 预算 请填写1到7位的数字
     * Required: false
     * Example Value: 
     */
    private $dayBudget;

    /**
     * @param int $dayBudget
     * 预算 请填写1到7位的数字
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