
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
                <li class="active">Affichage </li>
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
            Affichage de la consultation
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
                                    Information administratifs 
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#feed" aria-expanded="false">
                                    <i class="ace-icon fa fa-plus-circle bigger-120 green"></i> 

                                      Examens cliniques  
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#friends" aria-expanded="false">
                                    <i class="blue ace-icon fa fa-users bigger-120"></i>
                                     Soins
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#pictures" aria-expanded="false">
                                   <i class="green ace-icon fa fa-user bigger-120"></i>
                                  Synthése
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content no-border padding-24">
                            <div id="home" class="tab-pane active">
                                <div class="row">
                             


                                   <div class="row">
                                    

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"></span>

                                           
                                        </h4>

                                          
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Code patient :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->id_patient; ?></span>
                                                </div>
                                            </div>

                                        
                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Code consultation :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->id_cons; ?></span>
                                                </div>
                                          </div>

                                             <div class="profile-info-row">
                                                <div class="profile-info-name">Date consultation :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->date_cons; ?></span>
                                                </div>
                                            </div>

                                        

 </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            

                                            
                                            
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                


                            </div><!-- /#home -->

                            <div id="feed" class="tab-pane">
                        

                             <div class="row">
                                    

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"></span>

                                           
                                        </h4>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Tension:  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->tension; ?></span>
                                                </div>
                                            </div>

                                        
                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Fréquence cardiaque :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->frequence_car; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Température : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->temperature; ?></span>
                                                </div>
                                            </div>

                                           

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Examen cardiopulmonaire: </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->examen_car; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Symptomes :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->symptotes; ?></span>
                                                </div>
                                            </div>

                                             <div class="profile-info-row">
                                                <div class="profile-info-name"> Situation clinique: </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->situation_clinique; ?></span>
                                                </div>
                                             </div>

                                          
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            

                                            
                                            
                                        </div>
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
                                                <div class="profile-info-name"> Biologie médicale:  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->bio_med; ?></span>
                                                </div>
                                            </div>

                                        
                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Anatologie et cytologie:  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->anatologie_cytologie; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Examens complémentaires:  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->examen_compl; ?></span>
                                                </div>
                                            </div>

                                           

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Maladie : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->maladie; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Traitement : </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->traitement; ?></span>
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
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Conseils :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->conseil; ?></span>
                                                </div>
                                            </div>

                                        
                                           <div class="profile-info-row">
                                                <div class="profile-info-name">Réorientation :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->reorientation; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Résumé :  </div>

                                                <div class="profile-info-value">
                                                    <span><?= $cons->synthese; ?></span>
                                                </div>
                                            </div>

                                            
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

