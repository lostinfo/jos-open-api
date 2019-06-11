<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 创建商家业务订单
 * 拍拍业务-拍拍业务相关接口
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=382&apiId=3273&apiName=jingdong.paipai.sopOrderJsfService.createOrder
 * Class PaipaiSopOrderJsfServiceCreateOrder
 * @package Jd\request
 */
class PaipaiSopOrderJsfServiceCreateOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.paipai.sopOrderJsfService.createOrder";
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
     * @param int $orderId
     * 业务订单号
     * Required: true
     * Example Value: 1111111111
     */
    private $orderId;

    /**
     * @param int $orderId
     * 业务订单号
     * Example Value: 1111111111
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderType
     * 订单类型(1-实物；2-虚拟)
     * Required: true
     * Example Value: 1
     */
    private $orderType;

    /**
     * @param int $orderType
     * 订单类型(1-实物；2-虚拟)
     * Example Value: 1
     */
    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"]  = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param int $createVia
     * 下单渠道(1-PC；2-H5；3-Android；4-ios；5-WX;9-其他)
     * Required: true
     * Example Value: 4
     */
    private $createVia;

    /**
     * @param int $createVia
     * 下单渠道(1-PC；2-H5；3-Android；4-ios；5-WX;9-其他)
     * Example Value: 4
     */
    public function setCreateVia($createVia)
    {
        $this->createVia             = $createVia;
        $this->apiParas["createVia"]  = $createVia;
    }

    public function getCreateVia()
    {
        return $this->createVia;
    }

    /**
     * @param string $josOpenId
     * 下单用户(京东)openId
     * Required: true
     * Example Value: 4561748
     */
    private $josOpenId;

    /**
     * @param string $josOpenId
     * 下单用户(京东)openId
     * Example Value: 4561748
     */
    public function setJosOpenId($josOpenId)
    {
        $this->josOpenId             = $josOpenId;
        $this->apiParas["josOpenId"]  = $josOpenId;
    }

    public function getJosOpenId()
    {
        return $this->josOpenId;
    }

    /**
     * @param int $ppUin
     * 下单用户(拍拍)uin
     * Required: false
     * Example Value: 4565778
     */
    private $ppUin;

    /**
     * @param int $ppUin
     * 下单用户(拍拍)uin
     * Example Value: 4565778
     */
    public function setPpUin($ppUin)
    {
        $this->ppUin             = $ppUin;
        $this->apiParas["ppUin"]  = $ppUin;
    }

    public function getPpUin()
    {
        return $this->ppUin;
    }

    /**
     * @param int $orderAmount
     * 商品总额(单位：分)
     * Required: true
     * Example Value: 50000
     */
    private $orderAmount;

    /**
     * @param int $orderAmount
     * 商品总额(单位：分)
     * Example Value: 50000
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount             = $orderAmount;
        $this->apiParas["orderAmount"]  = $orderAmount;
    }

    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * @param int $discountAmount
     * 优惠金额(单位：分 若为负值，则为加价券)
     * Required: true
     * Example Value: 1000
     */
    private $discountAmount;

    /**
     * @param int $discountAmount
     * 优惠金额(单位：分 若为负值，则为加价券)
     * Example Value: 1000
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount             = $discountAmount;
        $this->apiParas["discountAmount"]  = $discountAmount;
    }

    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param int $shippingAmount
     * 运费(单位：分)
     * Required: true
     * Example Value: 1000
     */
    private $shippingAmount;

    /**
     * @param int $shippingAmount
     * 运费(单位：分)
     * Example Value: 1000
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount             = $shippingAmount;
        $this->apiParas["shippingAmount"]  = $shippingAmount;
    }

    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * @param int $payAmount
     * 应付金额(单位：分 应付 = 总额 - 优惠 + 运费)
     * Required: true
     * Example Value: 50000
     */
    private $payAmount;

    /**
     * @param int $payAmount
     * 应付金额(单位：分 应付 = 总额 - 优惠 + 运费)
     * Example Value: 50000
     */
    public function setPayAmount($payAmount)
    {
        $this->payAmount             = $payAmount;
        $this->apiParas["payAmount"]  = $payAmount;
    }

    public function getPayAmount()
    {
        return $this->payAmount;
    }

    /**
     * @param string $shippingName
     * 发/收货人(虚拟物品是可以不填的)
     * Required: false
     * Example Value: 张三
     */
    private $shippingName;

    /**
     * @param string $shippingName
     * 发/收货人(虚拟物品是可以不填的)
     * Example Value: 张三
     */
    public function setShippingName($shippingName)
    {
        $this->shippingName             = $shippingName;
        $this->apiParas["shippingName"]  = $shippingName;
    }

    public function getShippingName()
    {
        return $this->shippingName;
    }

    /**
     * @param string $shippingPhone
     * 发/收货人联系电话(虚拟物品是可以不填的)
     * Required: false
     * Example Value: 18702356396
     */
    private $shippingPhone;

    /**
     * @param string $shippingPhone
     * 发/收货人联系电话(虚拟物品是可以不填的)
     * Example Value: 18702356396
     */
    public function setShippingPhone($shippingPhone)
    {
        $this->shippingPhone             = $shippingPhone;
        $this->apiParas["shippingPhone"]  = $shippingPhone;
    }

    public function getShippingPhone()
    {
        return $this->shippingPhone;
    }

    /**
     * @param string $shippingAddress
     * 发/收货地址(虚拟物品是可以不填的)
     * Required: false
     * Example Value: 北京市海淀区xx小区
     */
    private $shippingAddress;

    /**
     * @param string $shippingAddress
     * 发/收货地址(虚拟物品是可以不填的)
     * Example Value: 北京市海淀区xx小区
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress             = $shippingAddress;
        $this->apiParas["shippingAddress"]  = $shippingAddress;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param int $payAccountType
     * （回收类有该字段）打款账户类型(1-余额；2-小金库；3-银行卡；4-微信；5-E卡；6-企业资金账户
     * Required: false
     * Example Value: 1
     */
    private $payAccountType;

    /**
     * @param int $payAccountType
     * （回收类有该字段）打款账户类型(1-余额；2-小金库；3-银行卡；4-微信；5-E卡；6-企业资金账户
     * Example Value: 1
     */
    public function setPayAccountType($payAccountType)
    {
        $this->payAccountType             = $payAccountType;
        $this->apiParas["payAccountType"]  = $payAccountType;
    }

    public function getPayAccountType()
    {
        return $this->payAccountType;
    }

    /**
     * @param string $payAccount
     * （回收类有该字段）打款账户
     * Required: false
     * Example Value: 62685986458
     */
    private $payAccount;

    /**
     * @param string $payAccount
     * （回收类有该字段）打款账户
     * Example Value: 62685986458
     */
    public function setPayAccount($payAccount)
    {
        $this->payAccount             = $payAccount;
        $this->apiParas["payAccount"]  = $payAccount;
    }

    public function getPayAccount()
    {
        return $this->payAccount;
    }

    /**
     * @param string $orderCreateDt
     * 订单下单时间
     * Required: true
     * Example Value: 
     */
    private $orderCreateDt;

    /**
     * @param string $orderCreateDt
     * 订单下单时间
     * Example Value: 
     */
    public function setOrderCreateDt($orderCreateDt)
    {
        $this->orderCreateDt             = $orderCreateDt;
        $this->apiParas["orderCreateDt"]  = $orderCreateDt;
    }

    public function getOrderCreateDt()
    {
        return $this->orderCreateDt;
    }

    /**
     * @param string $userId
     * 用户ID(商户系统内的ID）
     * Required: true
     * Example Value: 666666
     */
    private $userId;

    /**
     * @param string $userId
     * 用户ID(商户系统内的ID）
     * Example Value: 666666
     */
    public function setUserId($userId)
    {
        $this->userId             = $userId;
        $this->apiParas["userId"]  = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $sopOrderProductReqListJson
     * 订单商品列表JSON 生成订单上列表JSON字符后，再进行Base64.getUrlEncoder().encode(s.getBytes(Charset.forName(UTF-8)))编码 订单商品包含字段如下 productId String 必输 商品id；productCategory String 非必输 商品分类；productBrand String 非必输 品牌；productName String 必输 商品名称；productQuantity Long 必输 商品数量；productPrice Long 必输  商品价格(单位：分)；productInfo String 非必输 商品描述 ；productExt String 非必输 商品扩展字段；
     * Required: true
     * Example Value: W3sicHJvZHVjdEJyYW5kIjoi6Iu55p6cIiwicHJvZHVjdENhdGVnb3J5Ijoi5omL5py6IiwicHJvZHVjdEV4dCI6IuWVhuWTgeaJqeWxleS_oeaBryIsInByb2R1Y3RJZCI6IjEzMjQ1NiIsInByb2R1Y3RJbmZvIjoi6Iu55p6c5omL5py6IiwicHJvZHVjdE5hbWUiOiJpcGhvbmV4IiwicHJvZHVjdFByaWNlIjo5OTk5MDAsInByb2R1Y3RRdWFudGl0eSI6MX0seyJwcm9kdWN0QnJhbmQiOiLljY7kuLoiLCJwcm9kdWN0Q2F0ZWdvcnkiOiLmiYvmnLoiLCJwcm9kdWN0RXh0Ijoi5ZWG5ZOB5omp5bGV5L-h5oGvIiwicHJvZHVjdElkIjoiMTExMSIsInByb2R1Y3RJbmZvIjoi5Y2O5Li65omL5py6IiwicHJvZHVjdE5hbWUiOiJtYXRlMjAiLCJwcm9kdWN0UHJpY2UiOjY2NjYwMCwicHJvZHVjdFF1YW50aXR5IjoxfV0=
     */
    private $sopOrderProductReqListJson;

    /**
     * @param string $sopOrderProductReqListJson
     * 订单商品列表JSON 生成订单上列表JSON字符后，再进行Base64.getUrlEncoder().encode(s.getBytes(Charset.forName(UTF-8)))编码 订单商品包含字段如下 productId String 必输 商品id；productCategory String 非必输 商品分类；productBrand String 非必输 品牌；productName String 必输 商品名称；productQuantity Long 必输 商品数量；productPrice Long 必输  商品价格(单位：分)；productInfo String 非必输 商品描述 ；productExt String 非必输 商品扩展字段；
     * Example Value: W3sicHJvZHVjdEJyYW5kIjoi6Iu55p6cIiwicHJvZHVjdENhdGVnb3J5Ijoi5omL5py6IiwicHJvZHVjdEV4dCI6IuWVhuWTgeaJqeWxleS_oeaBryIsInByb2R1Y3RJZCI6IjEzMjQ1NiIsInByb2R1Y3RJbmZvIjoi6Iu55p6c5omL5py6IiwicHJvZHVjdE5hbWUiOiJpcGhvbmV4IiwicHJvZHVjdFByaWNlIjo5OTk5MDAsInByb2R1Y3RRdWFudGl0eSI6MX0seyJwcm9kdWN0QnJhbmQiOiLljY7kuLoiLCJwcm9kdWN0Q2F0ZWdvcnkiOiLmiYvmnLoiLCJwcm9kdWN0RXh0Ijoi5ZWG5ZOB5omp5bGV5L-h5oGvIiwicHJvZHVjdElkIjoiMTExMSIsInByb2R1Y3RJbmZvIjoi5Y2O5Li65omL5py6IiwicHJvZHVjdE5hbWUiOiJtYXRlMjAiLCJwcm9kdWN0UHJpY2UiOjY2NjYwMCwicHJvZHVjdFF1YW50aXR5IjoxfV0=
     */
    public function setSopOrderProductReqListJson($sopOrderProductReqListJson)
    {
        $this->sopOrderProductReqListJson             = $sopOrderProductReqListJson;
        $this->apiParas["sopOrderProductReqListJson"]  = $sopOrderProductReqListJson;
    }

    public function getSopOrderProductReqListJson()
    {
        return $this->sopOrderProductReqListJson;
    }

    /**
     * @param int $realAmount
     * 实付金额(单位：分 支付单实收合计)
     * Required: true
     * Example Value: 50000
     */
    private $realAmount;

    /**
     * @param int $realAmount
     * 实付金额(单位：分 支付单实收合计)
     * Example Value: 50000
     */
    public function setRealAmount($realAmount)
    {
        $this->realAmount             = $realAmount;
        $this->apiParas["realAmount"]  = $realAmount;
    }

    public function getRealAmount()
    {
        return $this->realAmount;
    }

}