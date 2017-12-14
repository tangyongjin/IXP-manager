<?php


class NocController extends IXP_Controller_Action
{

    public function indexAction()
    {
        if( !$this->getAuth()->hasIdentity() )
            $this->redirectAndEnsureDie( 'auth/login' );
        
        if( $this->getUser()->getPrivs() == \Entities\User::AUTH_SUPERUSER )
            $this->_redirect( 'admin/index' );
        else if( $this->getUser()->getPrivs() == \Entities\User::AUTH_CUSTADMIN )
            $this->_redirect( 'contact/list' );
        else
            $this->forward( 'index', 'dashboard' );
    }

    public function controllerDisabledAction()
    {
        $this->view->display( 'index/controller-disabled.tpl' );
    }

    public function aboutAction()
    {
        $this->view->apachever = str_replace("Apache/", "", $_SERVER['SERVER_SOFTWARE']);
        $this->view->phpver    = phpversion();
        $this->view->dbver     = $this->getD2EM()->getConnection()->query( "SELECT VERSION() AS V" )->fetch()['V'];
    }

    public function dockerAction()
    {
        $this->view->apachever = str_replace("Apache/", "", $_SERVER['SERVER_SOFTWARE']);
        $this->view->phpver    = phpversion();
        $this->view->dbver     = $this->getD2EM()->getConnection()->query( "SELECT VERSION() AS V" )->fetch()['V'];
    }


    public function birdAction()
    {
    
        // will show  views/noc/bird.phtml
        // $this->view->apachever = str_replace("Apache/", "", $_SERVER['SERVER_SOFTWARE']);
        // $this->view->phpver    = phpversion();
        // $this->view->dbver     = $this->getD2EM()->getConnection()->query( "SELECT VERSION() AS V" )->fetch()['V'];
    
    }

    public function sflowtrendAction()
    {
        // will show  views/noc/sflowtrend.phtml
        // $this->view->apachever = str_replace("Apache/", "", $_SERVER['SERVER_SOFTWARE']);
        // $this->view->phpver    = phpversion();
        // $this->view->dbver     = $this->getD2EM()->getConnection()->query( "SELECT VERSION() AS V" )->fetch()['V'];
    
    }


    public function regeneratemrtgAction()
    {
        
    }

    public function refreshmacAction()
    {
        
    }



}
