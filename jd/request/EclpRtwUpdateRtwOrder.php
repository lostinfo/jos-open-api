<?php

namespace JD\request;

/**
 * 退货入库单修改
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2965&apiName=jingdong.eclp.rtw.updateRtwOrder
 * Class EclpRtwUpdateRtwOrder
 * @package Jd\request
 */
class EclpRtwUpdateRtwOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.updateRtwOrder";
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
     * @param String $eclpRtwNo
     * 物流开放平台退货入库单号(商家退货入库单号为空时必填);ESR开头;最大长度50
     * Required: false
     * Example Value: ESR4398047092528
     */
    private $eclpRtwNo;

    /**
     * @param String $eclpRtwNo
     * 物流开放平台退货入库单号(商家退货入库单号为空时必填);ESR开头;最大长度50
     * Example Value: ESR4398047092528
     */
    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->eclpRtwNo             = $eclpRtwNo;
        $this->apiParas["eclpRtwNo"]  = $eclpRtwNo;
    }

    public function getEclpRtwNo()
    {
        return $this->eclpRtwNo;
    }

    /**
     * @param String $isvRtwNum
     * 商家退货入库单号(物流开放平台退货入库单号为空时必填);最大长度50
     * Required: false
     * Example Value: THD-76046480439291
     */
    private $isvRtwNum;

    /**
     * @param String $isvRtwNum
     * 商家退货入库单号(物流开放平台退货入库单号为空时必填);最大长度50
     * Example Value: THD-76046480439291
     */
    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum             = $isvRtwNum;
        $this->apiParas["isvRtwNum"]  = $isvRtwNum;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    /**
     * @param String $ownerNo
     * 事业部编号(必填)；EBU开头；最大长度20
     * Required: true
     * Example Value: EBU0000000001039
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 事业部编号(必填)；EBU开头；最大长度20
     * Example Value: EBU0000000001039
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $packageNo
     * 退货包裹物流单号(必填)
     * Required: true
     * Example Value: VA30545912051
     */
    private $packageNo;

    /**
     * @param String $packageNo
     * 退货包裹物流单号(必填)
     * Example Value: VA30545912051
     */
    public function setPackageNo($packageNo)
    {
        $this->packageNo             = $packageNo;
        $this->apiParas["packageNo"]  = $packageNo;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }

}