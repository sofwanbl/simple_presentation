<Doctype html>
<html>
  <head>
     <title>Sample test</title>
     <link rel="stylesheet" href="<?php echo base_url();?>css/main.css"/>
     <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery-3.5.1.min.js"></script>
     <script type="text/javascript">
		   function sembunyi()
		     {
				$(function() {
					$("table").toggle("slow");
				});		
			 }
     </script>
  </head>
  <body>
    <?php
     echo "<table border=1>";
     echo "<th>No</th><th>Name</th><th>Address</th>";
     if ($is_data)
       {
		 $no=1;  
		 foreach ($datanya as $row)
		   {  
			  if ($no % 2==1)
			    {
				   echo "<tr class='ganjil'>";
		        }
		      else
		        {	 
		          echo "<tr>";
		        }  
		        echo "<td class='umpet'>$no</td><td>$row->name</td><td>$row->address</td>";
		        echo "</tr>";
		      $no++;
		   }
		}
	  ?>   
  </table><br/>	  
  <center><input type="button" onClick="sembunyi()" value="Toggle"/> </center>
  </body>
  
</html>
