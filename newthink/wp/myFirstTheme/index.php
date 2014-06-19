<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="./include/menu.css">
	<script src="./includes/menu.js"></script>
	<style>
		html {
		background: #eee1c2;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=’#EEE1C2′, endColorstr=’#FFFFFF’);
		background-image: -webkit-gradient(linear, left top, left bottom, from(#EEE1C2), to(#FFFFFF));
		background-image: -moz-linear-gradient(top,  #EEE1C2,  #FFFFFF);
	}

	body {
		background: #eee1c2;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=’#EEE1C2′, endColorstr=’#FFFFFF’);
		background-image: -webkit-gradient(linear, left top, left bottom, from(#EEE1C2), to(#FFFFFF));
		background-image: -moz-linear-gradient(top,  #EEE1C2,  #FFFFFF);
		font: 14px/1.4 Georgia, Serif;
	}

	#header, #footer, #firstSideBar, #secondSidebar {
		display: block;
	}

	#pageWrapper {
		width: 1000px;
		background-color: #ffffff;
		margin-left: auto;
		margin-right: auto;
	}

	#header {
		position: relative;
		background-color: #a11c46;
		height: 55px;
		padding: 20px;
	}

	#blogTitle {
		position: absolute;
		left: 86px;
		top: -15px;
		color: #ffffff;
		font: 40px/1.4 Georgia, Serif;
		text-shadow: #000000 2px 2px 1px;
	}

	#blogSlogan {
		position: absolute;
		left: 86px;
		top: 48px;
		font: 15px/1.4 Georgia, Serif;
		text-shadow: #000000 2px 2px 1px;
	}

	#firstSideBar {
		font: 13px/1.4 Georgia, Serif;
		color: #666;
		padding: 5px;
		padding-bottom: 15px;
		padding-left: 10px;
		background-color: #ffffff;
		width: 150px;
		text-align: left;
		float: right;
		margin-left: 5px;
		margin-right: 5px;
		margin-left: 5px;
	}

	#secondSideBar {
		font: 13px/1.4 Georgia, Serif;
		color: #666;
		padding: 5px;
		padding-bottom: 15px;
		padding-left: 10px;
		border-left: 2px solid #a11c46;
		background-color: #ffffff;
		width: 150px;
		text-align: left;
		float: right;
		margin-left: 5px;
		margin-right: 5px;
		margin-left: 5px;
	}

	.sidebarTitle {
		font: bold 15px/1.0 Arial, sans-serif;
		color: #a11c46;
	}

	#footer {
		background-color: #a11c46;
		text-align: center;
		color: #ffffff;
		padding: 20px;
	}	

	#mainContent {
		padding: 0px 5px 0px 15px;
		background-color: #ffffff;
		margin-right: 355px;
		margin-top: 5px;
	}

	#introTitle {
		background-color: #a11c46;
		color: #ffffff;
		padding: 2px 2px 2px 5px;
		text-shadow: #000000 2px 2px 1px;
	}

	#introParagraph {
		font-style: italic;
	}

	#postLists {
		position: relative;
		list-style: none;
	}

	#postLists li {
		position: relative;
		margin-left: -40px;
	}

	.postTitle {
		background-color: #a11c46;
		color: #ffffff;
		padding: 5px;
		text-shadow:#000000 2px 2px 1px;
	}

	.postImage {
		position: absolute;
		top: 50px;
		left: 0px;
	}

	.postExcerpt {
		position: relative;
		padding: 0px 0px 0px 80px;
		color: #666;
		line-height: 1.5;
	}

	.postContent {
		position: relative;
		padding: 0px 0px 0px 80px;
		color: #666;
		line-height: 1.5;
	}
	</style>
