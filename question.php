<?php include 'database.php';?>



 <?php
 
$number = (int) $_GET['n'];

$query = "SELECT * FROM 'questions' where question_number=$number";

$result = $mysqli ->query($query) or die($mysqli ->error.__LINE__);

$question = $result->fetch_assoc();


$query = "SELECT * FROM 'choices'
where question_number=$number";

$choices = $mysqli ->query($query) or die($mysqli ->error.__LINE__);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>php quizzer</title>
	
</head>
<body>
     <header>
     <div class="container">
     	<h1>php quizzer</h1>
     </div>
     </header>
     <main>
        <div class="container">
     	<div class="current">question 1 of 5</div>
     	<p class="question">
           <?php echo $question['text'] ?>    
          </p>
     	<form method="post" action="process.php">
          <ul class="choices">
               <?php while ($row =$choices->fetch_assoc()): ?>
  <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"> <?php echo $row['text']?></li>
               <?php endwhile;?>
          </ul>
          <input type="submit" value="submit">
          </form>
     	</div>
     </main>
     <footer><div class="container">copyright &copy;2020 ,php quizzer</div></footer>
</body>
</html>