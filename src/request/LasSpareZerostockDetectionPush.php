<?php

namespace JD\request;

/**
 * 接收厂家上门检测信息
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1891&apiName=jingdong.las.spare.zerostock.detection.push
 * Class LasSpareZerostockDetectionPush
 * @package Jd\request
 */
class LasSpareZerostockDetectionPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.spare.zerostock.detection.push";
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
     * @param String $engineerNo
     * 工程师账号
     * Required: true
     * Example Value: 
     */
    private $engineerNo;

    /**
     * @param String $engineerNo
     * 工程师账号
     * Example Value: 
     */
    public function setEngineerNo($engineerNo)
    {
        $this->engineerNo             = $engineerNo;
        $this->apiParas["eng_no"]  = $engineerNo;
    }

    public function getEngineerNo()
    {
        return $this->engineerNo;
    }

    /**
     * @param String $engineerName
     * 工程师姓名
     * Required: true
     * Example Value: 
     */
    private $engineerName;

    /**
     * @param String $engineerName
     * 工程师姓名
     * Example Value: 
     */
    public function setEngineerName($engineerName)
    {
        $this->engineerName             = $engineerName;
        $this->apiParas["eng_n"]  = $engineerName;
    }

    public function getEngineerName()
    {
        return $this->engineerName;
    }

    /**
     * @param String $engineerTel
     * 工程师联系方式
     * Required: true
     * Example Value: 
     */
    private $engineerTel;

    /**
     * @param String $engineerTel
     * 工程师联系方式
     * Example Value: 
     */
    public function setEngineerTel($engineerTel)
    {
        $this->engineerTel             = $engineerTel;
        $this->apiParas["eng_mp"]  = $engineerTel;
    }

    public function getEngineerTel()
    {
        return $this->engineerTel;
    }

    /**
     * @param String $goodsSku
     * 商品编号SKU
     * Required: true
     * Example Value: 
     */
    private $goodsSku;

    /**
     * @param String $goodsSku
     * 商品编号SKU
     * Example Value: 
     */
    public function setGoodsSku($goodsSku)
    {
        $this->goodsSku             = $goodsSku;
        $this->apiParas["goo_sku"]  = $goodsSku;
    }

    public function getGoodsSku()
    {
        return $this->goodsSku;
    }

    /**
     * @param String $actionTime
     * 检测信息生成时间（格式为yyyy-MM-dd HH:mm:ss）
     * Required: true
     * Example Value: 
     */
    private $actionTime;

    /**
     * @param String $actionTime
     * 检测信息生成时间（格式为yyyy-MM-dd HH:mm:ss）
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

    /**
     * @param String $goodsName
     * 商品名称
     * Required: true
     * Example Value: 
     */
    private $goodsName;

    /**
     * @param String $goodsName
     * 商品名称
     * Example Value: 
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName             = $goodsName;
        $this->apiParas["goo_n"]  = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param Number $detectionResult
     * 处理结果
     * Required: true
     * Example Value: 
     */
    private $detectionResult;

    /**
     * @param Number $detectionResult
     * 处理结果
     * Example Value: 
     */
    public function setDetectionResult($detectionResult)
    {
        $this->detectionResult             = $detectionResult;
        $this->apiParas["det_rs"]  = $detectionResult;
    }

    public function getDetectionResult()
    {
        return $this->detectionResult;
    }

    /**
     * @param Boolean $isGetInvoice
     * 是否取发票
     * Required: true
     * Example Value: 
     */
    private $isGetInvoice;

    /**
     * @param Boolean $isGetInvoice
     * 是否取发票
     * Example Value: 
     */
    public function setIsGetInvoice($isGetInvoice)
    {
        $this->isGetInvoice             = $isGetInvoice;
        $this->apiParas["is_inv"]  = $isGetInvoice;
    }

    public function getIsGetInvoice()
    {
        return $this->isGetInvoice;
    }

    /**
     * @param String $goodsSn
     * 商品SN码
     * Required: false
     * Example Value: 
     */
    private $goodsSn;

    /**
     * @param String $goodsSn
     * 商品SN码
     * Example Value: 
     */
    public function setGoodsSn($goodsSn)
    {
        $this->goodsSn             = $goodsSn;
        $this->apiParas["goo_sn"]  = $goodsSn;
    }

    public function getGoodsSn()
    {
        return $this->goodsSn;
    }

    /**
     * @param String $notRefundReason
     * 不符合退换原因
     * Required: true
     * Example Value: 
     */
    private $notRefundReason;

    /**
     * @param String $notRefundReason
     * 不符合退换原因
     * Example Value: 
     */
    public function setNotRefundReason($notRefundReason)
    {
        $this->notRefundReason             = $notRefundReason;
        $this->apiParas["not_ref_rea"]  = $notRefundReason;
    }

    public function getNotRefundReason()
    {
        return $this->notRefundReason;
    }

    /**
     * @param String $refundReason
     * 退换货原因
     * Required: true
     * Example Value: 
     */
    private $refundReason;

    /**
     * @param String $refundReason
     * 退换货原因
     * Example Value: 
     */
    public function setRefundReason($refundReason)
    {
        $this->refundReason             = $refundReason;
        $this->apiParas["ref_rea"]  = $refundReason;
    }

    public function getRefundReason()
    {
        return $this->refundReason;
    }

    /**
     * @param String $dealType
     * 现场处理方式
     * Required: true
     * Example Value: 
     */
    private $dealType;

    /**
     * @param String $dealType
     * 现场处理方式
     * Example Value: 
     */
    public function setDealType($dealType)
    {
        $this->dealType             = $dealType;
        $this->apiParas["dea_typ"]  = $dealType;
    }

    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * @param String $goodsPackageName
     * 包装
     * Required: true
     * Example Value: 
     */
    private $goodsPackageName;

    /**
     * @param String $goodsPackageName
     * 包装
     * Example Value: 
     */
    public function setGoodsPackageName($goodsPackageName)
    {
        $this->goodsPackageName             = $goodsPackageName;
        $this->apiParas["goo_pac_n"]  = $goodsPackageName;
    }

    public function getGoodsPackageName()
    {
        return $this->goodsPackageName;
    }

    /**
     * @param String $goodsExteriorName
     * 商品外观
     * Required: true
     * Example Value: 
     */
    private $goodsExteriorName;

    /**
     * @param String $goodsExteriorName
     * 商品外观
     * Example Value: 
     */
    public function setGoodsExteriorName($goodsExteriorName)
    {
        $this->goodsExteriorName             = $goodsExteriorName;
        $this->apiParas["goo_ext_n"]  = $goodsExteriorName;
    }

    public function getGoodsExteriorName()
    {
        return $this->goodsExteriorName;
    }

    /**
     * @param String $goodsFunctionName
     * 商品功能
     * Required: true
     * Example Value: 
     */
    private $goodsFunctionName;

    /**
     * @param String $goodsFunctionName
     * 商品功能
     * Example Value: 
     */
    public function setGoodsFunctionName($goodsFunctionName)
    {
        $this->goodsFunctionName             = $goodsFunctionName;
        $this->apiParas["goo_fun_n"]  = $goodsFunctionName;
    }

    public function getGoodsFunctionName()
    {
        return $this->goodsFunctionName;
    }

    /**
     * @param String $attachmentDesc
     * 附件描述
     * Required: true
     * Example Value: 
     */
    private $attachmentDesc;

    /**
     * @param String $attachmentDesc
     * 附件描述
     * Example Value: 
     */
    public function setAttachmentDesc($attachmentDesc)
    {
        $this->attachmentDesc             = $attachmentDesc;
        $this->apiParas["att_desc"]  = $attachmentDesc;
    }

    public function getAttachmentDesc()
    {
        return $this->attachmentDesc;
    }

    /**
     * @param Boolean $isBrokenScreen
     * 是否碎屏
     * Required: false
     * Example Value: 
     */
    private $isBrokenScreen;

    /**
     * @param Boolean $isBrokenScreen
     * 是否碎屏
     * Example Value: 
     */
    public function setIsBrokenScreen($isBrokenScreen)
    {
        $this->isBrokenScreen             = $isBrokenScreen;
        $this->apiParas["is_bro_scr"]  = $isBrokenScreen;
    }

    public function getIsBrokenScreen()
    {
        return $this->isBrokenScreen;
    }

}