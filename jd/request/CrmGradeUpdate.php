<?php

namespace JD\request;

/**
 * 会员等级信息设置
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=316&apiName=jingdong.crm.grade.update
 * Class CrmGradeUpdate
 * @package Jd\request
 */
class CrmGradeUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.grade.update";
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
     * @param Number[] $amount
     * 升级到下一个级别需要的交易额，单位为分,必须全部填写.例如1000,2000,3000,4000，其中1000表示一星会员升级到二星会员所需的交易额，2000表示二星会员升级到三星会员所需的交易额。会员等级越高，所需交易额必须越高。
     * Required: true
     * Example Value: 1000,2000,3000,4000
     */
    private $amount;

    /**
     * @param Number[] $amount
     * 升级到下一个级别需要的交易额，单位为分,必须全部填写.例如1000,2000,3000,4000，其中1000表示一星会员升级到二星会员所需的交易额，2000表示二星会员升级到三星会员所需的交易额。会员等级越高，所需交易额必须越高。
     * Example Value: 1000,2000,3000,4000
     */
    public function setAmount($amount)
    {
        $this->amount             = $amount;
        $this->apiParas["amount"]  = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Number[] $count
     * 升级到下一个级别需要的交易量，必须全部填写.例如10,20,30,40，其中10表示一星会员升级到二星会员所需的交易量，20表示二星会员升级到三星会员所需的交易量。会员等级越高，所需交易量必须越高。
     * Required: true
     * Example Value: 10,20,30,40
     */
    private $count;

    /**
     * @param Number[] $count
     * 升级到下一个级别需要的交易量，必须全部填写.例如10,20,30,40，其中10表示一星会员升级到二星会员所需的交易量，20表示二星会员升级到三星会员所需的交易量。会员等级越高，所需交易量必须越高。
     * Example Value: 10,20,30,40
     */
    public function setCount($count)
    {
        $this->count             = $count;
        $this->apiParas["count"]  = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

}