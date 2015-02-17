<?php

	/**
	* Chuntime Controller
	* 
	* @author chaudanghuy@gmail.com
	**/

	App::uses('AppController', 'Controller');	
	App::uses('Pusher', 'Vendor');

	class EventsController extends AppController {		

		private $app_id = '107345';

		private $app_key = '649596740db2aad4ad9b';

		private $app_secret = '1b0b1395e64e7504b823';

		public function beforeFilter() {
			$this->layout = 'chuntime';			
		}

		/**
		* List all events
		*/
		public function index() {					
			// [TODO] harcode user id
			$userId = 1;
									
			$events = $this->Event->find('all', array(
					'conditions' => array('user_id' => 1),
					'order' => array('Event.id desc'),
				));			
						
			if (!empty($events)) {
				$this->set('events', $events);
			}			
		}

		/**
		 * Add new event
		*/
		public function add() {						
			if ($this->request->is('post')) {
				$this->Event->create();				
				// [TODO] hardcode user id
				$this->request->data['Events']['user_id'] = 1;
				$latlon = $this->request->data['Events']['latitude'].",".$this->request->data['Events']['longitude'];
				$this->request->data['Events']['location'] = "http://maps.googleapis.com/maps/api/staticmap?center=$latlon&zoom=14&size=450x150&markers=color:red|$latlon&sensor=false";
				$this->request->data['Events']['address'] = $this->getLocation($this->request->data['Events']['latitude'], $this->request->data['Events']['longitude']);
				if ($this->Event->save($this->request->data['Events'])) {
					$this->Session->setFlash(__('Create event success!'));	
					$this->redirect('index');
				} else {
					$this->Session->setFlash(__('Create event fail!'));
				}
			}			
		}

		/**
		* Delete event
		*/
		public function delete() {
			
		}		

		/**
		* Get location
		* 
		* @param double $lat
		* @param double $long
		* @return string $location
		* 
		**/
		private function getLocation($lat = null, $long = null) {
			//[TODO] for testing only
			$lat = !empty($lat) ? $lat : "10.7710849";
			$long = !empty($long) ? $long : "106.6810622";

			$url = sprintf("http://maps.googleapis.com/maps/api/geocode/json?latlng=%s,%s&sensor=false", $lat, $long);

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);			
			// receive server response ...
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);

			$obj = json_decode($server_output);

			$results = array_shift($obj->results);

			curl_close ($ch);

			return $results->formatted_address;
		}

		public function test() {
			$pusher = new Pusher($this->app_key, $this->app_secret, $this->app_id);

			$data['message'] = 'hello world';
			$pusher->trigger('test_channel', 'my_event', $data);
		}
	}