<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分页查询采购单列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=485&apiName=jingdong.po.list.page.get
 * Class PoListPageGet
 * @package Jd\request
 */
class PoListPageGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.po.list.page.get";
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
     * 订购城市（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）
     * Required: false
     * Example Value: 
     */
    private $deliverCenterId;

    /**
     * @param int $deliverCenterId
     * 订购城市（3,上海 4,成都 5,武汉 6,北京 7,南京 8, 济南 9,沈阳 10,广州 316,西安 322, 福州 545, 杭州 601,天津 603,深圳 605,重庆 606,苏州 607,宁波 608,郑州 609,厦门 610,青岛 614,石家庄 615,太原 616,南宁 617,哈尔滨 618,大连 619,长沙 625,EPT配送中心628,兰州 629,包头 630,乌鲁木齐 631,合肥 632,宿迁 633,昆明 634,贵阳 636,长春 644,佛山 648,烟台）
     * Example Value: 
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
     * @param int $status
     * 是否删除(0:删除 1：正常)
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param int $status
     * 是否删除(0:删除 1：正常)
     * Example Value: 
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
     * @param string $createdDateStart
     * 创建日期-开始时间
     * Required: false
     * Example Value: 2013-12-26 16:09:07
     */
    private $createdDateStart;

    /**
     * @param string $createdDateStart
     * 创建日期-开始时间
     * Example Value: 2013-12-26 16:09:07
     */
    public function setCreatedDateStart($createdDateStart)
    {
        $this->createdDateStart             = $createdDateStart;
        $this->apiParas["createdDateStart"]  = $createdDateStart;
    }

    public function getCreatedDateStart()
    {
        return $this->createdDateStart;
    }

    /**
     * @param string $createdDateEnd
     * 创建日期-结束时间
     * Required: false
     * Example Value: 2013-12-26 16:09:10
     */
    private $createdDateEnd;

    /**
     * @param string $createdDateEnd
     * 创建日期-结束时间
     * Example Value: 2013-12-26 16:09:10
     */
    public function setCreatedDateEnd($createdDateEnd)
    {
        $this->createdDateEnd             = $createdDateEnd;
        $this->apiParas["createdDateEnd"]  = $createdDateEnd;
    }

    public function getCreatedDateEnd()
    {
        return $this->createdDateEnd;
    }

    /**
     * @param bool $isEptCustomized
     * 是否定制（不填:全部 false：EPT非定制  true：EPT定制）
     * Required: false
     * Example Value: true
     */
    private $isEptCustomized;

    /**
     * @param bool $isEptCustomized
     * 是否定制（不填:全部 false：EPT非定制  true：EPT定制）
     * Example Value: true
     */
    public function setIsEptCustomized($isEptCustomized)
    {
        $this->isEptCustomized             = $isEptCustomized;
        $this->apiParas["isEptCustomized"]  = $isEptCustomized;
    }

    public function getIsEptCustomized()
    {
        return $this->isEptCustomized;
    }

    /**
     * @param int $pageIndex
     * 当前页码（从1开始）
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 当前页码（从1开始）
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页大小（最大支持100）
     * Required: true
     * Example Value: 50
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小（最大支持100）
     * Example Value: 50
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int[] $orderIdList
     * 采购订单编号列表（不填默认全部）
     * Required: false
     * Example Value: 1016886,575391
     */
    private $orderIdList;

    /**
     * @param int[] $orderIdList
     * 采购订单编号列表（不填默认全部）
     * Example Value: 1016886,575391
     */
    public function setOrderIdList($orderIdList)
    {
        $this->orderIdList             = $orderIdList;
        $this->apiParas["orderIds"]  = $orderIdList;
    }

    public function getOrderIdList()
    {
        return $this->orderIdList;
    }

    /**
     * @param int[] $wareIdList
     * 商品编号列表（不填默认全部）
     * Required: false
     * Example Value: 1000248,1000247
     */
    private $wareIdList;

    /**
     * @param int[] $wareIdList
     * 商品编号列表（不填默认全部）
     * Example Value: 1000248,1000247
     */
    public function setWareIdList($wareIdList)
    {
        $this->wareIdList             = $wareIdList;
        $this->apiParas["wareIds"]  = $wareIdList;
    }

    public function getWareIdList()
    {
        return $this->wareIdList;
    }

    /**
     * @param int[] $stateList
     * 采购单状态列表(不填默认全部  0：新采购单；2：等待入库；3：已完成 ；5：等待摆货；6：等待审核；7：审核不通过；8：等待签收；10：等待经理审核；11：等待经理审核；12：等待总监审核；15：待确认；16：暂停订单)
     * Required: false
     * Example Value: 0,2
     */
    private $stateList;

    /**
     * @param int[] $stateList
     * 采购单状态列表(不填默认全部  0：新采购单；2：等待入库；3：已完成 ；5：等待摆货；6：等待审核；7：审核不通过；8：等待签收；10：等待经理审核；11：等待经理审核；12：等待总监审核；15：待确认；16：暂停订单)
     * Example Value: 0,2
     */
    public function setStateList($stateList)
    {
        $this->stateList             = $stateList;
        $this->apiParas["states"]  = $stateList;
    }

    public function getStateList()
    {
        return $this->stateList;
    }

    /**
     * @param int[] $confirmStateList
     * 回告状态列表（不填默认全部 0：未确认；1：回告成功；2：回告中；3：回告失败)
     * Required: false
     * Example Value: 1,2,3
     */
    private $confirmStateList;

    /**
     * @param int[] $confirmStateList
     * 回告状态列表（不填默认全部 0：未确认；1：回告成功；2：回告中；3：回告失败)
     * Example Value: 1,2,3
     */
    public function setConfirmStateList($confirmStateList)
    {
        $this->confirmStateList             = $confirmStateList;
        $this->apiParas["confirmStates"]  = $confirmStateList;
    }

    public function getConfirmStateList()
    {
        return $this->confirmStateList;
    }

    /**
     * @param int[] $orderAttributeList
     * 订单属性列表（不填默认全部 (1:新品订单、2:手工补货单、3:自动补货单、4:问题区补单 5：有单备货单、6：自动补货补给单、7：手工下单补给单、8：新品订单补给单、9：有单备货补给单）
     * Required: false
     * Example Value: 1,2,3
     */
    private $orderAttributeList;

    /**
     * @param int[] $orderAttributeList
     * 订单属性列表（不填默认全部 (1:新品订单、2:手工补货单、3:自动补货单、4:问题区补单 5：有单备货单、6：自动补货补给单、7：手工下单补给单、8：新品订单补给单、9：有单备货补给单）
     * Example Value: 1,2,3
     */
    public function setOrderAttributeList($orderAttributeList)
    {
        $this->orderAttributeList             = $orderAttributeList;
        $this->apiParas["orderAttributes"]  = $orderAttributeList;
    }

    public function getOrderAttributeList()
    {
        return $this->orderAttributeList;
    }

}