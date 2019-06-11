<?php

namespca Lostinfo\JosOpenApi;

/**
 * 创建采购单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=482&apiName=jingdong.procurement.order.create
 * Class ProcurementOrderCreate
 * @package Jd\request
 */
class ProcurementOrderCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.procurement.order.create";
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
     * @param int $deliverCenterId
     * 订购城市，京东的配送中心编号（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）
     * Required: true
     * Example Value: 6
     */
    private $deliverCenterId;

    /**
     * @param int $deliverCenterId
     * 订购城市，京东的配送中心编号（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）
     * Example Value: 6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["deliverCenterId"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

    /**
     * @param string $purchaserErpCode
     * 采销ErpCode
     * Required: true
     * Example Value: bjyy
     */
    private $purchaserErpCode;

    /**
     * @param string $purchaserErpCode
     * 采销ErpCode
     * Example Value: bjyy
     */
    public function setPurchaserErpCode($purchaserErpCode)
    {
        $this->purchaserErpCode             = $purchaserErpCode;
        $this->apiParas["purchaserErpCode"]  = $purchaserErpCode;
    }

    public function getPurchaserErpCode()
    {
        return $this->purchaserErpCode;
    }

    /**
     * @param string $remark
     * 备注
     * Required: false
     * Example Value: 手动补货单
     */
    private $remark;

    /**
     * @param string $remark
     * 备注
     * Example Value: 手动补货单
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param int[] $wareId
     * 京东商品Id（备注：多个以逗号隔开，且中间不能有空格）
     * Required: true
     * Example Value: 1,2,3
     */
    private $wareId;

    /**
     * @param int[] $wareId
     * 京东商品Id（备注：多个以逗号隔开，且中间不能有空格）
     * Example Value: 1,2,3
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int[] $deliverCenterId
     * 分配机构，京东的配送中心编号，填写要求必须是对应商品的库房属性维护的范围内（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）（备注：多个以逗号隔开，且中间不能有空格，与wareId顺序和个数保持一致）
     * Required: true
     * Example Value: 6,6,6
     */
    private $deliverCenterId;

    /**
     * @param int[] $deliverCenterId
     * 分配机构，京东的配送中心编号，填写要求必须是对应商品的库房属性维护的范围内（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）（备注：多个以逗号隔开，且中间不能有空格，与wareId顺序和个数保持一致）
     * Example Value: 6,6,6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["allocationDeliverCenterId"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

    /**
     * @param int[] $originalNum
     * 采购数量，要求必须大于0（备注：多个以逗号隔开，且中间不能有空格，与wareId顺序和个数保持一致）
     * Required: true
     * Example Value: 10,11,12
     */
    private $originalNum;

    /**
     * @param int[] $originalNum
     * 采购数量，要求必须大于0（备注：多个以逗号隔开，且中间不能有空格，与wareId顺序和个数保持一致）
     * Example Value: 10,11,12
     */
    public function setOriginalNum($originalNum)
    {
        $this->originalNum             = $originalNum;
        $this->apiParas["originalNum"]  = $originalNum;
    }

    public function getOriginalNum()
    {
        return $this->originalNum;
    }

}