<?php

        

class IpBizController extends IXP_Controller_FrontEnd
{
    /**
     * This function sets up the frontend controller
     */
    protected function _feInit()
    {
    
        $this->view->feParams = $this->_feParams = (object)[
            'entity'        => '\\Entities\\A_ip_biz',
             'form'          => 'IXP_Form_ContactGroup',
            'pagetitle'     => 'ip_biz',
        
            'titleSingular' => 'ip_biz',
            'nameSingular'  => 'ip_biz item',
        
            'defaultAction' => 'list',                    // OPTIONAL; defaults to 'list'
        
            'listOrderBy'    => 'id',
            'listOrderByDir' => 'DESC',
        
            'listColumns'    => [
                'id'        => [ 'title' => '序列号', 'display' => true ],
                'custname'      => 'custname',
                'ip' =>'ip',
                'ip_type'=>'ip_type',
                'bizname'=>'bizname'
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
    
    


   
    protected function listGetData( $id = null )
    {
        $conn = $this->getD2EM()->getConnection();
        $sql.= "select  * from a_ip_biz ";
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

