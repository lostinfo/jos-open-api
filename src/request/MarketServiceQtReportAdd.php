<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新增质检报告
 * 品控质检API-品控质检API为您提供新增质检报告、获得质检报告、获取订购关系、查询质检报告列表、删除质检报告、更新质检报告六个品控质检API.
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=65&apiId=247&apiName=jingdong.market.service.qt.report.add
 * Class MarketServiceQtReportAdd
 * @package Jd\request
 */
class MarketServiceQtReportAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.market.service.qt.report.add";
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
     * @param string $serviceItemCode
     * 服务收费项目code
     * Required: true
     * Example Value: FW_GOODS-10000-1
     */
    private $serviceItemCode;

    /**
     * @param string $serviceItemCode
     * 服务收费项目code
     * Example Value: FW_GOODS-10000-1
     */
    public function setServiceItemCode($serviceItemCode)
    {
        $this->serviceItemCode             = $serviceItemCode;
        $this->apiParas["service_item_code"]  = $serviceItemCode;
    }

    public function getServiceItemCode()
    {
        return $this->serviceItemCode;
    }

    /**
     * @param string $qtCode
     * 质检编号
     * Required: true
     * Example Value: 1000001
     */
    private $qtCode;

    /**
     * @param string $qtCode
     * 质检编号
     * Example Value: 1000001
     */
    public function setQtCode($qtCode)
    {
        $this->qtCode             = $qtCode;
        $this->apiParas["qt_code"]  = $qtCode;
    }

    public function getQtCode()
    {
        return $this->qtCode;
    }

    /**
     * @param string $qtName
     * 质检项名称
     * Required: true
     * Example Value: 皮鞋
     */
    private $qtName;

    /**
     * @param string $qtName
     * 质检项名称
     * Example Value: 皮鞋
     */
    public function setQtName($qtName)
    {
        $this->qtName             = $qtName;
        $this->apiParas["qt_name"]  = $qtName;
    }

    public function getQtName()
    {
        return $this->qtName;
    }

    /**
     * @param int $qtType
     * 质检活动类型   1：入驻京东、2：京东活动、3：质检打标、0：其他、4：品质优选、5：拼购验厂、6：食品验厂
     * Required: true
     * Example Value: 0
     */
    private $qtType;

    /**
     * @param int $qtType
     * 质检活动类型   1：入驻京东、2：京东活动、3：质检打标、0：其他、4：品质优选、5：拼购验厂、6：食品验厂
     * Example Value: 0
     */
    public function setQtType($qtType)
    {
        $this->qtType             = $qtType;
        $this->apiParas["qt_type"]  = $qtType;
    }

    public function getQtType()
    {
        return $this->qtType;
    }

    /**
     * @param string $qtStandard
     * 质检标准
     * Required: false
     * Example Value: GB18401
     */
    private $qtStandard;

    /**
     * @param string $qtStandard
     * 质检标准
     * Example Value: GB18401
     */
    public function setQtStandard($qtStandard)
    {
        $this->qtStandard             = $qtStandard;
        $this->apiParas["qt_standard"]  = $qtStandard;
    }

    public function getQtStandard()
    {
        return $this->qtStandard;
    }

    /**
     * @param int $isPassed
     * 样品是否合格.0:不合格；1：合格；空值：未判定（当status=3时赋值）
     * Required: false
     * Example Value: 0
     */
    private $isPassed;

    /**
     * @param int $isPassed
     * 样品是否合格.0:不合格；1：合格；空值：未判定（当status=3时赋值）
     * Example Value: 0
     */
    public function setIsPassed($isPassed)
    {
        $this->isPassed             = $isPassed;
        $this->apiParas["is_passed"]  = $isPassed;
    }

    public function getIsPassed()
    {
        return $this->isPassed;
    }

    /**
     * @param string $spName
     * 质检服务商名称
     * Required: true
     * Example Value: 服务商名称
     */
    private $spName;

    /**
     * @param string $spName
     * 质检服务商名称
     * Example Value: 服务商名称
     */
    public function setSpName($spName)
    {
        $this->spName             = $spName;
        $this->apiParas["sp_name"]  = $spName;
    }

    public function getSpName()
    {
        return $this->spName;
    }

    /**
     * @param string $message
     * 不合格原因
     * Required: false
     * Example Value: 检测不通过,需要修改标签
     */
    private $message;

    /**
     * @param string $message
     * 不合格原因
     * Example Value: 检测不通过,需要修改标签
     */
    public function setMessage($message)
    {
        $this->message             = $message;
        $this->apiParas["message"]  = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $submitTime
     * 提交检查时间,格式：yyyy-MM-dd hh:mm:ss
     * Required: true
     * Example Value: 2013-03-18 15:14:01
     */
    private $submitTime;

    /**
     * @param string $submitTime
     * 提交检查时间,格式：yyyy-MM-dd hh:mm:ss
     * Example Value: 2013-03-18 15:14:01
     */
    public function setSubmitTime($submitTime)
    {
        $this->submitTime             = $submitTime;
        $this->apiParas["submit_time"]  = $submitTime;
    }

    public function getSubmitTime()
    {
        return $this->submitTime;
    }

    /**
     * @param string $reportTime
     * 出具报告时间，格式：yyyy-MM-dd hh:mm:ss
     * Required: false
     * Example Value: 2013-03-18 15:14:01
     */
    private $reportTime;

    /**
     * @param string $reportTime
     * 出具报告时间，格式：yyyy-MM-dd hh:mm:ss
     * Example Value: 2013-03-18 15:14:01
     */
    public function setReportTime($reportTime)
    {
        $this->reportTime             = $reportTime;
        $this->apiParas["report_time"]  = $reportTime;
    }

    public function getReportTime()
    {
        return $this->reportTime;
    }

    /**
     * @param string $expiryTime
     * 质检有效期限，格式：yyyy-MM-dd hh:mm:ss
     * Required: false
     * Example Value: 2013-03-18 15:14:01
     */
    private $expiryTime;

    /**
     * @param string $expiryTime
     * 质检有效期限，格式：yyyy-MM-dd hh:mm:ss
     * Example Value: 2013-03-18 15:14:01
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime             = $expiryTime;
        $this->apiParas["expiry_time"]  = $expiryTime;
    }

    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @param string $itemUrl
     * 样品的链接
     * Required: false
     * Example Value: http://www.jd.com
     */
    private $itemUrl;

    /**
     * @param string $itemUrl
     * 样品的链接
     * Example Value: http://www.jd.com
     */
    public function setItemUrl($itemUrl)
    {
        $this->itemUrl             = $itemUrl;
        $this->apiParas["item_url"]  = $itemUrl;
    }

    public function getItemUrl()
    {
        return $this->itemUrl;
    }

    /**
     * @param string $itemDesc
     * 样品信息描述
     * Required: false
     * Example Value: 文字描述
     */
    private $itemDesc;

    /**
     * @param string $itemDesc
     * 样品信息描述
     * Example Value: 文字描述
     */
    public function setItemDesc($itemDesc)
    {
        $this->itemDesc             = $itemDesc;
        $this->apiParas["item_desc"]  = $itemDesc;
    }

    public function getItemDesc()
    {
        return $this->itemDesc;
    }

    /**
     * @param string $reportUrl
     * 质检报告地址
     * Required: false
     * Example Value: http://www.test.com/xx/xx.pdf
     */
    private $reportUrl;

    /**
     * @param string $reportUrl
     * 质检报告地址
     * Example Value: http://www.test.com/xx/xx.pdf
     */
    public function setReportUrl($reportUrl)
    {
        $this->reportUrl             = $reportUrl;
        $this->apiParas["report_url"]  = $reportUrl;
    }

    public function getReportUrl()
    {
        return $this->reportUrl;
    }

    /**
     * @param string $extAttr
     * 扩展属性通过冒号分隔属性与属性值. 分号分隔不同属性
     * Required: false
     * Example Value: color:red;size:5
     */
    private $extAttr;

    /**
     * @param string $extAttr
     * 扩展属性通过冒号分隔属性与属性值. 分号分隔不同属性
     * Example Value: color:red;size:5
     */
    public function setExtAttr($extAttr)
    {
        $this->extAttr             = $extAttr;
        $this->apiParas["ext_attr"]  = $extAttr;
    }

    public function getExtAttr()
    {
        return $this->extAttr;
    }

    /**
     * @param int $numIid
     * 样本宝贝id
     * Required: false
     * Example Value: 1234
     */
    private $numIid;

    /**
     * @param int $numIid
     * 样本宝贝id
     * Example Value: 1234
     */
    public function setNumIid($numIid)
    {
        $this->numIid             = $numIid;
        $this->apiParas["num_iid"]  = $numIid;
    }

    public function getNumIid()
    {
        return $this->numIid;
    }

    /**
     * @param int $status
     * 质检报告状态 0:已提交申请 1:已收到样品 2:已出检测结果 3.已出具报告
     * Required: true
     * Example Value: 0
     */
    private $status;

    /**
     * @param int $status
     * 质检报告状态 0:已提交申请 1:已收到样品 2:已出检测结果 3.已出具报告
     * Example Value: 0
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $pin
     * 送检人京东pin
     * Required: true
     * Example Value: test_pin
     */
    private $pin;

    /**
     * @param string $pin
     * 送检人京东pin
     * Example Value: test_pin
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param int $itemSku
     * 商品sku，当活动类型是京东活动时必填
     * Required: false
     * Example Value: 123456789
     */
    private $itemSku;

    /**
     * @param int $itemSku
     * 商品sku，当活动类型是京东活动时必填
     * Example Value: 123456789
     */
    public function setItemSku($itemSku)
    {
        $this->itemSku             = $itemSku;
        $this->apiParas["item_sku"]  = $itemSku;
    }

    public function getItemSku()
    {
        return $this->itemSku;
    }

    /**
     * @param string $itemTag
     * 吊牌图片地址
     * Required: false
     * Example Value: http://report.jd.com/tag.jpg
     */
    private $itemTag;

    /**
     * @param string $itemTag
     * 吊牌图片地址
     * Example Value: http://report.jd.com/tag.jpg
     */
    public function setItemTag($itemTag)
    {
        $this->itemTag             = $itemTag;
        $this->apiParas["item_tag"]  = $itemTag;
    }

    public function getItemTag()
    {
        return $this->itemTag;
    }

    /**
     * @param string $itemWashingMark
     * 水洗标图片地址
     * Required: false
     * Example Value: http://report.jd.com/washmark.jpg
     */
    private $itemWashingMark;

    /**
     * @param string $itemWashingMark
     * 水洗标图片地址
     * Example Value: http://report.jd.com/washmark.jpg
     */
    public function setItemWashingMark($itemWashingMark)
    {
        $this->itemWashingMark             = $itemWashingMark;
        $this->apiParas["item_washing_mark"]  = $itemWashingMark;
    }

    public function getItemWashingMark()
    {
        return $this->itemWashingMark;
    }

}