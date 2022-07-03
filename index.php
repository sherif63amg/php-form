<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new project</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./css/style.css">

<body>
    <div class="container d-flex align-items-center justify-content-center ">
        <!-- font awsome icons -->
    
        <div class="card">
            <div class="card-header">
            <h3 class="text-center">Sign In</h3>
         </div>    
            <div class="card-body">
                <div class="form">
                <!-- first field -->
                <div class="input-group mb-3">
                     <span class="input-group-text" id="basic- addon1"><i class="fa-solid fa-chess-king"></i></span> 
                     <input type="text" class="form-control" placeholder="Enter your username" required="required" autocomplete="off" name="username" >
                 </div>

                <!-- second field -->
                <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                 <input type="password" class="form-control" placeholder="Enter your password" required="required" autocomplete="off" name="password" aria-label="password" aria-describedby="basic-addon1"> </div>

                <!-- third field -->

                <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span> 
                <input type="password" class="form-control" placeholder="Confirm password" required="required" autocomplete="off" name="confirm_password" aria-label="confirm_password" aria-describedby="basic-addon1"> </div>
                <!-- sign up button -->

                <div class="form-group">
                <input type="submit" name="register" value="Sign Up" class="btn registration_btn">
                </div>
        
                </div>
            </div>
            <div class="card-footer text-center text-light signup"> Already have an account? <a href="signin.php">Sign In</a> </div>

        </div>
        
        </div>
  
</body>
</html>