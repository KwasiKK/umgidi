<?php


include_once("header.php");


function displayStock(){
	global $database;
	//$q = "SELECT * FROM meta_data ORDER BY pid DESC";
	
	//$result = $database->query($q);
	/* Error occurred, return given name by default */
	/*$num_rows = mysqli_num_rows($result);
	if(!$result || ($num_rows < 0)){
		echo "Error displaying info";
		return;
	}
	if($num_rows == 0){
		echo "Database table empty";
		return;
	}*/

	/* Display table contents */
	//echo "<table class='table table-bordered table-striped table-highlight'>";
	echo "<table id='tablesorter' class='metadataTable table table-bordered table-striped table-highlight'>
			<thead>
				<tr>
					<th class='sort' data-sort='asc' data-id='-1' data-type='int' style='white-space: nowrap; cursor: move; display: none;'>ID# <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='0' data-type='str' style='white-space: nowrap; cursor: move;'>Stock Owner <i class='icon-caret-up'></i></th>
					<th class='sort' data-sort='asc' data-id='1' data-type='int style='white-space: nowrap; cursor: move;'>Stock Quantity <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='2' data-type='int' style='white-space: nowrap; cursor: move;'>Cost Price <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='3' data-type='int' style='white-space: nowrap; cursor: move;'>Selling Price <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='4' data-type='int' style='white-space: nowrap; cursor: move;'>Markup Amount <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='5' data-type='str' style='white-space: nowrap; cursor: move;'>Type <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='5' data-type='str' style='white-space: nowrap; cursor: move;'>Brand <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='5' data-type='str' style='white-space: nowrap; cursor: move;'>Flavour <i class='icon-sort'></i></th>
					<th class='sort' data-sort='asc' data-id='5' data-type='str' style='white-space: nowrap; cursor: move;'>Size <i class='icon-sort'></i></th>
					<th /><th /><th />
				</tr>
			</thead>";
	echo "<tbody>";
	/*while ($row = $result->fetch_array()){
		$medianame = $row['medianame'];
		$headline = $row['headline'];
		$publicationdate = $row['publicationdate'];
		$mediatype = $row['mediatype'];
		$daterecieved = $row['daterecieved'];
		$articletext = $row['articletext'];
		$pid  = $row['pid'];
		$uploadedby = $row['uploadedby'];

		echo "<tr>
				<td style='display: none;' ><span class='fieldText txtpid'> $pid</span><input type='text' value='$pid'  class='fieldEdit tbxpid' style='display: none' /></td>
				<td><span class='fieldText txtmedianame'> $medianame</span><input type='text' value='$medianame'  class='fieldEdit tbxmedianame' style='display: none' /></td>
				<td><span class='fieldText txtheadline'> $headline</span><input type='text' value='$headline'  class='fieldEdit tbxheadline' style='display: none' /></td>
				<td ><span class='fieldText txtpublicationdate'> $publicationdate</span><input type='text' value='$publicationdate'  class='fieldEdit tbxpublicationdate' style='display: none' /></td>
				<td ><span class='fieldText txtmediatype'> $mediatype</span><input type='text' value='$mediatype'  class='fieldEdit tbxmediatype' style='display: none' /></td>
				<td><span class='fieldText txtdaterecieved' >$daterecieved</span><input type='text' value='$daterecieved'  class='fieldEdit tbxdaterecieved' style='display: none' /></td>
				<td><span class='fieldText txtuploadedby' >$uploadedby</span><input type='text' value='$uploadedby'  class='fieldEdit tbxuploadedby' style='display: none' /></td>
				<td><span class='fieldText txtarticletext' >$articletext</span><textarea class='fieldEdit tbxarticletext' style='display: none'>$articletext</textarea></td>
				<td><a class='del btn btn-small btn-secondary' id='$pid' href='".URL."dashboard/deleteUpload'><span>delete</span></a></td>
				<td><a class='activate btn btn-small btn-secondary' id='$pid' href='".URL."dashboard/reviewUpload/$pid' ><span>review</span></a></td>
				<td><a class='edit btn btn-small btn-secondary' href=''><span>edit</span></a><a class='save btn btn-small btn-secondary' href='' style='display: none' ><span>save</span></a></td>
			</tr>
			";
	}*/
	echo "</tbody></table>";
	
	echo "<tr>
				<td style='display: none;' ><span class='fieldText txtpid'> </span><input type='text' value=''  class='fieldEdit tbxpid' style='display: none' /></td>
				<td><span class='fieldText txtmedianame'> </span><input type='text' value=''  class='fieldEdit tbxmedianame' style='display: none' /></td>
				<td><span class='fieldText txtheadline'> </span><input type='text' value=''  class='fieldEdit tbxheadline' style='display: none' /></td>
				<td ><span class='fieldText txtpublicationdate'> </span><input type='text' value=''  class='fieldEdit tbxpublicationdate' style='display: none' /></td>
				<td ><span class='fieldText txtmediatype'> </span><input type='text' value=''  class='fieldEdit tbxmediatype' style='display: none' /></td>
				<td><span class='fieldText txtdaterecieved' ></span><input type='text' value=''  class='fieldEdit tbxdaterecieved' style='display: none' /></td>
				<td><span class='fieldText txtuploadedby' ></span><input type='text' value=''  class='fieldEdit tbxuploadedby' style='display: none' /></td>
				<td><span class='fieldText txtarticletext' ></span><textarea class='fieldEdit tbxarticletext' style='display: none'></textarea></td>
				<td><a class='del btn btn-small btn-secondary' id='' href='URLdashboard/deleteStock'><span>delete</span></a></td>
				<td><a class='activate btn btn-small btn-secondary' id='' href='URL/dashboard/reviewStock' ><span>review</span></a></td>
				<td><a class='edit btn btn-small btn-secondary' href=''><span>edit</span></a><a class='save btn btn-small btn-secondary' href='' style='display: none' ><span>save</span></a></td>
			</tr>
			";
	
	echo "<a class='addStockLink' id='add_stock' href=''><span>Add Stock</span></a>";
}

?>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="">
				<h3 class="title col-sm-9 col-md-6 col-lg-4">Stock Manager</h3>
				<?php
					displayStock();
				?>
			</div> <!-- /.span4 -->
		</div> <!-- /.row -->	
	</div> <!-- /.container -->
</div> <!-- /#content -->
	