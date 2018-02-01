<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo site_url('/'); ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				<li>
					<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-inbox"></i> <span>Surat masuk</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages" class="collapse ">
						<ul class="nav">
							<li><a href="<?php echo site_url('surat_masuk/entry'); ?>" class="">Entri surat masuk</a></li>
							<li><a href="<?php echo site_url('surat_masuk'); ?>" class="">Data surat masuk</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="fa fa-paper-plane"></i> <span>Surat keluar</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages1" class="collapse ">
						<ul class="nav">
							<li><a href="<?php echo site_url('surat_keluar/entry'); ?>" class="">Entri surat keluar</a></li>
							<li><a href="<?php echo site_url('surat_keluar'); ?>" class="">Data surat keluar</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo site_url('memo'); ?>"><i class="fa fa-comment"></i> <span>Memo</span></a></li>
				<li><a href="<?php echo site_url('/auth/tambah_user'); ?>"><i class="fa fa-user-o"></i> <span>Tambah petugas</span></a></li>
				<li><a href="<?php echo site_url('laporan'); ?>"><i class="fa fa-bar-chart"></i> <span>Laporan</span></a></li>
			</ul>
		</nav>
	</div>
</div>
