<?php

namespca Lostinfo\JosOpenApi;

/**
 * 用户与商品池关系读服务
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3191&apiName=jingdong.b2b.ware.queryUserToPool
 * Class B2bWareQueryUserToPool
 * @package Jd\request
 */
class B2bWareQueryUserToPool
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.ware.queryUserToPool";
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
     * @param string $businessChannel
     * 业务渠道：DKH_CHANNEL(大客户),     FX_CHANNEL(分销),     YAO_CHANNEL(医药城),     TP_CHANNEL(托盘商),     GXPT_DX(供销平台代销模式),     GXPT_FX(供销平台分销模式)
     * Required: true
     * Example Value: 
     */
    private $businessChannel;

    /**
     * @param string $businessChannel
     * 业务渠道：DKH_CHANNEL(大客户),     FX_CHANNEL(分销),     YAO_CHANNEL(医药城),     TP_CHANNEL(托盘商),     GXPT_DX(供销平台代销模式),     GXPT_FX(供销平台分销模式)
     * Example Value: 
     */
    public function setBusinessChannel($businessChannel)
    {
        $this->businessChannel             = $businessChannel;
        $this->apiParas["businessChannel"]  = $businessChannel;
    }

    public function getBusinessChannel()
    {
        return $this->businessChannel;
    }

    /**
     * @param string $mappingId
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $mappingId;

    /**
     * @param string $mappingId
     * 用户pin
     * Example Value: 
     */
    public function setMappingId($mappingId)
    {
        $this->mappingId             = $mappingId;
        $this->apiParas["mappingId"]  = $mappingId;
    }

    public function getMappingId()
    {
        return $this->mappingId;
    }

    /**
     * @param string $endModifyTime
     * 截止修改时间
     * Required: false
     * Example Value: 
     */
    private $endModifyTime;

    /**
     * @param string $endModifyTime
     * 截止修改时间
     * Example Value: 
     */
    public function setEndModifyTime($endModifyTime)
    {
        $this->endModifyTime             = $endModifyTime;
        $this->apiParas["endModifyTime"]  = $endModifyTime;
    }

    public function getEndModifyTime()
    {
        return $this->endModifyTime;
    }

    /**
     * @param string $userToPoolSortField
     * 排序字段
     * Required: false
     * Example Value: 
     */
    private $userToPoolSortField;

    /**
     * @param string $userToPoolSortField
     * 排序字段
     * Example Value: 
     */
    public function setUserToPoolSortField($userToPoolSortField)
    {
        $this->userToPoolSortField             = $userToPoolSortField;
        $this->apiParas["userToPoolSortField"]  = $userToPoolSortField;
    }

    public function getUserToPoolSortField()
    {
        return $this->userToPoolSortField;
    }

    /**
     * @param int $pageSize
     * 每页记录数目
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param int $pageSize
     * 每页记录数目
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param string $startCreateTime
     * 修改开始时间
     * Required: false
     * Example Value: 
     */
    private $startCreateTime;

    /**
     * @param string $startCreateTime
     * 修改开始时间
     * Example Value: 
     */
    public function setStartCreateTime($startCreateTime)
    {
        $this->startCreateTime             = $startCreateTime;
        $this->apiParas["startCreateTime"]  = $startCreateTime;
    }

    public function getStartCreateTime()
    {
        return $this->startCreateTime;
    }

    /**
     * @param string $attributeId
     * 属性id
     * Required: false
     * Example Value: 
     */
    private $attributeId;

    /**
     * @param string $attributeId
     * 属性id
     * Example Value: 
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId             = $attributeId;
        $this->apiParas["attributeId"]  = $attributeId;
    }

    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * @param int $mappingLevel
     * 用户级别
     * Required: false
     * Example Value: 
     */
    private $mappingLevel;

    /**
     * @param int $mappingLevel
     * 用户级别
     * Example Value: 
     */
    public function setMappingLevel($mappingLevel)
    {
        $this->mappingLevel             = $mappingLevel;
        $this->apiParas["mappingLevel"]  = $mappingLevel;
    }

    public function getMappingLevel()
    {
        return $this->mappingLevel;
    }

    /**
     * @param string $startModifyTime
     * 修改开始时间
     * Required: false
     * Example Value: 
     */
    private $startModifyTime;

    /**
     * @param string $startModifyTime
     * 修改开始时间
     * Example Value: 
     */
    public function setStartModifyTime($startModifyTime)
    {
        $this->startModifyTime             = $startModifyTime;
        $this->apiParas["startModifyTime"]  = $startModifyTime;
    }

    public function getStartModifyTime()
    {
        return $this->startModifyTime;
    }

    /**
     * @param int $b2bMappingId
     * 关系唯一id
     * Required: false
     * Example Value: 
     */
    private $b2bMappingId;

    /**
     * @param int $b2bMappingId
     * 关系唯一id
     * Example Value: 
     */
    public function setB2bMappingId($b2bMappingId)
    {
        $this->b2bMappingId             = $b2bMappingId;
        $this->apiParas["b2bMappingId"]  = $b2bMappingId;
    }

    public function getB2bMappingId()
    {
        return $this->b2bMappingId;
    }

    /**
     * @param int $cateType
     * 分类类型
     * Required: false
     * Example Value: 
     */
    private $cateType;

    /**
     * @param int $cateType
     * 分类类型
     * Example Value: 
     */
    public function setCateType($cateType)
    {
        $this->cateType             = $cateType;
        $this->apiParas["cateType"]  = $cateType;
    }

    public function getCateType()
    {
        return $this->cateType;
    }

    /**
     * @param int $wareMappingType
     * 映射类型
     * Required: false
     * Example Value: 
     */
    private $wareMappingType;

    /**
     * @param int $wareMappingType
     * 映射类型
     * Example Value: 
     */
    public function setWareMappingType($wareMappingType)
    {
        $this->wareMappingType             = $wareMappingType;
        $this->apiParas["wareMappingType"]  = $wareMappingType;
    }

    public function getWareMappingType()
    {
        return $this->wareMappingType;
    }

    /**
     * @param int $pageNo
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageNo;

    /**
     * @param int $pageNo
     * 页码
     * Example Value: 
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"]  = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param string $bizPoolType
     * 商品池业务类型
     * Required: false
     * Example Value: 
     */
    private $bizPoolType;

    /**
     * @param string $bizPoolType
     * 商品池业务类型
     * Example Value: 
     */
    public function setBizPoolType($bizPoolType)
    {
        $this->bizPoolType             = $bizPoolType;
        $this->apiParas["bizPoolType"]  = $bizPoolType;
    }

    public function getBizPoolType()
    {
        return $this->bizPoolType;
    }

    /**
     * @param string $b2bUserToPoolQueryTypeEnum
     * 查询类型：(QUERY_ALL_USER_POOL:查询用户所有商品池),(PAGE_QUERY_USER_POOL:分页查询用户商品池),(NORMAL_PAGE_QUERY:普通分页查询)
     * Required: true
     * Example Value: 
     */
    private $b2bUserToPoolQueryTypeEnum;

    /**
     * @param string $b2bUserToPoolQueryTypeEnum
     * 查询类型：(QUERY_ALL_USER_POOL:查询用户所有商品池),(PAGE_QUERY_USER_POOL:分页查询用户商品池),(NORMAL_PAGE_QUERY:普通分页查询)
     * Example Value: 
     */
    public function setB2bUserToPoolQueryTypeEnum($b2bUserToPoolQueryTypeEnum)
    {
        $this->b2bUserToPoolQueryTypeEnum             = $b2bUserToPoolQueryTypeEnum;
        $this->apiParas["b2bUserToPoolQueryTypeEnum"]  = $b2bUserToPoolQueryTypeEnum;
    }

    public function getB2bUserToPoolQueryTypeEnum()
    {
        return $this->b2bUserToPoolQueryTypeEnum;
    }

    /**
     * @param string $editor
     * 修改人erp：如是托盘用户取该值做为venderid进行价格查询
     * Required: false
     * Example Value: 
     */
    private $editor;

    /**
     * @param string $editor
     * 修改人erp：如是托盘用户取该值做为venderid进行价格查询
     * Example Value: 
     */
    public function setEditor($editor)
    {
        $this->editor             = $editor;
        $this->apiParas["editor"]  = $editor;
    }

    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param string $creator
     * 创建人erp
     * Required: false
     * Example Value: 
     */
    private $creator;

    /**
     * @param string $creator
     * 创建人erp
     * Example Value: 
     */
    public function setCreator($creator)
    {
        $this->creator             = $creator;
        $this->apiParas["creator"]  = $creator;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param int $totalItem
     * 查询记录总数
     * Required: false
     * Example Value: 
     */
    private $totalItem;

    /**
     * @param int $totalItem
     * 查询记录总数
     * Example Value: 
     */
    public function setTotalItem($totalItem)
    {
        $this->totalItem             = $totalItem;
        $this->apiParas["totalItem"]  = $totalItem;
    }

    public function getTotalItem()
    {
        return $this->totalItem;
    }

    /**
     * @param int $totalPage
     * 查询记录总页数
     * Required: false
     * Example Value: 
     */
    private $totalPage;

    /**
     * @param int $totalPage
     * 查询记录总页数
     * Example Value: 
     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage             = $totalPage;
        $this->apiParas["totalPage"]  = $totalPage;
    }

    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * @param string $sortTypeEnum
     * 排序类型
     * Required: false
     * Example Value: 
     */
    private $sortTypeEnum;

    /**
     * @param string $sortTypeEnum
     * 排序类型
     * Example Value: 
     */
    public function setSortTypeEnum($sortTypeEnum)
    {
        $this->sortTypeEnum             = $sortTypeEnum;
        $this->apiParas["sortTypeEnum"]  = $sortTypeEnum;
    }

    public function getSortTypeEnum()
    {
        return $this->sortTypeEnum;
    }

    /**
     * @param int $b2bPoolId
     * 商品池id
     * Required: false
     * Example Value: 
     */
    private $b2bPoolId;

    /**
     * @param int $b2bPoolId
     * 商品池id
     * Example Value: 
     */
    public function setB2bPoolId($b2bPoolId)
    {
        $this->b2bPoolId             = $b2bPoolId;
        $this->apiParas["b2bPoolId"]  = $b2bPoolId;
    }

    public function getB2bPoolId()
    {
        return $this->b2bPoolId;
    }

    /**
     * @param string $endCreateTime
     * 截止创建时间
     * Required: false
     * Example Value: 
     */
    private $endCreateTime;

    /**
     * @param string $endCreateTime
     * 截止创建时间
     * Example Value: 
     */
    public function setEndCreateTime($endCreateTime)
    {
        $this->endCreateTime             = $endCreateTime;
        $this->apiParas["endCreateTime"]  = $endCreateTime;
    }

    public function getEndCreateTime()
    {
        return $this->endCreateTime;
    }

    /**
     * @param string $b2bPoolName
     * 商品池名称
     * Required: false
     * Example Value: 
     */
    private $b2bPoolName;

    /**
     * @param string $b2bPoolName
     * 商品池名称
     * Example Value: 
     */
    public function setB2bPoolName($b2bPoolName)
    {
        $this->b2bPoolName             = $b2bPoolName;
        $this->apiParas["b2bPoolName"]  = $b2bPoolName;
    }

    public function getB2bPoolName()
    {
        return $this->b2bPoolName;
    }

    /**
     * @param int $lastB2bMappingId
     * 最新映射id
     * Required: false
     * Example Value: 
     */
    private $lastB2bMappingId;

    /**
     * @param int $lastB2bMappingId
     * 最新映射id
     * Example Value: 
     */
    public function setLastB2bMappingId($lastB2bMappingId)
    {
        $this->lastB2bMappingId             = $lastB2bMappingId;
        $this->apiParas["lastB2bMappingId"]  = $lastB2bMappingId;
    }

    public function getLastB2bMappingId()
    {
        return $this->lastB2bMappingId;
    }

    /**
     * @param int $cateId
     * 分类id
     * Required: false
     * Example Value: 
     */
    private $cateId;

    /**
     * @param int $cateId
     * 分类id
     * Example Value: 
     */
    public function setCateId($cateId)
    {
        $this->cateId             = $cateId;
        $this->apiParas["cateId"]  = $cateId;
    }

    public function getCateId()
    {
        return $this->cateId;
    }

    /**
     * @param int $mappingType
     * 用户类型：1:用户pin,2:合同号,3:用户组
     * Required: true
     * Example Value: 
     */
    private $mappingType;

    /**
     * @param int $mappingType
     * 用户类型：1:用户pin,2:合同号,3:用户组
     * Example Value: 
     */
    public function setMappingType($mappingType)
    {
        $this->mappingType             = $mappingType;
        $this->apiParas["mappingType"]  = $mappingType;
    }

    public function getMappingType()
    {
        return $this->mappingType;
    }

    /**
     * @param int $poolGroupId
     * 商品池组id
     * Required: false
     * Example Value: 
     */
    private $poolGroupId;

    /**
     * @param int $poolGroupId
     * 商品池组id
     * Example Value: 
     */
    public function setPoolGroupId($poolGroupId)
    {
        $this->poolGroupId             = $poolGroupId;
        $this->apiParas["poolGroupId"]  = $poolGroupId;
    }

    public function getPoolGroupId()
    {
        return $this->poolGroupId;
    }

    /**
     * @param string $thirdMappingId
     * 第三方映射id
     * Required: false
     * Example Value: 
     */
    private $thirdMappingId;

    /**
     * @param string $thirdMappingId
     * 第三方映射id
     * Example Value: 
     */
    public function setThirdMappingId($thirdMappingId)
    {
        $this->thirdMappingId             = $thirdMappingId;
        $this->apiParas["thirdMappingId"]  = $thirdMappingId;
    }

    public function getThirdMappingId()
    {
        return $this->thirdMappingId;
    }

    /**
     * @param string $outerMappingId
     * 外部映射id
     * Required: false
     * Example Value: 
     */
    private $outerMappingId;

    /**
     * @param string $outerMappingId
     * 外部映射id
     * Example Value: 
     */
    public function setOuterMappingId($outerMappingId)
    {
        $this->outerMappingId             = $outerMappingId;
        $this->apiParas["outerMappingId"]  = $outerMappingId;
    }

    public function getOuterMappingId()
    {
        return $this->outerMappingId;
    }

    /**
     * @param int $dataSource
     * 渠道
     * Required: false
     * Example Value: 
     */
    private $dataSource;

    /**
     * @param int $dataSource
     * 渠道
     * Example Value: 
     */
    public function setDataSource($dataSource)
    {
        $this->dataSource             = $dataSource;
        $this->apiParas["dataSource"]  = $dataSource;
    }

    public function getDataSource()
    {
        return $this->dataSource;
    }

}