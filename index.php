<?php
	$PageTitle="joshwhitman.net";

	function customPageHeader(){?>
		<!--insert additional header content here-->

<?php }
	include('header.php');
?>


<div class="hexgrid">
	<div class="hex_header">
	<h1>josh<strong>whitman</strong></h1>
	<h4>QA Analyst, web developer, writer</h4>
	</div>
	<div class="hexagon spacer"><div class="hex_content"></div></div>
	<!--projects-->
	<a href="#" alt="projects">
		<div class="hexagon hex_middle">
			<div class="hex_content">
				<i class="fa fa-archive fa-2x"></i>
				<span>projects</span>
			</div>
		</div>
	</a>
	<!--about-->
	<a href="about.php" alt="about">
		<div class="hexagon">
			<div class="hex_content">
				<i class="fa fa-user fa-2x"></i>
				<span>about</span>
			</div>
		</div>
	</a>
	<div class="hexagon spacer"><div class="hex_content"></div></div>
	<div class="hexagon spacer hex_middle"><div class="hex_content"></div></div>
	<!--tumblr-->
	<a href="http://joshura.com" alt="Blog/tumblr">
		<div class="hexagon">
			<div class="hex_content">
				<i class="fa fa-tumblr fa-2x"></i>
				<span>tumblr</span>
			</div>
		</div>
	</a>
	<!--github-->
	<a href="https://github.com/joshwhitman" alt="Github">
		<div class="hexagon">
			<div class="hex_content">
				<i class="fa fa-github fa-2x"></i>
				<span>github</span>
			</div>
		</div>
	</a>
	<!--linkedin-->
	<a href="https://www.linkedin.com/in/joshura" alt="LinkedIn">
		<div class="hexagon hex_middle">
			<div class="hex_content">
				<i class="fa fa-linkedin fa-2x"></i>
				<span>linkedin</span>
			</div>
		</div>
	</a>
	<!--twitter-->
	<a href="https://twitter.com/joshura" alt="Twitter">
		<div class="hexagon">
			<div class="hex_content">
				<i class="fa fa-twitter fa-2x"></i>
				<span>twitter</span>
			</div>
		</div>
	</a>
</div>
<?php
	include('footer.php');		
?>
