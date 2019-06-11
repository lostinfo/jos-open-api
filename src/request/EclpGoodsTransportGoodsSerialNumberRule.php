<?php

namespace JD\request;

/**
 * 添加商品序列号规则
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2443&apiName=jingdong.eclp.goods.transportGoodsSerialNumberRule
 * Class EclpGoodsTransportGoodsSerialNumberRule
 * @package Jd\request
 */
class EclpGoodsTransportGoodsSerialNumberRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.transportGoodsSerialNumberRule";
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
     * @param String $deptNo
     * 事业部编码
     * Required: true
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码
     * Example Value: 
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

    /**
     * @param String $goodsNo
     * 事业部商品编号
     * Required: true
     * Example Value: 
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 事业部商品编号
     * Example Value: 
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
     * @param Number $serialNumberLength
     * 序列号总长度
     * Required: false
     * Example Value: 
     */
    private $serialNumberLength;

    /**
     * @param Number $serialNumberLength
     * 序列号总长度
     * Example Value: 
     */
    public function setSerialNumberLength($serialNumberLength)
    {
        $this->serialNumberLength             = $serialNumberLength;
        $this->apiParas["serialNumberLength"]  = $serialNumberLength;
    }

    public function getSerialNumberLength()
    {
        return $this->serialNumberLength;
    }

    /**
     * @param String $serialNumberLeftvalue
     * 序列号左前缀值
     * Required: true
     * Example Value: 
     */
    private $serialNumberLeftvalue;

    /**
     * @param String $serialNumberLeftvalue
     * 序列号左前缀值
     * Example Value: 
     */
    public function setSerialNumberLeftvalue($serialNumberLeftvalue)
    {
        $this->serialNumberLeftvalue             = $serialNumberLeftvalue;
        $this->apiParas["serialNumberLeftvalue"]  = $serialNumberLeftvalue;
    }

    public function getSerialNumberLeftvalue()
    {
        return $this->serialNumberLeftvalue;
    }

    /**
     * @param Number $serialNumberLeftLength
     * 前缀长度
     * Required: true
     * Example Value: 
     */
    private $serialNumberLeftLength;

    /**
     * @param Number $serialNumberLeftLength
     * 前缀长度
     * Example Value: 
     */
    public function setSerialNumberLeftLength($serialNumberLeftLength)
    {
        $this->serialNumberLeftLength             = $serialNumberLeftLength;
        $this->apiParas["serialNumberLeftLength"]  = $serialNumberLeftLength;
    }

    public function getSerialNumberLeftLength()
    {
        return $this->serialNumberLeftLength;
    }

    /**
     * @param Number $serialNumberSuffixLength
     * 后缀长度
     * Required: true
     * Example Value: 
     */
    private $serialNumberSuffixLength;

    /**
     * @param Number $serialNumberSuffixLength
     * 后缀长度
     * Example Value: 
     */
    public function setSerialNumberSuffixLength($serialNumberSuffixLength)
    {
        $this->serialNumberSuffixLength             = $serialNumberSuffixLength;
        $this->apiParas["serialNumberSuffixLength"]  = $serialNumberSuffixLength;
    }

    public function getSerialNumberSuffixLength()
    {
        return $this->serialNumberSuffixLength;
    }

    /**
     * @param String $suffixValue
     * 后缀值
     * Required: true
     * Example Value: 
     */
    private $suffixValue;

    /**
     * @param String $suffixValue
     * 后缀值
     * Example Value: 
     */
    public function setSuffixValue($suffixValue)
    {
        $this->suffixValue             = $suffixValue;
        $this->apiParas["suffixValue"]  = $suffixValue;
    }

    public function getSuffixValue()
    {
        return $this->suffixValue;
    }

    /**
     * @param Number $type
     * 序列号规则类型 0：不限,1：仅字母,2：仅数字,3：字母+数字,4：字母+特殊符号,5：数字+特殊符号,-1：无效值
     * Required: false
     * Example Value: 
     */
    private $type;

    /**
     * @param Number $type
     * 序列号规则类型 0：不限,1：仅字母,2：仅数字,3：字母+数字,4：字母+特殊符号,5：数字+特殊符号,-1：无效值
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

    /**
     * @param Number $ruleIndex
     * 输入位数的开始位
     * Required: false
     * Example Value: 
     */
    private $ruleIndex;

    /**
     * @param Number $ruleIndex
     * 输入位数的开始位
     * Example Value: 
     */
    public function setRuleIndex($ruleIndex)
    {
        $this->ruleIndex             = $ruleIndex;
        $this->apiParas["ruleIndex"]  = $ruleIndex;
    }

    public function getRuleIndex()
    {
        return $this->ruleIndex;
    }

    /**
     * @param Number $ruleIndexEnd
     * 输入位数的结束位,第（）至（）位，只允许输入数字；长度小于等于3位
     * Required: false
     * Example Value: 
     */
    private $ruleIndexEnd;

    /**
     * @param Number $ruleIndexEnd
     * 输入位数的结束位,第（）至（）位，只允许输入数字；长度小于等于3位
     * Example Value: 
     */
    public function setRuleIndexEnd($ruleIndexEnd)
    {
        $this->ruleIndexEnd             = $ruleIndexEnd;
        $this->apiParas["ruleIndexEnd"]  = $ruleIndexEnd;
    }

    public function getRuleIndexEnd()
    {
        return $this->ruleIndexEnd;
    }

    /**
     * @param String $ruleIndexValue
     * 第几位至第几位之间等于的值，值允许为字母，特殊符号，数字格式
     * Required: false
     * Example Value: 
     */
    private $ruleIndexValue;

    /**
     * @param String $ruleIndexValue
     * 第几位至第几位之间等于的值，值允许为字母，特殊符号，数字格式
     * Example Value: 
     */
    public function setRuleIndexValue($ruleIndexValue)
    {
        $this->ruleIndexValue             = $ruleIndexValue;
        $this->apiParas["ruleIndexValue"]  = $ruleIndexValue;
    }

    public function getRuleIndexValue()
    {
        return $this->ruleIndexValue;
    }

    /**
     * @param  $manageType
     * 1.仅出库采集；2.入库出库均采集 3.仅入库采集；该规则在维护序列号商品时才能可选。（为空默认为2）
     * Required: false
     * Example Value: 
     */
    private $manageType;

    /**
     * @param  $manageType
     * 1.仅出库采集；2.入库出库均采集 3.仅入库采集；该规则在维护序列号商品时才能可选。（为空默认为2）
     * Example Value: 
     */
    public function setManageType($manageType)
    {
        $this->manageType             = $manageType;
        $this->apiParas["manageType"]  = $manageType;
    }

    public function getManageType()
    {
        return $this->manageType;
    }

    /**
     * @param String $sellerSnRuleNo
     * 商家序列号规则编码
     * Required: true
     * Example Value: 
     */
    private $sellerSnRuleNo;

    /**
     * @param String $sellerSnRuleNo
     * 商家序列号规则编码
     * Example Value: 
     */
    public function setSellerSnRuleNo($sellerSnRuleNo)
    {
        $this->sellerSnRuleNo             = $sellerSnRuleNo;
        $this->apiParas["sellerSnRuleNo"]  = $sellerSnRuleNo;
    }

    public function getSellerSnRuleNo()
    {
        return $this->sellerSnRuleNo;
    }

}