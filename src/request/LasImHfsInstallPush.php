<?php

namespca Lostinfo\JosOpenApi;

/**
 * 安装反馈
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=2323&apiName=jingdong.las.im.hfs.install.push
 * Class LasImHfsInstallPush
 * @package Jd\request
 */
class LasImHfsInstallPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.install.push";
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
     * @param string $verificationCode
     * 核销码
     * Required: false
     * Example Value: 
     */
    private $verificationCode;

    /**
     * @param string $verificationCode
     * 核销码
     * Example Value: 
     */
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode             = $verificationCode;
        $this->apiParas["ver_cod"]  = $verificationCode;
    }

    public function getVerificationCode()
    {
        return $this->verificationCode;
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
     * @param string $operatorName
     * 操作人姓名
     * Required: true
     * Example Value: 
     */
    private $operatorName;

    /**
     * @param string $operatorName
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
     * @param string $operatorTel
     * 操作人联系方式
     * Required: true
     * Example Value: 
     */
    private $operatorTel;

    /**
     * @param string $operatorTel
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
     * @param string $installDetail
     * 服务详情。(若服务项为退换机检测,拆机,则图片路径必填，其余服务项图片路径非必填)
     * Required: true
     * Example Value: [{“serviceNo”:“JD服务单号”,“installStatus”:“安装状态（81--上门安装，82--签收不安装，83--送达客户拒收）”,“url1”:“京东云图片路径1”,“url2”:“京东云图片路径2”,“url3”:“京东云图片路径3”,“insideCode”:“内机条码（非必填）”,“outsideCode”:“外机条码（非必填）”,“serviceItems”:[“服务项1编号”,“服务项2编号”,......]},{......},......]
     */
    private $installDetail;

    /**
     * @param string $installDetail
     * 服务详情。(若服务项为退换机检测,拆机,则图片路径必填，其余服务项图片路径非必填)
     * Example Value: [{“serviceNo”:“JD服务单号”,“installStatus”:“安装状态（81--上门安装，82--签收不安装，83--送达客户拒收）”,“url1”:“京东云图片路径1”,“url2”:“京东云图片路径2”,“url3”:“京东云图片路径3”,“insideCode”:“内机条码（非必填）”,“outsideCode”:“外机条码（非必填）”,“serviceItems”:[“服务项1编号”,“服务项2编号”,......]},{......},......]
     */
    public function setInstallDetail($installDetail)
    {
        $this->installDetail             = $installDetail;
        $this->apiParas["ins_det"]  = $installDetail;
    }

    public function getInstallDetail()
    {
        return $this->installDetail;
    }

}