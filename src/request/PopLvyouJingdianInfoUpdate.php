<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新景点信息
 * 景点门票API-POP虚拟业务,开放景点门票业务API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=131&apiId=776&apiName=jingdong.pop.lvyou.jingdian.info.update
 * Class PopLvyouJingdianInfoUpdate
 * @package Jd\request
 */
class PopLvyouJingdianInfoUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.lvyou.jingdian.info.update";
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
     * @param int $jingdianId
     * 景点ID
     * Required: true
     * Example Value: 
     */
    private $jingdianId;

    /**
     * @param int $jingdianId
     * 景点ID
     * Example Value: 
     */
    public function setJingdianId($jingdianId)
    {
        $this->jingdianId             = $jingdianId;
        $this->apiParas["jingdianId"]  = $jingdianId;
    }

    public function getJingdianId()
    {
        return $this->jingdianId;
    }

    /**
     * @param string $jingdianName
     * 景点名称
     * Required: false
     * Example Value: 
     */
    private $jingdianName;

    /**
     * @param string $jingdianName
     * 景点名称
     * Example Value: 
     */
    public function setJingdianName($jingdianName)
    {
        $this->jingdianName             = $jingdianName;
        $this->apiParas["jingdianName"]  = $jingdianName;
    }

    public function getJingdianName()
    {
        return $this->jingdianName;
    }

    /**
     * @param string $nameEntireEn
     * 景点全拼
     * Required: false
     * Example Value: 
     */
    private $nameEntireEn;

    /**
     * @param string $nameEntireEn
     * 景点全拼
     * Example Value: 
     */
    public function setNameEntireEn($nameEntireEn)
    {
        $this->nameEntireEn             = $nameEntireEn;
        $this->apiParas["nameEntireEn"]  = $nameEntireEn;
    }

    public function getNameEntireEn()
    {
        return $this->nameEntireEn;
    }

    /**
     * @param string $nameSimpleEn
     * 景点简拼
     * Required: false
     * Example Value: 
     */
    private $nameSimpleEn;

    /**
     * @param string $nameSimpleEn
     * 景点简拼
     * Example Value: 
     */
    public function setNameSimpleEn($nameSimpleEn)
    {
        $this->nameSimpleEn             = $nameSimpleEn;
        $this->apiParas["nameSimpleEn"]  = $nameSimpleEn;
    }

    public function getNameSimpleEn()
    {
        return $this->nameSimpleEn;
    }

    /**
     * @param int $jingdianSubject
     * 景点主题/分类(列表待补)
     * Required: false
     * Example Value: 
     */
    private $jingdianSubject;

    /**
     * @param int $jingdianSubject
     * 景点主题/分类(列表待补)
     * Example Value: 
     */
    public function setJingdianSubject($jingdianSubject)
    {
        $this->jingdianSubject             = $jingdianSubject;
        $this->apiParas["jingdianSubject"]  = $jingdianSubject;
    }

    public function getJingdianSubject()
    {
        return $this->jingdianSubject;
    }

    /**
     * @param int $jingdianGrade
     * 景点评级
     * Required: false
     * Example Value: 
     */
    private $jingdianGrade;

    /**
     * @param int $jingdianGrade
     * 景点评级
     * Example Value: 
     */
    public function setJingdianGrade($jingdianGrade)
    {
        $this->jingdianGrade             = $jingdianGrade;
        $this->apiParas["jingdianGrade"]  = $jingdianGrade;
    }

    public function getJingdianGrade()
    {
        return $this->jingdianGrade;
    }

    /**
     * @param string $jingdianOpentimeDesc
     * 开放时间描述
     * Required: false
     * Example Value: 
     */
    private $jingdianOpentimeDesc;

    /**
     * @param string $jingdianOpentimeDesc
     * 开放时间描述
     * Example Value: 
     */
    public function setJingdianOpentimeDesc($jingdianOpentimeDesc)
    {
        $this->jingdianOpentimeDesc             = $jingdianOpentimeDesc;
        $this->apiParas["jingdianOpentimeDesc"]  = $jingdianOpentimeDesc;
    }

    public function getJingdianOpentimeDesc()
    {
        return $this->jingdianOpentimeDesc;
    }

    /**
     * @param string $jingdianTelephone
     * 景点电话
     * Required: false
     * Example Value: 
     */
    private $jingdianTelephone;

    /**
     * @param string $jingdianTelephone
     * 景点电话
     * Example Value: 
     */
    public function setJingdianTelephone($jingdianTelephone)
    {
        $this->jingdianTelephone             = $jingdianTelephone;
        $this->apiParas["jingdianTelephone"]  = $jingdianTelephone;
    }

    public function getJingdianTelephone()
    {
        return $this->jingdianTelephone;
    }

    /**
     * @param int $jingdianOneCategoryId
     * 一级类目ID
     * Required: false
     * Example Value: 
     */
    private $jingdianOneCategoryId;

    /**
     * @param int $jingdianOneCategoryId
     * 一级类目ID
     * Example Value: 
     */
    public function setJingdianOneCategoryId($jingdianOneCategoryId)
    {
        $this->jingdianOneCategoryId             = $jingdianOneCategoryId;
        $this->apiParas["jingdianOneCategoryId"]  = $jingdianOneCategoryId;
    }

    public function getJingdianOneCategoryId()
    {
        return $this->jingdianOneCategoryId;
    }

    /**
     * @param int $jingdianTwoCategoryId
     * 二级类目ID
     * Required: false
     * Example Value: 
     */
    private $jingdianTwoCategoryId;

    /**
     * @param int $jingdianTwoCategoryId
     * 二级类目ID
     * Example Value: 
     */
    public function setJingdianTwoCategoryId($jingdianTwoCategoryId)
    {
        $this->jingdianTwoCategoryId             = $jingdianTwoCategoryId;
        $this->apiParas["jingdianTwoCategoryId"]  = $jingdianTwoCategoryId;
    }

    public function getJingdianTwoCategoryId()
    {
        return $this->jingdianTwoCategoryId;
    }

    /**
     * @param int $jingdianThreeCategoryId
     * 三级类目ID
     * Required: false
     * Example Value: 
     */
    private $jingdianThreeCategoryId;

    /**
     * @param int $jingdianThreeCategoryId
     * 三级类目ID
     * Example Value: 
     */
    public function setJingdianThreeCategoryId($jingdianThreeCategoryId)
    {
        $this->jingdianThreeCategoryId             = $jingdianThreeCategoryId;
        $this->apiParas["jingdianThreeCategoryId"]  = $jingdianThreeCategoryId;
    }

    public function getJingdianThreeCategoryId()
    {
        return $this->jingdianThreeCategoryId;
    }

    /**
     * @param int $jingdianFourCategoryId
     * 四级类目ID
     * Required: false
     * Example Value: 
     */
    private $jingdianFourCategoryId;

    /**
     * @param int $jingdianFourCategoryId
     * 四级类目ID
     * Example Value: 
     */
    public function setJingdianFourCategoryId($jingdianFourCategoryId)
    {
        $this->jingdianFourCategoryId             = $jingdianFourCategoryId;
        $this->apiParas["jingdianFourCategoryId"]  = $jingdianFourCategoryId;
    }

    public function getJingdianFourCategoryId()
    {
        return $this->jingdianFourCategoryId;
    }

    /**
     * @param int $countryId
     * 景点所在国家ID
     * Required: true
     * Example Value: 
     */
    private $countryId;

    /**
     * @param int $countryId
     * 景点所在国家ID
     * Example Value: 
     */
    public function setCountryId($countryId)
    {
        $this->countryId             = $countryId;
        $this->apiParas["countryId"]  = $countryId;
    }

    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $provinceId
     * 景点所在省ID
     * Required: true
     * Example Value: 
     */
    private $provinceId;

    /**
     * @param int $provinceId
     * 景点所在省ID
     * Example Value: 
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
     * @param int $cityId
     * 景点所在市ID
     * Required: true
     * Example Value: 
     */
    private $cityId;

    /**
     * @param int $cityId
     * 景点所在市ID
     * Example Value: 
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
     * @param int $areaId
     * 景点所在区/县ID
     * Required: true
     * Example Value: 
     */
    private $areaId;

    /**
     * @param int $areaId
     * 景点所在区/县ID
     * Example Value: 
     */
    public function setAreaId($areaId)
    {
        $this->areaId             = $areaId;
        $this->apiParas["areaId"]  = $areaId;
    }

    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @param string $addressDesc
     * 街道地址描述
     * Required: true
     * Example Value: 
     */
    private $addressDesc;

    /**
     * @param string $addressDesc
     * 街道地址描述
     * Example Value: 
     */
    public function setAddressDesc($addressDesc)
    {
        $this->addressDesc             = $addressDesc;
        $this->apiParas["addressDesc"]  = $addressDesc;
    }

    public function getAddressDesc()
    {
        return $this->addressDesc;
    }

    /**
     * @param string $jingdianDesc
     * 景点描述富文本
     * Required: true
     * Example Value: 
     */
    private $jingdianDesc;

    /**
     * @param string $jingdianDesc
     * 景点描述富文本
     * Example Value: 
     */
    public function setJingdianDesc($jingdianDesc)
    {
        $this->jingdianDesc             = $jingdianDesc;
        $this->apiParas["jingdianDesc"]  = $jingdianDesc;
    }

    public function getJingdianDesc()
    {
        return $this->jingdianDesc;
    }

}