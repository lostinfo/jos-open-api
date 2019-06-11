<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 一号店生成推广链接接口【申请】
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1937&apiName=jingdong.service.yhd.promotion.getInfo
 * Class ServiceYhdPromotionGetInfo
 * @package Jd\request
 */
class ServiceYhdPromotionGetInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.yhd.promotion.getInfo";
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
     * @param int $proCont
     * 推广类型
     * Required: true
     * Example Value: 
     */
    private $proCont;

    /**
     * @param int $proCont
     * 推广类型
     * Example Value: 
     */
    public function setProCont($proCont)
    {
        $this->proCont             = $proCont;
        $this->apiParas["proCont"]  = $proCont;
    }

    public function getProCont()
    {
        return $this->proCont;
    }

    /**
     * @param string $materialId
     * 推广物料 就是落地页
     * Required: true
     * Example Value: 
     */
    private $materialId;

    /**
     * @param string $materialId
     * 推广物料 就是落地页
     * Example Value: 
     */
    public function setMaterialId($materialId)
    {
        $this->materialId             = $materialId;
        $this->apiParas["materialId"]  = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
    }

    /**
     * @param int $unionId
     * 联盟ID
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
     * 联盟ID
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
     * @param string $subUnionId
     * 子联盟ID
     * Required: false
     * Example Value: 
     */
    private $subUnionId;

    /**
     * @param string $subUnionId
     * 子联盟ID
     * Example Value: 
     */
    public function setSubUnionId($subUnionId)
    {
        $this->subUnionId             = $subUnionId;
        $this->apiParas["subUnionId"]  = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    /**
     * @param string $webId
     * 网站id
     * Required: true
     * Example Value: 
     */
    private $webId;

    /**
     * @param string $webId
     * 网站id
     * Example Value: 
     */
    public function setWebId($webId)
    {
        $this->webId             = $webId;
        $this->apiParas["webId"]  = $webId;
    }

    public function getWebId()
    {
        return $this->webId;
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
     * @param int $positionId
     * 推广位id
     * Required: false
     * Example Value: 
     */
    private $positionId;

    /**
     * @param int $positionId
     * 推广位id
     * Example Value: 
     */
    public function setPositionId($positionId)
    {
        $this->positionId             = $positionId;
        $this->apiParas["positionId"]  = $positionId;
    }

    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * @param int $protocol
     * 传输协议 1为https 其他为 http
     * Required: false
     * Example Value: 
     */
    private $protocol;

    /**
     * @param int $protocol
     * 传输协议 1为https 其他为 http
     * Example Value: 
     */
    public function setProtocol($protocol)
    {
        $this->protocol             = $protocol;
        $this->apiParas["protocol"]  = $protocol;
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

}