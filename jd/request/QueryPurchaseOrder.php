<?php

namespace JD\request;

/**
 * 采购订单查询
 * 京东万家API-对外提供万家系统的标准API接口，支持整个万家系统供应链的接口对接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=352&apiId=2673&apiName=jingdong.queryPurchaseOrder
 * Class QueryPurchaseOrder
 * @package Jd\request
 */
class QueryPurchaseOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryPurchaseOrder";
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
     * @param Number $projectId
     * 项目id
     * Required: true
     * Example Value: 
     */
    private $projectId;

    /**
     * @param Number $projectId
     * 项目id
     * Example Value: 
     */
    public function setProjectId($projectId)
    {
        $this->projectId             = $projectId;
        $this->apiParas["projectId"]  = $projectId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param Number $shopId
     * 店铺ID
     * Required: true
     * Example Value: 
     */
    private $shopId;

    /**
     * @param Number $shopId
     * 店铺ID
     * Example Value: 
     */
    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"]  = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param Date $beginTime
     * 下单开始时间
     * Required: false
     * Example Value: 
     */
    private $beginTime;

    /**
     * @param Date $beginTime
     * 下单开始时间
     * Example Value: 
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["beginTime"]  = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    /**
     * @param Date $endTime
     * 下单结束时间
     * Required: false
     * Example Value: 
     */
    private $endTime;

    /**
     * @param Date $endTime
     * 下单结束时间
     * Example Value: 
     */
    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"]  = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Date $completedBeginTime
     * 订单完成开始时间
     * Required: false
     * Example Value: 
     */
    private $completedBeginTime;

    /**
     * @param Date $completedBeginTime
     * 订单完成开始时间
     * Example Value: 
     */
    public function setCompletedBeginTime($completedBeginTime)
    {
        $this->completedBeginTime             = $completedBeginTime;
        $this->apiParas["completedBeginTime"]  = $completedBeginTime;
    }

    public function getCompletedBeginTime()
    {
        return $this->completedBeginTime;
    }

    /**
     * @param Date $completedEndTime
     * 订单完成结束时间
     * Required: false
     * Example Value: 
     */
    private $completedEndTime;

    /**
     * @param Date $completedEndTime
     * 订单完成结束时间
     * Example Value: 
     */
    public function setCompletedEndTime($completedEndTime)
    {
        $this->completedEndTime             = $completedEndTime;
        $this->apiParas["completedEndTime"]  = $completedEndTime;
    }

    public function getCompletedEndTime()
    {
        return $this->completedEndTime;
    }

    /**
     * @param Number $index
     * 页码
     * Required: false
     * Example Value: 
     */
    private $index;

    /**
     * @param Number $index
     * 页码
     * Example Value: 
     */
    public function setIndex($index)
    {
        $this->index             = $index;
        $this->apiParas["index"]  = $index;
    }

    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param Number $pageSize
     * 每页数量
     * Required: false
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页数量
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
     * @param String $bizToken
     * bizToken
     * Required: true
     * Example Value: 
     */
    private $bizToken;

    /**
     * @param String $bizToken
     * bizToken
     * Example Value: 
     */
    public function setBizToken($bizToken)
    {
        $this->bizToken             = $bizToken;
        $this->apiParas["bizToken"]  = $bizToken;
    }

    public function getBizToken()
    {
        return $this->bizToken;
    }

    /**
     * @param String $source
     * source
     * Required: true
     * Example Value: 
     */
    private $source;

    /**
     * @param String $source
     * source
     * Example Value: 
     */
    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"]  = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

}