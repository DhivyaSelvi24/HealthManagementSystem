<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bipolar Test</title>

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
                    <h2 class="mt-3">Bipolar Test</h2>
                    <h5 class="header-container mt-3">Take this Bipolar test. It’s quick, free, and you’ll get your confidential results instantly.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 col-md-12 col-sm-12 mb-2" id="form-container">
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
                            <label class="ques" for="question1">1. Has there ever been a period of time when you were not your usual self and...</label>
                        </div>
                        <div class="row ml-1">
                            <label class="ques" for="question1">You felt so good or hyper that other people thought you were not your normal self or were so hyper that you got into trouble?</label>
                        </div>
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1" id="question1Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You were so irritable that you shouted at people or started fights or arguments?</label>
                        </div>

                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.2" id="question1.2Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.2\']:checked').length !== 1) document.getElementById('question1.2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.2Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.2" id="question1.2Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.2\']:checked').length !== 1) document.getElementById('question1.2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.2Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.2Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You felt much more self-confident than usual?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.3" id="question1.3Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.3\']:checked').length !== 1) document.getElementById('question1.3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.3Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.3" id="question1.3Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.3\']:checked').length !== 1) document.getElementById('question1.3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.3Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.3Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You got much less sleep than usual and found you didn’t really miss it?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.4" id="question1.4Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.4\']:checked').length !== 1) document.getElementById('question1.4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.4Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.4" id="question1.4Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.4\']:checked').length !== 1) document.getElementById('question1.4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.4Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.4Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You were much more talkative or spoke much faster than usual?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.5" id="question1.5Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.5\']:checked').length !== 1) document.getElementById('question1.5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.5Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.5Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.5" id="question1.5Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.5\']:checked').length !== 1) document.getElementById('question1.5Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.5Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.5Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>Thoughts raced through your head or you couldn’t slow your mind down?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.6" id="question1.6Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.6\']:checked').length !== 1) document.getElementById('question1.6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.6Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.6Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.6" id="question1.6Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.6\']:checked').length !== 1) document.getElementById('question1.6Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.6Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.6Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You were so easily distracted by things around you that you had trouble concentrating or staying on track?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.7" id="question1.7Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.7\']:checked').length !== 1) document.getElementById('question1.7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.7Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.7Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.7" id="question1.7Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.7\']:checked').length !== 1) document.getElementById('question1.7Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.7Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.7Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You had much more energy than usual?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.8" id="question1.8Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.8\']:checked').length !== 1) document.getElementById('question1.8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.8Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.8Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.8" id="question1.8Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.8\']:checked').length !== 1) document.getElementById('question1.8Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.8Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.8Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You were much more social or outgoing than usual, for example, you telephoned friends in the middle of the night?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.9" id="question1.9Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.9\']:checked').length !== 1) document.getElementById('question1.9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.9Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.9Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.9" id="question1.9Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.9\']:checked').length !== 1) document.getElementById('question1.9Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.9Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.9Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>You did things that were unusual for you or that other people might have thought were excessive, foolish, or risky?</label>
                        </div>
                    
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.10" id="question1.10Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.10\']:checked').length !== 1) document.getElementById('question1.10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.10Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.10Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.10" id="question1.10Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.10\']:checked').length !== 1) document.getElementById('question1.10Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.10Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.10Never" value="0">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ml-3 mt-5">
                            <label>Spending money got you or your family into trouble?</label>
                        </div>
                        
                        <div class="row mt-4 ml-1 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.11" id="question1.11Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.11\']:checked').length !== 1) document.getElementById('question1.11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.11Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question1.11Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question1.11" id="question1.11Never" autocomplete="off" value="0"
                                         required  placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question1.11\']:checked').length !== 1) document.getElementById('question1.11Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question1.11Never').setCustomValidity('')"/>
                                    <label class="form-check-label p-2 " for="question1.11Never" value="0">No</label>
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
                            <label class="ques" for="question2">2. If you checked YES to more than one of the above, have several of these ever happened during the same period of time?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question2" id="question2Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question2Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question2Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
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
                            </div>  
                        </div>

                        <div class="row ">
                            <label class="ques" for="question3">3. Have any of your blood relatives had manic-depressive illness or bipolar disorder?</label>
                        </div>
                        <div class="row">
                            <label class="ques" for="question3">i.e. Children, siblings, parents, grandparents, aunts, and uncles.</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question3" id="question3Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question3Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question3Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
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

                        <div class="row ">
                            <label class="ques" for="question4">4. Has a health professional ever told you that you have manic-depressive illness or bipolar disorder?</label>
                        </div>
                        <div class="row mt-4 mx-auto justify-content-center">
                            
                            <div class="col-lg-3 col-md-3 OPTION">
                                <div class="form-check">
                                    <input type="radio" class="btn-check hidden-radio" name="question4" id="question4Hardly" autocomplete="off" value="1"
                                         required placeholder="Select option"
                                         oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Never').setCustomValidity('Please select all questions and proceed')"
                                         oninput="document.getElementById('question4Never').setCustomValidity('')"/> 
                                    <label class="form-check-label p-2" for="question4Hardly" value="1">Yes</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 OPTION">
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
