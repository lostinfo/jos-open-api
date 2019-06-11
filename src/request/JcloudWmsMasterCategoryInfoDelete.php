<?php

namespca Lostinfo\JosOpenApi;

/**
 * 商品分类删除下传
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1620&apiName=jingdong.jcloud.wms.master.categoryInfo.delete
 * Class JcloudWmsMasterCategoryInfoDelete
 * @package Jd\request
 */
class JcloudWmsMasterCategoryInfoDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.categoryInfo.delete";
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
     * @param string $updateUser
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $updateUser;

    /**
     * @param string $updateUser
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
     * @param string $updateTime
     * 操作时间
     * Required: false
     * Example Value: 
     */
    private $updateTime;

    /**
     * @param string $updateTime
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

}