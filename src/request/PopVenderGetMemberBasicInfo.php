<?php

namespace Lostinfo\JosOpenApi\request;

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
     * @param string $openId
     * 参数描述
     */
    private $openId;

    /**
     * @param string $openId
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
     * @param int $venderId
     * 参数描述
     */
    private $venderId;

    /**
     * @param int $venderId
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
     * @param string $appKey
     * 参数描述
     */
    private $appKey;

    /**
     * @param string $appKey
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
     * @param string $phoneNo
     * 参数描述
     */
    private $phoneNo;

    /**
     * @param string $phoneNo
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