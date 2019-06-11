<?php

namespace JD\request;

/**
 * 人群策略创建接口
 * 数据API-数据开放API已下线，如有数据需求请进入云海数据开放平台（http://data.jd.com）进行申请。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=69&apiId=3652&apiName=jingdong.data.vender.strategy.create
 * Class DataVenderStrategyCreate
 * @package Jd\request
 */
class DataVenderStrategyCreate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.data.vender.strategy.create";
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
     * @param String $name
     * 筛选策略名称
     * Required: true
     * Example Value: 40岁以下男性会员
     */
    private $name;

    /**
     * @param String $name
     * 筛选策略名称
     * Example Value: 40岁以下男性会员
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $description
     * 筛选策略描述
     * Required: false
     * Example Value: 40岁以下男性会员
     */
    private $description;

    /**
     * @param String $description
     * 筛选策略描述
     * Example Value: 40岁以下男性会员
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

    /**
     * @param String $strategy
     * 筛选策略
     * Required: true
     * Example Value: {策略}
     */
    private $strategy;

    /**
     * @param String $strategy
     * 筛选策略
     * Example Value: {策略}
     */
    public function setStrategy($strategy)
    {
        $this->strategy             = $strategy;
        $this->apiParas["strategy"]  = $strategy;
    }

    public function getStrategy()
    {
        return $this->strategy;
    }

}