<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取下拉宽选项
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1196&apiName=jingdong.vc.getcomponentlist
 * Class VcGetcomponentlist
 * @package Jd\request
 */
class VcGetcomponentlist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.getcomponentlist";
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
     * @param string $type
     * 查询下拉框类型（回告状态:confirmState;订单属性:orderAttribute;删除状态:Status;图书回告不满足原因:BackExplanationType;订单状态:OrderState）
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param string $type
     * 查询下拉框类型（回告状态:confirmState;订单属性:orderAttribute;删除状态:Status;图书回告不满足原因:BackExplanationType;订单状态:OrderState）
     * Example Value: 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}