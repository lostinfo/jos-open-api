<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 图片鉴黄
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1668&apiName=jingdong.vc.item.pic.sex.check
 * Class VcItemPicSexCheck
 * @package Jd\request
 */
class VcItemPicSexCheck
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.pic.sex.check";
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
     * @param int $cid3
     * 三级分类
     * Required: true
     * Example Value: 768
     */
    private $cid3;

    /**
     * @param int $cid3
     * 三级分类
     * Example Value: 768
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

    /**
     * @param string[] $path
     * 图片url
     * Required: true
     * Example Value: url2
     */
    private $path;

    /**
     * @param string[] $path
     * 图片url
     * Example Value: url2
     */
    public function setPath($path)
    {
        $this->path             = $path;
        $this->apiParas["path"]  = $path;
    }

    public function getPath()
    {
        return $this->path;
    }

}