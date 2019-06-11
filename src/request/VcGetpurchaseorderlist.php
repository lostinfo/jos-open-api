<?php

namespca Lostinfo\JosOpenApi;

/**
 * 分页查询采购订单列表
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1192&apiName=jingdong.vc.getpurchaseorderlist
 * Class VcGetpurchaseorderlist
 * @package Jd\request
 */
class VcGetpurchaseorderlist
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.getpurchaseorderlist";
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
     * @param string $createdDateStart
     * 订购时间开始，要求订单时间结束-订购时间开始《=90
     * Required: true
     * Example Value: 2015-11-18 00:00:00
     */
    private $createdDateStart;

    /**
     * @param string $createdDateStart
     * 订购时间开始，要求订单时间结束-订购时间开始《=90
     * Example Value: 2015-11-18 00:00:00
     */
    public function setCreatedDateStart($createdDateStart)
    {
        $this->createdDateStart             = $createdDateStart;
        $this->apiParas["created_date_start"]  = $createdDateStart;
    }

    public function getCreatedDateStart()
    {
        return $this->createdDateStart;
    }

    /**
     * @param string $createdDateEnd
     * 订购时间结束，要求订单时间结束-订购时间开始《=90
     * Required: true
     * Example Value: 2015-11-18 23:59:59
     */
    private $createdDateEnd;

    /**
     * @param string $createdDateEnd
     * 订购时间结束，要求订单时间结束-订购时间开始《=90
     * Example Value: 2015-11-18 23:59:59
     */
    public function setCreatedDateEnd($createdDateEnd)
    {
        $this->createdDateEnd             = $createdDateEnd;
        $this->apiParas["created_date_end"]  = $createdDateEnd;
    }

    public function getCreatedDateEnd()
    {
        return $this->createdDateEnd;
    }

    /**
     * @param int $deliverCenterId
     * 配送中心编号（订购城市）；此信息请调用接口jingdong.vc.getwaredeliverdistinctlist方法获取，选择的code 
     * Required: false
     * Example Value: 6
     */
    private $deliverCenterId;

    /**
     * @param int $deliverCenterId
     * 配送中心编号（订购城市）；此信息请调用接口jingdong.vc.getwaredeliverdistinctlist方法获取，选择的code 
     * Example Value: 6
     */
    public function setDeliverCenterId($deliverCenterId)
    {
        $this->deliverCenterId             = $deliverCenterId;
        $this->apiParas["deliver_center_id"]  = $deliverCenterId;
    }

    public function getDeliverCenterId()
    {
        return $this->deliverCenterId;
    }

    /**
     * @param int $status
     * 删除状态；此信息请调用接口jingdong.vc.getcomponentlist方法获取，选择的code
     * Required: false
     * Example Value: 1
     */
    private $status;

    /**
     * @param int $status
     * 删除状态；此信息请调用接口jingdong.vc.getcomponentlist方法获取，选择的code
     * Example Value: 1
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
     * @param bool $isEptCustomized
     * 定制状态（true:定制;fasle:非定制）
     * Required: false
     * Example Value: true
     */
    private $isEptCustomized;

    /**
     * @param bool $isEptCustomized
     * 定制状态（true:定制;fasle:非定制）
     * Example Value: true
     */
    public function setIsEptCustomized($isEptCustomized)
    {
        $this->isEptCustomized             = $isEptCustomized;
        $this->apiParas["is_ept_customized"]  = $isEptCustomized;
    }

    public function getIsEptCustomized()
    {
        return $this->isEptCustomized;
    }

    /**
     * @param int $pageIndex
     * 页码，从1开始
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码，从1开始
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["page_index"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageSize
     * 每页大小，从1开始
     * Required: true
     * Example Value: 30
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页大小，从1开始
     * Example Value: 30
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
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
     * 采购单状态列表（请调用接口jingdong.vc.getcomponentlist方法获取，选择的code，不填默认全部）
     * Required: false
     * Example Value: 0,2
     */
    private $stateList;

    /**
     * @param int[] $stateList
     * 采购单状态列表（请调用接口jingdong.vc.getcomponentlist方法获取，选择的code，不填默认全部）
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
     * 回告状态列表；此信息请调用接口jingdong.vc.getcomponentlist方法获取，选择的code，不填默认全部
     * Required: false
     * Example Value: 1,2,3
     */
    private $confirmStateList;

    /**
     * @param int[] $confirmStateList
     * 回告状态列表；此信息请调用接口jingdong.vc.getcomponentlist方法获取，选择的code，不填默认全部
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

}