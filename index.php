

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>Form Page</title>
</head>
<body>

   <div class="container  mt-5">
      <form class="w-25" action="page_of_landing.php" method="POST">
         <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
         </div>
         <div class="mb-4">
            <label class="form-label">Cognome</label>
            <input type="text" class="form-control" name="cognome">
         </div>
         <button type="submit" class="btn  btn-primary  fw-semibold">Submit</button>
      </form>
   </div>

</body>
</html>