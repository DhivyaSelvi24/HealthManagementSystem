<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets and Mental Health</title>

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
                    <h2 class="mt-3">Pets and Mental Health Test</h2>
                    <h5 class="header-container mt-3">Take this Pets test. It’s quick, free, and you’ll get your confidential results instantly.</h5>
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
                            <label class="ques" for="question1">1. Which of the following best describes how you think about your pet?</label>
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1Never" value="0">Just a Pet</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1Hardly" value="1">A Companion</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class= "form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Some" autocomplete="off" value="2"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question1Some" value="2">A Friend</label>
                                </div>
                            </div>
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question1" id="question1Most" autocomplete="off" value="3"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label text-nowrap p-2" for="question1Most" value="3">Family Member</label>
                                </div>
                            </div>
                            
                            <div class="col-md-2 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio"  name="question1" id="question1All" autocomplete="off" value="4"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1All" value="4">Like a Child</label>
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
                            <label class="ques" for="question2">2. I miss my pet when I'm away from him/her</label>
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
                            <label class="ques" for="question3">3. I believe my pet is my best friend</label>
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
                            <label class="ques" for="question4">4. I would make major life changes, if necessary, to accommodate my pet</label>
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
                            <label class="ques" for="question5">5. I am interested in learning more about getting an Emotional Support Animal, Assistance Animal, or Service Animal</label>
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
                            <label class="ques" for="question6">6. I am interested in working with a mental health professional who incorporates pets or animal-assisted interventions (such as animal-assisted therapy) into their practice</label>
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
                            <label class="ques" for="question7">7. Accessing veterinary care for my pet(s) has been difficult</label>
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
                            <label class="ques" for="question8">8. I have found it difficult to find pet-friendly rental housing</label>
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
                            <label class="ques" for="question9">9. I would be interested in accessing information about pet care, pet enrichment and/or pet behavior resources</label>
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
                            <label class="ques" for="question10">10. It is hard to find reliable information about pets and mental health</label>
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
                            <label class="ques" for="question11">11. I would like more information on how pets/animal-assisted interventions can help improve mental health conditions</label>
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
                            <label class="ques" for="question12">12. There should be more support for pet ownership and animal-assisted interventions in society</label>
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
