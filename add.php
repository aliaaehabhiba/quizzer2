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
     	<h2>add a question</h2>

          <form method="post" action="add.php">
             <p>
                  <label>question number:</label>
                  <input type="number" name="question_number">
             </p>  
             <p>
                  <label>question text:</label>
                  <input type="text" name="question_text">
             </p>  
             <p>
                  <label>choice #1:</label>
                  <input type="text" name="choice1">
             </p>  
             <p>
                  <label>choice #2:</label>
                  <input type="text" name="choice2">
             </p>  
             <p>
                  <label>choice #3:</label>
                  <input type="text" name="choice3">
             </p>  
             <p>
                  <label>choice #4:</label>
                  <input type="text" name="choice4">
             </p>  
             <p>
                  <label>choice #5:</label>
                  <input type="text" name="choice5">
             </p>  
             <p>
                  <label>corect choice number:</label>
                  <input type="number" name="corect_choice">
             </p> 
              <p>
                  <input type="text" name="submit" value="submit">
             </p>  


          </form>


       </div>
     </main>
     <footer><div class="container">copyright &copy;2020 ,php quizzer</div></footer>
</body>
</html>