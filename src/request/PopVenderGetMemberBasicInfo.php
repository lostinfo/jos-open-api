<?php

namespace JD\request;

class PopVenderGetMemberBasicInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.vender.getMemberBasicInfo";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas);
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
     * @param String $openId
     * 参数描述
     */
    private $openId;

    /**
     * @param String $openId
     * 参数描述
     */
    public function setOpenId($openId)
    {
        $this->openId             = $openId;
        $this->apiParas["openId"] = $openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @param Number $venderId
     * 参数描述
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 参数描述
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param String $appKey
     * 参数描述
     */
    private $appKey;

    /**
     * @param String $appKey
     * 参数描述
     */
    public function setAppKey($appKey)
    {
        $this->appKey             = $appKey;
        $this->apiParas["appKey"] = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param String $phoneNo
     * 参数描述
     */
    private $phoneNo;

    /**
     * @param String $phoneNo
     * 参数描述
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo             = $phoneNo;
        $this->apiParas["phoneNo"] = $phoneNo;
    }

    public function getPhoneNo()
    {
        return $this->phoneNo;
    }


}