		<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url();?>home">Accueil</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>consultation/ges">Gestion Des Médecins</a>
							</li>
							<li class="active">Modifier/Supprimer </li>
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
					     Modifier/Supprimer
				      </h1>
						</div><!-- /.page-header -->

								<!-- PAGE CONTENT BEGINS -->

    <div class="table-header">
        liste des Medcines
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div>
        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_length" id="dynamic-table_length">
                        <?= $Specialities; ?>
                    </div>
                </div>
                <div class="col-xs-6 dataTables_filter">
                    <div class="dataTables_length" id="dynamic-table_length">
                        <?= $Grades; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_length" id="dynamic-table_length">
                        <?= $Hopitals; ?>
                    </div>
                </div>
                <div class="col-xs-6"><div id="dynamic-table_filter" class="dataTables_filter">
                        <label>Search:<input onkeyup="Filter()" id="Search"class="form-control input-sm" placeholder="" aria-controls="dynamic-table" type="search"></label>
                 </div>
                </div>
            </div>
            </div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Nom
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">Telephone
                    </th>
                    <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">Specialite
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update
														: activate to sort column descending" aria-sort="ascending">
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Grade
                    </th>
                    <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Mail</th>
                    <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">Hopital
                    </th>
                </tr>
                <tbody id="tableCore">
                <?php $j=1; foreach ($Doctors as $Doctor) : ?>
                    <tr class="odd" role="row">
                        <td>
                            <a class="a" href="<?php echo base_url();?>/Doctor/profile/<?=$Doctor->NSS ;?>"><?= $Doctor->Nom; ?> <?= $Doctor->Prenom; ?></a>
                        </td>
                        <td><?= $Doctor->Tel; ?></td>
                        <td><?= $Doctor->specialite; ?></td>
                        <td class="hidden-480"><?= $Doctor->grade; ?></td>
                        <td class="sorting_1"><?= $Doctor->Mail; ?></td>
                        <td class="sorting_1"><?= $Doctor->hopital; ?></td>
                        <td class="sorting_1">
                            <div class="btn-group">
                            <a href="<?php echo base_url(); ?>Doctor/Edite/<?= $Doctor->NSS; ?>"  class="btn btn-primary">
                                <i href="Doctor/Edite/<?= $Doctor->NSS; ?>" class="ace-icon fa fa-pencil-square-o bigger-110"></i>
                            </a>
                            <button onclick="DeleteDoc('<?= $Doctor->NSS; ?>','<?= $j; ?>')" class="btn  btn-danger ">
                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                            </button>
                                </div>
                        </td>
                        <td style="display: none;"><?=$Doctor->NSS; ?></td>
                    </tr>
                <?php $j++;endforeach; ?>
                </tbody>

            </table>
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 1 to 10 of 23 entries
                        <span class="select-info">
                            <span class="select-item">1 row selected</span>
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
<script src="<?php echo base_url(); ?>assets/js/doctor.js"></script>
<script>
    function DeleteDoc(Nss){
        console.log(Nss);
        table = document.getElementById("tableCore");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            res = tr[i].getElementsByTagName("td")[7];
            console.log(res.innerHTML);
            // console.log(name.innerHTML+'   '+search);
                if (res.innerHTML == Nss) {
                    document.getElementById("dynamic-table").deleteRow(i+1);
                }
        }

        var httpreq = new XMLHttpRequest();
        httpreq.onreadystatechange = function() {
            if (httpreq.readyState === 4) {
                console.log('deleted')
            }
        }
        console.log('<?php echo base_url(); ?>Doctor/Delete/'+Nss);
        httpreq.open('DELETE','/telemed//index.php/Doctor/Delete/'+Nss,true);
        httpreq.send();
    }
</script>

