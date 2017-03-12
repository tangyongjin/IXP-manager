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
class IXP_Form_Aipbiz extends IXP_Form
{
    public function init()
    {
        $ip = $this->createElement( 'text', 'ip' );
        $ip->addValidator( 'stringLength', false, array( 1, 20, 'UTF-8' ) )
            ->setRequired( true )
            ->setLabel( 'IP地址' )
            ->setAttrib( 'class', 'span3' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $ip );
        
        $ip_type = $this->createElement( 'text', 'ip_type' );
        $ip_type->addValidator( 'stringLength', false, array( 0, 255, 'UTF-8' ) )
            ->setRequired( false )
            ->setLabel( 'ip_type' )
            ->setAttrib( 'class', 'span3' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $ip_type );
       


         $biz = $this::getPopulatedSelect( 'bizname' )
            ->setRequired( true );
         $biz->setLabel( _( '业务类型' ) );

         
         $biz->addValidator( 'between', false, array( 1, $biz->getAttrib( 'data-maxId' ) ) )
            ->setAttrib( 'class', 'chzn-select' );
         $this->addElement( $biz );



        $this->addElement( self::createSubmitElement( 'submit', _( 'Add' ) ) );
        $this->addElement( $this->createCancelElement() );
    }


       public static function getPopulatedSelect( $name = 'bizname' )
    {
        $sw = new Zend_Form_Element_Select( $name );

         $qb = Zend_Registry::get( 'd2em' )['default']->createQueryBuilder()
            ->select( 'e.id AS id, e.biz_name AS biz_name' )
            ->from( '\\Entities\\A_biz_type', 'e' );



      // populateSelectFromDatabaseQuery( $query, $element, $entity, $indexElement, $displayElements, $orderBy = null, $orderDir = 'ASC' )

      // $maxId = self::populateSelectFromDatabaseQuery( $qb->getQuery(), $sw, '\\Entities\\Infrastructure', 'id', [ 'ixp', 'name' ], 'ixp', 'ASC' );


         $maxId = self::populateSelectFromDatabaseQuery( $qb->getQuery(), $sw,'\\Entities\\A_biz_type','id',[ 'id', 'biz_name' ],null,null );
   


        $sw->setRegisterInArrayValidator( true )
            ->setRequired( false )
            ->setAttrib( 'data-maxId', $maxId )
            ->setLabel( _( 'infrastructure' ) )
            ->setAttrib( 'class', 'chzn-select-deselect' )
            ->setErrorMessages( [ 'Please select an infrastructure' ] );
        // debug(  $sw);
        return $sw;

    }
    
}
