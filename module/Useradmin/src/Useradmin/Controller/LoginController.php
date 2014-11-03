<?php

namespace Useradmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{
    protected $storage;
    protected $authservice;
    
    public function getAuthService()
    {
        if (!$this->authservice)
        {
            $this->authservice=  $this->getServiceLocator()->get('AuthService');
        }
        
        return $this->authservice;
    }
    
    public function Logoutaction()
    {
        $this->getAuthService()->clearIdentity();
        return $this->redirect()->toRoute('home');
        // original code : return $this->redirect()->toRoute('/useradmin/login');
        
    }

        public function indexAction()
    {
        $form=  $this->getServiceLocator()->get('Loginform');
        $viewmodel=new ViewModel(array('form'=>$form));
        return new ViewModel();
    }
    
    public function processAction()
    {
        if (!$this->request->ispost())
        {
            return $this->redirect()->toRoute('useradmin/login');
        }
        $post = $this->request->getPost();
        $form = $this->getServiceLocator()->get('Loginform');
        
        // put $form->setData($post) code here
        
        
    }
    
    public function confirmAction()
    {
        // Changed the menu and layout
        $this->layout('layout/useradmin');
        
        // This part of the code is to be activated later, after we understand what it does.
        /*
        $user_email = $this->getAuthService()->getStorage()->read();
        $viewModel = new ViewModel(array(
            'user_email' => $user_email
        ));
        return $viewModel;
         * 
         */
    }
}
