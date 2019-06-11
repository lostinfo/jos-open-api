<?php

namespace JD\request;

/**
 * 获取事业部信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=941&apiName=jingdong.eclp.master.queryDept
 * Class EclpMasterQueryDept
 * @package Jd\request
 */
class EclpMasterQueryDept
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryDept";
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
     * @param String $deptNos
     * 事业部编号,多个以英文逗号分隔
     * Required: false
     * Example Value: EBU0000000000001,EBU0000000000002
     */
    private $deptNos;

    /**
     * @param String $deptNos
     * 事业部编号,多个以英文逗号分隔
     * Example Value: EBU0000000000001,EBU0000000000002
     */
    public function setDeptNos($deptNos)
    {
        $this->deptNos             = $deptNos;
        $this->apiParas["deptNos"]  = $deptNos;
    }

    public function getDeptNos()
    {
        return $this->deptNos;
    }

}