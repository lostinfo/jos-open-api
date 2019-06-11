<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 京信用对外拍拍权益回调方法
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3504&apiName=jingdong.pop.illegal.api.service.VenderJingcreditApiService.writeBackPrivilege
 * Class PopIllegalApiServiceVenderJingcreditApiServiceWriteBackPrivilege
 * @package Jd\request
 */
class PopIllegalApiServiceVenderJingcreditApiServiceWriteBackPrivilege
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.illegal.api.service.VenderJingcreditApiService.writeBackPrivilege";
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
     * @param int $gainInfoId
     * 京信用权益信息ID
     * Required: true
     * Example Value: 100001011
     */
    private $gainInfoId;

    /**
     * @param int $gainInfoId
     * 京信用权益信息ID
     * Example Value: 100001011
     */
    public function setGainInfoId($gainInfoId)
    {
        $this->gainInfoId             = $gainInfoId;
        $this->apiParas["gainInfoId"]  = $gainInfoId;
    }

    public function getGainInfoId()
    {
        return $this->gainInfoId;
    }

    /**
     * @param int $privilegeType
     * 京信用权益类型： 3-拍拍权益
     * Required: true
     * Example Value: 3
     */
    private $privilegeType;

    /**
     * @param int $privilegeType
     * 京信用权益类型： 3-拍拍权益
     * Example Value: 3
     */
    public function setPrivilegeType($privilegeType)
    {
        $this->privilegeType             = $privilegeType;
        $this->apiParas["privilegeType"]  = $privilegeType;
    }

    public function getPrivilegeType()
    {
        return $this->privilegeType;
    }

    /**
     * @param string $summaryYearMonth
     * 京信用批次年月
     * Required: true
     * Example Value: 201902
     */
    private $summaryYearMonth;

    /**
     * @param string $summaryYearMonth
     * 京信用批次年月
     * Example Value: 201902
     */
    public function setSummaryYearMonth($summaryYearMonth)
    {
        $this->summaryYearMonth             = $summaryYearMonth;
        $this->apiParas["summaryYearMonth"]  = $summaryYearMonth;
    }

    public function getSummaryYearMonth()
    {
        return $this->summaryYearMonth;
    }

    /**
     * @param string $info
     * 权益详细信息
     * Required: true
     * Example Value: {'name':'paipai'}
     */
    private $info;

    /**
     * @param string $info
     * 权益详细信息
     * Example Value: {'name':'paipai'}
     */
    public function setInfo($info)
    {
        $this->info             = $info;
        $this->apiParas["info"]  = $info;
    }

    public function getInfo()
    {
        return $this->info;
    }

}