<?php

namespace JD\request;

/**
 * 查询单条客单相关信息
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=2369&apiName=jingdong.dropship.dps.searchsingleorder
 * Class DropshipDpsSearchsingleorder
 * @package Jd\request
 */
class DropshipDpsSearchsingleorder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dropship.dps.searchsingleorder";
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
     * @param Number $customOrderId
     * 客单编号
     * Required: true
     * Example Value: 170321426
     */
    private $customOrderId;

    /**
     * @param Number $customOrderId
     * 客单编号
     * Example Value: 170321426
     */
    public function setCustomOrderId($customOrderId)
    {
        $this->customOrderId             = $customOrderId;
        $this->apiParas["customOrderId"]  = $customOrderId;
    }

    public function getCustomOrderId()
    {
        return $this->customOrderId;
    }

}