<?php

class GetJdDoc
{

    protected $client;

    protected $jar;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();

        $cookie_str = 'you_cookies_str';

        $cookie_array = explode('; ', $cookie_str);

        $cookies = [];

        foreach ($cookie_array as $kv) {
            $cookie              = explode('=', $kv);
            $cookies[$cookie[0]] = $cookie[1];
        }

        $this->jar = \GuzzleHttp\Cookie\CookieJar::fromArray($cookies, 'open.jd.com');
    }

    /**
     * 获取目录
     * url http://open.jd.com/api/index
     * query
     */
    public function getApiGroupList()
    {
        $response = $this->client->get('http://open.jd.com/api/index', [
            'cookies' => $this->jar,
            'headers' => [

            ],
            'query' => [],
        ]);
        $data = $response->getBody()->getContents();
        $data_array = json_decode($data, true);
        $cmsApiGroups = $data_array['cmsApiGroups'];
        file_put_contents(__DIR__.'/cmsApiGroups', json_encode($cmsApiGroups));
    }

    /**
     * 获取apiGroup的api列表
     * url http://open.jd.com/api/list
     * query id
     * api_response/group_id/api_id/api_content
     */
    public function getApiList()
    {
        $cmsApiGroups = file_get_contents(__DIR__ . '/cmsApiGroups');
        $cmsApiGroups = json_decode($cmsApiGroups);

        foreach ($cmsApiGroups as $cmsApiGroup) {
            $id       = $cmsApiGroup->id;
            $dir = __DIR__.'/api_response/'.$id;
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
            $response = $this->client->get('http://open.jd.com/api/list', [
                'cookies' => $this->jar,
                'headers' => [],
                'query'   => [
                    'id' => $id
                ],
            ]);
            $data = $response->getBody()->getContents();
            $data_array = json_decode($data, true);
            $cmsApis = $data_array['cmsApis'];
            file_put_contents($dir.'/cmsApis', json_encode($cmsApis));
        }
    }

    /**
     * 获取API详情
     * url http://open.jd.com/api/detail
     * query id
     */
    public function getApiInfo()
    {
        $cmsApiGroups = file_get_contents(__DIR__ . '/cmsApiGroups');
        $cmsApiGroups = json_decode($cmsApiGroups);

        foreach ($cmsApiGroups as $cmsApiGroup) {
            $groupId       = $cmsApiGroup->id;
            $groupName       = $cmsApiGroup->groupName;
            $cmsApisFile = __DIR__."/api_response/{$groupId}/cmsApis";
            $cmsApis = file_get_contents($cmsApisFile);
            $cmsApis = json_decode($cmsApis, true);

            foreach ($cmsApis as $cmsApi) {
                $id = $cmsApi['id'];
                $apiName = $cmsApi['apiName'];
                $dir = __DIR__."/api_response/{$groupId}";
                $response = $this->client->get('http://open.jd.com/api/detail', [
                    'cookies' => $this->jar,
                    'headers' => [],
                    'query'   => [
                        'id' => $id,
                        'apiName' => $apiName
                    ],
                ]);
                $data = $response->getBody()->getContents();
                $data_array = json_decode($data, true);
                $paras = $data_array;
                file_put_contents($dir."/{$id}", json_encode($paras));
            }
        }
    }
}

$getJdDoc = new GetJdDoc();
$getJdDoc->getApiGroupList();
$getJdDoc->getApiList();
$getJdDoc->getApiInfo();