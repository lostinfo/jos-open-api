<?php

namespca Lostinfo\JosOpenApi;

/**
 * 重置建议接口
 * 价值供应链算法-京东价值供应链和软件服务商可以调用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=421&apiId=3399&apiName=jingdong.wl.stock.fusion.resetSuggestion
 * Class WlStockFusionResetSuggestion
 * @package Jd\request
 */
class WlStockFusionResetSuggestion
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wl.stock.fusion.resetSuggestion";
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
     * @param int $rowsOfPage
     * 每页条数
     * Required: false
     * Example Value: 10
     */
    private $rowsOfPage;

    /**
     * @param int $rowsOfPage
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
     * @param int $page
     * 页码
     * Required: false
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
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
     * @param int $type
     * 建议类型
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param int $type
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
     * @param string $lotNo
     * 批次号
     * Required: false
     * Example Value: XP-JS-ECP0020000012732-20190225235745958
     */
    private $lotNo;

    /**
     * @param string $lotNo
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