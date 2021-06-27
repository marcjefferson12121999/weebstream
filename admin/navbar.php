<style>
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-light' style="background-color: #e3f2fd !important;">
	<div class="container-fluid">
		
		<div class="sidebar-list">
				
				<a href="admin_home.php?page=category" class="nav-item nav-category"><span class='icon-field'><i class="fa fa-list"></i></span> Category</a>
				<a href="admin_home.php?page=posts" class="nav-item nav-posts"><span class='icon-field'><i class="fa fa-blog"></i></span> Posts</a>
				<a href="admin_home.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Site Settings</a>
		</div>

	</div>
</nav>
<script>
	$('.nav-<?php echo $_GET['page'] ?>').addClass('active')
</script>