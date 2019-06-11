<?php

namespace JD\request;

/**
 * 添加商品
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2285&apiName=jingdong.nbhouse.rent.spu.publishService
 * Class NbhouseRentSpuPublishService
 * @package Jd\request
 */
class NbhouseRentSpuPublishService
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.nbhouse.rent.spu.publishService";
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
     * @param Number $staffId
     * 经纪人id
     * Required: true
     * Example Value: 
     */
    private $staffId;

    /**
     * @param Number $staffId
     * 经纪人id
     * Example Value: 
     */
    public function setStaffId($staffId)
    {
        $this->staffId             = $staffId;
        $this->apiParas["staffId"]  = $staffId;
    }

    public function getStaffId()
    {
        return $this->staffId;
    }

    /**
     * @param Number $plotId
     * 小区id
     * Required: true
     * Example Value: 
     */
    private $plotId;

    /**
     * @param Number $plotId
     * 小区id
     * Example Value: 
     */
    public function setPlotId($plotId)
    {
        $this->plotId             = $plotId;
        $this->apiParas["plotId"]  = $plotId;
    }

    public function getPlotId()
    {
        return $this->plotId;
    }

    /**
     * @param Number $spuId
     * spuId
     * Required: true
     * Example Value: 
     */
    private $spuId;

    /**
     * @param Number $spuId
     * spuId
     * Example Value: 
     */
    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"]  = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

    /**
     * @param String $spuName
     * spuName
     * Required: true
     * Example Value: 
     */
    private $spuName;

    /**
     * @param String $spuName
     * spuName
     * Example Value: 
     */
    public function setSpuName($spuName)
    {
        $this->spuName             = $spuName;
        $this->apiParas["spuName"]  = $spuName;
    }

    public function getSpuName()
    {
        return $this->spuName;
    }

    /**
     * @param Number $skuId
     * 销售属性Id
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param Number $skuId
     * 销售属性Id
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

    /**
     * @param String $skuName
     * 销售属性Name
     * Required: true
     * Example Value: 
     */
    private $skuName;

    /**
     * @param String $skuName
     * 销售属性Name
     * Example Value: 
     */
    public function setSkuName($skuName)
    {
        $this->skuName             = $skuName;
        $this->apiParas["skuName"]  = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

}