<html>
<style>	
		#div2 {
			width: 1200px; 
	 		height:30px;
	 		padding:10px; 
	 		margin-left: 0px;
 	 		text-align:left;
		}
		h3 {
			position: absolute;
			margin-left: 1550px;
			margin-top: 50px;
			color: #FF9800;
			font-size: 24px;
		}
		button {
		    background-color: #FF9800;
		    color: black;
		    border: 1px solid black;
		    padding: 15px 30px;
		    text-align: center;
		    display: inline-block;
		    font-size: 16px;
		    -webkit-transition-duration: 0.4s; /* Safari */
    		transition-duration: 0.4s;
    		cursor: pointer;
    		float: left;
		}		
		button:hover {
			background-color: #7F4C00;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
		select#brainareas{
			position: relative;
			margin-top: 0px;
			margin-left: 0px;
		   -webkit-appearance: button;
		   -webkit-border-radius: 2px;
		   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
		   -webkit-padding-end: 10px;
		   -webkit-padding-start: 2px;
		   -webkit-user-select: none;
		   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FF9800, #FF9800 40%, #FF9800);
		   background-position: 97% center;
		   background-repeat: no-repeat;
		   background-color: #FF9800;
		   border: 1px solid black;
		   color: black;
		   font-size: 16px;
		   overflow: hidden;
		   padding: 5px 10px;
		   text-overflow: ellipsis;
		   white-space: nowrap;
		   width: 150px;
		   height: 51px;
		}
</style>
	<h3 id="demo"> Name of the Area </h3>
	<br>
	<form id="div2">	
	<button type="button" onclick="plus()"><strong>+</strong></button>
	<button type="button" onclick="minus()"><strong>-</strong></button>
	<button type="button" onclick="left()"><strong><</strong></button>
	<button type="button" onclick="right()"><strong>></strong></button>	
	<button type="button" onclick="rotateX()">Rotate <strong>X</strong></button>	
	<button type="button" onclick="rotateY()">Rotate <strong>Y</strong></button>
	<button type="button" onclick="rotateZ()">Rotate <strong>Z</strong></button>
	<button type="button" onclick="opacity()">Opacity</button>
	<button type="button" onClick="window.location.reload();">Reset</button>
	<select id="brainareas">
		<option value="start" onclick="surface()" selected>BrainAreas</option>
  		<option value="volume" onclick="F()">F</option>
  		<option value="surface" onclick="M()">M</option>
  		<option value="volume" onclick="H()">H</option>
  		<option value="surface" onclick="S()">SpC</option>
	</select>	
	</form>	
  	<br>
  	<br>
  	<br>
  	<div id="infobox1">
	E11.5
	</div>
	<div id="infobox2">
	E13.5
	</div>
	<div id="infobox3">
	E15.5
	</div>
	<div id="infobox4">
	E18.5	
	</div>
