<!DOCTYPE html>
<html>	
<title>Mouse Brain Viewer</title>
<script type="text/javascript" src="threejs/three.min.js" ></script>		
<script type="text/javascript" src="threejs/MTLLoader.js" ></script>
<script type="text/javascript" src="threejs/OBJLoader.js" ></script>
<script type="text/javascript" src="threejs/OrbitControls.js" ></script>
<script type="text/javascript" src="d3js/d3.v2.js"></script>	
<script type="text/javascript" src="data/path.js" ></script>
<style type="text/css">
	body {
		margin: 0;
		background: #222;
		font-family: 'Work Sans', sans-serif;
		font-weight: 400;
	}
	header {
	  background: #FF9800;
	  width: 100%;
	}	
	header::after {
	  content: '';
	  display: table;
	  clear: both;
	}	
	.container {
		width: 80%;
		margin: 0 auto;
	}	
	.logo {
	  float: left;
	  padding: 10px 0;
	}
	nav {
	  float: right;
	}	
	nav ul {
	  margin: 0;
	  padding: 0;
	  list-style: none;
	}	
	nav li {
	  display: inline-block;
	  margin-left: 70px;
	  padding-top: 23px;
	  position: relative;
	}	
	nav a {
	  color: #255957;
	  text-decoration: none;
	  text-transform: uppercase;
	  font-size: 15px;
	}	
	nav a:hover {
	  color: black;
	}	
	nav a::before {
	  content: '';
	  display: block;
	  height: 5px;
	  background-color: #255957;
	  position: absolute;
	  top: 0;
	  width: 0%;	
	  transition: all ease-in-out 250ms;
	}	
	nav a:hover::before {
	  width: 100%;
	}
</style>
<header>
    <div class="container">
      <h2 class="logo" style="text-transform: uppercase"> Visualization of Mouse Brain</h2>
      <nav>
        <ul>
			<?php      			        	
				$items = array("Home", "3D Mouse Brains", "Tree-Structures", "Streamgraph");				
				foreach ($items as $item){
					if (isset($_GET['page']) && $_GET['page'] == $item){
						echo '<li><a href="?page=' . $item . '" class="active"> ' . $item . '</a></li>';
						$activePage = $item . ".php";
					}
					else{
						echo '<li><a href="?page=' . $item . '"> ' . $item . '</a></li>';
					}
				}
 			?>          
        </ul>
      </nav>     
    </div>
</header>
<br>
<br>
<body>
	<?php
		if (isset($activePage)){
			include  $activePage;
		}
		else{
			include "Home.php";
		}	
	?>
</body>
</html>
  