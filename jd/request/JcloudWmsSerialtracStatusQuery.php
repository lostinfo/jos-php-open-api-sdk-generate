<?php

namespace JD\request;

/**
 * 序列号状态查询
 * 物流云-WMS-API-物流云仓储
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=192&apiId=1791&apiName=jingdong.jcloud.wms.serialtrac.status.query
 * Class JcloudWmsSerialtracStatusQuery
 * @package Jd\request
 */
class JcloudWmsSerialtracStatusQuery
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.serialtrac.status.query";
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
     * @param String $tenantId
     * 租户
     * Required: true
     * Example Value: 
     */
    private $tenantId;

    /**
     * @param String $tenantId
     * 租户
     * Example Value: 
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"]  = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param String $warehouseNo
     * 库房号
     * Required: true
     * Example Value: 
     */
    private $warehouseNo;

    /**
     * @param String $warehouseNo
     * 库房号
     * Example Value: 
     */
    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo             = $warehouseNo;
        $this->apiParas["warehouseNo"]  = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    /**
     * @param String $ownerNo
     * 货主编码
     * Required: true
     * Example Value: 
     */
    private $ownerNo;

    /**
     * @param String $ownerNo
     * 货主编码
     * Example Value: 
     */
    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo             = $ownerNo;
        $this->apiParas["ownerNo"]  = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    /**
     * @param String $serial
     * 序列号
     * Required: true
     * Example Value: 
     */
    private $serial;

    /**
     * @param String $serial
     * 序列号
     * Example Value: 
     */
    public function setSerial($serial)
    {
        $this->serial             = $serial;
        $this->apiParas["serialNo"]  = $serial;
    }

    public function getSerial()
    {
        return $this->serial;
    }

}