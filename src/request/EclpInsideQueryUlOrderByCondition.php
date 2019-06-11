<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 报废出库订单查询接口
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2773&apiName=jingdong.eclp.inside.queryUlOrderByCondition
 * Class EclpInsideQueryUlOrderByCondition
 * @package Jd\request
 */
class EclpInsideQueryUlOrderByCondition
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.queryUlOrderByCondition";
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
     * @param int $pageSize
     * 每页记录显示条数（大于0小于50）
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录显示条数（大于0小于50）
     * Example Value: 10
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
     * @param int $pageNum
     * 第几页(从0开始)
     * Required: true
     * Example Value: 0
     */
    private $pageNum;

    /**
     * @param int $pageNum
     * 第几页(从0开始)
     * Example Value: 0
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"]  = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param string $ulNo
     * ECLP报废单号，以EUL开头，最大长度50
     * Required: false
     * Example Value: EUL4398046512130
     */
    private $ulNo;

    /**
     * @param string $ulNo
     * ECLP报废单号，以EUL开头，最大长度50
     * Example Value: EUL4398046512130
     */
    public function setUlNo($ulNo)
    {
        $this->ulNo             = $ulNo;
        $this->apiParas["ulNo"]  = $ulNo;
    }

    public function getUlNo()
    {
        return $this->ulNo;
    }

    /**
     * @param string $outUlNo
     * 商家报废单号，最大长度50
     * Required: true
     * Example Value: OCN040090013
     */
    private $outUlNo;

    /**
     * @param string $outUlNo
     * 商家报废单号，最大长度50
     * Example Value: OCN040090013
     */
    public function setOutUlNo($outUlNo)
    {
        $this->outUlNo             = $outUlNo;
        $this->apiParas["outUlNo"]  = $outUlNo;
    }

    public function getOutUlNo()
    {
        return $this->outUlNo;
    }

    /**
     * @param string $deptNo
     * 事业部编号，以EBU开头，最大长度30
     * Required: true
     * Example Value: EBU4398046515824
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号，以EBU开头，最大长度30
     * Example Value: EBU4398046515824
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
     * @param string $warehouseNo
     * 开发平台仓库编号，最大长度20
     * Required: true
     * Example Value: 110005442
     */
    private $warehouseNo;

    /**
     * @param string $warehouseNo
     * 开发平台仓库编号，最大长度20
     * Example Value: 110005442
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
     * @param  $allowReturnDest
     * 是否回传销毁资料（1：是，0：否，默认值为0）
     * Required: false
     * Example Value: 0
     */
    private $allowReturnDest;

    /**
     * @param  $allowReturnDest
     * 是否回传销毁资料（1：是，0：否，默认值为0）
     * Example Value: 0
     */
    public function setAllowReturnDest($allowReturnDest)
    {
        $this->allowReturnDest             = $allowReturnDest;
        $this->apiParas["allowReturnDest"]  = $allowReturnDest;
    }

    public function getAllowReturnDest()
    {
        return $this->allowReturnDest;
    }

}