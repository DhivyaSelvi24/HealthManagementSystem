<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
         <!-- Link Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
   />

   <!-- CSS -->
    <!-- <link rel="stylesheet" href="../styles.css" />  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .btn{
            color:white;
            /* font-weight: 500; */
        }

    /* Mobile Response */
    @media screen and (max-width: 600px) {
    #form-border{
        font-size:15px;
        }

    .form-control{
        font-size: 11px !important;
    }
}

/* Header */
<?php include("../header.php"); ?>

    </style>
</head>
<body>
    <div class="container " name="form-container" id="form-border">
        <div class="row justify-content-center">
            <div class="col-md-6 col-10 my-4">
                <h2 class="text-center mb-4">User Information</h2>
                <form method="post" id="form" data-toggle="validator" action="sendMail.php">

                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Title</label><span class="text-danger"> * </span>
                        <select class="form-control" id="title" name="title" required 
                                    oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                    oninput="this.setCustomValidity('')" >
                            <option value="" disabled selected>Select Title</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss">Miss</option>
                        </select>
                        <span id="titleError"></span>
                    </div>
                   
                    <div class="row">
                         <!-- First Name -->
                        <div class="form-group col-md-6 col-6">
                            <label for="firstName">First Name</label> <span class="text-danger"> * </span>
                            <input type="text" class="form-control" id="firstName" name="firstName" required 
                                    oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                    oninput="this.setCustomValidity('')"/>
                            <span id="firstNameError"></span>
                        </div>
                        <!-- Last Name -->
                        <div class="form-group col-md-6 col-6">
                            <label for="lastName">Last Name</label> <span class="text-danger"> * </span>
                            <input type="text" class="form-control" id="lastName" name="lastName" required 
                                    oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                    oninput="this.setCustomValidity('')"/>
                            <span id="lastNameError"></span>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Age -->
                        <div class="form-group col-md-6 col-6">
                            <label for="age">Age</label> <span class="text-danger"> * </span>
                            <input type="textbox" class="form-control" id="age" name="age" maxlength="3" required
                                        pattern="[0-9]{1,3}"
                                        oninvalid="validateAge(this)"
                                        oninput="this.setCustomValidity('')"/>
                            <span id="ageError"></span>
                        </div>
  
                        <!-- Mode of Sharing -->
                        <div class="form-group col-md-6 col-sm-6 col-6">
                            <label>Mode of sharing</label> <span class="text-danger"> * </span>
                            <div class="row ml-0 mode-of-sharing">
                                <div class="form-check  col-lg-4  ">
                                    <input class="form-check-input" type="radio" name="sharingMode" id="emailOption" value="Email" required 
                                        oninvalid="this.setCustomValidity('Please select all questions and proceed')"
                                        oninput="this.setCustomValidity('')"/>
                                    <label class="form-check-label" for="Email">Email</label>
                                </div>
                                <div class="form-check col-lg-4">
                                    <input class="form-check-input" type="radio" name="sharingMode" id="phoneOption" value="Phone number" required placeholder="Select option"
                                                        oninvalid="if(document.querySelectorAll('input[name=\'sharingMode\']:checked').length !== 1) document.getElementById('emailOption').setCustomValidity('Please select all questions and proceed')"
                                                        oninput="document.getElementById('emailOption').setCustomValidity('')"/>
                                    <label class="form-check-label text-nowrap" for="Phone number">Phone number</label>
                                </div>
                            </div>
                            <span id="sharingModeError"></span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group ">
                        <label for="email">Email</label> <span class="text-danger"> * </span>
                        <input type="email" class="form-control" id="email" name="email" required 
                                    oninvalid="validateEmail(this)"
                                    oninput="this.setCustomValidity('')"/>
                        <span id="emailError"></span>
                    </div>
                    <!--  Contact Number  -->
                    <div class="form-group">
                        <label for="contactNumber">Contact Number</label> <span class="text-danger"> * </span>
                        <input type="tel" class="form-control" id="contactNumber" name="contactNumber"  maxlength="10"  required
                                    pattern="[0-9]{10}"
                                    oninvalid="validateContactNumber(this)"
                                    oninput="this.setCustomValidity('')"/>

                        <span id="numberError"></span>
                    </div>
                   
                    <!-- Hidden input for the score -->
                    <input type="hidden" name="score" value="<?php echo $score . '%'; ?>" >



                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="btn btn-primary text-center">
                                    <button class="btn btn-md md-1" type="submit" name="submit" id="submit" onclick="validate()"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php include("../footer.php"); ?>
 


    <script>
    
    // PREVENT RIGHT CLICK AND SHORTCUTS
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
     
    
    // Parse the query parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const score = urlParams.get('Score');
    
    // console.log(score);
    
    // Set the value of the hidden input
    document.querySelector('input[name="score"]').value = score + '%';
    
    // VALIDATION
    
    function validateAge(input) {
            if (input.validity.valueMissing) {
                input.setCustomValidity('Please select all questions and proceed');
            } else if (input.validity.patternMismatch) {
                input.setCustomValidity('Age should only contain numeric characters');
            }
        }
    
    function validateContactNumber(input) {
            if (input.validity.valueMissing) {
                input.setCustomValidity('Please select all questions and proceed');
            } else if (input.validity.patternMismatch) {
                input.setCustomValidity('Number should contain atleast 10 numeric characters');
            }
        }
    
    function validateEmail(input) {
            if (input.validity.valueMissing) {
                input.setCustomValidity('Please select all questions and proceed');
            } else if (input.validity.typeMismatch) {
                input.setCustomValidity('Enter a valid email address. Please include "@" and ".com"');
            }
        }
    
    
    function validate() {
    
        //getting form name 
    const urlParams = new URLSearchParams(window.location.search);
    const formName = urlParams.get('formName');
    
    // Excel sheet
        let scriptURL;
    
        // Using formName parameter  
        if (formName === 'Anxious_Form') {
            scriptURL = 'https://script.google.com/macros/s/AKfycbxuGdIIVG8SIa04j-T-q0ODG59GP9uxVNFitmTADeDs7m7QGE2ITSMa0vArvVBoRZNm/exec';
        } else if (formName === 'Autism_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbwtUIa2bMhmXuxlwmCVa9mtlWr4s7l3_Q1zrHjYNKy44ghyCBt_ZzhK3bwmZeT62mab/exec';  
        } else if (formName === 'ADHD_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbxQ6PZEw47nKHU7AkS31E4ulg3UL0nrPVrHE5E-i6x9VUWqX1Wi7ac1jghN50j8uMby7A/exec';
        } else if (formName === 'depression_form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbyJkaB-SKhWKm3cAX2osMSms3_oss8vf7r9Sj9Pef5tjgfN6k5lNtTvcnFgck169pEk/exec';
        } else if (formName === 'Mental_Health_Tracker'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbzfhOW_UI0lUE0A462Zz9cjVaxjq7q45-DkOpmfT2p4L3I9rpiOrRjKLhnjroXPkZrZ_Q/exec';
        } else if (formName === 'OCD_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbxq1fY1V-57p2JmJH5tKWsCUlA7IfAhouyRJinLshZLZNLdbeb2tL0lUh99mpsjBMIKLQ/exec';
        } else if (formName === 'Sleep_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbySB1x1W8mh79W7QeTfh4aH0QHtHP4yzUU0v9LU2oG_sZJ7c2JjgrpGNXDtRjJtMegN/exec';
        } else if (formName === 'feel-about-yourself'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbxOD7fU4ptkiujDA3ZvSJakgxaOilUJiMW-MafMyyaMqEH2SP4m3B-pbClXi_LlOTkOqQ/exec';
        } else if (formName === 'Addiction_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbywq_ApH3_wa4Mtm3i9OzFOqufIzGvH-3jTT0pJRDCXNsCTfpNhaUpILKARryTL5OJ4ag/exec';
        } else if (formName === 'Stress_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbzqLlA782UKgONRseZmokesYPnR2nxdekaXj5gvFDOnR3cNAiW-2M4aOPVWWgL2kUcNpw/exec';
        } else if (formName === 'Marriage_Solidarity_Scale'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbwQfoKtxzMCeWT2hwqj8wwNgkfRaXc7ItYXSGEl7xsheUDxt__ZW9zMut3lTEgMsZ_Z/exec';
        } else if (formName === 'Relationship_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbxkuwh79uCGLblm8ZfFTksOJjStmshs4spjndzyLScpzztawcDbW7pjB5TctDc8XbHN1Q/exec';
        } else if (formName === 'Fitness_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbwXLkJ4z11PpCcLPA3TyfUFupgQq8sMAOzCEx4V1fT7fP0947Jlw_J-W6ChPseVw-Ro0g/exec';
        } else if (formName === 'Parent_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbxw1tyjLxqc1DRKN6SUwJInuinpg3Yfmaf7_F1jmRv8I6LNFANdzQbsfDCIWok9jwhh/exec';
        } else if (formName === 'Job_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbzpBDRYeufyj7WaBRg81hne6GtdVOZHpJfFDcEyFxKEAAFodZLIl2kFck-j8oVkxuWK1g/exec';
        } else if (formName === 'Postpartum_Form'){
            scriptURL = 'https://script.google.com/macros/s/AKfycbw3Rv0NkA7ITpEvTbQmOVX0GrDe19CIl_qtO5asTv7aRrQeChzqhGtrcqWSuYiqznYa/exec';
        }
        
    
        const form = document.querySelector('#form');
        const submitButton = document.querySelector("#submit");
    
        submitButton.disabled = true;
        const requestBody = new FormData(form);
    
        // Disable form submission if any validation fails
        if (!form.checkValidity()) {
            submitButton.disabled = false;
            return;
        }
    
        fetch(scriptURL, { method: 'POST', body: requestBody })
            .then(response => {
                // alert('Success!', response)
                submitButton.disabled = false;
                window.location.href = `acknowledgement.php?formName=${formName}`;
            })
            .catch(error => {
                alert('Error loading!', error.message);
                submitButton.disabled = false;
            });
    
    
        }
    document.querySelector('#form').addEventListener('submit', function (e) {
        e.preventDefault();
        validate();
    });
    
    </script>    

    
<script src="js/form.js"></script>


</body>
</html>

