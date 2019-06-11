<?php

namespca Lostinfo\JosOpenApi;

/**
 * 获取爆款商品【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1814&apiName=jingdong.UnionThemeGoodsService.queryExplosiveGoods
 * Class UnionThemeGoodsServiceQueryExplosiveGoods
 * @package Jd\request
 */
class UnionThemeGoodsServiceQueryExplosiveGoods
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.UnionThemeGoodsService.queryExplosiveGoods";
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
     * @param int $from
     * 起始条数（例如，每页100条，第一页0，第二页100)。
     * Required: true
     * Example Value: 
     */
    private $from;

    /**
     * @param int $from
     * 起始条数（例如，每页100条，第一页0，第二页100)。
     * Example Value: 
     */
    public function setFrom($from)
    {
        $this->from             = $from;
        $this->apiParas["from"]  = $from;
    }

    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param int $pageSize
     * 每页多少条
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页多少条
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
     * @param int $cid3
     * 三级类目
     * Required: false
     * Example Value: 
     */
    private $cid3;

    /**
     * @param int $cid3
     * 三级类目
     * Example Value: 
     */
    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["cid3"]  = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

}