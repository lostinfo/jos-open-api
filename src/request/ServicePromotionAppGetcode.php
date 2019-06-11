<?php

namespca Lostinfo\JosOpenApi;

/**
 * APP领取代码接口
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1047&apiName=jingdong.service.promotion.app.getcode
 * Class ServicePromotionAppGetcode
 * @package Jd\request
 */
class ServicePromotionAppGetcode
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.app.getcode";
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
     * @param string $jdurl
     * 需要转换的jd链接
     * Required: true
     * Example Value: 
     */
    private $jdurl;

    /**
     * @param string $jdurl
     * 需要转换的jd链接
     * Example Value: 
     */
    public function setJdurl($jdurl)
    {
        $this->jdurl             = $jdurl;
        $this->apiParas["jdurl"]  = $jdurl;
    }

    public function getJdurl()
    {
        return $this->jdurl;
    }

    /**
     * @param string $appId
     * appID
     * Required: true
     * Example Value: 
     */
    private $appId;

    /**
     * @param string $appId
     * appID
     * Example Value: 
     */
    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"]  = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
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
     * @param string $ext
     * 扩展字段
     * Required: false
     * Example Value: 
     */
    private $ext;

    /**
     * @param string $ext
     * 扩展字段
     * Example Value: 
     */
    public function setExt($ext)
    {
        $this->ext             = $ext;
        $this->apiParas["ext"]  = $ext;
    }

    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param int $protocol
     * 传输协议 1为 https 其他为 http
     * Required: false
     * Example Value: 
     */
    private $protocol;

    /**
     * @param int $protocol
     * 传输协议 1为 https 其他为 http
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