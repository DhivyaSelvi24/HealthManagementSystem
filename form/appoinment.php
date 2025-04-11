<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    
    <style>
        body {
            background-color: #f8f9fa;
        }

        #appointment-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-book {
            background-color: #28a745;
            color: #fff;
        }

        @media (max-width: 767px){
            label {
                font-size: 11.5px;
            }
        }

        @media (max-width: 400px){
            label {
                font-size: 10px;
            }
        }

        <?php include ("../header.php") ?>
    </style>
    
</head>
<body>


    <div class="container" id="appointment-container">
        <h1 class="text-center mb-4" style="font-size: 21px;">Book an Appointment</h1> 
        
        <form>

            <div class="form-group ">
                <label for="consultant">Select Consultant</label> <span class="text-danger"> * </span>
                <select class="form-control" id="consultant" name="consultant" required>
                    <option value="" style="font-size: 10px;">Select Consultant</option>
                    <option value="consultant1" style="font-size: 12px;">Dr. M. Sree Prathap MBBS, MRCPsych</option>
                    <option value="consultant2" style="font-size: 12px;">Dr. V. Mythili Prathap MBBS, MRCPsych</option>
                    <option value="consultant3" style="font-size: 12px;">Dr. A. Ravi Kumar MBBS, MD, DM</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-6">
                    <label for="fullName">First Name</label> <span class="text-danger"> * </span>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
                <div class="form-group col-md-6 col-6">
                    <label for="fullName">Last Name</label> <span class="text-danger"> * </span>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-6 ">
                    <label for="email">Email Address</label> <span class="text-danger"> * </span>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group col-md-6 col-6">
                    <label for="phone">Phone Number</label> <span class="text-danger"> * </span>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-6">
                    <label for="appointmentDate">Preferred Appointment Date</label> <span class="text-danger"> * </span>
                    <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
                </div>

                <div class="form-group col-md-6 col-6">
                    <label for="appointmentTime">Preferred Appointment Time</label> <span class="text-danger"> * </span>
                    <input type="time" class="form-control" id="appointmentTime" name="appointmentTime" required>
                </div>

            </div>

            <div class="form-group">
                <label for="message">Additional Message (Optional)</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Comment or Message"></textarea>
            </div>

            <button type="submit" class="btn btn-book btn-block">Book Appointment</button>
        </form>
    </div>

    <!-- Link Bootstrap JS and other scripts if needed -->
    <?php include ("../footer.php") ?>

<script>
    // prevent right-click and short cuts
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

      function redirect() {
        window.location.href = `../form/form.php?formName=Autism_Form&Score=${(normalizedScore * 100).toFixed(0) }`;
        return false; 
    }
</script>
    
</body>
</html>
