<html>
    <head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <style>
            body{
                background-color: rgb(146, 139, 146);
            }
            .page{
                position: relative;
                width:770px;
                height:375px;
                top:20%;
                margin:auto;
                box-shadow:0px 0px 30px 0px rgb(80, 72, 72);
                background: url('screen.png') no-repeat center center;
                background-size: 100% 100%;
				border-radius: 5px;
            }
			.login{
				position: absolute;
                width:1000px;
                height:50px;
                top:5px;
				right:20px;
                margin:auto;
				text-align:right;
			}
            .title{
                position: relative;

            }
			.list{
				position:relative;
				width:730px;
				height:250px;
				left:20px;
				border: 1px solid rgb(158, 136, 136);
				border-radius: 5px;
			}
			.done{
				position: relative;
				top:-80px;
				left:100px;
				width:50px;
			}
			.btna {
				cursor: pointer;
				border: 1px transparent;
				background-color: transparent;
				height: 50px;
				width: 150px;
				color: black;
				font-size: 1.2em;
				border-bottom: 2px solid #1161ed;
			}
			.btnn {
				cursor: pointer;
				border: 1px transparent;
				background-color: transparent;
				height: 50px;
				width: 150px;
				color: black;
				font-size: 1.2em;

			}
			.btnc {

				bottom: 10px;
				right: 10px;
			}
        </style>
    </head>
    <body>
		<form class="login">
			<b>Save your Tasks trough Login! Trail account can have only one task!</b>
			<button formaction="login.html" class="btn btn-info">Login/Sign Up</button>
		</form>
		
        <div class="page">
			<form class="form-horizontal" action="advanceadd.php">
				<fieldset>
					<legend><center><b>To Do List</center></b></legend>
					
					<div class="col-md-3">
						<input id="username" name="newlist" type="text" placeholder="enter new task" class="form-control input-md">
					</div>

					<div class="col-md-2">
						<button id="submit" name="submit" class="btn btn-info">Add</button>
					</div>
					
					<div class="col-md-3">
						<input name="done" type="integer" placeholder="add to done" class="form-control input-md">
					</div>
					
					<div class="form-group">
						<div class="col-md-3">
							<button id="submit" formaction="donetask.php" name="submit" class="btn btn-info">Add</button>
						</div>
					</div>
					
					<div class="list">
							<center><button id="submit" formaction="removetask.php" name="remove" class="btn btn-info">Remove Last Task</button></center>
							<?php 
								$value = $_SESSION["value"];
								include 'getlist.php';
							?>
					</div>
				</fieldset>
			</form>
        </div>
    </body>
</html>