<?php

namespca Lostinfo\JosOpenApi;

/**
 * 通过供应商简码获取视频列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1182&apiName=jingdong.vc.item.videos.find
 * Class VcItemVideosFind
 * @package Jd\request
 */
class VcItemVideosFind
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.videos.find";
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
     * @param string $keywords
     * 关键字
     * Required: false
     * Example Value: 面膜
     */
    private $keywords;

    /**
     * @param string $keywords
     * 关键字
     * Example Value: 面膜
     */
    public function setKeywords($keywords)
    {
        $this->keywords             = $keywords;
        $this->apiParas["keywords"]  = $keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
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
     * @param int $length
     * 步长
     * Required: false
     * Example Value: 10
     */
    private $length;

    /**
     * @param int $length
     * 步长
     * Example Value: 10
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

}