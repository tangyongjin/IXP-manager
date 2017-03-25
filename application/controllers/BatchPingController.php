<?php

        
class BatchPingController extends IXP_Controller_FrontEnd
{
    /**
     * This function sets up the frontend controller
     */
    protected function _feInit()
    {
      //  $this->assertPrivilege( \Entities\User::AUTH_SUPERUSER );
    
        $this->view->feParams = $this->_feParams = (object)[
            'entity'        => '\\Entities\\BatchPing',
             'form'          => 'IXP_Form_ContactGroup',
            'pagetitle'     => 'BatchPing',
        
            'titleSingular' => 'BatchPing',
            'nameSingular'  => 'ping item',
        
            'defaultAction' => 'list',                    // OPTIONAL; defaults to 'list'
        
            'listOrderBy'    => 'id',
            'listOrderByDir' => 'DESC',
        
            'listColumns'    => [
                'id'        => [ 'title' => '序列号', 'display' => true ],
               

             'pingdate'       => [
                    'title'     => 'pingdate',
                    'type'      => self::$FE_COL_TYPES[ 'DATETIME' ]
                ],


                'custname'      => 'custname',
                'sub_ip' =>'sub_ip',
                'packetloss'=>'packetloss',
                'min_t'=>'min_t',
                'max_t'=>'max_t',
                'avg_t'=>'avg_t',
            ]
        ];
    
        // display the same information in the view as the list
        $this->_feParams->viewColumns = array_merge(
            $this->_feParams->listColumns,
            [
                'active'      => 'Active',
                'limit'       => 'Limit',
                'description' => 'Description'
            ]
        );
    }
    
    


    public function list2Action()
{
    // $this->listGetData();

    // $this->view->viewPreamble  = $this->_resolveTemplate( 'view-preamble.phtml'  );
    // $this->view->viewPostamble = $this->_resolveTemplate( 'view-postamble.phtml' );
    // $this->view->viewToolbar   = $this->_resolveTemplate( 'view-toolbar.phtml' );
    // $this->view->viewScript    = $this->_resolveTemplate( 'js/view.js' );
    // $this->_display( 'view.phtml' );

}

    /**
     * Provide array of objects for the listAction and viewAction
     *
     * @param int $id The `id` of the row to load for `viewAction`. `null` if `listAction`
     */
    protected function listGetData( $id = null )
    {
 


        $conn = $this->getD2EM()->getConnection();

        //$sql = " select IF(packetloss>0,'red', 'blue') as color,id,pingdate,id as custname,sub_ip,packetloss,min_t,max_t,avg_t,mdev   ";
        

        $sql=" select IF(packetloss>0,'red', 'black') as color,batchping.id,pingdate,name as custname,sub_ip,packetloss,min_t,max_t,avg_t,mdev   
       from batchping 
       LEFT JOIN cust 
       on sub_ip=peeringmacro
       
       where  
       pingdate < DATE_SUB(CURDATE(),INTERVAL -1 DAY)
       
       order by id desc limit 100  ";

        $stmt = $conn->prepare($sql);
         
        $stmt->execute();
        return  $stmt->fetchAll();
 
  
    }
    
     /**
     * Post process hook that can be overridden by subclasses for add and edit actions.
     *
     * This is called immediately after the initstantiation of the form object and, if
     * editing, includes the Doctrine2 entity `$object`.
     *
     * If you need to have, for example, edit values set in the form, then use the
     * `addPrepare()` hook rather than this one.
     *
     * @see addPrepare()
     * @param OSS_Form $form The form object
     * @param \Entities\ContactGroup $object The Doctrine2 entity (being edited or blank for add)
     * @param bool $isEdit True of we are editing an object, false otherwise
     * @param array $options Options passed onto Zend_Form
     * @param string $cancelLocation Where to redirect to if 'Cancal' is clicked
     */
    protected function formPostProcess( $form, $object, $isEdit, $options = null, $cancelLocation = null )
    {
        return;
        //$form->getElement( 'type' )->setMultiOptions( $this->_options['contact']['group']['types'] );
    }
    
    
    /**
     * Postvalidation hook for add / edit
     *
     * @param OSS_Form $form The Send form object
     * @param \Entities\ContactGroup $group The Doctrine2 contact group entity
     * @param bool $isEdit True if we are editing, otherwise false
     * @return bool If false, the form is not processed
     */
    protected function addPostValidate( $form, $group, $isEdit )
    {
        return false;
     }
    
}

