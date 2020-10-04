<?php
 class Test_1_model extends CI_Model
   {
     public function tampil()
       {
		  $querynya="select * from person";
		  $hasil=$this->db->query($querynya);
		  return $hasil;
	   } 	   
   }
?>   	   
