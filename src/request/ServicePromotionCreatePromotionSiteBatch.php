<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量创建推广位【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2360&apiName=jingdong.service.promotion.createPromotionSiteBatch
 * Class ServicePromotionCreatePromotionSiteBatch
 * @package Jd\request
 */
class ServicePromotionCreatePromotionSiteBatch
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.createPromotionSiteBatch";
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
     * @param int $unionId
     * 站长Id
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
     * 站长Id
     * Example Value: 
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param string $key
     * 联盟系统领取的Key,与站长ID对应
     * Required: true
     * Example Value: 
     */
    private $key;

    /**
     * @param string $key
     * 联盟系统领取的Key,与站长ID对应
     * Example Value: 
     */
    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"]  = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param int $unionType
     * 固定为1，表示cps推广位
     * Required: true
     * Example Value: 
     */
    private $unionType;

    /**
     * @param int $unionType
     * 固定为1，表示cps推广位
     * Example Value: 
     */
    public function setUnionType($unionType)
    {
        $this->unionType             = $unionType;
        $this->apiParas["unionType"]  = $unionType;
    }

    public function getUnionType()
    {
        return $this->unionType;
    }

    /**
     * @param int $type
     * 站点类型 1网站推广位2.APP推广位3.社交媒体推广位4.聊天工具推广位5.二维码推广
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param int $type
     * 站点类型 1网站推广位2.APP推广位3.社交媒体推广位4.聊天工具推广位5.二维码推广
     * Example Value: 
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
     * @param int $siteId
     * 网站ID/app ID/snsID
     * Required: false
     * Example Value: 
     */
    private $siteId;

    /**
     * @param int $siteId
     * 网站ID/app ID/snsID
     * Example Value: 
     */
    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"]  = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param string[] $spaceName
     * 推广位名称，多个名称用,分割
     * Required: true
     * Example Value: 
     */
    private $spaceName;

    /**
     * @param string[] $spaceName
     * 推广位名称，多个名称用,分割
     * Example Value: 
     */
    public function setSpaceName($spaceName)
    {
        $this->spaceName             = $spaceName;
        $this->apiParas["spaceName"]  = $spaceName;
    }

    public function getSpaceName()
    {
        return $this->spaceName;
    }

}