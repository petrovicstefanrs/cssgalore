<?php 
	/**
	* 
	*/
	class Lorem_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getWords()
		{
			$sql="SELECT * FROM `loremipsum`";
			$query=$this->db->query($sql);
			$res=$query->result_array();
			if ($query->num_rows()==0) {
				return false;
			}
			else{
				return $res;
			}	
		}
	}
?>