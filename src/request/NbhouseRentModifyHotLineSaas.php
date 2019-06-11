<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新400热线电话
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2842&apiName=jingdong.nbhouse.rent.modifyHotLineSaas
 * Class NbhouseRentModifyHotLineSaas
 * @package Jd\request
 */
class NbhouseRentModifyHotLineSaas
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.modifyHotLineSaas";
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
     * @param int $id
     * 主键ID，创建时出参包含此参数
     * Required: true
     * Example Value: 
     */
    private $id;

    /**
     * @param int $id
     * 主键ID，创建时出参包含此参数
     * Example Value: 
     */
    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"]  = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $phoneName
     * 专线名称，最大长度为10，汉字、英文字母、数字或其组合(不填不更新)
     * Required: false
     * Example Value: 
     */
    private $phoneName;

    /**
     * @param string $phoneName
     * 专线名称，最大长度为10，汉字、英文字母、数字或其组合(不填不更新)
     * Example Value: 
     */
    public function setPhoneName($phoneName)
    {
        $this->phoneName             = $phoneName;
        $this->apiParas["phoneName"]  = $phoneName;
    }

    public function getPhoneName()
    {
        return $this->phoneName;
    }

    /**
     * @param int $workHourStart
     * 开始工作时间，24小时制，[0,9]区间的整数(不填不更新)
     * Required: false
     * Example Value: 
     */
    private $workHourStart;

    /**
     * @param int $workHourStart
     * 开始工作时间，24小时制，[0,9]区间的整数(不填不更新)
     * Example Value: 
     */
    public function setWorkHourStart($workHourStart)
    {
        $this->workHourStart             = $workHourStart;
        $this->apiParas["workHourStart"]  = $workHourStart;
    }

    public function getWorkHourStart()
    {
        return $this->workHourStart;
    }

    /**
     * @param int $workHourEnd
     * 结束工作时间，24小时制，[17,24]区间的整数(不填不更新)
     * Required: false
     * Example Value: 
     */
    private $workHourEnd;

    /**
     * @param int $workHourEnd
     * 结束工作时间，24小时制，[17,24]区间的整数(不填不更新)
     * Example Value: 
     */
    public function setWorkHourEnd($workHourEnd)
    {
        $this->workHourEnd             = $workHourEnd;
        $this->apiParas["workHourEnd"]  = $workHourEnd;
    }

    public function getWorkHourEnd()
    {
        return $this->workHourEnd;
    }

    /**
     * @param string[] $phoneLanding
     * 落地号号码，规则：1.如果落地号类型为手机或固话，至少绑定1个号码，最多绑定6个号码；2.如果落地号类型为400或800，落地号总数量只能是1；3.如果落地号类型为手机，绑定的号码只能是手机号；4.如果落地号类型为固话或400或800，绑定的号码不能是手机号；5.号码为纯数字，不支持其他字符。
     * Required: true
     * Example Value: 
     */
    private $phoneLanding;

    /**
     * @param string[] $phoneLanding
     * 落地号号码，规则：1.如果落地号类型为手机或固话，至少绑定1个号码，最多绑定6个号码；2.如果落地号类型为400或800，落地号总数量只能是1；3.如果落地号类型为手机，绑定的号码只能是手机号；4.如果落地号类型为固话或400或800，绑定的号码不能是手机号；5.号码为纯数字，不支持其他字符。
     * Example Value: 
     */
    public function setPhoneLanding($phoneLanding)
    {
        $this->phoneLanding             = $phoneLanding;
        $this->apiParas["phoneLanding"]  = $phoneLanding;
    }

    public function getPhoneLanding()
    {
        return $this->phoneLanding;
    }

    /**
     * @param int[] $type
     * 落地号类型，1代表手机，2代表固话，4代表400，5代表800
     * Required: true
     * Example Value: 
     */
    private $type;

    /**
     * @param int[] $type
     * 落地号类型，1代表手机，2代表固话，4代表400，5代表800
     * Example Value: 
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

}