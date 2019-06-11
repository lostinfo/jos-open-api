<?php

namespace JD\request;

/**
 * 获取建议接口
 * 价值供应链算法-京东价值供应链和软件服务商可以调用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=421&apiId=3398&apiName=jingdong.wl.stock.fusion.getSuggestion
 * Class WlStockFusionGetSuggestion
 * @package Jd\request
 */
class WlStockFusionGetSuggestion
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wl.stock.fusion.getSuggestion";
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
     * @param Number $rowsOfPage
     * 每页条数
     * Required: true
     * Example Value: 10
     */
    private $rowsOfPage;

    /**
     * @param Number $rowsOfPage
     * 每页条数
     * Example Value: 10
     */
    public function setRowsOfPage($rowsOfPage)
    {
        $this->rowsOfPage             = $rowsOfPage;
        $this->apiParas["rowsOfPage"]  = $rowsOfPage;
    }

    public function getRowsOfPage()
    {
        return $this->rowsOfPage;
    }

    /**
     * @param Number $page
     * 页码
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param Number $page
     * 页码
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param Number $type
     * 建议类型
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param Number $type
     * 建议类型
     * Example Value: 1
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
     * @param String $lotNo
     * 批次号
     * Required: true
     * Example Value: XP-JS-ECP0020000012732-20190225235745958
     */
    private $lotNo;

    /**
     * @param String $lotNo
     * 批次号
     * Example Value: XP-JS-ECP0020000012732-20190225235745958
     */
    public function setLotNo($lotNo)
    {
        $this->lotNo             = $lotNo;
        $this->apiParas["lotNo"]  = $lotNo;
    }

    public function getLotNo()
    {
        return $this->lotNo;
    }

}