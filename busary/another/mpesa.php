<?php
/**
 * Created by PhpStorm.
 * User: DANIEL
 * Date: 8 Nov 2021
 * Time: 18:14
 */

namespace CodingSniper\MpesaC2B;

class MpesaC2B
{
    const BASE_URL = "https://api.safaricom.co.ke/";
    const SANDBOX_URL = "https://sandbox.safaricom.co.ke/";
    const HTTP_OK = 200;
    const CONFIGS = ".." . DIRECTORY_SEPARATOR . "credentials.json";

    protected $_baseUrl = self::BASE_URL;
    protected $_sandboxUrl = self::SANDBOX_URL;
    protected $_configUrl = self::CONFIGS;
    protected $_configs = array();

    protected $_endpointToken = "oauth/v1/generate?grant_type=client_credentials";
    protected  $_endpointStk = "mpesa/stkpush/v1/processrequest";
    protected $_endpointChecktrans = "mpesa/stkpushquery/v1/query";

    public function __construct()
    {
        $this->_getConfigs();
        session_start();

    }

    protected function _getConfigs()
    {
        // read configs from the configs file.
        $this->_configs = json_decode(file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . $this->_configUrl),true);
    }

    private function getToken()
    {
        if (isset($_SESSION['token']) && !empty($_SESSION['token']) && isset($_SESSION['expiry']) && (time() < $_SESSION['expiry'])) {
            return $_SESSION['token'];
        }

        $ch = curl_init($this->getUrl($this->_endpointToken));
        $bearer = $this->base64Encode($this->_configs['customer_key'].':'.$this->_configs['customer_secret']);

        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Basic $bearer"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $authToken = "";
        if($httpcode == self::HTTP_OK){
            $reArr = json_decode($response,true);
            $authToken = $reArr['access_token'];
            $_SESSION['expiry'] = time() + $reArr['expires_in'];
            $_SESSION['token'] = $authToken;
        }
        return $authToken;
    }

    private function getUrl($endpoint)
    {
        return $this->_configs['environment'] == "live" ? $this->_baseUrl.$endpoint : $this->_sandboxUrl.$endpoint;
    }
    private function base64Encode($string){
        return base64_encode($string);
    }
    function format_phone($phone){
        if(substr($phone,0,1) == "0"){
            $phone = $this->_configs['country_code'].substr($phone,1);
        }elseif(substr($phone,0,1) == "+"){
            $phone = substr($phone,1);
        }
        return $phone;
    }
    private function http_request($data,$url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer ".$this->getToken(),
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $resArr = json_decode($response,true);
        return array("httpcode" => $httpcode, "response" => $resArr);
    }
    public function stkPush($data)
    {
        $phone = $this->format_phone($data['phone']);
        $amount = $data['amount'];
        $timestamp = date('YmdHis');
        $pass = $this->base64Encode($this->_configs["shortcode"].$this->_configs["pass_key"].$timestamp);
        $accref = $data["account_reference"];
        $transdescr = $data["trans_description"];

        $postdata = array("BusinessShortCode" =>$this->_configs["shortcode"],
            "Password" =>$pass,"Timestamp" =>$timestamp,
            "TransactionType" =>"CustomerBuyGoodsOnline",
            "Amount" =>$amount,"PartyA" =>$phone,
            "PartyB" =>$this->_configs["partyb"],"PhoneNumber" =>$phone,
            "CallBackURL" =>$this->_configs["callback"],"AccountReference" =>$accref,
            "TransactionDesc" =>$transdescr);

        $url = $this->getUrl($this->_endpointStk);
        $response = $this->http_request($postdata,$url);

        return $response;
    }
    public function checkTrans($check_id)
    {
        $timestamp = date('YmdHis');
        $pass = $this->base64Encode($this->_configs["shortcode"].$this->_configs["pass_key"].$timestamp);
        $postdata = array("BusinessShortCode" => $this->_configs["shortcode"],
            "Password"=>$pass,
            "Timestamp"=> $timestamp,
            "CheckoutRequestID"=> $check_id);

        $url = $this->getUrl($this->_endpointChecktrans);
        $response = $this->http_request($postdata,$url);

        return $response;
    }
}