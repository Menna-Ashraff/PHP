<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  
 <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-8">
      <div class="card mt-5">
       <div class="card-header">
        <h4>User Registration Form</h4>
       </div>
       <div class="card-body">
       <form action="config.php" method="POST">
            <div class="form-group">
               <label for="username">username</label>  
               <input type="text" name="username"  class="form-control">
               <label for="email">Email</label>  
               <input type="email" name="email"    class="form-control">
               <br>
               <label>Gender</label>  
               <input type="radio" name="gender" value="Male"> Male 
               <input type="radio" name="gender" value="Female"> Female
               <br>
               <br>
               <input type="hidden" name="agree" value="No">
               <input type="checkbox" name="agree" value="Yes">
               <label>Recieve E-mails from us </label>
            </div>
            <div class="form-group">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
       </div>
      </div>
     </div>
    </div>
 </div>
</body>
</html>