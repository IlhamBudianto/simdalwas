
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Data LHP</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.php">HOME</a>
                  </li>
                  <li class="breadcrumb-item active">DATA LHP
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="media width-250 float-right">
              <media-left class="media-middle">
                <div id="sp-bar-total-sales"></div>
              </media-left>
              <div class="media-body media-right text-right">
                <h3 class="m-0"></h3><span class="text-muted">DATA LHP</span>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Add rows table -->

<!--/ Add rows table -->
<!-- Individual column searching (text inputs) table -->

<!-- Individual column searching (text inputs) table -->
<!-- Individual column searching (select inputs) table -->
<section id="select-inputs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA LHP</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                      
                        <div class="table-responsive">
						    <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <div class="pull-right">
                   
                </div>
            </div>
                
			<a href="<?php echo base_url('datalhp/tambah'); ?>" class="btn btn-primary">Tambah Data LHP</a> 
			 <button class="btn btn-default btn-xs btn-filter" ><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            <table class="table table-striped table-bordered datatable-select-inputs" id="table">
                                <thead>
								  <tr class="filters">
                       
                    
                        <th><b><input type="text" name="noLHP" class="form-control" placeholder="NOMOR LHP" disabled></th></b>
                        <th><input type="text" class="form-control" placeholder="TANGGAL LHP" disabled></th>
                        <th><input type="text" class="form-control" placeholder="TAHUN" disabled></th>
						<th><input type="text" name="noLHP" class="form-control" placeholder="AUDITOR" disabled></th>
                        <th><input type="text" class="form-control" placeholder="DINAS" disabled></th>
                        <th><input type="text" class="form-control" placeholder="AKSI" disabled></th>
    </tr>
    </thead>
    <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                             <th>NOMOR LHP</th>
		<th>TANGGAL LHP</th>
		<th>TAHUN</th>
		<th>NAMA INDUK</th>
		<th>BIDANG</th>
		<th>AKSI</th>
                                    </tr>
                                </tfoot>
                            </table>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        </div>
      </div>
    </div>

    

