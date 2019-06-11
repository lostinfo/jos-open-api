<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新物流状态
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1889&apiName=jingdong.las.im.hfs.status.push
 * Class LasImHfsStatusPush
 * @package Jd\request
 */
class LasImHfsStatusPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.status.push";
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
     * @param string $operatorName
     * 操作人
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param string $operatorName
     * 操作人
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
     * @param string $providerId
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $providerId;

    /**
     * @param string $providerId
     * 服务商编码
     * Example Value: 
     */
    public function setProviderId($providerId)
    {
        $this->providerId             = $providerId;
        $this->apiParas["ser_pro_no"]  = $providerId;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param string $operatorTime
     * 操作时间
     * Required: true
     * Example Value: 
     */
    private $operatorTime;

    /**
     * @param string $operatorTime
     * 操作时间
     * Example Value: 
     */
    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime             = $operatorTime;
        $this->apiParas["ope_t"]  = $operatorTime;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    /**
     * @param string $remark
     * 操作备注（长度超过50的内容会被强制截取，备注只对操作状态为“妥投”，“中转发货”，“中转到货”做数据记录）
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 操作备注（长度超过50的内容会被强制截取，备注只对操作状态为“妥投”，“中转发货”，“中转到货”做数据记录）
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["rem"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string $operatorDetail
     * 操作明细 logisticsStatus对应的状态码为：6（已收货/揽件）；1（已发货）；201（中转发货）；202（中转到货）；3（已到货）；4（妥投）；7（拒收）；8（再投）; 301（送回提货点）;302（取件完成）；303（取件失败，宜家订单取件失败需回传原因）;304（上门打卡）。providerLogisticsNo字段只对操作状态为“发货”做记录，其他状态均可不传或传空字符串。againTime字段只对操作状态为“再投”有效，格式为（yyyy-MM-dd HH:mm:ss）的字符串， 其他状态可空
     * Required: true
     * Example Value: [{“serviceNo”：“服务单号”,“providerLogisticsNo”：“平台服务商物流单号（允许一个订单对应多个，分摊到包裹）”，“logisticsStatus”：“更新状态Integer值”，“againTime”：“再投时间”},{......},......]
     */
    private $operatorDetail;

    /**
     * @param string $operatorDetail
     * 操作明细 logisticsStatus对应的状态码为：6（已收货/揽件）；1（已发货）；201（中转发货）；202（中转到货）；3（已到货）；4（妥投）；7（拒收）；8（再投）; 301（送回提货点）;302（取件完成）；303（取件失败，宜家订单取件失败需回传原因）;304（上门打卡）。providerLogisticsNo字段只对操作状态为“发货”做记录，其他状态均可不传或传空字符串。againTime字段只对操作状态为“再投”有效，格式为（yyyy-MM-dd HH:mm:ss）的字符串， 其他状态可空
     * Example Value: [{“serviceNo”：“服务单号”,“providerLogisticsNo”：“平台服务商物流单号（允许一个订单对应多个，分摊到包裹）”，“logisticsStatus”：“更新状态Integer值”，“againTime”：“再投时间”},{......},......]
     */
    public function setOperatorDetail($operatorDetail)
    {
        $this->operatorDetail             = $operatorDetail;
        $this->apiParas["det"]  = $operatorDetail;
    }

    public function getOperatorDetail()
    {
        return $this->operatorDetail;
    }

    /**
     * @param string $location
     * 状态发生时所在城市
     * Required: false
     * Example Value: 
     */
    private $location;

    /**
     * @param string $location
     * 状态发生时所在城市
     * Example Value: 
     */
    public function setLocation($location)
    {
        $this->location             = $location;
        $this->apiParas["loc"]  = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

}