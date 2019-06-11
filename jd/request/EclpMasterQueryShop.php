<?php

namespace JD\request;

/**
 * 查询店铺信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=948&apiName=jingdong.eclp.master.queryShop
 * Class EclpMasterQueryShop
 * @package Jd\request
 */
class EclpMasterQueryShop
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryShop";
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
     * @param String $shopNos
     * 开放平台店铺编号,多个以英文逗号分隔
     * Required: false
     * Example Value: ESP0000000000001,ESP0000000000002
     */
    private $shopNos;

    /**
     * @param String $shopNos
     * 开放平台店铺编号,多个以英文逗号分隔
     * Example Value: ESP0000000000001,ESP0000000000002
     */
    public function setShopNos($shopNos)
    {
        $this->shopNos             = $shopNos;
        $this->apiParas["shopNos"]  = $shopNos;
    }

    public function getShopNos()
    {
        return $this->shopNos;
    }

    /**
     * @param String $isvShopNos
     * ISV店铺编号,多个以英文逗号分隔
     * Required: false
     * Example Value: 97097,97098
     */
    private $isvShopNos;

    /**
     * @param String $isvShopNos
     * ISV店铺编号,多个以英文逗号分隔
     * Example Value: 97097,97098
     */
    public function setIsvShopNos($isvShopNos)
    {
        $this->isvShopNos             = $isvShopNos;
        $this->apiParas["isvShopNos"]  = $isvShopNos;
    }

    public function getIsvShopNos()
    {
        return $this->isvShopNos;
    }

    /**
     * @param String $deptNo
     * 开放平台事业部编号,必输输入一个事业部
     * Required: true
     * Example Value: EBU0000000000001
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 开放平台事业部编号,必输输入一个事业部
     * Example Value: EBU0000000000001
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