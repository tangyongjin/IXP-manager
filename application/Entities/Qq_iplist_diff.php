<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qq_iplist_diff
 */
class Qq_iplist_diff
{
    /**
     * @var string
     */
    private $diff;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set diff
     *
     * @param string $diff
     * @return Qq_iplist_diff
     */
    public function setDiff($diff)
    {
        $this->diff = $diff;
    
        return $this;
    }

    /**
     * Get diff
     *
     * @return string 
     */
    public function getDiff()
    {
        return $this->diff;
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