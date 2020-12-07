<body>

	<div class="wrapper">
		<div class="sidebar" data-color="blue" data-image="<?php echo base_url() ?>assets/img/sidebar-5.jpg">

			<!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="/" class="simple-text">
						Rental Mobil
					</a>
				</div>

				<ul class="nav">
					<li>
						<a href="<?= site_url('home') ?>">
							<i class="pe-7s-graph"></i>
							<p>Beranda</p>
						</a>
					</li>
					<li>
						<a href="<?= site_url('user')?>">
							<i class="pe-7s-user"></i>
							<p>Data Admin</p>
						</a>
					</li>
					<li>
						<a href="<?= site_url('car')?>">
							<i class="pe-7s-car"></i>
							<p>Data Mobil</p>
						</a>
					</li>
					<li>
						<a href="<?= site_url('customer')?>">
							<i class="pe-7s-users"></i>
							<p>Data Peminjam</p>
						</a>
					</li>

				</ul>


				<div class="logo">
				</div>
				<ul class="nav">
					<li>
						<a href="<?= site_url('transaction') ?>">
							<i class="pe-7s-menu"></i>
							<p>Transaksi Rental</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
