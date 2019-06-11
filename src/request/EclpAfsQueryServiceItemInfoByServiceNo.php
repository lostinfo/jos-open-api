<?php

namespca Lostinfo\JosOpenApi;

/**
 * 服务单状态查询
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=1958&apiName=jingdong.eclp.afs.queryServiceItemInfoByServiceNo
 * Class EclpAfsQueryServiceItemInfoByServiceNo
 * @package Jd\request
 */
class EclpAfsQueryServiceItemInfoByServiceNo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.afs.queryServiceItemInfoByServiceNo";
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
     * @param string $servicesNo
     * ECLP服务单单号；最大长度50
     * Required: true
     * Example Value: ESC0000000000001
     */
    private $servicesNo;

    /**
     * @param string $servicesNo
     * ECLP服务单单号；最大长度50
     * Example Value: ESC0000000000001
     */
    public function setServicesNo($servicesNo)
    {
        $this->servicesNo             = $servicesNo;
        $this->apiParas["servicesNo"]  = $servicesNo;
    }

    public function getServicesNo()
    {
        return $this->servicesNo;
    }

}