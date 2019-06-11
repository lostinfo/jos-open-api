<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询二维码列表
 * 二维码API- 商家二维码创建及查询
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=153&apiId=1010&apiName=jingdong.ma.code.list
 * Class MaCodeList
 * @package Jd\request
 */
class MaCodeList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ma.code.list";
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
     * @param int $type
     * 二维码类型：1表示包裹二维码，2表示渠道二维码
     * Required: true
     * Example Value: 1
     */
    private $type;

    /**
     * @param int $type
     * 二维码类型：1表示包裹二维码，2表示渠道二维码
     * Example Value: 1
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
     * @param int $page
     * 查询页码
     * Required: true
     * Example Value: 1
     */
    private $page;

    /**
     * @param int $page
     * 查询页码
     * Example Value: 1
     */
    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"]  = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $size
     * 每页记录数
     * Required: true
     * Example Value: 10
     */
    private $size;

    /**
     * @param int $size
     * 每页记录数
     * Example Value: 10
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

}