<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 监管-合同注销接口
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=3232&apiName=jingdong.nbhouse.rent.contractCallOff
 * Class NbhouseRentContractCallOff
 * @package Jd\request
 */
class NbhouseRentContractCallOff
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.contractCallOff";
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
     * @param string $backupNo
     * 备案编号
     * Required: true
     * Example Value: 
     */
    private $backupNo;

    /**
     * @param string $backupNo
     * 备案编号
     * Example Value: 
     */
    public function setBackupNo($backupNo)
    {
        $this->backupNo             = $backupNo;
        $this->apiParas["backupNo"]  = $backupNo;
    }

    public function getBackupNo()
    {
        return $this->backupNo;
    }

    /**
     * @param string $rentToReal
     * 解除原因(枚举)
     * Required: true
     * Example Value: 
     */
    private $rentToReal;

    /**
     * @param string $rentToReal
     * 解除原因(枚举)
     * Example Value: 
     */
    public function setRentToReal($rentToReal)
    {
        $this->rentToReal             = $rentToReal;
        $this->apiParas["rentToReal"]  = $rentToReal;
    }

    public function getRentToReal()
    {
        return $this->rentToReal;
    }

    /**
     * @param int $calloffReason
     * 合同提前解除日期
     * Required: true
     * Example Value: 
     */
    private $calloffReason;

    /**
     * @param int $calloffReason
     * 合同提前解除日期
     * Example Value: 
     */
    public function setCalloffReason($calloffReason)
    {
        $this->calloffReason             = $calloffReason;
        $this->apiParas["calloffReason"]  = $calloffReason;
    }

    public function getCalloffReason()
    {
        return $this->calloffReason;
    }

    /**
     * @param string $description
     * 注销说明
     * Required: true
     * Example Value: 
     */
    private $description;

    /**
     * @param string $description
     * 注销说明
     * Example Value: 
     */
    public function setDescription($description)
    {
        $this->description             = $description;
        $this->apiParas["description"]  = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

}