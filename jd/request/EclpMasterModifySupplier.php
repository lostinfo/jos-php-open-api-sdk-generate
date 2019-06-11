<?php

namespace JD\request;

/**
 * 修改供应商
 * ECLP仓海API-ECLP商家使用
 * url: http://open.jd.com/home/home#/doc/api?apiCateId=138&apiId=937&apiName=jingdong.eclp.master.modifySupplier
 * Class EclpMasterModifySupplier
 * @package Jd\request
 */
class EclpMasterModifySupplier
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.modifySupplier";
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
     * @param String $eclpSupplierNo
     * 供应商编号(必填，长度：50)
     * Required: true
     * Example Value: EMS0000000000001
     */
    private $eclpSupplierNo;

    /**
     * @param String $eclpSupplierNo
     * 供应商编号(必填，长度：50)
     * Example Value: EMS0000000000001
     */
    public function setEclpSupplierNo($eclpSupplierNo)
    {
        $this->eclpSupplierNo             = $eclpSupplierNo;
        $this->apiParas["eclpSupplierNo"]  = $eclpSupplierNo;
    }

    public function getEclpSupplierNo()
    {
        return $this->eclpSupplierNo;
    }

    /**
     * @param String $supplierName
     * 供应商名称(非必填，长度：500)
     * Required: false
     * Example Value: 北京分公司
     */
    private $supplierName;

    /**
     * @param String $supplierName
     * 供应商名称(非必填，长度：500)
     * Example Value: 北京分公司
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName             = $supplierName;
        $this->apiParas["supplierName"]  = $supplierName;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * @param String $status
     * 供应商状态(非必填，长度：1，描述：2启用状态，3禁用状态)
     * Required: false
     * Example Value: 2
     */
    private $status;

    /**
     * @param String $status
     * 供应商状态(非必填，长度：1，描述：2启用状态，3禁用状态)
     * Example Value: 2
     */
    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"]  = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param String $contacts
     * 联系人(非必填，长度：50)
     * Required: false
     * Example Value: 夏雪
     */
    private $contacts;

    /**
     * @param String $contacts
     * 联系人(非必填，长度：50)
     * Example Value: 夏雪
     */
    public function setContacts($contacts)
    {
        $this->contacts             = $contacts;
        $this->apiParas["contacts"]  = $contacts;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param String $phone
     * 联系电话(非必填，长度：50)
     * Required: false
     * Example Value: 13988888888 
     */
    private $phone;

    /**
     * @param String $phone
     * 联系电话(非必填，长度：50)
     * Example Value: 13988888888 
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
     * @param String $fax
     * 传真(非必填，长度：50)
     * Required: false
     * Example Value: 0755-33168816
     */
    private $fax;

    /**
     * @param String $fax
     * 传真(非必填，长度：50)
     * Example Value: 0755-33168816
     */
    public function setFax($fax)
    {
        $this->fax             = $fax;
        $this->apiParas["fax"]  = $fax;
    }

    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param String $email
     * 邮箱(非必填，长度：100)
     * Required: false
     * Example Value: 2628896666Aqq.com
     */
    private $email;

    /**
     * @param String $email
     * 邮箱(非必填，长度：100)
     * Example Value: 2628896666Aqq.com
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
     * @param String $province
     * 省(非必填，长度：100)
     * Required: false
     * Example Value: 吉林
     */
    private $province;

    /**
     * @param String $province
     * 省(非必填，长度：100)
     * Example Value: 吉林
     */
    public function setProvince($province)
    {
        $this->province             = $province;
        $this->apiParas["province"]  = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param String $city
     * 市(非必填，长度：100)
     * Required: false
     * Example Value: 辽源市
     */
    private $city;

    /**
     * @param String $city
     * 市(非必填，长度：100)
     * Example Value: 辽源市
     */
    public function setCity($city)
    {
        $this->city             = $city;
        $this->apiParas["city"]  = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param String $county
     * 区、县(非必填，长度：100)
     * Required: false
     * Example Value: 龙山区
     */
    private $county;

    /**
     * @param String $county
     * 区、县(非必填，长度：100)
     * Example Value: 龙山区
     */
    public function setCounty($county)
    {
        $this->county             = $county;
        $this->apiParas["county"]  = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param String $town
     * 乡、镇(非必填，长度：100)
     * Required: false
     * Example Value: 寿山镇
     */
    private $town;

    /**
     * @param String $town
     * 乡、镇(非必填，长度：100)
     * Example Value: 寿山镇
     */
    public function setTown($town)
    {
        $this->town             = $town;
        $this->apiParas["town"]  = $town;
    }

    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param String $address
     * 详细地址(非必填，长度：500)
     * Required: false
     * Example Value: 北京通州区六环以外（张家湾镇、台湖镇、漷县镇）西罗园南里100号900
     */
    private $address;

    /**
     * @param String $address
     * 详细地址(非必填，长度：500)
     * Example Value: 北京通州区六环以外（张家湾镇、台湖镇、漷县镇）西罗园南里100号900
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
     * @param String $ext1
     * 预留字段1
     * Required: false
     * Example Value: 
     */
    private $ext1;

    /**
     * @param String $ext1
     * 预留字段1
     * Example Value: 
     */
    public function setExt1($ext1)
    {
        $this->ext1             = $ext1;
        $this->apiParas["ext1"]  = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * @param String $ext2
     * 预留字段2
     * Required: false
     * Example Value: 
     */
    private $ext2;

    /**
     * @param String $ext2
     * 预留字段2
     * Example Value: 
     */
    public function setExt2($ext2)
    {
        $this->ext2             = $ext2;
        $this->apiParas["ext2"]  = $ext2;
    }

    public function getExt2()
    {
        return $this->ext2;
    }

    /**
     * @param String $ext3
     * 预留字段3
     * Required: false
     * Example Value: 
     */
    private $ext3;

    /**
     * @param String $ext3
     * 预留字段3
     * Example Value: 
     */
    public function setExt3($ext3)
    {
        $this->ext3             = $ext3;
        $this->apiParas["ext3"]  = $ext3;
    }

    public function getExt3()
    {
        return $this->ext3;
    }

    /**
     * @param String $ext4
     * 预留字段4
     * Required: false
     * Example Value: 
     */
    private $ext4;

    /**
     * @param String $ext4
     * 预留字段4
     * Example Value: 
     */
    public function setExt4($ext4)
    {
        $this->ext4             = $ext4;
        $this->apiParas["ext4"]  = $ext4;
    }

    public function getExt4()
    {
        return $this->ext4;
    }

    /**
     * @param String $ext5
     * 预留字段5
     * Required: false
     * Example Value: 
     */
    private $ext5;

    /**
     * @param String $ext5
     * 预留字段5
     * Example Value: 
     */
    public function setExt5($ext5)
    {
        $this->ext5             = $ext5;
        $this->apiParas["ext5"]  = $ext5;
    }

    public function getExt5()
    {
        return $this->ext5;
    }

}