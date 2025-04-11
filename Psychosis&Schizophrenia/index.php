<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychosis & Schizophrenia Test</title>

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
                    <h2 class="mt-3">Psychosis & Schizophrenia Test</h2>
                    <h5 class="header-container mt-3">Take this Schizophrenia test. It’s quick, free, and you’ll get your confidential results instantly.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 col-md-12 col-sm-12 mb-2" id="form-container" >
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form id="questionnaireForm" onsubmit="return calculateScore()" class="questionnaire-pop">
                    <!-- QUESTION 1 -->
                    <div class="form-group">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-1.webp" alt="Your Image" class=" img mx-auto d-block">
                            </div>  
                        </div>

                        <div class="row ques-row">
                            <label class="ques" for="question1">1. Do familiar surroundings sometimes seem strange, confusing, threatening or unreal to you?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question2">2. Have you heard unusual sounds like banging, clicking, hissing, clapping or ringing in your ears?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="question2Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question2Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="question2Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question2Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question3">3. Do things that you see appear different from the way they usually do?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question3" id="question3Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question3Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question3" id="question3Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question3Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question4">4. Have you had experiences with telepathy, psychic forces, or fortune telling?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question4" id="question4Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question4Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question4" id="question4Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question4Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question5">5. Have you felt that you are not in control of your own ideas or thoughts?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question5" id="question5Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question5Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question5" id="question5Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question5Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question5Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question6">6. Do you have difficulty getting your point across, because you ramble or go off the track a lot when you talk?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question6" id="question6Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question6Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question6" id="question6Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question6Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question6Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question7">7. Do you have strong feelings or beliefs about being unusually gifted or talented in some way?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question7" id="question7Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question7Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question7" id="question7Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question7Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question7Never" value="0">No</label>
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
                        <div class="row ques-row">
                            <label class="ques" for="question8">8. Do you feel that other people are watching you or talking about you?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question8" id="question8Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question8Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question8" id="question8Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question8Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question8Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question9">9. Do you sometimes get strange feelings on or just beneath your skin, like bugs crawling?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question9" id="question9Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question9Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question9" id="question9Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question9Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question9Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question10">10. Do you sometimes feel suddenly distracted by distant sounds that you are not normally aware of?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question10" id="question10Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question10Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question10" id="question10Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question10Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question10Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question11">11. Have you had the sense that some person or force is around you, although you couldn’t see anyone?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question11" id="question11Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question11Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question11" id="question11Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question11Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question11Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question12">12. Do you worry at times that something may be wrong with your mind?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question12" id="question12Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question12Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question12" id="question12Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question12Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question12Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question12Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question13">13. Have you ever felt that you don't exist, the world does not exist, or that you are dead?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question13" id="question13Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question13Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question13" id="question13Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question13Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question13Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question13Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question14">14. Have you been confused at times whether something you experienced was real or imaginary?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question14" id="question14Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question14Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question14" id="question14Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question14Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question14Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question14Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question15">15. Do you hold beliefs that other people would find unusual or bizarre?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question15" id="question15Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question15Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question15" id="question15Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question15Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question15Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question15Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question16">16. Do you feel that parts of your body have changed in some way, or that parts of your body are working differently?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question16" id="question16Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question16Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question16" id="question16Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question16Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question16Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question16Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question17">17. Are your thoughts sometimes so strong that you can almost hear them?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question17" id="question17Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question17Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question17" id="question17Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question17Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question17Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question17Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question18">18. Do you find yourself feeling mistrustful or suspicious of other people?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question18" id="question18Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question18Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question18" id="question18Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question18Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question18Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question19">19. Have you seen unusual things like flashes, flames, blinding light, or geometric figures? </label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question19" id="question19Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question19Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question19" id="question19Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question19Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question19Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question19Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question20">20. Have you seen things that other people can't see or don't seem to see?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question20" id="question20Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question20Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question20" id="question20Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question20Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question20Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question20Never" value="0">No</label>
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

                        <div class="row ques-row">
                            <label class="ques" for="question21">21. Do people sometimes find it hard to understand what you are saying?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question21" id="question21Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question21Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question21" id="question21Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question21Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question21Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question21Never" value="0">No</label>
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

    <!-- <div class="container">
        <div class="row ques-row">
            <div class="arrow-buttons">
                <button class="arrow-button" id="scrollUpButton" onclick="scrollToTop()">&#8679;</button>
                <button class="arrow-button" id="scrollDownButton" onclick="scrollToBottom()">&#8681;</button>
            </div>
        </div>
    </div> -->
    <?php include("../arrow-button.php"); ?> 

    <?php include("../footer.php"); ?>   
    
    <script>
        function calculateScore() {
            const formData = new FormData(document.getElementById("questionnaireForm"));
            let score = 0;

            formData.forEach((value, key) => {
                const answerValue = parseInt(value);
                score += answerValue;
                // console.log(score)
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


    // Prevent Right-Click and shortcuts
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
