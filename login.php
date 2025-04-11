<?php
session_start();

// Check for and display the error message
if (isset($_SESSION['ERROR_MESSAGE'])) {
    echo '<script>alert("' . $_SESSION['ERROR_MESSAGE'] . '")</script>';
    unset($_SESSION['ERROR_MESSAGE']); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>

 .gradient-custom-3 {
        background: #2c3e50; 
    }

    .gradient-custom-4 {
        background: #2c3e50; 
    }

</style>

<body>
    
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login to your account</h2>

              <form id="loginForm" action="login_process.php" method="post">

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example2cg" Placeholder="Your Email" class="form-control form-control-md" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" Placeholder="Password" class="form-control form-control-md" />
                </div>

                <div class="row form-check d-flex mb-3 ">
                    
                    <div class="col-md-8 col-12 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example3cg" />
                        <label class="form-check-label" for="form2Example3g">
                            Remember me
                        </label>
                    </div>

                    <div class="col-md-4 col-12 form-check ">
                        <a href="#!" class="text-body text-nowrap">Forgot Password?</a>
                    </div>
                </div>

                
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-white">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="register.php" class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Alert Message -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="errorModalBody">
                <!-- Error message will be displayed here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $("#loginForm").submit(function(e) {
        e.preventDefault();

        // Serialize the form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            type: "POST",
            url: "login_process.php",
            data: formData,
            success: function(response) {
                if (response === "success") {
                    window.location.href = "Landing_page/index.php";
                } else {
                    // Display the error message in a modal
                    $("#errorModalBody").text(response);
                    $("#errorModal").modal("show");
                }
            }
        });
    });
});
</script>

<script>
  
  //PREVENT RIGHT-CLICK AND SHORT CUTS

 document.addEventListener('contextmenu', event => event.preventDefault());
    
    window.addEventListener("keydown", function (e) {
      if (e.keyCode == 123) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl key from opening developer tools (for Windows)
    window.addEventListener("keydown", function (e) {
      if (e.ctrlKey && (e.key === 'c' || e.key === 'u' || e.key === 'i' || e.key === 'j')) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl+Shift+I or Ctrl+Shift+J (for Windows) from opening developer tools
    window.addEventListener("keydown", function (e) {
      if ((e.ctrlKey && e.shiftKey) && (e.key === 'i' || e.key === 'j')) {
        e.preventDefault();
      }
    });
  
  
   // Prevent Ctrl+Shift+J (for Mac) from opening developer tools
    window.addEventListener("keydown", function (e) {
      if (e.metaKey && e.altKey && e.key === 'j') {
        e.preventDefault();
      }
    });
  
    window.addEventListener("keydown", function (e) {     
      if (e.ctrlKey) {      
           e.preventDefault();     
          }   
      });

</script>
</html>
