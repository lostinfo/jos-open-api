<?php

namespca Lostinfo\JosOpenApi;

/**
 * 根据会员模型获取会员信息
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=341&apiName=jingdong.crm.model.member.get
 * Class CrmModelMemberGet
 * @package Jd\request
 */
class CrmModelMemberGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.model.member.get";
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
     * @param int $modelId
     * 动态查询模型ID
     * Required: true
     * Example Value: 21
     */
    private $modelId;

    /**
     * @param int $modelId
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

    /**
     * @param int $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为5000
     * Required: true
     * Example Value: 45
     */
    private $currentPage;

    /**
     * @param int $currentPage
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1，最大页数为5000
     * Example Value: 45
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["current_page"]  = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param int $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1
     * Example Value: 20
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["page_size"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}