<script type="text/javascript">
function plus(){ // W key
	<?php for($i = 1; $i <= 8; $i++){ ?>
	camera<?php echo$i; ?>.position.x -= Math.sin(camera<?php echo$i; ?>.rotation.y) * player.speed *4;
	camera<?php echo$i; ?>.position.z -= -Math.cos(camera<?php echo$i; ?>.rotation.y) * player.speed *4;
	<?php }	?>
}
function minus(){ // S key
	<?php for($i = 1; $i <= 8; $i++){ ?>
	camera<?php echo$i; ?>.position.x += Math.sin(camera<?php echo$i; ?>.rotation.y) * player.speed*4;
	camera<?php echo$i; ?>.position.z += -Math.cos(camera<?php echo$i; ?>.rotation.y) * player.speed*4;
	<?php }	?>
}
function right(){ // D key
	<?php for($i = 1; $i <= 8; $i++){ ?>
	camera<?php echo$i; ?>.position.x += Math.sin(camera<?php echo$i; ?>.rotation.y + Math.PI/2) * player.speed*4;
	camera<?php echo$i; ?>.position.z += -Math.cos(camera<?php echo$i; ?>.rotation.y + Math.PI/2) * player.speed*4;	
	<?php }	?>
}
function left(){ // A key	
	<?php for($i = 1; $i <= 8; $i++){ ?>
	camera<?php echo$i; ?>.position.x += Math.sin(camera<?php echo$i; ?>.rotation.y - Math.PI/2) * player.speed*4;
	camera<?php echo$i; ?>.position.z += -Math.cos(camera<?php echo$i; ?>.rotation.y - Math.PI/2) * player.speed*4;
	<?php }	?>
}
function rotateY() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
		camera<?php echo$i; ?>.lookAt( camera_pivot.position );
		camera_pivot.rotateOnAxis( Y_AXIS, 0.01 );	
	<?php }	?>
}
function rotateX() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
		camera<?php echo$i; ?>.lookAt( camera_pivot.position );
		camera_pivot.rotateOnAxis( X_AXIS, 0.01 );	
	<?php }	?>
}
function rotateZ() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
		camera<?php echo$i; ?>.lookAt( camera_pivot.position );
		camera_pivot.rotateOnAxis( Z_AXIS, 0.01 );	
	<?php }	?>
}
function opacity() {
	if((objects1[0].children[0].material.opacity == 0.5)||(objects1[2].children[0].material.opacity == 0.5)||
			(objects1[1].children[0].material.opacity == 0.5)||(objects1[3].children[0].material.opacity == 0.5)){
			<?php for($i = 1; $i <= 8; $i++){ ?>
				objects<?php echo$i; ?>[0].children[0].material.opacity = 1;
				objects<?php echo$i; ?>[1].children[0].material.opacity = 1;
				objects<?php echo$i; ?>[2].children[0].material.opacity = 1;
				objects<?php echo$i; ?>[3].children[0].material.opacity = 1;
				document.getElementById("demo").innerHTML = " Name of the Area" ;
			<?php }	?>
		}else{
			<?php for($i = 1; $i <= 8; $i++){ ?>
				objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
				objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
				objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
				objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
				document.getElementById("demo").innerHTML = " Name of the Area" ;
			<?php }	?>
		}
}
function F() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
	objects<?php echo$i; ?>[0].children[0].material.opacity = 1;
	objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
	document.getElementById("demo").innerHTML = " Forebrain" ;
	<?php }	?>
}
function M() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
	objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[2].children[0].material.opacity = 1;
	objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
	document.getElementById("demo").innerHTML = " Midbrain" ;
	<?php }	?>
}
function H() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
	objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[1].children[0].material.opacity = 1;
	objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
	document.getElementById("demo").innerHTML = " Hindbrain" ;
	<?php }	?>
}
function S() {
	<?php for($i = 1; $i <= 8; $i++){ ?>
	objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
	objects<?php echo$i; ?>[3].children[0].material.opacity = 1;
	document.getElementById("demo").innerHTML = " Spinalcord" ;
	<?php }	?>
}	
		var scene1, scene2, scene3, scene4, scene5, scene6, scene7, scene8,
			camera1, camera2, camera3, camera4, camera5, camera6, camera7, camera8,
			renderer1, renderer2, renderer3, renderer4, renderer5, renderer6, renderer7, renderer8,
			mesh1, mesh2,container;
		var ambientLight1, headlight, ambientLight2, light1, light2;
		var keyboard = {};
		var player = { height: 4.0, speed:0.2, turnSpeed:Math.PI*0.02 };
		var USE_WIREFRAME = false;
		var RESOURCES_LOADED = false;
		var camera_pivot = new THREE.Object3D()
		var Y_AXIS = new THREE.Vector3( 0, 1, 0 );
		var X_AXIS = new THREE.Vector3( 1, 0, 0 );
		var Z_AXIS = new THREE.Vector3( 0, 0, 1 );
		var objects1 = [],objects2 = [],objects3 = [],objects4 = [],objects5 = [],objects6 = [],objects7 = [],objects8 = [];
		var raycaster = new THREE.Raycaster(); // create once
		var mouse = new THREE.Vector2(), INTERSECTED;
		var intersects = [];
		var spriteMaterial = new THREE.SpriteMaterial( {useScreenCoordinates: true} );
		
		<?php for($i = 1; $i <= 8; $i++){ ?>
			var loadingScreen<?php echo$i; ?>= { 
					scene<?php echo$i; ?>: new THREE.Scene(),					
					camera<?php echo$i; ?>: new THREE.PerspectiveCamera(60, 1280/1020, 0.9, 100),};
			var loadingManager<?php echo$i; ?>= null;
			var meshes<?php echo$i; ?>= {};
		<?php }	?>
		
		function init(){

		<?php for($i = 1; $i <= 8; $i++){ ?>
			scene<?php echo$i; ?>= new THREE.Scene();
			camera<?php echo$i; ?>= new THREE.PerspectiveCamera(60, 1280/1020, 0.9, 100);			
			scene<?php echo$i; ?>.add( camera_pivot );
			camera_pivot.add( camera<?php echo$i; ?> );			
			loadingManager<?php echo$i; ?>= new THREE.LoadingManager();
			loadingManager<?php echo$i; ?>.onProgress = function(item<?php echo$i; ?>, loaded<?php echo$i; ?>, total<?php echo$i; ?>){
				console.log(item<?php echo$i; ?>, loaded<?php echo$i; ?>, total<?php echo$i; ?>);
			};
			loadingManager<?php echo$i; ?>.onLoad = function(){
				console.log("loaded all resources");
				RESOURCES_LOADED = true;
				onResourcesLoaded<?php echo$i; ?>();
			};
			var light = new THREE.AmbientLight( 0xffffff ); // soft white light or ffffff?
			scene<?php echo$i; ?>.add( light );
		       // add headlight 
			light = new THREE.DirectionalLight( 0xffffff, 1 );
			light.position = camera<?php echo$i; ?>.position;
			scene<?php echo$i; ?>.add(light);
		<?php }	?>
		<?php for($i = 1; $i <= 8; $i++){ ?>		
			for( var _key<?php echo$i; ?> in models<?php echo$i; ?> ){
				(function(key<?php echo$i; ?>){
					
					var mtlLoader<?php echo$i; ?> = new THREE.MTLLoader(loadingManager<?php echo$i; ?>);
					mtlLoader<?php echo$i; ?>.load(models<?php echo$i; ?>[key<?php echo$i; ?>].mtl, function(materials<?php echo$i; ?>){
						materials<?php echo$i; ?>.preload();
						
						var objLoader<?php echo$i; ?> = new THREE.OBJLoader(loadingManager<?php echo$i; ?>);
						
						objLoader<?php echo$i; ?>.setMaterials(materials<?php echo$i; ?>);
						objLoader<?php echo$i; ?>.load(models<?php echo$i; ?>[key<?php echo$i; ?>].obj, function(mesh<?php echo$i; ?>){
							
							mesh<?php echo$i; ?>.traverse(function(node<?php echo$i; ?>){
								if( node<?php echo$i; ?> instanceof THREE.Mesh ){
									node<?php echo$i; ?>.castShadow = false;
									node<?php echo$i; ?>.receiveShadow = false;
								}
							});
							models<?php echo$i; ?>[key<?php echo$i; ?>].mesh<?php echo$i; ?>= mesh<?php echo$i; ?>;
							objects<?php echo$i; ?>.push(models<?php echo$i; ?>[key<?php echo$i; ?>].mesh<?php echo$i; ?>);
						});
					});
					
				})(_key<?php echo$i; ?>);
			}
		<?php }	?>
		<?php for($i = 1; $i <= 8; $i++){ ?>
			camera<?php echo$i; ?>.position.set(20, player.height,-20);
			camera<?php echo$i; ?>.lookAt(new THREE.Vector3(0,player.height,0));
			renderer<?php echo$i; ?> = new THREE.WebGLRenderer();
			renderer<?php echo$i; ?>.setSize(225.7, 225.7);		
			renderer<?php echo$i; ?>.shadowMap.enabled = true;
			renderer<?php echo$i; ?>.shadowMap.type = THREE.BasicShadowMap;
			renderer<?php echo$i; ?>.domElement.addEventListener( 'mouseup', onDocumentMouseUp, false );
			controls = new THREE.OrbitControls( camera<?php echo$i; ?>, renderer<?php echo$i; ?>.domElement );
			controls.enableZoom = true;
			document.body.appendChild(renderer<?php echo$i; ?>.domElement);
		<?php }	?>	
			animate();
		}

		<?php for($i = 1; $i <= 8; $i++){ ?>	
			// Runs when all resources are loaded
			function onResourcesLoaded<?php echo$i; ?>(){	
				// Clone models into meshes.
				meshes<?php echo$i; ?>["F"] = models<?php echo$i; ?>.F.mesh<?php echo$i; ?>.clone();
				meshes<?php echo$i; ?>["H"] = models<?php echo$i; ?>.H.mesh<?php echo$i; ?>.clone();
				meshes<?php echo$i; ?>["M"] = models<?php echo$i; ?>.M.mesh<?php echo$i; ?>.clone();
				meshes<?php echo$i; ?>["SpC"] = models<?php echo$i; ?>.SpC.mesh<?php echo$i; ?>.clone();	
				// Reposition individual meshes, then add meshes to scene
				meshes<?php echo$i; ?>["F"];
				scene<?php echo$i; ?>.add(meshes<?php echo$i; ?>["F"]);				
				meshes<?php echo$i; ?>["H"];	
				scene<?php echo$i; ?>.add(meshes<?php echo$i; ?>["H"]);			
				meshes<?php echo$i; ?>["M"];
				scene<?php echo$i; ?>.add(meshes<?php echo$i; ?>["M"]);
				meshes<?php echo$i; ?>["SpC"];
				scene<?php echo$i; ?>.add(meshes<?php echo$i; ?>["SpC"]);
				objects<?php echo$i; ?>[0].children[0].material.transparent = true;
				objects<?php echo$i; ?>[1].children[0].material.transparent = true;
				objects<?php echo$i; ?>[2].children[0].material.transparent = true;
				objects<?php echo$i; ?>[3].children[0].material.transparent = true;	
			}
		<?php }	?>	
		function animate(){		
			// Play the loading screen until resources are loaded.
			if( RESOURCES_LOADED == false ){
				requestAnimationFrame(animate);
				<?php for($i = 1; $i <= 8; $i++){ ?>
					renderer<?php echo$i; ?>.render(loadingScreen<?php echo$i; ?>.scene<?php echo$i; ?>, loadingScreen<?php echo$i; ?>.camera<?php echo$i; ?>);
				<?php }	?>
				return;
			}		
			requestAnimationFrame(animate);
			if(keyboard[87]){ // W key
				<?php for($i = 1; $i <= 8; $i++){ ?>
				if(camera1.position.z < -5){
					camera<?php echo$i; ?>.position.x -= Math.sin(camera<?php echo$i; ?>.rotation.y) * player.speed;
					camera<?php echo$i; ?>.position.z -= -Math.cos(camera<?php echo$i; ?>.rotation.y) * player.speed;
				}	
				<?php }	?>
			}
			if(keyboard[83]){ // S key				
				<?php for($i = 1; $i <= 8; $i++){ ?>
				if(camera1.position.z > -20){
					camera<?php echo$i; ?>.position.x += Math.sin(camera<?php echo$i; ?>.rotation.y) * player.speed;
					camera<?php echo$i; ?>.position.z += -Math.cos(camera<?php echo$i; ?>.rotation.y) * player.speed;
				}
				<?php }	?>
			}
			if(keyboard[68]){ // D key				
				<?php for($i = 1; $i <= 8; $i++){ ?>	
					camera<?php echo$i; ?>.position.x += Math.sin(camera<?php echo$i; ?>.rotation.y + Math.PI/2) * player.speed*2;
					camera<?php echo$i; ?>.position.z += -Math.cos(camera<?php echo$i; ?>.rotation.y + Math.PI/2) * player.speed*2;
				<?php }	?>
			}
			if(keyboard[65]){ // A key				
				<?php for($i = 1; $i <= 8; $i++){ ?>
					camera<?php echo$i; ?>.position.x += Math.sin(camera<?php echo$i; ?>.rotation.y - Math.PI/2) * player.speed*2;
					camera<?php echo$i; ?>.position.z += -Math.cos(camera<?php echo$i; ?>.rotation.y - Math.PI/2) * player.speed*2;
				<?php }	?>
			}
			if(keyboard[89]){
				<?php for($i = 1; $i <= 8; $i++){ ?>
					camera<?php echo$i; ?>.lookAt( camera_pivot.position );
					camera_pivot.rotateOnAxis( Y_AXIS, 0.01 );	
				<?php }	?>
			}
			if(keyboard[88]){
				<?php for($i = 1; $i <= 8; $i++){ ?>
					camera<?php echo$i; ?>.lookAt( camera_pivot.position );
					camera_pivot.rotateOnAxis( X_AXIS, 0.01 );	
				<?php }	?>
			}
			if(keyboard[90]){
				<?php for($i = 1; $i <= 8; $i++){ ?>
					camera<?php echo$i; ?>.lookAt( camera_pivot.position );
					camera_pivot.rotateOnAxis( Z_AXIS, 0.01 );		
				<?php }	?>
			}
			<?php for($i = 1; $i <= 8; $i++){ ?>
			renderer<?php echo$i; ?>.render(scene<?php echo$i; ?>, camera<?php echo$i; ?>);
			<?php }	?>
		}
		function keyDown(event){
			keyboard[event.keyCode] = true;
		}
		function keyUp(event){
			keyboard[event.keyCode] = false;
		}
		function onDocumentMouseUp( event ) {
			var raycaster= new THREE.Raycaster(); // create once
			var mouse = new THREE.Vector2(); // create once
			console.log(event.clientY);
			clientY = event.clientY - 340;
			console.log(clientY);
			console.log(event.clientX);
			clientX = event.clientX - 30;
			console.log(clientX);
			mouse.x = ( clientX / renderer1.domElement.clientWidth ) ;
			mouse.y = - ( clientY / renderer1.domElement.clientHeight ) ;
			raycaster.setFromCamera( mouse, camera1);
			<?php for($i = 1; $i <= 8; $i++){ ?>
			objects<?php echo$i; ?>[0].children[0].material.transparent = true;
			objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
			objects<?php echo$i; ?>[0].children[0].name = "Forebrain";
			objects<?php echo$i; ?>[0].name = "Forebrain";
			objects<?php echo$i; ?>[1].children[0].material.transparent = true;
			objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
			objects<?php echo$i; ?>[1].children[0].name = "Hindbrain";
			objects<?php echo$i; ?>[1].name = "Hindbrain";
			objects<?php echo$i; ?>[2].children[0].material.transparent = true;
			objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
			objects<?php echo$i; ?>[2].children[0].name = "Midbrain";
			objects<?php echo$i; ?>[2].name = "Midbrain";
			objects<?php echo$i; ?>[3].children[0].material.transparent = true;
			objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
			objects<?php echo$i; ?>[3].children[0].name = "Spinalcord";
			objects<?php echo$i; ?>[3].name = "Spinalcord";
			console.log(objects<?php echo$i; ?>);
			<?php }	?>
			var intersects= raycaster.intersectObjects( objects1, true );
		    if (intersects.length > 0) {
		        console.log(intersects[0]);
				if ( intersects[ 0 ].object != INTERSECTED ) 
				{
				    // restore previous intersection object (if it exists) to its original color				
					if(intersects[ 0 ].object.name=="Forebrain"){
						<?php for($i = 1; $i <= 8; $i++){ ?>
						objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[0].children[0].material.opacity = 1;
						<?php }	?>
					}
					if(intersects[ 0 ].object.name=="Midbrain"){
						<?php for($i = 1; $i <= 8; $i++){ ?>
						objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[2].children[0].material.opacity = 1;
						objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
						<?php }	?>
					}
					if(intersects[ 0 ].object.name=="Hindbrain"){
						<?php for($i = 1; $i <= 8; $i++){ ?>
						objects<?php echo$i; ?>[3].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[1].children[0].material.opacity = 1;
						objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
						<?php }	?>
					}
					if(intersects[ 0 ].object.name=="Spinalcord"){
						<?php for($i = 1; $i <= 8; $i++){ ?>
						objects<?php echo$i; ?>[3].children[0].material.opacity = 1;
						objects<?php echo$i; ?>[2].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[1].children[0].material.opacity = 0.5;
						objects<?php echo$i; ?>[0].children[0].material.opacity = 0.5;
						<?php }	?>
					}
					// store reference to closest object as current intersection object
					INTERSECTED = intersects[ 0 ].object;
					// set a new color for closest object
					INTERSECTED.material.opacity = 1;
					// update text, if it has a "name" field.
					if ( intersects[ 0 ].object.name )
					{	
						document.getElementById("demo").innerHTML = intersects[ 0 ].object.name ;
					}
				}
			} 
			else // there are no intersections
			{
				// restore previous intersection object (if it exists) to its original color
				if ( INTERSECTED ) 
					INTERSECTED.material.opacity = 0.5;
				// remove previous intersection object reference
				//     by setting current intersection object to "nothing"
				INTERSECTED = null;
				document.getElementById("demo").innerHTML = " Name of the Area " ;
			}		  
		}
		window.addEventListener('keydown', keyDown);
		window.addEventListener('keyup', keyUp);
		window.onload = init;
 
	</script>
	<div id="infobox5">
	P4
	</div>
	<div id="infobox6">
	P14
	</div>
	<div id="infobox7">
	P28	
	</div>
	<div id="infobox8">
	P56	
	</div>
</html>