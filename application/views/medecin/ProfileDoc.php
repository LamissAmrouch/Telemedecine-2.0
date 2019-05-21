<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 13/09/2018
 * Time: 00:35
 */
?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?php echo base_url();?>home">Accueil</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>consultation/ges">Gestion Des Medecinss</a>
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
            User Profile Page
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
                                    Profile
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#feed" aria-expanded="false">
                                    <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                    plus d'information
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content no-border padding-24">
                            <div id="home" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2"       src="<?php echo base_url();?>assets/images/avatars/profile-pic.jpg">
															</span>

                                        <div class="space space-4"></div>



                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle"><?= $Medecin->Nom;?> <?= $Medecin->Prenom;?></span>

                                            <span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	online
																</span>
                                        </h4>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Nom </div>

                                                <div class="profile-info-value">
                                                    <span><?='Dr. '.$Medecin->Nom ;?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Code </div>

                                                <div class="profile-info-value">
                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                    <span> <?= $Medecin->NSS;?></span>

                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Adresse </div>

                                                <div class="profile-info-value">
                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                    <span> <?= $Medecin->Adresse;?></span>

                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Age </div>

                                                <div class="profile-info-value">
                                                    <?php $date = new DateTime($Medecin->DateNaissance);
                                                    $now = new DateTime();
                                                    $interval = $now->diff($date);
                                                    ?>
                                                    <span><?= $interval->y.' Ans'; ?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Grade </div>

                                                <div class="profile-info-value">
                                                    <span><?= $Medecin->grade ;?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Spécialité </div>

                                                <div class="profile-info-value">
                                                    <span><?= $Medecin->specialite ;?></span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Hopitale </div>

                                                <div class="profile-info-value">
                                                    <span><?= $Medecin->hopital;?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Website </div>

                                                <div class="profile-info-value">
                                                    <a href="$Medecin->Site" target="_blank"><?= $Medecin->Site ;?></a>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">
                                                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                </div>

                                                <div class="profile-info-value">
                                                    <a href="<?=$Medecin->facebook ;?>">Find me on Facebook</a>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">
                                                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                </div>

                                                <div class="profile-info-value">
                                                    <a href="<?=$Medecin->twitter ;?>">Follow me on Twitter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="space-20"></div>


                            </div><!-- /#home -->

                            <div id="feed" class="tab-pane">
                                <div class="profile-feed row">

                                </div><!-- /.row -->

                                <div class="space-12"></div>


                            </div><!-- /#feed -->

                            <div id="friends" class="tab-pane">
                                <div class="profile-users clearfix">
                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar4.png" alt="Bob Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Bob Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Content Editor</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar1.png" alt="Rose Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Rose Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Graphic Designer</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 30 min ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar.png" alt="Jim Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-busy"></span>
                                                        Jim Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover right">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">SEO &amp; Advertising</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                                        <span class="grey"> 1 hour ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar5.png" alt="Alex Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-idle"></span>
                                                        Alex Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover right">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Marketing</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class=""> 40 minutes idle </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar2.png" alt="Phil Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Phil Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Public Relations</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 2 hours ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar3.png" alt="Susan Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Susan Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">HR Management</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar1.png" alt="Jennifer Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Jennifer Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Graphic Designer</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 2 hours ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar3.png" alt="Alexa Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Alexa Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Accounting</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 4 hours ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr hr10 hr-double"></div>

                                <ul class="pager pull-right">
                                    <li class="previous disabled">
                                        <a href="#">← Prev</a>
                                    </li>

                                    <li class="next">
                                        <a href="#">Next →</a>
                                    </li>
                                </ul>
                            </div><!-- /#friends -->

                            <div id="pictures" class="tab-pane">
                                <ul class="ace-thumbnails">
                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-1.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-3.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-4.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-6.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-1.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /#pictures -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="hide">
                <div id="user-profile-3" class="user-profile row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class="well well-sm">
                            <!-- -
