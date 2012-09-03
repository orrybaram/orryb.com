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
							<h1>Profile Settings</h1>
							<hr>
							<h2>Basic Info</h2>
							<form>
								<label>Name</label>
								<input type=text />
								<label>Title</label>
								<input type=text />
								<label>Country</label>
								<select>
									<option>United States</option>
									<option>Canada</option>
									<option>etc...</option>
								</select>
								<label>Industry</label>
								<input type=text />
								<label>Website</label>
								<input type=text />
								<label>Short Bio</label>
								<textarea></textarea>
								<label>Change Photo</label>
								<input type="file" name="datafile">
								<button class="blue">
									Save Changes
								</button>
							</form>
						</div>
						
						<div class="form-section">
							<h2>Edit Overview</h2>
							<hr>
							<form>
								<label>What do you primarily invest in?</label>
								<select>
									<option>Companies</option>
									<option>Funds</option>
									<option>Secondaries</option>
									<option>Co-investments</option>
									<option>Fund of Funds</option>
								</select>
								<label>How much is your average investment?</label>
								<input type=text />
								<label>How would you describe your investment process?</label>
								<select>
									<option>Internal</option>
									<option>Staff</option>
									<option>Board</option>
									<option>Consultant</option>
								</select>
								<label>How long does it typically take you to make an investment decision?</label>
								<select>
									<option>Less than 3 months</option>
									<option>3 to 6 months</option>
									<option>More than 6 months</option>
								</select>
								<label>How do you approach first time funds?</label>
								<select>
									<option>Anchor</option>
									<option>Do not invest</option>
									<option>invest</option>
								</select>
										
										<!--
										<div class="form-question">
											<p>My return hurdle is</p>
											<input type=text />
											<p>multiple</p>
											<input type=text />
											<p>irr.</p>
										</div>
										-->
							<button class="blue">
								Save Changes
							</button>
							</form>
						</div>
						
						<div class="form-section">
							<h2>Edit Interests</h2>
							<hr>
							<h3>Assets</h3>
							<div class="tag-section">
								<div id="tags">
								<div class="tag"><a href="#">An Asset</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">A Longer Asset</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Foo</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Something</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Asset Tag</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
							</div>
							</div>
							<form>
								<input class="tag" type=text />
								<button class="grey add">&#43;</button>
							</form>
							
							<h3>Geographies</h3>
							<div class="tag-section">
								<div class="tag"><a href="#">New York City</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Philadelphia</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Hong Kong</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Tokyo</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Chicago</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
							</div>
							<form>
								<input class="tag" type=text />
								<button class="grey add">&#43;</button>
							</form>
							
							<h3>Sectors</h3>
							<div class="tag-section">
								<div class="tag"><a href="#">A sector</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Another sector</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">some sector</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">Asset sector</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
								<div class="tag"><a href="#">fith sector</a><img src="../images/x-close.png" class="close-tag" alt="close" /></div>
							</div>
							<form>
								<input class="tag" type=text />
								<button class="grey add">&#43;</button>
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
						<li class="current"><a href="../settings/"><img src="../images/user-icon.png" alt="profile" />Profile</a></li>
						<li><a href="../settings/password.php"><img src="../images/key-password-icon.png" alt="password" />Password</a></li>
						<li><a href="../settings/preferences.php"><img src="../images/cog-preferences-icon.png" alt="preferences" />Preferences</a></li>
						<li><a href="../settings/privacy-settings.php"><img src="../images/lock-privacy-icon.png" alt="privacy" />Privacy Settings</a></li>
						<li><a href="../settings/third-party-settings.php"><img src="../images/facebook-icon.png" alt="privacy" />Third Party Settings</a></li>
					</ul>
				</section>
			</div>
			
		</div><!-- .row -->
	</div><!-- end .container main -->


<?php include '../footer.php'; ?>	