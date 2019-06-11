<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 删除商品序列号规则
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2446&apiName=jingdong.eclp.goods.deleteGoodsSerialNumberRule
 * Class EclpGoodsDeleteGoodsSerialNumberRule
 * @package Jd\request
 */
class EclpGoodsDeleteGoodsSerialNumberRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.deleteGoodsSerialNumberRule";
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
     * @param string $deptNo
     * 事业部编码
     * Required: false
     * Example Value: 
     */
    private $deptNo;

    /**
     * @param string $deptNo
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
     * @param string $snNo
     * 序列号规则编码
     * Required: false
     * Example Value: 
     */
    private $snNo;

    /**
     * @param string $snNo
     * 序列号规则编码
     * Example Value: 
     */
    public function setSnNo($snNo)
    {
        $this->snNo             = $snNo;
        $this->apiParas["snNo"]  = $snNo;
    }

    public function getSnNo()
    {
        return $this->snNo;
    }

    /**
     * @param string $delReason
     * 删除原因
     * Required: true
     * Example Value: 
     */
    private $delReason;

    /**
     * @param string $delReason
     * 删除原因
     * Example Value: 
     */
    public function setDelReason($delReason)
    {
        $this->delReason             = $delReason;
        $this->apiParas["delReason"]  = $delReason;
    }

    public function getDelReason()
    {
        return $this->delReason;
    }

}