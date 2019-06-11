<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 上门提货
 * 大家电服务API-供应商系统，大家电售后维修工单服务处理
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=136&apiId=1894&apiName=jingdong.las.im.hfs.collect.push
 * Class LasImHfsCollectPush
 * @package Jd\request
 */
class LasImHfsCollectPush
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.las.im.hfs.collect.push";
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
     * @param string $orderNo
     * 订单号
     * Required: true
     * Example Value: 
     */
    private $orderNo;

    /**
     * @param string $orderNo
     * 订单号
     * Example Value: 
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["ord_no"]  = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param string $collectName
     * 操作人
     * Required: false
     * Example Value: 
     */
    private $collectName;

    /**
     * @param string $collectName
     * 操作人
     * Example Value: 
     */
    public function setCollectName($collectName)
    {
        $this->collectName             = $collectName;
        $this->apiParas["ope_n"]  = $collectName;
    }

    public function getCollectName()
    {
        return $this->collectName;
    }

    /**
     * @param string $providerId
     * 服务商编码
     * Required: true
     * Example Value: 
     */
    private $providerId;

    /**
     * @param string $providerId
     * 服务商编码
     * Example Value: 
     */
    public function setProviderId($providerId)
    {
        $this->providerId             = $providerId;
        $this->apiParas["ser_pro_no"]  = $providerId;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param string $collectNo
     * 提货码
     * Required: false
     * Example Value: 
     */
    private $collectNo;

    /**
     * @param string $collectNo
     * 提货码
     * Example Value: 
     */
    public function setCollectNo($collectNo)
    {
        $this->collectNo             = $collectNo;
        $this->apiParas["col_no"]  = $collectNo;
    }

    public function getCollectNo()
    {
        return $this->collectNo;
    }

    /**
     * @param string $collectTime
     * 提货操作时间
     * Required: true
     * Example Value: 
     */
    private $collectTime;

    /**
     * @param string $collectTime
     * 提货操作时间
     * Example Value: 
     */
    public function setCollectTime($collectTime)
    {
        $this->collectTime             = $collectTime;
        $this->apiParas["ope_t"]  = $collectTime;
    }

    public function getCollectTime()
    {
        return $this->collectTime;
    }

    /**
     * @param string $remark
     * 提货备注（长度不超过50个字符）
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param string $remark
     * 提货备注（长度不超过50个字符）
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["rem"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string $distributorPhone
     * 分配员电话
     * Required: false
     * Example Value: 
     */
    private $distributorPhone;

    /**
     * @param string $distributorPhone
     * 分配员电话
     * Example Value: 
     */
    public function setDistributorPhone($distributorPhone)
    {
        $this->distributorPhone             = $distributorPhone;
        $this->apiParas["dis_pho"]  = $distributorPhone;
    }

    public function getDistributorPhone()
    {
        return $this->distributorPhone;
    }

}