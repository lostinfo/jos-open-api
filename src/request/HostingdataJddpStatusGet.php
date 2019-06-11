<?php

namespca Lostinfo\JosOpenApi;

/**
 * 任务状态查询
 * 云海API-云海数据开放平台支持API  data.jd.com
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=70&apiId=310&apiName=jingdong.hostingdata.jddp.status.get
 * Class HostingdataJddpStatusGet
 * @package Jd\request
 */
class HostingdataJddpStatusGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.hostingdata.jddp.status.get";
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
     * @param string $parameter
     * 形式为param1=value1,param2=value2,...的字符串， 参数名称只能包含字母数字和下划线. 必填参数: query_type:用于描述查询类型，目前只有1，表示查询任务的运行状态 其他参数： action_id:当query_type为1的时候必填，用于表示需要查询的任务的id，date:当query_type为1的时候必填，用于表示任务运行的日期,格式必须是yyyyMMdd
     * Required: true
     * Example Value: query_type=1,action_id=11,date=20140522
     */
    private $parameter;

    /**
     * @param string $parameter
     * 形式为param1=value1,param2=value2,...的字符串， 参数名称只能包含字母数字和下划线. 必填参数: query_type:用于描述查询类型，目前只有1，表示查询任务的运行状态 其他参数： action_id:当query_type为1的时候必填，用于表示需要查询的任务的id，date:当query_type为1的时候必填，用于表示任务运行的日期,格式必须是yyyyMMdd
     * Example Value: query_type=1,action_id=11,date=20140522
     */
    public function setParameter($parameter)
    {
        $this->parameter             = $parameter;
        $this->apiParas["parameter"]  = $parameter;
    }

    public function getParameter()
    {
        return $this->parameter;
    }

}