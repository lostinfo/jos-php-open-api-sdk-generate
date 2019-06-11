<?php

namespace JD\request;

/**
 * 方法描述
 * 无界门店API-无界门店API
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=351&apiId=3189&apiName=jingdong.submitStoreOrder
 * Class SubmitStoreOrder
 * @package Jd\request
 */
class SubmitStoreOrder
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.submitStoreOrder";
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
     * @param String $pin
     * 买家pin
     * Required: false
     * Example Value: 
     */
    private $pin;

    /**
     * @param String $pin
     * 买家pin
     * Example Value: 
     */
    public function setPin($pin)
    {
        $this->pin             = $pin;
        $this->apiParas["pin"]  = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param String $code
     * 特权金卷码
     * Required: false
     * Example Value: 
     */
    private $code;

    /**
     * @param String $code
     * 特权金卷码
     * Example Value: 
     */
    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"]  = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param String $address
     * 收货详细地址
     * Required: false
     * Example Value: 
     */
    private $address;

    /**
     * @param String $address
     * 收货详细地址
     * Example Value: 
     */
    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"]  = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Number $provinceId
     * 第一级地址ID（省）
     * Required: false
     * Example Value: 
     */
    private $provinceId;

    /**
     * @param Number $provinceId
     * 第一级地址ID（省）
     * Example Value: 
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId             = $provinceId;
        $this->apiParas["provinceId"]  = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param Number $cityId
     * 第二级地址ID（市）
     * Required: false
     * Example Value: 
     */
    private $cityId;

    /**
     * @param Number $cityId
     * 第二级地址ID（市）
     * Example Value: 
     */
    public function setCityId($cityId)
    {
        $this->cityId             = $cityId;
        $this->apiParas["cityId"]  = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param Number $countryId
     * 第三级地址ID（县）
     * Required: false
     * Example Value: 
     */
    private $countryId;

    /**
     * @param Number $countryId
     * 第三级地址ID（县）
     * Example Value: 
     */
    public function setCountryId($countryId)
    {
        $this->countryId             = $countryId;
        $this->apiParas["countryId"]  = $countryId;
    }

    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param Number $townId
     * 第四级地址ID（地区、街道）
     * Required: false
     * Example Value: 
     */
    private $townId;

    /**
     * @param Number $townId
     * 第四级地址ID（地区、街道）
     * Example Value: 
     */
    public function setTownId($townId)
    {
        $this->townId             = $townId;
        $this->apiParas["townId"]  = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * @param String $receiver
     * 收件人姓名
     * Required: false
     * Example Value: 
     */
    private $receiver;

    /**
     * @param String $receiver
     * 收件人姓名
     * Example Value: 
     */
    public function setReceiver($receiver)
    {
        $this->receiver             = $receiver;
        $this->apiParas["receiver"]  = $receiver;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param String $mobile
     * 移动电话
     * Required: false
     * Example Value: 
     */
    private $mobile;

    /**
     * @param String $mobile
     * 移动电话
     * Example Value: 
     */
    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"]  = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param String $email
     * 邮箱
     * Required: false
     * Example Value: 
     */
    private $email;

    /**
     * @param String $email
     * 邮箱
     * Example Value: 
     */
    public function setEmail($email)
    {
        $this->email             = $email;
        $this->apiParas["email"]  = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param String $phone
     * 固话
     * Required: false
     * Example Value: 
     */
    private $phone;

    /**
     * @param String $phone
     * 固话
     * Example Value: 
     */
    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"]  = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param String $totalPrice
     * 总价（包含loc优惠金额）
     * Required: true
     * Example Value: 
     */
    private $totalPrice;

    /**
     * @param String $totalPrice
     * 总价（包含loc优惠金额）
     * Example Value: 
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice             = $totalPrice;
        $this->apiParas["totalPrice"]  = $totalPrice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param String $salesPin
     * 导购员PIN
     * Required: true
     * Example Value: 
     */
    private $salesPin;

    /**
     * @param String $salesPin
     * 导购员PIN
     * Example Value: 
     */
    public function setSalesPin($salesPin)
    {
        $this->salesPin             = $salesPin;
        $this->apiParas["salesPin"]  = $salesPin;
    }

    public function getSalesPin()
    {
        return $this->salesPin;
    }

    /**
     * @param Number $storeId
     * 门店id
     * Required: true
     * Example Value: 
     */
    private $storeId;

    /**
     * @param Number $storeId
     * 门店id
     * Example Value: 
     */
    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"]  = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param String $remark
     * 订单备注
     * Required: false
     * Example Value: 
     */
    private $remark;

    /**
     * @param String $remark
     * 订单备注
     * Example Value: 
     */
    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"]  = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param String $deliveryType
     * 不传采用默认下单，10：店铺发货，使用pop库存，进行线上扣减（此方法会涉及运费 20：门店自提，使用门店库存
     * Required: false
     * Example Value: 
     */
    private $deliveryType;

    /**
     * @param String $deliveryType
     * 不传采用默认下单，10：店铺发货，使用pop库存，进行线上扣减（此方法会涉及运费 20：门店自提，使用门店库存
     * Example Value: 
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType             = $deliveryType;
        $this->apiParas["deliveryType"]  = $deliveryType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param Number $categoryId1
     * 一级分类id
     * Required: false
     * Example Value: 
     */
    private $categoryId1;

    /**
     * @param Number $categoryId1
     * 一级分类id
     * Example Value: 
     */
    public function setCategoryId1($categoryId1)
    {
        $this->categoryId1             = $categoryId1;
        $this->apiParas["categoryId1"]  = $categoryId1;
    }

    public function getCategoryId1()
    {
        return $this->categoryId1;
    }

    /**
     * @param Number $categoryId2
     * 二级分类id
     * Required: false
     * Example Value: 
     */
    private $categoryId2;

    /**
     * @param Number $categoryId2
     * 二级分类id
     * Example Value: 
     */
    public function setCategoryId2($categoryId2)
    {
        $this->categoryId2             = $categoryId2;
        $this->apiParas["categoryId2"]  = $categoryId2;
    }

    public function getCategoryId2()
    {
        return $this->categoryId2;
    }

    /**
     * @param Number $categoryId3
     * 三级分类id
     * Required: false
     * Example Value: 
     */
    private $categoryId3;

    /**
     * @param Number $categoryId3
     * 三级分类id
     * Example Value: 
     */
    public function setCategoryId3($categoryId3)
    {
        $this->categoryId3             = $categoryId3;
        $this->apiParas["categoryId3"]  = $categoryId3;
    }

    public function getCategoryId3()
    {
        return $this->categoryId3;
    }

    /**
     * @param String $skuId
     * 商品SKUID
     * Required: true
     * Example Value: 
     */
    private $skuId;

    /**
     * @param String $skuId
     * 商品SKUID
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
     * 商品SKU名称
     * Required: false
     * Example Value: 
     */
    private $skuName;

    /**
     * @param String $skuName
     * 商品SKU名称
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

    /**
     * @param Number $purchaseNum
     * 购买数量
     * Required: true
     * Example Value: 
     */
    private $purchaseNum;

    /**
     * @param Number $purchaseNum
     * 购买数量
     * Example Value: 
     */
    public function setPurchaseNum($purchaseNum)
    {
        $this->purchaseNum             = $purchaseNum;
        $this->apiParas["purchaseNum"]  = $purchaseNum;
    }

    public function getPurchaseNum()
    {
        return $this->purchaseNum;
    }

    /**
     * @param String $skuPrice
     * 商品金额
     * Required: true
     * Example Value: 
     */
    private $skuPrice;

    /**
     * @param String $skuPrice
     * 商品金额
     * Example Value: 
     */
    public function setSkuPrice($skuPrice)
    {
        $this->skuPrice             = $skuPrice;
        $this->apiParas["skuPrice"]  = $skuPrice;
    }

    public function getSkuPrice()
    {
        return $this->skuPrice;
    }

}