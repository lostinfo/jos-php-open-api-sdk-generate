<?php

namespace JD\request;

/**
 * 查询出库单
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1597&apiName=jingdong.warehouse.outbound.order.query.list
 * Class WarehouseOutboundOrderQueryList
 * @package Jd\request
 */
class WarehouseOutboundOrderQueryList
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.warehouse.outbound.order.query.list";
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
     * @param Number $pageIndex
     * 当前页码（默认值1）
     * Required: true
     * Example Value: 1
     */
    private $pageIndex;

    /**
     * @param Number $pageIndex
     * 当前页码（默认值1）
     * Example Value: 1
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
     * 每页大小(最大支持200)
     * Required: true
     * Example Value: 200
     */
    private $pageSize;

    /**
     * @param Number $pageSize
     * 每页大小(最大支持200)
     * Example Value: 200
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
     * @param String $stockOutNo
     * 出库单号
     * Required: false
     * Example Value: 
     */
    private $stockOutNo;

    /**
     * @param String $stockOutNo
     * 出库单号
     * Example Value: 
     */
    public function setStockOutNo($stockOutNo)
    {
        $this->stockOutNo             = $stockOutNo;
        $this->apiParas["stockOutNo"]  = $stockOutNo;
    }

    public function getStockOutNo()
    {
        return $this->stockOutNo;
    }

    /**
     * @param Date $createTimeBegin
     * 制单日期开始时间
     * Required: false
     * Example Value: 
     */
    private $createTimeBegin;

    /**
     * @param Date $createTimeBegin
     * 制单日期开始时间
     * Example Value: 
     */
    public function setCreateTimeBegin($createTimeBegin)
    {
        $this->createTimeBegin             = $createTimeBegin;
        $this->apiParas["createTimeBegin"]  = $createTimeBegin;
    }

    public function getCreateTimeBegin()
    {
        return $this->createTimeBegin;
    }

    /**
     * @param Date $createTimeEnd
     * 制单日期结束时间
     * Required: false
     * Example Value: 
     */
    private $createTimeEnd;

    /**
     * @param Date $createTimeEnd
     * 制单日期结束时间
     * Example Value: 
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd             = $createTimeEnd;
        $this->apiParas["createTimeEnd"]  = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

    /**
     * @param Date $checkTimeBegin
     * 复合日期开始时间
     * Required: false
     * Example Value: 
     */
    private $checkTimeBegin;

    /**
     * @param Date $checkTimeBegin
     * 复合日期开始时间
     * Example Value: 
     */
    public function setCheckTimeBegin($checkTimeBegin)
    {
        $this->checkTimeBegin             = $checkTimeBegin;
        $this->apiParas["checkTimeBegin"]  = $checkTimeBegin;
    }

    public function getCheckTimeBegin()
    {
        return $this->checkTimeBegin;
    }

    /**
     * @param Date $checkTimeEnd
     * 复合日期结束时间
     * Required: false
     * Example Value: 
     */
    private $checkTimeEnd;

    /**
     * @param Date $checkTimeEnd
     * 复合日期结束时间
     * Example Value: 
     */
    public function setCheckTimeEnd($checkTimeEnd)
    {
        $this->checkTimeEnd             = $checkTimeEnd;
        $this->apiParas["checkTimeEnd"]  = $checkTimeEnd;
    }

    public function getCheckTimeEnd()
    {
        return $this->checkTimeEnd;
    }

    /**
     * @param String $remark1
     * 备注1
     * Required: false
     * Example Value: 
     */
    private $remark1;

    /**
     * @param String $remark1
     * 备注1
     * Example Value: 
     */
    public function setRemark1($remark1)
    {
        $this->remark1             = $remark1;
        $this->apiParas["remark1"]  = $remark1;
    }

    public function getRemark1()
    {
        return $this->remark1;
    }

    /**
     * @param String $remark2
     * 备注2
     * Required: false
     * Example Value: 
     */
    private $remark2;

    /**
     * @param String $remark2
     * 备注2
     * Example Value: 
     */
    public function setRemark2($remark2)
    {
        $this->remark2             = $remark2;
        $this->apiParas["remark2"]  = $remark2;
    }

    public function getRemark2()
    {
        return $this->remark2;
    }

    /**
     * @param String $remark3
     * 备注3
     * Required: false
     * Example Value: 
     */
    private $remark3;

    /**
     * @param String $remark3
     * 备注3
     * Example Value: 
     */
    public function setRemark3($remark3)
    {
        $this->remark3             = $remark3;
        $this->apiParas["remark3"]  = $remark3;
    }

    public function getRemark3()
    {
        return $this->remark3;
    }

    /**
     * @param String $remark4
     * 备注4
     * Required: false
     * Example Value: 
     */
    private $remark4;

    /**
     * @param String $remark4
     * 备注4
     * Example Value: 
     */
    public function setRemark4($remark4)
    {
        $this->remark4             = $remark4;
        $this->apiParas["remark4"]  = $remark4;
    }

    public function getRemark4()
    {
        return $this->remark4;
    }

    /**
     * @param String $remark5
     * 备注5
     * Required: false
     * Example Value: 
     */
    private $remark5;

    /**
     * @param String $remark5
     * 备注5
     * Example Value: 
     */
    public function setRemark5($remark5)
    {
        $this->remark5             = $remark5;
        $this->apiParas["remark5"]  = $remark5;
    }

    public function getRemark5()
    {
        return $this->remark5;
    }

}