<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * APP效果数据接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1046&apiName=jingdong.service.promotion.appReport
 * Class ServicePromotionAppReport
 * @package Jd\request
 */
class ServicePromotionAppReport
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.appReport";
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
     * @param string $time
     * 查询时间
     * Required: true
     * Example Value: 
     */
    private $time;

    /**
     * @param string $time
     * 查询时间
     * Example Value: 
     */
    public function setTime($time)
    {
        $this->time             = $time;
        $this->apiParas["time"]  = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $siteKey
     * 广告位密匙
     * Required: true
     * Example Value: 
     */
    private $siteKey;

    /**
     * @param string $siteKey
     * 广告位密匙
     * Example Value: 
     */
    public function setSiteKey($siteKey)
    {
        $this->siteKey             = $siteKey;
        $this->apiParas["siteKey"]  = $siteKey;
    }

    public function getSiteKey()
    {
        return $this->siteKey;
    }

    /**
     * @param string $ext1
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext1;

    /**
     * @param string $ext1
     * 扩展字段
     * Example Value: 
     */
    public function setExt1($ext1)
    {
        $this->ext1             = $ext1;
        $this->apiParas["ext1"]  = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * @param string $ext2
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext2;

    /**
     * @param string $ext2
     * 扩展字段
     * Example Value: 
     */
    public function setExt2($ext2)
    {
        $this->ext2             = $ext2;
        $this->apiParas["ext2"]  = $ext2;
    }

    public function getExt2()
    {
        return $this->ext2;
    }

    /**
     * @param string $ext3
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext3;

    /**
     * @param string $ext3
     * 扩展字段
     * Example Value: 
     */
    public function setExt3($ext3)
    {
        $this->ext3             = $ext3;
        $this->apiParas["ext3"]  = $ext3;
    }

    public function getExt3()
    {
        return $this->ext3;
    }

}