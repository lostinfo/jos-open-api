<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 商品上绑定关联版式
 * 商品API-提供网站商品信息更新、查询API,该组下所有接口均不支持自营店铺业务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=48&apiId=1235&apiName=jingdong.template.write.bindWare
 * Class TemplateWriteBindWare
 * @package Jd\request
 */
class TemplateWriteBindWare
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.write.bindWare";
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
     * @param int $templateId
     * 关联板式id,如果需要解绑版式,传 0
     * Required: true
     * Example Value: 1234
     */
    private $templateId;

    /**
     * @param int $templateId
     * 关联板式id,如果需要解绑版式,传 0
     * Example Value: 1234
     */
    public function setTemplateId($templateId)
    {
        $this->templateId             = $templateId;
        $this->apiParas["templateId"]  = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param int $wareId
     * 要绑定的商品id
     * Required: true
     * Example Value: 1234
     */
    private $wareId;

    /**
     * @param int $wareId
     * 要绑定的商品id
     * Example Value: 1234
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}