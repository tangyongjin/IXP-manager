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

         $custid = $this::getPopulatedSelect( 'custid' )
            ->setRequired( true );
         $custid->setLabel( _( '客户' ) );

         
         $custid->addValidator( 'between', false, array( 1, $custid->getAttrib( 'data-maxId' ) ) )
            ->setAttrib( 'class', 'chzn-select' );
         $this->addElement( $custid );




        $ip = $this->createElement( 'text', 'ip' );
        $ip->addValidator( 'stringLength', false, array( 1, 20, 'UTF-8' ) )
            ->setRequired( true )
            ->setLabel( 'IP地址' )
            ->setAttrib( 'class', 'span3' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $ip );
        
        $content_type = $this->createElement( 'text', 'content_type' );
        $content_type->addValidator( 'stringLength', false, array( 0, 255, 'UTF-8' ) )
            ->setRequired( false )
            ->setLabel( 'content_type' )
            ->setAttrib( 'class', 'span3' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $content_type );


        $tag = $this->createElement( 'text', 'tag' );
        $tag->addValidator( 'stringLength', false, array( 0, 255, 'UTF-8' ) )
            ->setRequired( false )
            ->setLabel( 'tag' )
            ->setAttrib( 'class', 'span3' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $tag );
        

       

    


        $this->addElement( self::createSubmitElement( 'submit', _( 'Add' ) ) );
        $this->addElement( $this->createCancelElement() );
    }


       public static function getPopulatedSelect( $name = 'custid' )
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
        // debug(  $sw);
        return $sw;

    }
    
}
