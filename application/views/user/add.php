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
				<a class="navbar-brand" href="#">User</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-dashboard"></i>
							<p class="hidden-lg hidden-md">User</p>
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
							<h4 class="title">Tambah User</h4>
						</div>
						<div class="content">
							<form action="<?= site_url('user/storeUser') ?>" method="POST">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control" placeholder="Adi Pramono" name="username" required>
										</div>
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>E-mail</label>
											<input type="text" class="form-control" placeholder="pramono@adi.com" name="email" required>
										</div>
                                    </div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control" name="password" required>
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
