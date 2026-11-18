<?php include 'head.php'; ?>
<?php include 'header.php'; ?>	
 
	<div class="container main">
		<div class="row">
			<div class="four columns left">
				<nav><!-- Main Navigation-->
					<ul>
						<li><a href="#">Activity</a></li>
						<li><a href="#">My Investments</a></li>
						<li><a href="#">My Network</a></li>
					</ul>	
				</nav>
				<div id='your-network'> 
					<h2>In my network (42)</h2>
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
					<img src="images/user-icon.jpg" alt="sample-pic" />
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
				<div id="profile-page">
					<div id="profile-content">
						<div class="thumb-big">
							<img class="thumb"src="images/sample-pic.jpg" alt="sample-pic" />
							<button class="inactive">
								<img class="add" src="images/check-small.png" alt="add"/>My Profile 
							</button>
						</div>
						
						<div id="profile-info">	
							<h1>[ My Full Name ]</h1>
							<h2>Institutional Investor</h2>
							<h2>United  States | Media</h2>
							<p>Here's a short description of who I am, who I work for, 
							and some other stuff that I want people to know about me.</p>
							<a href="#">www.mywebsite.com</a>
						
						</div> 
						<a id="edit-basic-info" class="edit-link" href="#">Edit</a>
					</div>
					<div id="profile-edit"><!-- Hidden div for editting basic profile info -->
						<h1>Basic Info</h1>
						<div id="save-cancel">
							<a id="cancel-profile-edit" href="#">cancel</a><a class="save-profile" id="save-profile-edit" href="#">Save</a>
						</div>
						<hr>
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
						</form>
					</div>
						
						<div id="overview-edit"><!-- Hidden div for editting overview information -->
							<h1>Edit Overview</h1>
							<div id="save-cancel">
								<a id="cancel-overview-edit" href="#">cancel</a><a class="save-profile" id="save-overview-edit" href="#">Save</a>
							</div>
							<hr>
							<div id="overview-edit-section">
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
								</form>
							</div>  
						</div><!-- end #overview-edit -->
						
						<section id="profile-tabs">
							<ul class="tabs">
								<li><a class="active" href="#overview">Overview</a></li>
								<li><a href="#activity">Activity</a></li>
								<li><a href="#investments">Investments</a></li>
							</ul>
							
							<ul class="tabs-content">
								<li class="active" id="overviewTab">
									<div id="stats-box"> 
										<div class="stats">
											<h4>Investments</h4>
											<h1>4</h1>
										</div>
										<div class="stats">
											<h4>Intros</h4>
											<h1>7</h1>
										</div>
										<div class="stats">
											<h4>Co-Investors</h4>
											<h1>14</h1>
										</div>
										<div class="stats">
											<h4>Connections</h4>
											<h1>4200</h1>
										</div>
									</div>
									<hr>
	
									<a id="edit-overview" class="edit-link" href="#">Edit</a>
									<ul>
										<li>I invest in <span>Companies</span> @ <span>$2 per investment</span>.</li>
										
										<li>My investment process is <span>Consultant Driven</span>.</li> 
										
										<li>My typical investment decision timeframe is <span>3 to 6 months</span>.</li>
										
										<li>My return hurdle is <span>[something]</span> multiple <span>[something]</span> irr.</li>
										
										<li>I <span>do not invest</span> first time funds</li>
									</ul>   
								</li> 
								<li  id="activityTab">
									<div class="update">
										<img src="images/sample-pic.jpg" alt="sample-pic" />
										<h3><a href="#">This Guy</a> has invested with an investor</h3>
										<h4>Today at 12:30 EST | <a href="#">Comment</a> | <a href="#">Like+</a></h4>
									</div>
									<div class="update">
										<img src="images/sample-pic.jpg" alt="sample-pic" />
										<h3><a href="#">This Guy</a> has invested with an investor</h3>
										<h4>Today at 12:30 EST | <a href="#">Comment</a> | <a href="#">Like+</a></h4>
									</div>
									<div class="update">
										<img src="images/sample-pic.jpg" alt="sample-pic" />
										<h3><a href="#">This Guy</a> has invested with an investor</h3>
										<h4>Today at 12:30 EST | <a href="#">Comment</a> | <a href="#">Like+</a></h4>
									</div>
									<div class="update">
										<img src="images/sample-pic.jpg" alt="sample-pic" />
										<h3><a href="#">This Guy</a> has invested with an investor</h3>
										<h4>Today at 12:30 EST | <a href="#">Comment</a> | <a href="#">Like+</a></h4>
									</div>
									<div class="update">
										<img src="images/sample-pic.jpg" alt="sample-pic" />
										<h3><a href="#">This Guy</a> has invested with an investor</h3>
										<h4>Today at 12:30 EST | <a href="#">Comment</a> | <a href="#">Like+</a></h4>
									</div>
									<div class="update">
										<img src="images/sample-pic.jpg" alt="sample-pic" />
										<h3><a href="#">This Guy</a> has invested with an investor</h3>
										<h4>Today at 12:30 EST | <a href="#">Comment</a> | <a href="#">Like+</a></h4>
									</div>
									<div id="more">
										<h4><a href="#">Show More</a></h4>
									</div>
								</li>
								<li id="investmentsTab">
									<div id="portfolio-summary">
										<div class="portfolio-stat">
											<h2>$32,000,000</h2>
											<h3>Portfolio Value</h3>
										</div>
										<div class="portfolio-stat">
											<h2>$56,789,123</h2>
											<h3>Total Investments</h3>
										</div>			
									</div>
								</li>
							</ul><!-- end tabs-content -->
						</section>
					</div><!-- end #profile-page -->	
			</div><!-- end .eight columns -->
			
			<div class="four columns right">
				<div id="interests-edit"><!-- Hidden div to edit interests -->
					<h1>Edit Interests</h1>
					<div id="save-cancel">
						<a id="cancel-interests-edit" href="#">cancel</a><a id="save-interests-edit" class="save-profile"  href="#">Save</a>
					</div>
					<hr>
					<h2>Assets</h2>
					<div class="tag-section">
						<div id="tags">
						<div class="tag"><a href="#">An Asset</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">A Longer Asset</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Foo</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Something</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Asset Tag</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
					</div>
					</div>
					<form>
						<input type=text />
						<button class="grey">&#43;</button>
					</form>
					<hr>
					<h2>Geographies</h2>
					<div class="tag-section">
						<div class="tag"><a href="#">New York City</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Philadelphia</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Hong Kong</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Tokyo</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Chicago</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
					</div>
					<form>
						<input type=text />
						<button class="grey">&#43;</button>
					</form>
					<hr>
					<h2>Sectors</h2>
					<div class="tag-section">
						<div class="tag"><a href="#">A sector</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Another sector</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">some sector</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">Asset sector</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
						<div class="tag"><a href="#">fith sector</a><img src="images/x-close.png" class="close-tag" alt="close" /></div>
					</div>
					<form>
						<input type=text />
						<button class="grey">&#43;</button>
					</form>
				</div><!-- end #interests-edit -->
				
				<section id="profile-interests">
					<header>
						<h1>Interests</h1>
						<a id="edit-interests" class="edit-link" href="#">Edit</a>
					</header>	
					<h2>Assets</h2>
					<div class="tag-section">
						<div class="tag"><a href="#">An Asset</a></div>
						<div class="tag"><a href="#">A Longer Asset</a></div>
						<div class="tag"><a href="#">Foo</a></div>
						<div class="tag"><a href="#">Something</a></div>
						<div class="tag"><a href="#">Asset Tag</a></div>
					</div>
					<hr>
					<h2>Geographies</h2>
					<div class="tag-section">
						<div class="tag"><a href="#">New York City</a></div>
						<div class="tag"><a href="#">Philadelphia</a></div>
						<div class="tag"><a href="#">Hong Kong</a></div>
						<div class="tag"><a href="#">Tokyo</a></div>
						<div class="tag"><a href="#">Chicago</a></div>
					</div>
					<hr>
					<h2>Sectors</h2>
					<div class="tag-section">
						<div class="tag"><a href="#">A sector</a></div>
						<div class="tag"><a href="#">Another sector</a></div>
						<div class="tag"><a href="#">some sector</a></div>
						<div class="tag"><a href="#">Asset sector</a></div>
						<div class="tag"><a href="#">fith sector</a></div>
					</div>
				</section><!-- end #profile-interests -->
			</div><!-- end four.columns.right -->
		</div><!-- .row -->
	</div><!-- end .container main -->


<?php include 'footer.php'; ?>	