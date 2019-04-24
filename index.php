<?php include("config/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Threedium</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
  <div class="container">
    <img src="logo.png" alt="logo" class="navbar-brand" height="50">
  </div>
</nav>


<!-- LOGIN FORM -->
<section id="login">
  <div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto my-5">
            <div class="card">
                <div class="card-header">
                    <h4>Account Login</h4>
                </div>
                <div class="card-body">
                    <form action="processlogin.php" method="post">
                       <div class="form-group">
                           <label for="username">Username</label>
                           <input type="text" name="username" class="form-control">
                       </div>
                       <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <input type="submit" value="Log In" class="btn btn-primary btn-block">
                   </form> 
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<?php 
    
    if(@$_GET['message']) {
        $message = $_GET['message'];
echo
            
<<<HTML

<div  class="alert alert-danger text-center" style="width: 200px; margin: auto">
    $message
    
<span class="closebtn" onclick="close()" style="border: 1px solid white; padding: 0 5px; margin-left: 5px; cursor: pointer;">&times;</span>
</div>
HTML;
    
    }
?>


<script src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>

    var close = document.querySelector('.closebtn');
    close.addEventListener('click', function() {
        this.parentElement.style.display = "none";
    })
    
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
 
</script>
</body>
</html>