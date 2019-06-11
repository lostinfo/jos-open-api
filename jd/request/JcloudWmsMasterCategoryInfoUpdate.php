<?php

namespace JD\request;

/**
 * 商品分类修改下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1621&apiName=jingdong.jcloud.wms.master.categoryInfo.update
 * Class JcloudWmsMasterCategoryInfoUpdate
 * @package Jd\request
 */
class JcloudWmsMasterCategoryInfoUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.categoryInfo.update";
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
     * @param String $tenantId
     * 租户ID
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
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
     * @param String $categoryNo
     * 类目编号
     * Required: true
     * Example Value: 
     */
    private $categoryNo;

    /**
     * @param String $categoryNo
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
     * @param String $categoryName
     * 类目名称
     * Required: true
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param String $categoryName
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
     * @param Number $sortNo
     * 同级序号
     * Required: false
     * Example Value: 
     */
    private $sortNo;

    /**
     * @param Number $sortNo
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
     * @param String $updateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $updateUser;

    /**
     * @param String $updateUser
     * 操作人
     * Example Value: 
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser             = $updateUser;
        $this->apiParas["operateUser"]  = $updateUser;
    }

    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * @param Date $updateTime
     * 操作时间
     * Required: false
     * Example Value: 
     */
    private $updateTime;

    /**
     * @param Date $updateTime
     * 操作时间
     * Example Value: 
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime             = $updateTime;
        $this->apiParas["operateTime"]  = $updateTime;
    }

    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param String $memo
     * 备注
     * Required: false
     * Example Value: 
     */
    private $memo;

    /**
     * @param String $memo
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