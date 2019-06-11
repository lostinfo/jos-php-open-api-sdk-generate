<?php

namespace JD\request;

/**
 * 获取费用和时效信息
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=3641&apiName=jingdong.eclp.delivery.api.promiseInfoApi.queryFreightsAndPredictTime
 * Class EclpDeliveryApiPromiseInfoApiQueryFreightsAndPredictTime
 * @package Jd\request
 */
class EclpDeliveryApiPromiseInfoApiQueryFreightsAndPredictTime
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.delivery.api.promiseInfoApi.queryFreightsAndPredictTime";
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
     * @param String $senderProvinceName
     * 寄件人、始发地省/直辖市名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $senderProvinceName;

    /**
     * @param String $senderProvinceName
     * 寄件人、始发地省/直辖市名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setSenderProvinceName($senderProvinceName)
    {
        $this->senderProvinceName             = $senderProvinceName;
        $this->apiParas["senderProvinceName"]  = $senderProvinceName;
    }

    public function getSenderProvinceName()
    {
        return $this->senderProvinceName;
    }

    /**
     * @param String $senderCityName
     * 寄件人、始发地市名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $senderCityName;

    /**
     * @param String $senderCityName
     * 寄件人、始发地市名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setSenderCityName($senderCityName)
    {
        $this->senderCityName             = $senderCityName;
        $this->apiParas["senderCityName"]  = $senderCityName;
    }

    public function getSenderCityName()
    {
        return $this->senderCityName;
    }

    /**
     * @param String $senderCountryName
     * 寄件人、始发地区/县名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $senderCountryName;

    /**
     * @param String $senderCountryName
     * 寄件人、始发地区/县名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setSenderCountryName($senderCountryName)
    {
        $this->senderCountryName             = $senderCountryName;
        $this->apiParas["senderCountryName"]  = $senderCountryName;
    }

    public function getSenderCountryName()
    {
        return $this->senderCountryName;
    }

    /**
     * @param String $senderCountrysideName
     * 寄件人、始发地县镇/街道名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $senderCountrysideName;

    /**
     * @param String $senderCountrysideName
     * 寄件人、始发地县镇/街道名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setSenderCountrysideName($senderCountrysideName)
    {
        $this->senderCountrysideName             = $senderCountrysideName;
        $this->apiParas["senderCountrysideName"]  = $senderCountrysideName;
    }

    public function getSenderCountrysideName()
    {
        return $this->senderCountrysideName;
    }

    /**
     * @param String $senderAddress
     * 寄件人、始发地详细地址或完整地址(长度不超过200个字符)
     * Required: true
     * Example Value: 
     */
    private $senderAddress;

    /**
     * @param String $senderAddress
     * 寄件人、始发地详细地址或完整地址(长度不超过200个字符)
     * Example Value: 
     */
    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress             = $senderAddress;
        $this->apiParas["senderAddress"]  = $senderAddress;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @param String $receiverProvinceName
     * 收件人、目的地省/直辖市名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $receiverProvinceName;

    /**
     * @param String $receiverProvinceName
     * 收件人、目的地省/直辖市名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName             = $receiverProvinceName;
        $this->apiParas["receiverProvinceName"]  = $receiverProvinceName;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    /**
     * @param String $receiverCityName
     * 收件人、目的地市名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $receiverCityName;

    /**
     * @param String $receiverCityName
     * 收件人、目的地市名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName             = $receiverCityName;
        $this->apiParas["receiverCityName"]  = $receiverCityName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

    /**
     * @param String $receiverCountryName
     * 收件人、目的地区/县名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $receiverCountryName;

    /**
     * @param String $receiverCountryName
     * 收件人、目的地区/县名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setReceiverCountryName($receiverCountryName)
    {
        $this->receiverCountryName             = $receiverCountryName;
        $this->apiParas["receiverCountryName"]  = $receiverCountryName;
    }

    public function getReceiverCountryName()
    {
        return $this->receiverCountryName;
    }

    /**
     * @param String $receiverCountrysideName
     * 收件人、目的地县镇/街道名称(长度不超过50个字符)
     * Required: false
     * Example Value: 
     */
    private $receiverCountrysideName;

    /**
     * @param String $receiverCountrysideName
     * 收件人、目的地县镇/街道名称(长度不超过50个字符)
     * Example Value: 
     */
    public function setReceiverCountrysideName($receiverCountrysideName)
    {
        $this->receiverCountrysideName             = $receiverCountrysideName;
        $this->apiParas["receiverCountrysideName"]  = $receiverCountrysideName;
    }

    public function getReceiverCountrysideName()
    {
        return $this->receiverCountrysideName;
    }

    /**
     * @param String $receiverAddress
     * 收件人、目的地详细地址或完整地址(长度不超过200个字符)
     * Required: true
     * Example Value: 
     */
    private $receiverAddress;

    /**
     * @param String $receiverAddress
     * 收件人、目的地详细地址或完整地址(长度不超过200个字符)
     * Example Value: 
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress             = $receiverAddress;
        $this->apiParas["receiverAddress"]  = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param String $weight
     * 寄托物（货物）重量，单位：千克
     * Required: true
     * Example Value: 
     */
    private $weight;

    /**
     * @param String $weight
     * 寄托物（货物）重量，单位：千克
     * Example Value: 
     */
    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"]  = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param Number $businessType
     * 业务类型
     * Required: true
     * Example Value: 
     */
    private $businessType;

    /**
     * @param Number $businessType
     * 业务类型
     * Example Value: 
     */
    public function setBusinessType($businessType)
    {
        $this->businessType             = $businessType;
        $this->apiParas["businessType"]  = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param Date $orderTime
     * 寄件/揽件时间
     * Required: true
     * Example Value: 
     */
    private $orderTime;

    /**
     * @param Date $orderTime
     * 寄件/揽件时间
     * Example Value: 
     */
    public function setOrderTime($orderTime)
    {
        $this->orderTime             = $orderTime;
        $this->apiParas["orderTime"]  = $orderTime;
    }

    public function getOrderTime()
    {
        return $this->orderTime;
    }

}