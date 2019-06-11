<?php

namespace JD\request;

/**
 * 查询商品列表接口
 * B2B开放API-B2B开放
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=391&apiId=3076&apiName=jingdong.b2b.open.api.GXProductProvider.queryProduct
 * Class B2bOpenApiGXProductProviderQueryProduct
 * @package Jd\request
 */
class B2bOpenApiGXProductProviderQueryProduct
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.open.api.GXProductProvider.queryProduct";
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
     * @param Number $jdSkuId
     * jdSkuId
     * Required: false
     * Example Value: 
     */
    private $jdSkuId;

    /**
     * @param Number $jdSkuId
     * jdSkuId
     * Example Value: 
     */
    public function setJdSkuId($jdSkuId)
    {
        $this->jdSkuId             = $jdSkuId;
        $this->apiParas["jdSkuId"]  = $jdSkuId;
    }

    public function getJdSkuId()
    {
        return $this->jdSkuId;
    }

    /**
     * @param Number $jdSpuId
     * jdSpuId
     * Required: false
     * Example Value: 
     */
    private $jdSpuId;

    /**
     * @param Number $jdSpuId
     * jdSpuId
     * Example Value: 
     */
    public function setJdSpuId($jdSpuId)
    {
        $this->jdSpuId             = $jdSpuId;
        $this->apiParas["jdSpuId"]  = $jdSpuId;
    }

    public function getJdSpuId()
    {
        return $this->jdSpuId;
    }

    /**
     * @param Number $venderId
     * 商家id
     * Required: true
     * Example Value: 
     */
    private $venderId;

    /**
     * @param Number $venderId
     * 商家id
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
     * @param Number $pageSize
     * 每页条数
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页条数
     * Example Value: 
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"]  = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param Number $thirdCategoryId
     * 三级类目id
     * Required: false
     * Example Value: 
     */
    private $thirdCategoryId;

    /**
     * @param Number $thirdCategoryId
     * 三级类目id
     * Example Value: 
     */
    public function setThirdCategoryId($thirdCategoryId)
    {
        $this->thirdCategoryId             = $thirdCategoryId;
        $this->apiParas["thirdCategoryId"]  = $thirdCategoryId;
    }

    public function getThirdCategoryId()
    {
        return $this->thirdCategoryId;
    }

    /**
     * @param Number $pageIndex
     * 页码
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页码
     * Example Value: 
     */
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"]  = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param Number $brandId
     * 品牌id
     * Required: false
     * Example Value: 
     */
    private $brandId;

    /**
     * @param Number $brandId
     * 品牌id
     * Example Value: 
     */
    public function setBrandId($brandId)
    {
        $this->brandId             = $brandId;
        $this->apiParas["brandId"]  = $brandId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param String $name
     * 商品名称
     * Required: false
     * Example Value: 
     */
    private $name;

    /**
     * @param String $name
     * 商品名称
     * Example Value: 
     */
    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"]  = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $consumerSkuId
     * consumerSkuId
     * Required: false
     * Example Value: 
     */
    private $consumerSkuId;

    /**
     * @param String $consumerSkuId
     * consumerSkuId
     * Example Value: 
     */
    public function setConsumerSkuId($consumerSkuId)
    {
        $this->consumerSkuId             = $consumerSkuId;
        $this->apiParas["consumerSkuId"]  = $consumerSkuId;
    }

    public function getConsumerSkuId()
    {
        return $this->consumerSkuId;
    }

    /**
     * @param Number $status
     * 商品状态
     * Required: false
     * Example Value: 
     */
    private $status;

    /**
     * @param Number $status
     * 商品状态
     * Example Value: 
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

}