<h1> hello ladies and gentlemen!</h1>
	<br />
	<?php echo $title; ?>
	<br />
	<?php echo $test; ?>
	<br />
	<?php echo $model_data; ?>






	$data["title"] = "Insert Data using Codeifniter";
		this->load->view("insert",$data);
	}

	public function test1(){
		echo 'test one function result';
	}

	public function form_validation(){

		echo'validated';
	}






<!DOCTYPE html>
<html>
<head>
	<title>Inserted Data using Ci</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<br /><br /><br />
		<h3 align="center">Insert Data using Ci</h3><br />
		<form method="post" action="http://localhost/project/main/form_validation">

			<div class="form-group">
				<label>Enter First Name</label>
				<input type="text" name="first_name" class="form-control" />
				<span class="text-danger"><?php echo form_error("first_name"); ?>
					
				</span>
			</div>	


			<div class="form-group">
				<label>Enter Last Name</label>
				<input type="text" name="last_name" class="form-control" />
				<span class="text-danger"><?php echo form_error("last_name"); ?>
					
				</span>
			</div> 

			<div class="form-group">
				<button type="submit"> test</button>
			</div>







		</form>

	
</div>
</body>
</html>