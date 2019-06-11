<?php

namespace JD\request;

/**
 * 新增店铺
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=946&apiName=jingdong.eclp.master.insertShop
 * Class EclpMasterInsertShop
 * @package Jd\request
 */
class EclpMasterInsertShop
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertShop";
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
     * @param String $isvShopNo
     * ISV店铺编号(必填，长度：50)
     * Required: true
     * Example Value: 95666
     */
    private $isvShopNo;

    /**
     * @param String $isvShopNo
     * ISV店铺编号(必填，长度：50)
     * Example Value: 95666
     */
    public function setIsvShopNo($isvShopNo)
    {
        $this->isvShopNo             = $isvShopNo;
        $this->apiParas["isvShopNo"]  = $isvShopNo;
    }

    public function getIsvShopNo()
    {
        return $this->isvShopNo;
    }

    /**
     * @param String $spSourceNo
     * 所属销售平台编号(必填，长度：20)
     * Required: true
     * Example Value: 200000011
     */
    private $spSourceNo;

    /**
     * @param String $spSourceNo
     * 所属销售平台编号(必填，长度：20)
     * Example Value: 200000011
     */
    public function setSpSourceNo($spSourceNo)
    {
        $this->spSourceNo             = $spSourceNo;
        $this->apiParas["spSourceNo"]  = $spSourceNo;
    }

    public function getSpSourceNo()
    {
        return $this->spSourceNo;
    }

    /**
     * @param String $deptNo
     * 所属事业部编号(必填，长度：16)
     * Required: true
     * Example Value: EBU0000000000666 
     */
    private $deptNo;

    /**
     * @param String $deptNo
     * 所属事业部编号(必填，长度：16)
     * Example Value: EBU0000000000666 
     */
    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"]  = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    /**
     * @param String $spShopNo
     * 销售平台店铺编号(非必填，长度：50)
     * Required: false
     * Example Value: 95666
     */
    private $spShopNo;

    /**
     * @param String $spShopNo
     * 销售平台店铺编号(非必填，长度：50)
     * Example Value: 95666
     */
    public function setSpShopNo($spShopNo)
    {
        $this->spShopNo             = $spShopNo;
        $this->apiParas["spShopNo"]  = $spShopNo;
    }

    public function getSpShopNo()
    {
        return $this->spShopNo;
    }

    /**
     * @param String $shopName
     * 店铺名称(必填，长度：100)
     * Required: true
     * Example Value: test-pop-15
     */
    private $shopName;

    /**
     * @param String $shopName
     * 店铺名称(必填，长度：100)
     * Example Value: test-pop-15
     */
    public function setShopName($shopName)
    {
        $this->shopName             = $shopName;
        $this->apiParas["shopName"]  = $shopName;
    }

    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * @param String $contacts
     * 店铺联系人(非必填，长度：50)
     * Required: false
     * Example Value: 张三
     */
    private $contacts;

    /**
     * @param String $contacts
     * 店铺联系人(非必填，长度：50)
     * Example Value: 张三
     */
    public function setContacts($contacts)
    {
        $this->contacts             = $contacts;
        $this->apiParas["contacts"]  = $contacts;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param String $phone
     * 联系人电话(非必填，长度：50)
     * Required: false
     * Example Value: 13800000000
     */
    private $phone;

    /**
     * @param String $phone
     * 联系人电话(非必填，长度：50)
     * Example Value: 13800000000
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param String $address
     * 店铺地址(非必填，长度：500)
     * Required: false
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    private $address;

    /**
     * @param String $address
     * 店铺地址(非必填，长度：500)
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param String $email
     * 邮箱(非必填，长度：100)
     * Required: false
     * Example Value: 12345Aqq.com
     */
    private $email;

    /**
     * @param String $email
     * 邮箱(非必填，长度：100)
     * Example Value: 12345Aqq.com
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param String $fax
     * 传真(非必填，长度：15)
     * Required: false
     * Example Value: 010-56536363
     */
    private $fax;

    /**
     * @param String $fax
     * 传真(非必填，长度：15)
     * Example Value: 010-56536363
     */
    public function setFax($fax)
    {
        $this->fax             = $fax;
        $this->apiParas["fax"]  = $fax;
    }

    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param String $afterSaleContacts
     * 售后联系人(必填，长度：50)
     * Required: true
     * Example Value: 李四
     */
    private $afterSaleContacts;

    /**
     * @param String $afterSaleContacts
     * 售后联系人(必填，长度：50)
     * Example Value: 李四
     */
    public function setAfterSaleContacts($afterSaleContacts)
    {
        $this->afterSaleContacts             = $afterSaleContacts;
        $this->apiParas["afterSaleContacts"]  = $afterSaleContacts;
    }

    public function getAfterSaleContacts()
    {
        return $this->afterSaleContacts;
    }

    /**
     * @param String $afterSaleAddress
     * 售后地址(必填，长度：500)
     * Required: true
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    private $afterSaleAddress;

    /**
     * @param String $afterSaleAddress
     * 售后地址(必填，长度：500)
     * Example Value: 北京亦庄经济开发区科创十一街18号 京东集团总部大楼C座10层
     */
    public function setAfterSaleAddress($afterSaleAddress)
    {
        $this->afterSaleAddress             = $afterSaleAddress;
        $this->apiParas["afterSaleAddress"]  = $afterSaleAddress;
    }

    public function getAfterSaleAddress()
    {
        return $this->afterSaleAddress;
    }

    /**
     * @param String $afterSalePhone
     * 售后电话(必填，长度：50)
     * Required: true
     * Example Value: 13800000000
     */
    private $afterSalePhone;

    /**
     * @param String $afterSalePhone
     * 售后电话(必填，长度：50)
     * Example Value: 13800000000
     */
    public function setAfterSalePhone($afterSalePhone)
    {
        $this->afterSalePhone             = $afterSalePhone;
        $this->apiParas["afterSalePhone"]  = $afterSalePhone;
    }

    public function getAfterSalePhone()
    {
        return $this->afterSalePhone;
    }

    /**
     * @param String $bdOwnerNo
     * 青龙业主号(非必填，长度：5000)
     * Required: false
     * Example Value: 010K1123
     */
    private $bdOwnerNo;

    /**
     * @param String $bdOwnerNo
     * 青龙业主号(非必填，长度：5000)
     * Example Value: 010K1123
     */
    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->bdOwnerNo             = $bdOwnerNo;
        $this->apiParas["bdOwnerNo"]  = $bdOwnerNo;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    /**
     * @param String $reserve1
     * 预留字段1
     * Required: false
     * Example Value: 
     */
    private $reserve1;

    /**
     * @param String $reserve1
     * 预留字段1
     * Example Value: 
     */
    public function setReserve1($reserve1)
    {
        $this->reserve1             = $reserve1;
        $this->apiParas["reserve1"]  = $reserve1;
    }

    public function getReserve1()
    {
        return $this->reserve1;
    }

    /**
     * @param String $reserve2
     * 预留字段2
     * Required: false
     * Example Value: 
     */
    private $reserve2;

    /**
     * @param String $reserve2
     * 预留字段2
     * Example Value: 
     */
    public function setReserve2($reserve2)
    {
        $this->reserve2             = $reserve2;
        $this->apiParas["reserve2"]  = $reserve2;
    }

    public function getReserve2()
    {
        return $this->reserve2;
    }

    /**
     * @param String $reserve3
     * 预留字段3
     * Required: false
     * Example Value: 
     */
    private $reserve3;

    /**
     * @param String $reserve3
     * 预留字段3
     * Example Value: 
     */
    public function setReserve3($reserve3)
    {
        $this->reserve3             = $reserve3;
        $this->apiParas["reserve3"]  = $reserve3;
    }

    public function getReserve3()
    {
        return $this->reserve3;
    }

    /**
     * @param String $reserve4
     * 预留字段4
     * Required: false
     * Example Value: 
     */
    private $reserve4;

    /**
     * @param String $reserve4
     * 预留字段4
     * Example Value: 
     */
    public function setReserve4($reserve4)
    {
        $this->reserve4             = $reserve4;
        $this->apiParas["reserve4"]  = $reserve4;
    }

    public function getReserve4()
    {
        return $this->reserve4;
    }

    /**
     * @param String $reserve5
     * 预留字段5
     * Required: false
     * Example Value: 
     */
    private $reserve5;

    /**
     * @param String $reserve5
     * 预留字段5
     * Example Value: 
     */
    public function setReserve5($reserve5)
    {
        $this->reserve5             = $reserve5;
        $this->apiParas["reserve5"]  = $reserve5;
    }

    public function getReserve5()
    {
        return $this->reserve5;
    }

    /**
     * @param String $reserve6
     * 预留字段6
     * Required: false
     * Example Value: 
     */
    private $reserve6;

    /**
     * @param String $reserve6
     * 预留字段6
     * Example Value: 
     */
    public function setReserve6($reserve6)
    {
        $this->reserve6             = $reserve6;
        $this->apiParas["reserve6"]  = $reserve6;
    }

    public function getReserve6()
    {
        return $this->reserve6;
    }

    /**
     * @param String $reserve7
     * 预留字段7
     * Required: false
     * Example Value: 
     */
    private $reserve7;

    /**
     * @param String $reserve7
     * 预留字段7
     * Example Value: 
     */
    public function setReserve7($reserve7)
    {
        $this->reserve7             = $reserve7;
        $this->apiParas["reserve7"]  = $reserve7;
    }

    public function getReserve7()
    {
        return $this->reserve7;
    }

    /**
     * @param String $reserve8
     * 预留字段8
     * Required: false
     * Example Value: 
     */
    private $reserve8;

    /**
     * @param String $reserve8
     * 预留字段8
     * Example Value: 
     */
    public function setReserve8($reserve8)
    {
        $this->reserve8             = $reserve8;
        $this->apiParas["reserve8"]  = $reserve8;
    }

    public function getReserve8()
    {
        return $this->reserve8;
    }

    /**
     * @param String $reserve9
     * 预留字段9
     * Required: false
     * Example Value: 
     */
    private $reserve9;

    /**
     * @param String $reserve9
     * 预留字段9
     * Example Value: 
     */
    public function setReserve9($reserve9)
    {
        $this->reserve9             = $reserve9;
        $this->apiParas["reserve9"]  = $reserve9;
    }

    public function getReserve9()
    {
        return $this->reserve9;
    }

    /**
     * @param String $reserve10
     * 预留字段10
     * Required: false
     * Example Value: 
     */
    private $reserve10;

    /**
     * @param String $reserve10
     * 预留字段10
     * Example Value: 
     */
    public function setReserve10($reserve10)
    {
        $this->reserve10             = $reserve10;
        $this->apiParas["reserve10"]  = $reserve10;
    }

    public function getReserve10()
    {
        return $this->reserve10;
    }

}