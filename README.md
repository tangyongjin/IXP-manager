# IXP Manager

INEX are pleased to release "IXP Manager" under an open source license (the
GNU Public License V2) which we hope will benefit the wider IXP community,
and especially new and small IXPs looking to expand.

[![Build Status](https://travis-ci.org/inex/IXP-Manager.png?branch=master)](https://travis-ci.org/inex/IXP-Manager) - courtesy of [Travis CI](https://travis-ci.org/inex/IXP-Manager).


## About IXP Manager

IXP Manager is primarily a web application with associated scripts and
utilities which will allow IXPs to manage new customers, provision new
connections / services and monitor traffic usage. It also has a self
contained customer portal allowing IXP members to view their IXP traffic
statistics and a unique tool called My Peering Manager enabling IXP
members to request, manage and track peerings with other members.

IXP Manager is written in PHP using the Zend Framework, the Doctrine2 ORM
and the Smarty templating engine. The project website and source code
can be viewed at https://github.com/inex/IXP-Manager.

INEX is an Internet eXchange Point and Ireland's IP peering hub. It is a 
neutral, industry-owned Association, founded in 1996, that provides IP 
peering facilities for its members. INEX membership is open to all 
organisations that can benefit from peering their IP traffic.

See: https://www.inex.ie/

Authors:
  Barry O'Donovan, Senior Coding Dude
  Nick Hilliard, Junior Coding Dweeb
  Contact us via: operations (at) inex.ie

The copyright statement for IXP Manager was changed on 2016-09-23 to reflect
the fact that INEX changed its formal legal name from "Internet Neutral
Exchange Association Limited" to "Internet Neutral Exchange Association
Company Limited By Guarantee", as required by the Companies Act 2014.

Copyright (C) 2009-2016 Internet Neutral Exchange Association Company Limited By Guarantee.
All Rights Reserved.

 
## Important Note!!!

- You must have some understanding of the ancient language Perl; otherwise, it will be challenging to debug.

-  Do not set the sFlow sampling rate too high, or the results will deviate significantly from the actual situation. It is recommended to debug step by step from low to high.

-  Turn on debug mode; otherwise, debugging will become extremely difficult.

-  It is recommended to start the installation on a clean Linux machine. If you need to install multiple instances, it is recommended to deploy using Docker. The Docker File is located in the Docker/sflow directory.
