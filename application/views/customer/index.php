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
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<div class="col-sm-6" style="margin-left: -20px">
								<h4 class="title">Data Pelanggan</h4>
								<p class="category">Data pelanggan rental mobil</p>
							</div>
							<div class="col-sm-6" style="text-align: right">
								<a href="<?= site_url('customer/addCustomer')?>" class="btn btn-success btn-simple"><i
										class="fa fa-plus" aria-hidden="true"></i> Tambah Pelanggan</a>
							</div>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th style="width: 5%">No</th>
									<th style="width: 20%">Nama</th>
									<th style="width: 10%">Telepon</th>
									<th style="width: 10%">E-mail</th>
									<th style="width: 35%">Alamat</th>
									<th style="width: 20%">Aksi</th>
								</thead>
								<tbody>
									<?php 
										if ( count($customers) > 0 ) {
                                        foreach ( $customers as $index => $customer ) { 
                                    ?>
									<tr>
										<td><?= $index+1; ?></td>
										<td><?= $customer->nama; ?></td>
										<td><?= $customer->telepon; ?></td>
                                        <td><?= $customer->email; ?></td>
                                        <td><?= $customer->alamat; ?></td>
										<td>
											<a href="<?= site_url('customer/editCustomer/'. $customer->id) ?>"
												class="btn btn-warning btn-fill btn-sm"><i class="fa fa-pencil-square-o"
													aria-hidden="true"></i> Edit</a>
											<a href="<?= site_url('customer/destroyCustomer/'. $customer->id) ?>"
												class="btn btn-danger btn-fill btn-sm deleteConfirm"><i
													class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
										</td>
									</tr>
									<?php } ?>
									<?php } else { ?>
									<tr>
										<td colspan="6" style="text-align: center;">Belum ada data</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
