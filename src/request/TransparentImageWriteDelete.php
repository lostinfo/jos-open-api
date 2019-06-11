<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品透图删除
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2505&apiName=jingdong.transparentImage.write.delete
 * Class TransparentImageWriteDelete
 * @package Jd\request
 */
class TransparentImageWriteDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.transparentImage.write.delete";
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
     * @param int $wareId
     * 商品id
     * Required: true
     * Example Value: 1234
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
     * Example Value: 1234
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string[] $colorId
     * 颜色id。如果没有颜色id，则默认为10个0
     * Required: true
     * Example Value: 0000000000
     */
    private $colorId;

    /**
     * @param string[] $colorId
     * 颜色id。如果没有颜色id，则默认为10个0
     * Example Value: 0000000000
     */
    public function setColorId($colorId)
    {
        $this->colorId             = $colorId;
        $this->apiParas["colorId"]  = $colorId;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

}