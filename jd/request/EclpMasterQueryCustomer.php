<?php

namespace JD\request;

/**
 * 查询客户信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2767&apiName=jingdong.eclp.master.queryCustomer
 * Class EclpMasterQueryCustomer
 * @package Jd\request
 */
class EclpMasterQueryCustomer
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryCustomer";
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
     * @param String $deptNo
     * 事业部编号(必填，长度:16)
     * Required: true
     * Example Value: EBU0000000000666
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部编号(必填，长度:16)
     * Example Value: EBU0000000000666
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param String $sellerNo
     * 所属商家编号(非必填，长度：16) 
     * Required: false
     * Example Value: ECP0000000000013
     */
    private $sellerNo;

    /**
     * @param String $sellerNo
     * 所属商家编号(非必填，长度：16) 
     * Example Value: ECP0000000000013
     */
    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"]  = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    /**
     * @param String $customerNo
     * 客户编码(非必填，长度：50) 
     * Required: false
     * Example Value: C00216A
     */
    private $customerNo;

    /**
     * @param String $customerNo
     * 客户编码(非必填，长度：50) 
     * Example Value: C00216A
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo             = $customerNo;
        $this->apiParas["customerNo"]  = $customerNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * @param String $customerName
     * 客户名称(非必填，长度：100) 
     * Required: false
     * Example Value: 李宁
     */
    private $customerName;

    /**
     * @param String $customerName
     * 客户名称(非必填，长度：100) 
     * Example Value: 李宁
     */
    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"]  = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param String $warehouseNo
     * 仓库编号(非必填，长度：50) 
     * Required: false
     * Example Value: 110000001
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 仓库编号(非必填，长度：50) 
     * Example Value: 110000001
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $sellerName
     * 商家名称(非必填，长度：100) 
     * Required: false
     * Example Value: 靖哥哥商家
     */
    private $sellerName;

    /**
     * @param String $sellerName
     * 商家名称(非必填，长度：100) 
     * Example Value: 靖哥哥商家
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName             = $sellerName;
        $this->apiParas["sellerName"]  = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param Number $pageNo
     * 页码(如果需要分页查询，则需要填写页码,页码大小需要大于0)(非必填) 
     * Required: false
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param Number $pageNo
     * 页码(如果需要分页查询，则需要填写页码,页码大小需要大于0)(非必填) 
     * Example Value: 1
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param Number $pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10)
     * 每页记录数(非必填，长度：6) 
     * Required: false
     * Example Value: 100
     */
    private $pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10);

    /**
     * @param Number $pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10)
     * 每页记录数(非必填，长度：6) 
     * Example Value: 100
     */
    public function setPageSize(如果需要分页查询，可以填写每页显示的数量，默认为10)($pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10))
    {
        $this->pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10)             = $pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10);
        $this->apiParas["pageSize"]  = $pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10);
    }

    public function getPageSize(如果需要分页查询，可以填写每页显示的数量，默认为10)()
    {
        return $this->pageSize(如果需要分页查询，可以填写每页显示的数量，默认为10);
    }

}