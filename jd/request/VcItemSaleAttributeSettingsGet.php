<?php

namespace JD\request;

/**
 * 获取销售属性配置
 * 供应商API-京东供应商系统API，包含检索待出库客单信息、检索售前退款的客单、获取销量库存汇总、创建采购单等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=86&apiId=1935&apiName=jingdong.vc.item.saleAttributeSettings.get
 * Class VcItemSaleAttributeSettingsGet
 * @package Jd\request
 */
class VcItemSaleAttributeSettingsGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.saleAttributeSettings.get";
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
     * @param Number $cid3
     * 三级分类ID
     * Required: true
     * Example Value: 655
     */
    private $cid3;

    /**
     * @param Number $cid3
     * 三级分类ID
     * Example Value: 655
     */
    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["cid3"]  = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

}