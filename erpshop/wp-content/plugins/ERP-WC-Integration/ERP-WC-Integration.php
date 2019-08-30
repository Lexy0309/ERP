<?php
/*
  Plugin Name: ERP-WC-Integration 
  Plugin URI: 
  Description: Integrates WooCommerce with the API of ERP.
  Author: Anna
  Author URI: 
  Version: 1.0.0
  Text Domain: Integration
  Domain Path: /languages/
  Requires WooCommerce: 2.2

  
 */

if (!defined('ABSPATH')) {
    exit;
} 

class ERP_WC_Integration {
    public $apiCode;
    public $loginInfo = [];
    $_SESSION['isLogin'] = false;


    private $wc_url = "";
    public function __construct() {

    }



    public function elogin() {
        $_SESSION['createdTime'] = time();
        $request_url = $this->wc_url . $url;
        $data = array(
            "apicode"=> "KXE6ABEDXGVA3UG",
            "applicationname"=> "Hercules.MyPylonCommercial",
            "databasealias"=> "PylonPrototype",
            "username" => "test",
            "password" => "test"

        );
        $response = wp_remote_post($request_url,
            array(
                'body' => $data,
                'timeout' =>20
            ));
        
        $_SESSION['loginInfo'] = json_decode($response['result']);

    }

    public function checkLogin() {
        $reLogin = false;
        if(!$_SESSION['isLogin']) $reLogin = true;
        else if(!$this->checkExpire()) $reLogin = true;

        if($reLogin) $this->elogin();
        return ($_SESSION['loginInfo']['cookie']);
    }

    private function isLogined() {
        return !empty($_SESSION['loginInfo']);
    }

    private function checkExpire() {
        $currentTime = time();
        $difTime1 = $_SESSION['createdTime']->diff($currentTime);
        
        $exirationTime = $_SESSION['loginInfo']['expired'];
        $createdTime = $_SESSION['loginInfo']['created'];
        $difTime2 = $createdTime->diff($exirationTime);
        if ($difTime1 >= $difTime2) return false;
        else return true;
    }

    private function api_postdata($url) {
        $this->checkLogin();
        $data =     {     
            "CstmTIN" : "999999111",
            "SeriesCode" : "ΠΑΡ", 
            "CsbrName" : "Branch1", 
            "PmmtName" : "ΜΕΤΡΗΤΑ", 
            "Lines" : [
                  {    
                      "CenlItemCode" : "ΕΙΔΗ-00000002",
                      "CenlPrice" :15.4,
                      "CenlAMeasurementQty" : 21.0,           
                      "CenlItemName": "Petres"
                  }  
        $data = json_encode($data);
        $data = array(
            "cookie" => $coockie;
            "apicode"=> "KXE6ABEDXGVA3UG",
            "entitycode"=> $sriptCode,
            "data" => $data
        );
        $response = wp_remote_post($request_url,
            array(
                'body' => $data,
                'timeout' =>20
            ));
        return json_decode($response);
    }

    private function api_getdata($sriptCode) {
        $coockie = $this->checkLogin();
        $request_url = $this->wc_url . $url;
        $data = array(
            "cookie" => $coockie;
            "apicode"=> "KXE6ABEDXGVA3UG",
            "entitycode"=> $sriptCode,
            "packagenumber":1,
            "packagesize":50

        );
        $response = wp_remote_post($request_url,
            array(
                'body' => $data,
                'timeout' =>20
            ));
        return json_decode($response);
    }
    public function api_AttributesSetup(){
        return $this->api_getdata("AttributesSetup");
    }
    public function api_AttrbyItmIDs(){
        return $this->api_getdata("AttrbyItmIDs");
    }
    public function api_ItemAttributes(){
        return $this->api_getdata("ItemAttributes");
    }
    public function api_ItemPhotos(){
        return $this->api_getdata("ItemPhotos");
    }
    public function api_Items(){
        return $this->api_getdata("Items");
    }

    public function api_ItemsAll(){
        return $this->api_getdata("ItemsAll");
    }
    public function api_ItemsDetailed(){
        return $this->api_getdata("ItemsDetailed");
    }
    public function api_PhotosByItmIDs(){
        return $this->api_getdata("PhotosByItmIDs");
    }
    public function api_SalesOrders(){
        return $this->api_postdata("SalesOrders");
    }
    public function api_SendItems(){
        return $this->api_postdata("SendItems");
    }

}