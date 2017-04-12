<?php 
	/**
	* 
	*/
	class Cpanel_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		/* ------------------------------------------------------------ CHANGELOG ADMINISTRATION ------------------------------------------------------------ */

		/* Insert changelog */

		public function addChangeLog($date,$title,$version)
		{
			$sql="INSERT INTO `changelog` VALUES(null, ?, ?, ?)";
			$query=$this->db->query($sql,array($date,$title,$version));
			if ($this->db->affected_rows()==0) {
				return false;
			}
			else{
				return true;
			}	
		}

		public function addChangeLogInfo($status,$desc,$clid)
		{
			$sql="INSERT INTO `changeloginfo` VALUES(null, ?, ?, ?)";
			$query=$this->db->query($sql,array($status,$desc,$clid));
			if ($this->db->affected_rows()==0) {
				return false;
			}
			else{
				return true;
			}	
		}

		/* Get changelog */

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

		/* Update changelog */

		public function updateChangeLog($clid,$date,$title,$version)
		{
			$sql="UPDATE `changelog` SET changelog_date=?, changelog_title=?, changelog_version=? WHERE changelog_id=?";
			$query=$this->db->query($sql,array($date,$title,$version,$clid));
			if ($this->db->affected_rows()!=1) {
				return false;
			}
			else{
				return true;
			}	
		}

		public function updateChangeLogInfo($clidinfo,$status,$desc,$clid)
		{
			$sql="UPDATE `changelogINFO` SET changelog_info_status=?, changelog_info_desc=?, changelog_id=? WHERE changelog_info_id=?";
			$query=$this->db->query($sql,array($status,$desc,$clid,$clidinfo));
			if ($this->db->affected_rows()!=1) {
				return false;
			}
			else{
				return true;
			}	
		}

		/* Delete changelog */

		public function deleteChangeLog($clid)
		{
			$err=0;
			$sql="DELETE FROM `changelog` WHERE changelog_id=?";
			$query=$this->db->query($sql,array($clid));
			if ($this->db->affected_rows()==0) {
				$err++;
			}

			$sql="DELETE FROM `changeloginfo` WHERE changelog_id=?";
			$query=$this->db->query($sql,array($clid));
			if ($this->db->affected_rows()==0) {
				$err++;
			}

			if ($err!=0) {
				return false;
			}
			else{
				return true;
			}
		}

		public function deleteChangeLogInfo($clidinfo)
		{

			$sql="DELETE FROM `changeloginfo` WHERE changelog_info_id=?";
			$query=$this->db->query($sql,array($clid));
			if ($this->db->affected_rows()==0) {
				return false;
			}
			else{
				return true;
			}
		}

		/* ------------------------------------------------------------ AUTH ADMINISTRATION ------------------------------------------------------------ */

		/* Login Auth */

		public function login($username,$pass)
		{
			$sql="SELECT * FROM users u INNER JOIN user_role ur ON u.id_user=ur.id_user INNER JOIN roles r ON r.id_role=ur.id_role WHERE u.user_name=? AND u.password=?";
			$query=$this->db->query($sql,array($username, md5($pass)));
			$res=$query->result();
			if ($query->num_rows()!=1) {
				return false;
			}
			else{
				return $res;
			}	
		}

		/* New Moderator Auth */
		
		public function addModerator($username,$pass)
		{
			$sql="SELECT * FROM users WHERE user_name=?";
			$query=$this->db->query($sql,array($username));
			if ($query->num_rows()!=0) {
				return "exists";
			}
			else{
				$sql="INSERT INTO users VALUES(null,?,?)";
				$query=$this->db->query($sql,array($username, md5($pass)));
				if ($this->db->affected_rows()!=0) {
					$sql="SELECT * FROM users WHERE id_user = ( SELECT MAX(id_user) FROM users)";
					$query=$this->db->query($sql);
					
					if ($query->num_rows()!=1) {
						return false;
					}
					else{
						foreach ($query->result_array() as $row) {
							$iduserrole=$row['id_user'];
						}
						$sql="INSERT INTO user_role VALUES(null, ? ,'1')";
						$query=$this->db->query($sql,array($iduserrole));
						if($this->db->affected_rows()==0){
							return false;
						}
						else{
							return true;
						}
					}
				}
				else{
					return false;
				}
			}	
		}
	}
?>
