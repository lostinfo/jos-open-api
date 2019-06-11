<?php

namespace Lostinfo\JosOpenApi\request;

/**
 * 委托代征会员信息的协议信息接口
 * 商事创新API-B端企业与自然人之间的劳务采买涉及发票开具、发票核销以及企业向自然人发佣等服务
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=472&apiId=3630&apiName=jingdong.ysdk.MemberApplyJsfService.memberApplyProtocalInfo
 * Class YsdkMemberApplyJsfServiceMemberApplyProtocalInfo
 * @package Jd\request
 */
class YsdkMemberApplyJsfServiceMemberApplyProtocalInfo
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ysdk.MemberApplyJsfService.memberApplyProtocalInfo";
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
     * @param string $certNo
     * 身份证编号
     * Required: true
     * Example Value: 140221199012122324
     */
    private $certNo;

    /**
     * @param string $certNo
     * 身份证编号
     * Example Value: 140221199012122324
     */
    public function setCertNo($certNo)
    {
        $this->certNo             = $certNo;
        $this->apiParas["certNo"]  = $certNo;
    }

    public function getCertNo()
    {
        return $this->certNo;
    }

    /**
     * @param string $certType
     * 身份证类型
     * Required: true
     * Example Value: 201
     */
    private $certType;

    /**
     * @param string $certType
     * 身份证类型
     * Example Value: 201
     */
    public function setCertType($certType)
    {
        $this->certType             = $certType;
        $this->apiParas["certType"]  = $certType;
    }

    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * @param string $fileName
     * 文件名
     * Required: true
     * Example Value: 身份证正面
     */
    private $fileName;

    /**
     * @param string $fileName
     * 文件名
     * Example Value: 身份证正面
     */
    public function setFileName($fileName)
    {
        $this->fileName             = $fileName;
        $this->apiParas["fileName"]  = $fileName;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileInfo
     * 文件信息
     * Required: true
     * Example Value: https://img14.360buyimg.com/n0/jfs/t25519/90/761689188/694412/a788e670/5b7bd4bbN6f5e9cdb.jpg
     */
    private $fileInfo;

    /**
     * @param string $fileInfo
     * 文件信息
     * Example Value: https://img14.360buyimg.com/n0/jfs/t25519/90/761689188/694412/a788e670/5b7bd4bbN6f5e9cdb.jpg
     */
    public function setFileInfo($fileInfo)
    {
        $this->fileInfo             = $fileInfo;
        $this->apiParas["fileInfo"]  = $fileInfo;
    }

    public function getFileInfo()
    {
        return $this->fileInfo;
    }

    /**
     * @param string $platformCode
     * 平台编号
     * Required: true
     * Example Value: SHIGE
     */
    private $platformCode;

    /**
     * @param string $platformCode
     * 平台编号
     * Example Value: SHIGE
     */
    public function setPlatformCode($platformCode)
    {
        $this->platformCode             = $platformCode;
        $this->apiParas["platformCode"]  = $platformCode;
    }

    public function getPlatformCode()
    {
        return $this->platformCode;
    }

    /**
     * @param int $fileType
     * 文件类型
     * Required: true
     * Example Value: 0
     */
    private $fileType;

    /**
     * @param int $fileType
     * 文件类型
     * Example Value: 0
     */
    public function setFileType($fileType)
    {
        $this->fileType             = $fileType;
        $this->apiParas["fileType"]  = $fileType;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param int $fileFormat
     * 文件格式
     * Required: true
     * Example Value: 0
     */
    private $fileFormat;

    /**
     * @param int $fileFormat
     * 文件格式
     * Example Value: 0
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat             = $fileFormat;
        $this->apiParas["fileFormat"]  = $fileFormat;
    }

    public function getFileFormat()
    {
        return $this->fileFormat;
    }

}