
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>home">Accueil</a>
				</li>

				<li>
					<a href="<?php echo base_url();?>service">Gestion Des Consultations</a>
				</li>
				<li class="active">Demander une séance télémèdecine</li>
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
					Nouvelle Demande
				</h1>
			</div><!-- /.page-header -->

			 <?=  form_open('demande_st/ajouter_seance_telemedecine','class="form-horizontal" role="form"') ?>  

			<fieldset class="form-horizontal" id="sample-form"> 
             
             <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="codep">Code Patient :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<input type="text" id="codep" name="codep" class="col-xs-12 col-sm-5" placeholder="Saisir le code patient" />
					</div>
				</div>
			 </div>
          
           <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="hopital">Hopital :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<input type="text" id="hopital" name="hopital" class="col-xs-12 col-sm-5" placeholder="Saisir le nom de l'hopital" />
					</div>
				</div>
		  </div>

          
          <div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="specdema">Spécialitées demandées :</label>

			<div class="col-xs-12 col-sm-9">
			    <div class="clearfix">
                <select  class="col-sm-5 col-xs-10"   id="specdema" name='specdema' data-placeholder="Choisir un examen">
                 
                  <?php foreach ($specialite->result() as $row) { echo '<option value=\''.$row->code_specialite.'\'>';?>
                       <?= $row->nom ?>
                      <?php echo '</option>'; } ?>
                </select>
                    </div>
              </div>
			</div>
		


			
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="descrip">Description :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea id="descrip" name="descrip" class="col-xs-12 col-sm-5" maxlength="1500" placeholder="Saisir la description"></textarea>

					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="prénom">Délai :</label>
                <br> <br> 

           <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-mask-1">
               Du :
             </label>
             <div class="col-sm-9">
              <input type="date" name="dated" placeholder="date" class="col-xs-10 col-sm-5" />
             </div>
         </div> 
         

          <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-mask-1">
               Au : 
             </label>
             <div class="col-sm-9">
              <input type="date" name="datef" placeholder="date" class="col-xs-10 col-sm-5" />
             </div>
         </div> 
				
	      </div> 

			

		      <div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right">Degré d'urgence : </label>
													<br>
													<div class="col-xs-12 col-sm-9">
														<div>
															<label class="line-height-1 blue">
																<input id="Etat" name="Etat" value="Trés urgent" type="radio" class="ace" />
																<span class="lbl">   Trés urgent</span>
															</label>
														</div>
														<div>
															<label class="line-height-1 blue">
																<input id="Etat" name="Etat" value="Urgent" type="radio" class="ace" />
																<span class="lbl">   Urgent</span>
															</label>
														</div>
														<div>
															<label class="line-height-1 blue">
																<input id="Etat" name="Etat" value="Moyenne" type="radio" class="ace" />
																<span class="lbl">  Moyenne </span>
															</label>
														</div>
														<div>
															<label class="line-height-1 blue">
																<input id="Etat" name="Etat" value="Pas urgent" type="radio" class="ace" />
																<span class="lbl">   Pas urgent</span>
															</label>
														</div>
													</div>
												</div>

                       

		

			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="motif">Motif :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<textarea id="motif" name="motif" class="col-xs-12 col-sm-5" maxlength="1500" placeholder="Saisir le motif"></textarea>

					</div>
				</div>
			</div>


			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="type_seance">Type de séance :</label>

				<div class="col-xs-12 col-sm-9">
					<div class="clearfix">
						<select id="type_seance" name='type_seance'>
							<option>Télé-Consultation</option>
							<option>Télé-Conférence</option>
                            <option>Télé-Expertice</option>
                            <option>Télé-Assistance</option>
                        </select>
					</div>
				</div>
			</div>

			</fieldset>
	<br><br>

	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Envoyé
			</button>

			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>


<?php  echo form_close(); ?>
</div>

		</div>
		</div>
