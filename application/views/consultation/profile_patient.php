
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?php echo base_url();?>home">Accueil</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>consultation/ges">Gestion Des consultations</a>
                </li>
                <li class="active">Profile </li>
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

    <div class="page-header">
        <h1>
            Profile du patient
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->

            <div class="hr dotted"></div>

            <div class="">
                <div id="user-profile-2" class="user-profile">
                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-18">
                            <li class="active">
                                <a data-toggle="tab" href="#home" aria-expanded="true">
                                    <i class="green ace-icon fa fa-user bigger-120"></i>
                                    Informations personnelles
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#feed" aria-expanded="false">
                                    <i class="blue ace-icon fa fa-users bigger-120"></i>
                                    Coordonnées 
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#friends" aria-expanded="false">
                                    
                                      <i class="green ace-icon fa fa-user bigger-120"></i>
                                    Informations médicales 
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#pictures" aria-expanded="false">
                                 
                                    <i class="ace-icon fa fa-plus-circle bigger-120 green"></i> 
                                  Autres informations 
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content no-border padding-24">
                            <div id="home" class="tab-pane active">
                                <div class="row">
                             


                                    <div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2"       src="<?php echo base_url();?>assets/images/avatars/<?= $patient->image; ?>" >
															</span>

                                        <div class="space space-4"></div>

                     
                                        <a href="#" class="btn btn-sm btn-block btn-primary">  
                                            <span class="bigger-110"><?= $patient->nom; ?> 
                                            <?= $patient->prenom;?> </span>
                                        </a>
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"></span>

                                           
                                        </h4>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> NSS :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->nss; ?></span>
                                                </div>
                                            </div>

                                        
                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Nom :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->nom; ?></span>
                                                </div>
                                            </div>
                                             <div class="profile-info-row">
                                                <div class="profile-info-name">Prénom :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->prenom; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Date-naissance:  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->date_naiss; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Genre : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->gender; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Fonction : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->fonction; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Situation familliale : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->st_faml; ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">
                                                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                </div>

                                                <div class="profile-info-value">
                                                    <a href="#">Facebook</a>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">
                                                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                </div>

                                                <div class="profile-info-value">
                                                    <a href="#">Twitter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="space-20"></div>


                            </div><!-- /#home -->

                            <div id="feed" class="tab-pane">
                        
                                <div class="row">
                                    

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"></span>

                                           
                                        </h4>
                               
                                <div class="profile-info-row">
                                                <div class="profile-info-name">Adresse : </div>

                                                <div class="profile-info-value">
                                                     <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                    <span> <?= $patient->adresse; ?></span>
                                                </div>
                                </div>


                                          <div class="profile-info-row">
                                                <div class="profile-info-name">Commune :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->commune; ?></span>
                                                </div>
                                            </div>


                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Wilaya :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->wilaya; ?></span>
                                                </div>
                                            </div>

                                            

                                          

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Num Tél: </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->n_tel; ?></span>
                                                </div>
                                            </div>

                                            

                                          
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            

                                            
                                            
                                       
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                         
                            </div><!-- /#feed -->

                            <div id="friends" class="tab-pane">
                                
                                <div class="row">
                                    

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"></span>

                                           
                                        </h4>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Groupage :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->groupage; ?></span>
                                                </div>
                                            </div>

                                        
                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Tabac :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->tabac; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Alcool :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->alcol; ?></span>
                                                </div>
                                            </div>

                                           

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Antécédant : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->antecedant; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Allergie : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $patient->allergie; ?></span>
                                                </div>
                                            </div>

                                          
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            

                                            
                                            
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                

                               
                            </div><!-- /#friends -->
                            

                            <div id="pictures" class="tab-pane">
                               

  <div class="row">
                                    

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"></span>

                                           
                                        </h4>

                                        <div class="profile-user-info">
                                            

                                            

                                           

                                          
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            

                                            
                                            
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                            </div><!-- /#pictures -->
                        </div>
                    </div>
                </div>
            </div>

          

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
    </div>
</div>

