<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 设置积分规则
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=3287&apiName=jingdong.points.jos.batchInsertOrUpdateRule
 * Class PointsJosBatchInsertOrUpdateRule
 * @package Jd\request
 */
class PointsJosBatchInsertOrUpdateRule
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.points.jos.batchInsertOrUpdateRule";
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
     * @param string $ruleId
     * 对应规则定义表中的id
     * Required: true
     * Example Value: 1
     */
    private $ruleId;

    /**
     * @param string $ruleId
     * 对应规则定义表中的id
     * Example Value: 1
     */
    public function setRuleId($ruleId)
    {
        $this->ruleId             = $ruleId;
        $this->apiParas["ruleId"]  = $ruleId;
    }

    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * @param int $multiple
     * 兑换倍数
     * Required: true
     * Example Value: 
     */
    private $multiple;

    /**
     * @param int $multiple
     * 兑换倍数
     * Example Value: 
     */
    public function setMultiple($multiple)
    {
        $this->multiple             = $multiple;
        $this->apiParas["multiple"]  = $multiple;
    }

    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param int $points
     * 兑换积分
     * Required: true
     * Example Value: 1
     */
    private $points;

    /**
     * @param int $points
     * 兑换积分
     * Example Value: 1
     */
    public function setPoints($points)
    {
        $this->points             = $points;
        $this->apiParas["points"]  = $points;
    }

    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param string $createTime
     * 创建记录时间
     * Required: true
     * Example Value: 
     */
    private $createTime;

    /**
     * @param string $createTime
     * 创建记录时间
     * Example Value: 
     */
    public function setCreateTime($createTime)
    {
        $this->createTime             = $createTime;
        $this->apiParas["createTime"]  = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param string $modifyTime
     * 记录修改时间
     * Required: true
     * Example Value: 
     */
    private $modifyTime;

    /**
     * @param string $modifyTime
     * 记录修改时间
     * Example Value: 
     */
    public function setModifyTime($modifyTime)
    {
        $this->modifyTime             = $modifyTime;
        $this->apiParas["modifyTime"]  = $modifyTime;
    }

    public function getModifyTime()
    {
        return $this->modifyTime;
    }

}