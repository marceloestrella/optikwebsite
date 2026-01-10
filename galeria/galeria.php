<?php  

	include '../header.php'; 
	//include '../conexion.php'; 
	$host = $_SERVER['HTTP_HOST'];

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="../VenoBox/venobox/venobox.min.js"></script>

<link rel="stylesheet" href="../VenoBox/venobox/venobox.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/bootstrap.css">

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="../Magnific/dist/magnific-popup.css">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->


<!-- Magnific Popup core JS file -->
<script src="../Magnific/dist/jquery.magnific-popup.js"></script>


<style type="text/css">

.gallerycontainer{
position: relative;
/*Add a height attribute and set to largest image's height to prevent overlaying*/
}

.thumbnail img{
border: 1px solid black;
margin: 0 5px 5px 0;
}

.thumbnail:hover{
background-color: transparent;
}

.thumbnail:hover img{
border: 1px solid blue;
}

.thumbnail span{ /*CSS for enlarged image*/
position: absolute;
background-color: lightyellow;
padding: 5px;
left: -1000px;
border: 1px dashed gray;
visibility: hidden;
color: black;
text-decoration: none;
}

.thumbnail span img{ /*CSS for enlarged image*/
border-width: 0;
padding: 2px;
}

.thumbnail:hover span{ /*CSS for enlarged image*/
visibility: visible;
top: 0;
left: 230px; /*position where enlarged image should offset horizontally */
z-index: 50;
}

.img-contenedor img {
-webkit-transition:all .9s ease; /* Safari y Chrome */
-moz-transition:all .9s ease; /* Firefox */
-o-transition:all .9s ease; /* IE 9 */
-ms-transition:all .9s ease; /* Opera */
width:100%;
}
.img-contenedor:hover img {
-webkit-transform:scale(1.25);
-moz-transform:scale(1.25);
-ms-transform:scale(1.25);
-o-transform:scale(1.25);
transform:scale(1.25);
}
.img-contenedor {/*Ancho y altura son modificables al requerimiento de cada uno*/
width:300px;
height:180px;
overflow:hidden;
}

.vbox-content{

	margin-top: 1111px;
}

</style>

<div class="logo">
  <h1>
    <a href="../index.php" style="width: min-content;"><img src="../images/logo.png" alt="Smiley face" height="60" width="80"></a>
  </h1>
</div>

