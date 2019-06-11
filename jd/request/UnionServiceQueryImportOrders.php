<?php

namespace JD\request;

/**
 * 查询引入订单(即将下线)
 * 京东联盟API-查询推广产品，获取推广链接。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=117&apiId=1714&apiName=jingdong.UnionService.queryImportOrders
 * Class UnionServiceQueryImportOrders
 * @package Jd\request
 */
class UnionServiceQueryImportOrders
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.UnionService.queryImportOrders";
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
     * @param Number $unionId
     * 站长Id
     * Required: true
     * Example Value: 
     */
    private $unionId;

    /**
     * @param Number $unionId
     * 站长Id
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
     * @param String $time
     * 查询时间,输入格式必须为yyyyMMddHHmm,yyyyMMddHHmmss或者yyyyMMddHH格式之一
     * Required: true
     * Example Value: 
     */
    private $time;

    /**
     * @param String $time
     * 查询时间,输入格式必须为yyyyMMddHHmm,yyyyMMddHHmmss或者yyyyMMddHH格式之一
     * Example Value: 
     */
    public function setTime($time)
    {
        $this->time             = $time;
        $this->apiParas["time"]  = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param Number $pageIndex
     * 页数
     * Required: true
     * Example Value: 
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 页数
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
     * @param Number $pageSize
     * 每页显示多少条
     * Required: true
     * Example Value: 
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页显示多少条
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

}