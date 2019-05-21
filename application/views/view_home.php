	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>home">Home</a>
							</li>							
							<li class="active">Blank Page</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

					<h1>Ajax Image Upload with PHP ImageMagick</h1>	
       <div class="upload-wrapper">
<div class="upload-click">Click here to Upload File</div>
<div class="upload-image"><img src="images/ajax-loader.gif" width="16" height="16"></div>
<input type="file" id="input-file-upload" />
</div>
<div id="server-response"></div>






								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script type="text/javascript">
$(document).ready( function() {
	$(".upload-click").click(function(e){ 
		$('#input-file-upload').trigger('click');
	});

	$("#input-file-upload").change(function(){
		if(window.File && window.FileReader && window.FileList && window.Blob){
			if($(this).val()){ //check empty input filed				
				var oFReader = new FileReader();
				var rFilter = /^(?:image\/bmp|application\/octet-stream|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
				
				if(this.files.length === 0){windows.alert("select file"); return}
				
				var oFile = this.files[0];
				var fsize = oFile.size; //get file size
				var ftype = oFile.type; // get file type
	
				alert ("type "+ftype);
				if(!rFilter.test(ftype)) 
				{
					alert('Unsupported file type!');
					return;
				}
					
				var allowed_file_size = 2000000;	
							
				if(fsize>allowed_file_size)
				{
					windows.alert("File too big! Allowed size 2 MB");
					return;
				}
				
				$('.upload-image').show();
				$('.upload-click').hide();
			
				var mdata = new FormData(this);
				mdata.append('image_data', oFile);//$("#input-file-upload")[0].files[0]);
				$.ajax({
					type: 'POST', // HTTP method POST or GET
					processData: false,
					contentType: false,
					url: 'home/upload_resize', //Where to make Ajax calls
					data: mdata, //Form variables
					dataType: 'json',
					success:function(response){
					 	$('.upload-image').hide();
						$('.upload-click').show();
								
						if(response.type == 'success'){
							$("#server-response").html('<div class="success">' + response.msg + '</div>');
						}else{
							$("#server-response").html('<div class="error">' + response.msg + '</div>');
						}
					},error:function(response){
					alert("error");
                        console.log(response.msg);
						
                    }
				});
				
			}
			
		}else{
			alert("Can't upload! Your browser does not support File API! Try again with modern browsers like Chrome or Firefox.</div>");
			return;
		}
		
	});
});
	</script>