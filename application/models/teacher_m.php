<?php 

class Teacher_m extends MY_Model {
	
		protected $_table_name = 'teacher';
		protected $_primary_key = 'teacher_id';
		protected $_primary_filter = 'intval';
		protected $_order_by = 'teacher_id';
		public $_rules = array();
		protected $_timestamps = FALSE;
}

?>