<li class="header">MAIN NAVIGATION</li>

<li class="">
	<a href="<?php echo base_url('member/Dashboard'); ?>"><i class="fa fa-home"></i> Home</a>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>Layanan TIK</span> 
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($aplikasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/app/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Permintaan Akun Aplikasi</span>
			</a>
		</li>

		<li <?php if(isset($m_prestasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/sf/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Sharing Folder</span>
			</a>
		</li>

		<li <?php if(isset($m_cabor)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/akin/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Akun Individu</span>
			</a>
		</li>

		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/asus/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Akun Khusus</span>
			</a>
		</li>

		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/grup/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Grup</span>
			</a>
		</li>

		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/mail/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Kuota Mailbox</span>
			</a>
		</li>

		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/akun_domain/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Penonaktifan Akun Domain</span>
			</a>
		</li>

		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/pendampingan/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Pendampingan Video Konf.</span>
			</a>
		</li>

		
		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/akun_video/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Permintaan Akun Video</span>
			</a>
		</li>


	</ul>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>Layanan BMN</span> 
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($aplikasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/app/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Penemukan Layanan RT</span>
			</a>
		</li>
	</ul>
	
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($aplikasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/app/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Pemberdayaan BMN</span>
			</a>
		</li>
	</ul>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>Layanan TU</span> 
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($aplikasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/crud/app/add')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Dukungan keg. Kemenkeu</span>
			</a>
		</li>
	</ul>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>PDF</span> 
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($aplikasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('member/file')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>PDF</span>
			</a>
		</li>
	</ul>
</li>

<li class="">
	<a href="<?php echo base_url('home/logout') ;?>"><i class="fa fa-sign-out"></i>Sign Out</a>
</li>