<button type="button" class="close" data-dismiss="alert">&times;</button>
&nbsp; -->
                            <div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

                            &nbsp; &nbsp; &nbsp;
                            <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
                                <div class="progress-bar progress-bar-success" style="width:70%"></div>
                            </div>
                        </div><!-- /.well -->

                        <div class="space"></div>

                        <form class="form-horizontal">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-16">
                                    <li class="active">
                                        <a data-toggle="tab" href="#edit-basic">
                                            <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                            Basic Info
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#edit-settings">
                                            <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                            Settings
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#edit-password">
                                            <i class="blue ace-icon fa fa-key bigger-125"></i>
                                            Password
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content profile-edit-tab-content">
                                    <div id="edit-basic" class="tab-pane in active">
                                        <h4 class="header blue bolder smaller">General</h4>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <label class="ace-file-input ace-file-multiple"><input type="file"><span class="ace-file-container hide-placeholder selected"><span class="ace-file-name" data-title="profile-pic.jpg"><img class="middle" style="display:none;" src="assets/images/avatars/profile-pic.jpg"><i class=" ace-icon fa fa-picture-o file-image"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                            </div>

                                            <div class="vspace-12-sm"></div>

                                            <div class="col-xs-12 col-sm-8">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

                                                    <div class="col-sm-8">
                                                        <input class="col-xs-12 col-sm-10" id="form-field-username" placeholder="Username" value="alexdoe" type="text">
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

                                                    <div class="col-sm-8">
                                                        <input class="input-small" id="form-field-first" placeholder="First Name" value="Alex" type="text">
                                                        <input class="input-small" id="form-field-last" placeholder="Last Name" value="Doe" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

                                            <div class="col-sm-9">
                                                <div class="input-medium">
                                                    <div class="input-group">
                                                        <input class="input-medium date-picker" id="form-field-date" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" type="text">
                                                        <span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">Gender</label>

                                            <div class="col-sm-9">
                                                <label class="inline">
                                                    <input name="form-field-radio" class="ace" type="radio">
                                                    <span class="lbl middle"> Male</span>
                                                </label>

                                                &nbsp; &nbsp; &nbsp;
                                                <label class="inline">
                                                    <input name="form-field-radio" class="ace" type="radio">
                                                    <span class="lbl middle"> Female</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>

                                            <div class="col-sm-9">
                                                <textarea id="form-field-comment"></textarea>
                                            </div>
                                        </div>

                                        <div class="space"></div>
                                        <h4 class="header blue bolder smaller">Contact</h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                            <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input id="form-field-email" value="alexdoe@gmail.com" type="email">
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

                                            <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input id="form-field-website" value="http://www.alexdoe.com/" type="url">
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                            <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-medium input-mask-phone" id="form-field-phone" type="text">
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
                                            </div>
                                        </div>

                                        <div class="space"></div>
                                        <h4 class="header blue bolder smaller">Social</h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

                                            <div class="col-sm-9">
																	<span class="input-icon">
																		<input value="facebook_alexdoe" id="form-field-facebook" type="text">
																		<i class="ace-icon fa fa-facebook blue"></i>
																	</span>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

                                            <div class="col-sm-9">
																	<span class="input-icon">
																		<input value="twitter_alexdoe" id="form-field-twitter" type="text">
																		<i class="ace-icon fa fa-twitter light-blue"></i>
																	</span>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

                                            <div class="col-sm-9">
																	<span class="input-icon">
																		<input value="google_alexdoe" id="form-field-gplus" type="text">
																		<i class="ace-icon fa fa-google-plus red"></i>
																	</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="edit-settings" class="tab-pane">
                                        <div class="space-10"></div>

                                        <div>
                                            <label class="inline">
                                                <input name="form-field-checkbox" class="ace" type="checkbox">
                                                <span class="lbl"> Make my profile public</span>
                                            </label>
                                        </div>

                                        <div class="space-8"></div>

                                        <div>
                                            <label class="inline">
                                                <input name="form-field-checkbox" class="ace" type="checkbox">
                                                <span class="lbl"> Email me new updates</span>
                                            </label>
                                        </div>

                                        <div class="space-8"></div>

                                        <div>
                                            <label>
                                                <input name="form-field-checkbox" class="ace" type="checkbox">
                                                <span class="lbl"> Keep a history of my conversations</span>
                                            </label>

                                            <label>
                                                <span class="space-2 block"></span>

                                                for
                                                <input class="input-mini" maxlength="3" type="text">
                                                days
                                            </label>
                                        </div>
                                    </div>

                                    <div id="edit-password" class="tab-pane">
                                        <div class="space-10"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                                            <div class="col-sm-9">
                                                <input id="form-field-pass1" type="password">
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                                            <div class="col-sm-9">
                                                <input id="form-field-pass2" type="password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="button">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Save
                                    </button>

                                    &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.span -->
                </div><!-- /.user-profile -->
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
    </div>
</div>

