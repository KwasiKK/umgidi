<div id="headerwrap" style="margin-top: -150px">
      <div class="container">
         <div class="row">
		  <div class="col-lg-12">
			<h2>Create new product</h2>
			<form action="<?php echo URL; ?>product/create" class="form-horizontal col-sm-9 col-md-6 col-lg-4" role="form" method="post" enctype="multipart/form-data" id="addProductFrm" style="margin-top: 30px; padding: 20px;"> 
				<div id="successMsg" class="form-group" style="display: none" >
					<h2>
						<b>Upload Success!</b>
					</h2>
				</div>
				<div id="formContents" >
					<div class="form-group"> 
						<label for="category" class="col-sm-2 control-label">Category</label> 
						<div class="col-sm-10"> 
							<select name="category" id="category" class="form-control" required ><option value="Drinks" selected>Drinks</option><option value="Snacks" >Snacks</option></select>
						</div> 
					</div> 
					
					<div class="form-group"> 
						<label for="sub_category" class="col-sm-2 control-label">Sub Category</label> 
						<div class="col-sm-10"> 
							<select name="sub_category" id="sub_category" class="form-control" required ><option value="Drinks" selected>Alchole</option><option value="Snacks" >Chips</option></select>
						</div> 
					</div> 
					
					<div class="form-group"> 
						<label for="brandname" class="col-sm-2 control-label">Brandname</label> 
						<div class="col-sm-10"> 
							<input value="Coca Cola" type="text" class="form-control" id="brandname" name="brandname" placeholder="Brandname" /> 
						</div> 
					</div>
					
					<div class="form-group"> 
						<label for="product_name" class="col-sm-2 control-label">Product Name</label> 
						<div class="col-sm-10"> 
							<input value="123123123" type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" /> 
						</div> 
					</div>
					
					<div class="form-group"> 
						<label for="product_name" class="col-sm-2 control-label">Description</label> 
						<div class="col-sm-10"> 
							<input value="cooler" type="text" class="form-control" id="flavour" name="flavour" placeholder="Flavour" /> 
						</div> 
					</div>			
					
					<div class="form-group">
						<label for="unit_volume" class="col-sm-2 control-label">Unit Volume</label> 
						<div class="col-sm-10">
							<input value="123123123" type="text" class="form-control" id="unit_volume" name="unit_volume" placeholder="Unit Volume" /> 
						</div>
					</div>

					<div class="form-group">
						<label for="back_quantity" class="col-sm-2 control-label">Back Quantity</label> 
						<div class="col-sm-10">
							<input value="123123123" type="text" class="form-control" id="quantity" name="back_quantity" placeholder="Quantity" /> 
						</div>
					</div>
					
					<div class="form-group">
						<label for="front_quantity" class="col-sm-2 control-label">Front Quantity</label> 
						<div class="col-sm-10">
							<input value="123123123" type="text" class="form-control" id="front_quantity" name="front_quantity" placeholder="Quantity" /> 
						</div>
					</div>

					<div class="form-group">
						<label for="cost_price" class="col-sm-2 control-label">Cost Price</label> 
						<div class="col-sm-10">
							<input value="123666321" type="text" class="form-control" id="cost_price" name="cost_price" placeholder="Cost Price" /> 
						</div>
					</div>
					
					<div class="form-group">
						<label for="selling_price" class="col-sm-2 control-label">Selling Price</label> 
						<div class="col-sm-10">
							<input value="123666321" type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Selling Price" /> 
						</div>
					</div>					

					<div class="form-group">
						<label for="front_quantity" class="col-sm-2 control-label">Image</label> 
						<div class="col-sm-10">
							<input type='file' id="file[]" name="file[]" multiple required data-validation-required-message="Please upload a picture" />
						</div>
					</div>
					
					<input type="hidden" id="stock_owner" name="stock_owner" value="66"  />
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10"> 
							<button type="submit" class="btn btn-default">Submit</button> 
						</div> 
					</div> 
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10"> 
							<span id="success"></span>
						</div> 
					</div> 
				</div> 	
			</form>	
		</div>
        </div>
      </div>
</div><!-- /headerwrap -->
<style>
form
{
color: white;
background-color: #254463;
background-image: -moz-linear-gradient(top, #2b4e72, #1d354d);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#2b4e72), to(#1d354d));
background-image: -webkit-linear-gradient(top, #2b4e72, #1d354d);
background-image: -o-linear-gradient(top, #2b4e72, #1d354d);
background-image: linear-gradient(to bottom, #2b4e72, #1d354d);
background-repeat: repeat-x;
}
</style>
<script type="text/javascript" src="<?php echo URL; ?>public/js/Uploader.js"></script>	
<script>
	$("#addProductFrm").ajaxForm(options);
</script>