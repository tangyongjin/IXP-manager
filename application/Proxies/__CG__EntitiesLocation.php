<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Location extends \Entities\Location implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setShortname($shortname)
    {
        $this->__load();
        return parent::setShortname($shortname);
    }

    public function getShortname()
    {
        $this->__load();
        return parent::getShortname();
    }

    public function setTag($tag)
    {
        $this->__load();
        return parent::setTag($tag);
    }

    public function getTag()
    {
        $this->__load();
        return parent::getTag();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setNocphone($nocphone)
    {
        $this->__load();
        return parent::setNocphone($nocphone);
    }

    public function getNocphone()
    {
        $this->__load();
        return parent::getNocphone();
    }

    public function setNocfax($nocfax)
    {
        $this->__load();
        return parent::setNocfax($nocfax);
    }

    public function getNocfax()
    {
        $this->__load();
        return parent::getNocfax();
    }

    public function setNocemail($nocemail)
    {
        $this->__load();
        return parent::setNocemail($nocemail);
    }

    public function getNocemail()
    {
        $this->__load();
        return parent::getNocemail();
    }

    public function setOfficephone($officephone)
    {
        $this->__load();
        return parent::setOfficephone($officephone);
    }

    public function getOfficephone()
    {
        $this->__load();
        return parent::getOfficephone();
    }

    public function setOfficefax($officefax)
    {
        $this->__load();
        return parent::setOfficefax($officefax);
    }

    public function getOfficefax()
    {
        $this->__load();
        return parent::getOfficefax();
    }

    public function setOfficeemail($officeemail)
    {
        $this->__load();
        return parent::setOfficeemail($officeemail);
    }

    public function getOfficeemail()
    {
        $this->__load();
        return parent::getOfficeemail();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function addCabinet(\Entities\Cabinet $cabinets)
    {
        $this->__load();
        return parent::addCabinet($cabinets);
    }

    public function removeCabinet(\Entities\Cabinet $cabinets)
    {
        $this->__load();
        return parent::removeCabinet($cabinets);
    }

    public function getCabinets()
    {
        $this->__load();
        return parent::getCabinets();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function setPdbFacilityId($pdbFacilityId)
    {
        $this->__load();
        return parent::setPdbFacilityId($pdbFacilityId);
    }

    public function getPdbFacilityId()
    {
        $this->__load();
        return parent::getPdbFacilityId();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'pdb_facility_id', 'name', 'shortname', 'tag', 'address', 'nocphone', 'nocfax', 'nocemail', 'officephone', 'officefax', 'officeemail', 'notes', 'id', 'Cabinets');
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