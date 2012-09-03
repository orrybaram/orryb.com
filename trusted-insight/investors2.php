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
			
			<div class="twelve columns middle">
				<section id="investors">
					<header>
						<h1>Investors</h1>
						<button class="blue" id="show-filter">Show Filter Options</button>
					</header>
					<section id="investor-filter">
							<h1>Filter Options:</h1>
							
							<form>
								<div>
									<label>By Investor</label>
									<input placeholder="Add Investor" type='text' />
									<button class="grey">+</button>
								</div>
								<div>
									<label>By Fund</label>
									<input type='text' placeholder="Add Fund"/>
									<button class="grey">+</button>
								</div>
								<div>
									<label>By Market</label>
									<input type='text' placeholder="Add Market"/>
									<button class="grey">+</button>
								</div>
								<hr>
								
								<label>By Role</label>
								<div id="role-filter">	
									<input type="checkbox" /> <p>Role 1</p>
									<input type="checkbox" /> <p>Role 2</p>
									<input type="checkbox" /> <p>Role 3</p>
									<input type="checkbox" /> <p>Role 4</p>
									<input type="checkbox" /> <p>Role 5</p>
									<input type="checkbox" /> <p>Role 6</p>
								</div>
							</form>
						</section>
					<div id="investor-list">
						<div class="list-header">
							<div id="investor-title">Investor</div>
							<div id="followers-title">Followers</div>
							<div id="intros-title">Intros</div>
							<div id="investments-title">Investments</div>
						</div>
						
						<?php include '../trusted-insight/investor-list-row.php'; ?>
						<?php include '../trusted-insight/investor-list-row.php'; ?>
						<?php include '../trusted-insight/investor-list-row.php'; ?>
						
						<div id="more">
							<h4><a href="#">Show More</a></h4>
						</div>
					</div>
				</section>	
			</div>
			
			
				
				
				
			
			
		</div><!-- .row -->
	</div><!-- end .container main -->
 
<?php include '../trusted-insight/footer.php'; ?>	