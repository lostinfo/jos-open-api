<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 新品首铺配置同步接口
 * 价值供应链算法-京东价值供应链和软件服务商可以调用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=421&apiId=3382&apiName=jingdong.wl.stock.fusion.syncNewSkcConfiguration
 * Class WlStockFusionSyncNewSkcConfiguration
 * @package Jd\request
 */
class WlStockFusionSyncNewSkcConfiguration
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.wl.stock.fusion.syncNewSkcConfiguration";
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
     * @param string $deptName
     * 事业部名称
     * Required: true
     * Example Value: 广州因特间时尚服饰有限公司
     */
    private $deptName;

    /**
     * @param string $deptName
     * 事业部名称
     * Example Value: 广州因特间时尚服饰有限公司
     */
    public function setDeptName($deptName)
    {
        $this->deptName             = $deptName;
        $this->apiParas["deptName"]  = $deptName;
    }

    public function getDeptName()
    {
        return $this->deptName;
    }

    /**
     * @param string $brandName
     * 品牌名称
     * Required: true
     * Example Value: CM
     */
    private $brandName;

    /**
     * @param string $brandName
     * 品牌名称
     * Example Value: CM
     */
    public function setBrandName($brandName)
    {
        $this->brandName             = $brandName;
        $this->apiParas["brandName"]  = $brandName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param string $colorNames
     * 颜色，多个颜色竖线(|)隔开
     * Required: true
     * Example Value: 白色|黑色
     */
    private $colorNames;

    /**
     * @param string $colorNames
     * 颜色，多个颜色竖线(|)隔开
     * Example Value: 白色|黑色
     */
    public function setColorNames($colorNames)
    {
        $this->colorNames             = $colorNames;
        $this->apiParas["colorNames"]  = $colorNames;
    }

    public function getColorNames()
    {
        return $this->colorNames;
    }

    /**
     * @param string $sellerName
     * 商家名称
     * Required: true
     * Example Value: 广州因特间时尚服饰有限公司
     */
    private $sellerName;

    /**
     * @param string $sellerName
     * 商家名称
     * Example Value: 广州因特间时尚服饰有限公司
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
     * @param string $execTime
     * 首铺时间
     * Required: true
     * Example Value: 2019-02-25
     */
    private $execTime;

    /**
     * @param string $execTime
     * 首铺时间
     * Example Value: 2019-02-25
     */
    public function setExecTime($execTime)
    {
        $this->execTime             = $execTime;
        $this->apiParas["execTime"]  = $execTime;
    }

    public function getExecTime()
    {
        return $this->execTime;
    }

    /**
     * @param string $sellerNo
     * 商家编号
     * Required: true
     * Example Value: ECP0020000012732
     */
    private $sellerNo;

    /**
     * @param string $sellerNo
     * 商家编号
     * Example Value: ECP0020000012732
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
     * @param string $filialeNames
     * 分公司名称，多个分公司竖线(|)隔开
     * Required: true
     * Example Value: 广东分公司|华中分公司
     */
    private $filialeNames;

    /**
     * @param string $filialeNames
     * 分公司名称，多个分公司竖线(|)隔开
     * Example Value: 广东分公司|华中分公司
     */
    public function setFilialeNames($filialeNames)
    {
        $this->filialeNames             = $filialeNames;
        $this->apiParas["filialeNames"]  = $filialeNames;
    }

    public function getFilialeNames()
    {
        return $this->filialeNames;
    }

    /**
     * @param string $styleName
     * 款式
     * Required: true
     * Example Value: 01043008
     */
    private $styleName;

    /**
     * @param string $styleName
     * 款式
     * Example Value: 01043008
     */
    public function setStyleName($styleName)
    {
        $this->styleName             = $styleName;
        $this->apiParas["styleName"]  = $styleName;
    }

    public function getStyleName()
    {
        return $this->styleName;
    }

    /**
     * @param string $deptNo
     * 事业部编号
     * Required: true
     * Example Value: EBU4418046539232
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编号
     * Example Value: EBU4418046539232
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
     * @param string $filialeNos
     * 分公司编号，多个分公司竖线(|)隔开
     * Required: true
     * Example Value: 168|169
     */
    private $filialeNos;

    /**
     * @param string $filialeNos
     * 分公司编号，多个分公司竖线(|)隔开
     * Example Value: 168|169
     */
    public function setFilialeNos($filialeNos)
    {
        $this->filialeNos             = $filialeNos;
        $this->apiParas["filialeNos"]  = $filialeNos;
    }

    public function getFilialeNos()
    {
        return $this->filialeNos;
    }

    /**
     * @param int $strategy
     * 首铺策略
     * Required: true
     * Example Value: 2
     */
    private $strategy;

    /**
     * @param int $strategy
     * 首铺策略
     * Example Value: 2
     */
    public function setStrategy($strategy)
    {
        $this->strategy             = $strategy;
        $this->apiParas["strategy"]  = $strategy;
    }

    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * @param string $storeNos
     * 门店编号，多个门店竖线(|)隔开
     * Required: true
     * Example Value: 110013121|110013122
     */
    private $storeNos;

    /**
     * @param string $storeNos
     * 门店编号，多个门店竖线(|)隔开
     * Example Value: 110013121|110013122
     */
    public function setStoreNos($storeNos)
    {
        $this->storeNos             = $storeNos;
        $this->apiParas["storeNos"]  = $storeNos;
    }

    public function getStoreNos()
    {
        return $this->storeNos;
    }

    /**
     * @param string $brandNo
     * 品牌编号
     * Required: true
     * Example Value: 28
     */
    private $brandNo;

    /**
     * @param string $brandNo
     * 品牌编号
     * Example Value: 28
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo             = $brandNo;
        $this->apiParas["brandNo"]  = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

}