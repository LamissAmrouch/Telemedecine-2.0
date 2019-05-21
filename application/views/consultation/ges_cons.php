
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>home">Accueil</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>consultation/ges">Gestion Des Consultations</a>
							</li>
							<li class="active">Ajouter Consultation </li>
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

						<div class="page-header">
					   		<h1>
					     Nouvelle Consultation
				           </h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="hr hr-18 hr-double dotted"></div>

								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter"></h4>

										
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Informations administratifs</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">Examens cliniques </span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">Soins</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">Synthése</span>
														</li>
													</ul>
												</div>

												<hr />
 
		


												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
													
														
													
														</br>

	 <?=  form_open('consultation/ges_cons','class="form-horizontal" role="form"')
          ?> 


												<fieldset class="form-horizontal" id="sample-form">

												
   <div class="form-group">

              <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="codeP">Code patient:</label>
                <div class="col-xs-12 col-sm-9">
				 <div class="clearfix">
													
                <select    id="codeP" name="codeP"  data-placeholder="Choisir une maladie"  >

                  <?php foreach ($id_patient->result() as $row) { echo '<option value=\''.$row->id.'\'>'; ?>
                       <?= $row->id ?>
                      <?php echo '</option>'; } ?>
                  
                </select>
                                                  	</div>
													</div>

												</div>













												<br>
												<br>
												<br>
												<br>
												<br>
        

    
        <a href="<?php echo base_url();?>consultation/lister_patient" class="btn btn-link" >
									<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>					
				<h4>Voir la liste des patients</h4>
									
		</a>



														
										</fieldset>	

														
													</div>
                                 <fieldset class="form-horizontal" id="sample-form">
													<div class="step-pane" data-step="2">
													
														</br>
														
						<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="tension">Tension :</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="text" id="tension" name="tension" placeholder="Saisir la tension"/>
														</div>
								</div>
						</div>



												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="freq">Fréquence cardiaque:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="text" id="freq" name="freq" placeholder="Saisir la fréquence cardiaque"/>
														</div>
													</div>
												</div>
																	
												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="tempr">Température:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="text" id="tempr" name="tempr" placeholder="Saisir la température"/>
														</div>
													</div>
												</div> 

													<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="examcardio">Examens CardioPul:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="text" id="examcardio" name="examcardio" placeholder="Saisir l'examen CardioPulmonaire"/>
														</div>
													</div>
												</div>	
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="symp">Symptomes:</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="symp1" name="symp" maxlength="1500" placeholder="Saisir les symptomes"></textarea>

					</div>
				</div>
			</div>
             
             <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="sit_cli">Situation Clinique:</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="sit_cli" name="sit_cli" maxlength="1500" placeholder="Saisir la situation clinique"></textarea>

					</div>
				</div>
			</div>
            

          



                



