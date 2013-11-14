<?php 
	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		$p = "tareas";
	}
	if(!file_exists('content/'.$p.'.php'))
			$p='404';
 ?>


<div class="container">
		
		<h3>TASK MANAGER</h3>

		<ul class="nav nav-tabs">
			<li class="<? if($p=='tareas') echo 'active';?>"><a href="?p=tareas">Tareas</a></li>
			<li class="<? if($p=='colaboradores') echo 'active';?>"><a href="?p=colaboradores">Colaboradores</a></li>
			<li class="<? if($p=='asignar') echo 'active';?>"><a href="?p=asignar">Asignar Tareas</a></li>
		</ul>
</div>