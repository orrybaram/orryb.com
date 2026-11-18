<?php include '../trusted-insight/head.php'; ?>
<?php include '../trusted-insight/header.php'; ?>	
 
	<div class="container main">
		<div class="row">
			<div class="four columns left">
				<div id="profile">
					<div id="thumb">
						<img src="../trusted-insight/images/sample-pic.jpg" alt="sample-pic" />
					</div>
					<div id="info">	
						<h3><a href="#">Profile Name</a></h3>
						<h4>Institutional Investor</h4>
						<h4>United  States | Media</h4>
						<p><a href="#">Inbox </a>(0)</p>
						<a href="#"><img src="../trusted-insight/images/envelope.png" alt="mail" /></a>
					</div>
				</div>
				<nav>
					<ul>
						<li class="current"><a href="#">Activity</a></li>
						<li><a href="#">My Investments</a></li>
						<li><a href="#">My Network</a></li>
					</ul>	
				</nav>
				<div id='your-network'>
					<h2>In your network (42)</h2>
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
					<a href="#">View all</a>
				</div>
				<div id='your-funds'>
					<h2>Your funds (42)</h2>
					<img src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
					<img src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
					<a href="#">View all</a>
				</div>
			</div>
			
			<div class="eight columns middle">
				<?php include 'activity-feed.php'; ?>	
			</div>
			
			<div class="four columns right">
				<section id="trending">
					<header>
						<h1>Trending</h1>
					</header>	
						<h2>Geographic</h2>
						<ul>
							<li>
								<h3><a href="#">1. New York, USA</a></h3>
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Follow
								</button>
							</li>
							<li>
								<h3><a href="#">2. New York, USA</a></h3>
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Follow
								</button>
							</li>
							<li>
								<h3><a href="#">3. New York, USA</a></h3>
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Follow
								</button>
							</li>
						</ul>
						<hr>
						<h2>Assets</h2>
						<ul>
							<li>
								<h3><a href="#">1. Asset</a></h3>
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Follow
								</button>
							</li>
							<li>
								<h3><a href="#">2. Asset</a></h3>
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Follow
								</button>
							</li>
							<li>
								<h3><a href="#">3. Asset</a></h3>
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Follow
								</button>
							</li>
						</ul>
				</section>
				
				<section id="suggestions">
				
					<header>
						<h1>Suggestions</h1>
					</header>	
					<h2>People</h2>
						
						<div class="suggestion person">
							<img class="thumb" src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
							<div class="info">
								<h3><a href="#">First Name Last Name</a></h3>
								
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="follow"/>Connect</a>
								</button> 
								<a href="#"><img class="close" src="../trusted-insight/images/x-close.png" alt="close"/></a>
							</div>
							
						</div>
						
						<div class="suggestion person">
							<img class="thumb" src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
							<div class="info">
								<h3><a href="#">First Name Last Name</a></h3>
								
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="follow"/>Connect</a>
								</button> 
								<a href="#"><img class="close" src="../trusted-insight/images/x-close.png" alt="close"/></a>
							</div>
						</div>
						
						<div class="suggestion person">
							<img class="thumb" src="../trusted-insight/images/user-icon.jpg" alt="sample-pic" />
							<div class="info">
								<h3><a href="#">First Name Last Name</a></h3>
								
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="follow"/>Connect</a>
								</button> 
								<a href="#"><img class="close" src="../trusted-insight/images/x-close.png" alt="close"/></a>
							</div>
						</div>
						<div id="find-more">
							<p>Find more people on</p>
							<a href="#"><img class="social-icons" src="../trusted-insight/images/facebook-icon.png" alt="facebook" title="find connections on facebook" /></a>
							<a href="#"><img class="social-icons" src="../trusted-insight/images/linkedin-icon.png" alt="linkedin" title="find connections on linked in" /></a>
							<a href="#"><img class="social-icons" src="../trusted-insight/images/twitter-icon.png" alt="twitter" title="find connections on twitter" /></a>
							
						</div>
						
						<hr>
						
						<h2>Funds</h2>
						
						<div class="suggestion fund">
							<img class="thumb" src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
							<div class="info">
								<h3><a href="#">Fund Name</a></h3>
								
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="follow"/>Connect</a>
								</button> 
								<a href="#"><img class="close" src="../trusted-insight/images/x-close.png" alt="close"/></a>
							</div>
						</div>
						
						<div class="suggestion fund">
							<img class="thumb" src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
							<div class="info">
								<h3><a href="#">Fund Name</a></h3>
								
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="follow"/>Connect</a>
								</button> 
								<a href="#"><img class="close" src="../trusted-insight/images/x-close.png" alt="close"/></a>
							</div>
						</div>
						
						<div class="suggestion fund">
							<img class="thumb" src="../trusted-insight/images/fund-icon.jpg" alt="sample-pic" />
							<div class="info">
								<h3><a href="#">Fund Name</a></h3>
								
								<button class="grey">
									<img class="add" src="../trusted-insight/images/plus-green.png" alt="follow"/>Connect</a>
								</button> 
								<a href="#"><img class="close" src="../trusted-insight/images/x-close.png" alt="close"/></a>
							</div>
						</div>
					</section>
			
			</div><!-- end .threecol last -->
		</div><!-- .row -->
	</div><!-- end .container main -->
 
<?php include '../trusted-insight/footer.php'; ?>	