</div>
                         </fieldset>

										<fieldset class="form-horizontal" id="sample-form">
													<div class="step-pane" data-step="3">
												
														</br> 

			
           
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="exam[]">Biologie médicale :</label>

			 <div class="col-sm-9">
                <select class="select2"  multiple=""  class="col-sm-5 col-xs-10"   id="exam[]" name='exam[]' data-placeholder="Choisir un examen">
                  <option value="">  </option>
                  <?php foreach ($examen->result() as $row) { echo '<option value=\''.$row->nom.'\'>';?>
                       <?= $row->nom ?>
                      <?php echo '</option>'; } ?>
                </select>

              </div>
			</div>
          
          <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="autre_exam">Autres :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="autre_exam" name="autre_exam" maxlength="1500" placeholder="Saisir d'autres examens"></textarea>

					</div>
				</div>
		  </div> 

		   <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="anat_cyt">Anatologie et cytologie :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="anat_cyt" name="anat_cyt" maxlength="1500" placeholder="Saisir les anatologies et cytologies"></textarea>

					</div>
				</div>
		  </div>
        
          <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="exam_comp">Examens complémt:</label>
                  
				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="exam_comp" name="exam_comp" maxlength="1500" placeholder="Saisir les examens complémentaires"></textarea>

					</div>
				</div>
		 </div>

      <div class="form-group">

              <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="mal[]">Maladie :</label>
                <div class="col-xs-12 col-sm-9">
				 <div class="clearfix">
													
                <select multiple="" id="mal[]" name="mal[]" class="select2" data-placeholder="Choisir une maladie"  >

                  <option value="" >  </option>
                  <?php foreach ($maladie->result() as $row) { echo '<option value=\''.$row->nom.'\'>'; ?>
                       <?= $row->nom ?>
                      <?php echo '</option>'; } ?>
                  
                </select>
                                                  	</div>
													</div>

												</div>

               <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="autre_mal">Autres :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="autre_mal" name="autre_mal" maxlength="1500" placeholder="Saisir d'autres maladies"></textarea>

					</div>
				</div>
			</div>
                
   

			<div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="trait[]">Traitement :</label>
              <div class="col-sm-9">
                <select multiple="" class="select2" class="col-xs-10 col-sm-5" id="trait[]" name='trait[]' data-placeholder="Choisir des traitements">
                  <optgroup label="ANTI-INFECTIEUX ">
                  <option value="Albendazole" >Albendazole</option>
                  <option value="Mébendazole" > Mébendazole </option>
                  <option value="Pyrantel" >  Pyrantel</option>
                  <option value="Praziquantel" >Praziquantel </option>
                    </optgroup>
                     <optgroup label="ANTI-BACTERIENS ">
                  <option value="Amoxicilline" >Amoxicilline</option>
                  <option value="Ampicillin" >  Ampicillin</option>
                
                  <option value="Benzylpénicillin"> Benzylpénicillin</option>
                  <option value="Ceftriaxone" > Ceftriaxone </option>
                   <option value="Oxacilline " >Oxacilline</option>
                   <option value="Métronidazole" >Métronidazole  </option>
                  <option value="Thiamphenicol" >Thiamphenicol  </option>
                   </optgroup>
                    <optgroup label="ANTI-ANEMIQUE ">
                   <option value="Phytoménadione" > Phytoménadione </option>
                   <option value="Fraxiparine" > Fraxiparine   </option>
                   <option value="Héparine" > Héparine </option>
                   <option value="Warfarine" > Warfarine</option>
                  </optgroup>
                </select>
              </div>
            </div>
           
   

          <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="autre_trait">Autres :</label>
				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="autre_trait" name="autre_trait" maxlength="1500" placeholder="Saisir d'autres traitements"></textarea>

					</div>
				</div>
			</div>
                


                
          
   
   <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="conseils">Conseils :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="conseils" name="conseils" maxlength="1500" placeholder="Saisir les conseils"></textarea>

					</div>
				</div>
		</div>


			<div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="orien">Réorientation</label>
              <div class="col-sm-9">

                <select class="select2" class="col-xs-10 col-sm-5" id="orien" name='orien' data-placeholder="Choisir une orientation" >
                 
                  <option value="">  </option>
                  <?php foreach ($specialite->result() as $row) { echo '<option value=\''.$row->nom.'\'>';?>
                       <?= $row->nom ?>
                      <?php echo '</option>'; } ?>
                </select>

              </div>
            </div>

              



													</div>
 </fieldset>    
            
            <fieldset class="form-horizontal" id="sample-form">
			<div class="step-pane" data-step="4">
            
														</br>

	   <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="synthese">Résumé :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea  id="synthese" name="synthese" maxlength="1500" placeholder="Saisir le résumé de la consultation"></textarea>

					</div>
				</div>
		</div>
  


														

		</br>
</br>
</br>
</br>
</br>
</br>

										

			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Enregistrer
			</button>

													
		
		
	

</br>
</br>
</br>


													</div>
													

</fieldset> 


<?php  echo form_close(); ?>
												
												</div>
											</div>

											<hr />
											<div class="wizard-actions">
												<button class="btn btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-next" data-last="Finish" >
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>

								<div id="modal-wizard" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container">
												<div class="modal-header">
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Validation states</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">Alerts</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">Payment Info</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">Other Info</span>
														</li>
													</ul>
												</div>

												<div class="modal-body step-content">
													<div class="step-pane active" data-step="1">
														<div class="center">
															<h4 class="blue">Step 1</h4>
														</div>
													</div>

													<div class="step-pane" data-step="2">
														<div class="center">
															<h4 class="blue">Step 2</h4>
														</div>
													</div>

													<div class="step-pane" data-step="3">
														<div class="center">
															<h4 class="blue">Step 3</h4>
														</div>
													</div>

													<div class="step-pane" data-step="4">
														<div class="center">
															<h4 class="blue">Step 4</h4>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer wizard-actions">
												<button class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-sm btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


