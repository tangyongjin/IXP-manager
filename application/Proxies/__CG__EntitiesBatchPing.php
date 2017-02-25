<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class BatchPing extends \Entities\BatchPing implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setNote($note)
    {
        $this->__load();
        return parent::setNote($note);
    }

    public function getNote()
    {
        $this->__load();
        return parent::getNote();
    }

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUpdated($updated)
    {
        $this->__load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function setFixxx($fixxx)
    {
        $this->__load();
        return parent::setFixxx($fixxx);
    }

    public function getFixxx()
    {
        $this->__load();
        return parent::getFixxx();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCustid($custid)
    {
        $this->__load();
        return parent::setCustid($custid);
    }

    public function getCustid()
    {
        $this->__load();
        return parent::getCustid();
    }

    public function setSubIp($subIp)
    {
        $this->__load();
        return parent::setSubIp($subIp);
    }

    public function getSubIp()
    {
        $this->__load();
        return parent::getSubIp();
    }

    public function setPacketloss($packetloss)
    {
        $this->__load();
        return parent::setPacketloss($packetloss);
    }

    public function getPacketloss()
    {
        $this->__load();
        return parent::getPacketloss();
    }

    public function setMinT($minT)
    {
        $this->__load();
        return parent::setMinT($minT);
    }

    public function getMinT()
    {
        $this->__load();
        return parent::getMinT();
    }

    public function setMaxT($maxT)
    {
        $this->__load();
        return parent::setMaxT($maxT);
    }

    public function getMaxT()
    {
        $this->__load();
        return parent::getMaxT();
    }

    public function setAvgT($avgT)
    {
        $this->__load();
        return parent::setAvgT($avgT);
    }

    public function getAvgT()
    {
        $this->__load();
        return parent::getAvgT();
    }

    public function setMdev($mdev)
    {
        $this->__load();
        return parent::setMdev($mdev);
    }

    public function getMdev()
    {
        $this->__load();
        return parent::getMdev();
    }

    public function setPingdate($pingdate)
    {
        $this->__load();
        return parent::setPingdate($pingdate);
    }

    public function getPingdate()
    {
        $this->__load();
        return parent::getPingdate();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'custid', 'sub_ip', 'packetloss', 'min_t', 'max_t', 'avg_t', 'mdev', 'pingdate', 'id');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}