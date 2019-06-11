<?php

namespace JD\request;

/**
 * 查询采购单详情
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3078&apiName=jingdong.b2b.gxpt.purchaseOrderErpService.findPurchaseOrder
 * Class B2bGxptPurchaseOrderErpServiceFindPurchaseOrder
 * @package Jd\request
 */
class B2bGxptPurchaseOrderErpServiceFindPurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.gxpt.purchaseOrderErpService.findPurchaseOrder";
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
     * @param Number $venderId
     * 供应商id
     * Required: false
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 供应商id
     * Example Value: 
     */
    public function setVenderId($venderId)
    {
        $this->venderId             = $venderId;
        $this->apiParas["venderId"]  = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    /**
     * @param Number $purchaseOrderId
     * 采购单id
     * Required: false
     * Example Value: 
     */
    private $purchaseOrderId;

    /**
     * @param Number $purchaseOrderId
     * 采购单id
     * Example Value: 
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId             = $purchaseOrderId;
        $this->apiParas["purchaseOrderId"]  = $purchaseOrderId;
    }

    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    /**
     * @param Number $jdOrderId
     * 京东订单id
     * Required: false
     * Example Value: 
     */
    private $jdOrderId;

    /**
     * @param Number $jdOrderId
     * 京东订单id
     * Example Value: 
     */
    public function setJdOrderId($jdOrderId)
    {
        $this->jdOrderId             = $jdOrderId;
        $this->apiParas["jdOrderId"]  = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

}