<?php 
include_once 'atas.php';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="jumbotron">
				<h2>
					Hello, world!
				</h2>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
		<div class="col-md-4">
		<?php 
		  if(!empty($_GET['status'])){
		    
		   $_status = $_GET['status'];
		   $infologin=($_status=="f")?"Username atau Password Salah":"";
		  
		   echo '<div style="color:red">'.$infologin.'</div>';
		  }
		?>
		
		
		
			<form role="form" method="POST" 
			      action="proses_login.php">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" 
						   name="email"	
							class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" 
							name="password"
					class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						File input
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
<?php 
include_once 'bawah.php';
?>