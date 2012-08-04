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
				<section id="investors">
					<header>
						<h1>Investors</h1>
						<h4>Filter by: <a href="#">All</a> | <a href="#">Rank</a> | <a href="#">Activity</a></h4>
					</header>
					<div id="investor-list">
						<div class="investor">
							<div class="investor-info">
								<img src="images/sample-pic.jpg" alt="sample-pic" />
								<h3><a href="#">Firstname Lastname</h3>
								<h4>Institutional Investor</h4>
								<h4>United States</h4>
								<h4>Media</h4>
							</div>
							<button class="grey follow">
								<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Connect With
							</button>
						</div>
						
				<!-- if investor is already connected, the button gets a class of inactive -->
						<div class="investor">
							<div class="investor-info">
								<img src="images/sample-pic.jpg" alt="sample-pic" />
								<h3><a href="#">Firstname Lastname</h3>
								<h4>Institutional Investor</h4>
								<h4>United States</h4>
								<h4>Media</h4>
							</div>
							<button class="inactive">
								<img class="add" src="../trusted-insight/images/check-small.png" alt="add"/>In Your Network
							</button>
						</div>
						<div class="investor">
							<div class="investor-info">
								<img src="images/sample-pic.jpg" alt="sample-pic" />
								<h3><a href="#">Firstname Lastname</h3>
								<h4>Institutional Investor</h4>
								<h4>United States</h4>
								<h4>Media</h4>
							</div>
							<button class="grey follow">
								<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Connect With
							</button>
						</div>
						<div class="investor">
							<div class="investor-info">
								<img src="images/sample-pic.jpg" alt="sample-pic" />
								<h3><a href="#">Firstname Lastname</h3>
								<h4>Institutional Investor</h4>
								<h4>United States</h4>
								<h4>Media</h4>
							</div>
							<button class="grey follow">
								<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Connect With
							</button>
						</div>
						<div class="investor">
							<div class="investor-info">
								<img src="images/sample-pic.jpg" alt="sample-pic" />
								<h3><a href="#">Firstname Lastname</h3>
								<h4>Institutional Investor</h4>
								<h4>United States</h4>
								<h4>Media</h4>
							</div>
							<button class="inactive">
								<img class="add" src="../trusted-insight/images/check-small.png" alt="add"/>In Your Network
							</button>
						</div>
						<div class="investor">
							<div class="investor-info">
								<img src="images/sample-pic.jpg" alt="sample-pic" />
								<h3><a href="#">Firstname Lastname</h3>
								<h4>Institutional Investor</h4>
								<h4>United States</h4>
								<h4>Media</h4>
							</div>
							<button class="grey follow">
								<img class="add" src="../trusted-insight/images/plus-green.png" alt="add"/>Connect With
							</button>
						</div>
						<div id="more">
							<h4><a href="#">Show More</a></h4>
						</div>
					</div>
				</section>	
			</div>
			
			<div class="four columns right">
				<section id="investor-filter">
					<header>
						<h1>Filter</h1>
					</header>	
						<form>
							<label>By Investor</label>
							<input placeholder="Add Investor" type='text' />
							<button class="grey">+</button>
							<label>By Fund</label>
							<input type='text' placeholder="Add Fund"/>
							<button class="grey">+</button>
							<label>By Market</label>
							<input type='text' placeholder="Add Market"/>
							<button class="grey">+</button>
						
							<hr>
							
							<label>By Role</label>
							<input type="checkbox" /> <p>Role 1</p>
							<input type="checkbox" /> <p>Role 2</p>
							<input type="checkbox" /> <p>Role 3</p>
							<input type="checkbox" /> <p>Role 4</p>
							<input type="checkbox" /> <p>Role 5</p>
							<input type="checkbox" /> <p>Role 6</p>
	
						</form>
						
				</section>
				
				
			
			</div><!-- end .threecol last -->
		</div><!-- .row -->
	</div><!-- end .container main -->
 
<?php include '../trusted-insight/footer.php'; ?>	