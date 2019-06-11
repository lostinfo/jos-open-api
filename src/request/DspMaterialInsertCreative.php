<?php

namespca Lostinfo\JosOpenApi;

/**
 * 操作.通用.上传资质
 * 京准通-品牌聚效API（展位）-京准通展位相关API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=341&apiId=1943&apiName=jingdong.dsp.material.insertCreative
 * Class DspMaterialInsertCreative
 * @package Jd\request
 */
class DspMaterialInsertCreative
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.insertCreative";
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
     * @param string $imgUrl
     * 图片地址
     * Required: true
     * Example Value: 
     */
    private $imgUrl;

    /**
     * @param string $imgUrl
     * 图片地址
     * Example Value: 
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["imgUrl"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param string $name
     * 资质名称
     * Required: true
     * Example Value: 
     */
    private $name;

    /**
     * @param string $name
     * 资质名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}