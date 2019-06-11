<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * ISV销售出库单下发信息查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2163&apiName=jingdong.eclp.order.ext.queryOrder
 * Class EclpOrderExtQueryOrder
 * @package Jd\request
 */
class EclpOrderExtQueryOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.ext.queryOrder";
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
     * @param string[] $isvUUID
     * ISV出库单号集合,限定100个,与销售平台单号集合二选一必填
     * Required: false
     * Example Value: 
     */
    private $isvUUID;

    /**
     * @param string[] $isvUUID
     * ISV出库单号集合,限定100个,与销售平台单号集合二选一必填
     * Example Value: 
     */
    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID             = $isvUUID;
        $this->apiParas["isvUUID"]  = $isvUUID;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    /**
     * @param string[] $spSoNos
     * 销售平台单号集合,限定100个,与ISV出库单号集合二选一必填
     * Required: false
     * Example Value: 
     */
    private $spSoNos;

    /**
     * @param string[] $spSoNos
     * 销售平台单号集合,限定100个,与ISV出库单号集合二选一必填
     * Example Value: 
     */
    public function setSpSoNos($spSoNos)
    {
        $this->spSoNos             = $spSoNos;
        $this->apiParas["spSoNos"]  = $spSoNos;
    }

    public function getSpSoNos()
    {
        return $this->spSoNos;
    }

    /**
     * @param string $isvSource
     * ISV来源编号
     * Required: false
     * Example Value: ISV0020000000010
     */
    private $isvSource;

    /**
     * @param string $isvSource
     * ISV来源编号
     * Example Value: ISV0020000000010
     */
    public function setIsvSource($isvSource)
    {
        $this->isvSource             = $isvSource;
        $this->apiParas["isvSource"]  = $isvSource;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    /**
     * @param string $departmentNo
     * 事业部编号
     * Required: false
     * Example Value: EBU1111222
     */
    private $departmentNo;

    /**
     * @param string $departmentNo
     * 事业部编号
     * Example Value: EBU1111222
     */
    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo             = $departmentNo;
        $this->apiParas["departmentNo"]  = $departmentNo;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

}