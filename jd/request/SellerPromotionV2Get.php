<?php

namespace JD\request;

/**
 * 查询促销详情
 * 促销API-提供商品的促销信息更新及查询API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=54&apiId=1844&apiName=jingdong.seller.promotion.v2.get
 * Class SellerPromotionV2Get
 * @package Jd\request
 */
class SellerPromotionV2Get
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.v2.get";
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
     * @param String $ip
     * 调用方IP
     * Required: true
     * Example Value: 127.0.0.1
     */
    private $ip;

    /**
     * @param String $ip
     * 调用方IP
     * Example Value: 127.0.0.1
     */
    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"]  = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param String $port
     * 调用方端口
     * Required: true
     * Example Value: 80
     */
    private $port;

    /**
     * @param String $port
     * 调用方端口
     * Example Value: 80
     */
    public function setPort($port)
    {
        $this->port             = $port;
        $this->apiParas["port"]  = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param Number $promoId
     * 促销ID
     * Required: true
     * Example Value: 654321
     */
    private $promoId;

    /**
     * @param Number $promoId
     * 促销ID
     * Example Value: 654321
     */
    public function setPromoId($promoId)
    {
        $this->promoId             = $promoId;
        $this->apiParas["promo_id"]  = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

    /**
     * @param Number $promoType
     * 促销类型。1：单品促销 4：赠品促销 6 套装促销 10：总价促销
     * Required: true
     * Example Value: 1
     */
    private $promoType;

    /**
     * @param Number $promoType
     * 促销类型。1：单品促销 4：赠品促销 6 套装促销 10：总价促销
     * Example Value: 1
     */
    public function setPromoType($promoType)
    {
        $this->promoType             = $promoType;
        $this->apiParas["promo_type"]  = $promoType;
    }

    public function getPromoType()
    {
        return $this->promoType;
    }

}