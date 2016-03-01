<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Space/Tab Remover</title>
      <?PHP


$input = isset($_POST['input']) ? $_POST['input'] : '';

// $output = preg_replace('/[ ]{2,}|[\t]/', ' ', trim($input));
$output1 = preg_replace('/[ ]{2,}|[\t]/', ' ', trim($input));
$output = ucwords(strtolower($output1));
?>
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

<div class="container">
  Enter Text:
  <form action="" method="post" id="textenter">
  <textarea class="input" rows="16" cols="50" name="input" form="textenter" value="input text"></textarea>
  <input type="submit">
  </form>
  <br/>
  <br/> Output:
  <textarea class="output" rows="16" cols="50" name="output" form=""><?php echo $output; ?></textarea>
</div>
    
    
    
    
    
  </body>
</html>
