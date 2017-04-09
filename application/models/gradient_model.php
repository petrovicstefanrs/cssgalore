<?php 
	/**
	* 
	*/
	class Gradient_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getGradientNumber()
		{
			$sql="SELECT * FROM `gradients`";
			$query=$this->db->query($sql);
			$num=$query->num_rows();

			return $num;
		}

		public function getGradients($limit,$offset)
		{
			$sql="SELECT * FROM `gradients` LIMIT ? OFFSET ?";
			$query=$this->db->query($sql,array($limit,$offset));
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