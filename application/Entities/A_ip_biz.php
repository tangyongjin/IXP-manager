<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * A_ip_biz
 */
class A_ip_biz
{
    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $ip_type;

    /**
     * @var string
     */
    private $bizname;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set ip
     *
     * @param string $ip
     * @return A_ip_biz
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set ip_type
     *
     * @param string $ipType
     * @return A_ip_biz
     */
    public function setIpType($ipType)
    {
        $this->ip_type = $ipType;
    
        return $this;
    }

    /**
     * Get ip_type
     *
     * @return string 
     */
    public function getIpType()
    {
        return $this->ip_type;
    }

    /**
     * Set bizname
     *
     * @param string $bizname
     * @return A_ip_biz
     */
    public function setBizname($bizname)
    {
        $this->bizname = $bizname;
    
        return $this;
    }

    /**
     * Get bizname
     *
     * @return string 
     */
    public function getBizname()
    {
        return $this->bizname;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $content_type;

    /**
     * @var string
     */
    private $custid;

    /**
     * @var string
     */
    private $tag;


    /**
     * Set content_type
     *
     * @param string $contentType
     * @return A_ip_biz
     */
    public function setContentType($contentType)
    {
        $this->content_type = $contentType;
    
        return $this;
    }

    /**
     * Get content_type
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Set custid
     *
     * @param string $custid
     * @return A_ip_biz
     */
    public function setCustid($custid)
    {
        $this->custid = $custid;
    
        return $this;
    }

    /**
     * Get custid
     *
     * @return string 
     */
    public function getCustid()
    {
        return $this->custid;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return A_ip_biz
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
}