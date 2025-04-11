<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Tracker</title>

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="../styles.css" /> 
    
    <!-- Bootstrap Validator JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <style>

    @media(max-width: 767px){
        #confirmationDialog{
            width: 390px;
        }
    }

        /* Tablets */
        @media screen and (max-width: 600px) {}

@media (max-width: 820px){
    .OPTION {
            margin: 0px -20px 0px 0px;
        }
}
@media (max-width: 912px){
    .OPTION {
            margin: 0px -20px 0px 0px;
        }
}
       
        <?php include("../header.php"); ?>
    </style>
</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="h4-container" class="text-center">
                    <h2 class="mt-3">Mental Health Tracker</h2>
                    <h5 class="header-container mt-3">Take this mental health test. It’s quick, free, and you’ll get your confidential results instantly.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 col-md-12 col-sm-12 mb-4" id="form-container" onsubmit="return myFunction()">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form id="questionnaireForm" onsubmit="return calculateScore()" class="questionnaire-pop">
                    <!-- QUESTION 1 -->
                    <div class="form-group ">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-1.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  <!--\Autism_Form\images\ques-1.webp-->
                        </div>

                        <label for="question1 " class="ques">1. Do you feel guilty or fearful without any reason?</label>
                        <div class="row mt-3 ">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="option1" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('option1').setCustomValidity('')"/>
                                    <label class="form-check-label " for="option1" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="option2" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('option1').setCustomValidity('')"/> 
                                    <label class="form-check-label" for="option2" value="1">Rarely</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="option3" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('option1').setCustomValidity('')"/> 
                                    <label class="form-check-label" for="option3" value="3">Sometimes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question1" id="option4" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('option1').setCustomValidity('')"/> 
                                    <label class="form-check-label" for="option4" value="4">Often</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Next Page Button -->
                    <div class="button-container text-center">
                        <input type="button" value="Back" class="btn btn-lg btn-primary" onclick="goBack()">
                        <input type="submit" value="Next Page" class="btn btn-lg btn-primary">
                    </div>

                    <div><p id="demo"></p></div>
                </form>
            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?>   

    <script>
        function myFunction() {
            const formData = new FormData(document.getElementById("questionnaireForm"));
            let score = 0;

            formData.forEach((value, key) => {
                const answerValue = parseInt(value);
                score += answerValue;
                // alert(score);
                console.log(score);
            });

            window.location.href = `second_page.php?scoreFirstPage=${score}`;
            return false;
        
        }


    function goBack() {
        const radiobuttons = document.querySelectorAll('input[type="radio"]:checked');

        if (radiobuttons.length > 0) {
            showConfirmationDialog();
        } else {
            // window.history.go(-1);
            window.location.href = "../Landing_page/index.php";
        }
    }

    function showConfirmationDialog() {
        const dialog = document.getElementById('confirmationDialog');
        dialog.style.display = 'block';

        return new Promise((resolve) => {
            document.getElementById('confirmYes').onclick = () => {
                // window.history.go(-1);
                window.location.href = "../Landing_page/index.php";
            };

            document.getElementById('confirmNo').onclick = () => {
                dialog.style.display = 'none';
                resolve(false);
                return false;
            };
        });
    }


// PREVENT RIGHT-CLICK AND SHORT CUTS

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


<div class="mt-5" id="confirmationDialog" >
    <p>Are you sure you want to go back? The data you entered will be lost.</p>
    <button class="yes-btn " id="confirmYes">Yes</button>
    <button class="no-btn" id="confirmNo" >No</button>
</div>

</body>

</html>
