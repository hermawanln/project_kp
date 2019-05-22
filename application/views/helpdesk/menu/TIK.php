<li class="header">MAIN NAVIGATION</li>

<li class="">
	<a href="<?php echo base_url('helpdesk/TIK'); ?>"><i class="fa fa-home"></i> Home</a>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>Managemen Layanan</span> 
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($aplikasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('admin/anggota/plus')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Akun Aplikasi</span>
			</a>
		</li>

	</ul>
</li>

<li class="">
	<a href="<?php echo base_url('home/logout') ;?>"><i class="fa fa-sign-out"></i>Sign Out</a>
</li>