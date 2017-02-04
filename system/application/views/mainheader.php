
		<!-- navigation -->
	
		<div  id="nav" >
			<ul>
				<li  id ="<?php if($id=='c1') echo current; ?>"><a href="<?php echo site_url();?>pages">Home</a></li>
				<li  id ="<?php if($id=='c4') echo current; ?>"  ><a href="<?php echo site_url();?>pages/browse09">Browse</a></li>
				<li  id ="<?php if($id=='c2') echo current; ?>"><a href="<?php echo site_url();?>pages/adsearch">Search</a></li>
			<?php if(!$this->session->userdata('u_id') && !$this->session->userdata('username') ){?>
				<li  id ="<?php if($id=='c7') echo current; ?>"><a href="<?php echo site_url();?>pages/u_loginpage">My Ipsra</a></li>
			<?php }?>
			</ul>
			<?php if($this->session->userdata('u_id')||$this->session->userdata('username')  ){  ?>
			<p id="welcome">Welcome <?php echo $this->session->userdata('u_name');?> <?php echo $this->session->userdata('username');?></p>
			<ul>
				<?php if($this->session->userdata('u_id')) {?>
			<li id ="<?php if($id=='c5') echo current; ?>"  ><a href="<?php echo site_url();?>user">My Ibira</a></li>
			<li  id =""  ><a href="<?php echo site_url();?>form/u_logout">LogOut</a></li>	
					
			<?php }?>
			<?php if($this->session->userdata('username')) {?>
			<li id ="<?php if($id=='c6') echo current; ?>"  ><a href="<?php echo site_url();?>form/layout">Admin Zone</a></li>
			<li  id =""  ><a href="<?php echo site_url();?>form/logout">Admin Logout</a></li>			
			<?php }?>
			</ul>
			<?php }?>
			</p>
			
			</div>		
		
		