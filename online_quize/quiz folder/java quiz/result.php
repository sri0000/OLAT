<?php
    // include database connection
    include "connection.php";

    $key = [];
    $num = 0;

    if(isset($_POST["btnSubmit"])) {
        for ($i=1; $i < 5; $i++) { 
            $stmt = $con->prepare("SELECT * FROM `data` WHERE `id`=?");
            $stmt->bind_param("i", $_POST["qid".$i]);
            $stmt->execute();
            $res = $stmt->get_result();
            while ($row = $res->fetch_assoc()){
                for ($x=1; $x < 5; $x++) {
                    if ($_POST["answer".$i] == $row["choice_".$x]) {
                        ($row["answer"] == $x)? $num++:"";
                    }
                }
            }
            $stmt->close();
        }

    // calculate percentage
    $percentage = ($num * 25);

    // check percentage and set $nextPageVisible accordingly
    if ($percentage > 40) {
        $nextPageVisible = true;
    } else {
        $nextPageVisible = false;
    }

  if ($nextPageVisible) {
  // show the "Go to Next Page" button
  echo '<div class="button-container"><button><a href="form/form gen.html">Go to Next Page</a></button></div>';
} else {
  // show the "Go Back" button
   
  echo '<div class="button-container"><button><a href="http://localhost/OLAT/OLAT/programmingdemo.php">Go Back</a></button></div>';
}



}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
         <style > 
 .button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  bottom: 0;
  width: 100%;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 10px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}

</style>
        <link rel="stylesheet" href="styles.css">
    
    </head>
    <body>
        <main>
            <div class="title">
                <br>
                <hr>
                <h3>Result</h3>
                <hr>
                <h1 class="txtScore">Score: <?php echo $percentage."%"; ?></h1>
            </div>
        </main>
    </body>
</html>
