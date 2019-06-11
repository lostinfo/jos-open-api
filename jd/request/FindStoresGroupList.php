<?php

namespace JD\request;

/**
 * 根据条件查询门店列表
 * 订单API-订单API组(该组下所有接口均不支持自营店铺业务)
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=55&apiId=2832&apiName=jingdong.findStoresGroupList
 * Class FindStoresGroupList
 * @package Jd\request
 */
class FindStoresGroupList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.findStoresGroupList";
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
     * @param String $name
     * 门店组名称
     * Required: false
     * Example Value: 门店
     */
    private $name;

    /**
     * @param String $name
     * 门店组名称
     * Example Value: 门店
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

    /**
     * @param Number $groupId
     * 门店组ID
     * Required: false
     * Example Value: 0
     */
    private $groupId;

    /**
     * @param Number $groupId
     * 门店组ID
     * Example Value: 0
     */
    public function setGroupId($groupId)
    {
        $this->groupId             = $groupId;
        $this->apiParas["groupId"]  = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param Number $type
     * 门店组类型
     * Required: false
     * Example Value: 0
     */
    private $type;

    /**
     * @param Number $type
     * 门店组类型
     * Example Value: 0
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
     * @param Number $businessId
     * 经营主体ID
     * Required: false
     * Example Value: 0
     */
    private $businessId;

    /**
     * @param Number $businessId
     * 经营主体ID
     * Example Value: 0
     */
    public function setBusinessId($businessId)
    {
        $this->businessId             = $businessId;
        $this->apiParas["businessId"]  = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param Number $brandId
     * 品牌ID
     * Required: false
     * Example Value: 0
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌ID
     * Example Value: 0
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param String $creator
     * 操作人PIN
     * Required: false
     * Example Value: test
     */
    private $creator;

    /**
     * @param String $creator
     * 操作人PIN
     * Example Value: test
     */
    public function setCreator($creator)
    {
        $this->creator             = $creator;
        $this->apiParas["creator"]  = $creator;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param Number $pageIndex
     * 页数，第几页
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页数，第几页
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $pageSize
     * 每页大小，最大20
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小，最大20
     * Example Value: 20
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}