<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 更新驳回的颜色尺码申请
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1667&apiName=jingdong.vc.item.attr.apply.update
 * Class VcItemAttrApplyUpdate
 * @package Jd\request
 */
class VcItemAttrApplyUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.attr.apply.update";
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
     * @param string $applyId
     * 申请编号（提交申请后，vc系统产生的申请唯一标识）
     * Required: true
     * Example Value: 06067413cc6c4219bb81f2a726265862
     */
    private $applyId;

    /**
     * @param string $applyId
     * 申请编号（提交申请后，vc系统产生的申请唯一标识）
     * Example Value: 06067413cc6c4219bb81f2a726265862
     */
    public function setApplyId($applyId)
    {
        $this->applyId             = $applyId;
        $this->apiParas["apply_id"]  = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

    /**
     * @param string $publicName
     * 公共名（100个字符内）
     * Required: true
     * Example Value: 公共名称样例
     */
    private $publicName;

    /**
     * @param string $publicName
     * 公共名（100个字符内）
     * Example Value: 公共名称样例
     */
    public function setPublicName($publicName)
    {
        $this->publicName             = $publicName;
        $this->apiParas["public_name"]  = $publicName;
    }

    public function getPublicName()
    {
        return $this->publicName;
    }

    /**
     * @param string[] $wareId
     * 商品编号
     * Required: true
     * Example Value: 2677015,2677016
     */
    private $wareId;

    /**
     * @param string[] $wareId
     * 商品编号
     * Example Value: 2677015,2677016
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_ids"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param string[] $colorName
     * 第一维[see jingdong.vc.item.saleAttributeSettings.get]销售属性值（单个商品30个字符内）
     * Required: false
     * Example Value: 红色,黄色
     */
    private $colorName;

    /**
     * @param string[] $colorName
     * 第一维[see jingdong.vc.item.saleAttributeSettings.get]销售属性值（单个商品30个字符内）
     * Example Value: 红色,黄色
     */
    public function setColorName($colorName)
    {
        $this->colorName             = $colorName;
        $this->apiParas["dim1_vals"]  = $colorName;
    }

    public function getColorName()
    {
        return $this->colorName;
    }

    /**
     * @param string[] $colorSort
     * 第一维顺序(必须是数字)
     * Required: false
     * Example Value: 1,2
     */
    private $colorSort;

    /**
     * @param string[] $colorSort
     * 第一维顺序(必须是数字)
     * Example Value: 1,2
     */
    public function setColorSort($colorSort)
    {
        $this->colorSort             = $colorSort;
        $this->apiParas["dim1_sorts"]  = $colorSort;
    }

    public function getColorSort()
    {
        return $this->colorSort;
    }

    /**
     * @param string[] $sizeName
     * 第二维[see jingdong.vc.item.saleAttributeSettings.get]销售属性值（单个商品30个字符内）
     * Required: false
     * Example Value: XL,L
     */
    private $sizeName;

    /**
     * @param string[] $sizeName
     * 第二维[see jingdong.vc.item.saleAttributeSettings.get]销售属性值（单个商品30个字符内）
     * Example Value: XL,L
     */
    public function setSizeName($sizeName)
    {
        $this->sizeName             = $sizeName;
        $this->apiParas["dim2_vals"]  = $sizeName;
    }

    public function getSizeName()
    {
        return $this->sizeName;
    }

    /**
     * @param string[] $sizeSort
     * 第二维顺序（必须是数字）
     * Required: false
     * Example Value: 1,2
     */
    private $sizeSort;

    /**
     * @param string[] $sizeSort
     * 第二维顺序（必须是数字）
     * Example Value: 1,2
     */
    public function setSizeSort($sizeSort)
    {
        $this->sizeSort             = $sizeSort;
        $this->apiParas["dim2_sorts"]  = $sizeSort;
    }

    public function getSizeSort()
    {
        return $this->sizeSort;
    }

}