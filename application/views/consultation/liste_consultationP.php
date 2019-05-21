
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
				<li class="active">Filtrage des Consultations </li>
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
      Filtrage des consultations
        </h1>
      </div><!-- /.page-header -->





<div class="col-xs-12">

	<?php echo form_open('consultation/getConsultations'); ?>

<fieldset class="form-horizontal" id="sample-form">
<div class="form-group">
<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="codeP">Code patient :</label>

<div class="col-xs-12 col-sm-9">
<div class="clearfix">
 <input type="text" id="N_ss" name="codeP" class="col-xs-12 col-sm-5" placeholder="Introduire le code patient " />
</div>
</div>
</div>
</fieldset>



    <div class="table-header">
        Liste des Consultations
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->

        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">







            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                <tr role="row">

                   
                   
                    <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Code patient
                    </th>

                    <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Code consultation
                    </th>

                    <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending"> Date consultation
                    </th>
                    
                </tr>
                
            <tbody id="tableCore">

            <?php foreach ($ConsultP as $consultP) : ?>
                <tr class="odd" role="row">


                    <td>
                      
                        <a class="a" href="get_patient_profile/<?= $consultP->id_patient; ?>"><?= 
                        $consultP->id_patient; ?></a>
                    </td>

                    <td>
                      
                     <a class="a" href="get_information_consultation/<?= $consultP->id_cons; ?>">
                        <?= $consultP->id_cons; ?></a>
                    </td>


                    <td class="sorting_1"><?= $consultP->date_cons; ?> </td>

                </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
                        <span class="select-info">
                            <span class="select-item"></span>
                            <span class="select-item"></span>
                            <span class="select-item"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
                        <ul id="pagination" class="pagination">
                            <li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="1" id="dynamic-table_previous">
                                <a onclick="Pagination()" >Previous</a>
                            </li>
                            <li class="paginate_button active" aria-controls="dynamic-table" tabindex="0" >
                                <a onclick="Pagination()">1</a>
                            </li>
                            <?php for($i=1;$i<=$Limite;$i++){ ?>
                                <li class="paginate_button" aria-controls="dynamic-table" tabindex="0">
                                    <a onclick="Pagination()"><?= $i+1 ; ?></a>
                                </li>
                            <?php }?>

                            <li class="paginate_button next" aria-controls="dynamic-table" tabindex="1" id="dynamic-table_next">
                                <a href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
