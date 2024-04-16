<?php

// https://webservice.recruit.co.jp/doc/hotpepper/reference.html

return [
    'api_key' => env('HOTPEPPER_API_KEY'),

    'service_area_code_静岡' => 'SA32',

    'larage_area_code_静岡' => 'Z032',

    'middle_area_code_浜松' => 'Y800',
    'middle_area_code_静岡' => 'Y878',

    'small_area_code_浜松駅' => 'X800',
    'small_area_code_浜松市郊外その他' => 'X802',
    'small_area_code_浜松入野・志都呂周辺' => 'XH04',
    'small_area_code_磐田' => 'Y230',
    'small_area_code_浜北' => 'XH09',

    'genre_code_ramen' => 'G013',

    // address=浜松市で検索
    // count=100
    // results_availbleを100で割った商+1回廻す
    // start=1,101,201,401,501と↑の商の数だけやる
    // format=json
    // 確認はXMLの方が分かりやすい
    // かえってきたデータの中のganreのnameで「ラーメン」で絞る。
    // https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&address=浜松市&count=100&start=1
    // https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&address=浜松市&count=100&start=1&format=json
    'full_url' => 'https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&address=浜松市&count=100&start=301&format=json',
    'url' => 'https://webservice.recruit.co.jp/hotpepper/gourmet/v1/',
    'url_with_key' => '?key=1ecd08b5bbd507cd',
    'url_with_address' => '&address=浜松市&count=100',
    'url_with_count' => '&count=100',
    'url_with_start' => '&start=1',
    'url_with_format' => '&format=json',


    /**
     * --- 以下はお試しログ----------------------
     */
    'with_larage_area_shizuoka' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&large_area=Z032',
    'with_middle_area_hamamatsu' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&middle_area=Y800&count=100&start=1',
    'with_middle_area_hamamatsu' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&middle_area=Y800&count=100&start=2',

    'with_middle_area_hamamatsu' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&id=J001004939',
    'with_middle_area_hamamatsu' => 'http://webservice.recruit.co.jp/hotpepper/shop/v1/?key=1ecd08b5bbd507cd&keyword=めん虎&keyword=静岡県',

    //住所
    'with_add_hamamatsu' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&address=浜松市&count=100',

    // middle_areaで検索するとsmallが全て入ってくる。
    'with_middle_area_hamamatsu_ramen_code' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&middle_area=Y800&genre=G013&count=100',
    'with_la_hamamatsu_ramen_code' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&large_area=Z032&genre=G013&count=100',

    'with_small_area_hamamatsu_ramen_code' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&small_area=X802&genre=G013',
    'with_small_area_hamamatsu_ramen_code' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&small_area=X800&genre=G013',
    'with_small_area_hamamatsu_ramen_code' => 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1ecd08b5bbd507cd&small_area=XH04&genre=G013',
];

// 検索
// http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=[APIキー]&large_area=Z011
// https://webservice.recruit.co.jp/hotpepper/shop/v1/?key=sample&keyword=浜松,ラーメン

//サービスエリア
// https://webservice.recruit.co.jp/hotpepper/service_area/v1/?key=1ecd08b5bbd507cd

// 大エリアマスタ
// https://webservice.recruit.co.jp/hotpepper/large_area/v1/?key=1ecd08b5bbd507cd
// https://webservice.recruit.co.jp/hotpepper/large_area/v1/?key=1ecd08b5bbd507cd&large_area=Z032

// 中エリアマスタ
// https://webservice.recruit.co.jp/hotpepper/middle_area/v1/?key=1ecd08b5bbd507cd
// https://webservice.recruit.co.jp/hotpepper/middle_area/v1/?key=1ecd08b5bbd507cd&large_area=Z032
// https://webservice.recruit.co.jp/hotpepper/middle_area/v1/?key=1ecd08b5bbd507cd&middle_area=Y005
// https://webservice.recruit.co.jp/hotpepper/middle_area/v1/?key=1ecd08b5bbd507cd&middle_area=Y800

// 小エリアマスタ
// https://webservice.recruit.co.jp/hotpepper/small_area/v1/?key=1ecd08b5bbd507cd&middle_area=Y800
// https://webservice.recruit.co.jp/hotpepper/small_area/v1/?key=1ecd08b5bbd507cd&keyword=浜北
// https://webservice.recruit.co.jp/hotpepper/small_area/v1/?key=1ecd08b5bbd507cd&keyword=磐田
// https://webservice.recruit.co.jp/hotpepper/small_area/v1/?key=1ecd08b5bbd507cd&keyword=浜松

// ジャンルマスタ
// https://webservice.recruit.co.jp/hotpepper/genre/v1/?key=1ecd08b5bbd507cd&keyword=ラーメン
