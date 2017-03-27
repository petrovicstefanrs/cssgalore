<?php 
	/**
	* 
	*/
	class Changelog_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getChangeLog()
		{
			$sql="SELECT changelog_id, DATE_FORMAT(changelog_date, '%d/%m/%Y') as changelog_date, changelog_title, changelog_version FROM `changelog` ORDER BY changelog_id DESC";
			$query=$this->db->query($sql);
			$res=$query->result();
			if ($query->num_rows()==0) {
				return false;
			}
			else{
				return $res;
			}	
		}
		public function getChangeLogInfo()
		{
			$sql="SELECT * FROM `changeloginfo`";
			$query=$this->db->query($sql);
			$res=$query->result();
			if ($query->num_rows()==0) {
				return false;
			}
			else{
				return $res;
			}	
		}
	}
?>