#!/usr/bin/env php
<?php

/**
 * Copyright (C) 2009-2016 Internet Neutral Exchange Association Company Limited By Guarantee.
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


//ini_set('memory_limit', -1);

date_default_timezone_set('Europe/Dublin');
mb_internal_encoding('UTF-8');
mb_language('uni');
setlocale(LC_ALL, "en_IE.utf8");

require_once( dirname( __FILE__ ) . '/utils.inc' );
define( 'APPLICATION_ENV', scriptutils_get_application_env() );

define('APPLICATION_PATH', realpath( dirname(__FILE__) . '/../application' ) );


set_include_path( implode( PATH_SEPARATOR, array(
    realpath( APPLICATION_PATH . '/../library' ),
    get_include_path(),
)));

require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

Zend_Registry::set( 'bootstrap', $application->getBootstrap() );

$application->getBootstrap()->bootstrap( 'OSSAutoLoader' );
$application->getBootstrap()->bootstrap( 'doctrine2' );

$em = $application->getBootstrap()->getResource( 'doctrine2' );
$config = $application->getOption( 'resources' );

echo "Installing fixtures\n";


#####################################################################
###
### MODIFY YOUR FIXTURES HERE
###
###

### First you need to create an initial IXP object for your IXP

$ixp = new \Entities\IXP;
$ixp->setName( "Somecity Internet Exchange Point" );
$ixp->setShortname( "SIEP" );
$ixp->setAddress1( "5 Somewhere" );
$ixp->setAddress2( "Somebourogh" );
$ixp->setAddress3( "Dublin" );
$ixp->setAddress4( "D4" );
$ixp->setCountry( 'IE' );

$em->persist( $ixp );


### An IXP has one or more infrastructures. An infrastructure is an
### interconnected group of switches. IXPs such as INEX and LINX (as
### examples) run two infrastructures on different hardware for
### resiliency. Define your one or more infrastructures here.
### (or you can also add these later in the application)

$infra1 = new \Entities\Infrastructure;
$infra1->setName( "Infrastructure #1" );
$infra1->setShortname( "#1" );
$infra1->setIsPrimary( true );  // only one infrastructure can be primary!
$infra1->setIXP( $ixp );
$em->persist( $infra1 );
$ixp->addInfrastructure( $infra1 );

// $infra2 = new \Entities\Infrastructure;
// $infra2->setName( "Infrastructure #2" );
// $infra2->setShortname( "#2" );
// $infra2->setIXP( $ixp );
// $infra2->setIsPrimary( false );
// $em->persist( $infra2 );
// $ixp->addInfrastructure( $infra2 );


### Now you need a "customer" object for your own IXP.
### Alter the following to suit

$c = new \Entities\Customer;

$c->setName( "Somecity Internet Exchange Point" );
$c->setAbbreviatedName( 'SIEP' ); // shorter name for graphs, etc
$c->setShortname( "siep" );        // lowercase abbreviation (e.g. inex/ linx / lonap)
$c->setAutsys( 12345 );            // your ASN
$c->setMaxprefixes( 1000 );        // set appropriately if you peer with other members on the
                                   // exchange. e.g friendly member providing transit

$c->setPeeringemail( 'peering@lonap.net' );
$c->setPeeringmacro( 'AS-SIEP' );
$c->setPeeringmacrov6( 'AS-SIEP6' );
$c->setPeeringpolicy( \Entities\Customer::PEERING_POLICY_MANDATORY );
$c->setMD5Support( \Entities\Customer::MD5_SUPPORT_YES );

$c->setIsReseller( false );

$c->setNocphone( '+353 1 123 4567' );
$c->setNoc24hphone( '+353 1 123 4567' );
$c->setNocfax( '+353 1 123 4568' );
$c->setNocemail( 'noc@siep.com' );
$c->setNochours( \Entities\Customer::NOC_HOURS_24x7 );
$c->setNocwww( 'http://www.siep.com/noc/' );

$c->setCorpwww( 'http://www.siep.com/' );

$c->setDatejoin( new DateTime() );

$c->setStatus( \Entities\Customer::STATUS_NORMAL );

$c->setActivepeeringmatrix( true );

$c->setType( \Entities\Customer::TYPE_INTERNAL );        // do not change this
$c->setCreated( new DateTime() );

$em->persist( $c );


// and associate it with your IXP
$ixp->addCustomer( $c );
$c->addIXP( $ixp );



$crd = new \Entities\CompanyRegisteredDetail();
$crd->setRegisteredName( 'Somecity Internet Exchange Point Limited' );
$crd->setCompanyNumber( '123456' );
$crd->setJurisdiction( 'Ireland' );
$crd->setAddress1( '5 Somewhere' );
$crd->setTownCity( 'Dublin' );
$crd->setPostcode( 'D4' );
$crd->setCountry( 'IE' );

$em->persist( $crd );

$c->setRegistrationDetails( $crd );

$cbd = new \Entities\CompanyBillingDetail();
$cbd->setBillingAddress1( 'c/o The Bill Payers' );
$cbd->setBillingAddress2( 'Money House, Moneybags Street' );
$cbd->setBillingTownCity( 'Dublin' );
$cbd->setBillingPostcode( 'D4' );
$cbd->setBillingCountry( 'IE' );
$cbd->setPurchaseOrderRequired( false );

$em->persist( $cbd );

$c->setBillingDetails( $cbd );

// now you need your admin user!

$contact = new \Entities\Contact();

$contact->setCustomer( $c );
$contact->setName( 'Joe Bloggs' );
$contact->setPosition( 'Master of the Universe' );
$contact->setEmail( 'joe@siep.com' );
$contact->setPhone( '+353 86 123 4567' );
$contact->setMobile( '+353 1 123 4567' );
$contact->setFacilityaccess( true );
$contact->setMayauthorize( true );
$contact->setLastupdated( new \DateTime() );
$contact->setLastupdatedby( 1 );
$contact->setCreator( 1 );
$contact->setCreated( new \DateTime() );
$contact->setNotes( "" );

$em->persist( $contact );

$u = new \Entities\User();

$contact->setUser( $u );

$u->setUsername( 'jason' );

// Please choose a secure password below (in place of 'letmein1') or
// immeidately change your password when logged in for the first time.
$u->setPassword(
    OSS_Auth_Password::hash( 'yang.liu', $config['auth']['oss'] )
);

$u->setEmail( $contact->getEmail() );
$u->setPrivs( \Entities\User::AUTH_SUPERUSER );
$u->setDisabled( false );
$u->setCreator( $u->getUsername() );
$u->setCreated( new \DateTime() );
$u->setCustomer( $c );

$em->persist( $u );

$c->setCreator( $u->getUsername() );

$em->flush();



#####################################################################
###
### OTHER RECOMMENDED FIXTURES
###
### No need to edit beyond this point
###

## Vendors

$vendors = [
    [ "Cisco Systems", 'Cisco', 'cisco' ],
    [ "Foundry Networks", 'Brocade', 'brocade' ],
    [ "Extreme Networks", 'Extreme', 'extreme' ],
    [ "Force10 Networks", 'Force10', 'force10' ],
    [ "Glimmerglass", 'Glimmerglass', 'glimmerglass' ],
    [ "Allied Telesyn", 'AlliedTel', 'alliedtel' ],
    [ "Enterasys", 'Enterasys', 'enterasys' ],
    [ "Dell", 'Dell', 'dell' ],
    [ "Hitachi Cable", 'Hitachi', 'hitachi' ],
    [ "MRV", 'MRV', 'mrv' ],
    [ "Transmode", 'Transmode', 'transmode' ],
    [ "Brocade", 'Brocade', 'brocade' ],
    [ "Juniper Networks", 'Juniper', 'juniper' ],
    [ "Cumulus Networks", 'Cumulus', 'cumulus' ],
    [ "Linux", 'Linux', 'linux' ],
    [ "Hewlett-Packard", 'HP', 'hp' ]
];

foreach( $vendors as $vendor )
{
    $e = new \Entities\Vendor();
    $e->setName(       $vendor[0] );
    $e->setShortname(  $vendor[1] );
    $e->setNagiosName( $vendor[2] );
    $em->persist( $e );
}

$em->flush();


## IRRDBs

$irrdbs = [

    [
        'host'     => 'whois.ripe.net',
        'protocol' => 'ripe',
        'source'   => 'RIPE',
        'notes'    => 'RIPE Query from RIPE Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'RADB',
        'notes'    => 'RADB Query from RADB Database'
    ],

    [
        'host'     => 'whois.lacnic.net',
        'protocol' => 'ripe',
        'source'   => 'LACNIC',
        'notes'    => 'LACNIC Query from LACNIC Database'
    ],

    [
        'host'     => 'whois.afrinic.net',
        'protocol' => 'ripe',
        'source'   => 'AFRINIC',
        'notes'    => 'AFRINIC Query from AFRINIC Database'
    ],

    [
        'host'     => 'whois.apnic.net',
        'protocol' => 'ripe',
        'source'   => 'APNIC',
        'notes'    => 'APNIC Query from APNIC Database'
    ],

    [
        'host'     => 'rr.level3.net',
        'protocol' => 'ripe',
        'source'   => 'LEVEL3',
        'notes'    => 'Level3 Query from Level3 Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'ARIN',
        'notes'    => 'ARIN Query from RADB Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'RADB,ARIN',
        'notes'    => 'RADB+ARIN Query from RADB Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'ALTDB',
        'notes'    => 'ALTDB Query from RADB Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'RADB,RIPE',
        'notes'    => 'RADB+RIPE Query from RADB Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'RADB,APNIC,ARIN',
        'notes'    => 'RADB+APNIC+ARIN Query from RADB Database'
    ],

    [
        'host'     => 'whois.radb.net',
        'protocol' => 'irrd',
        'source'   => 'RIPE,ARIN',
        'notes'    => 'RIPE+ARIN Query from RADB Database'
    ]

];



foreach( $irrdbs as $irrdb )
{
    $e = new \Entities\IRRDBConfig();
    $e->setHost(     $irrdb['host']     );
    $e->setProtocol( $irrdb['protocol'] );
    $e->setSource(   $irrdb['source']   );
    $e->setNotes( $irrdb['notes']       );
    $em->persist( $e );
}

$em->flush();

## Contact groups

$contactRoles = [ 'Billing', 'Technical', 'Admin', 'Marketing' ];

foreach( $contactRoles as $name )
{
    $e = new \Entities\ContactGroup();
    $e->setName( $name );
    $e->setDescription( sprintf( "Contact role for %s matters", strtolower( $name ) ) );
    $e->setType( \Entities\ContactGroup::TYPE_ROLE );
    $e->setActive( true );
    $e->setLimitedTo( 0 );
    $e->setCreated( new DateTime() );
    $em->persist( $e );
}

$em->flush();


echo "Fixtures installed successfully\n";
