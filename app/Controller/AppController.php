<?php


App::uses('Controller', 'Controller');


class AppController extends Controller {
	public $components = array(
			'Session',
			'Auth' => array(
					'loginRedirect' => array(
							'controller' => 'jobs',
							'action' => 'index'
					),
					'logoutRedirect' => array(
							'controller' => 'jobs',
							'action' => 'index',
							'home'
					)
			)
	);

	public function beforeFilter() {
		//Define Public Actions
		$this->Auth->allow('index','browse','register');
	}
	
	public function beforeRender(){
		$this->set('userData', $this->Auth->user());
	}
}
