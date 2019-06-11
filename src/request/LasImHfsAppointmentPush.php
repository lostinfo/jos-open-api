<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 安装（预约/改约/派工/改派）状态回传
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1900&apiName=jingdong.las.im.hfs.appointment.push
 * Class LasImHfsAppointmentPush
 * @package Jd\request
 */
class LasImHfsAppointmentPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.appointment.push";
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
     * @param string $orderNo
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
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
     * @param string $serviceProviderNo
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $serviceProviderNo;

    /**
     * @param string $serviceProviderNo
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
     * @param string $operateTime
     * 接口操作时间
     * Required: true
     * Example Value: 
     */
    private $operateTime;

    /**
     * @param string $operateTime
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
     * @param string $serviceDetail
     * 服务单详情（非必填项：预约时间起、预约时间止、工程师姓名、工程师联系电话）
     * Required: true
     * Example Value: [{“serviceNo”:“服务单号”,“appointmentStatus”:“预约状态;100--服务商预约,110--服务商改约,200--服务商派工,210--服务商改派”,“appointmentTimeBegin”:“预约时间起”,“appointmentTimeEnd”:“预约时间止”,“engineerName”:“工程师姓名”,engineerTel:“工程师联系电话”},{......},......]
     */
    private $serviceDetail;

    /**
     * @param string $serviceDetail
     * 服务单详情（非必填项：预约时间起、预约时间止、工程师姓名、工程师联系电话）
     * Example Value: [{“serviceNo”:“服务单号”,“appointmentStatus”:“预约状态;100--服务商预约,110--服务商改约,200--服务商派工,210--服务商改派”,“appointmentTimeBegin”:“预约时间起”,“appointmentTimeEnd”:“预约时间止”,“engineerName”:“工程师姓名”,engineerTel:“工程师联系电话”},{......},......]
     */
    public function setServiceDetail($serviceDetail)
    {
        $this->serviceDetail             = $serviceDetail;
        $this->apiParas["ser_det"]  = $serviceDetail;
    }

    public function getServiceDetail()
    {
        return $this->serviceDetail;
    }

}