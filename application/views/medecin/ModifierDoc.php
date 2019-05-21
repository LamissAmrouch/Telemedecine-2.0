<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?php echo base_url();?>home">Accueil</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>consultation/ges">Gestion Des Medecins</a>
                </li>
                <li class="active">Modifier </li>
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
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Modifier/Doc" onsubmit="return validation()">
                <div class="space"></div>
                <h4 class="header blue bolder smaller">information Perssonelle</h4>
                <?= $Nss; ?>
                <?= $Nom; ?>
                <?= $Prenom; ?>
                <?= $date; ?>
                <?= $Mail; ?>
                <?= $Tel; ?>
                <div class="space"></div>
                <h4 class="header blue bolder smaller">information Professionelle</h4>
                <?= $Specialities; ?>
                <?= $Grades; ?>
                <?= $Hopitals; ?>
                <?= $Services; ?>
                <?= $DateRec; ?>
                <?= $j; ?>
                <?php if($Nmbr === 0){?>
                    <div id="contrat"></div>
                <?php }if($Nmbr != 0){ ?>
                <div class="space"></div>
                <h4 class="header blue bolder smaller">Autre engagement....</h4><table id="contrat-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">hopital
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">service
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">type
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">dateDebut
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">DateFin
                        </th>
                    </tr>
                    <?php }$cpt = 1; ?>
                    <?php foreach ($engagements as $engagement): ?>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending"><?= $engagement["hopital"]; ?>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending"><?= $engagement["service"]; ?>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending"><?= $engagement["type"]; ?>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending"><?= $engagement["DateD"]; ?>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending"><?= $engagement["DateF"]; ?>
                            </th>
                            <th><button type="button" onclick="DeleteContract('<?=$engagement["id"] ?>','<?=$cpt ?>')" class="btn btn-danger-outline btn-sm">X</button></th>
                        </tr>
                    <?php $cpt++; endforeach; ?>

                </table>
                <button class="btn btn-primary-outline" type="button" onclick="ajouterContrat()">Ajouter d'autre contrat</button>


                <div class="clearfix form-actions form-inline">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Submit
                        </button>
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/AjouterDoc.js"></script>
<script src="<?php echo base_url(); ?>assets/js/AjouterDocV.js"></script>
<script src="<?php echo base_url(); ?>assets/js/AjouterDocCtr.js"></script>
<script src="<?php echo base_url(); ?>assets/js/DeleteContact.js"></script>