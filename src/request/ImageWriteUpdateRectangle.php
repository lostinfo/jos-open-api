<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改商品图片长图的接口，不支持批量
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1653&apiName=jingdong.image.write.updateRectangle
 * Class ImageWriteUpdateRectangle
 * @package Jd\request
 */
class ImageWriteUpdateRectangle
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.image.write.updateRectangle";
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
     * Example Value: wareId
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
     * Example Value: wareId
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
     * @param string $colorId
     * 颜色id(方图的颜色id 必须先有方图)
     * Required: true
     * Example Value: colorId
     */
    private $colorId;

    /**
     * @param string $colorId
     * 颜色id(方图的颜色id 必须先有方图)
     * Example Value: colorId
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
     * @param int[] $imgId
     * 图片Id(必填 应方图生成的imgId)
     * Required: true
     * Example Value: imgId
     */
    private $imgId;

    /**
     * @param int[] $imgId
     * 图片Id(必填 应方图生成的imgId)
     * Example Value: imgId
     */
    public function setImgId($imgId)
    {
        $this->imgId             = $imgId;
        $this->apiParas["imgId"]  = $imgId;
    }

    public function getImgId()
    {
        return $this->imgId;
    }

    /**
     * @param string[] $imgRectangleUrl
     * 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     * Required: true
     * Example Value: 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     */
    private $imgRectangleUrl;

    /**
     * @param string[] $imgRectangleUrl
     * 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     * Example Value: 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     */
    public function setImgRectangleUrl($imgRectangleUrl)
    {
        $this->imgRectangleUrl             = $imgRectangleUrl;
        $this->apiParas["imgRectangleUrl"]  = $imgRectangleUrl;
    }

    public function getImgRectangleUrl()
    {
        return $this->imgRectangleUrl;
    }

    /**
     * @param int[] $imgIndex
     * 图片顺序。index值：1-N，如果index存在，则直接覆盖相应index图片
     * Required: true
     * Example Value: index值：1-N
     */
    private $imgIndex;

    /**
     * @param int[] $imgIndex
     * 图片顺序。index值：1-N，如果index存在，则直接覆盖相应index图片
     * Example Value: index值：1-N
     */
    public function setImgIndex($imgIndex)
    {
        $this->imgIndex             = $imgIndex;
        $this->apiParas["imgIndex"]  = $imgIndex;
    }

    public function getImgIndex()
    {
        return $this->imgIndex;
    }

}