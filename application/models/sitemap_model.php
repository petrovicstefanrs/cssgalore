<?php 
	/**
	* 
	*/
	class Sitemap_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		/* ------------------------------------------------------------ Sitemap ------------------------------------------------------------ */

		public function getSubSections()
		{
			$sql="SELECT * FROM `subsection` sub INNER JOIN sec_subsec ss ON sub.subsection_id=ss.subsection_id";
			$query=$this->db->query($sql);
			$res=$query->result_array();
			if ($query->num_rows()==0) {
				return $res;
			}
			else{
				return $res;
			}	
		}public function getSections()
		{
			$sql="SELECT * FROM `section`";
			$query=$this->db->query($sql);
			$res=$query->result_array();
			if ($query->num_rows()==0) {
				return $res;
			}
			else{
				return $res;
			}	
		}

		// /* New Moderator Auth */
		
		// public function getSubSections()
		// {
		// 	$sql="SELECT * FROM `subsection` sub INNER JOIN sec_subsec ss ON sub.subsection_id=ss.subsection_id INNER JOIN `section` sec ON sec.section_id=ss.section_id";
		// 	$query=$this->db->query($sql);
		// 	$res=$query->result();
		// 	if ($query->num_rows()!=1) {
		// 		return false;
		// 	}
		// 	else{
		// 		return $res;
		// 	}		
		// }
	}
?>
