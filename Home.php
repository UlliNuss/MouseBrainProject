<html>
<style type="text/css">
		#images {
    		white-space: nowrap;
     		border: 4px solid #FF9800; 
		}
		img {
    		opacity: 1.0;
    		filter: alpha(opacity=100);
    		white-space: nowrap; 		
     		border: 4px solid #FF9800; 
		}
		img:hover {
   			opacity: 0.5;
    		filter: alpha(opacity=50);
    		white-space: nowrap;
     		border: 4px solid #FF9800; 
		}
		footer{
	 		background: #FF9800; 
	 		padding: 10px 850px; 
	 		text-align:center;
	 		position: absolute;
	 		margin-top: 225px;
		}
		ul.img-list {
		  list-style-type: none;
		  margin: 0;
		  text-align: center;
		}
		ul.img-list li {
		  display: inline-block;
		  height: 308px;
		  margin: 0 1em 1em 0;
		  position: relative;
		  width: 608px;
		}
		span.text-content {
		  background: rgba(255,152,0,0.3);
		  color: white;
		  cursor: pointer;
		  display: table;
		  height: 308px;
		  left: 0;
		  position: absolute;
		  top: 0;
		  width: 608px;
		  opacity: 0;
		  -webkit-transition: opacity 500ms;
		  -moz-transition: opacity 500ms;
		  -o-transition: opacity 500ms;
		  transition: opacity 500ms;
		}
		span.text-content span {
		  display: table-cell;
		  text-align: center;
		  vertical-align: middle;
		}
		ul.img-list li:hover span.text-content {
		  opacity: 1;
		}
</style>
<h1 style="text-align:center;">Home</h1>
	<p style="text-align:center; color:black;">
		This website is intended to visualize the different stages of the devolepment of a mouse brain <br>
		to understand the spatio-temporal development more easily. To achieve this, it makes use of <br>
		3D Mouse Brains Modells, Tree-Structures and Streamgraphs.		
	</p>
<br>
<ul class="img-list">
  <li>
    <a>
      <img src="data/slideshow/ns.png" width="600" height="300" />
      <span class="text-content"><span>Mouse Brains</span></span>
    </a>
  </li>
    <li style="width:308px;">
    <a>
      <img src="data/slideshow/ts.png" width="300" height="300" />
      <span class="text-content" style="width:308px;"><span>Tree-Structures</span></span>
    </a>
  </li>
  <li>
    <a>
      <img src="data/slideshow/sg.png" width="600" height="300" />
      <span class="text-content"><span>Streamgraph</span></span>
    </a>
  </li>
</ul>
<footer>
	<p> Website by Ulrike Sprengel </p>
</footer>
</html>