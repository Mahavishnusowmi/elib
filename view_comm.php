<?php
session_start();
include "database.php";
if(!isset($_SESSION["AID"]))
{
	header("location:alogin.php");
}
?>
<!DOCTYPE HTML>
<html>
  <head>
	   <?php include "head.php";?>
  </head>
  <body>
 <?php include "sidebar.php";
 include "primary.php";
 ?> 
<div class="container">
   <div class="row">
       	<div class="col-md-3" id="navi">  <?php include "adminsidebar.php"; ?> </div> 
		  <div class="col-md-9">
			<ul class="breadcrumb">
				<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="alogin.php"> Admin</a></li>
				<li class="active"><a href="view_comm.php"> View Comments</a></li>
			</ul>
				<h3 id="heading" class="h3">View Comments Details</h3>
			 <?php
			 $sql="Select book.btitle,student.name,comment.comm,comment.logs from comment inner join book on book.bid=comment.bid inner join student on comment.sid=student.id";
			 $res=$db ->query($sql);
			 if($res->num_rows>0)
			 {?>
			 <div id="example_wrapper" style="overflow-x:auto;">
		
				<table id="example">
				<thead>
				<tr>
				<th>#</th>
				<th>NAME</th>
				<th>BTITLE</th>
				<th>COMMENT</th>
				<th>LOGS</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
				<th>#</th>
				<th>NAME</th>
				<th>BTITLE</th>
				<th>COMMENT</th>
				<th>LOGS</th>
				</tr>
				</tfoot>
				<tbody>
				<?php 
				$i=0;
				while($row=$res->fetch_assoc())
				{ 
					$i++;
					echo"<tr>";
				           echo	"<td>{$i}</td>";
			        	   echo	"<td>{$row["name"]}</td>";
			         	   echo	"<td>{$row["btitle"]}</td>";
						   echo	"<td>{$row["comm"]}</td>";
			               echo	"<td>{$row["logs"]}</td>";
			    	echo	"</tr>";
				}
				?>
				</tbody>
				</table>
						</div>	
				<?php
			 }
			 else
			 {
				 echo"<p class='error'>No comment Found </p>";
			 }
			 ?>
			</div>
	</div>
</div>

<script src="assets/js/DataTables/datatables.min.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>

<br>
	   <?php include "footer.php"; ?>
  </body>
</html>