<script type="text/javascript">

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

       $(document).ready(function() {
     
        $('[data-rel=tooltip]').tooltip();
      
        $(".select2").css('width','200px').select2({allowClear:true})
        .on('change', function(){
          $(this).closest('form').validate().element($(this));
        }); 
      
      
        var $validation = false;
        $('#fuelux-wizard-container')
        .ace_wizard({
          //step: 2 //optional argument. wizard will jump to step "2" at first
          //buttons: '.wizard-actions:eq(0)'
        })
        .on('actionclicked.fu.wizard' , function(e, info){
          if(info.step == 1 && $validation) {
            if(!$('#validation-form').valid()) e.preventDefault();
          }
        })
        //.on('changed.fu.wizard', function() {
        //})
        .on('finished.fu.wizard', function(e) {
          bootbox.dialog({
            message: "Nouvelle Consultation Enregistrée", 
            buttons: {
              "success" : {
                "label" : "OK",
                "className" : "btn-sm btn-primary"
              }
            }
          });
        }).on('stepclick.fu.wizard', function(e){
          //e.preventDefault();//this will prevent clicking and selecting steps
        });
      
      
        //jump to a step
        /**
        var wizard = $('#fuelux-wizard-container').data('fu.wizard')
        wizard.currentStep = 3;
        wizard.setState();
        */
      
        //determine selected step
        //wizard.selectedItem().step
      
      
      
        //hide or show the other form which requires validation
        //this is for demo only, you usullay want just one form in your application
        $('#skip-validation').removeAttr('checked').on('click', function(){
          $validation = this.checked;
          if(this.checked) {
            $('#sample-form').hide();
            $('#validation-form').removeClass('hide');
          }
          else {
            $('#validation-form').addClass('hide');
            $('#sample-form').show();
          }
        })
      
      
      
        //documentation : http://docs.jquery.com/Plugins/Validation/validate
      
      
        $.mask.definitions['~']='[+-]';
        $('#phone').mask('(999) 999-9999');
      
        jQuery.validator.addMethod("phone", function (value, element) {
          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");
      
        $('#validation-form').validate({
          errorElement: 'div',
          errorClass: 'help-block',
          focusInvalid: false,
          ignore: "",
          rules: {
            email: {
              required: true,
              email:true
            },
            password: {
              required: true,
              minlength: 5
            },
            password2: {
              required: true,
              minlength: 5,
              equalTo: "#password"
            },
            name: {
              required: true
            },
            phone: {
              required: true,
              phone: 'required'
            },
            url: {
              required: true,
              url: true
            },
            comment: {
              required: true
            },
            state: {
              required: true
            },
            platform: {
              required: true
            },
            subscription: {
              required: true
            },
            gender: {
              required: true,
            },
            agree: {
              required: true,
            }
          },
      
          messages: {
            email: {
              required: "Please provide a valid email.",
              email: "Please provide a valid email."
            },
            password: {
              required: "Please specify a password.",
              minlength: "Please specify a secure password."
            },
            state: "Please choose state",
            subscription: "Please choose at least one option",
            gender: "Please choose gender",
            agree: "Please accept our policy"
          },
      
      
          highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
          },
      
          success: function (e) {
            $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
            $(e).remove();
          },
      
          errorPlacement: function (error, element) {
            if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
              var controls = element.closest('div[class*="col-"]');
              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
            }
            else if(element.is('.select2')) {
              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
            }
            else if(element.is('.chosen-select')) {
              error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
            }
            else error.insertAfter(element.parent());
          },
      
          submitHandler: function (form) {
          },
          invalidHandler: function (form) {
          }
        });
      
        
        
        
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        
        
        /**
        $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
          $(this).closest('form').validate().element($(this));
        });
        
        $('#mychosen').chosen().on('change', function(ev) {
          $(this).closest('form').validate().element($(this));
        });
        */
        
        
        $(document).one('ajaxloadstart.page', function(e) {
          //in ajax mode, remove remaining elements before leaving page
          $('[class*=select2]').remove();
        });
      })
    </script>