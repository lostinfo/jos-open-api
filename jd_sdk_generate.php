<?php

$cmsApiGroups = file_get_contents(__DIR__ . '/cmsApiGroups');
$cmsApiGroups = json_decode($cmsApiGroups, true);
foreach ($cmsApiGroups as $cmsApiGroup) {
    $groupId   = $cmsApiGroup['id'];
    $groupName = $cmsApiGroup['groupName'] ?? '';
    $groupDesc = $cmsApiGroup['description'] ?? '';

    $cmsApis = file_get_contents(__DIR__ . "/api_response/{$groupId}/cmsApis");
    $cmsApis = json_decode($cmsApis, true);
    foreach ($cmsApis as $cmsApi) {
        $apiId = $cmsApi['id'];
//        jingdong.category.read.findValuesByAttrIdUnlimit
        $apiName = $cmsApi['apiName'];
        $apiDesc = $cmsApi['apiDesc'] ?? '';

        $detail = file_get_contents(__DIR__ . "/api_response/{$groupId}/{$apiId}");

        $detail    = json_decode($detail, true);
        $apiAsName = html_entity_decode($detail['method']['znName'] ?? '');

        $className = substr($apiName, 9);
        $className = ucwords(str_replace('.', ' ', $className));
        $className = str_replace(' ', '', $className);

        $paras_php = '';

        $reqParams = new ReqParams();

        $detail['josCmsApi']['apiMulti'] == 1 ?
            formatReqParamsToOne($detail['method']['elements'], 0, 0, $reqParams)
            :
            formatReqParams($detail['method']['elements'], 0, 0, $reqParams);

        foreach ($reqParams->get() as $arg) {
            $paramName        = $arg['paramName'];
            $paramNameUcfirst = ucfirst($paramName);
            $webPamer         = $arg['webPamer'];
            $type             = $arg['type'];
            $desc             = $arg['desc'];
            $example_value    = $arg['value'];
            $required         = $arg['required'] ? 'true' : 'false';
            $paras_php        .= <<<eof

    /**
     * @param {$type} \${$paramName}
     * {$desc}
     * Required: {$required}
     * Example Value: {$example_value}
     */
    private \${$paramName};

    /**
     * @param {$type} \${$paramName}
     * {$desc}
     * Example Value: {$example_value}
     */
    public function set{$paramNameUcfirst}(\${$paramName})
    {
        \$this->{$paramName}             = \${$paramName};
        \$this->apiParas["{$webPamer}"]  = \${$paramName};
    }

    public function get{$paramNameUcfirst}()
    {
        return \$this->{$paramName};
    }

eof;
        }


        $stub = <<<eof
<?php

namespace JD\\request;

/**
 * {$apiAsName}
 * {$groupName}-{$groupDesc}
 * url: http://open.jd.com/home/home#/doc/api?apiCateId={$groupId}&apiId={$apiId}&apiName={$apiName}
 * Class {$className}
 * @package Jd\\request
 */
class {$className}
{
    private \$apiParas = array();

    public function getApiMethodName()
    {
        return "{$apiName}";
    }

    public function getApiParas()
    {
        return json_encode(\$this->apiParas, JSON_FORCE_OBJECT);
    }

    public function check()
    {

    }

    public function putOtherTextParam(\$key, \$value)
    {
        \$this->apiParas[\$key] = \$value;
        \$this->\$key           = \$value;
    }
$paras_php
}
eof;
        file_put_contents(__DIR__ . "/jd/request/{$className}.php", $stub);
    }
}

function formatReqParamsToOne($elements, $level, $parent, ReqParams $reqParams)
{
    foreach ($elements as $element) {
        if (!$element['defaultValue'] && !$element['SystemValue'] && !strstr($element['webPamer'], '$')) {
            if (count($element['elements']) == 0) {
                $default = [
                    'level'    => $level,
                    'parent'   => $parent,
                    'isOpen'   => false,
                    'elements' => [],
                ];
                $reqParams->push(array_merge($element, $default));
            } else {
                formatReqParamsToOne($element['elements'], 0, 0, $reqParams);
            }
        }
    }
}

function formatReqParams($elements, $level, $parent, ReqParams $reqParams)
{
    foreach ($elements as $element) {
        if (!$element['defaultValue'] && !$element['SystemValue'] && !strstr($element['webPamer'], '$')) {
            $default = [
                'level'    => $level,
                'parent'   => $parent,
                'isOpen'   => false,
                'elements' => [],
            ];
            $i       = array_merge($element, $default);
            $reqParams->push($i);
            formatReqParams($element['elements'], $level + 1, 0, $reqParams);
        }
    }
}

class ReqParams
{
    private $params = [];

    public function push($value)
    {
        array_push($this->params, $value);
    }

    public function get()
    {
        return $this->params;
    }
}
