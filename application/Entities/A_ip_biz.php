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
}