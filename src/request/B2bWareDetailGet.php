<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 查询商品详情
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3153&apiName=jingdong.b2b.ware.detail.get
 * Class B2bWareDetailGet
 * @package Jd\request
 */
class B2bWareDetailGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.ware.detail.get";
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
     * @param string $channelEnum
     * 渠道枚举：FX,FX_GLOBAL,XTL,KA,YAO,ALL,JIADIAN_KA,JIADIAN_JC,TUOPAN,GXPT_DX,GXPT_FX,JIADIAN_XC,YISHOU
     * Required: true
     * Example Value: 
     */
    private $channelEnum;

    /**
     * @param string $channelEnum
     * 渠道枚举：FX,FX_GLOBAL,XTL,KA,YAO,ALL,JIADIAN_KA,JIADIAN_JC,TUOPAN,GXPT_DX,GXPT_FX,JIADIAN_XC,YISHOU
     * Example Value: 
     */
    public function setChannelEnum($channelEnum)
    {
        $this->channelEnum             = $channelEnum;
        $this->apiParas["channelEnum"]  = $channelEnum;
    }

    public function getChannelEnum()
    {
        return $this->channelEnum;
    }

    /**
     * @param string[] $bSkuGetExtendEnumsKyes
     * POP_CATEGORY_NAME,BRAND_NAME,SPECIFICATION
     * Required: false
     * Example Value: 
     */
    private $bSkuGetExtendEnumsKyes;

    /**
     * @param string[] $bSkuGetExtendEnumsKyes
     * POP_CATEGORY_NAME,BRAND_NAME,SPECIFICATION
     * Example Value: 
     */
    public function setBSkuGetExtendEnumsKyes($bSkuGetExtendEnumsKyes)
    {
        $this->bSkuGetExtendEnumsKyes             = $bSkuGetExtendEnumsKyes;
        $this->apiParas["bSkuGetExtendEnumsKyes"]  = $bSkuGetExtendEnumsKyes;
    }

    public function getBSkuGetExtendEnumsKyes()
    {
        return $this->bSkuGetExtendEnumsKyes;
    }

    /**
     * @param string[] $bSkuGetEnumsKeys
     * BASE_INFO,BIZ_INFO,SPEC_INFO,WARE_IMG,B2B_SPEC_INFO,SKU_BIZ_ARRAY
     * Required: true
     * Example Value: 
     */
    private $bSkuGetEnumsKeys;

    /**
     * @param string[] $bSkuGetEnumsKeys
     * BASE_INFO,BIZ_INFO,SPEC_INFO,WARE_IMG,B2B_SPEC_INFO,SKU_BIZ_ARRAY
     * Example Value: 
     */
    public function setBSkuGetEnumsKeys($bSkuGetEnumsKeys)
    {
        $this->bSkuGetEnumsKeys             = $bSkuGetEnumsKeys;
        $this->apiParas["bSkuGetEnumsKeys"]  = $bSkuGetEnumsKeys;
    }

    public function getBSkuGetEnumsKeys()
    {
        return $this->bSkuGetEnumsKeys;
    }

    /**
     * @param int[] $jdSkuIdsKeys
     * 京东skuIds
     * Required: false
     * Example Value: 
     */
    private $jdSkuIdsKeys;

    /**
     * @param int[] $jdSkuIdsKeys
     * 京东skuIds
     * Example Value: 
     */
    public function setJdSkuIdsKeys($jdSkuIdsKeys)
    {
        $this->jdSkuIdsKeys             = $jdSkuIdsKeys;
        $this->apiParas["jdSkuIdsKeys"]  = $jdSkuIdsKeys;
    }

    public function getJdSkuIdsKeys()
    {
        return $this->jdSkuIdsKeys;
    }

}