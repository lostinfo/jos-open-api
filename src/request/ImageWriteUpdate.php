<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新增和修改商品图片的接口，支持批量
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1258&apiName=jingdong.image.write.update
 * Class ImageWriteUpdate
 * @package Jd\request
 */
class ImageWriteUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.image.write.update";
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
     * @param int[] $imgId
     * 图片Id
     * Required: false
     * Example Value: 1234
     */
    private $imgId;

    /**
     * @param int[] $imgId
     * 图片Id
     * Example Value: 1234
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

    /**
     * @param string[] $imgUrl
     * 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     * Required: true
     * Example Value: jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     */
    private $imgUrl;

    /**
     * @param string[] $imgUrl
     * 京东图片服务器地址，不包括前缀。例如：jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
     * Example Value: jfs/t2116/102/1731643157/81969/c3df941a/5670f868Nc441d4c3.jpg
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
     * @param string[] $imgZoneId
     * 图片空间中的图片Id
     * Required: false
     * Example Value: 1234
     */
    private $imgZoneId;

    /**
     * @param string[] $imgZoneId
     * 图片空间中的图片Id
     * Example Value: 1234
     */
    public function setImgZoneId($imgZoneId)
    {
        $this->imgZoneId             = $imgZoneId;
        $this->apiParas["imgZoneId"]  = $imgZoneId;
    }

    public function getImgZoneId()
    {
        return $this->imgZoneId;
    }

}