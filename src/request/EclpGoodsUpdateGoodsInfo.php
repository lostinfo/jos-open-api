<?php

namespca Lostinfo\JosOpenApi;

/**
 * 修改主商品信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=927&apiName=jingdong.eclp.goods.updateGoodsInfo
 * Class EclpGoodsUpdateGoodsInfo
 * @package Jd\request
 */
class EclpGoodsUpdateGoodsInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.updateGoodsInfo";
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
     * @param string $goodsNo
     * ECLP事业部商品编码                                （长度：50）
     * Required: false
     * Example Value:  EMG445930335
     */
    private $goodsNo;

    /**
     * @param string $goodsNo
     * ECLP事业部商品编码                                （长度：50）
     * Example Value:  EMG445930335
     */
    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo             = $goodsNo;
        $this->apiParas["goodsNo"]  = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    /**
     * @param string $spGodosNo
     * 销售平台商品编码                                   （长度：50）
     * Required: false
     * Example Value: 38578045095 
     */
    private $spGodosNo;

    /**
     * @param string $spGodosNo
     * 销售平台商品编码                                   （长度：50）
     * Example Value: 38578045095 
     */
    public function setSpGodosNo($spGodosNo)
    {
        $this->spGodosNo             = $spGodosNo;
        $this->apiParas["spGoodsNo"]  = $spGodosNo;
    }

    public function getSpGodosNo()
    {
        return $this->spGodosNo;
    }

    /**
     * @param string $barcodes
     * 商品条码，以英文逗号隔开                        （长度：100）
     * Required: false
     * Example Value: 6970805738061,4527080573324  
     */
    private $barcodes;

    /**
     * @param string $barcodes
     * 商品条码，以英文逗号隔开                        （长度：100）
     * Example Value: 6970805738061,4527080573324  
     */
    public function setBarcodes($barcodes)
    {
        $this->barcodes             = $barcodes;
        $this->apiParas["barcodes"]  = $barcodes;
    }

    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * @param string $abbreviation
     * 商品简称                                                (长度：200) 
     * Required: false
     * Example Value: 悦丝spa精选海藻护手霜80g 
     */
    private $abbreviation;

    /**
     * @param string $abbreviation
     * 商品简称                                                (长度：200) 
     * Example Value: 悦丝spa精选海藻护手霜80g 
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation             = $abbreviation;
        $this->apiParas["abbreviation"]  = $abbreviation;
    }

    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * @param string $brandNo
     * 品牌编码                                                (长度：50)         
     * Required: false
     * Example Value: 290850 
     */
    private $brandNo;

    /**
     * @param string $brandNo
     * 品牌编码                                                (长度：50)         
     * Example Value: 290850 
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo             = $brandNo;
        $this->apiParas["brandNo"]  = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * @param string $brandName
     * 品牌名称                                                (长度：200)       
     * Required: false
     * Example Value: 奥克斯品牌 
     */
    private $brandName;

    /**
     * @param string $brandName
     * 品牌名称                                                (长度：200)       
     * Example Value: 奥克斯品牌 
     */
    public function setBrandName($brandName)
    {
        $this->brandName             = $brandName;
        $this->apiParas["brandName"]  = $brandName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param string $manufacturer
     * 生产厂商                                                (长度：50)      
     * Required: false
     * Example Value: 北京奥克斯厂商 
     */
    private $manufacturer;

    /**
     * @param string $manufacturer
     * 生产厂商                                                (长度：50)      
     * Example Value: 北京奥克斯厂商 
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer             = $manufacturer;
        $this->apiParas["manufacturer"]  = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $produceAddress
     * 产地                                                      (长度：500)     
     * Required: false
     * Example Value: 北京 
     */
    private $produceAddress;

    /**
     * @param string $produceAddress
     * 产地                                                      (长度：500)     
     * Example Value: 北京 
     */
    public function setProduceAddress($produceAddress)
    {
        $this->produceAddress             = $produceAddress;
        $this->apiParas["produceAddress"]  = $produceAddress;
    }

    public function getProduceAddress()
    {
        return $this->produceAddress;
    }

    /**
     * @param string $standard
     * 商品规格                                                 (长度：200)       
     * Required: false
     * Example Value: 5L220V 
     */
    private $standard;

    /**
     * @param string $standard
     * 商品规格                                                 (长度：200)       
     * Example Value: 5L220V 
     */
    public function setStandard($standard)
    {
        $this->standard             = $standard;
        $this->apiParas["standard"]  = $standard;
    }

    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * @param string $color
     * 商品颜色                                                 (长度：100)   
     * Required: false
     * Example Value: 红色 
     */
    private $color;

    /**
     * @param string $color
     * 商品颜色                                                 (长度：100)   
     * Example Value: 红色 
     */
    public function setColor($color)
    {
        $this->color             = $color;
        $this->apiParas["color"]  = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $size
     * 商品尺码                                                  (长度：50)   
     * Required: false
     * Example Value: 5寸 
     */
    private $size;

    /**
     * @param string $size
     * 商品尺码                                                  (长度：50)   
     * Example Value: 5寸 
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $sizeDefinition
     * 商品件型                                                   (长度：20)   
     * Required: false
     * Example Value: 小件 
     */
    private $sizeDefinition;

    /**
     * @param string $sizeDefinition
     * 商品件型                                                   (长度：20)   
     * Example Value: 小件 
     */
    public function setSizeDefinition($sizeDefinition)
    {
        $this->sizeDefinition             = $sizeDefinition;
        $this->apiParas["sizeDefinition"]  = $sizeDefinition;
    }

    public function getSizeDefinition()
    {
        return $this->sizeDefinition;
    }

    /**
     * @param int $grossWeight
     * 商品毛重                                                   (长度：20)   
     * Required: false
     * Example Value: 23.2 
     */
    private $grossWeight;

    /**
     * @param int $grossWeight
     * 商品毛重                                                   (长度：20)   
     * Example Value: 23.2 
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight             = $grossWeight;
        $this->apiParas["grossWeight"]  = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param int $netWeight
     * 商品净重                                                  (长度：20) 
     * Required: false
     * Example Value: 23.1 
     */
    private $netWeight;

    /**
     * @param int $netWeight
     * 商品净重                                                  (长度：20) 
     * Example Value: 23.1 
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight             = $netWeight;
        $this->apiParas["netWeight"]  = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param int $length
     * 长                                                          (长度：20) 
     * Required: false
     * Example Value: 4
     */
    private $length;

    /**
     * @param int $length
     * 长                                                          (长度：20) 
     * Example Value: 4
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $width
     * 宽                                                         (长度：20) 
     * Required: false
     * Example Value: 5
     */
    private $width;

    /**
     * @param int $width
     * 宽                                                         (长度：20) 
     * Example Value: 5
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $height
     * 高                                                       (长度：20) 
     * Required: false
     * Example Value: 8
     */
    private $height;

    /**
     * @param int $height
     * 高                                                       (长度：20) 
     * Example Value: 8
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $batch
     * 是否批次管理  (长度：3) 
     * Required: false
     * Example Value: 1
     */
    private $batch;

    /**
     * @param string $batch
     * 是否批次管理  (长度：3) 
     * Example Value: 1
     */
    public function setBatch($batch)
    {
        $this->batch             = $batch;
        $this->apiParas["batch"]  = $batch;
    }

    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $cheapGift
     * 是否低值赠品(长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $cheapGift;

    /**
     * @param string $cheapGift
     * 是否低值赠品(长度：4) 
     * Example Value: 1
     */
    public function setCheapGift($cheapGift)
    {
        $this->cheapGift             = $cheapGift;
        $this->apiParas["cheapGift"]  = $cheapGift;
    }

    public function getCheapGift()
    {
        return $this->cheapGift;
    }

    /**
     * @param string $quality
     * 是否质检品(长度：4) 
     * Required: false
     * Example Value: 2
     */
    private $quality;

    /**
     * @param string $quality
     * 是否质检品(长度：4) 
     * Example Value: 2
     */
    public function setQuality($quality)
    {
        $this->quality             = $quality;
        $this->apiParas["quality"]  = $quality;
    }

    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param string $expensive
     * 是否高值(长度：4) 
     * Required: false
     * Example Value: 2
     */
    private $expensive;

    /**
     * @param string $expensive
     * 是否高值(长度：4) 
     * Example Value: 2
     */
    public function setExpensive($expensive)
    {
        $this->expensive             = $expensive;
        $this->apiParas["expensive"]  = $expensive;
    }

    public function getExpensive()
    {
        return $this->expensive;
    }

    /**
     * @param string $luxury
     * 是否奢侈品(长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $luxury;

    /**
     * @param string $luxury
     * 是否奢侈品(长度：4) 
     * Example Value: 1
     */
    public function setLuxury($luxury)
    {
        $this->luxury             = $luxury;
        $this->apiParas["luxury"]  = $luxury;
    }

    public function getLuxury()
    {
        return $this->luxury;
    }

    /**
     * @param string $breakable
     * 是否易碎品(长度：4) 
     * Required: false
     * Example Value: 2
     */
    private $breakable;

    /**
     * @param string $breakable
     * 是否易碎品(长度：4) 
     * Example Value: 2
     */
    public function setBreakable($breakable)
    {
        $this->breakable             = $breakable;
        $this->apiParas["breakable"]  = $breakable;
    }

    public function getBreakable()
    {
        return $this->breakable;
    }

    /**
     * @param string $liquid
     * 是否液体(长度：3) 
     * Required: false
     * Example Value: 2
     */
    private $liquid;

    /**
     * @param string $liquid
     * 是否液体(长度：3) 
     * Example Value: 2
     */
    public function setLiquid($liquid)
    {
        $this->liquid             = $liquid;
        $this->apiParas["liquid"]  = $liquid;
    }

    public function getLiquid()
    {
        return $this->liquid;
    }

    /**
     * @param string $consumables
     * 是否耗材(长度：3) 
     * Required: false
     * Example Value: 2
     */
    private $consumables;

    /**
     * @param string $consumables
     * 是否耗材(长度：3) 
     * Example Value: 2
     */
    public function setConsumables($consumables)
    {
        $this->consumables             = $consumables;
        $this->apiParas["consumables"]  = $consumables;
    }

    public function getConsumables()
    {
        return $this->consumables;
    }

    /**
     * @param string $abnormal
     * 是否异型(长度：3) 
     * Required: false
     * Example Value: 1
     */
    private $abnormal;

    /**
     * @param string $abnormal
     * 是否异型(长度：3) 
     * Example Value: 1
     */
    public function setAbnormal($abnormal)
    {
        $this->abnormal             = $abnormal;
        $this->apiParas["abnormal"]  = $abnormal;
    }

    public function getAbnormal()
    {
        return $this->abnormal;
    }

    /**
     * @param string $imported
     * 是否进口商品(长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $imported;

    /**
     * @param string $imported
     * 是否进口商品(长度：4) 
     * Example Value: 1
     */
    public function setImported($imported)
    {
        $this->imported             = $imported;
        $this->apiParas["imported"]  = $imported;
    }

    public function getImported()
    {
        return $this->imported;
    }

    /**
     * @param string $health
     * 是否保健品(长度：3) 
     * Required: false
     * Example Value: 2
     */
    private $health;

    /**
     * @param string $health
     * 是否保健品(长度：3) 
     * Example Value: 2
     */
    public function setHealth($health)
    {
        $this->health             = $health;
        $this->apiParas["health"]  = $health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param string $temperature
     * 是否温度控制(长度：20) 
     * Required: false
     * Example Value: 1
     */
    private $temperature;

    /**
     * @param string $temperature
     * 是否温度控制(长度：20) 
     * Example Value: 1
     */
    public function setTemperature($temperature)
    {
        $this->temperature             = $temperature;
        $this->apiParas["temperature"]  = $temperature;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param string $temperatureCeil
     * 温度上限(长度：20) 
     * Required: false
     * Example Value: 37
     */
    private $temperatureCeil;

    /**
     * @param string $temperatureCeil
     * 温度上限(长度：20) 
     * Example Value: 37
     */
    public function setTemperatureCeil($temperatureCeil)
    {
        $this->temperatureCeil             = $temperatureCeil;
        $this->apiParas["temperatureCeil"]  = $temperatureCeil;
    }

    public function getTemperatureCeil()
    {
        return $this->temperatureCeil;
    }

    /**
     * @param string $temperatureFloor
     * 温度下限  (长度：20) 
     * Required: false
     * Example Value: 1
     */
    private $temperatureFloor;

    /**
     * @param string $temperatureFloor
     * 温度下限  (长度：20) 
     * Example Value: 1
     */
    public function setTemperatureFloor($temperatureFloor)
    {
        $this->temperatureFloor             = $temperatureFloor;
        $this->apiParas["temperatureFloor"]  = $temperatureFloor;
    }

    public function getTemperatureFloor()
    {
        return $this->temperatureFloor;
    }

    /**
     * @param string $humidity
     * 是否湿度控制(长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $humidity;

    /**
     * @param string $humidity
     * 是否湿度控制(长度：4) 
     * Example Value: 1
     */
    public function setHumidity($humidity)
    {
        $this->humidity             = $humidity;
        $this->apiParas["humidity"]  = $humidity;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param string $humidityCeil
     * 湿度上限(长度：20) 
     * Required: false
     * Example Value: 34
     */
    private $humidityCeil;

    /**
     * @param string $humidityCeil
     * 湿度上限(长度：20) 
     * Example Value: 34
     */
    public function setHumidityCeil($humidityCeil)
    {
        $this->humidityCeil             = $humidityCeil;
        $this->apiParas["humidityCeil"]  = $humidityCeil;
    }

    public function getHumidityCeil()
    {
        return $this->humidityCeil;
    }

    /**
     * @param string $humidityFloor
     * 湿度下限(长度：20) 
     * Required: false
     * Example Value: 12
     */
    private $humidityFloor;

    /**
     * @param string $humidityFloor
     * 湿度下限(长度：20) 
     * Example Value: 12
     */
    public function setHumidityFloor($humidityFloor)
    {
        $this->humidityFloor             = $humidityFloor;
        $this->apiParas["humidityFloor"]  = $humidityFloor;
    }

    public function getHumidityFloor()
    {
        return $this->humidityFloor;
    }

    /**
     * @param string $movable
     * 是否不可移动(长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $movable;

    /**
     * @param string $movable
     * 是否不可移动(长度：4) 
     * Example Value: 1
     */
    public function setMovable($movable)
    {
        $this->movable             = $movable;
        $this->apiParas["movable"]  = $movable;
    }

    public function getMovable()
    {
        return $this->movable;
    }

    /**
     * @param string $service3g
     * 是否3G资费(长度：3) 
     * Required: false
     * Example Value: 1
     */
    private $service3g;

    /**
     * @param string $service3g
     * 是否3G资费(长度：3) 
     * Example Value: 1
     */
    public function setService3g($service3g)
    {
        $this->service3g             = $service3g;
        $this->apiParas["service3g"]  = $service3g;
    }

    public function getService3g()
    {
        return $this->service3g;
    }

    /**
     * @param string $sample
     * 是否检验样品(长度：3) 
     * Required: false
     * Example Value: 1
     */
    private $sample;

    /**
     * @param string $sample
     * 是否检验样品(长度：3) 
     * Example Value: 1
     */
    public function setSample($sample)
    {
        $this->sample             = $sample;
        $this->apiParas["sample"]  = $sample;
    }

    public function getSample()
    {
        return $this->sample;
    }

    /**
     * @param string $odor
     * 是否串味品(长度：3) 
     * Required: false
     * Example Value: 2
     */
    private $odor;

    /**
     * @param string $odor
     * 是否串味品(长度：3) 
     * Example Value: 2
     */
    public function setOdor($odor)
    {
        $this->odor             = $odor;
        $this->apiParas["odor"]  = $odor;
    }

    public function getOdor()
    {
        return $this->odor;
    }

    /**
     * @param string $sex
     * 是否成人用品(长度：4) 
     * Required: false
     * Example Value: 2
     */
    private $sex;

    /**
     * @param string $sex
     * 是否成人用品(长度：4) 
     * Example Value: 2
     */
    public function setSex($sex)
    {
        $this->sex             = $sex;
        $this->apiParas["sex"]  = $sex;
    }

    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $precious
     * 是否贵品(长度：3) 
     * Required: false
     * Example Value: 1
     */
    private $precious;

    /**
     * @param string $precious
     * 是否贵品(长度：3) 
     * Example Value: 1
     */
    public function setPrecious($precious)
    {
        $this->precious             = $precious;
        $this->apiParas["precious"]  = $precious;
    }

    public function getPrecious()
    {
        return $this->precious;
    }

    /**
     * @param string $mixedBatch
     *  是否可混批次存放(长度：3) 
     * Required: false
     * Example Value: 1
     */
    private $mixedBatch;

    /**
     * @param string $mixedBatch
     *  是否可混批次存放(长度：3) 
     * Example Value: 1
     */
    public function setMixedBatch($mixedBatch)
    {
        $this->mixedBatch             = $mixedBatch;
        $this->apiParas["mixedBatch"]  = $mixedBatch;
    }

    public function getMixedBatch()
    {
        return $this->mixedBatch;
    }

    /**
     * @param string $reserve1
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve1;

    /**
     * @param string $reserve1
     * 预留字段
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
     * @param string $reserve2
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve2;

    /**
     * @param string $reserve2
     * 预留字段
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
     * @param string $reserve3
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve3;

    /**
     * @param string $reserve3
     * 预留字段
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
     * @param string $reserve4
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve4;

    /**
     * @param string $reserve4
     * 预留字段
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
     * @param string $reserve5
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve5;

    /**
     * @param string $reserve5
     * 预留字段
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
     * @param string $reserve6
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve6;

    /**
     * @param string $reserve6
     * 预留字段
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
     * @param string $reserve7
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve7;

    /**
     * @param string $reserve7
     * 预留字段
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
     * @param string $reserve8
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve8;

    /**
     * @param string $reserve8
     * 预留字段
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
     * @param string $reserve9
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve9;

    /**
     * @param string $reserve9
     * 预留字段
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
     * @param string $reserve10
     * 预留字段
     * Required: false
     * Example Value: 
     */
    private $reserve10;

    /**
     * @param string $reserve10
     * 预留字段
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

    /**
     * @param string $fashionNo
     * 款号 (长度：50) 
     * Required: false
     * Example Value: DL340059-0M 
     */
    private $fashionNo;

    /**
     * @param string $fashionNo
     * 款号 (长度：50) 
     * Example Value: DL340059-0M 
     */
    public function setFashionNo($fashionNo)
    {
        $this->fashionNo             = $fashionNo;
        $this->apiParas["fashionNo"]  = $fashionNo;
    }

    public function getFashionNo()
    {
        return $this->fashionNo;
    }

    /**
     * @param string $goodsMess
     * 大字段(物流云专用)
     * Required: false
     * Example Value: 
     */
    private $goodsMess;

    /**
     * @param string $goodsMess
     * 大字段(物流云专用)
     * Example Value: 
     */
    public function setGoodsMess($goodsMess)
    {
        $this->goodsMess             = $goodsMess;
        $this->apiParas["goodsMess"]  = $goodsMess;
    }

    public function getGoodsMess()
    {
        return $this->goodsMess;
    }

    /**
     * @param string $isvGoodsNo
     * ISV商品编码(长度：60) 
     * Required: false
     * Example Value: 23145433  
     */
    private $isvGoodsNo;

    /**
     * @param string $isvGoodsNo
     * ISV商品编码(长度：60) 
     * Example Value: 23145433  
     */
    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo             = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"]  = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    /**
     * @param string $deptNo
     * 事业部编码(长度：50) 
     * Required: false
     * Example Value: EBU0000000000027  
     */
    private $deptNo;

    /**
     * @param string $deptNo
     * 事业部编码(长度：50) 
     * Example Value: EBU0000000000027  
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
     * @param  $signType
     * 是否指定签收0:否（默认） 1:是 (长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $signType;

    /**
     * @param  $signType
     * 是否指定签收0:否（默认） 1:是 (长度：4) 
     * Example Value: 1
     */
    public function setSignType($signType)
    {
        $this->signType             = $signType;
        $this->apiParas["signType"]  = $signType;
    }

    public function getSignType()
    {
        return $this->signType;
    }

    /**
     * @param string $overseaPurchase
     * 是否全球购(长度：4) 
     * Required: false
     * Example Value: 1
     */
    private $overseaPurchase;

    /**
     * @param string $overseaPurchase
     * 是否全球购(长度：4) 
     * Example Value: 1
     */
    public function setOverseaPurchase($overseaPurchase)
    {
        $this->overseaPurchase             = $overseaPurchase;
        $this->apiParas["overseaPurchase"]  = $overseaPurchase;
    }

    public function getOverseaPurchase()
    {
        return $this->overseaPurchase;
    }

    /**
     * @param string $qiRecord
     * 国检备案号(长度：255) 
     * Required: false
     * Example Value: EWAO 
     */
    private $qiRecord;

    /**
     * @param string $qiRecord
     * 国检备案号(长度：255) 
     * Example Value: EWAO 
     */
    public function setQiRecord($qiRecord)
    {
        $this->qiRecord             = $qiRecord;
        $this->apiParas["qiRecord"]  = $qiRecord;
    }

    public function getQiRecord()
    {
        return $this->qiRecord;
    }

    /**
     * @param string $customRecord
     * 海关备案号(长度：255) 
     * Required: false
     * Example Value: HAIG31 
     */
    private $customRecord;

    /**
     * @param string $customRecord
     * 海关备案号(长度：255) 
     * Example Value: HAIG31 
     */
    public function setCustomRecord($customRecord)
    {
        $this->customRecord             = $customRecord;
        $this->apiParas["customRecord"]  = $customRecord;
    }

    public function getCustomRecord()
    {
        return $this->customRecord;
    }

    /**
     * @param string $pattern
     * 全球购模式(长度：255) 
     * Required: false
     * Example Value: 1 
     */
    private $pattern;

    /**
     * @param string $pattern
     * 全球购模式(长度：255) 
     * Example Value: 1 
     */
    public function setPattern($pattern)
    {
        $this->pattern             = $pattern;
        $this->apiParas["pattern"]  = $pattern;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $ccProvider
     * 清关服务商(长度：255) 
     * Required: false
     * Example Value: 北京服务商 
     */
    private $ccProvider;

    /**
     * @param string $ccProvider
     * 清关服务商(长度：255) 
     * Example Value: 北京服务商 
     */
    public function setCcProvider($ccProvider)
    {
        $this->ccProvider             = $ccProvider;
        $this->apiParas["ccProvider"]  = $ccProvider;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

    /**
     * @param string $bondedArea
     * 保税区(长度：255) 
     * Required: false
     * Example Value: 北京保税区 
     */
    private $bondedArea;

    /**
     * @param string $bondedArea
     * 保税区(长度：255) 
     * Example Value: 北京保税区 
     */
    public function setBondedArea($bondedArea)
    {
        $this->bondedArea             = $bondedArea;
        $this->apiParas["bondedArea"]  = $bondedArea;
    }

    public function getBondedArea()
    {
        return $this->bondedArea;
    }

    /**
     * @param string $sellerRecord
     * 货号(长度：255) 
     * Required: false
     * Example Value: W3WQ22 
     */
    private $sellerRecord;

    /**
     * @param string $sellerRecord
     * 货号(长度：255) 
     * Example Value: W3WQ22 
     */
    public function setSellerRecord($sellerRecord)
    {
        $this->sellerRecord             = $sellerRecord;
        $this->apiParas["sellerRecord"]  = $sellerRecord;
    }

    public function getSellerRecord()
    {
        return $this->sellerRecord;
    }

    /**
     * @param string $batAttrIds
     * 批次属性列表(长度：100) 
     * Required: false
     * Example Value: 1,2 
     */
    private $batAttrIds;

    /**
     * @param string $batAttrIds
     * 批次属性列表(长度：100) 
     * Example Value: 1,2 
     */
    public function setBatAttrIds($batAttrIds)
    {
        $this->batAttrIds             = $batAttrIds;
        $this->apiParas["batAttrIds"]  = $batAttrIds;
    }

    public function getBatAttrIds()
    {
        return $this->batAttrIds;
    }

    /**
     * @param string $needJDRecord
     * 是否需要京东商品备案(长度：4) 
     * Required: false
     * Example Value: 2 
     */
    private $needJDRecord;

    /**
     * @param string $needJDRecord
     * 是否需要京东商品备案(长度：4) 
     * Example Value: 2 
     */
    public function setNeedJDRecord($needJDRecord)
    {
        $this->needJDRecord             = $needJDRecord;
        $this->apiParas["needJDRecord"]  = $needJDRecord;
    }

    public function getNeedJDRecord()
    {
        return $this->needJDRecord;
    }

    /**
     * @param string $modelNumber
     * 型号 (没有填“无”如纸尿裤XL 30片/包，此处填“XL”)(长度：150) 
     * Required: false
     * Example Value: 纸尿裤XL 30片/包
     */
    private $modelNumber;

    /**
     * @param string $modelNumber
     * 型号 (没有填“无”如纸尿裤XL 30片/包，此处填“XL”)(长度：150) 
     * Example Value: 纸尿裤XL 30片/包
     */
    public function setModelNumber($modelNumber)
    {
        $this->modelNumber             = $modelNumber;
        $this->apiParas["modelNumber"]  = $modelNumber;
    }

    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    /**
     * @param string $spe
     * 规格(长度：510) 
     * Required: false
     * Example Value: 12SX 
     */
    private $spe;

    /**
     * @param string $spe
     * 规格(长度：510) 
     * Example Value: 12SX 
     */
    public function setSpe($spe)
    {
        $this->spe             = $spe;
        $this->apiParas["spe"]  = $spe;
    }

    public function getSpe()
    {
        return $this->spe;
    }

    /**
     * @param int $vatRate
     * 增值税率 (长度：11) 
     * Required: false
     * Example Value: 20 
     */
    private $vatRate;

    /**
     * @param int $vatRate
     * 增值税率 (长度：11) 
     * Example Value: 20 
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate             = $vatRate;
        $this->apiParas["vatRate"]  = $vatRate;
    }

    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param int $taxRate
     * 消费税率 (长度：11) 
     * Required: false
     * Example Value: 35
     */
    private $taxRate;

    /**
     * @param int $taxRate
     * 消费税率 (长度：11) 
     * Example Value: 35
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate             = $taxRate;
        $this->apiParas["taxRate"]  = $taxRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param string $taxNumberPost
     * 行邮税号  (长度：100) 
     * Required: false
     * Example Value: 01000000 
     */
    private $taxNumberPost;

    /**
     * @param string $taxNumberPost
     * 行邮税号  (长度：100) 
     * Example Value: 01000000 
     */
    public function setTaxNumberPost($taxNumberPost)
    {
        $this->taxNumberPost             = $taxNumberPost;
        $this->apiParas["taxNumberPost"]  = $taxNumberPost;
    }

    public function getTaxNumberPost()
    {
        return $this->taxNumberPost;
    }

    /**
     * @param string $postRate
     * 行邮税率(长度：100) 
     * Required: false
     * Example Value: 25
     */
    private $postRate;

    /**
     * @param string $postRate
     * 行邮税率(长度：100) 
     * Example Value: 25
     */
    public function setPostRate($postRate)
    {
        $this->postRate             = $postRate;
        $this->apiParas["postRate"]  = $postRate;
    }

    public function getPostRate()
    {
        return $this->postRate;
    }

    /**
     * @param string $hsCode
     * 海关10位Hscode(长度：100) 
     * Required: false
     * Example Value: H000211223 
     */
    private $hsCode;

    /**
     * @param string $hsCode
     * 海关10位Hscode(长度：100) 
     * Example Value: H000211223 
     */
    public function setHsCode($hsCode)
    {
        $this->hsCode             = $hsCode;
        $this->apiParas["hsCode"]  = $hsCode;
    }

    public function getHsCode()
    {
        return $this->hsCode;
    }

    /**
     * @param string $country
     * 海关原产国(长度：100) 
     * Required: false
     * Example Value: 香港 
     */
    private $country;

    /**
     * @param string $country
     * 海关原产国(长度：100) 
     * Example Value: 香港 
     */
    public function setCountry($country)
    {
        $this->country             = $country;
        $this->apiParas["country"]  = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $qiCountry
     * 国检原产国(长度：100) 
     * Required: false
     * Example Value: 北京 
     */
    private $qiCountry;

    /**
     * @param string $qiCountry
     * 国检原产国(长度：100) 
     * Example Value: 北京 
     */
    public function setQiCountry($qiCountry)
    {
        $this->qiCountry             = $qiCountry;
        $this->apiParas["qiCountry"]  = $qiCountry;
    }

    public function getQiCountry()
    {
        return $this->qiCountry;
    }

    /**
     * @param string $flag
     * 是否赠品(长度：4) 
     * Required: false
     * Example Value: 2
     */
    private $flag;

    /**
     * @param string $flag
     * 是否赠品(长度：4) 
     * Example Value: 2
     */
    public function setFlag($flag)
    {
        $this->flag             = $flag;
        $this->apiParas["flag"]  = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param string $legalUnit1
     * 法定第一计量单位(长度：100) 
     * Required: false
     * Example Value: 件
     */
    private $legalUnit1;

    /**
     * @param string $legalUnit1
     * 法定第一计量单位(长度：100) 
     * Example Value: 件
     */
    public function setLegalUnit1($legalUnit1)
    {
        $this->legalUnit1             = $legalUnit1;
        $this->apiParas["legalUnit1"]  = $legalUnit1;
    }

    public function getLegalUnit1()
    {
        return $this->legalUnit1;
    }

    /**
     * @param string $legalAmount1
     * 法定第一计量数量(长度：100) 
     * Required: false
     * Example Value: 22
     */
    private $legalAmount1;

    /**
     * @param string $legalAmount1
     * 法定第一计量数量(长度：100) 
     * Example Value: 22
     */
    public function setLegalAmount1($legalAmount1)
    {
        $this->legalAmount1             = $legalAmount1;
        $this->apiParas["legalAmount1"]  = $legalAmount1;
    }

    public function getLegalAmount1()
    {
        return $this->legalAmount1;
    }

    /**
     * @param string $legalUnit2
     * 法定第二计量单位(长度：100) 
     * Required: false
     * Example Value: 个
     */
    private $legalUnit2;

    /**
     * @param string $legalUnit2
     * 法定第二计量单位(长度：100) 
     * Example Value: 个
     */
    public function setLegalUnit2($legalUnit2)
    {
        $this->legalUnit2             = $legalUnit2;
        $this->apiParas["legalUnit2"]  = $legalUnit2;
    }

    public function getLegalUnit2()
    {
        return $this->legalUnit2;
    }

    /**
     * @param string $legalAmount2
     * 法定第二计量数量(长度：100) 
     * Required: false
     * Example Value: 34
     */
    private $legalAmount2;

    /**
     * @param string $legalAmount2
     * 法定第二计量数量(长度：100) 
     * Example Value: 34
     */
    public function setLegalAmount2($legalAmount2)
    {
        $this->legalAmount2             = $legalAmount2;
        $this->apiParas["legalAmount2"]  = $legalAmount2;
    }

    public function getLegalAmount2()
    {
        return $this->legalAmount2;
    }

    /**
     * @param string $measurement
     * 海关计量单位(长度：100) 
     * Required: false
     * Example Value: 箱
     */
    private $measurement;

    /**
     * @param string $measurement
     * 海关计量单位(长度：100) 
     * Example Value: 箱
     */
    public function setMeasurement($measurement)
    {
        $this->measurement             = $measurement;
        $this->apiParas["measurement"]  = $measurement;
    }

    public function getMeasurement()
    {
        return $this->measurement;
    }

    /**
     * @param string $qiMeasurement
     * 国检计量单位(长度：100) 
     * Required: false
     * Example Value: 批次
     */
    private $qiMeasurement;

    /**
     * @param string $qiMeasurement
     * 国检计量单位(长度：100) 
     * Example Value: 批次
     */
    public function setQiMeasurement($qiMeasurement)
    {
        $this->qiMeasurement             = $qiMeasurement;
        $this->apiParas["qiMeasurement"]  = $qiMeasurement;
    }

    public function getQiMeasurement()
    {
        return $this->qiMeasurement;
    }

    /**
     * @param string $delivery
     * 发货地(长度：100) 
     * Required: false
     * Example Value: 美国 
     */
    private $delivery;

    /**
     * @param string $delivery
     * 发货地(长度：100) 
     * Example Value: 美国 
     */
    public function setDelivery($delivery)
    {
        $this->delivery             = $delivery;
        $this->apiParas["delivery"]  = $delivery;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param string $storeProperty
     * 温层（1控温、2冷藏、3冷冻、4深冷、5鲜活、6产地直送、7鲜品，8常温，0或null：未设置）(长度：4)  
     * Required: false
     * Example Value: 1 
     */
    private $storeProperty;

    /**
     * @param string $storeProperty
     * 温层（1控温、2冷藏、3冷冻、4深冷、5鲜活、6产地直送、7鲜品，8常温，0或null：未设置）(长度：4)  
     * Example Value: 1 
     */
    public function setStoreProperty($storeProperty)
    {
        $this->storeProperty             = $storeProperty;
        $this->apiParas["storeProperty"]  = $storeProperty;
    }

    public function getStoreProperty()
    {
        return $this->storeProperty;
    }

    /**
     * @param string $productCategory
     * 商品类别(1普通商品,2药品类别,3生鲜商品,4服装类别,5医疗器械)
     * Required: false
     * Example Value: 备注：暂不支持该字段的修改；可以为空或填原有值
     */
    private $productCategory;

    /**
     * @param string $productCategory
     * 商品类别(1普通商品,2药品类别,3生鲜商品,4服装类别,5医疗器械)
     * Example Value: 备注：暂不支持该字段的修改；可以为空或填原有值
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory             = $productCategory;
        $this->apiParas["productCategory"]  = $productCategory;
    }

    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param string $category
     * 药品分类(医药必填)(长度：50)  
     * Required: false
     * Example Value: 86118 
     */
    private $category;

    /**
     * @param string $category
     * 药品分类(医药必填)(长度：50)  
     * Example Value: 86118 
     */
    public function setCategory($category)
    {
        $this->category             = $category;
        $this->apiParas["category"]  = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $approvalNo
     * 批准文号(医药必填)   (长度：100)
     * Required: false
     * Example Value: Y991,X08 
     */
    private $approvalNo;

    /**
     * @param string $approvalNo
     * 批准文号(医药必填)   (长度：100)
     * Example Value: Y991,X08 
     */
    public function setApprovalNo($approvalNo)
    {
        $this->approvalNo             = $approvalNo;
        $this->apiParas["approvalNo"]  = $approvalNo;
    }

    public function getApprovalNo()
    {
        return $this->approvalNo;
    }

    /**
     * @param string $storage
     * 储存条件(医药必填)，多个批准文号间以逗号隔开    (长度：20)
     * Required: false
     * Example Value: 常温保存 
     */
    private $storage;

    /**
     * @param string $storage
     * 储存条件(医药必填)，多个批准文号间以逗号隔开    (长度：20)
     * Example Value: 常温保存 
     */
    public function setStorage($storage)
    {
        $this->storage             = $storage;
        $this->apiParas["storage"]  = $storage;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param string $form
     * 剂型(长度：20)
     * Required: false
     * Example Value: 11012 
     */
    private $form;

    /**
     * @param string $form
     * 剂型(长度：20)
     * Example Value: 11012 
     */
    public function setForm($form)
    {
        $this->form             = $form;
        $this->apiParas["form"]  = $form;
    }

    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param string $type
     * 药品类型(长度：50)
     * Required: false
     * Example Value: 中药 
     */
    private $type;

    /**
     * @param string $type
     * 药品类型(长度：50)
     * Example Value: 中药 
     */
    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"]  = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $specification
     * 产品规格(长度：50)
     * Required: false
     * Example Value: ZH442 
     */
    private $specification;

    /**
     * @param string $specification
     * 产品规格(长度：50)
     * Example Value: ZH442 
     */
    public function setSpecification($specification)
    {
        $this->specification             = $specification;
        $this->apiParas["specification"]  = $specification;
    }

    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * @param string $genericName
     * 药品通用名(长度：100)
     * Required: false
     * Example Value: 999感冒灵 
     */
    private $genericName;

    /**
     * @param string $genericName
     * 药品通用名(长度：100)
     * Example Value: 999感冒灵 
     */
    public function setGenericName($genericName)
    {
        $this->genericName             = $genericName;
        $this->apiParas["genericName"]  = $genericName;
    }

    public function getGenericName()
    {
        return $this->genericName;
    }

    /**
     * @param string $dosage
     * 使用剂量(长度：50)
     * Required: false
     * Example Value: 一日三次 
     */
    private $dosage;

    /**
     * @param string $dosage
     * 使用剂量(长度：50)
     * Example Value: 一日三次 
     */
    public function setDosage($dosage)
    {
        $this->dosage             = $dosage;
        $this->apiParas["dosage"]  = $dosage;
    }

    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * @param string $useMethods
     * 使用方法(长度：50)
     * Required: false
     * Example Value: 冲剂 
     */
    private $useMethods;

    /**
     * @param string $useMethods
     * 使用方法(长度：50)
     * Example Value: 冲剂 
     */
    public function setUseMethods($useMethods)
    {
        $this->useMethods             = $useMethods;
        $this->apiParas["useMethods"]  = $useMethods;
    }

    public function getUseMethods()
    {
        return $this->useMethods;
    }

    /**
     * @param string $packingUnit
     * 包装量(长度：50)
     * Required: false
     * Example Value: 23 
     */
    private $packingUnit;

    /**
     * @param string $packingUnit
     * 包装量(长度：50)
     * Example Value: 23 
     */
    public function setPackingUnit($packingUnit)
    {
        $this->packingUnit             = $packingUnit;
        $this->apiParas["packingUnit"]  = $packingUnit;
    }

    public function getPackingUnit()
    {
        return $this->packingUnit;
    }

    /**
     * @param string $efficacy
     * 试用症（功能主治）(长度：50)
     * Required: false
     * Example Value: 感冒,咳嗽
     */
    private $efficacy;

    /**
     * @param string $efficacy
     * 试用症（功能主治）(长度：50)
     * Example Value: 感冒,咳嗽
     */
    public function setEfficacy($efficacy)
    {
        $this->efficacy             = $efficacy;
        $this->apiParas["efficacy"]  = $efficacy;
    }

    public function getEfficacy()
    {
        return $this->efficacy;
    }

    /**
     * @param string $manufactory
     * 生产企业(与主数据中生产厂家二者至少一个不能为空，如此字段空缺取生产厂家字段)(长度：50)
     * Required: false
     * Example Value: 北京海燕药业有限公司 
     */
    private $manufactory;

    /**
     * @param string $manufactory
     * 生产企业(与主数据中生产厂家二者至少一个不能为空，如此字段空缺取生产厂家字段)(长度：50)
     * Example Value: 北京海燕药业有限公司 
     */
    public function setManufactory($manufactory)
    {
        $this->manufactory             = $manufactory;
        $this->apiParas["manufactory"]  = $manufactory;
    }

    public function getManufactory()
    {
        return $this->manufactory;
    }

    /**
     * @param int $price
     * 价格  (长度:15,2)
     * Required: false
     * Example Value: 23 
     */
    private $price;

    /**
     * @param int $price
     * 价格  (长度:15,2)
     * Example Value: 23 
     */
    public function setPrice($price)
    {
        $this->price             = $price;
        $this->apiParas["price"]  = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param  $storeSaleFlag
     * 是否可门店销售：是（2）、否（1） (长度:4)
     * Required: false
     * Example Value: 1
     */
    private $storeSaleFlag;

    /**
     * @param  $storeSaleFlag
     * 是否可门店销售：是（2）、否（1） (长度:4)
     * Example Value: 1
     */
    public function setStoreSaleFlag($storeSaleFlag)
    {
        $this->storeSaleFlag             = $storeSaleFlag;
        $this->apiParas["storeSaleFlag"]  = $storeSaleFlag;
    }

    public function getStoreSaleFlag()
    {
        return $this->storeSaleFlag;
    }

    /**
     * @param string $keyMaintenance
     * 重点养护 (长度:1)
     * Required: false
     * Example Value: 8 
     */
    private $keyMaintenance;

    /**
     * @param string $keyMaintenance
     * 重点养护 (长度:1)
     * Example Value: 8 
     */
    public function setKeyMaintenance($keyMaintenance)
    {
        $this->keyMaintenance             = $keyMaintenance;
        $this->apiParas["keyMaintenance"]  = $keyMaintenance;
    }

    public function getKeyMaintenance()
    {
        return $this->keyMaintenance;
    }

    /**
     * @param string $specialDrugs
     * 特殊药品    (长度:1)
     * Required: false
     * Example Value: 9 
     */
    private $specialDrugs;

    /**
     * @param string $specialDrugs
     * 特殊药品    (长度:1)
     * Example Value: 9 
     */
    public function setSpecialDrugs($specialDrugs)
    {
        $this->specialDrugs             = $specialDrugs;
        $this->apiParas["specialDrugs"]  = $specialDrugs;
    }

    public function getSpecialDrugs()
    {
        return $this->specialDrugs;
    }

    /**
     * @param  $boxRule
     * 箱规管理   (长度:4)
     * Required: false
     * Example Value: 2 
     */
    private $boxRule;

    /**
     * @param  $boxRule
     * 箱规管理   (长度:4)
     * Example Value: 2 
     */
    public function setBoxRule($boxRule)
    {
        $this->boxRule             = $boxRule;
        $this->apiParas["boxRule"]  = $boxRule;
    }

    public function getBoxRule()
    {
        return $this->boxRule;
    }

    /**
     * @param int $warningDay
     * 预警天数      (长度:11)
     * Required: false
     * Example Value: 12 
     */
    private $warningDay;

    /**
     * @param int $warningDay
     * 预警天数      (长度:11)
     * Example Value: 12 
     */
    public function setWarningDay($warningDay)
    {
        $this->warningDay             = $warningDay;
        $this->apiParas["warningDay"]  = $warningDay;
    }

    public function getWarningDay()
    {
        return $this->warningDay;
    }

    /**
     * @param int $regularAdventDay
     * 常规临期预警天数  (长度:11)
     * Required: false
     * Example Value: 5 
     */
    private $regularAdventDay;

    /**
     * @param int $regularAdventDay
     * 常规临期预警天数  (长度:11)
     * Example Value: 5 
     */
    public function setRegularAdventDay($regularAdventDay)
    {
        $this->regularAdventDay             = $regularAdventDay;
        $this->apiParas["regularAdventDay"]  = $regularAdventDay;
    }

    public function getRegularAdventDay()
    {
        return $this->regularAdventDay;
    }

    /**
     * @param int $urgentAdventDay
     * 紧急临期预警天数 (长度:11)
     * Required: false
     * Example Value: 2
     */
    private $urgentAdventDay;

    /**
     * @param int $urgentAdventDay
     * 紧急临期预警天数 (长度:11)
     * Example Value: 2
     */
    public function setUrgentAdventDay($urgentAdventDay)
    {
        $this->urgentAdventDay             = $urgentAdventDay;
        $this->apiParas["urgentAdventDay"]  = $urgentAdventDay;
    }

    public function getUrgentAdventDay()
    {
        return $this->urgentAdventDay;
    }

    /**
     * @param int $adventDay
     * 临期天数  (长度:11)
     * Required: false
     * Example Value: 6
     */
    private $adventDay;

    /**
     * @param int $adventDay
     * 临期天数  (长度:11)
     * Example Value: 6
     */
    public function setAdventDay($adventDay)
    {
        $this->adventDay             = $adventDay;
        $this->apiParas["adventDay"]  = $adventDay;
    }

    public function getAdventDay()
    {
        return $this->adventDay;
    }

    /**
     * @param string $easyPollute
     * 易污染（1：是，2：否）   (长度:1)
     * Required: false
     * Example Value: 1
     */
    private $easyPollute;

    /**
     * @param string $easyPollute
     * 易污染（1：是，2：否）   (长度:1)
     * Example Value: 1
     */
    public function setEasyPollute($easyPollute)
    {
        $this->easyPollute             = $easyPollute;
        $this->apiParas["easyPollute"]  = $easyPollute;
    }

    public function getEasyPollute()
    {
        return $this->easyPollute;
    }

    /**
     * @param string $muslim
     * 清真（1：是，2：否）  (长度:1)
     * Required: false
     * Example Value: 1
     */
    private $muslim;

    /**
     * @param string $muslim
     * 清真（1：是，2：否）  (长度:1)
     * Example Value: 1
     */
    public function setMuslim($muslim)
    {
        $this->muslim             = $muslim;
        $this->apiParas["muslim"]  = $muslim;
    }

    public function getMuslim()
    {
        return $this->muslim;
    }

    /**
     * @param int $boxRegulations
     * 装箱量 (长度:50)
     * Required: false
     * Example Value: 24 
     */
    private $boxRegulations;

    /**
     * @param int $boxRegulations
     * 装箱量 (长度:50)
     * Example Value: 24 
     */
    public function setBoxRegulations($boxRegulations)
    {
        $this->boxRegulations             = $boxRegulations;
        $this->apiParas["boxRegulations"]  = $boxRegulations;
    }

    public function getBoxRegulations()
    {
        return $this->boxRegulations;
    }

    /**
     * @param int $allowedDay
     * 允许入库天数   (长度:11)
     * Required: false
     * Example Value: 11 
     */
    private $allowedDay;

    /**
     * @param int $allowedDay
     * 允许入库天数   (长度:11)
     * Example Value: 11 
     */
    public function setAllowedDay($allowedDay)
    {
        $this->allowedDay             = $allowedDay;
        $this->apiParas["allowedDay"]  = $allowedDay;
    }

    public function getAllowedDay()
    {
        return $this->allowedDay;
    }

    /**
     * @param string $sellerFirstCategory
     * 商家商品一级分类    (长度:50)
     * Required: false
     * Example Value: 药品一级分类 
     */
    private $sellerFirstCategory;

    /**
     * @param string $sellerFirstCategory
     * 商家商品一级分类    (长度:50)
     * Example Value: 药品一级分类 
     */
    public function setSellerFirstCategory($sellerFirstCategory)
    {
        $this->sellerFirstCategory             = $sellerFirstCategory;
        $this->apiParas["sellerFirstCategory"]  = $sellerFirstCategory;
    }

    public function getSellerFirstCategory()
    {
        return $this->sellerFirstCategory;
    }

    /**
     * @param string $sellerSecondCategory
     * 商家商品二级分类     (长度:50)
     * Required: false
     * Example Value: 药品二级分类 
     */
    private $sellerSecondCategory;

    /**
     * @param string $sellerSecondCategory
     * 商家商品二级分类     (长度:50)
     * Example Value: 药品二级分类 
     */
    public function setSellerSecondCategory($sellerSecondCategory)
    {
        $this->sellerSecondCategory             = $sellerSecondCategory;
        $this->apiParas["sellerSecondCategory"]  = $sellerSecondCategory;
    }

    public function getSellerSecondCategory()
    {
        return $this->sellerSecondCategory;
    }

    /**
     * @param string $sellerThirdCategory
     * 商家商品三级分类          (长度:50)
     * Required: false
     * Example Value: 药品三级分类
     */
    private $sellerThirdCategory;

    /**
     * @param string $sellerThirdCategory
     * 商家商品三级分类          (长度:50)
     * Example Value: 药品三级分类
     */
    public function setSellerThirdCategory($sellerThirdCategory)
    {
        $this->sellerThirdCategory             = $sellerThirdCategory;
        $this->apiParas["sellerThirdCategory"]  = $sellerThirdCategory;
    }

    public function getSellerThirdCategory()
    {
        return $this->sellerThirdCategory;
    }

    /**
     * @param string $sellerFirstCategoryNo
     * 商家商品一级分类编码    (长度:20)
     * Required: false
     * Example Value: A001 
     */
    private $sellerFirstCategoryNo;

    /**
     * @param string $sellerFirstCategoryNo
     * 商家商品一级分类编码    (长度:20)
     * Example Value: A001 
     */
    public function setSellerFirstCategoryNo($sellerFirstCategoryNo)
    {
        $this->sellerFirstCategoryNo             = $sellerFirstCategoryNo;
        $this->apiParas["sellerFirstCategoryNo"]  = $sellerFirstCategoryNo;
    }

    public function getSellerFirstCategoryNo()
    {
        return $this->sellerFirstCategoryNo;
    }

    /**
     * @param string $sellerSecondCategoryNo
     * 商家商品二级分类编码(长度:20)
     * Required: false
     * Example Value: C009 
     */
    private $sellerSecondCategoryNo;

    /**
     * @param string $sellerSecondCategoryNo
     * 商家商品二级分类编码(长度:20)
     * Example Value: C009 
     */
    public function setSellerSecondCategoryNo($sellerSecondCategoryNo)
    {
        $this->sellerSecondCategoryNo             = $sellerSecondCategoryNo;
        $this->apiParas["sellerSecondCategoryNo"]  = $sellerSecondCategoryNo;
    }

    public function getSellerSecondCategoryNo()
    {
        return $this->sellerSecondCategoryNo;
    }

    /**
     * @param string $sellerThirdCategoryNo
     * 商家商品三级分类编码(长度:20)
     * Required: false
     * Example Value: D043 
     */
    private $sellerThirdCategoryNo;

    /**
     * @param string $sellerThirdCategoryNo
     * 商家商品三级分类编码(长度:20)
     * Example Value: D043 
     */
    public function setSellerThirdCategoryNo($sellerThirdCategoryNo)
    {
        $this->sellerThirdCategoryNo             = $sellerThirdCategoryNo;
        $this->apiParas["sellerThirdCategoryNo"]  = $sellerThirdCategoryNo;
    }

    public function getSellerThirdCategoryNo()
    {
        return $this->sellerThirdCategoryNo;
    }

    /**
     * @param  $athletesUseCaution
     * 运动员慎用,1 否 2是 (长度:4)
     * Required: false
     * Example Value: 1 
     */
    private $athletesUseCaution;

    /**
     * @param  $athletesUseCaution
     * 运动员慎用,1 否 2是 (长度:4)
     * Example Value: 1 
     */
    public function setAthletesUseCaution($athletesUseCaution)
    {
        $this->athletesUseCaution             = $athletesUseCaution;
        $this->apiParas["athletesUseCaution"]  = $athletesUseCaution;
    }

    public function getAthletesUseCaution()
    {
        return $this->athletesUseCaution;
    }

    /**
     * @param  $elecSupervisionCodeFlag
     * 电子监管码管理,1 否 2是(长度:4)
     * Required: false
     * Example Value: 1 
     */
    private $elecSupervisionCodeFlag;

    /**
     * @param  $elecSupervisionCodeFlag
     * 电子监管码管理,1 否 2是(长度:4)
     * Example Value: 1 
     */
    public function setElecSupervisionCodeFlag($elecSupervisionCodeFlag)
    {
        $this->elecSupervisionCodeFlag             = $elecSupervisionCodeFlag;
        $this->apiParas["elecSupervisionCodeFlag"]  = $elecSupervisionCodeFlag;
    }

    public function getElecSupervisionCodeFlag()
    {
        return $this->elecSupervisionCodeFlag;
    }

    /**
     * @param string $hgsbys
     * 海关申报要素(长度:510)
     * Required: false
     * Example Value: 费用超过5000 
     */
    private $hgsbys;

    /**
     * @param string $hgsbys
     * 海关申报要素(长度:510)
     * Example Value: 费用超过5000 
     */
    public function setHgsbys($hgsbys)
    {
        $this->hgsbys             = $hgsbys;
        $this->apiParas["hgsbys"]  = $hgsbys;
    }

    public function getHgsbys()
    {
        return $this->hgsbys;
    }

    /**
     * @param string $goodsUnit
     * 计量单位(长度:1)
     * Required: false
     * Example Value: 2
     */
    private $goodsUnit;

    /**
     * @param string $goodsUnit
     * 计量单位(长度:1)
     * Example Value: 2
     */
    public function setGoodsUnit($goodsUnit)
    {
        $this->goodsUnit             = $goodsUnit;
        $this->apiParas["goodsUnit"]  = $goodsUnit;
    }

    public function getGoodsUnit()
    {
        return $this->goodsUnit;
    }

    /**
     * @param  $uniqueCode
     * 是否唯一码管理（1：否，2：是）(长度：4)
     * Required: false
     * Example Value: 1
     */
    private $uniqueCode;

    /**
     * @param  $uniqueCode
     * 是否唯一码管理（1：否，2：是）(长度：4)
     * Example Value: 1
     */
    public function setUniqueCode($uniqueCode)
    {
        $this->uniqueCode             = $uniqueCode;
        $this->apiParas["uniqueCode"]  = $uniqueCode;
    }

    public function getUniqueCode()
    {
        return $this->uniqueCode;
    }

    /**
     * @param string $productLine
     * 产品线
     * Required: false
     * Example Value: 
     */
    private $productLine;

    /**
     * @param string $productLine
     * 产品线
     * Example Value: 
     */
    public function setProductLine($productLine)
    {
        $this->productLine             = $productLine;
        $this->apiParas["productLine"]  = $productLine;
    }

    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * @param string $isStandardInstrument
     * 是否标准器械,1 否 2是
     * Required: false
     * Example Value: 
     */
    private $isStandardInstrument;

    /**
     * @param string $isStandardInstrument
     * 是否标准器械,1 否 2是
     * Example Value: 
     */
    public function setIsStandardInstrument($isStandardInstrument)
    {
        $this->isStandardInstrument             = $isStandardInstrument;
        $this->apiParas["isStandardInstrument"]  = $isStandardInstrument;
    }

    public function getIsStandardInstrument()
    {
        return $this->isStandardInstrument;
    }

    /**
     * @param string $isColdChain
     * 是否冷链,1 否 2是
     * Required: false
     * Example Value: 
     */
    private $isColdChain;

    /**
     * @param string $isColdChain
     * 是否冷链,1 否 2是
     * Example Value: 
     */
    public function setIsColdChain($isColdChain)
    {
        $this->isColdChain             = $isColdChain;
        $this->apiParas["isColdChain"]  = $isColdChain;
    }

    public function getIsColdChain()
    {
        return $this->isColdChain;
    }

    /**
     * @param string $isDetachablePackage
     * 是否可拆包,1 否 2是
     * Required: false
     * Example Value: 
     */
    private $isDetachablePackage;

    /**
     * @param string $isDetachablePackage
     * 是否可拆包,1 否 2是
     * Example Value: 
     */
    public function setIsDetachablePackage($isDetachablePackage)
    {
        $this->isDetachablePackage             = $isDetachablePackage;
        $this->apiParas["isDetachablePackage"]  = $isDetachablePackage;
    }

    public function getIsDetachablePackage()
    {
        return $this->isDetachablePackage;
    }

    /**
     * @param string $certificateNo
     * 注册证号或备案凭证号
     * Required: false
     * Example Value: 
     */
    private $certificateNo;

    /**
     * @param string $certificateNo
     * 注册证号或备案凭证号
     * Example Value: 
     */
    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo             = $certificateNo;
        $this->apiParas["certificateNo"]  = $certificateNo;
    }

    public function getCertificateNo()
    {
        return $this->certificateNo;
    }

    /**
     * @param string $businessTypeName
     * 业务类型名称(耗材时必填),取值范围:[5层瓦楞,京尊达,特殊,农资,保税,生鲜]
     * Required: false
     * Example Value: 5层瓦楞
     */
    private $businessTypeName;

    /**
     * @param string $businessTypeName
     * 业务类型名称(耗材时必填),取值范围:[5层瓦楞,京尊达,特殊,农资,保税,生鲜]
     * Example Value: 5层瓦楞
     */
    public function setBusinessTypeName($businessTypeName)
    {
        $this->businessTypeName             = $businessTypeName;
        $this->apiParas["businessTypeName"]  = $businessTypeName;
    }

    public function getBusinessTypeName()
    {
        return $this->businessTypeName;
    }

    /**
     * @param string $ownerTypeName
     * 货主类型名称,(耗材时必填)取值范围:[中性,中信中性,内蒙古伊利实业,戴森,微众,酷趣,无印良品,云集,京东]
     * Required: false
     * Example Value: 中性
     */
    private $ownerTypeName;

    /**
     * @param string $ownerTypeName
     * 货主类型名称,(耗材时必填)取值范围:[中性,中信中性,内蒙古伊利实业,戴森,微众,酷趣,无印良品,云集,京东]
     * Example Value: 中性
     */
    public function setOwnerTypeName($ownerTypeName)
    {
        $this->ownerTypeName             = $ownerTypeName;
        $this->apiParas["ownerTypeName"]  = $ownerTypeName;
    }

    public function getOwnerTypeName()
    {
        return $this->ownerTypeName;
    }

    /**
     * @param string $packageTypeName
     * 包装类型名称,(耗材时必填)取值范围:[缠绕膜,全球购纸箱,自营纸箱,平台气泡袋,自营气泡袋,平台防水袋,自营防水袋,气柱袋,气泡袋,标签,循环布袋,透明袋,快递封套,气泡袋,保温箱,纸箱]
     * Required: false
     * Example Value: 缠绕膜
     */
    private $packageTypeName;

    /**
     * @param string $packageTypeName
     * 包装类型名称,(耗材时必填)取值范围:[缠绕膜,全球购纸箱,自营纸箱,平台气泡袋,自营气泡袋,平台防水袋,自营防水袋,气柱袋,气泡袋,标签,循环布袋,透明袋,快递封套,气泡袋,保温箱,纸箱]
     * Example Value: 缠绕膜
     */
    public function setPackageTypeName($packageTypeName)
    {
        $this->packageTypeName             = $packageTypeName;
        $this->apiParas["packageTypeName"]  = $packageTypeName;
    }

    public function getPackageTypeName()
    {
        return $this->packageTypeName;
    }

    /**
     * @param string $materialTypeName
     * 耗材类型名称(耗材时必填),取值范围:[内包装,袋,缠绕膜,外包装,胶带,箱]
     * Required: false
     * Example Value: 袋
     */
    private $materialTypeName;

    /**
     * @param string $materialTypeName
     * 耗材类型名称(耗材时必填),取值范围:[内包装,袋,缠绕膜,外包装,胶带,箱]
     * Example Value: 袋
     */
    public function setMaterialTypeName($materialTypeName)
    {
        $this->materialTypeName             = $materialTypeName;
        $this->apiParas["materialTypeName"]  = $materialTypeName;
    }

    public function getMaterialTypeName()
    {
        return $this->materialTypeName;
    }

    /**
     * @param string $model
     * 耗材型号(耗材时必填)
     * Required: false
     * Example Value: 型号
     */
    private $model;

    /**
     * @param string $model
     * 耗材型号(耗材时必填)
     * Example Value: 型号
     */
    public function setModel($model)
    {
        $this->model             = $model;
        $this->apiParas["model"]  = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param  $clothingAttr
     * 服装属性
     * Required: false
     * Example Value: 
     */
    private $clothingAttr;

    /**
     * @param  $clothingAttr
     * 服装属性
     * Example Value: 
     */
    public function setClothingAttr($clothingAttr)
    {
        $this->clothingAttr             = $clothingAttr;
        $this->apiParas["clothingAttr"]  = $clothingAttr;
    }

    public function getClothingAttr()
    {
        return $this->clothingAttr;
    }

    /**
     * @param  $clothingStyle
     * 服装风格
     * Required: false
     * Example Value: 
     */
    private $clothingStyle;

    /**
     * @param  $clothingStyle
     * 服装风格
     * Example Value: 
     */
    public function setClothingStyle($clothingStyle)
    {
        $this->clothingStyle             = $clothingStyle;
        $this->apiParas["clothingStyle"]  = $clothingStyle;
    }

    public function getClothingStyle()
    {
        return $this->clothingStyle;
    }

    /**
     * @param  $clothingVersionType
     * 服装商品层
     * Required: false
     * Example Value: 
     */
    private $clothingVersionType;

    /**
     * @param  $clothingVersionType
     * 服装商品层
     * Example Value: 
     */
    public function setClothingVersionType($clothingVersionType)
    {
        $this->clothingVersionType             = $clothingVersionType;
        $this->apiParas["clothingVersionType"]  = $clothingVersionType;
    }

    public function getClothingVersionType()
    {
        return $this->clothingVersionType;
    }

    /**
     * @param  $clothingSilhouette
     *  服装廓形
     * Required: false
     * Example Value: 
     */
    private $clothingSilhouette;

    /**
     * @param  $clothingSilhouette
     *  服装廓形
     * Example Value: 
     */
    public function setClothingSilhouette($clothingSilhouette)
    {
        $this->clothingSilhouette             = $clothingSilhouette;
        $this->apiParas["clothingSilhouette"]  = $clothingSilhouette;
    }

    public function getClothingSilhouette()
    {
        return $this->clothingSilhouette;
    }

    /**
     * @param  $clothingThickness
     * 服装厚薄度
     * Required: false
     * Example Value: 
     */
    private $clothingThickness;

    /**
     * @param  $clothingThickness
     * 服装厚薄度
     * Example Value: 
     */
    public function setClothingThickness($clothingThickness)
    {
        $this->clothingThickness             = $clothingThickness;
        $this->apiParas["clothingThickness"]  = $clothingThickness;
    }

    public function getClothingThickness()
    {
        return $this->clothingThickness;
    }

    /**
     * @param  $clothingWeek
     * 服装周次（1—52周，共五十二个枚举，整型数字）
     * Required: false
     * Example Value: 
     */
    private $clothingWeek;

    /**
     * @param  $clothingWeek
     * 服装周次（1—52周，共五十二个枚举，整型数字）
     * Example Value: 
     */
    public function setClothingWeek($clothingWeek)
    {
        $this->clothingWeek             = $clothingWeek;
        $this->apiParas["clothingWeek"]  = $clothingWeek;
    }

    public function getClothingWeek()
    {
        return $this->clothingWeek;
    }

    /**
     * @param string $bodyParts
     * 身体部位（部类）
     * Required: false
     * Example Value: 
     */
    private $bodyParts;

    /**
     * @param string $bodyParts
     * 身体部位（部类）
     * Example Value: 
     */
    public function setBodyParts($bodyParts)
    {
        $this->bodyParts             = $bodyParts;
        $this->apiParas["bodyParts"]  = $bodyParts;
    }

    public function getBodyParts()
    {
        return $this->bodyParts;
    }

    /**
     * @param string $styleSex
     * 款式性别（性别）
     * Required: false
     * Example Value: 
     */
    private $styleSex;

    /**
     * @param string $styleSex
     * 款式性别（性别）
     * Example Value: 
     */
    public function setStyleSex($styleSex)
    {
        $this->styleSex             = $styleSex;
        $this->apiParas["styleSex"]  = $styleSex;
    }

    public function getStyleSex()
    {
        return $this->styleSex;
    }

    /**
     * @param string $listedBand
     * 上市波段
     * Required: false
     * Example Value: 
     */
    private $listedBand;

    /**
     * @param string $listedBand
     * 上市波段
     * Example Value: 
     */
    public function setListedBand($listedBand)
    {
        $this->listedBand             = $listedBand;
        $this->apiParas["listedBand"]  = $listedBand;
    }

    public function getListedBand()
    {
        return $this->listedBand;
    }

    /**
     * @param string $expectListedTime
     * 预计上市时间
     * Required: false
     * Example Value: 
     */
    private $expectListedTime;

    /**
     * @param string $expectListedTime
     * 预计上市时间
     * Example Value: 
     */
    public function setExpectListedTime($expectListedTime)
    {
        $this->expectListedTime             = $expectListedTime;
        $this->apiParas["expectListedTime"]  = $expectListedTime;
    }

    public function getExpectListedTime()
    {
        return $this->expectListedTime;
    }

    /**
     * @param string $fabric
     * 面料成分
     * Required: false
     * Example Value: 
     */
    private $fabric;

    /**
     * @param string $fabric
     * 面料成分
     * Example Value: 
     */
    public function setFabric($fabric)
    {
        $this->fabric             = $fabric;
        $this->apiParas["fabric"]  = $fabric;
    }

    public function getFabric()
    {
        return $this->fabric;
    }

    /**
     * @param string $washing
     * 洗涤方法
     * Required: false
     * Example Value: 
     */
    private $washing;

    /**
     * @param string $washing
     * 洗涤方法
     * Example Value: 
     */
    public function setWashing($washing)
    {
        $this->washing             = $washing;
        $this->apiParas["washing"]  = $washing;
    }

    public function getWashing()
    {
        return $this->washing;
    }

    /**
     * @param string $year
     * 年份
     * Required: false
     * Example Value: 
     */
    private $year;

    /**
     * @param string $year
     * 年份
     * Example Value: 
     */
    public function setYear($year)
    {
        $this->year             = $year;
        $this->apiParas["year"]  = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $productSeason
     * 产品季
     * Required: false
     * Example Value: 
     */
    private $productSeason;

    /**
     * @param string $productSeason
     * 产品季
     * Example Value: 
     */
    public function setProductSeason($productSeason)
    {
        $this->productSeason             = $productSeason;
        $this->apiParas["productSeason"]  = $productSeason;
    }

    public function getProductSeason()
    {
        return $this->productSeason;
    }

    /**
     * @param string $afterSaleFlag
     * 门店是否支持售后
     * Required: false
     * Example Value: 
     */
    private $afterSaleFlag;

    /**
     * @param string $afterSaleFlag
     * 门店是否支持售后
     * Example Value: 
     */
    public function setAfterSaleFlag($afterSaleFlag)
    {
        $this->afterSaleFlag             = $afterSaleFlag;
        $this->apiParas["afterSaleFlag"]  = $afterSaleFlag;
    }

    public function getAfterSaleFlag()
    {
        return $this->afterSaleFlag;
    }

}