</head>
<body>
	
	<div id="pageWrapper">
		<div id="header">
			<img src="http://placehold.it/350x150" alt="placeholder" id="logo"/>
		
			<h1 id="blogTitle">My first WP theme</h1>
			
			<p id="blogSlogan">Hello world</p>
		</div>

		<div id="menu">
			<div >
				<table >
					<tr>
						<td>
							<a href=”page.htm”>Item 1</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href=”page.htm”>Item 2</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href=”page.htm”>Item 3</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href=”page.htm”>Item 4</a>
						</td>
					</tr>
				</table>
			</div>


					<td  onmouseover=”expand(this);”
					onmouseout=”collapse(this);”>
						<p>Menu 2</p>
					<div >
						<table >
					<tr><td>
					<a href=”page.htm”>Item 1</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 2</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 3</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 4</a>
					</td></tr>
					</table>
					</div>
					</td>

					<td  onmouseover=”expand(this);”
					onmouseout=”collapse(this);”>
					<p>Menu 3</p>
					<div >
					<table >
					<tr><td>
					<a href=”page.htm”>Item 1</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 2</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 3</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 4</a>
					</td></tr>
					</table>
					</div>
					</td>

					<td  onmouseover=”expand(this);”
					onmouseout=”collapse(this);”>
					<p>Menu 4</p>
					<div >
					<table >
					<tr><td>
					<a href=”page.htm”>Item 1</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 2</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 3</a>
					</td></tr>
					<tr><td>
					<a href=”page.htm”>Item 4</a>
					</td></tr>
					</table>
					</div>
					</td>

					</tr>
					</table>

</div>

		<div id="featuredBanner">
			<img id="featuredImage" src="http://lorempixel.com/output/nature-q-g-300-150-8.jpg" alt="nice picture"/>
		</div>

		<div id="firstSideBar">
			<div class="sideBarWidgets">
				<div class="sidebarTitle">
					<h4>Title of Sidebar</h4>
					<p class="sidebarExcerpt">Random text in sidebar</p>
					<a href="#" class="clickForMore">Click for More</a>

					<h4>Title of Sidebar</h4>
					<p class="sidebarExcerpt">Random text in sidebar</p>
					<a href="#" class="clickForMore">Click for More</a>

					<h4>Title of Sidebar</h4>
					<p class="sidebarExcerpt">Random text in sidebar</p>
					<a href="#" class="clickForMore">Click for More</a>
				</div>
			</div>
		</div>

		<div id="secondSidebar">
			<div class="sideBarWidgets">
				<div class="sidebarTitle">
					<h4>Title of Sidebar</h4>
					<p class="sidebarExcerpt">Random text in sidebar</p>
					<a href="#" class="clickForMore">Click for More</a>

					<h4>Title of Sidebar</h4>
					<p class="sidebarExcerpt">Random text in sidebar</p>
					<a href="#" class="clickForMore">Click for More</a>

					<h4>Title of Sidebar</h4>
					<p class="sidebarExcerpt">Random text in sidebar</p>
					<a href="#" class="clickForMore">Click for More</a>
				</div>
			</div>
		</div>

		<div id="mainContent">
			<div id="introTitle">
				<h2>Welcome to my Website</h2>
			</div>

			<p id="introParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, provident, cum, beatae deserunt doloribus esse eaque obcaecati qui aut dicta reprehenderit incidunt illum aliquid excepturi non inventore optio ratione deleniti.</p>

			<ul id="postLists">
				<li>
					<h3 class="postTitle">Post title goes here</h3>
					<p class="postExcerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, fugiat dignissimos alias vel perferendis aut laudantium voluptatem eius animi tempore voluptatibus enim neque veniam maxime repudiandae maiores facilis modi accusantium.</p>
					<a href="#" class="clickForMore">Click for More</a>

					<img src="http://lorempixel.com/400/200/sports/Dummy-Text/" alt="sport" class="postImage" />
				</li>

				<li>
					<h3 class="postTitle">Post title goes here</h3>
					<p class="postExcerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, fugiat dignissimos alias vel perferendis aut laudantium voluptatem eius animi tempore voluptatibus enim neque veniam maxime repudiandae maiores facilis modi accusantium.</p>
					<a href="#" class="clickForMore">Click for More</a>

					<img src="http://lorempixel.com/400/200/sports/Dummy-Text/" alt="sport" class="postImage" />
				</li>

				<li>
					<h3 class="postTitle">Post title goes here</h3>
					<p class="postExcerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, fugiat dignissimos alias vel perferendis aut laudantium voluptatem eius animi tempore voluptatibus enim neque veniam maxime repudiandae maiores facilis modi accusantium.</p>
					<a href="#" class="clickForMore">Click for More</a>

					<img src="http://lorempixel.com/400/200/sports/Dummy-Text/" alt="sport" class="postImage" />
				</li>
			</ul>
		</div>

		<div id="footer">
			<div id="copyright">&copy; 2014 Kamil Abzalov</div>
		</div>
		
	</div>

</body>
</html>