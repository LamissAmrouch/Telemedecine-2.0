			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo base_url();?>home/">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Tableau de Bord </span>
						</a>

						<b class="arrow"></b>
					</li>


					<li class="">
						<a href="<?php echo base_url();?>hopital/liste_hopital">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gestion des hopitaux </span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>service/liste_service">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gestion des services </span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>specialite/liste_specialite">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gestion des Specialités </span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>type_anticident/add_type_anticident">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">Type Antécédents  </span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>type_anticident/liste_antecedent">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gestion Des Antécédents  </span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>allergie/liste_allergie">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gestion Des Allergies  </span>
						</a>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>fonction/liste_fonction">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gestion Des Fonctions  </span>
						</a>
					</li>
					
              
              <li class="">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-list-alt"></i>

								<span class="menu-text">Gestion des Medecins</span>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="<?php echo base_url();?>doc">
											<i class="menu-icon fa fa-caret-right"></i>
											liste des Medecins
										</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="<?php echo base_url();?>ajouter">
											<i class="menu-icon fa fa-caret-right"></i>
											Ajouter un Medecin
										</a>

									<b class="arrow"></b>
								</li>
								<li class="">
									<a href="<?php echo base_url();?>Doc/Manipuler">
											<i class="menu-icon fa fa-caret-right"></i>
											Modifier/Supprimer
										</a>

									<b class="arrow"></b>
								</li>
                                <li class="">
                                    <a href="<?php echo base_url();?>Doctor/Agenda">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Agenda des disponibilités
                                    </a>

                                    <b class="arrow"></b>
                                </li>
							</ul>
						</li>

<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-list-alt"></i>

								<span class="menu-text">Gestion des consultations</span>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								

								<li class="">
									<a href="<?php echo base_url();?>consultation/ges_cons">
											<i class="menu-icon fa fa-caret-right"></i>
											Ajouter une consultation
										</a>

									<b class="arrow"></b>
								</li> 
                                   
                                <li class="">
									<a href="<?php echo base_url();?>demande_st/ajouter_seance_telemedecine">
											<i class="menu-icon fa fa-caret-right"></i>
											Demander une séance de télémedcine
										</a>

									<b class="arrow"></b>
								</li>


								<li class="">
									<a href="<?php echo base_url();?>consultation/getConsultations">
											<i class="menu-icon fa fa-caret-right"></i>
											Liste des consultations
										</a>

									<b class="arrow"></b>
								</li> 

								<li class="">
									<a href="<?php echo base_url();?>consultation/lister_patient">
											<i class="menu-icon fa fa-caret-right"></i>
											Liste des patients
										</a>

									<b class="arrow"></b>
								</li>


								<li class="">
									<a href="<?php echo base_url();?>calendar">
											<i class="menu-icon fa fa-caret-right"></i>
											Calendrier des rendez-vous
										</a>

									<b class="arrow"></b>
								</li>


							</ul>
						</li>
						
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list-alt"></i>

                            <span class="menu-text">Gestion des Séances</span>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo base_url();?>Seance/list">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    liste des Demandes
                                </a>

                                <b class="arrow"></b>
                            </li>


                        </ul>
                    </li>












































					

						

					<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-file-o"></i>

								<span class="menu-text">
									Gestion dossier patient

								</span>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="<?php echo base_url();?>patient/liste_patient">
											<i class="menu-icon fa fa-caret-right"></i>
											Liste Des patients
										</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="<?php echo base_url();?>patient/add_patient">
											<i class="menu-icon fa fa-caret-right"></i>
											Ajouter patient
										</a>

									<b class="arrow"></b>
								</li>

							</ul>
						</li>

					</ul><!-- /.nav-list -->

					<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
						<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
					</div>
				</div>
