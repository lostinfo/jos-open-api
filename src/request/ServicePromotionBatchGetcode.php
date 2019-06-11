<?php

namespca Lostinfo\JosOpenApi;

/**
 * 批量获取代码接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1647&apiName=jingdong.service.promotion.batch.getcode
 * Class ServicePromotionBatchGetcode
 * @package Jd\request
 */
class ServicePromotionBatchGetcode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.batch.getcode";
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
     * @param int[] $id
     * 商品编号，逗号分隔
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int[] $id
     * 商品编号，逗号分隔
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string[] $url
     * 商品详情页，逗号分隔
     * Required: true
     * Example Value: 
     */
    private $url;

    /**
     * @param string[] $url
     * 商品详情页，逗号分隔
     * Example Value: 
     */
    public function setUrl($url)
    {
        $this->url             = $url;
        $this->apiParas["url"]  = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param int $unionId
     * 联盟ID
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param int $unionId
     * 联盟ID
     * Example Value: 
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
     * @param string $subUnionId
     * 子联盟id
     * Required: false
     * Example Value: 
     */
    private $subUnionId;

    /**
     * @param string $subUnionId
     * 子联盟id
     * Example Value: 
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
     * @param string $channel
     * 推广渠道（PC or WL）
     * Required: true
     * Example Value: 
     */
    private $channel;

    /**
     * @param string $channel
     * 推广渠道（PC or WL）
     * Example Value: 
     */
    public function setChannel($channel)
    {
        $this->channel             = $channel;
        $this->apiParas["channel"]  = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $webId
     * 网站ID
     * Required: true
     * Example Value: 
     */
    private $webId;

    /**
     * @param string $webId
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
     * @param string $positionId
     * 推广位ID，获取京东饭粒的推广链接时必填。
     * Required: false
     * Example Value: 
     */
    private $positionId;

    /**
     * @param string $positionId
     * 推广位ID，获取京东饭粒的推广链接时必填。
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

    /**
     * @param string $ext1
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext1;

    /**
     * @param string $ext1
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
     * @param int $protocol
     * 传输协议 1为 https协议 其他 http协议
     * Required: false
     * Example Value: 
     */
    private $protocol;

    /**
     * @param int $protocol
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
     * @param string $pid
     * 母子账号
     * Required: false
     * Example Value: 
     */
    private $pid;

    /**
     * @param string $pid
     * 母子账号
     * Example Value: 
     */
    public function setPid($pid)
    {
        $this->pid             = $pid;
        $this->apiParas["pid"]  = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

}