<?php
 class Test_1_contr extends CI_Controller 
   {
	  public function __construct()
	    {
			parent::__construct();
			$this->load->model("Test_1_model");
		}
	
	  public function index()
	    {
		  $hasilnya=$this->Test_1_model->tampil();
		  if ($hasilnya->num_rows()>0)
		    {
			  $data["is_data"]=true;	
			  $data["datanya"]=$hasilnya->result();
			}
	      else
	       {
			  $data["is_data"]=false;
		   }
		   $this->load->view("Test_1_view",$data); 	    		  
		}		
	}
?>		  
