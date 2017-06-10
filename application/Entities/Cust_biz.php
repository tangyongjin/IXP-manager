<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cust_biz
 */
class Cust_biz
{
    /**
     * @var integer
     */
    private $customer_id;

    /**
     * @var integer
     */
    private $biz_id;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set customer_id
     *
     * @param integer $customerId
     * @return Cust_biz
     */
    public function setCustomerId($customerId)
    {
        $this->customer_id = $customerId;
    
        return $this;
    }

    /**
     * Get customer_id
     *
     * @return integer 
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Set biz_id
     *
     * @param integer $bizId
     * @return Cust_biz
     */
    public function setBizId($bizId)
    {
        $this->biz_id = $bizId;
    
        return $this;
    }

    /**
     * Get biz_id
     *
     * @return integer 
     */
    public function getBizId()
    {
        return $this->biz_id;
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
