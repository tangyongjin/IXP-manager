<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * BatchPing
 */
class BatchPing
{
    /**
     * @var integer
     */
    private $custid;

    /**
     * @var string
     */
    private $sub_ip;

    /**
     * @var string
     */
    private $packetloss;

    /**
     * @var float
     */
    private $min_t;

    /**
     * @var float
     */
    private $max_t;

    /**
     * @var float
     */
    private $avg_t;

    /**
     * @var float
     */
    private $mdev;

    /**
     * @var \DateTime
     */
    private $pingdate;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set custid
     *
     * @param integer $custid
     * @return BatchPing
     */
    public function setCustid($custid)
    {
        $this->custid = $custid;
    
        return $this;
    }

    /**
     * Get custid
     *
     * @return integer 
     */
    public function getCustid()
    {
        return $this->custid;
    }

    /**
     * Set sub_ip
     *
     * @param string $subIp
     * @return BatchPing
     */
    public function setSubIp($subIp)
    {
        $this->sub_ip = $subIp;
    
        return $this;
    }

    /**
     * Get sub_ip
     *
     * @return string 
     */
    public function getSubIp()
    {
        return $this->sub_ip;
    }

    /**
     * Set packetloss
     *
     * @param string $packetloss
     * @return BatchPing
     */
    public function setPacketloss($packetloss)
    {
        $this->packetloss = $packetloss;
    
        return $this;
    }

    /**
     * Get packetloss
     *
     * @return string 
     */
    public function getPacketloss()
    {
        return $this->packetloss;
    }

    /**
     * Set min_t
     *
     * @param float $minT
     * @return BatchPing
     */
    public function setMinT($minT)
    {
        $this->min_t = $minT;
    
        return $this;
    }

    /**
     * Get min_t
     *
     * @return float 
     */
    public function getMinT()
    {
        return $this->min_t;
    }

    /**
     * Set max_t
     *
     * @param float $maxT
     * @return BatchPing
     */
    public function setMaxT($maxT)
    {
        $this->max_t = $maxT;
    
        return $this;
    }

    /**
     * Get max_t
     *
     * @return float 
     */
    public function getMaxT()
    {
        return $this->max_t;
    }

    /**
     * Set avg_t
     *
     * @param float $avgT
     * @return BatchPing
     */
    public function setAvgT($avgT)
    {
        $this->avg_t = $avgT;
    
        return $this;
    }

    /**
     * Get avg_t
     *
     * @return float 
     */
    public function getAvgT()
    {
        return $this->avg_t;
    }

    /**
     * Set mdev
     *
     * @param float $mdev
     * @return BatchPing
     */
    public function setMdev($mdev)
    {
        $this->mdev = $mdev;
    
        return $this;
    }

    /**
     * Get mdev
     *
     * @return float 
     */
    public function getMdev()
    {
        return $this->mdev;
    }

    /**
     * Set pingdate
     *
     * @param \DateTime $pingdate
     * @return BatchPing
     */
    public function setPingdate($pingdate)
    {
        $this->pingdate = $pingdate;
    
        return $this;
    }

    /**
     * Get pingdate
     *
     * @return \DateTime 
     */
    public function getPingdate()
    {
        return $this->pingdate;
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