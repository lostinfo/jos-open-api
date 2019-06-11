<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取资质填写规则
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1712&apiName=jingdong.vc.qualification.rule.get
 * Class VcQualificationRuleGet
 * @package Jd\request
 */
class VcQualificationRuleGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.qualification.rule.get";
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
     * @param int $cid
     * 三级分类id
     * Required: true
     * Example Value: 455
     */
    private $cid;

    /**
     * @param int $cid
     * 三级分类id
     * Example Value: 455
     */
    public function setCid($cid)
    {
        $this->cid             = $cid;
        $this->apiParas["catetory"]  = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

}