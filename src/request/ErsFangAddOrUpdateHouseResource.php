<?php

namespca Lostinfo\JosOpenApi;

/**
 * 新增或修改房源信息
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2758&apiName=jingdong.ers.fang.addOrUpdateHouseResource
 * Class ErsFangAddOrUpdateHouseResource
 * @package Jd\request
 */
class ErsFangAddOrUpdateHouseResource
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.addOrUpdateHouseResource";
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
     * @param int $channelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $channelId;

    /**
     * @param int $channelId
     * 来源渠道id
     * Example Value: 
     */
    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"]  = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param int $plotId
     * 小区id
     * Required: true
     * Example Value: 
     */
    private $plotId;

    /**
     * @param int $plotId
     * 小区id
     * Example Value: 
     */
    public function setPlotId($plotId)
    {
        $this->plotId             = $plotId;
        $this->apiParas["plotId"]  = $plotId;
    }

    public function getPlotId()
    {
        return $this->plotId;
    }

    /**
     * @param string $number
     * 房源编号
     * Required: false
     * Example Value: 
     */
    private $number;

    /**
     * @param string $number
     * 房源编号
     * Example Value: 
     */
    public function setNumber($number)
    {
        $this->number             = $number;
        $this->apiParas["number"]  = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $title
     * 房源标题
     * Required: true
     * Example Value: 
     */
    private $title;

    /**
     * @param string $title
     * 房源标题
     * Example Value: 
     */
    public function setTitle($title)
    {
        $this->title             = $title;
        $this->apiParas["title"]  = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $labels
     * 房源标签（近地铁 1，满五年 2，精装修 3，满两年 4，新上 5，降价 6，随时看房 7，其他 10）多个以逗号分隔
     * Required: false
     * Example Value: 
     */
    private $labels;

    /**
     * @param string $labels
     * 房源标签（近地铁 1，满五年 2，精装修 3，满两年 4，新上 5，降价 6，随时看房 7，其他 10）多个以逗号分隔
     * Example Value: 
     */
    public function setLabels($labels)
    {
        $this->labels             = $labels;
        $this->apiParas["labels"]  = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param  $estateType
     * 物业类型（住宅：1，别墅：2，商业：3，商铺：4，写字楼：5，其他：10）
     * Required: true
     * Example Value: 
     */
    private $estateType;

    /**
     * @param  $estateType
     * 物业类型（住宅：1，别墅：2，商业：3，商铺：4，写字楼：5，其他：10）
     * Example Value: 
     */
    public function setEstateType($estateType)
    {
        $this->estateType             = $estateType;
        $this->apiParas["estateType"]  = $estateType;
    }

    public function getEstateType()
    {
        return $this->estateType;
    }

    /**
     * @param  $room
     * 室
     * Required: true
     * Example Value: 
     */
    private $room;

    /**
     * @param  $room
     * 室
     * Example Value: 
     */
    public function setRoom($room)
    {
        $this->room             = $room;
        $this->apiParas["room"]  = $room;
    }

    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param  $hall
     * 厅
     * Required: true
     * Example Value: 
     */
    private $hall;

    /**
     * @param  $hall
     * 厅
     * Example Value: 
     */
    public function setHall($hall)
    {
        $this->hall             = $hall;
        $this->apiParas["hall"]  = $hall;
    }

    public function getHall()
    {
        return $this->hall;
    }

    /**
     * @param  $toilet
     * 卫
     * Required: false
     * Example Value: 
     */
    private $toilet;

    /**
     * @param  $toilet
     * 卫
     * Example Value: 
     */
    public function setToilet($toilet)
    {
        $this->toilet             = $toilet;
        $this->apiParas["toilet"]  = $toilet;
    }

    public function getToilet()
    {
        return $this->toilet;
    }

    /**
     * @param  $kitchen
     * 厨房
     * Required: false
     * Example Value: 
     */
    private $kitchen;

    /**
     * @param  $kitchen
     * 厨房
     * Example Value: 
     */
    public function setKitchen($kitchen)
    {
        $this->kitchen             = $kitchen;
        $this->apiParas["kitchen"]  = $kitchen;
    }

    public function getKitchen()
    {
        return $this->kitchen;
    }

    /**
     * @param int $downPayment
     * 首付（万元/套）
     * Required: false
     * Example Value: 
     */
    private $downPayment;

    /**
     * @param int $downPayment
     * 首付（万元/套）
     * Example Value: 
     */
    public function setDownPayment($downPayment)
    {
        $this->downPayment             = $downPayment;
        $this->apiParas["downPayment"]  = $downPayment;
    }

    public function getDownPayment()
    {
        return $this->downPayment;
    }

    /**
     * @param int $structureArea
     * 建筑面积（m²）
     * Required: true
     * Example Value: 
     */
    private $structureArea;

    /**
     * @param int $structureArea
     * 建筑面积（m²）
     * Example Value: 
     */
    public function setStructureArea($structureArea)
    {
        $this->structureArea             = $structureArea;
        $this->apiParas["structureArea"]  = $structureArea;
    }

    public function getStructureArea()
    {
        return $this->structureArea;
    }

    /**
     * @param int $usableArea
     * 使用面积（m²）
     * Required: false
     * Example Value: 
     */
    private $usableArea;

    /**
     * @param int $usableArea
     * 使用面积（m²）
     * Example Value: 
     */
    public function setUsableArea($usableArea)
    {
        $this->usableArea             = $usableArea;
        $this->apiParas["usableArea"]  = $usableArea;
    }

    public function getUsableArea()
    {
        return $this->usableArea;
    }

    /**
     * @param  $orientation
     * 朝向(东  1，南 2，西 3，北 4，南北 5，东西 6，东南 7，西南 8，西北 9，东北 10,东西南 11，东西北 12，东南北 13，西南北 14，东西南北 15，其他 20)
     * Required: true
     * Example Value: 
     */
    private $orientation;

    /**
     * @param  $orientation
     * 朝向(东  1，南 2，西 3，北 4，南北 5，东西 6，东南 7，西南 8，西北 9，东北 10,东西南 11，东西北 12，东南北 13，西南北 14，东西南北 15，其他 20)
     * Example Value: 
     */
    public function setOrientation($orientation)
    {
        $this->orientation             = $orientation;
        $this->apiParas["orientation"]  = $orientation;
    }

    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param  $fitmentType
     * 装修（毛坯:1，精装：2，简装：3，其他 10）
     * Required: true
     * Example Value: 
     */
    private $fitmentType;

    /**
     * @param  $fitmentType
     * 装修（毛坯:1，精装：2，简装：3，其他 10）
     * Example Value: 
     */
    public function setFitmentType($fitmentType)
    {
        $this->fitmentType             = $fitmentType;
        $this->apiParas["fitmentType"]  = $fitmentType;
    }

    public function getFitmentType()
    {
        return $this->fitmentType;
    }

    /**
     * @param string $buildYear
     * 建筑年代
     * Required: false
     * Example Value: 
     */
    private $buildYear;

    /**
     * @param string $buildYear
     * 建筑年代
     * Example Value: 
     */
    public function setBuildYear($buildYear)
    {
        $this->buildYear             = $buildYear;
        $this->apiParas["buildYear"]  = $buildYear;
    }

    public function getBuildYear()
    {
        return $this->buildYear;
    }

    /**
     * @param  $totalFloor
     * 总楼层
     * Required: false
     * Example Value: 
     */
    private $totalFloor;

    /**
     * @param  $totalFloor
     * 总楼层
     * Example Value: 
     */
    public function setTotalFloor($totalFloor)
    {
        $this->totalFloor             = $totalFloor;
        $this->apiParas["totalFloor"]  = $totalFloor;
    }

    public function getTotalFloor()
    {
        return $this->totalFloor;
    }

    /**
     * @param  $locationFloor
     * 所在楼层
     * Required: false
     * Example Value: 
     */
    private $locationFloor;

    /**
     * @param  $locationFloor
     * 所在楼层
     * Example Value: 
     */
    public function setLocationFloor($locationFloor)
    {
        $this->locationFloor             = $locationFloor;
        $this->apiParas["locationFloor"]  = $locationFloor;
    }

    public function getLocationFloor()
    {
        return $this->locationFloor;
    }

    /**
     * @param  $floorLabel
     * 楼层标签（地下：1，底层（1）：2，低楼层（2-4）：3，中楼层（5-9）：4，高楼层（10＋）：5，顶层：6 ）
     * Required: true
     * Example Value: 
     */
    private $floorLabel;

    /**
     * @param  $floorLabel
     * 楼层标签（地下：1，底层（1）：2，低楼层（2-4）：3，中楼层（5-9）：4，高楼层（10＋）：5，顶层：6 ）
     * Example Value: 
     */
    public function setFloorLabel($floorLabel)
    {
        $this->floorLabel             = $floorLabel;
        $this->apiParas["floorLabel"]  = $floorLabel;
    }

    public function getFloorLabel()
    {
        return $this->floorLabel;
    }

    /**
     * @param string $recordNumber
     * 房管备案号
     * Required: false
     * Example Value: 
     */
    private $recordNumber;

    /**
     * @param string $recordNumber
     * 房管备案号
     * Example Value: 
     */
    public function setRecordNumber($recordNumber)
    {
        $this->recordNumber             = $recordNumber;
        $this->apiParas["recordNumber"]  = $recordNumber;
    }

    public function getRecordNumber()
    {
        return $this->recordNumber;
    }

    /**
     * @param string $housePutawayTime
     * 上架时间
     * Required: true
     * Example Value: 
     */
    private $housePutawayTime;

    /**
     * @param string $housePutawayTime
     * 上架时间
     * Example Value: 
     */
    public function setHousePutawayTime($housePutawayTime)
    {
        $this->housePutawayTime             = $housePutawayTime;
        $this->apiParas["housePutawayTime"]  = $housePutawayTime;
    }

    public function getHousePutawayTime()
    {
        return $this->housePutawayTime;
    }

    /**
     * @param string $houseUpdateTime
     * 更新时间
     * Required: true
     * Example Value: 
     */
    private $houseUpdateTime;

    /**
     * @param string $houseUpdateTime
     * 更新时间
     * Example Value: 
     */
    public function setHouseUpdateTime($houseUpdateTime)
    {
        $this->houseUpdateTime             = $houseUpdateTime;
        $this->apiParas["houseUpdateTime"]  = $houseUpdateTime;
    }

    public function getHouseUpdateTime()
    {
        return $this->houseUpdateTime;
    }

    /**
     * @param  $houseStatus
     * 房源状态（下架：0，已上架：1）
     * Required: true
     * Example Value: 
     */
    private $houseStatus;

    /**
     * @param  $houseStatus
     * 房源状态（下架：0，已上架：1）
     * Example Value: 
     */
    public function setHouseStatus($houseStatus)
    {
        $this->houseStatus             = $houseStatus;
        $this->apiParas["houseStatus"]  = $houseStatus;
    }

    public function getHouseStatus()
    {
        return $this->houseStatus;
    }

    /**
     * @param  $houseTerm
     * 房本年限（两年以下：1，2-5年（满两年）：2，五年以上（满五唯一）：3 ）
     * Required: false
     * Example Value: 
     */
    private $houseTerm;

    /**
     * @param  $houseTerm
     * 房本年限（两年以下：1，2-5年（满两年）：2，五年以上（满五唯一）：3 ）
     * Example Value: 
     */
    public function setHouseTerm($houseTerm)
    {
        $this->houseTerm             = $houseTerm;
        $this->apiParas["houseTerm"]  = $houseTerm;
    }

    public function getHouseTerm()
    {
        return $this->houseTerm;
    }

    /**
     * @param int $propertyYear
     * 产权年限
     * Required: false
     * Example Value: 
     */
    private $propertyYear;

    /**
     * @param int $propertyYear
     * 产权年限
     * Example Value: 
     */
    public function setPropertyYear($propertyYear)
    {
        $this->propertyYear             = $propertyYear;
        $this->apiParas["propertyYear"]  = $propertyYear;
    }

    public function getPropertyYear()
    {
        return $this->propertyYear;
    }

    /**
     * @param  $tradeAffiliation
     * 产权类型（商品房：1，经济适用房：2，央产房：3，军产房：4，公房：5，小产权房：6，房改房：7，集体房：8，其他：10）
     * Required: false
     * Example Value: 
     */
    private $tradeAffiliation;

    /**
     * @param  $tradeAffiliation
     * 产权类型（商品房：1，经济适用房：2，央产房：3，军产房：4，公房：5，小产权房：6，房改房：7，集体房：8，其他：10）
     * Example Value: 
     */
    public function setTradeAffiliation($tradeAffiliation)
    {
        $this->tradeAffiliation             = $tradeAffiliation;
        $this->apiParas["tradeAffiliation"]  = $tradeAffiliation;
    }

    public function getTradeAffiliation()
    {
        return $this->tradeAffiliation;
    }

    /**
     * @param int $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param int $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param int $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param int $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

}