<?php

namespace JD\request;

/**
 * 获取标品模板配置
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2045&apiName=jingdong.vc.item.spuTemplate.get
 * Class VcItemSpuTemplateGet
 * @package Jd\request
 */
class VcItemSpuTemplateGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.spuTemplate.get";
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
     * @param Number $cid3
     * 三级分类ID
     * Required: true
     * Example Value: 655
     */
    private $cid3;

    /**
     * @param Number $cid3
     * 三级分类ID
     * Example Value: 655
     */
    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["cid3"]  = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

    /**
     * @param Number $brandId
     * 品牌id
     * Required: true
     * Example Value: 1245
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌id
     * Example Value: 1245
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brand_id"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param String $model
     * 型号
     * Required: true
     * Example Value: TH300
     */
    private $model;

    /**
     * @param String $model
     * 型号
     * Example Value: TH300
     */
    public function setModel($model)
    {
        $this->model             = $model;
        $this->apiParas["model"]  = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

}