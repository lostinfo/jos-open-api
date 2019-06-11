<?php

namespca Lostinfo\JosOpenApi;

/**
 * 事业部查询已开通增值服务项方法
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3037&apiName=jingdong.eclp.ovas.queryDVASItems
 * Class EclpOvasQueryDVASItems
 * @package Jd\request
 */
class EclpOvasQueryDVASItems
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ovas.queryDVASItems";
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
     * @param int $pageNo
     * 当前页码
     * Required: true
     * Example Value: 1
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 当前页码
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
     * @param int $pageSize
     * 分页大小
     * Required: true
     * Example Value: 10
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 分页大小
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
     * @param string $deptNo
     * 事业部编码
     * Required: true
     * Example Value: EBU4398046515717
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码
     * Example Value: EBU4398046515717
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

}