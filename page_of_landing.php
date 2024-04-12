
<!-- PHP -->
<?php

   // landing data
   $name = $_POST['nome'];
   $surname = $_POST['cognome'];

   // lunghezza delle parole
   $lengthName = strlen($name);
   $lengthSurname = strlen($surname);

   // cognome censurato
   $censuredSurname = '***';

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>Landing Page</title>
</head>
<body>
   <div class="container  mt-5">

      <h3>Il nome é <strong><?php echo $name ?></strong> ed è lungo <?php echo $lengthName ?> lettere</h3>

      <h3>Il cognome é <strong><?php echo $censuredSurname ?></strong> ed è lungo <?php echo $lengthSurname ?> lettere</h3>

   </div>

   
</body>
</html>