<?php

namespace JD\request;

/**
 * 删除动态查询模型
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=340&apiName=jingdong.crm.model.delete
 * Class CrmModelDelete
 * @package Jd\request
 */
class CrmModelDelete
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.model.delete";
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
     * @param Number $modelId
     * 动态查询模型ID
     * Required: true
     * Example Value: 21
     */
    private $modelId;

    /**
     * @param Number $modelId
     * 动态查询模型ID
     * Example Value: 21
     */
    public function setModelId($modelId)
    {
        $this->modelId             = $modelId;
        $this->apiParas["model_id"]  = $modelId;
    }

    public function getModelId()
    {
        return $this->modelId;
    }

}