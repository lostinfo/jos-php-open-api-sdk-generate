<?php

namespace JD\request;

/**
 * 获取订单行扩展字段
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=2706&apiName=jingdong.service.rebate.external.getOrderExt
 * Class ServiceRebateExternalGetOrderExt
 * @package Jd\request
 */
class ServiceRebateExternalGetOrderExt
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.rebate.external.getOrderExt";
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
     * @param String $unionId
     * 联盟id
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param String $unionId
     * 联盟id
     * Example Value: 
     */
    public function setUnionId($unionId)
    {
        $this->unionId             = $unionId;
        $this->apiParas["unionId"]  = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param String $orderId
     * 订单id
     * Required: true
     * Example Value: 
     */
    private $orderId;

    /**
     * @param String $orderId
     * 订单id
     * Example Value: 
     */
    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"]  = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param String $skuId
     * skuId
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * skuId
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

}