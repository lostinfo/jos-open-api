<?php

namespace JD\request;

/**
 * 接收线上预约分配信息
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1892&apiName=jingdong.las.spare.zerostock.assigninfo.push
 * Class LasSpareZerostockAssigninfoPush
 * @package Jd\request
 */
class LasSpareZerostockAssigninfoPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.spare.zerostock.assigninfo.push";
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
     * @param String $serviceNo
     * 服务单号
     * Required: true
     * Example Value: 
     */
    private $serviceNo;

    /**
     * @param String $serviceNo
     * 服务单号
     * Example Value: 
     */
    public function setServiceNo($serviceNo)
    {
        $this->serviceNo             = $serviceNo;
        $this->apiParas["afs_no"]  = $serviceNo;
    }

    public function getServiceNo()
    {
        return $this->serviceNo;
    }

    /**
     * @param String $orderNo
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param String $orderNo
     * 订单号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["ord_no"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param String $afsServiceTaskNo
     * 服务单任务编号
     * Required: false
     * Example Value: 
     */
    private $afsServiceTaskNo;

    /**
     * @param String $afsServiceTaskNo
     * 服务单任务编号
     * Example Value: 
     */
    public function setAfsServiceTaskNo($afsServiceTaskNo)
    {
        $this->afsServiceTaskNo             = $afsServiceTaskNo;
        $this->apiParas["afs_ser_tas_no"]  = $afsServiceTaskNo;
    }

    public function getAfsServiceTaskNo()
    {
        return $this->afsServiceTaskNo;
    }

    /**
     * @param String $websiteNo
     * 网点编号
     * Required: true
     * Example Value: 
     */
    private $websiteNo;

    /**
     * @param String $websiteNo
     * 网点编号
     * Example Value: 
     */
    public function setWebsiteNo($websiteNo)
    {
        $this->websiteNo             = $websiteNo;
        $this->apiParas["sit_no"]  = $websiteNo;
    }

    public function getWebsiteNo()
    {
        return $this->websiteNo;
    }

    /**
     * @param String $websiteName
     * 网点名称
     * Required: true
     * Example Value: 
     */
    private $websiteName;

    /**
     * @param String $websiteName
     * 网点名称
     * Example Value: 
     */
    public function setWebsiteName($websiteName)
    {
        $this->websiteName             = $websiteName;
        $this->apiParas["sit_n"]  = $websiteName;
    }

    public function getWebsiteName()
    {
        return $this->websiteName;
    }

    /**
     * @param String $websiteTel
     * 网点联系方式
     * Required: true
     * Example Value: 
     */
    private $websiteTel;

    /**
     * @param String $websiteTel
     * 网点联系方式
     * Example Value: 
     */
    public function setWebsiteTel($websiteTel)
    {
        $this->websiteTel             = $websiteTel;
        $this->apiParas["sit_tel"]  = $websiteTel;
    }

    public function getWebsiteTel()
    {
        return $this->websiteTel;
    }

    /**
     * @param String $actionTime
     * 网点信息生成时间（格式为yyyy-MM-dd HH:mm:ss）
     * Required: true
     * Example Value: 
     */
    private $actionTime;

    /**
     * @param String $actionTime
     * 网点信息生成时间（格式为yyyy-MM-dd HH:mm:ss）
     * Example Value: 
     */
    public function setActionTime($actionTime)
    {
        $this->actionTime             = $actionTime;
        $this->apiParas["act_t"]  = $actionTime;
    }

    public function getActionTime()
    {
        return $this->actionTime;
    }

}