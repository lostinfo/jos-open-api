<?php

namespace JD\request;

/**
 * 渠道下经纪人保存接口
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2246&apiName=jingdong.newhouse.channel.brokersave
 * Class NewhouseChannelBrokersave
 * @package Jd\request
 */
class NewhouseChannelBrokersave
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.channel.brokersave";
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
     * @param Number $id
     * 经纪人id，修改时必传
     * Required: false
     * Example Value: 
     */
    private $id;

    /**
     * @param Number $id
     * 经纪人id，修改时必传
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Number $channelId
     * 渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param Number $channelId
     * 渠道id
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param String $brokerName
     * 经纪人名称
     * Required: true
     * Example Value: 
     */
    private $brokerName;

    /**
     * @param String $brokerName
     * 经纪人名称
     * Example Value: 
     */
    public function setBrokerName($brokerName)
    {
        $this->brokerName             = $brokerName;
        $this->apiParas["brokerName"]  = $brokerName;
    }

    public function getBrokerName()
    {
        return $this->brokerName;
    }

    /**
     * @param String $brokerPhone
     * 经纪人电话
     * Required: true
     * Example Value: 
     */
    private $brokerPhone;

    /**
     * @param String $brokerPhone
     * 经纪人电话
     * Example Value: 
     */
    public function setBrokerPhone($brokerPhone)
    {
        $this->brokerPhone             = $brokerPhone;
        $this->apiParas["brokerPhone"]  = $brokerPhone;
    }

    public function getBrokerPhone()
    {
        return $this->brokerPhone;
    }

    /**
     * @param Number $brokerGender
     * 经纪人性别（0-男，1-女）
     * Required: true
     * Example Value: 
     */
    private $brokerGender;

    /**
     * @param Number $brokerGender
     * 经纪人性别（0-男，1-女）
     * Example Value: 
     */
    public function setBrokerGender($brokerGender)
    {
        $this->brokerGender             = $brokerGender;
        $this->apiParas["brokerGender"]  = $brokerGender;
    }

    public function getBrokerGender()
    {
        return $this->brokerGender;
    }

    /**
     * @param String $brokerDepartment
     * 部门
     * Required: true
     * Example Value: 
     */
    private $brokerDepartment;

    /**
     * @param String $brokerDepartment
     * 部门
     * Example Value: 
     */
    public function setBrokerDepartment($brokerDepartment)
    {
        $this->brokerDepartment             = $brokerDepartment;
        $this->apiParas["brokerDepartment"]  = $brokerDepartment;
    }

    public function getBrokerDepartment()
    {
        return $this->brokerDepartment;
    }

    /**
     * @param String $brokerImg
     * 经纪人头像
     * Required: false
     * Example Value: 
     */
    private $brokerImg;

    /**
     * @param String $brokerImg
     * 经纪人头像
     * Example Value: 
     */
    public function setBrokerImg($brokerImg)
    {
        $this->brokerImg             = $brokerImg;
        $this->apiParas["brokerImg"]  = $brokerImg;
    }

    public function getBrokerImg()
    {
        return $this->brokerImg;
    }

    /**
     * @param Number $brokerRole
     * 角色（1-经纪人，2-驻场，3-项目经理，4-销售总监，5-其他）
     * Required: true
     * Example Value: 
     */
    private $brokerRole;

    /**
     * @param Number $brokerRole
     * 角色（1-经纪人，2-驻场，3-项目经理，4-销售总监，5-其他）
     * Example Value: 
     */
    public function setBrokerRole($brokerRole)
    {
        $this->brokerRole             = $brokerRole;
        $this->apiParas["brokerRole"]  = $brokerRole;
    }

    public function getBrokerRole()
    {
        return $this->brokerRole;
    }

    /**
     * @param Number $imid
     * 技能组id（咚咚相关）
     * Required: true
     * Example Value: 
     */
    private $imid;

    /**
     * @param Number $imid
     * 技能组id（咚咚相关）
     * Example Value: 
     */
    public function setImid($imid)
    {
        $this->imid             = $imid;
        $this->apiParas["imid"]  = $imid;
    }

    public function getImid()
    {
        return $this->imid;
    }

    /**
     * @param Number $brokerType
     * 类型（1-分销，2-直销，3-自由经纪人，4-其他）
     * Required: true
     * Example Value: 
     */
    private $brokerType;

    /**
     * @param Number $brokerType
     * 类型（1-分销，2-直销，3-自由经纪人，4-其他）
     * Example Value: 
     */
    public function setBrokerType($brokerType)
    {
        $this->brokerType             = $brokerType;
        $this->apiParas["brokerType"]  = $brokerType;
    }

    public function getBrokerType()
    {
        return $this->brokerType;
    }

    /**
     * @param String $businessRecord
     * 业务记录
     * Required: true
     * Example Value: 
     */
    private $businessRecord;

    /**
     * @param String $businessRecord
     * 业务记录
     * Example Value: 
     */
    public function setBusinessRecord($businessRecord)
    {
        $this->businessRecord             = $businessRecord;
        $this->apiParas["businessRecord"]  = $businessRecord;
    }

    public function getBusinessRecord()
    {
        return $this->businessRecord;
    }

}