<?php

namespace JD\request;

/**
 * 获取商家所有的店内分类
 * 店铺API-京东店铺API，包含提供商家、商家店铺基本信息及店内分类操作查询等功能。
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=88&apiId=2801&apiName=jingdong.vender.shopcategory.findShopCategoriesByVenderId
 * Class VenderShopcategoryFindShopCategoriesByVenderId
 * @package Jd\request
 */
class VenderShopcategoryFindShopCategoriesByVenderId
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.shopcategory.findShopCategoriesByVenderId";
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

}