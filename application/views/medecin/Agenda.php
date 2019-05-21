<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 15/09/2018
 * Time: 20:14
 */
?>
<style>
    .table__calondar {
        width : 100%;
        height: calc(100vh - 130px);
    }

    .table__calondar td {
        padding: 10px;
        border: 1px solid #ccc;
        vertical-align: top;
        width: 14.29%;
        height: 20%;
    }

    .table__calondar.table__calondar--6weeks td{
        height: 16.66%;
    }
    .calondar__weekDay {
        font-weight: bold;
        color : #000;
        font-size: 1.2em;
    }
    .otherMonth .calondar__day {
        opacity: 0.3;
    }
</style>
<div></div>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?php echo base_url();?>home">Accueil</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>consultation/ges">Gestion des Seance TeleMedecine</a>
                </li>
                <li class="active">Disponibilité des medecins </li>
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

            <div>
                <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h1> <?= $monthOnString; ?>
                            <a href="/finale/Doctor/Agenda/<?=$prev ?>" class="btn btn-primary">&lt</a>
                            <a href="/finale/Doctor/Agenda/<?=$next ?>" class="btn btn-primary">&gt</a>
                        </h1>
                        <?= $Specialities ;?>
                        <?= $Hopitals ;?>
                        <?= $Grades ;?>
                    </div>
                    <table id="TableCore" class="table table-striped table-bordered table-hover dataTable no-footer table__calondar table__calondar--<?= $weeksNum; ?>weeks">
                    <?php for($i=0;$i<$weeksNum;$i++): ?>
                        <tr>
                            <?php foreach ($Days as $k => $day): ?>
                                <?php $clon = clone $firstDay;
                                $daye = $clon->modify('+'.$k + $i*7 .'days');
                                if(array_key_exists('20'.$daye->format('y-m-d'),$Events)){
                                    $thisDayevents = $Events['20'.$daye->format('y-m-d')];
                                }
                                    else{
                                        $thisDayevents = [];
                                    }?>
                                <td class="<?= $month->inMonth($daye) ? '' :'otherMonth'; ?>">
                                    <?php if($i == 0) : ?>
                                    <div class="calondar__weekDay"> <?= $day; ?></div>
                                    <?php endif; ?>
                                    <?php $clon = clone $firstDay;$clon->modify('+'.$k + $i*7 .'days')->format('d'); ?>
                                    <div class="calondar__day"><?= $daye->format('d'); ?></div>

                                    <div class="event">
                                        <?php foreach ($thisDayevents as $thisDayevent ): ?>
                                            <div class="info" style="display: none;">
                                                <div class="Sp"><?= $thisDayevent->specialite ; ?></div>
                                                <div class="grd"><?= $thisDayevent->grade ; ?></div>
                                                <div class="hpt"><?= $thisDayevent->hopital ; ?></div>
                                            </div>

                                            <a href="<?php echo base_url();?>/Doctor/profile/<?=$thisDayevent->NSS ;?>">
                                            <?= $thisDayevent->Nom.' '.$thisDayevent->Prenom; ?>
                                            </a>
                                            <?= '(de '.(new DateTime($thisDayevent->HeureDebut))->format('H:i').
                                            ' à '.(new DateTime($thisDayevent->HeureFin))->format('H:i').') ';?>

                                    </br>
                                        <?php endforeach; ?>

                                    </div>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/js/AgendaFilter.js"></script>


