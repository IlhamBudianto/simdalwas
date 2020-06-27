

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">INPUT DATA PHP</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.php">Home</a>
                  </li>
             
                  <li class="breadcrumb-item active">Input Data PHP
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
 
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">




	

	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form-center">Input Data PHP</h4>
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
						<div class="card-text">
							<p>Form ini untuk menambahkan nomor LHP yang baru </p>
						</div>

						<form class="form" action="" method="post">
							<div class="row justify-content-md-center">
								<div class="col-md-6">
									<div class="form-body">
									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Tahun</label>
											<select id="projectinput5" name="kdtahun" class="form-control">
												 
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput6">Wilayah</label>
											<select id="projectinput6" name="kdWilayah" class="form-control">
												 
											</select>
										</div>
									</div>
								</div>
								<div class="form-body">
									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Departemen</label>
											<select id="projectinput5" name="kddep" class="form-control">
												  
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput6">Auditor</label>
											<select id="projectinput6" name="kdauditor" class="form-control">
												 
											</select>
										</div>
									</div>
								</div>
										<div class="form-group">
											<label for="eventInput1">Nomor LHP</label>
											<input type="text" id="eventInput1" class="form-control" placeholder=" " name="noLHP">
										</div>
										<div class="form-group">
									<label for="timesheetinput3">Tanggal LHP</label>
									<div class="position-relative has-icon-left">
										<input type="date" id="timesheetinput3" class="form-control" name="tglLHP">
										<div class="form-control-position">
											<i class="ft-message-square"></i>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Kode Obrik</label>
											<select id="projectinput5" name="kdobrik" class="form-control" >
												  
											</select>
										</div>
									</div>

									 
								</div>
										<div class="form-group">
											<label for="eventInput2">Nama Obrik</label>
											<input type="text" class="form-control" name="namaobrik" id="namaobrik" readonly>
										</div>
										<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Nama Induk</label>
											<select id="projectinput5" name="kdInduk" class="form-control">
												    
											</select>
										</div>
									</div>

									 
								</div>
										<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Bidang</label>
											<select id="projectinput5" name="bidang" class="form-control">
												    <option></option>
													<option>Kompherensif</option>
													<option>Kebijakan</option>
													<option>Tupoksi</option>
													<option>Pengelolaan Aset Daerah</option>
													<option>Pengelolaan Keuangan</option>
													<option>Pengelolaan Pendapatan</option>
													<option>Pengelolaan Kepegawaian</option>
													<option>Pengelolaan Kekayaan</option>
											</select>
										</div>
									</div>

									 
								</div>
								<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Sifat Pemeriksaan</label>
											<select id="projectinput5" name="sifat" class="form-control">
												    <option></option>
													<option>Reguler</option>
											<option>Khusus</option>
											<option>Rahasia</option>
											<option>Terpadu</option>
											<option>Kasus</option>
											</select>
										</div>
									</div>

									 
								</div>
								<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput5">Lokasi</label>
											<select id="projectinput5" name="klplokasi" class="form-control">
												    <option>Provinsi</option>
											<option>Kab/Kota</option>
											</select>
										</div>
									</div>

									 
								</div>
								
								<div class="form-group">
									<label for="projectinput8">Tim Pemeriksa</label>
									<textarea id="projectinput8" rows="5" class="form-control" name="ketLHP" ></textarea>
								</div>
								<div class="form-group">
											<label for="eventInput1">User</label>
											<input type="text" id="eventInput1" class="form-control" placeholder="" name="user">
										</div>
							</div>

									</div>
								</div>
							</div>

							<div class="form-actions center">
								<button type="button" class="btn btn-warning mr-1">
									<i class="ft-x"></i> Cancel
								</button>
								<button type="submit" name="simpan" class="btn btn-primary">
									<i class="fa fa-check-square-o"></i> Save
								</button>
								<a href="tabelphp.php" style=text-decoration:none>
    <input type="button" class="btn btn-success"value="Kembali"></a> 
							</div>
						</form>	

					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>

