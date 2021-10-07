<?php

$music = new music();
echo $music->hot();

class music{
    public function hot(){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.uomg.com/api/rand.music');
        curl_setopt($curl, CURLOPT_REFERER, "https://api.uomg.com/");
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, [
            //'mid' => 6982029128,
            'sort' => '热歌榜',
            'format' => 'json'
        ]);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
}