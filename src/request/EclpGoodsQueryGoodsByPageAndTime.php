<?php

namespca Lostinfo\JosOpenApi;

/**
 * 按更新时间段查询商品信息
 * 无界电子面单-电子面单商家及ISV使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=356&apiId=2754&apiName=jingdong.eclp.goods.queryGoodsByPageAndTime
 * Class EclpGoodsQueryGoodsByPageAndTime
 * @package Jd\request
 */
class EclpGoodsQueryGoodsByPageAndTime
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.queryGoodsByPageAndTime";
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
     * Required: true
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
     * @param string $isvGoodsNos
     * ISV主商品编码，以英文逗号隔开，最多50个
     * Required: false
     * Example Value: 
     */
    private $isvGoodsNos;

    /**
     * @param string $isvGoodsNos
     * ISV主商品编码，以英文逗号隔开，最多50个
     * Example Value: 
     */
    public function setIsvGoodsNos($isvGoodsNos)
    {
        $this->isvGoodsNos             = $isvGoodsNos;
        $this->apiParas["isvGoodsNos"]  = $isvGoodsNos;
    }

    public function getIsvGoodsNos()
    {
        return $this->isvGoodsNos;
    }

    /**
     * @param string $goodsNos
     * ECLP主商品编码，多个以英文逗号隔开，最多50个
     * Required: false
     * Example Value: 
     */
    private $goodsNos;

    /**
     * @param string $goodsNos
     * ECLP主商品编码，多个以英文逗号隔开，最多50个
     * Example Value: 
     */
    public function setGoodsNos($goodsNos)
    {
        $this->goodsNos             = $goodsNos;
        $this->apiParas["goodsNos"]  = $goodsNos;
    }

    public function getGoodsNos()
    {
        return $this->goodsNos;
    }

    /**
     * @param int $pageNo
     * 查询页码
     * Required: false
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 查询页码
     * Example Value: 
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageSize
     * 查询最大条数，最多1000条
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 查询最大条数，最多1000条
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $updateTimeStart
     * 开始更新时间
     * Required: false
     * Example Value: 
     */
    private $updateTimeStart;

    /**
     * @param string $updateTimeStart
     * 开始更新时间
     * Example Value: 
     */
    public function setUpdateTimeStart($updateTimeStart)
    {
        $this->updateTimeStart             = $updateTimeStart;
        $this->apiParas["updateTimeStart"]  = $updateTimeStart;
    }

    public function getUpdateTimeStart()
    {
        return $this->updateTimeStart;
    }

    /**
     * @param string $updateTimeEnd
     * 结束更新时间
     * Required: false
     * Example Value: 
     */
    private $updateTimeEnd;

    /**
     * @param string $updateTimeEnd
     * 结束更新时间
     * Example Value: 
     */
    public function setUpdateTimeEnd($updateTimeEnd)
    {
        $this->updateTimeEnd             = $updateTimeEnd;
        $this->apiParas["updateTimeEnd"]  = $updateTimeEnd;
    }

    public function getUpdateTimeEnd()
    {
        return $this->updateTimeEnd;
    }

}