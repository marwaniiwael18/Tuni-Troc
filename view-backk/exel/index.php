<?php 
include_once("db_connect.php");
include("export_data.php");
include("header.php"); 
?>
<title>phpzag.com : Demo Export Data to Excel with PHP and MySQL</title>
<?php include('container.php');?>
<div class="container">	
	<h2>Export Data to Excel with PHP and MySQL</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered">
		<tr>
			<th>id_sponsor </th>
			<th>id_user  </th>
			<th>type_sponsor	</th>	
			<th>subscribe_date</th>
			<th>endsub_date</th>
			<th>subscribe_price</th>
			<th>sponsor_describe</th>
		</tr>
		<tbody>
			<?php foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['id_sponsor']; ?></td>
			   <td><?php echo $developer ['id_user']; ?></td>
			   <td><?php echo $developer ['type_sponsor']; ?></td>   
			   <td><?php echo $developer ['subscribe_date']; ?></td>
			   <td><?php echo $developer ['endsub_date']; ?></td>   
			   <td><?php echo $developer ['subscribe_price']; ?></td>
			   <td><?php echo $developer ['sponsor_describe']; ?></td> 
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/export-data-to-excel-with-php-and-mysql/">Back to Tutorial</a>		
	</div>
</div>
<?php include('footer.php');?>




