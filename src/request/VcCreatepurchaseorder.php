<?php

namespace JD\request;

/**
 * 创建采购订单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1194&apiName=jingdong.vc.createpurchaseorder
 * Class VcCreatepurchaseorder
 * @package Jd\request
 */
class VcCreatepurchaseorder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.createpurchaseorder";
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
     * @param Number $deliverCenterId
     * 配送中心，请调用接口jingdong.vc.getwaredeliverdistinctlist
     * Required: true
     * Example Value: 6
     */
    private $deliverCenterId;

    /**
     * @param Number $deliverCenterId
     * 配送中心，请调用接口jingdong.vc.getwaredeliverdistinctlist
     * Example Value: 6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["order_deliver_center_id"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

    /**
     * @param String $purchaserErpCode
     * 采购员京东ERP账号，此信息请调用接口jingdong.vc.getpurchaserlistbypin 方法获取，选择的erp_code
     * Required: true
     * Example Value: yangyi
     */
    private $purchaserErpCode;

    /**
     * @param String $purchaserErpCode
     * 采购员京东ERP账号，此信息请调用接口jingdong.vc.getpurchaserlistbypin 方法获取，选择的erp_code
     * Example Value: yangyi
     */
    public function setPurchaserErpCode($purchaserErpCode)
    {
        $this->purchaserErpCode             = $purchaserErpCode;
        $this->apiParas["purchaser_erp_code"]  = $purchaserErpCode;
    }

    public function getPurchaserErpCode()
    {
        return $this->purchaserErpCode;
    }

    /**
     * @param String $remark
     * 备注
     * Required: false
     * Example Value: 订单备注信息
     */
    private $remark;

    /**
     * @param String $remark
     * 备注
     * Example Value: 订单备注信息
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["order_remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param Number[] $wareId
     * 商品编号，与配送中心、采购数量个数必须保持一致
     * Required: true
     * Example Value: 123456,123457
     */
    private $wareId;

    /**
     * @param Number[] $wareId
     * 商品编号，与配送中心、采购数量个数必须保持一致
     * Example Value: 123456,123457
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param Number[] $deliverCenterId
     * 配送中心编号，与商品编号、采购数量个数必须保持一致；此信息请调用接口jingdong.vc.getrequisitiondetailbywareid方法获取，输入参数（ware_id ,order_deliver_center_id）
     * Required: true
     * Example Value: 6,6
     */
    private $deliverCenterId;

    /**
     * @param Number[] $deliverCenterId
     * 配送中心编号，与商品编号、采购数量个数必须保持一致；此信息请调用接口jingdong.vc.getrequisitiondetailbywareid方法获取，输入参数（ware_id ,order_deliver_center_id）
     * Example Value: 6,6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["ware_deliver_center_id"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

    /**
     * @param Number[] $originalNum
     * 采购数量，，与商品编号、配送中心编号个数必须保持一致
     * Required: true
     * Example Value: 6,6
     */
    private $originalNum;

    /**
     * @param Number[] $originalNum
     * 采购数量，，与商品编号、配送中心编号个数必须保持一致
     * Example Value: 6,6
     */
    public function setOriginalNum($originalNum)
    {
        $this->originalNum             = $originalNum;
        $this->apiParas["original_num"]  = $originalNum;
    }

    public function getOriginalNum()
    {
        return $this->originalNum;
    }

    /**
     * @param String[] $remark
     * 商品备注
     * Required: false
     * Example Value: 商品备注1,商品编号2
     */
    private $remark;

    /**
     * @param String[] $remark
     * 商品备注
     * Example Value: 商品备注1,商品编号2
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["ware_remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}