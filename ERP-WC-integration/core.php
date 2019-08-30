<?php

class CoreSetting {
    public $apiCode;
    public $loginInfo = [];
}

class PluginCore {
    private $wc_url = "";
    public function __construct() {

    }



    public function elogin() {

    }

    public function checkLogin() {
        $reLogin = false;
        if(!$this->isLogined) $reLogin = true;
        else if(!$this->checkExpire()) $reLogin = true;

        if($reLogin) $this->elogin();
    }

    private function isLogined() {
        return !empty($this->loginInfo);
    }

    private function checkExpire() {

    }

    private function api_send_post($url) {
        $this->checkLogin();
        $request_url = $this->wc_url . $url;
        $curl = curl_init($request_url);
        curl_setopt($curl, CURLOPT_POST, true);

        $response = curl_exec();
        curl_close();
        return json_decode($response);/
    }

    private function api_send_get() {

    }


}