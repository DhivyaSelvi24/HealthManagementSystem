<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Tracker</title>

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>

        
        body{
            background-color:#f0f0f0;;
        }

        h1 {
            /* margin-top: 20px; */
            color: #000; 
            font-size: 32px;
        }

        /* Container Styles */
        #h4-container {
            /* margin-top: 100px; */
            color: #333; 
        }

        #form-container {
            max-width: 700px;
            margin: 0 auto;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        /* Button Styles */
        .btn {
            background-color: #2E86DE; 
            color: #fff;
            font-size: 18px;
            padding: 15px 30px;
            margin-top: 30px;
            width: 150px;
        }

        .btn:hover {
            background-color: #205FAD; 
        }

        /* Form Group Styles */
        .form-group {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Custom styles for radio buttons and labels */
        .form-check {
            display: flex;
            align-items: center;
            width: 150px;
        }

        .form-check input[type="radio"] {
            margin: 0 5px 0 0;
            /* display: none; */
        }

        .form-check label {
            flex: 1;
            border: 3px solid #2E86DE; 
            border-radius: 5px;
            background-color: #fff;
            text-align: center;
            padding: 10px 0;
            cursor: pointer;
        }

        .form-check label:hover {
            background-color: #2E86DE;
            color: #fff;
        }
        
        .form-check input[type="radio"]:checked + label{
        background-color: #2E86DE;
        color: #fff;
        }   
        
        .hidden-radio {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        @media(max-width: 767px){
            #confirmationDialog{
                width: 390px !important;
            }
        }

        #confirmationDialog{
            display: none; 
            position: fixed; 
            top: 40%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            background-color: #fff; 
            padding: 30px; 
            border: 2px solid #ccc; 
            z-index: 1000;
            height: auto;
            width: 500px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .yes-btn, .no-btn{
            width:100px; 
            height:50px; 
            border:none; 
            background-color:#2280dd; 
            color:#fff; 
            border-radius:2px
        }

        .img{
            width:80px;
        }
        
        h1,#h4-container, #form-container{
                opacity: 0;
                transform: translateX(-100px);
                animation: slideIn 0.5s ease-out forwards;
            }
            @keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translateX-(100px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

    /* Mobile Response */
    @media screen and (max-width: 600px) {

    h2{
        font-size:21px;
        /* color:red; */
    }
    h5{
        font-size:14px!important;
        /* color:blue; */
    }

    .ques,.form-check{
        font-size: 14px;
        text-align: justify;
    }
    .btn{
            font-size:12px;
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
                    <h2 class="mt-3">Mental Health Tracker</h1>
                    <h5 class="header-container mt-3">Take this mental health test. It’s quick, free, and you’ll get your confidential results instantly.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 col-md-12 col-sm-12 mb-4" id="form-container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form id="questionnaireForm" onsubmit="return myFunction()" class="questionnaire-pop">
                    <!-- QUESTION 1 -->
                    <div class="form-group">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-2.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  <!--\Autism_Form\images\ques-1.webp-->
                        </div>
                        <label for="question1" class="ques">2. Do you find yourself avoiding friends and family?</label>
                        <!-- Options-->
                        <div class="row mt-3">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="option1" autocomplete="off" value="0" required placeholder="Select option"
                                    oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                    oninput="document.getElementById('option1').setCustomValidity('')"/>
                                    <label class="form-check-label" for="option1" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="option2" autocomplete="off" value="1" required placeholder="Select option"
                                    oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                    oninput="document.getElementById('option1').setCustomValidity('')"/> 
                                    <label class="form-check-label" for="option2" value="1">Rarely</label>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="option3" autocomplete="off" value="2" required placeholder="Select option"
                                    oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                    oninput="document.getElementById('option1').setCustomValidity('')"/> 
                                    <label class="form-check-label" for="option3" value="3">Sometimes</label>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="option4" autocomplete="off" value="3" required placeholder="Select option"
                                    oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('option1').setCustomValidity('Please select all questions and proceed')"
                                    oninput="document.getElementById('option1').setCustomValidity('')"/> 
                                    <label class="form-check-label" for="option4" value="4">Often</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="button-container text-center">
                        <input type="button" value="Back" class="btn btn-lg btn-primary" onclick="goBack()">
                        <button type="submit"  class="btn btn-lg btn-primary">Submit</button>
                    </div>
                    <div><p id="demo"></p></div>
                </form>
            </div>
        </div>
    </div>
    <?php include("../footer.php"); ?>   
    <script>
        function myFunction() {
            const urlParams = new URLSearchParams(window.location.search);
            const scoreFromFirstPage = parseInt(urlParams.get('scoreFirstPage'));
    
            const formData = new FormData(document.getElementById("questionnaireForm"));
            let scoreFromSecondPage = 0;

            formData.forEach((value, key) => {
                const answerValue = parseInt(value);
                scoreFromSecondPage += answerValue;
            });

            
            const totalScore = scoreFromFirstPage + scoreFromSecondPage;
            // alert(totalScore);
        
            window.location.href = `score.php?totalScore=${totalScore}`;
            return false;
                }


    function goBack() {
        const radiobuttons = document.querySelectorAll('input[type="radio"]:checked');

        if (radiobuttons.length > 0) {
            showConfirmationDialog();
        } else {
            // window.history.go(-1);
            window.location.href = "index.php";
        }
    }

    function showConfirmationDialog() {
        const dialog = document.getElementById('confirmationDialog');
        dialog.style.display = 'block';

        return new Promise((resolve) => {
            document.getElementById('confirmYes').onclick = () => {
                // window.history.go(-1);
                window.location.href = "index.php";
            };

            document.getElementById('confirmNo').onclick = () => {
                dialog.style.display = 'none';
                resolve(false);
                return false;
            };
        });
    }

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


<div class="mt-5" id="confirmationDialog" >
    <p>Are you sure you want to go back? The data you entered will be lost.</p>
    <button class="yes-btn " id="confirmYes">Yes</button>
    <button class="no-btn" id="confirmNo" >No</button>
</div>

</body>

</html>
