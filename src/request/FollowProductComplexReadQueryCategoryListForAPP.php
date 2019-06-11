<?php

namespace JD\request;

/**
 * APP端查询关注商品分类信息列表（APP端有特定的自定义分类）
 * 用户API -用户信息及操作
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=106&apiId=2476&apiName=jingdong.follow.product.complex.read.queryCategoryListForAPP
 * Class FollowProductComplexReadQueryCategoryListForAPP
 * @package Jd\request
 */
class FollowProductComplexReadQueryCategoryListForAPP
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.follow.product.complex.read.queryCategoryListForAPP";
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
     * @param String $pin
     * 用户pin
     * Required: true
     * Example Value: 
     */
    private $pin;

    /**
     * @param String $pin
     * 用户pin
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param Number $categoryId
     * 自定义分类ID（APP端特有）
     * Required: false
     * Example Value: 
     */
    private $categoryId;

    /**
     * @param Number $categoryId
     * 自定义分类ID（APP端特有）
     * Example Value: 
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["categoryId"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param Number $tagId
     * 标签ID(2015年04月10日 后将不会再支持)
     * Required: false
     * Example Value: 
     */
    private $tagId;

    /**
     * @param Number $tagId
     * 标签ID(2015年04月10日 后将不会再支持)
     * Example Value: 
     */
    public function setTagId($tagId)
    {
        $this->tagId             = $tagId;
        $this->apiParas["tagId"]  = $tagId;
    }

    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * @param Boolean $isBuy
     * 是否购买
     * Required: false
     * Example Value: 
     */
    private $isBuy;

    /**
     * @param Boolean $isBuy
     * 是否购买
     * Example Value: 
     */
    public function setIsBuy($isBuy)
    {
        $this->isBuy             = $isBuy;
        $this->apiParas["isBuy"]  = $isBuy;
    }

    public function getIsBuy()
    {
        return $this->isBuy;
    }

    /**
     * @param String $productName
     * 商品名称搜索
     * Required: false
     * Example Value: 
     */
    private $productName;

    /**
     * @param String $productName
     * 商品名称搜索
     * Example Value: 
     */
    public function setProductName($productName)
    {
        $this->productName             = $productName;
        $this->apiParas["productName"]  = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param Boolean $isReduce
     * 是否降价
     * Required: false
     * Example Value: 
     */
    private $isReduce;

    /**
     * @param Boolean $isReduce
     * 是否降价
     * Example Value: 
     */
    public function setIsReduce($isReduce)
    {
        $this->isReduce             = $isReduce;
        $this->apiParas["isReduce"]  = $isReduce;
    }

    public function getIsReduce()
    {
        return $this->isReduce;
    }

    /**
     * @param Boolean $isSale
     * 是否促销
     * Required: false
     * Example Value: 
     */
    private $isSale;

    /**
     * @param Boolean $isSale
     * 是否促销
     * Example Value: 
     */
    public function setIsSale($isSale)
    {
        $this->isSale             = $isSale;
        $this->apiParas["isSale"]  = $isSale;
    }

    public function getIsSale()
    {
        return $this->isSale;
    }

    /**
     * @param Boolean $isStock
     * 是否现货 已被hasStock、hasNoStock代替
     * Required: false
     * Example Value: 
     */
    private $isStock;

    /**
     * @param Boolean $isStock
     * 是否现货 已被hasStock、hasNoStock代替
     * Example Value: 
     */
    public function setIsStock($isStock)
    {
        $this->isStock             = $isStock;
        $this->apiParas["isStock"]  = $isStock;
    }

    public function getIsStock()
    {
        return $this->isStock;
    }

    /**
     * @param String $areaNo
     * 库存地区
     * Required: false
     * Example Value: 
     */
    private $areaNo;

    /**
     * @param String $areaNo
     * 库存地区
     * Example Value: 
     */
    public function setAreaNo($areaNo)
    {
        $this->areaNo             = $areaNo;
        $this->apiParas["areaNo"]  = $areaNo;
    }

    public function getAreaNo()
    {
        return $this->areaNo;
    }

    /**
     * @param String $order
     * 排序条件(REDUCED:按照商品降价降序,REDUCED_NOTOP:按照商品降价降序  不考虑置顶(整体按降价顺序排序),PROMOTED:按照商品是否促销排序 (只把促销的排到列表前面，未按促销力度排),PROMOTED_POWER:按照商品是否促销排序 (促销力度排序),TIMED:按照商品关注时间排序,TOP_TIMED:按商品置顶时间排序,FULLCUT:按满减排序,GIVEAWAY:按是否有赠品排序,COUPON:按是否有优惠券排序)
     * Required: false
     * Example Value: 
     */
    private $order;

    /**
     * @param String $order
     * 排序条件(REDUCED:按照商品降价降序,REDUCED_NOTOP:按照商品降价降序  不考虑置顶(整体按降价顺序排序),PROMOTED:按照商品是否促销排序 (只把促销的排到列表前面，未按促销力度排),PROMOTED_POWER:按照商品是否促销排序 (促销力度排序),TIMED:按照商品关注时间排序,TOP_TIMED:按商品置顶时间排序,FULLCUT:按满减排序,GIVEAWAY:按是否有赠品排序,COUPON:按是否有优惠券排序)
     * Example Value: 
     */
    public function setOrder($order)
    {
        $this->order             = $order;
        $this->apiParas["order"]  = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param String $customerCategoryId
     * 自定义分类ID（APP端特有）
     * Required: false
     * Example Value: 
     */
    private $customerCategoryId;

    /**
     * @param String $customerCategoryId
     * 自定义分类ID（APP端特有）
     * Example Value: 
     */
    public function setCustomerCategoryId($customerCategoryId)
    {
        $this->customerCategoryId             = $customerCategoryId;
        $this->apiParas["customerCategoryId"]  = $customerCategoryId;
    }

    public function getCustomerCategoryId()
    {
        return $this->customerCategoryId;
    }

    /**
     * @param Number $integer
     * 一级分类ID
     * Required: false
     * Example Value: 
     */
    private $integer;

    /**
     * @param Number $integer
     * 一级分类ID
     * Example Value: 
     */
    public function setInteger($integer)
    {
        $this->integer             = $integer;
        $this->apiParas["firstCategoryId"]  = $integer;
    }

    public function getInteger()
    {
        return $this->integer;
    }

    /**
     * @param Boolean $hasStock
     * 有库存
     * Required: false
     * Example Value: 
     */
    private $hasStock;

    /**
     * @param Boolean $hasStock
     * 有库存
     * Example Value: 
     */
    public function setHasStock($hasStock)
    {
        $this->hasStock             = $hasStock;
        $this->apiParas["hasStock"]  = $hasStock;
    }

    public function getHasStock()
    {
        return $this->hasStock;
    }

    /**
     * @param Boolean $hasNoStock
     * 无库存
     * Required: false
     * Example Value: 
     */
    private $hasNoStock;

    /**
     * @param Boolean $hasNoStock
     * 无库存
     * Example Value: 
     */
    public function setHasNoStock($hasNoStock)
    {
        $this->hasNoStock             = $hasNoStock;
        $this->apiParas["hasNoStock"]  = $hasNoStock;
    }

    public function getHasNoStock()
    {
        return $this->hasNoStock;
    }

    /**
     * @param Boolean $isOffline
     * 已下柜
     * Required: false
     * Example Value: 
     */
    private $isOffline;

    /**
     * @param Boolean $isOffline
     * 已下柜
     * Example Value: 
     */
    public function setIsOffline($isOffline)
    {
        $this->isOffline             = $isOffline;
        $this->apiParas["isOffline"]  = $isOffline;
    }

    public function getIsOffline()
    {
        return $this->isOffline;
    }

    /**
     * @param Boolean $isFullCut
     * 是否满减
     * Required: false
     * Example Value: 
     */
    private $isFullCut;

    /**
     * @param Boolean $isFullCut
     * 是否满减
     * Example Value: 
     */
    public function setIsFullCut($isFullCut)
    {
        $this->isFullCut             = $isFullCut;
        $this->apiParas["isFullCut"]  = $isFullCut;
    }

    public function getIsFullCut()
    {
        return $this->isFullCut;
    }

    /**
     * @param Boolean $isGiveaway
     * 是否赠品
     * Required: false
     * Example Value: 
     */
    private $isGiveaway;

    /**
     * @param Boolean $isGiveaway
     * 是否赠品
     * Example Value: 
     */
    public function setIsGiveaway($isGiveaway)
    {
        $this->isGiveaway             = $isGiveaway;
        $this->apiParas["isGiveaway"]  = $isGiveaway;
    }

    public function getIsGiveaway()
    {
        return $this->isGiveaway;
    }

    /**
     * @param Boolean $isCoupon
     * 是否有优惠券，根据优惠券筛选时，必须传platForm参数，否则查全平台优惠券
     * Required: false
     * Example Value: 
     */
    private $isCoupon;

    /**
     * @param Boolean $isCoupon
     * 是否有优惠券，根据优惠券筛选时，必须传platForm参数，否则查全平台优惠券
     * Example Value: 
     */
    public function setIsCoupon($isCoupon)
    {
        $this->isCoupon             = $isCoupon;
        $this->apiParas["isCoupon"]  = $isCoupon;
    }

    public function getIsCoupon()
    {
        return $this->isCoupon;
    }

    /**
     * @param Number $platForm
     * 需要校验的平台 0（京东主站），1（京东客户端） ，2（全平台），3（M端）， 4（手机QQ）， 5（微信）， 6（QQ浏览器）， 7（京致衣橱）
     * Required: false
     * Example Value: 
     */
    private $platForm;

    /**
     * @param Number $platForm
     * 需要校验的平台 0（京东主站），1（京东客户端） ，2（全平台），3（M端）， 4（手机QQ）， 5（微信）， 6（QQ浏览器）， 7（京致衣橱）
     * Example Value: 
     */
    public function setPlatForm($platForm)
    {
        $this->platForm             = $platForm;
        $this->apiParas["platForm"]  = $platForm;
    }

    public function getPlatForm()
    {
        return $this->platForm;
    }

    /**
     * @param Boolean $isOfflineDown
     * 下架商品是否沉底(关注列表排序时排到后面)
     * Required: false
     * Example Value: 
     */
    private $isOfflineDown;

    /**
     * @param Boolean $isOfflineDown
     * 下架商品是否沉底(关注列表排序时排到后面)
     * Example Value: 
     */
    public function setIsOfflineDown($isOfflineDown)
    {
        $this->isOfflineDown             = $isOfflineDown;
        $this->apiParas["isOfflineDown"]  = $isOfflineDown;
    }

    public function getIsOfflineDown()
    {
        return $this->isOfflineDown;
    }

    /**
     * @param Boolean $isNoStockDown
     * 没有库存的商品是否沉底
     * Required: false
     * Example Value: 
     */
    private $isNoStockDown;

    /**
     * @param Boolean $isNoStockDown
     * 没有库存的商品是否沉底
     * Example Value: 
     */
    public function setIsNoStockDown($isNoStockDown)
    {
        $this->isNoStockDown             = $isNoStockDown;
        $this->apiParas["isNoStockDown"]  = $isNoStockDown;
    }

    public function getIsNoStockDown()
    {
        return $this->isNoStockDown;
    }

}