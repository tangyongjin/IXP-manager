<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var string
     */
    private $sub_ip;

    /**
     * @var string
     */
    private $msg;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var \DateTime
     */
    private $issuedate;

    /**
     * @var string
     */
    private $fixed;

    /**
     * @var string
     */
    private $fixedby;

    /**
     * @var string
     */
    private $raisedby;

    /**
     * @var integer
     */
    private $custrelate;

    /**
     * @var string
     */
    private $custnamerelate;

    /**
     * @var integer
     */
    private $event_id;

    /**
     * @var string
     */
    private $rt_diff;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set sub_ip
     *
     * @param string $subIp
     * @return Ticket
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
     * Set msg
     *
     * @param string $msg
     * @return Ticket
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    
        return $this;
    }

    /**
     * Get msg
     *
     * @return string 
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return Ticket
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    
        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return Ticket
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    
        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set issuedate
     *
     * @param \DateTime $issuedate
     * @return Ticket
     */
    public function setIssuedate($issuedate)
    {
        $this->issuedate = $issuedate;
    
        return $this;
    }

    /**
     * Get issuedate
     *
     * @return \DateTime 
     */
    public function getIssuedate()
    {
        return $this->issuedate;
    }

    /**
     * Set fixed
     *
     * @param string $fixed
     * @return Ticket
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;
    
        return $this;
    }

    /**
     * Get fixed
     *
     * @return string 
     */
    public function getFixed()
    {
        return $this->fixed;
    }

    /**
     * Set fixedby
     *
     * @param string $fixedby
     * @return Ticket
     */
    public function setFixedby($fixedby)
    {
        $this->fixedby = $fixedby;
    
        return $this;
    }

    /**
     * Get fixedby
     *
     * @return string 
     */
    public function getFixedby()
    {
        return $this->fixedby;
    }

    /**
     * Set raisedby
     *
     * @param string $raisedby
     * @return Ticket
     */
    public function setRaisedby($raisedby)
    {
        $this->raisedby = $raisedby;
    
        return $this;
    }

    /**
     * Get raisedby
     *
     * @return string 
     */
    public function getRaisedby()
    {
        return $this->raisedby;
    }

    /**
     * Set custrelate
     *
     * @param integer $custrelate
     * @return Ticket
     */
    public function setCustrelate($custrelate)
    {
        $this->custrelate = $custrelate;
    
        return $this;
    }

    /**
     * Get custrelate
     *
     * @return integer 
     */
    public function getCustrelate()
    {
        return $this->custrelate;
    }

    /**
     * Set custnamerelate
     *
     * @param string $custnamerelate
     * @return Ticket
     */
    public function setCustnamerelate($custnamerelate)
    {
        $this->custnamerelate = $custnamerelate;
    
        return $this;
    }

    /**
     * Get custnamerelate
     *
     * @return string 
     */
    public function getCustnamerelate()
    {
        return $this->custnamerelate;
    }

    /**
     * Set event_id
     *
     * @param integer $eventId
     * @return Ticket
     */
    public function setEventId($eventId)
    {
        $this->event_id = $eventId;
    
        return $this;
    }

    /**
     * Get event_id
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Set rt_diff
     *
     * @param string $rtDiff
     * @return Ticket
     */
    public function setRtDiff($rtDiff)
    {
        $this->rt_diff = $rtDiff;
    
        return $this;
    }

    /**
     * Get rt_diff
     *
     * @return string 
     */
    public function getRtDiff()
    {
        return $this->rt_diff;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Ticket
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
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