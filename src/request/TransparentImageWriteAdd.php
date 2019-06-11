<?php

namespca Lostinfo\JosOpenApi;

/**
 * 商品透图追加
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=2504&apiName=jingdong.transparentImage.write.add
 * Class TransparentImageWriteAdd
 * @package Jd\request
 */
class TransparentImageWriteAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.transparentImage.write.add";
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

    /**
     * @param string[] $imageUrl
     * 规格为800*800；仅支持png类型；京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.png
     * Required: true
     * Example Value: jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.png
     */
    private $imageUrl;

    /**
     * @param string[] $imageUrl
     * 规格为800*800；仅支持png类型；京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.png
     * Example Value: jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.png
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl             = $imageUrl;
        $this->apiParas["imageUrl"]  = $imageUrl;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

}