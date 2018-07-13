<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
          crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css">
     <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
     <title>Contact Form</title>
</head>

<body>
     <form method="post" action="mailer.php">
          <div class="form-group">
               <label for="exampleInputPassword1">Your name</label>
               <input name="feedback_name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
               <label for="exampleInputEmail1">Email address</label>
               <input name="feedback_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address"
                    required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
               <label for="exampleFormControlTextarea1">Drop us a line</label>
               <textarea name="feedback_message" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
          </div>

          <!-- alert -->

          <?php 

          if(isset($_GET["success"])){
               $status = $_GET["success"];

               if($status == 1){
                    echo '<div class="alert alert-success" role="alert">
                    Feedback send successfully.
                  </div>';
               }else if($status == -1){
                    echo '<div class="alert alert-danger" role="alert">
                    Feedback send failed.
                  </div>';
               }
          }

          
          ?>
          


          <button type="submit" class="btn btn-primary w-100" name="feedback_submit">Submit</button>
     </form>


     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>