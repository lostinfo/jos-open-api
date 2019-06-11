<?php

namespca Lostinfo\JosOpenApi;

/**
 * 查询仓间调拨单
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1723&apiName=jingdong.eclp.ib.queryOutsideMain
 * Class EclpIbQueryOutsideMain
 * @package Jd\request
 */
class EclpIbQueryOutsideMain
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ib.queryOutsideMain";
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
     * @param string $outsideMainNo
     * ECLP调拨单号，以ENP开头，最大长度50
     * Required: true
     * Example Value: ENP4418045678451
     */
    private $outsideMainNo;

    /**
     * @param string $outsideMainNo
     * ECLP调拨单号，以ENP开头，最大长度50
     * Example Value: ENP4418045678451
     */
    public function setOutsideMainNo($outsideMainNo)
    {
        $this->outsideMainNo             = $outsideMainNo;
        $this->apiParas["outsideMainNo"]  = $outsideMainNo;
    }

    public function getOutsideMainNo()
    {
        return $this->outsideMainNo;
    }

}