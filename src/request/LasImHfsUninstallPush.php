<?php

namespace JD\request;

/**
 * 取消安装
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1899&apiName=jingdong.las.im.hfs.uninstall.push
 * Class LasImHfsUninstallPush
 * @package Jd\request
 */
class LasImHfsUninstallPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.uninstall.push";
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
     * @param String $serviceProviderNo
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $serviceProviderNo;

    /**
     * @param String $serviceProviderNo
     * 服务商编码
     * Example Value: 
     */
    public function setServiceProviderNo($serviceProviderNo)
    {
        $this->serviceProviderNo             = $serviceProviderNo;
        $this->apiParas["ser_pro_no"]  = $serviceProviderNo;
    }

    public function getServiceProviderNo()
    {
        return $this->serviceProviderNo;
    }

    /**
     * @param Date $operateTime
     * 接口操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param Date $operateTime
     * 接口操作时间
     * Example Value: 
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime             = $operateTime;
        $this->apiParas["ope_t"]  = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * @param String $operatorName
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param String $operatorName
     * 操作人姓名
     * Example Value: 
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName             = $operatorName;
        $this->apiParas["ope_n"]  = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param String $operatorTel
     * 操作人联系方式
     * Required: true
     * Example Value: 
     */
    private $operatorTel;

    /**
     * @param String $operatorTel
     * 操作人联系方式
     * Example Value: 
     */
    public function setOperatorTel($operatorTel)
    {
        $this->operatorTel             = $operatorTel;
        $this->apiParas["ope_tel"]  = $operatorTel;
    }

    public function getOperatorTel()
    {
        return $this->operatorTel;
    }

    /**
     * @param String $uninstallDetail
     * 取消明细
     * Required: true
     * Example Value: [{“serviceNo”:“JD服务单号”,“installStatus”:“取消安装状态（131--非我网点服务，132--客户原因取消订单，133--网点原因，134--重复订单）”},{......},......]
     */
    private $uninstallDetail;

    /**
     * @param String $uninstallDetail
     * 取消明细
     * Example Value: [{“serviceNo”:“JD服务单号”,“installStatus”:“取消安装状态（131--非我网点服务，132--客户原因取消订单，133--网点原因，134--重复订单）”},{......},......]
     */
    public function setUninstallDetail($uninstallDetail)
    {
        $this->uninstallDetail             = $uninstallDetail;
        $this->apiParas["uni_det"]  = $uninstallDetail;
    }

    public function getUninstallDetail()
    {
        return $this->uninstallDetail;
    }

}