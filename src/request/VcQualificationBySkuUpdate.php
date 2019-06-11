<?php

namespca Lostinfo\JosOpenApi;

/**
 * 更新商品资质
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1658&apiName=jingdong.vc.qualification.by.sku.update
 * Class VcQualificationBySkuUpdate
 * @package Jd\request
 */
class VcQualificationBySkuUpdate
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.qualification.by.sku.update";
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
     * @param string $wareId
     * 商品编号
     * Required: true
     * Example Value: 562389
     */
    private $wareId;

    /**
     * @param string $wareId
     * 商品编号
     * Example Value: 562389
     */
    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["ware_id"]  = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @param int[] $type
     * 资质类型
     * Required: true
     * Example Value: 2
     */
    private $type;

    /**
     * @param int[] $type
     * 资质类型
     * Example Value: 2
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
     * @param string[] $applicant
     * 3c证书委托人
     * Required: false
     * Example Value: 京东商城
     */
    private $applicant;

    /**
     * @param string[] $applicant
     * 3c证书委托人
     * Example Value: 京东商城
     */
    public function setApplicant($applicant)
    {
        $this->applicant             = $applicant;
        $this->apiParas["applicant"]  = $applicant;
    }

    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * @param string[] $qcCode
     * 3c证书编号
     * Required: false
     * Example Value: 123223445
     */
    private $qcCode;

    /**
     * @param string[] $qcCode
     * 3c证书编号
     * Example Value: 123223445
     */
    public function setQcCode($qcCode)
    {
        $this->qcCode             = $qcCode;
        $this->apiParas["qc_code"]  = $qcCode;
    }

    public function getQcCode()
    {
        return $this->qcCode;
    }

    /**
     * @param string[] $endDate
     * 资质到期日期
     * Required: true
     * Example Value: 2016-08-09
     */
    private $endDate;

    /**
     * @param string[] $endDate
     * 资质到期日期
     * Example Value: 2016-08-09
     */
    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["end_date"]  = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string[] $fileKeyList
     * 资质文件key列表，多个key中间用英文分号[;]进行分隔
     * Required: true
     * Example Value: 52c81484-7941-4017-a40b-d116d3b117a4.txt;52c81484-7941-4017-a40b-d116d3b117a4.txt
     */
    private $fileKeyList;

    /**
     * @param string[] $fileKeyList
     * 资质文件key列表，多个key中间用英文分号[;]进行分隔
     * Example Value: 52c81484-7941-4017-a40b-d116d3b117a4.txt;52c81484-7941-4017-a40b-d116d3b117a4.txt
     */
    public function setFileKeyList($fileKeyList)
    {
        $this->fileKeyList             = $fileKeyList;
        $this->apiParas["file_key_list"]  = $fileKeyList;
    }

    public function getFileKeyList()
    {
        return $this->fileKeyList;
    }

}