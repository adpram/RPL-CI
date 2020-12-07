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
				<a class="navbar-brand" href="#">PELANGGAN</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-dashboard"></i>
							<p class="hidden-lg hidden-md">Pelanggan</p>
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
							<h4 class="title">Ubah Data Pelanggan</h4>
						</div>
						<div class="content">
							<?php
                                foreach ( $customer as $row ) {
                            ?>
							<form action="<?= site_url('customer/updateCustomer') ?>" method="POST">
								<input type="hidden" name="id" value="<?= $row->id; ?>">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Nama</label>
											<input type="text" class="form-control" placeholder="Pramono Adi"
												name="nama" value="<?= $row->nama ?>" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Telepon</label>
											<input type="number" min="0" class="form-control"
												placeholder="0895806184620" name="telepon" value="<?= $row->telepon ?>" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>E-mail</label>
											<input type="text" class="form-control" placeholder="adpram46@gmail.com"
												name="email"value="<?= $row->email ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Alamat</label>
											<textarea name="alamat" id="" class="form-control" cols="30"
												rows="5"><?= $row->alamat ?></textarea>
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
