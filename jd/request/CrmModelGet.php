<?php

namespace JD\request;

/**
 * 获取会员模型列表
 * 客户关系管理API -客户关系管理API 
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=59&apiId=337&apiName=jingdong.crm.model.get
 * Class CrmModelGet
 * @package Jd\request
 */
class CrmModelGet
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.model.get";
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