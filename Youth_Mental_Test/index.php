<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Mental Health Test</title>

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="../styles.css" /> 

    <!-- Bootstrap Validator JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <style>

        @media(max-width: 767px){
            #confirmationDialog{
                width: 390px !important;
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
                    <h2 class="mt-3">Youth Mental Health Test</h2>
                    <h5 class="header-container mt-3">Take this Youth Mental Health test. It’s quick, free, and you’ll get your confidential results instantly.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 col-md-12 col-sm-12 mb-2" id="form-container" onsubmit="return myFunction()">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form id="questionnaireForm" onsubmit="return calculateScore()" class="questionnaire-pop">
                    <!-- QUESTION 1 -->
                    <div class="form-group ">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-1.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row">
                            <label class="ques" for="question1">1. How often you complain of aches or pains</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question1Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question1" id="question1Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question1Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question1" id="question1All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 2 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-2.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question2">2. How often you spend more time alone</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="question2Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question2Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="question2Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question2Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="question2Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question2Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question2" id="question2Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question2Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question2" id="question2All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question2All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-3.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  <!--\Autism_Form\images\ques-1.webp-->
                        </div>

                        <div class="row ">
                            <label class="ques" for="question3">3. How often do you find yourself feeling tired easily with little energy?</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question3" id="question3Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question3Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question3" id="question3Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question3Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question3" id="question3Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question3Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question3" id="question3Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question3Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question3" id="question3All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question3All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-4.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question4">4. How often you fidgety, unable to sit still</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question4" id="question4Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question4Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question4" id="question4Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question4Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question4" id="question4Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question4Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question4" id="question4Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question4Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question4" id="question4All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question4All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-5.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question5">5. How often you have trouble with teacher</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question5" id="question5Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question5Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question5" id="question5Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question5Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question5" id="question5Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question5Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question5" id="question5Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question5Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question5" id="question5All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question5All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-6.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question6">6. How often you less interested in school</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question6" id="question6Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question6Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question6" id="question6Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question6Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question6" id="question6Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question6Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question6" id="question6Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question6Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question6" id="question6All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question6All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-7.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question7">7. How often you act as if driven by motor</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question7" id="question7Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question7Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question7" id="question7Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question7Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question7" id="question7Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question7Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question7" id="question7Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question7Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question7" id="question7All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question7All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 8 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-8.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>
                        <div class="row ">
                            <label class="ques" for="question8">8. How often you daydream too much</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question8" id="question8Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question8Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question8" id="question8Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question8Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question8" id="question8Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question8Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question8" id="question8Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question8Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question8" id="question8All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question8All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 9 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-9.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question9">9. How often you distract easily</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question9" id="question9Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question9Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question9" id="question9Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question9Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question9" id="question9Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question9Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question9" id="question9Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question9Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question9" id="question9All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question9All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 10 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-10.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question10">10. How often you are afraid of new situations</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question10" id="question10Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question10Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question10" id="question10Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question10Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question10" id="question10Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question10Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question10" id="question10Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question10Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question10" id="question10All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question10All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 11 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-11.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question11">11. How often you feel sad, unhappy</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question11" id="question11Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question11Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question11" id="question11Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question11Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question11" id="question11Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question11Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question11" id="question11Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question11Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question11" id="question11All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question11All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 12 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-12.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question12">12. How often you are irritable, angry</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question12" id="question12Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question12Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question12" id="question12Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question12Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question12" id="question12Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question12Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question12" id="question12Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question12Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question12" id="question12All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question12All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 13 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-13.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question13">13. How often you feel hopeless</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question13" id="question13Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question13Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question13" id="question13Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question13Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question13" id="question13Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question13Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question13" id="question13Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question13Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question13" id="question13All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question13All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 14 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-14.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question14">14. How often you have trouble concentrating</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question14" id="question14Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question14Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question14" id="question14Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question14Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question14" id="question14Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question14Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question14" id="question14Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question14Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question14" id="question14All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question14All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 15 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-15.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question15">15. How often you less interested in friends</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question15" id="question15Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question15Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question15" id="question15Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question15Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question15" id="question15Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question15Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question15" id="question15Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question15Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question15" id="question15All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question15All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 16 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-16.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question16">16. How often you fight with other children</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question16" id="question16Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question16Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question16" id="question16Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question16Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question16" id="question16Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question16Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question16" id="question16Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question16Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question16" id="question16All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question16All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 17 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-17.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question17">17. How often you absent from school</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question17" id="question17Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question17Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question17" id="question17Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question17Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question17" id="question17Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question17Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question17" id="question17Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question17Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question17" id="question17All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question17All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 18 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-18.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question18">18. How often you school grades dropping</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question18" id="question18Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question18Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question18" id="question18Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question18Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question18" id="question18Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question18Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question18" id="question18Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question18Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question18" id="question18All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question18All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 19 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-19.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question19">19. How often you down on yourself</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question19" id="question19Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question19Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question19" id="question19Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question19Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question19" id="question19Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question19Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question19" id="question19Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question19Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question19" id="question19All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question19All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 20 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-20.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question20">20. How often you visit doctor with doctor finding nothing wrong</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question20" id="question20Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question20Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question20" id="question20Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question20Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question20" id="question20Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question20Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question20" id="question20Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question20Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question20" id="question20All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question20All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 21 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-21.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question21">21. How often you have trouble sleeping</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question21" id="question21Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question21Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question21" id="question21Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question21Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question21" id="question21Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question21Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question21" id="question21Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question21Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question21" id="question21All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question21All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 22 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-22.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question22">22. How often you worry a lot</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question22" id="question22Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question22Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question22Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question22Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question22" id="question22Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question22\']:checked').length !== 1) document.getElementById('question22Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question22Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question22Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question22" id="question22Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question22\']:checked').length !== 1) document.getElementById('question22Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question22Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question22Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question22" id="question22Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question22\']:checked').length !== 1) document.getElementById('question22Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question22Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question22Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question22" id="question22All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question22\']:checked').length !== 1) document.getElementById('question22Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question22Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question22All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 23 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-23.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question23">23. How often you want to be with parent more than before</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question23" id="question23Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question23Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question23Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question23Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question23" id="question23Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question23\']:checked').length !== 1) document.getElementById('question23Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question23Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question23Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question23" id="question23Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question23\']:checked').length !== 1) document.getElementById('question23Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question23Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question23Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question23" id="question23Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question23\']:checked').length !== 1) document.getElementById('question23Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question23Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question23Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question23" id="question23All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question23\']:checked').length !== 1) document.getElementById('question23Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question23Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question23All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 24 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-24.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question24">24. How often you feel that you are bad</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question24" id="question24Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question24Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question24Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question24Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question24" id="question24Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question24\']:checked').length !== 1) document.getElementById('question24Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question24Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question24Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question24" id="question24Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question24\']:checked').length !== 1) document.getElementById('question24Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question24Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question24Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question24" id="question24Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question24\']:checked').length !== 1) document.getElementById('question24Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question24Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question24Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question24" id="question24All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question24\']:checked').length !== 1) document.getElementById('question24Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question24Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question24All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Question 25 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-25.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question25">25. How often you take unnecessary risks</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question25" id="question25Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question25Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question25Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question25Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question25" id="question25Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question25\']:checked').length !== 1) document.getElementById('question25Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question25Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question25Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question25" id="question25Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question25\']:checked').length !== 1) document.getElementById('question25Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question25Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question25Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question25" id="question25Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question25\']:checked').length !== 1) document.getElementById('question25Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question25Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question25Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question25" id="question25All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question25\']:checked').length !== 1) document.getElementById('question25Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question25Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question25All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 26 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-26.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question26">26. How often you get hurt frequently</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question26" id="question26Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question26Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question26Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question26Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question26" id="question26Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question26\']:checked').length !== 1) document.getElementById('question26Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question26Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question26Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question26" id="question26Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question26\']:checked').length !== 1) document.getElementById('question26Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question26Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question26Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question26" id="question26Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question26\']:checked').length !== 1) document.getElementById('question26Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question26Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question26Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question26" id="question26All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question26\']:checked').length !== 1) document.getElementById('question26Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question26Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question26All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <!-- Question 27 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-27.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question27">27. How often you seem to be having less fun</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question27" id="question27Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question27Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question27Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question27Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question27" id="question27Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question27\']:checked').length !== 1) document.getElementById('question27Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question27Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question27Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question27" id="question27Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question27\']:checked').length !== 1) document.getElementById('question27Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question27Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question27Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question27" id="question27Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question27\']:checked').length !== 1) document.getElementById('question27Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question27Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question27Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question27" id="question27All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question27\']:checked').length !== 1) document.getElementById('question27Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question27Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question27All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 28 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-28.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question28">28. How often you act younger than children your age</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question28" id="question28Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question28Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question28Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question28Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question28" id="question28Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question28\']:checked').length !== 1) document.getElementById('question28Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question28Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question28Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question28" id="question28Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question28\']:checked').length !== 1) document.getElementById('question28Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question28Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question28Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question28" id="question28Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question28\']:checked').length !== 1) document.getElementById('question28Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question28Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question28Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question28" id="question28All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question28\']:checked').length !== 1) document.getElementById('question28Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question28Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question28All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 29 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-29.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question29">29. How often you do not listen to rules</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question29" id="question29Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question29Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question29Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question29Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question29" id="question29Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question29\']:checked').length !== 1) document.getElementById('question29Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question29Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question29Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question29" id="question29Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question29\']:checked').length !== 1) document.getElementById('question29Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question29Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question29Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question29" id="question29Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question29\']:checked').length !== 1) document.getElementById('question29Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question29Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question29Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question29" id="question29All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question29\']:checked').length !== 1) document.getElementById('question29Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question29Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question29All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 30 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-30.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question30">30. How often you do not show feelings</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question30" id="question30Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question30Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question30Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question30Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question30" id="question30Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question30\']:checked').length !== 1) document.getElementById('question30Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question30Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question30Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question30" id="question30Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question30\']:checked').length !== 1) document.getElementById('question30Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question30Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question30Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question30" id="question30Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question30\']:checked').length !== 1) document.getElementById('question30Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question30Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question30Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question30" id="question30All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question30\']:checked').length !== 1) document.getElementById('question30Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question30Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question30All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 31 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-31.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question31">31. How often you do not understand other people's feelings</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question31" id="question31Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question31Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question31Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question31Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question31" id="question31Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question31\']:checked').length !== 1) document.getElementById('question31Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question31Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question31Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question31" id="question31Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question31\']:checked').length !== 1) document.getElementById('question31Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question31Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question31Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question31" id="question31Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question31\']:checked').length !== 1) document.getElementById('question31Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question31Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question31Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question31" id="question31All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question31\']:checked').length !== 1) document.getElementById('question31Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question31Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question31All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 32 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-32.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question32">32. How often you tease others</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question32" id="question32Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question32Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question32Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question32Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question32" id="question32Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question32\']:checked').length !== 1) document.getElementById('question32Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question32Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question32Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question32" id="question32Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question32\']:checked').length !== 1) document.getElementById('question32Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question32Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question32Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question32" id="question32Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question32\']:checked').length !== 1) document.getElementById('question32Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question32Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question32Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question32" id="question32All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question32\']:checked').length !== 1) document.getElementById('question32Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question32Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question32All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 33 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-33.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question33">33. How often you blame others for your troubles</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question33" id="question33Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question33Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question33Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question33Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question33" id="question33Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question33\']:checked').length !== 1) document.getElementById('question33Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question33Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question33Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question33" id="question33Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question33\']:checked').length !== 1) document.getElementById('question33Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question33Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question33Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question33" id="question33Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question33\']:checked').length !== 1) document.getElementById('question33Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question33Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question33Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question33" id="question33All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question33\']:checked').length !== 1) document.getElementById('question33Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question33Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question33All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 34 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-34.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question34">34. How often you take things that do not belong to you</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question34" id="question34Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question34Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question34Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question34Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question34" id="question34Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question34\']:checked').length !== 1) document.getElementById('question34Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question34Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question34Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question34" id="question34Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question34\']:checked').length !== 1) document.getElementById('question34Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question34Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question34Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question34" id="question34Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question34\']:checked').length !== 1) document.getElementById('question34Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question34Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question34Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question34" id="question34All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question34\']:checked').length !== 1) document.getElementById('question34Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question34Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question34All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Question 35 -->
                    <div class="form-group mt-5">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-35.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question35">35. How often you refuse to share</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question35" id="question35Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question35Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question35Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question35Never" value="0">Never</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question35" id="question35Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question35\']:checked').length !== 1) document.getElementById('question35Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question35Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question35Hardly" value="1">Hardly ever</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question35" id="question35Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question35\']:checked').length !== 1) document.getElementById('question35Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question35Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question35Some" value="2">Some of the time</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question35" id="question35Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question35\']:checked').length !== 1) document.getElementById('question35Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question35Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question35Most" value="3">Most of the time</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question35" id="question35All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question35\']:checked').length !== 1) document.getElementById('question35Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question35Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question35All" value="4">All the time</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="button-container text-center">
                        <input type="button" value="Back" class="btn btn-lg btn-primary" onclick="goBack()">
                        <input type="submit" value="Submit" class="btn btn-lg btn-primary">
                    </div>

                    <div><p id="demo"></p></div>
                </form>
            </div>
        </div>
    </div>

    
    <?php include("../arrow-button.php"); ?> 

    <?php include("../footer.php"); ?>   
    
    <script>
        function myFunction() {
            const formData = new FormData(document.getElementById("questionnaireForm"));
    let score = 0;

    formData.forEach((value, key) => {
        const answerValue = parseInt(value);

        // Check if the parsed value is a valid number
        if (!isNaN(answerValue)) {
            score += answerValue;
        }
    });

    // Redirect to score.html with the total score as a parameter
    window.location.href = `score.php?score=${score}`;
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