<div class="box">
<br>
	<div class="row">
	  <div class="col-md-3 col-md-offset-3">
	  	<select id="slc_catalogo" class="form-control">
	  		<?php

	  			

					print_r('
					
							<option value="Armany_exchange">Armany exchange</option>
							<option value="Coach">Coach</option>
							<option value="Emporio_armany" selected>Emporio armany</option>
							<option value="Kipling">Kipling</option>
							<option value="Michael_kors">Michael kors</option>
							<option value="Miraflex">Miraflex</option>
							<option value="Ralph_lauren">Ralph lauren</option>
							<option value="Ray_ban">Ray ban</option>
							<option value="Ray_ban_solares">Ray ban solares</option>
							<option value="Vogue">Vogue</option>

							');


			
	  		?>
		</select>
		<br>
	  </div>
	  <div class="col-md-3 col-md-offset-3">
		<input class="form-control" type="search" id="txt_search" name="q"
		       aria-label="Search through site content" placeholder="Buscar modelo">
		       <br>
	  </div>
	  <div class="col-md-3 col-md-offset-3">
		<button onclick="buscar_articulos();" type="button" class="btn btn-primary">Buscar</button>
	  </div>
	</div>


	<div class="gallerycontainer">

		<br />

		<?php  

/*
			$sql="SELECT galeria.nombre_archivo,catalogos.nombre as catalogo FROM optica.galeria
				  inner join catalogos on catalogos.id = galeria.id_catalogo";

			$res= mysqli_query($conexion, $sql);

			print_r('<div class="col-md-12">
				<div class="row">	
				');

			

		'Coach',
		'Emporio armany',
		'Kipling',
		'Michael kors',
		'Miraflex',
		'Ralph lauren',
		'Ray ban',
		'Ray ban solares',
		'Vogue'

*/
print_r('<div class="col-md-12">
				<div class="row" id="divs_galeria">	
				');

			$array_catalogo = array(

			     array('Armany_exchange','AX1035.jpg'),
			     array('Armany_exchange','AX3007.jpg'),
			     array('Armany_exchange','AX3030.jpg'),
			     array('Armany_exchange','AX3032.jpg'),
			     array('Armany_exchange','AX3047.jpg'),

			     array('Coach','HC6052.jpg'),
			     array('Coach','HC6077.jpeg'),
			     array('Coach','HC6082.jpg'),
			     array('Coach','HC6102.jpg'),
			     array('Coach','HC6107.jpg'),
			     array('Coach','HC6126.jpg'),


			     array('Emporio_armany','Emporio-Armani-EA1027-3001.jpg'),
			     array('Emporio_armany','Emporio-Armani-EA1041-3003.jpg'),
			     array('Emporio_armany','Emporio-Armani-EA1041-3131.jpg'),
			     array('Emporio_armany','Emporio-Armani-EA3101-5042.jpg'),
			     array('Emporio_armany','Emporio-Armani-EA3112-5042.jpg'),
			     array('Emporio_armany','Emporio-Armani-EA3159-5800.jpg'),
			     array('Emporio_armany','Emporio-Armani-EA4115-58011W.jpg'),

			     array('Kipling','kp3106g81849_.png'),
			     array('Kipling','kp3107f95950_.png'),
			     array('Kipling','kp3111g11548_.png'),
			     array('Kipling','kp3114g13052_.png'),
			     array('Kipling','kp3116g73348_.png'),

			     array('Michael_kors','michael-kors-india-mk4039-3217.jpg'),
			     array('Michael_kors','michael-kors-india-mk4039-3222.jpg'),
			     array('Michael_kors','michael-kors-key-largo-mk3027-1014.jpg'),
			     array('Michael_kors','michael-kors-lil-mk3017-1108.jpg'),
			     array('Michael_kors','michael-kors-marseilles-mk4050-3162.jpg'),
			     array('Michael_kors','michael-kors-mitzi-iv-mk7008-1044.jpg'),
			     array('Michael_kors','michael-kors-oslo-mk4061u-3332.jpg'),
			     array('Michael_kors','michael-kors-procida-mk3019-1116.jpg'),

				 array('Miraflex','N_BABY 47 - 17.jpg'),


			     array('Ralph_lauren','RA 7086..jpg'),
			     array('Ralph_lauren','RA7039 LADO.jpg'),
			     array('Ralph_lauren','RA7039 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7039.png'),
			     array('Ralph_lauren','RA7061 LADO.jpg'),
			     array('Ralph_lauren','RA7061 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7061....jpg'),
			     array('Ralph_lauren','RA7061..jpg'),
			     array('Ralph_lauren','RA7075 FRENTE.jpg'),
			     array('Ralph_lauren','RA7075 VARILLA.jpg'),
			     array('Ralph_lauren','RA7075.jpg'),
			     array('Ralph_lauren','RA7085 FRENTE..jpg'),
			     array('Ralph_lauren','RA7085 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7085..jpg'),
			     array('Ralph_lauren','RA7086 DIAGONAL.jpg'),
			     array('Ralph_lauren','RA7086 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7089 LADO.jpg'),
			     array('Ralph_lauren','RA7089 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7089.jpg'),
			     array('Ralph_lauren','RA7091 LADO.jpg'),
			     array('Ralph_lauren','RA7091 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7091.png'),
			     array('Ralph_lauren','RA7094 LADO.jpg'),
			     array('Ralph_lauren','RA7094 VARILLAS.jpg'),
			     array('Ralph_lauren','RA7094.jpg'),
			     array('Ralph_lauren','RA7104 FRENTE..jpg'),
			     array('Ralph_lauren','RA7104 VARILLAS.png'),
			     array('Ralph_lauren','RA7104.jpg'),

			     //array('xxxxxxxxx','xxxxx.jpg'),

				array('Ray_ban','RB 5154 DIAGONAL.jpg'),
				array('Ray_ban','RB5154 2000.jpg'),
				array('Ray_ban','RB5154 FRENTE.jpg'),
				array('Ray_ban','RB5154 LADO.jpg'),
				array('Ray_ban','RB5228 (ATRAS).jpg'),
				array('Ray_ban','RB5228 (FRENTE).jpg'),
				array('Ray_ban','RB5228.jpg'),
				array('Ray_ban','RB5246 FRENTE.jpg'),
				array('Ray_ban','RB5246 VARILLAS.jpg'),
				array('Ray_ban','RB5246.jpg'),
				array('Ray_ban','RB5279 (2).jpg'),
				array('Ray_ban','RB5279 (LADO).jpg'),
				array('Ray_ban','RB5279.jpg'),
				array('Ray_ban','rb6299 frente.jpg'),
				array('Ray_ban','rb6299 lado.jpg'),
				array('Ray_ban','rb6299.jpg'),
				array('Ray_ban','RB6433 LADO.jpg'),
				array('Ray_ban','RB6433 VARILLAS.jpg'),
				array('Ray_ban','RB6433.jpg'),
				array('Ray_ban','RB7017 (LADO).jpg'),
				array('Ray_ban','RB7017.jpg'),
				array('Ray_ban','RB7140 5971.jpg'),
				array('Ray_ban','RB7140 LADO.jpg'),
				array('Ray_ban','RB7140.jpg'),
				array('Ray_ban','RB8724 FRENTE.jpg'),
				array('Ray_ban','RB8724 VARILLAS.jpg'),
				array('Ray_ban','RB8724.jpg'),


				array('Ray_ban_solares','001m2.jpg'),
				array('Ray_ban_solares','004.jpg'),
				array('Ray_ban_solares','3522.jpg'),
				array('Ray_ban_solares','rb710.jpg'),
				array('Ray_ban_solares','rb1121q.png'),
				array('Ray_ban_solares','rb1124d.jpg'),
				array('Ray_ban_solares','rb1124l.jpg'),
				array('Ray_ban_solares','rb1160.jpg'),
				array('Ray_ban_solares','rb2132...jpg'),
				array('Ray_ban_solares','rb2132.jpg'),
				array('Ray_ban_solares','rb2140.jpg'),
				array('Ray_ban_solares','rb2168.jpg'),
				array('Ray_ban_solares','rb3016 366.jpg'),
				array('Ray_ban_solares','rb3016.jpg'),
				array('Ray_ban_solares','rb3025 001.jpg'),
				array('Ray_ban_solares','rb3025 004.jpg'),
				array('Ray_ban_solares','rb3026.jpg'),
				array('Ray_ban_solares','rb3030..png'),
				array('Ray_ban_solares','rb3386.png'),
				array('Ray_ban_solares','rb3447.jpg'),
				array('Ray_ban_solares','rb3471.jpg'),
				array('Ray_ban_solares','rb3548..png'),
				array('Ray_ban_solares','rb3561.jpg'),
				array('Ray_ban_solares','rb3584.jpg'),
				array('Ray_ban_solares','rb4105..png'),
				array('Ray_ban_solares','rb4105.jpg'),
				array('Ray_ban_solares','rb4165.jpg'),
				array('Ray_ban_solares','rb4313.jpg'),
				array('Ray_ban_solares','rb4323.jpg'),
				array('Ray_ban_solares','rb4325.jpg'),
				array('Ray_ban_solares','rb6463..jpg'),
				array('Ray_ban_solares','rb11219.jpg'),
				array('Ray_ban_solares','rbl0205.jpg'),
				array('Ray_ban_solares','rbl2823.jpg'),


				array('Vogue','VO2714-1887.png'),
				array('Vogue','VO2787 2267-53.png'),
				array('Vogue','VO3987B-352.png'),
				array('Vogue','VO4050-997.png'),
				array('Vogue','VO4062B-997.png'),
				array('Vogue','VO4067-997.png'),
				array('Vogue','VO5053-2798.png'),
				array('Vogue','VO5170B-W44.png'),
				array('Vogue','VO5190-2566.png'),
				array('Vogue','VO5224-1916.png'),
				array('Vogue','VO5276 2798-53.png'),
				array('Vogue','VO5276-2736.png'),
				array('Vogue','VO5276-W656.png')
			  

			    
			);


			foreach ($array_catalogo as $key => $value) {

				$catalogo = $value[0];
				$nombre_archivo = $value[1];
			    

				print_r('

							<div class="col-xs-3">

								<a class="class="venobox"" href="'.$catalogo.'/'.$nombre_archivo.'"><img src="'.$catalogo.'/'.$nombre_archivo.'" width="300px" height="198px" border="1" />
								</a>

							 </div>

						');

			}

			
			print_r('</div>
				</div>');

		?>

	</div>



</div>

<script type="text/javascript">
	
	var array_catalogo = [

			     ['Armany_exchange','AX1035.jpg'],
			     ['Armany_exchange','AX3007.jpg'],
			     ['Armany_exchange','AX3030.jpg'],
			     ['Armany_exchange','AX3032.jpg'],
			     ['Armany_exchange','AX3047.jpg'],

			     ['Coach','HC6052.jpg'],
			     ['Coach','HC6077.jpeg'],
			     ['Coach','HC6082.jpg'],
			     ['Coach','HC6102.jpg'],
			     ['Coach','HC6107.jpg'],
			     ['Coach','HC6126.jpg'],


			     ['Emporio_armany','Emporio-Armani-EA1027-3001.jpg'],
			     ['Emporio_armany','Emporio-Armani-EA1041-3003.jpg'],
			     ['Emporio_armany','Emporio-Armani-EA1041-3131.jpg'],
			     ['Emporio_armany','Emporio-Armani-EA3101-5042.jpg'],
			     ['Emporio_armany','Emporio-Armani-EA3112-5042.jpg'],
			     ['Emporio_armany','Emporio-Armani-EA3159-5800.jpg'],
			     ['Emporio_armany','Emporio-Armani-EA4115-58011W.jpg'],

			     ['Kipling','kp3106g81849_.png'],
			     ['Kipling','kp3107f95950_.png'],
			     ['Kipling','kp3111g11548_.png'],
			     ['Kipling','kp3114g13052_.png'],
			     ['Kipling','kp3116g73348_.png'],

			     ['Michael_kors','michael-kors-india-mk4039-3217.jpg'],
			     ['Michael_kors','michael-kors-india-mk4039-3222.jpg'],
			     ['Michael_kors','michael-kors-key-largo-mk3027-1014.jpg'],
			     ['Michael_kors','michael-kors-lil-mk3017-1108.jpg'],
			     ['Michael_kors','michael-kors-marseilles-mk4050-3162.jpg'],
			     ['Michael_kors','michael-kors-mitzi-iv-mk7008-1044.jpg'],
			     ['Michael_kors','michael-kors-oslo-mk4061u-3332.jpg'],
			     ['Michael_kors','michael-kors-procida-mk3019-1116.jpg'],

			     ['Miraflex','N_BABY 47 - 17.jpg'],

			     ['Ralph_lauren','RA 7086..jpg'],
			     ['Ralph_lauren','RA7039 LADO.jpg'],
			     ['Ralph_lauren','RA7039 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7039.png'],
			     ['Ralph_lauren','RA7061 LADO.jpg'],
			     ['Ralph_lauren','RA7061 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7061....jpg'],
			     ['Ralph_lauren','RA7061..jpg'],
			     ['Ralph_lauren','RA7075 FRENTE.jpg'],
			     ['Ralph_lauren','RA7075 VARILLA.jpg'],
			     ['Ralph_lauren','RA7075.jpg'],
			     ['Ralph_lauren','RA7085 FRENTE..jpg'],
			     ['Ralph_lauren','RA7085 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7085..jpg'],
			     ['Ralph_lauren','RA7086 DIAGONAL.jpg'],
			     ['Ralph_lauren','RA7086 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7089 LADO.jpg'],
			     ['Ralph_lauren','RA7089 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7089.jpg'],
			     ['Ralph_lauren','RA7091 LADO.jpg'],
			     ['Ralph_lauren','RA7091 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7091.png'],
			     ['Ralph_lauren','RA7094 LADO.jpg'],
			     ['Ralph_lauren','RA7094 VARILLAS.jpg'],
			     ['Ralph_lauren','RA7094.jpg'],
			     ['Ralph_lauren','RA7104 FRENTE..jpg'],
			     ['Ralph_lauren','RA7104 VARILLAS.png'],
			     ['Ralph_lauren','RA7104.jpg'],

			    ['Ray_ban','RB 5154 DIAGONAL.jpg'],
				['Ray_ban','RB5154 2000.jpg'],
				['Ray_ban','RB5154 FRENTE.jpg'],
				['Ray_ban','RB5154 LADO.jpg'],
				['Ray_ban','RB5228 (ATRAS).jpg'],
				['Ray_ban','RB5228 (FRENTE).jpg'],
				['Ray_ban','RB5228.jpg'],
				['Ray_ban','RB5246 FRENTE.jpg'],
				['Ray_ban','RB5246 VARILLAS.jpg'],
				['Ray_ban','RB5246.jpg'],
				['Ray_ban','RB5279 (2).jpg'],
				['Ray_ban','RB5279 (LADO).jpg'],
				['Ray_ban','RB5279.jpg'],
				['Ray_ban','rb6299 frente.jpg'],
				['Ray_ban','rb6299 lado.jpg'],
				['Ray_ban','rb6299.jpg'],
				['Ray_ban','RB6433 LADO.jpg'],
				['Ray_ban','RB6433 VARILLAS.jpg'],
				['Ray_ban','RB6433.jpg'],
				['Ray_ban','RB7017 (LADO).jpg'],
				['Ray_ban','RB7017.jpg'],
				['Ray_ban','RB7140 5971.jpg'],
				['Ray_ban','RB7140 LADO.jpg'],
				['Ray_ban','RB7140.jpg'],
				['Ray_ban','RB8724 FRENTE.jpg'],
				['Ray_ban','RB8724 VARILLAS.jpg'],
				['Ray_ban','RB8724.jpg'],

				['Ray_ban_solares','001m2.jpg'],
				['Ray_ban_solares','004.jpg'],
				['Ray_ban_solares','3522.jpg'],
				['Ray_ban_solares','rb710.jpg'],
				['Ray_ban_solares','rb1121q.png'],
				['Ray_ban_solares','rb1124d.jpg'],
				['Ray_ban_solares','rb1124l.jpg'],
				['Ray_ban_solares','rb1160.jpg'],
				['Ray_ban_solares','rb2132...jpg'],
				['Ray_ban_solares','rb2132.jpg'],
				['Ray_ban_solares','rb2140.jpg'],
				['Ray_ban_solares','rb2168.jpg'],
				['Ray_ban_solares','rb3016 366.jpg'],
				['Ray_ban_solares','rb3016.jpg'],
				['Ray_ban_solares','rb3025 001.jpg'],
				['Ray_ban_solares','rb3025 004.jpg'],
				['Ray_ban_solares','rb3026.jpg'],
				['Ray_ban_solares','rb3030..png'],
				['Ray_ban_solares','rb3386.png'],
				['Ray_ban_solares','rb3447.jpg'],
				['Ray_ban_solares','rb3471.jpg'],
				['Ray_ban_solares','rb3548..png'],
				['Ray_ban_solares','rb3561.jpg'],
				['Ray_ban_solares','rb3584.jpg'],
				['Ray_ban_solares','rb4105..png'],
				['Ray_ban_solares','rb4105.jpg'],
				['Ray_ban_solares','rb4165.jpg'],
				['Ray_ban_solares','rb4313.jpg'],
				['Ray_ban_solares','rb4323.jpg'],
				['Ray_ban_solares','rb4325.jpg'],
				['Ray_ban_solares','rb6463..jpg'],
				['Ray_ban_solares','rb11219.jpg'],
				['Ray_ban_solares','rbl0205.jpg'],
				['Ray_ban_solares','rbl2823.jpg'],


				['Vogue','VO2714-1887.png'],
				['Vogue','VO2787 2267-53.png'],
				['Vogue','VO3987B-352.png'],
				['Vogue','VO4050-997.png'],
				['Vogue','VO4062B-997.png'],
				['Vogue','VO4067-997.png'],
				['Vogue','VO5053-2798.png'],
				['Vogue','VO5170B-W44.png'],
				['Vogue','VO5190-2566.png'],
				['Vogue','VO5224-1916.png'],
				['Vogue','VO5276 2798-53.png'],
				['Vogue','VO5276-2736.png'],
				['Vogue','VO5276-W656.png']


			    
			];
    
    buscar_articulos();
	function buscar_articulos(){

		$('#divs_galeria').html('');

		var slc_catalogo = $("#slc_catalogo").val();	

		var txt_search = $("#txt_search").val();
		txt_search = txt_search.toUpperCase()
		
		$.each(array_catalogo,function(index, value){

			var catalogo = value[0];
			var nombre_archivo = value[1];


			if(slc_catalogo == catalogo){

              if(txt_search != ''){
              	

      			search = nombre_archivo.indexOf(txt_search);

              	if(search != -1){

              		$('#divs_galeria').append('<div class="col-xs-3" id="white-popup"><a class="test-popup-link" href="'+catalogo+'/'+nombre_archivo+'"><img src="'+catalogo+'/'+nombre_archivo+'" width="300px" height="198px"/></a></div>');

              		 conf_magnific();
              	}

              }else{

              		$('#divs_galeria').append('<div class="col-xs-3" id="white-popup"><a class="test-popup-link" href="'+catalogo+'/'+nombre_archivo+'"><img src="'+catalogo+'/'+nombre_archivo+'" width="300px" height="198px"/></a></div>');

              		conf_magnific();
              		
              }



			}


		});

		

	}

	function conf_magnific(){


		$('.test-popup-link').magnificPopup({
		  type: 'image'
		  // other options
		});

	}
	
	   

</script>