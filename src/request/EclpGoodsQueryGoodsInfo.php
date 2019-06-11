<?php

namespace JD\request;

/**
 * 查询主商品信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=945&apiName=jingdong.eclp.goods.queryGoodsInfo
 * Class EclpGoodsQueryGoodsInfo
 * @package Jd\request
 */
class EclpGoodsQueryGoodsInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.queryGoodsInfo";
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
     * 事业部编码 (长度：50) 
     * Required: true
     * Example Value: EBU0000000000027  
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编码 (长度：50) 
     * Example Value: EBU0000000000027  
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
     * @param String $isvGoodsNos
     * ISV主商品编码，以英文逗号隔开，最多50个(长度：60)  
     * Required: false
     * Example Value: 23145433,23145432 
     */
    private $isvGoodsNos;

    /**
     * @param String $isvGoodsNos
     * ISV主商品编码，以英文逗号隔开，最多50个(长度：60)  
     * Example Value: 23145433,23145432 
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
     * @param String $goodsNos
     * ECLP主商品编码，多个以英文逗号隔开，最多50个（长度：50）  
     * Required: false
     * Example Value: EMG445930335,EMG445930335 
     */
    private $goodsNos;

    /**
     * @param String $goodsNos
     * ECLP主商品编码，多个以英文逗号隔开，最多50个（长度：50）  
     * Example Value: EMG445930335,EMG445930335 
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
     * @param String $queryType
     * 查询类型（1查询全部信息；2查询商品编号。默认为1）(长度：4)
     * Required: true
     * Example Value: 1
     */
    private $queryType;

    /**
     * @param String $queryType
     * 查询类型（1查询全部信息；2查询商品编号。默认为1）(长度：4)
     * Example Value: 1
     */
    public function setQueryType($queryType)
    {
        $this->queryType             = $queryType;
        $this->apiParas["queryType"]  = $queryType;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * @param String $barcodes
     * 商品条码，多个以英文逗号隔开，最多50个（长度：100）
     * Required: false
     * Example Value: 6970805738061,4527080573324 
     */
    private $barcodes;

    /**
     * @param String $barcodes
     * 商品条码，多个以英文逗号隔开，最多50个（长度：100）
     * Example Value: 6970805738061,4527080573324 
     */
    public function setBarcodes($barcodes)
    {
        $this->barcodes             = $barcodes;
        $this->apiParas["barcodes"]  = $barcodes;
    }

    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * @param Number $pageNo
     * 查询页码(长度4)
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 查询页码(长度4)
     * Example Value: 1
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
     * @param Number $pageSize
     * 查询最大条数，最多1000条(长度:1000)
     * Required: false
     * Example Value: 100
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 查询最大条数，最多1000条(长度:1000)
     * Example Value: 100
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

}