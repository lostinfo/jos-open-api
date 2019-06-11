<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品分类新增下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1622&apiName=jingdong.jcloud.wms.master.categoryInfo.insert
 * Class JcloudWmsMasterCategoryInfoInsert
 * @package Jd\request
 */
class JcloudWmsMasterCategoryInfoInsert
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.categoryInfo.insert";
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
     * @param string $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param string $tenantId
     * 租户ID
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param string $categoryNo
     * 类目编号
     * Required: true
     * Example Value: 
     */
    private $categoryNo;

    /**
     * @param string $categoryNo
     * 类目编号
     * Example Value: 
     */
    public function setCategoryNo($categoryNo)
    {
        $this->categoryNo             = $categoryNo;
        $this->apiParas["categoryNo"]  = $categoryNo;
    }

    public function getCategoryNo()
    {
        return $this->categoryNo;
    }

    /**
     * @param string $categoryName
     * 类目名称
     * Required: true
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param string $categoryName
     * 类目名称
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["categoryName"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $superiorString
     * 上级类目编码
     * Required: false
     * Example Value: 
     */
    private $superiorString;

    /**
     * @param string $superiorString
     * 上级类目编码
     * Example Value: 
     */
    public function setSuperiorString($superiorString)
    {
        $this->superiorString             = $superiorString;
        $this->apiParas["superior"]  = $superiorString;
    }

    public function getSuperiorString()
    {
        return $this->superiorString;
    }

    /**
     * @param string $createUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $createUser;

    /**
     * @param string $createUser
     * 操作人
     * Example Value: 
     */
    public function setCreateUser($createUser)
    {
        $this->createUser             = $createUser;
        $this->apiParas["operateUser"]  = $createUser;
    }

    public function getCreateUser()
    {
        return $this->createUser;
    }

    /**
     * @param string $createTime
     * 操作时间
     * Required: false
     * Example Value: 
     */
    private $createTime;

    /**
     * @param string $createTime
     * 操作时间
     * Example Value: 
     */
    public function setCreateTime($createTime)
    {
        $this->createTime             = $createTime;
        $this->apiParas["operateTime"]  = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param int $sortNo
     * 同级序号
     * Required: false
     * Example Value: 
     */
    private $sortNo;

    /**
     * @param int $sortNo
     * 同级序号
     * Example Value: 
     */
    public function setSortNo($sortNo)
    {
        $this->sortNo             = $sortNo;
        $this->apiParas["sortNo"]  = $sortNo;
    }

    public function getSortNo()
    {
        return $this->sortNo;
    }

    /**
     * @param string $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param string $memo
     * 备注
     * Example Value: 
     */
    public function setMemo($memo)
    {
        $this->memo             = $memo;
        $this->apiParas["memo"]  = $memo;
    }

    public function getMemo()
    {
        return $this->memo;
    }

}