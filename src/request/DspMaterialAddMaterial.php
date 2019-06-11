<?php

namespace JD\request;

/**
 * 操作.创意库.上传创意
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1947&apiName=jingdong.dsp.material.addMaterial
 * Class DspMaterialAddMaterial
 * @package Jd\request
 */
class DspMaterialAddMaterial
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.addMaterial";
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
     * @param String $materialName
     * 素材名称
     * Required: true
     * Example Value: 
     */
    private $materialName;

    /**
     * @param String $materialName
     * 素材名称
     * Example Value: 
     */
    public function setMaterialName($materialName)
    {
        $this->materialName             = $materialName;
        $this->apiParas["materialName"]  = $materialName;
    }

    public function getMaterialName()
    {
        return $this->materialName;
    }

    /**
     * @param Date $effectiveDate
     * 生效日期
     * Required: true
     * Example Value: 
     */
    private $effectiveDate;

    /**
     * @param Date $effectiveDate
     * 生效日期
     * Example Value: 
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate             = $effectiveDate;
        $this->apiParas["effectiveDate"]  = $effectiveDate;
    }

    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @param Date $expirationDate
     * 有效日期
     * Required: true
     * Example Value: 
     */
    private $expirationDate;

    /**
     * @param Date $expirationDate
     * 有效日期
     * Example Value: 
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate             = $expirationDate;
        $this->apiParas["expirationDate"]  = $expirationDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param String $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param String $mediaId
     * 广告位id
     * Required: true
     * Example Value: 
     */
    private $mediaId;

    /**
     * @param String $mediaId
     * 广告位id
     * Example Value: 
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId             = $mediaId;
        $this->apiParas["mediaId"]  = $mediaId;
    }

    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * @param String $creativeId
     * 资质id
     * Required: false
     * Example Value: 
     */
    private $creativeId;

    /**
     * @param String $creativeId
     * 资质id
     * Example Value: 
     */
    public function setCreativeId($creativeId)
    {
        $this->creativeId             = $creativeId;
        $this->apiParas["creativeId"]  = $creativeId;
    }

    public function getCreativeId()
    {
        return $this->creativeId;
    }

    /**
     * @param String $imgSrc
     * 图片地址
     * Required: true
     * Example Value: 
     */
    private $imgSrc;

    /**
     * @param String $imgSrc
     * 图片地址
     * Example Value: 
     */
    public function setImgSrc($imgSrc)
    {
        $this->imgSrc             = $imgSrc;
        $this->apiParas["imgSrc"]  = $imgSrc;
    }

    public function getImgSrc()
    {
        return $this->imgSrc;
    }

    /**
     * @param String $url
     * 落地页地址
     * Required: true
     * Example Value: 
     */
    private $url;

    /**
     * @param String $url
     * 落地页地址
     * Example Value: 
     */
    public function setUrl($url)
    {
        $this->url             = $url;
        $this->apiParas["url"]  = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param Number $width
     * 宽
     * Required: true
     * Example Value: 
     */
    private $width;

    /**
     * @param Number $width
     * 宽
     * Example Value: 
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param Number $height
     * 高
     * Required: true
     * Example Value: 
     */
    private $height;

    /**
     * @param Number $height
     * 高
     * Example Value: 
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

}