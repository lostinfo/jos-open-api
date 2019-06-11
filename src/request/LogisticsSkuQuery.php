<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品信息接口
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=157&apiName=jingdong.logistics.sku.query
 * Class LogisticsSkuQuery
 * @package Jd\request
 */
class LogisticsSkuQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.sku.query";
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
     * @param string $joslGoodNo
     * josl商品编号
     * Required: false
     * Example Value: 
     */
    private $joslGoodNo;

    /**
     * @param string $joslGoodNo
     * josl商品编号
     * Example Value: 
     */
    public function setJoslGoodNo($joslGoodNo)
    {
        $this->joslGoodNo             = $joslGoodNo;
        $this->apiParas["josl_good_no"]  = $joslGoodNo;
    }

    public function getJoslGoodNo()
    {
        return $this->joslGoodNo;
    }

    /**
     * @param string $isvGoodNo
     * isv商品编号
     * Required: false
     * Example Value: 
     */
    private $isvGoodNo;

    /**
     * @param string $isvGoodNo
     * isv商品编号
     * Example Value: 
     */
    public function setIsvGoodNo($isvGoodNo)
    {
        $this->isvGoodNo             = $isvGoodNo;
        $this->apiParas["isv_good_no"]  = $isvGoodNo;
    }

    public function getIsvGoodNo()
    {
        return $this->isvGoodNo;
    }

}