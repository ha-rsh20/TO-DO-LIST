<html>
    <head>
        <style>
            .btn
           {
            position:absolute;
            margin:auto;
            height:45px;
            width:45px;
            background:#A9A9A9;
            text-align:center;
            color:#2d3436;
           }
        </style>
    </head>
    <body>
        <form action="advancetodo.php">
            <input  type="text" class="text" name="newlist">
            <span>Enter to do list</span>
            <button>
               Add
            </button>
        </form>
        <?php
          include 'db_connect.php';

          $sql = "SELECT id, userid, list, done FROM todolist";
          $result = $mysqli->query($sql);
 
          $newlist = $_GET["newlist"];
          $z = strcmp($newlist,"");
          if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            $i = strcmp($newlist,$row["list"]);
	        if($i==0)
	        {
	         echo "Exist already! Want to add again?";
		?>
		<div class="btn">Yes</div>
		<?php
	         break;
	        }
           } 
          } else {
                echo "0 results";
          }
         ?>
        <script>
            const yes = document.querySelector('.btn');
            yes.addEventListener('click',addlist);
            function addlist()
            {
                <?php
                   $sql = "INSERT INTO todolist (id, userid, list, done) 	VALUES(NULL, 1, '$newlist', 0)";
                   $result = $mysqli->query($sql);
                   echo "Sucessfully added!";
                ?>
            }
        </script>
	</body>
</html>