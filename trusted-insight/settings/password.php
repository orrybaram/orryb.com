<?php include '../head.php'; ?>
<?php include '../header.php'; ?>	
 
	<div class="container main">
		<div class="row">
			<div class="four columns left"> 
				<div id="profile"> 
					<div id="thumb">
						<img src="../images/sample-pic.jpg" alt="sample-pic" />
					</div>
					<div id="info">	
						<h3><a href="#">Profile Name</a></h3>
						<h4>Institutional Investor</h4>
						<h4>United  States | Media</h4>
						<p><a href="#">Inbox </a>(0)</p>
						<a href="#"><img src="../images/envelope.png" alt="mail" /></a>
					</div>
				</div>
				<nav><!-- Main Navigation-->
					<ul>
						<li><a href="#">Activity</a></li>
						<li><a href="#">My Investments</a></li>
						<li><a href="#">My Network</a></li>
					</ul>	
				</nav>
				<div id='your-network'> 
					<h2>In my network (42)</h2>
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<img src="../images/user-icon.jpg" alt="sample-pic" />
					<a href="#">View all &#187;</a>
				</div>
				
				<!-- Remove #your-funds 
				<div id='your-funds'>
					<h2>Your funds (4)</h2>
					<img src="images/fund-icon.jpg" alt="sample-pic" />
					<img src="images/fund-icon.jpg" alt="sample-pic" />
					<img src="images/fund-icon.jpg" alt="sample-pic" />
					<img src="images/fund-icon.jpg" alt="sample-pic" />
					<a href="#">View all &#187;</a>
				</div>
				-->

				<section id="track-record">
					<h2>Track Record</h2>
					<div id="track-records-box"> 
						<div class="track-records">
							<h1>99</h1>
							<h4>Venture Capital</h4>
						</div>
						<div class="track-records">
							<h1>99</h1>
							<h4>Hedge Funds</h4>
						</div>
						<div class="track-records">
							<h1>99</h1>
							<h4>China</h4>
						</div>
						<div class="track-records">
							<h1>99</h1>
							<h4>India</h4>
						</div>
					</div>
				<a href="#">View all &#187;</a>
				</section>				
	
			</div><!-- end .four columns left -->
			
			
			<div class="eight columns middle">
				<div id="settings">
						<div class="form-section">	
							<h1>Change Password</h1>
							<hr>
							<form>
								<label>Current Password</label>
								<input type=password />
								<a href="#">Forgot your password?</a>
								<label>New Password</label>
								<input type=password />
								<label>Confirm New Password</label>
								<input type=password />
								<button class="blue">
									Save Changes
								</button>
							</form>
						</div>
				</div><!-- end #settings -->
						 
			</div><!-- end .eight columns -->
			<div class="four columns right">
				<section id="settings-nav">	
					<h1>Manage Settings</h1>
					<hr>
					<ul>
						<li><a href="../settings/"><img src="../images/user-icon.png" alt="profile" />Profile</a></li>
						<li  class="current"><a href="../settings/password.php"><img src="../images/key-password-icon.png" alt="password" />Password</a></li>
						<li><a href="../settings/preferences.php"><img src="../images/cog-preferences-icon.png" alt="preferences" />Preferences</a></li>
						<li><a href="../settings/privacy-settings.php"><img src="../images/lock-privacy-icon.png" alt="privacy" />Privacy Settings</a></li>
						<li><a href="../settings/third-party-settings.php"><img src="../images/facebook-icon.png" alt="privacy" />Third Party Settings</a></li>
					</ul>
				</section>
			</div>
			
		</div><!-- .row -->
	</div><!-- end .container main -->


<?php include '../footer.php'; ?>	