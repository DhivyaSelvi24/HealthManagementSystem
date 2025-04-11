<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Questionnaire</title>


     <!-- Link Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
   />

   <!-- Google Fonts stylesheet for "Roboto": -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

       <!-- Link your custom CSS -->
       <link rel="stylesheet" href="styles.css" />
    <style>

        body{
            background-color: #f0f0f0;
        }
        
        h1 {
            color:#000;
            font-size: 32px;
        } 

        #h4-container{
        color:#333;

        }

#form-container{
            max-width: 900px;
            margin: 0 auto;
            margin-top: 20px;
            padding: 20px;
            background-color: #FFFFFF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            animation: fadeIn 1s;
}

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
    color: #fff;
}

.form-group{
    font-family: 'Roboto', sans-serif;
    font-size:larger;
}

.btn-scroll {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }


.q-line{
    margin-left: 0%
}

.img{
    width:80px;
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
            /* height: 30%; */
            height: auto;
            width: 500px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

@media(max-width: 767px){
    #confirmationDialog{
        width: 370px;
        height: auto;
    }
}

        .yes-btn, .no-btn{
            width:100px; 
            height:50px; 
            border:none; 
            background-color:#2280dd; 
            color:#fff; 
            border-radius:2px
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
        font-size:15px!important;
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
           
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="h4-container" class="text-center">
                        <h2 class="mt-3">Autism Questionnaire</h1>
                        <h5 class="mt-3">Parents are kindly requested to answer the following questions regarding their child's behaviour</h4>
                    </div>                    
                </div>
            </div>     
        </div>

        
        <div class="container mt-2 col-md-12 col-sm-12 mb-2" id="form-container">
            <div class="row qline">
                <div class="col-md-12 col-sm-12 ">
                    <form id="questionnaireForm" onsubmit="return calculateScore()" class="questionnaire-pop">
                        <!-- QUESTION 1 -->
                        <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-1.webp" alt="Your Image" class=" img mx-auto d-block">
                                </div>  <!--\Autism_Form\images\ques-1.webp-->
                            </div>
                            <!-- Question and options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question1" >1. Does the child easily participate in games with other children?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto ">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question1Yes" name="question1" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question1Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question1Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question1Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question1No" name="question1" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question1\']:checked').length !== 1) document.getElementById('question1Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question1Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question1No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- QUESTION 2 -->
                        <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-2.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>
                            <!-- Question and options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question2">2. Does the child spontaneously approach you for a chat?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question2Yes" name="question2" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question2Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question2Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question2No" name="question2" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question2\']:checked').length !== 1) document.getElementById('question2Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question2Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question2No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
						
                        <!-- QUESTION 3 -->
                        <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-3.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question3">3. Did the child start speaking by the age of two?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question3Yes" name="question3" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question3Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question3Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question3No" name="question3" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question3\']:checked').length !== 1) document.getElementById('question3Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question3Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question3No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 4 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-4.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question4">4. Does the child enjoy participating in sports?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question4Yes" name="question4" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question4Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question4Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question4No" name="question4" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question4\']:checked').length !== 1) document.getElementById('question4Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question4Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question4No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 5 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-5.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question5">5. Is it important for the child to fit in with their peer group?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question5Yes" name="question5" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question5Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question5Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question5No" name="question5" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question5\']:checked').length !== 1) document.getElementById('question5Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question5Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question5No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 6 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-6.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question6">6. Does the child seem to notice unusual details that others may miss?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question6Yes" name="question6" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question6Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question6Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question6No" name="question6" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question6\']:checked').length !== 1) document.getElementById('question6Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question6Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question6No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 7 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-7.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question7">7. Does the child tend to interpret things literally?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question7Yes" name="question7" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question7Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question7Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question7No" name="question7" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question7\']:checked').length !== 1) document.getElementById('question7Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question7Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question7No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 8 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-8.webp" alt="Your Image" class=" img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question8">8. When the child was 3 years old, did they engage in imaginative play, like pretending to be a superhero or hosting teddy bear tea parties?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question8Yes" name="question8" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question8Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question8Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question8No" name="question8" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question8\']:checked').length !== 1) document.getElementById('question8Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question8Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question8No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- QUESTION 9 -->
                        <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-9.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question9">9. Does the child like to repeat activities in the same way consistently?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question9Yes" name="question9" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question9Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question9Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question9No" name="question9" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question9\']:checked').length !== 1) document.getElementById('question9Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question9Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question9No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 10 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-10.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question10">10. Is it easy for the child to interact with other children?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question10Yes" name="question10" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question10Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question10Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question10No" name="question10" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question10\']:checked').length !== 1) document.getElementById('question10Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question10Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question10No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 11 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-11.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question11">11. Can the child maintain a two-way conversation effectively?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question11Yes" name="question11" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question11Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question11Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question11No" name="question11" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question11\']:checked').length !== 1) document.getElementById('question11Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question11Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question11No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- QUESTION 12 -->
                        <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-12.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question12">12. Can the child read at an age-appropriate level?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question12Yes" name="question12" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question12Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question12Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question12No" name="question12" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question12\']:checked').length !== 1) document.getElementById('question12Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question12Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question12No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 13 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-13.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question13">13. Does the child typically share the same interests as their peers?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question13Yes" name="question13" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question13Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question13Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question13No" name="question13" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question13\']:checked').length !== 1) document.getElementById('question13Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question13Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question13No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       <!-- QUESTION 14 -->
                       <div class="form-group question-line">
                        <!--  Image  -->
                        <div class="row  ">
                            <div class="col-md-12 col-sm-12  ">
                                <img src="images\ques-14.webp" alt="Your Image" class="img mx-auto d-block">
                            </div>
                        </div>  
                        <!-- Question and Options -->
                        <div class="row">
                            <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question14">14. Does the child have an intense interest that occupies most of their time?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question14Yes" name="question14" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question14Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question14Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question14No" name="question14" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question14\']:checked').length !== 1) document.getElementById('question14Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question14Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question14No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                         <!-- QUESTION 15 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-15.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question15">15. Does the child have friends rather than just acquaintances?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question15Yes" name="question15" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question15Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question15Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question15No" name="question15" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question15\']:checked').length !== 1) document.getElementById('question15Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question15Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question15No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 16 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-16.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question16">16. Does the child frequently show you things they are interested in?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question16Yes" name="question16" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question16Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question16Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question16No" name="question16" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question16\']:checked').length !== 1) document.getElementById('question16Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question16Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question16No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 17 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-17.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question17">17. Does the child enjoy joking or playfulness?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question17Yes" name="question17" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question17Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question17Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question17No" name="question17" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question17\']:checked').length !== 1) document.getElementById('question17Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question17Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question17No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 18 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-18.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question18">18. Does the child have difficulty understanding social etiquette and polite behavior?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question18Yes" name="question18" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question18Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question18Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question18No" name="question18" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question18\']:checked').length !== 1) document.getElementById('question18Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question18Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question18No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 19 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-19.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question19">19. Does the child have an exceptional memory for details?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question19Yes" name="question19" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question19Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question19Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question19No" name="question19" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question19\']:checked').length !== 1) document.getElementById('question19Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question19Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question19No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 20 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-20.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question20">20. Does the child have a peculiar or unusual voice, such as sounding overly mature, flat, or monotonous?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question20Yes" name="question20" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question20Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question20Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question20No" name="question20" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question20\']:checked').length !== 1) document.getElementById('question20Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question20Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question20No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- QUESTION 21 -->
                        <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-21.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question21">21. Are people important to the child?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question21Yes" name="question21" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question21Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question21Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question21No" name="question21" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question21\']:checked').length !== 1) document.getElementById('question21Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question21Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question21No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 22 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-22.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question22">22. Can the child dress themselves?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question22Yes" name="question22" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question22\']:checked').length !== 1) document.getElementById('question22Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question22Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question22Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question22No" name="question22" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question22\']:checked').length !== 1) document.getElementById('question22Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question22Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question22No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 23 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-23.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question23">23. Does the child sometimes lose their audience due to a lack of clarity when explaining their thoughts?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question23Yes" name="question23" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question23\']:checked').length !== 1) document.getElementById('question23Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question23Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question23Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question23No" name="question23" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question23\']:checked').length !== 1) document.getElementById('question23Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question23Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question23No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 24 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-24.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question24">24. Does the child engage in imaginative play and role-play with other children?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question24Yes" name="question24" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question24\']:checked').length !== 1) document.getElementById('question24Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question24Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question24Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question24No" name="question24" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question24\']:checked').length !== 1) document.getElementById('question24Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question24Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question24No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 25 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-25.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question25">25. Does the child often make socially inappropriate or tactless remarks or actions?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question25Yes" name="question25" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question25\']:checked').length !== 1) document.getElementById('question25Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question25Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question25Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question25No" name="question25" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question25\']:checked').length !== 1) document.getElementById('question25Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question25Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question25No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 26 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-26.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question26">26. Can the child count to 50 without missing any numbers?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question26Yes" name="question26" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question26\']:checked').length !== 1) document.getElementById('question26Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question26Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question26Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question26No" name="question26" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question26\']:checked').length !== 1) document.getElementById('question26Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question26Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question26No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 27 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-27.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question27">27. Does the child try to establish strict routines for themselves or others that may lead to difficulties?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question27Yes" name="question27" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question27\']:checked').length !== 1) document.getElementById('question27Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question27Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question27Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question27No" name="question27" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question27\']:checked').length !== 1) document.getElementById('question27Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question27Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question27No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 28 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-28.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question28">28. Does the child exhibit any unusual and repetitive movements?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question28Yes" name="question28" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question28\']:checked').length !== 1) document.getElementById('question28Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question28Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question28Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question28No" name="question28" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question28\']:checked').length !== 1) document.getElementById('question28Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question28Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question28No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- QUESTION 29 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-29.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question29">29. Have teachers or health visitors expressed concerns about the child's development?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question29Yes" name="question29" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question29\']:checked').length !== 1) document.getElementById('question29Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question29Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question29Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question29No" name="question29" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question29\']:checked').length !== 1) document.getElementById('question29Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question29Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question29No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- QUESTION 30 -->
                         <div class="form-group question-line">
                            <!--  Image  -->
                            <div class="row  ">
                                <div class="col-md-12 col-sm-12  ">
                                    <img src="images\ques-30.webp" alt="Your Image" class="img mx-auto d-block">
                                </div>
                            </div>  
                            <!-- Question and Options -->
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10 col-sm-10">
                                    <label class="ques" for="question30">30. Does the individual occasionally use "you" or "he/she" when referring to themselves instead of "I"?</label>
                                    <div class="row mt-5">
                                        
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question30Yes" name="question30" value="0" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question30\']:checked').length !== 1) document.getElementById('question30Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question30Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question30Yes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-3 mx-auto">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="question30No" name="question30" value="1" required placeholder="Select option"
                                                    oninvalid="if(document.querySelectorAll('input[name=\'question30\']:checked').length !== 1) document.getElementById('question30Yes').setCustomValidity('Please select all questions and proceed')"
                                                    oninput="document.getElementById('question30Yes').setCustomValidity('')"/>
                                                <label class="form-check-label" for="question30No">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                      

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="button-container text-center">
                                        <!-- <input value=" Back" class="btn btn-lg btn-primary" onclick="goBack()"> -->
                                        <input type="button" value="Back" class="btn btn-lg btn-primary" onclick="goBack()">
                                        <input type="submit" value="Submit" class="btn btn-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="results" ></div>   

    <?php include("../arrow-button.php"); ?> 

    <?php include("../footer.php"); ?>   
    
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


//SCORE CALCULATION
function calculateScore() {
            const formData = new FormData(document.getElementById("questionnaireForm"));
            let score = 0;

            formData.forEach((value, key) => {
                const answerValue = parseInt(value);
                score += answerValue;
                // console.log(score)
            });

            window.location.href = `score.php?score=${score}`;

            return false; 
            // Prevent the form from submitting and refreshing the page
        }
      
//ARROW BUTTONS
      

    function goBack() {
        const radiobuttons = document.querySelectorAll('input[type="radio"]:checked');

        if (radiobuttons.length > 0) {
            showConfirmationDialog();
        } else {
            window.location.href = "../Landing_page/index.php";
        }
    }

    function showConfirmationDialog() {
        const dialog = document.getElementById('confirmationDialog');
        dialog.style.display = 'block';

        return new Promise((resolve) => {
            document.getElementById('confirmYes').onclick = () => {
                window.location.href = "../Landing_page/index.php";
            };

            document.getElementById('confirmNo').onclick = () => {
                dialog.style.display = 'none';
                resolve(false);
            };
        });
    }

    </script>   

<div class="mt-5" id="confirmationDialog" >
    <p>Are you sure you want to go back? The data you entered will be lost.</p>
    <button class="yes-btn " id="confirmYes">Yes</button>
    <button class="no-btn" id="confirmNo" >No</button>
</div>

</body>
</html>
