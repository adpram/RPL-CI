<div class="main-panel">
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">TRANSAKSI</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-dashboard"></i>
							<p class="hidden-lg hidden-md">Transaksi</p>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-globe"></i>
							<b class="caret hidden-lg hidden-md"></b>
							<p class="hidden-lg hidden-md">
								5 Notifications
								<b class="caret"></b>
							</p>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Notification 1</a></li>
							<li><a href="#">Notification 2</a></li>
							<li><a href="#">Notification 3</a></li>
							<li><a href="#">Notification 4</a></li>
							<li><a href="#">Another notification</a></li>
						</ul>
					</li>
					<li>
						<a href="">
							<i class="fa fa-search"></i>
							<p class="hidden-lg hidden-md">Search</p>
						</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="">
							<p>Account</p>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<p>
								Dropdown
								<b class="caret"></b>
							</p>

						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
					<li>
						<a href="<?= site_url('login/logout') ?>">
							<p>Log out</p>
						</a>
					</li>
					<li class="separator hidden-lg"></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="header">
							<h4 class="title">Tambah Transaksi</h4>
						</div>
						<div class="content">
							<form action="<?= site_url('transaction/storeTransaction') ?>" method="POST">
								<input type="hidden" name="lama" id="lama">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Peminjam</label>
                                            <select name="customer_id" id="" class="select-customers form-control">
												<option value=""></option>
                                                <?php foreach($customers as $customer) { ?>
                                                    <option value="<?= $customer->id ?>"><?= $customer->nama ?></option>
                                                <?php } ?>
                                            </select>
										</div>
									</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Mobil</label>
                                            <select name="car_id" id="car" class="select-cars form-control">
                                                <option value=""></option>
                                                <?php foreach($cars as $car) { ?>
                                                    <option value="<?= $car->id ?>"><?= $car->merk ?></option>
                                                <?php } ?>
                                            </select>
										</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
											<label style="color: white">s</label>
                                            <input type="text" class="form-control" style="text-align: center" disabled value="Rp. ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
										<div class="form-group">
											<label>Harga</label>
											<input type="text" class="form-control" id="hargaMobil" readonly>
										</div>
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Tanggal Pinjam</label>
											<input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?= date('Y-m-d') ?>">
										</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
											<input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?= date('Y-m-d',strtotime(date('Y-m-d') . "+1 days")) ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
											<label style="color: white">s</label>
                                            <input type="text" class="form-control" style="text-align: center" disabled value="Rp. ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
										<div class="form-group">
                                            <label>Total</label>
											<input type="text" class="form-control" id="total" name="total" readonly>
										</div>
									</div>
                                </div>

								<button type="submit" class="btn btn-success btn-fill pull-right">Tambah</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
