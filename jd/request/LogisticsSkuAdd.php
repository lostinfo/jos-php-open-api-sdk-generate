<?php

namespace JD\request;

/**
 * 商品资料添加
 * 京云仓API-提供查询库存、入库单查询、出库单查询等功能
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=56&apiId=147&apiName=jingdong.logistics.sku.add
 * Class LogisticsSkuAdd
 * @package Jd\request
 */
class LogisticsSkuAdd
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.sku.add";
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
     * @param String $barCode
     * 条码
     * Required: true
     * Example Value: 
     */
    private $barCode;

    /**
     * @param String $barCode
     * 条码
     * Example Value: 
     */
    public function setBarCode($barCode)
    {
        $this->barCode             = $barCode;
        $this->apiParas["bar_code"]  = $barCode;
    }

    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param String $skuId
     * JOSL商品唯一标识(外部系统商品唯一标识)
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * JOSL商品唯一标识(外部系统商品唯一标识)
     * Example Value: 
     */
    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["sku_id"]  = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param String $name
     * 商品名称
     * Required: true
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
     * @param String $goodsAbbreviation
     * 商品简称
     * Required: false
     * Example Value: 
     */
    private $goodsAbbreviation;

    /**
     * @param String $goodsAbbreviation
     * 商品简称
     * Example Value: 
     */
    public function setGoodsAbbreviation($goodsAbbreviation)
    {
        $this->goodsAbbreviation             = $goodsAbbreviation;
        $this->apiParas["goods_abbreviation"]  = $goodsAbbreviation;
    }

    public function getGoodsAbbreviation()
    {
        return $this->goodsAbbreviation;
    }

    /**
     * @param String $categoryId
     * 商品分类编号(外部数据)
     * Required: true
     * Example Value: 
     */
    private $categoryId;

    /**
     * @param String $categoryId
     * 商品分类编号(外部数据)
     * Example Value: 
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId             = $categoryId;
        $this->apiParas["category_id"]  = $categoryId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param String $categoryName
     * 商品分类名称
     * Required: true
     * Example Value: 
     */
    private $categoryName;

    /**
     * @param String $categoryName
     * 商品分类名称
     * Example Value: 
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["category_name"]  = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param String $brandNo
     * 品牌编号
     * Required: false
     * Example Value: 
     */
    private $brandNo;

    /**
     * @param String $brandNo
     * 品牌编号
     * Example Value: 
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo             = $brandNo;
        $this->apiParas["brand_no"]  = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * @param String $brandName
     * 品牌名称
     * Required: false
     * Example Value: 
     */
    private $brandName;

    /**
     * @param String $brandName
     * 品牌名称
     * Example Value: 
     */
    public function setBrandName($brandName)
    {
        $this->brandName             = $brandName;
        $this->apiParas["brand_name"]  = $brandName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param String $format
     * 商品规格
     * Required: false
     * Example Value: 
     */
    private $format;

    /**
     * @param String $format
     * 商品规格
     * Example Value: 
     */
    public function setFormat($format)
    {
        $this->format             = $format;
        $this->apiParas["format"]  = $format;
    }

    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param String $color
     * 商品颜色
     * Required: false
     * Example Value: 
     */
    private $color;

    /**
     * @param String $color
     * 商品颜色
     * Example Value: 
     */
    public function setColor($color)
    {
        $this->color             = $color;
        $this->apiParas["color"]  = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param String $size
     * 商品尺码
     * Required: false
     * Example Value: 
     */
    private $size;

    /**
     * @param String $size
     * 商品尺码
     * Example Value: 
     */
    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"]  = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param Number $grossWeight
     * 商品毛重量
     * Required: false
     * Example Value: 
     */
    private $grossWeight;

    /**
     * @param Number $grossWeight
     * 商品毛重量
     * Example Value: 
     */
    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight             = $grossWeight;
        $this->apiParas["gross_weight"]  = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param Number $netWeight
     * 商品净重量
     * Required: false
     * Example Value: 
     */
    private $netWeight;

    /**
     * @param Number $netWeight
     * 商品净重量
     * Example Value: 
     */
    public function setNetWeight($netWeight)
    {
        $this->netWeight             = $netWeight;
        $this->apiParas["net_weight"]  = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * @param String $sizeDefinition
     * 商品件型(分为9种件型用于计费使用请慎重考虑.)
     * Required: true
     * Example Value: 
     */
    private $sizeDefinition;

    /**
     * @param String $sizeDefinition
     * 商品件型(分为9种件型用于计费使用请慎重考虑.)
     * Example Value: 
     */
    public function setSizeDefinition($sizeDefinition)
    {
        $this->sizeDefinition             = $sizeDefinition;
        $this->apiParas["size_definition"]  = $sizeDefinition;
    }

    public function getSizeDefinition()
    {
        return $this->sizeDefinition;
    }

    /**
     * @param String $suppliersName
     * 供应商名称
     * Required: false
     * Example Value: 
     */
    private $suppliersName;

    /**
     * @param String $suppliersName
     * 供应商名称
     * Example Value: 
     */
    public function setSuppliersName($suppliersName)
    {
        $this->suppliersName             = $suppliersName;
        $this->apiParas["suppliers_name"]  = $suppliersName;
    }

    public function getSuppliersName()
    {
        return $this->suppliersName;
    }

    /**
     * @param String $manufacturer
     * 生产厂商
     * Required: false
     * Example Value: 
     */
    private $manufacturer;

    /**
     * @param String $manufacturer
     * 生产厂商
     * Example Value: 
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer             = $manufacturer;
        $this->apiParas["manufacturer"]  = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param String $suppliersNo
     * 供应商编码
     * Required: false
     * Example Value: 
     */
    private $suppliersNo;

    /**
     * @param String $suppliersNo
     * 供应商编码
     * Example Value: 
     */
    public function setSuppliersNo($suppliersNo)
    {
        $this->suppliersNo             = $suppliersNo;
        $this->apiParas["suppliers_no"]  = $suppliersNo;
    }

    public function getSuppliersNo()
    {
        return $this->suppliersNo;
    }

    /**
     * @param String $productArea
     * 产地
     * Required: false
     * Example Value: 
     */
    private $productArea;

    /**
     * @param String $productArea
     * 产地
     * Example Value: 
     */
    public function setProductArea($productArea)
    {
        $this->productArea             = $productArea;
        $this->apiParas["product_area"]  = $productArea;
    }

    public function getProductArea()
    {
        return $this->productArea;
    }

    /**
     * @param Number $length
     * 长
     * Required: true
     * Example Value: 
     */
    private $length;

    /**
     * @param Number $length
     * 长
     * Example Value: 
     */
    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"]  = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param Number $width
     * 宽
     * Required: true
     * Example Value: 
     */
    private $width;

    /**
     * @param Number $width
     * 宽
     * Example Value: 
     */
    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"]  = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param Number $height
     * 高
     * Required: true
     * Example Value: 
     */
    private $height;

    /**
     * @param Number $height
     * 高
     * Example Value: 
     */
    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"]  = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param Number $volume
     * 体积
     * Required: true
     * Example Value: 
     */
    private $volume;

    /**
     * @param Number $volume
     * 体积
     * Example Value: 
     */
    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["volume"]  = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param Number $safe
     * 是否保质期管理(1为保质期管理,0为非保质期管理,不强制加入.)
     * Required: false
     * Example Value: 
     */
    private $safe;

    /**
     * @param Number $safe
     * 是否保质期管理(1为保质期管理,0为非保质期管理,不强制加入.)
     * Example Value: 
     */
    public function setSafe($safe)
    {
        $this->safe             = $safe;
        $this->apiParas["is_safe"]  = $safe;
    }

    public function getSafe()
    {
        return $this->safe;
    }

    /**
     * @param String $safeDate
     * 保质期天数(非保质期可不填写,保质期商品请填写保质期为多少天如30天请填写30.)
     * Required: false
     * Example Value: 
     */
    private $safeDate;

    /**
     * @param String $safeDate
     * 保质期天数(非保质期可不填写,保质期商品请填写保质期为多少天如30天请填写30.)
     * Example Value: 
     */
    public function setSafeDate($safeDate)
    {
        $this->safeDate             = $safeDate;
        $this->apiParas["safe_date"]  = $safeDate;
    }

    public function getSafeDate()
    {
        return $this->safeDate;
    }

}