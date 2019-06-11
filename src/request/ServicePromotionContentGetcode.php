<?php

namespace JD\request;

/**
 * 内容推广获取转链接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1877&apiName=jingdong.service.promotion.content.getcode
 * Class ServicePromotionContentGetcode
 * @package Jd\request
 */
class ServicePromotionContentGetcode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.content.getcode";
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
     * @param String $releaseType
     * 素材类型,1为文章，2为单品，3为清单
     * Required: true
     * Example Value: 1
     */
    private $releaseType;

    /**
     * @param String $releaseType
     * 素材类型,1为文章，2为单品，3为清单
     * Example Value: 1
     */
    public function setReleaseType($releaseType)
    {
        $this->releaseType             = $releaseType;
        $this->apiParas["releaseType"]  = $releaseType;
    }

    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * @param String $typeId
     * 分类:精选2,生活4,风尚9,亲子8,数码6,美食19
     * Required: false
     * Example Value: 2
     */
    private $typeId;

    /**
     * @param String $typeId
     * 分类:精选2,生活4,风尚9,亲子8,数码6,美食19
     * Example Value: 2
     */
    public function setTypeId($typeId)
    {
        $this->typeId             = $typeId;
        $this->apiParas["typeId"]  = $typeId;
    }

    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param String $sortName
     * 排序字段,发布时间publishTimeLS,阅读次数pageView,30天引入订单量inGoodsCount30Days,30天累计支出佣金inCosFee30Days,平均佣金金额inAvgcosFee
     * Required: true
     * Example Value: 
     */
    private $sortName;

    /**
     * @param String $sortName
     * 排序字段,发布时间publishTimeLS,阅读次数pageView,30天引入订单量inGoodsCount30Days,30天累计支出佣金inCosFee30Days,平均佣金金额inAvgcosFee
     * Example Value: 
     */
    public function setSortName($sortName)
    {
        $this->sortName             = $sortName;
        $this->apiParas["sortName"]  = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    /**
     * @param String $sort
     * 排序方式,asc正序,desc倒序
     * Required: true
     * Example Value: asc
     */
    private $sort;

    /**
     * @param String $sort
     * 排序方式,asc正序,desc倒序
     * Example Value: asc
     */
    public function setSort($sort)
    {
        $this->sort             = $sort;
        $this->apiParas["sort"]  = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param Number $pageSize
     * 每页显示数量
     * Required: true
     * Example Value: 20
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页显示数量
     * Example Value: 20
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
     * @param Number $pageIndex
     * 当前页
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 当前页
     * Example Value: 1
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $unionId
     * 联盟ID
     * Required: true
     * Example Value: 联盟ID
     */
    private $unionId;

    /**
     * @param Number $unionId
     * 联盟ID
     * Example Value: 联盟ID
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param String $subUnionId
     * 子联盟ID
     * Required: false
     * Example Value: 子联盟ID
     */
    private $subUnionId;

    /**
     * @param String $subUnionId
     * 子联盟ID
     * Example Value: 子联盟ID
     */
    public function setSubUnionId($subUnionId)
    {
        $this->subUnionId             = $subUnionId;
        $this->apiParas["subUnionId"]  = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    /**
     * @param String $webId
     * 网站ID
     * Required: true
     * Example Value: 
     */
    private $webId;

    /**
     * @param String $webId
     * 网站ID
     * Example Value: 
     */
    public function setWebId($webId)
    {
        $this->webId             = $webId;
        $this->apiParas["webId"]  = $webId;
    }

    public function getWebId()
    {
        return $this->webId;
    }

    /**
     * @param String $ext1
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext1;

    /**
     * @param String $ext1
     * 扩展字段
     * Example Value: 
     */
    public function setExt1($ext1)
    {
        $this->ext1             = $ext1;
        $this->apiParas["ext1"]  = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * @param Number $protocol
     * 传输协议 1为 https协议 其他 http协议
     * Required: false
     * Example Value: 
     */
    private $protocol;

    /**
     * @param Number $protocol
     * 传输协议 1为 https协议 其他 http协议
     * Example Value: 
     */
    public function setProtocol($protocol)
    {
        $this->protocol             = $protocol;
        $this->apiParas["protocol"]  = $protocol;
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param Number $positionId
     * 推广位ID
     * Required: false
     * Example Value: 
     */
    private $positionId;

    /**
     * @param Number $positionId
     * 推广位ID
     * Example Value: 
     */
    public function setPositionId($positionId)
    {
        $this->positionId             = $positionId;
        $this->apiParas["positionId"]  = $positionId;
    }

    public function getPositionId()
    {
        return $this->positionId;
    }

}