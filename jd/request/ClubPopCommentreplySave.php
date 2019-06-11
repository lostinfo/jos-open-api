<?php

namespace JD\request;

/**
 * 回复商品评价
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=713&apiName=jingdong.club.pop.commentreply.save
 * Class ClubPopCommentreplySave
 * @package Jd\request
 */
class ClubPopCommentreplySave
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.club.pop.commentreply.save";
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
     * @param String $commentId
     * 评价信息主键ID
     * Required: true
     * Example Value: 
     */
    private $commentId;

    /**
     * @param String $commentId
     * 评价信息主键ID
     * Example Value: 
     */
    public function setCommentId($commentId)
    {
        $this->commentId             = $commentId;
        $this->apiParas["commentId"]  = $commentId;
    }

    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @param String $content
     * 回复内容
     * Required: true
     * Example Value: 
     */
    private $content;

    /**
     * @param String $content
     * 回复内容
     * Example Value: 
     */
    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"]  = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param String $parentId
     * 回复ID（回复主贴用 -1）
     * Required: true
     * Example Value: -1
     */
    private $parentId;

    /**
     * @param String $parentId
     * 回复ID（回复主贴用 -1）
     * Example Value: -1
     */
    public function setParentId($parentId)
    {
        $this->parentId             = $parentId;
        $this->apiParas["replyId"]  = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

}