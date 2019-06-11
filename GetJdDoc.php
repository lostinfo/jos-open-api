<?php

require_once __DIR__ . '/vendor/autoload.php';

class GetJdDoc
{

    protected $client;

    protected $jar;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();

        $cookie_str = 'shshshfpa=428dcfa9-28d5-61f0-7ae4-cba240985831-1544410640; shshshfpb=qvmkp%2FIJN0ZzyGoIDzxSF7g%3D%3D; 3AB9D23F7A4B3C9B=C6L3LMZUREAOD7E5KOY42FJIG6GOZLHGAGACVHEBZPF5LUS2AN5IGAPKWWELPFWGGLPSLDTMHCYC4XWG7X27VSWLFY; pinId=X290ftxtpCipHUUr_tLQpPb6EAwAHi6fG0Epgk5pndQ; _tp=1HTVFKQm66A13853gVSeMwh9haC9OFD%2FlB%2BeGxe8toeIxgBFkgKjbGXuZNaIJdp8Z6s%2B4tMP2ctkOqJwDjXozTTUKxzcmPdx5ySsIJMtAHcG7TrSSJaYbCe1ias%2FXDT%2F; _pst=%E8%A5%BF%E8%97%8F%E6%81%A9%E5%A8%81%E5%8C%BB%E8%8D%AF%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8; track=2a78eeb7-6786-217f-dcf0-2a95452978dc; __jdv=122270672|direct|-|none|-|1558939111324; shshshfp=ee3059a4650f73e04e361cd0bde41c71; areaId=22; ipLoc-djd=22-1930-49324-0; user-key=676ddc46-e4b3-470a-9139-401d1189c7ac; cn=975; pin=%E8%A5%BF%E8%97%8F%E6%81%A9%E5%A8%81%E5%8C%BB%E8%8D%AF%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8; unick=%E8%A5%BF%E8%97%8F%E6%81%A9%E5%A8%81%E5%8C%BB%E8%8D%AF%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8; TrackID=1NCvS8jyy8OdaCZDH95UrBmwYXAMPEEDnP56Iw7cJrYc-jEGMUjWBfQCPZ_OLSnUL4wWBt3n26QpRoq_jX_vErBLg0sScDlmCmmFwCOwIHI4gJFmEosHUBjSk_raLsDSw; ceshi3.com=000; language=zh_CN; _base_=YKH2KDFHMOZBLCUV7NSRBWQUJPBI7JIMU5R3EFJ5UDHJ5LCU7R2NILKK5UJ6GLA2RGYT464UKXAI5KK7PNC5B5UHJ3AGFI6LZAJ26QUCV4V6EGL66O3SR2QQP64ICVV6K3PHZJ7AYQ3RRONWMECVTOHHFQMTY2PCJ33DOE4YFFM4AZN7P3G2VDJOVZOORH4KVYBLD3QDMVW4H4FILV63M4BURY63MVL2O2ZTOI7N46P5DRE4IFVUB5WT3SO7RBXFOBKE4WC2ZDJPBPXVYCUONXV2IKYE2YYQFY4FDMHFGVODGEN26GY4JM33KVLKS73SUJSO5SMZBRRUVFPXEFZY7UYK4OS5RILALCWTQWS6UWTNILULLHKXM7HQGHLELQFOZOGKKMXYT2V43QBMD2KGCE4UZCRGDRXF6FUNU6IZ7FHKG6PZBY7EY5BEHZGT4QW3KNIMEOZQ6RJGBFQENLQWUSWHIM; VC_INTEGRATION_JSESSIONID=21394f9d-3f1d-452f-80a8-6a8374c329f2; __jdu=1820003065; wlfstk_smdl=co5ia7nrakv44d8toon0a1la97udcbyp; __jdc=178324346; __jda=178324346.1820003065.1544144953.1560215357.1560219440.19; __jdb=178324346.1.1820003065|19.1560219440';

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
//$getJdDoc->getApiGroupList();
//$getJdDoc->getApiList();
$getJdDoc->getApiInfo();