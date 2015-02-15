<?php

	/**
	* Chuntime Controller
	* 
	* @author chaudanghuy@gmail.com
	**/

	App::uses('AppController', 'Controller');	

	class EventsController extends AppController {		

		public function beforeFilter() {
			$this->layout = 'chuntime';			
		}

		/**
		* List all events
		*/
		public function index() {					
			// [TODO] harcode user id
			$userId = 1;
									
			$events = $this->Event->find('all', array('conditions' => array('user_id' => 1)));			
						
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
				if ($this->Event->save($this->request->data['Events'])) {
					$this->Session->setFlash(__('Create event success!'));					
				} else {
					$this->Session->setFlash(__('Create event fail!'));
				}
			}			
		}

		/**
		* 
		*/
		public function delete() {
			
		}

		//[TODO]
		function get_time_difference_php($created_time)
		 {
		        date_default_timezone_set('Asia/Calcutta'); //Change as per your default time
		        $str = strtotime($created_time);
		        $today = strtotime(date('Y-m-d H:i:s'));

		        // It returns the time difference in Seconds...
		        $time_differnce = $today-$str;

		        // To Calculate the time difference in Years...
		        $years = 60*60*24*365;

		        // To Calculate the time difference in Months...
		        $months = 60*60*24*30;

		        // To Calculate the time difference in Days...
		        $days = 60*60*24;

		        // To Calculate the time difference in Hours...
		        $hours = 60*60;

		        // To Calculate the time difference in Minutes...
		        $minutes = 60;

		        if(intval($time_differnce/$years) > 1)
		        {
		            return intval($time_differnce/$years)." years ago";
		        }else if(intval($time_differnce/$years) > 0)
		        {
		            return intval($time_differnce/$years)." year ago";
		        }else if(intval($time_differnce/$months) > 1)
		        {
		            return intval($time_differnce/$months)." months ago";
		        }else if(intval(($time_differnce/$months)) > 0)
		        {
		            return intval(($time_differnce/$months))." month ago";
		        }else if(intval(($time_differnce/$days)) > 1)
		        {
		            return intval(($time_differnce/$days))." days ago";
		        }else if (intval(($time_differnce/$days)) > 0) 
		        {
		            return intval(($time_differnce/$days))." day ago";
		        }else if (intval(($time_differnce/$hours)) > 1) 
		        {
		            return intval(($time_differnce/$hours))." hours ago";
		        }else if (intval(($time_differnce/$hours)) > 0) 
		        {
		            return intval(($time_differnce/$hours))." hour ago";
		        }else if (intval(($time_differnce/$minutes)) > 1) 
		        {
		            return intval(($time_differnce/$minutes))." minutes ago";
		        }else if (intval(($time_differnce/$minutes)) > 0) 
		        {
		            return intval(($time_differnce/$minutes))." minute ago";
		        }else if (intval(($time_differnce)) > 1) 
		        {
		            return intval(($time_differnce))." seconds ago";
		        }else
		        {
		            return "few seconds ago";
		        }
		  }
	}