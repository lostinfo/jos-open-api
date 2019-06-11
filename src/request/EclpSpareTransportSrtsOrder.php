<?php

namespace JD\request;

/**
 * 备件库退供单下发
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=2409&apiName=jingdong.eclp.spare.transportSrtsOrder
 * Class EclpSpareTransportSrtsOrder
 * @package Jd\request
 */
class EclpSpareTransportSrtsOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.spare.transportSrtsOrder";
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
     * @param Number $tid
     * 当前时间戳；示例：38661421974169323；LONG型值
     * Required: true
     * Example Value: 38661421974169323
     */
    private $tid;

    /**
     * @param Number $tid
     * 当前时间戳；示例：38661421974169323；LONG型值
     * Example Value: 38661421974169323
     */
    public function setTid($tid)
    {
        $this->tid             = $tid;
        $this->apiParas["tid"]  = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param String $isvSrtsNo
     * 商家单据号；示例：4398046511182；退供单号LONG型值序列化
     * Required: true
     * Example Value: 4398046511182
     */
    private $isvSrtsNo;

    /**
     * @param String $isvSrtsNo
     * 商家单据号；示例：4398046511182；退供单号LONG型值序列化
     * Example Value: 4398046511182
     */
    public function setIsvSrtsNo($isvSrtsNo)
    {
        $this->isvSrtsNo             = $isvSrtsNo;
        $this->apiParas["isvSrtsNo"]  = $isvSrtsNo;
    }

    public function getIsvSrtsNo()
    {
        return $this->isvSrtsNo;
    }

    /**
     * @param String $sellerNo
     * 商家id； 示例：20000000016; LONG型值序列化
     * Required: true
     * Example Value: 20000000016
     */
    private $sellerNo;

    /**
     * @param String $sellerNo
     * 商家id； 示例：20000000016; LONG型值序列化
     * Example Value: 20000000016
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
     * @param String $deptNo
     * 事业部id； 示例：4418046511124；LONG型值序列化
     * Required: true
     * Example Value: 4418046511124
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 事业部id； 示例：4418046511124；LONG型值序列化
     * Example Value: 4418046511124
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
     * @param String $supplierNo
     * 供应商id；示例：4398046512425；LONG型值序列化
     * Required: true
     * Example Value: 4398046512425
     */
    private $supplierNo;

    /**
     * @param String $supplierNo
     * 供应商id；示例：4398046512425；LONG型值序列化
     * Example Value: 4398046512425
     */
    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo             = $supplierNo;
        $this->apiParas["supplierNo"]  = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    /**
     * @param Number $billTypev
     * 单据类型；示例：1（中小件），2（大件）；byte值
     * Required: true
     * Example Value: 1
     */
    private $billTypev;

    /**
     * @param Number $billTypev
     * 单据类型；示例：1（中小件），2（大件）；byte值
     * Example Value: 1
     */
    public function setBillTypev($billTypev)
    {
        $this->billTypev             = $billTypev;
        $this->apiParas["billType"]  = $billTypev;
    }

    public function getBillTypev()
    {
        return $this->billTypev;
    }

    /**
     * @param Number $shipVia
     * 发运方式；示例：1（自提），3（快运）；byte值
     * Required: true
     * Example Value: 1
     */
    private $shipVia;

    /**
     * @param Number $shipVia
     * 发运方式；示例：1（自提），3（快运）；byte值
     * Example Value: 1
     */
    public function setShipVia($shipVia)
    {
        $this->shipVia             = $shipVia;
        $this->apiParas["shipVia"]  = $shipVia;
    }

    public function getShipVia()
    {
        return $this->shipVia;
    }

    /**
     * @param String $comment
     * 备注；示例：备注；varchar(1000)
     * Required: true
     * Example Value: 备注
     */
    private $comment;

    /**
     * @param String $comment
     * 备注；示例：备注；varchar(1000)
     * Example Value: 备注
     */
    public function setComment($comment)
    {
        $this->comment             = $comment;
        $this->apiParas["comment"]  = $comment;
    }

    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param String $spareWarehouseNo
     * 备件库库房id； 示例：110007932；LONG值序列化
     * Required: true
     * Example Value: 110007932
     */
    private $spareWarehouseNo;

    /**
     * @param String $spareWarehouseNo
     * 备件库库房id； 示例：110007932；LONG值序列化
     * Example Value: 110007932
     */
    public function setSpareWarehouseNo($spareWarehouseNo)
    {
        $this->spareWarehouseNo             = $spareWarehouseNo;
        $this->apiParas["spareWarehouseNo"]  = $spareWarehouseNo;
    }

    public function getSpareWarehouseNo()
    {
        return $this->spareWarehouseNo;
    }

    /**
     * @param String $receiveName
     * 收货人姓名；示例：张三；varchar(50)
     * Required: true
     * Example Value: 张三
     */
    private $receiveName;

    /**
     * @param String $receiveName
     * 收货人姓名；示例：张三；varchar(50)
     * Example Value: 张三
     */
    public function setReceiveName($receiveName)
    {
        $this->receiveName             = $receiveName;
        $this->apiParas["receiveName"]  = $receiveName;
    }

    public function getReceiveName()
    {
        return $this->receiveName;
    }

    /**
     * @param String $receivePhone
     * 收货人电话；示例：18201280000；varchar(50)
     * Required: true
     * Example Value: 18201280000
     */
    private $receivePhone;

    /**
     * @param String $receivePhone
     * 收货人电话；示例：18201280000；varchar(50)
     * Example Value: 18201280000
     */
    public function setReceivePhone($receivePhone)
    {
        $this->receivePhone             = $receivePhone;
        $this->apiParas["receivePhone"]  = $receivePhone;
    }

    public function getReceivePhone()
    {
        return $this->receivePhone;
    }

    /**
     * @param Number $provinceId
     * 省份id；示例：1（北京）；LONG型值
     * Required: true
     * Example Value: 1
     */
    private $provinceId;

    /**
     * @param Number $provinceId
     * 省份id；示例：1（北京）；LONG型值
     * Example Value: 1
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param Number $cityId
     * 城市id；示例：2810（通州区）；LONG型值
     * Required: true
     * Example Value: 2810
     */
    private $cityId;

    /**
     * @param Number $cityId
     * 城市id；示例：2810（通州区）；LONG型值
     * Example Value: 2810
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param Number $countyId
     * 县id；示例：51081（亦庄经济开发区）；LONG型值
     * Required: true
     * Example Value: 51081
     */
    private $countyId;

    /**
     * @param Number $countyId
     * 县id；示例：51081（亦庄经济开发区）；LONG型值
     * Example Value: 51081
     */
    public function setCountyId($countyId)
    {
        $this->countyId             = $countyId;
        $this->apiParas["countyId"]  = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param Number $townId
     * 镇id；示例：null(若没有四级地址可以空缺)；LONG型值
     * Required: true
     * Example Value: null
     */
    private $townId;

    /**
     * @param Number $townId
     * 镇id；示例：null(若没有四级地址可以空缺)；LONG型值
     * Example Value: null
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * @param String $receiveAddress
     * 收货人地址；示例：北京市通州区科创十一街18号院；varchar(50)
     * Required: true
     * Example Value: 北京市通州区科创十一街18号院
     */
    private $receiveAddress;

    /**
     * @param String $receiveAddress
     * 收货人地址；示例：北京市通州区科创十一街18号院；varchar(50)
     * Example Value: 北京市通州区科创十一街18号院
     */
    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress             = $receiveAddress;
        $this->apiParas["receiveAddress"]  = $receiveAddress;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

    /**
     * @param String $goodsNo
     * 商品编号； 示例：EMG4418090290132；varchar(20)
     * Required: true
     * Example Value: EMG4418090290132
     */
    private $goodsNo;

    /**
     * @param String $goodsNo
     * 商品编号； 示例：EMG4418090290132；varchar(20)
     * Example Value: EMG4418090290132
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param String $goodsLevel
     * 商品等级；示例：1（良品）2（残品）；varchar(20)
     * Required: true
     * Example Value: 1
     */
    private $goodsLevel;

    /**
     * @param String $goodsLevel
     * 商品等级；示例：1（良品）2（残品）；varchar(20)
     * Example Value: 1
     */
    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel             = $goodsLevel;
        $this->apiParas["goodsLevel"]  = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    /**
     * @param String $goodsName
     * 商品名称；示例：欧莱雅LOREAL 男士控油炭爽抗黑头洁面套装； varchar(500)
     * Required: true
     * Example Value: 欧莱雅LOREAL 男士控油炭爽抗黑头洁面套装
     */
    private $goodsName;

    /**
     * @param String $goodsName
     * 商品名称；示例：欧莱雅LOREAL 男士控油炭爽抗黑头洁面套装； varchar(500)
     * Example Value: 欧莱雅LOREAL 男士控油炭爽抗黑头洁面套装
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName             = $goodsName;
        $this->apiParas["goodsName"]  = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param String $outSpareWarehouseNum
     * 可出备件库数量；示例：2（数值）;varchar(500)
     * Required: true
     * Example Value: 2
     */
    private $outSpareWarehouseNum;

    /**
     * @param String $outSpareWarehouseNum
     * 可出备件库数量；示例：2（数值）;varchar(500)
     * Example Value: 2
     */
    public function setOutSpareWarehouseNum($outSpareWarehouseNum)
    {
        $this->outSpareWarehouseNum             = $outSpareWarehouseNum;
        $this->apiParas["outSpareWarehouseNum"]  = $outSpareWarehouseNum;
    }

    public function getOutSpareWarehouseNum()
    {
        return $this->outSpareWarehouseNum;
    }

}