<?php
/**
 * Users content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::import('Vendor', 'Facebook', array('file' => 'Facebook'. DS . 'facebook.php'));

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
    
    private $config;
    
    private $facebook;
    
    private $userId;

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function beforeFilter()
	{
	  parent::beforeFilter();
      
      $this->config = array(
              'appId' => '340634206136809',
              'secret' => 'cff23bb5814aa039dc2abbe622de750b',
              'fileUpload' => false, // optional
              'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
          );		       
          
      $this->facebook = new Facebook($this->config);      
        
      $this->userId = $this->facebook->getUser();                             
	}
	
	public function index() {
	   $this->layout = 'login';
	   //[TODO] bring User authentication to function beforeFilter //
	   if ($this->userId) {
	       $this->redirect('feed');
	   } 
       
       $loginUrl = $this->facebook->getLoginUrl();
       
       $this->set('loginUrl', $loginUrl);
	}		
	
	public function feed() {
	   //[TODO] bring User authentication to function beforeFilter //
	   if ($this->userId) {
	       $userProfile = $this->facebook->api('/me','GET');
           echo '<pre>';
           print_r($userProfile);
           echo '</pre>';
	   } else {
	       $this->redirect('index');
	   }
	}	       	
}
