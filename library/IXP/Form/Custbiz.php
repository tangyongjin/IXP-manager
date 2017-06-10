<?php

/*
 * Copyright (C) 2009-2016 Internet Neutral Exchange Association Company Limited By Guarantee.
 * All Rights Reserved.
 *
 * This file is part of IXP Manager.
 *
 * IXP Manager is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, version v2.0 of the License.
 *
 * IXP Manager is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License v2.0
 * along with IXP Manager.  If not, see:
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Form: adding / editing contact groups
 *
 * @author     Barry O'Donovan <barry@opensolutions.ie>
 * @author     Nerijus Barauskas <nerijus@opensolutions.ie>
 * @category   IXP
 * @package    IXP_Form
 * @copyright  Copyright (C) 2009-2016 Internet Neutral Exchange Association Company Limited By Guarantee
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL V2.0
 */
class IXP_Form_Custbiz extends IXP_Form
{
    public function init()
    {

        //customer_id
        //biz_id

         $custid = $this::getPopulatedSelect( 'customer_id' )
            ->setRequired( true );
         $custid->setLabel( _( '客户' ) );

         
         $custid->addValidator( 'between', false, array( 1, $custid->getAttrib( 'data-maxId' ) ) )
            ->setAttrib( 'class', 'chzn-select' );
         $this->addElement( $custid );



         $biz_id = $this::getPopulatedSelect_biz( 'biz_id' )
            ->setRequired( true );
         $biz_id->setLabel( _( '业务类型' ) );

         
         $biz_id->addValidator( 'between', false, array( 1, $custid->getAttrib( 'data-maxId' ) ) )
            ->setAttrib( 'class', 'chzn-select' );
         $this->addElement( $biz_id );



        $this->addElement( self::createSubmitElement( 'submit', _( 'Add' ) ) );
        $this->addElement( $this->createCancelElement() );
    }


       public static function getPopulatedSelect( $name )
    {
        $sw = new Zend_Form_Element_Select( $name );

         $qb = Zend_Registry::get( 'd2em' )['default']->createQueryBuilder()
            ->select( 'e.id AS id, e.name AS name' )
            ->from( '\\Entities\\Customer', 'e' );
         $maxId = self::populateSelectFromDatabaseQuery( $qb->getQuery(), $sw,'\\Entities\\Customer','id',[ 'id', 'name' ],null,null );
         $sw->setRegisterInArrayValidator( true )
            ->setRequired( false )
            ->setAttrib( 'data-maxId', $maxId )
            ->setLabel( _( 'infrastructure' ) )
            ->setAttrib( 'class', 'chzn-select-deselect' )
            ->setErrorMessages( [ 'Please select an infrastructure' ] );
        return $sw;

    } 
    
 
      public static function getPopulatedSelect_biz( $name )
    {
        $sw = new Zend_Form_Element_Select( $name );

         $qb = Zend_Registry::get( 'd2em' )['default']->createQueryBuilder()
            ->select( 'e.id AS id, e.biz_name AS biz_name' )
            ->from( '\\Entities\\A_biz_type', 'e' );
         $maxId = self::populateSelectFromDatabaseQuery( $qb->getQuery(), $sw,'\\Entities\\A_biz_type','id',[ 'id', 'biz_name' ],null,null );
         $sw->setRegisterInArrayValidator( true )
            ->setRequired( false )
            ->setAttrib( 'data-maxId', $maxId )
            ->setLabel( _( 'infrastructure' ) )
            ->setAttrib( 'class', 'chzn-select-deselect' )
            ->setErrorMessages( [ 'Please select an infrastructure' ] );
        return $sw;

    }
    








}
