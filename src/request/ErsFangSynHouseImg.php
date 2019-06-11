<?php

namespace JD\request;

/**
 * 同步小区、楼盘图片，仅支持单张图片
 * 京东房产-京东房产
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=253&apiId=2647&apiName=jingdong.ers.fang.synHouseImg
 * Class ErsFangSynHouseImg
 * @package Jd\request
 */
class ErsFangSynHouseImg
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ers.fang.synHouseImg";
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
     * @param Number[] $cityCode
     * 城市code
     * Required: true
     * Example Value: 
     */
    private $cityCode;

    /**
     * @param Number[] $cityCode
     * 城市code
     * Example Value: 
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode             = $cityCode;
        $this->apiParas["cityCode"]  = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param Number[] $sourceId
     * 来源主键
     * Required: true
     * Example Value: 
     */
    private $sourceId;

    /**
     * @param Number[] $sourceId
     * 来源主键
     * Example Value: 
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"]  = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param Number[] $externalChannelId
     * 来源渠道id
     * Required: true
     * Example Value: 
     */
    private $externalChannelId;

    /**
     * @param Number[] $externalChannelId
     * 来源渠道id
     * Example Value: 
     */
    public function setExternalChannelId($externalChannelId)
    {
        $this->externalChannelId             = $externalChannelId;
        $this->apiParas["externalChannelId"]  = $externalChannelId;
    }

    public function getExternalChannelId()
    {
        return $this->externalChannelId;
    }

    /**
     * @param Number[] $pSourceId
     * 来源小区或楼盘或房源id
     * Required: true
     * Example Value: 
     */
    private $pSourceId;

    /**
     * @param Number[] $pSourceId
     * 来源小区或楼盘或房源id
     * Example Value: 
     */
    public function setPSourceId($pSourceId)
    {
        $this->pSourceId             = $pSourceId;
        $this->apiParas["pSourceId"]  = $pSourceId;
    }

    public function getPSourceId()
    {
        return $this->pSourceId;
    }

    /**
     * @param Number[] $houseType
     * 类型（1：楼盘   2：小区）
     * Required: true
     * Example Value: 
     */
    private $houseType;

    /**
     * @param Number[] $houseType
     * 类型（1：楼盘   2：小区）
     * Example Value: 
     */
    public function setHouseType($houseType)
    {
        $this->houseType             = $houseType;
        $this->apiParas["houseType"]  = $houseType;
    }

    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * @param String[] $imgUrl
     * 图片url（转换后的图片url）
     * Required: true
     * Example Value: 
     */
    private $imgUrl;

    /**
     * @param String[] $imgUrl
     * 图片url（转换后的图片url）
     * Example Value: 
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl             = $imgUrl;
        $this->apiParas["imgUrl"]  = $imgUrl;
    }

    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param Number[] $imgType
     * 图片类型（1：主图   2：户型图  3：列表展示图  4:室内图   5：效果图   6：样板间  7：实景  8：配套   9：规划   10：其他）
     * Required: true
     * Example Value: 
     */
    private $imgType;

    /**
     * @param Number[] $imgType
     * 图片类型（1：主图   2：户型图  3：列表展示图  4:室内图   5：效果图   6：样板间  7：实景  8：配套   9：规划   10：其他）
     * Example Value: 
     */
    public function setImgType($imgType)
    {
        $this->imgType             = $imgType;
        $this->apiParas["imgType"]  = $imgType;
    }

    public function getImgType()
    {
        return $this->imgType;
    }

}