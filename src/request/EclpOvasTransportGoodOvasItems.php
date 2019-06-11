<?php

namespace JD\request;

/**
 * 下发商品增值服务
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3676&apiName=jingdong.eclp.ovas.transportGoodOvasItems
 * Class EclpOvasTransportGoodOvasItems
 * @package Jd\request
 */
class EclpOvasTransportGoodOvasItems
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ovas.transportGoodOvasItems";
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
     * @param com.jd.eclp.ovas.request.JosGoodsOvasRequest $request
     * 请求主体
     * Required: true
     * Example Value: 
     */
    private $request;

    /**
     * @param com.jd.eclp.ovas.request.JosGoodsOvasRequest $request
     * 请求主体
     * Example Value: 
     */
    public function setRequest($request)
    {
        $this->request             = $request;
        $this->apiParas["request"]  = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param String $deptName
     * 事业部名称
     * Required: false
     * Example Value: 第六事业部
     */
    private $deptName;

    /**
     * @param String $deptName
     * 事业部名称
     * Example Value: 第六事业部
     */
    public function setDeptName($deptName)
    {
        $this->deptName             = $deptName;
        $this->apiParas["deptName"]  = $deptName;
    }

    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * @param java.util.List $goodsNoVasRequestList
     * 请求详情集合
     * Required: true
     * Example Value: 
     */
    private $goodsNoVasRequestList;

    /**
     * @param java.util.List $goodsNoVasRequestList
     * 请求详情集合
     * Example Value: 
     */
    public function setGoodsNoVasRequestList($goodsNoVasRequestList)
    {
        $this->goodsNoVasRequestList             = $goodsNoVasRequestList;
        $this->apiParas["goodsNoVasRequestList"]  = $goodsNoVasRequestList;
    }

    public function getGoodsNoVasRequestList()
    {
        return $this->goodsNoVasRequestList;
    }

    /**
     * @param com.jd.eclp.ovas.request.goods.admin.GoodsNoVasRequest $goodsNoVasRequest
     * 请求详情（可为多个商品开通增值服务）
     * Required: true
     * Example Value: 
     */
    private $goodsNoVasRequest;

    /**
     * @param com.jd.eclp.ovas.request.goods.admin.GoodsNoVasRequest $goodsNoVasRequest
     * 请求详情（可为多个商品开通增值服务）
     * Example Value: 
     */
    public function setGoodsNoVasRequest($goodsNoVasRequest)
    {
        $this->goodsNoVasRequest             = $goodsNoVasRequest;
        $this->apiParas["goodsNoVasRequest"]  = $goodsNoVasRequest;
    }

    public function getGoodsNoVasRequest()
    {
        return $this->goodsNoVasRequest;
    }

    /**
     * @param String $goodsNo
     * 事业部商品编码（EMG开头，最大长度50）
     * Required: true
     * Example Value: EMG4418093156828
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 事业部商品编码（EMG开头，最大长度50）
     * Example Value: EMG4418093156828
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param java.util.List $vasRequestList
     * 增值服务集合（一个商品可开通多个增值服务）
     * Required: true
     * Example Value: 
     */
    private $vasRequestList;

    /**
     * @param java.util.List $vasRequestList
     * 增值服务集合（一个商品可开通多个增值服务）
     * Example Value: 
     */
    public function setVasRequestList($vasRequestList)
    {
        $this->vasRequestList             = $vasRequestList;
        $this->apiParas["vasRequestList"]  = $vasRequestList;
    }

    public function getVasRequestList()
    {
        return $this->vasRequestList;
    }

    /**
     * @param com.jd.eclp.ovas.request.goods.admin.VasRequest $vasRequest
     * 增值服务
     * Required: true
     * Example Value: 
     */
    private $vasRequest;

    /**
     * @param com.jd.eclp.ovas.request.goods.admin.VasRequest $vasRequest
     * 增值服务
     * Example Value: 
     */
    public function setVasRequest($vasRequest)
    {
        $this->vasRequest             = $vasRequest;
        $this->apiParas["vasRequest"]  = $vasRequest;
    }

    public function getVasRequest()
    {
        return $this->vasRequest;
    }

    /**
     * @param String $serviceCode
     * 增值服务项编码（从京东侧获取）
     * Required: true
     * Example Value: WH3999432433
     */
    private $serviceCode;

    /**
     * @param String $serviceCode
     * 增值服务项编码（从京东侧获取）
     * Example Value: WH3999432433
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode             = $serviceCode;
        $this->apiParas["serviceCode"]  = $serviceCode;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param String $goodsDemand
     * 增值服务项要求（根据具体增值服务填写要求）
     * Required: false
     * Example Value: 20%
     */
    private $goodsDemand;

    /**
     * @param String $goodsDemand
     * 增值服务项要求（根据具体增值服务填写要求）
     * Example Value: 20%
     */
    public function setGoodsDemand($goodsDemand)
    {
        $this->goodsDemand             = $goodsDemand;
        $this->apiParas["goodsDemand"]  = $goodsDemand;
    }

    public function getGoodsDemand()
    {
        return $this->goodsDemand;
    }

    /**
     * @param String $status
     * 操作标识（1代表开通、2代表关闭）
     * Required: true
     * Example Value: 1
     */
    private $status;

    /**
     * @param String $status
     * 操作标识（1代表开通、2代表关闭）
     * Example Value: 1
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $sellerName
     * 商家名称
     * Required: false
     * Example Value: 测试商家
     */
    private $sellerName;

    /**
     * @param String $sellerName
     * 商家名称
     * Example Value: 测试商家
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName             = $sellerName;
        $this->apiParas["sellerName"]  = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param Number $deptId
     * 事业部id
     * Required: false
     * Example Value: 231
     */
    private $deptId;

    /**
     * @param Number $deptId
     * 事业部id
     * Example Value: 231
     */
    public function setDeptId($deptId)
    {
        $this->deptId             = $deptId;
        $this->apiParas["deptId"]  = $deptId;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * @param String $sellerNo
     * 商家编码（ECP开头）
     * Required: true
     * Example Value: ECP0000000000009
     */
    private $sellerNo;

    /**
     * @param String $sellerNo
     * 商家编码（ECP开头）
     * Example Value: ECP0000000000009
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param String $deptNo
     * 事业部编码（EBU开头，最大长度50）
     * Required: true
     * Example Value: EBU0000000000231
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码（EBU开头，最大长度50）
     * Example Value: EBU0000000000231
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

}