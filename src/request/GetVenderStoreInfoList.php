<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 门店券对接店家门店查询接口
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3602&apiName=jingdong.getVenderStoreInfoList
 * Class GetVenderStoreInfoList
 * @package Jd\request
 */
class GetVenderStoreInfoList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getVenderStoreInfoList";
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
     * @param string[] $exStoreId
     * 品牌门店编号
     * Required: false
     * Example Value: 
     */
    private $exStoreId;

    /**
     * @param string[] $exStoreId
     * 品牌门店编号
     * Example Value: 
     */
    public function setExStoreId($exStoreId)
    {
        $this->exStoreId             = $exStoreId;
        $this->apiParas["exStoreId"]  = $exStoreId;
    }

    public function getExStoreId()
    {
        return $this->exStoreId;
    }

    /**
     * @param int $pageIndex
     * 页码
     * Required: false
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param int $pageIndex
     * 页码
     * Example Value: 
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
     * 页数
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 页数
     * Example Value: 
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
     * @param int[] $storeId
     * 平台门店编号
     * Required: false
     * Example Value: 
     */
    private $storeId;

    /**
     * @param int[] $storeId
     * 平台门店编号
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param string $storeName
     * 门店名称
     * Required: false
     * Example Value: 
     */
    private $storeName;

    /**
     * @param string $storeName
     * 门店名称
     * Example Value: 
     */
    public function setStoreName($storeName)
    {
        $this->storeName             = $storeName;
        $this->apiParas["storeName"]  = $storeName;
    }

    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param int $storeStatus
     * 门店状态
     * Required: false
     * Example Value: 
     */
    private $storeStatus;

    /**
     * @param int $storeStatus
     * 门店状态
     * Example Value: 
     */
    public function setStoreStatus($storeStatus)
    {
        $this->storeStatus             = $storeStatus;
        $this->apiParas["storeStatus"]  = $storeStatus;
    }

    public function getStoreStatus()
    {
        return $this->storeStatus;
    }

    /**
     * @param int $firstAddress
     * 门店一级地址
     * Required: false
     * Example Value: 
     */
    private $firstAddress;

    /**
     * @param int $firstAddress
     * 门店一级地址
     * Example Value: 
     */
    public function setFirstAddress($firstAddress)
    {
        $this->firstAddress             = $firstAddress;
        $this->apiParas["firstAddress"]  = $firstAddress;
    }

    public function getFirstAddress()
    {
        return $this->firstAddress;
    }

    /**
     * @param int $secondAddress
     * 门店二级地址
     * Required: false
     * Example Value: 
     */
    private $secondAddress;

    /**
     * @param int $secondAddress
     * 门店二级地址
     * Example Value: 
     */
    public function setSecondAddress($secondAddress)
    {
        $this->secondAddress             = $secondAddress;
        $this->apiParas["secondAddress"]  = $secondAddress;
    }

    public function getSecondAddress()
    {
        return $this->secondAddress;
    }

    /**
     * @param int $thirdAddress
     * 门店三级地址
     * Required: false
     * Example Value: 
     */
    private $thirdAddress;

    /**
     * @param int $thirdAddress
     * 门店三级地址
     * Example Value: 
     */
    public function setThirdAddress($thirdAddress)
    {
        $this->thirdAddress             = $thirdAddress;
        $this->apiParas["thirdAddress"]  = $thirdAddress;
    }

    public function getThirdAddress()
    {
        return $this->thirdAddress;
    }

}