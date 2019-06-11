<?php

namespca Lostinfo\JosOpenApi;

/**
 * 删除商品图片
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1261&apiName=jingdong.image.write.delete
 * Class ImageWriteDelete
 * @package Jd\request
 */
class ImageWriteDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.image.write.delete";
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
     * Example Value: 
     */
    private $wareId;

    /**
     * @param int $wareId
     * 商品id
     * Example Value: 
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
     * @param string[] $colorIds
     * 颜色id数组
     * Required: true
     * Example Value: 
     */
    private $colorIds;

    /**
     * @param string[] $colorIds
     * 颜色id数组
     * Example Value: 
     */
    public function setColorIds($colorIds)
    {
        $this->colorIds             = $colorIds;
        $this->apiParas["colorIds"]  = $colorIds;
    }

    public function getColorIds()
    {
        return $this->colorIds;
    }

    /**
     * @param int[] $imgIndexes
     * 图片位置数组，index值：1-N。如果删除靠前的index，系统会自动把后面的图片自动挪动
     * Required: true
     * Example Value: 
     */
    private $imgIndexes;

    /**
     * @param int[] $imgIndexes
     * 图片位置数组，index值：1-N。如果删除靠前的index，系统会自动把后面的图片自动挪动
     * Example Value: 
     */
    public function setImgIndexes($imgIndexes)
    {
        $this->imgIndexes             = $imgIndexes;
        $this->apiParas["imgIndexes"]  = $imgIndexes;
    }

    public function getImgIndexes()
    {
        return $this->imgIndexes;
    }

}