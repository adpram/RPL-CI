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
				<a class="navbar-brand" href="#">CAR</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-dashboard"></i>
							<p class="hidden-lg hidden-md">Car</p>
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
							<h4 class="title">Ubah Data Mobil</h4>
						</div>
						<div class="content">
                            <?php
                                foreach ( $car as $row ) {
                            ?>
                                <form action="<?= site_url('car/updateCar') ?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $row->id; ?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Merk</label>
                                                <input type="text" class="form-control" placeholder="Daihatsu Grand Xenia" name="merk" value="<?= $row->merk ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Tipe</label>
                                                <input type="text" class="form-control" placeholder="1.3 X MT" name="tipe" value="<?= $row->tipe ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <input type="number" min="0" class="form-control" placeholder="2020" name="tahun" value="<?= $row->tahun ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Nomor Polisi</label>
                                                <input type="text" class="form-control" placeholder="B1991RK" name="no_polisi" value="<?= $row->no_polisi ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label style="color: white">s</label>
                                                <input type="text" class="form-control" style="text-align: right" disabled value="Rp. ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="number" min="0" class="form-control" placeholder="500000" name="harga" value="<?= $row->harga ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="0" <?php if($row->status == 0) {echo 'selected="selected"';};?>>Tersedia</option>
                                                    <option value="1" <?php if($row->status == 1) {echo 'selected="selected"';};?>>Tidak Tersedia</option>
                                                    <option value="2" <?php if($row->status == 2) {echo 'selected="selected"';};?>>Dalam Perbaikan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-fill pull-right">Perbarui</button>
                                    <div class="clearfix"></div>
                                </form>
                            <?php } ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
