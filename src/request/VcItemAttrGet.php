<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 根据分组编号查询颜色尺码的信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1155&apiName=jingdong.vc.item.attr.get
 * Class VcItemAttrGet
 * @package Jd\request
 */
class VcItemAttrGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.attr.get";
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
     * @param string $groupId
     * 分组编号(供应商权限内的商品编号，添加颜色尺码申请时由供应商设置的值)
     * Required: true
     * Example Value: 2677015
     */
    private $groupId;

    /**
     * @param string $groupId
     * 分组编号(供应商权限内的商品编号，添加颜色尺码申请时由供应商设置的值)
     * Example Value: 2677015
     */
    public function setGroupId($groupId)
    {
        $this->groupId             = $groupId;
        $this->apiParas["group_id"]  = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

}