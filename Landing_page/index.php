<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Test</title>
</head>


<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/styles.css"> -->

<!-- CSS -->
<link rel="stylesheet" href="../styles.css" /> 

<!-- Animation aos -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
 .card-title{
    text-align: center;
 }   
 
.btn-bg-color{
    background-color: #397b1f;
    border-color: #397b1f;
    color: #fff;
    /* width: 90%; */
}

.btn-bg-color:hover{
    background-color: #539937;
    border-color: #539937;
    color: #fff;
}

.card-animation{
    position: relative !important;
}
.button-row{
    /* position: absolute;
    width: 90%;
    margin: auto;
    bottom: 10px; */
}

.card-size{
    border-radius: 15px;
}
.card-size:hover .overlay {
    border-radius: 15px;
}

@media screen and (max-width: 1369px){
    .card-animation {
        margin: 10px !important;
    }
    .card-size {
    max-width: 230px;
}
}

@media (min-width: 1400px) and (max-width: 1536px){
    .card-size {
        max-width: 230px;
    }
}

@media(max-width: 768px){
    .card-size {
        max-width: 100px !important;
        border-radius: 15px !important;
        height: auto !important;
    }
    .card-animation {
        margin: 13px !important;
    }
    .card-img-top {
        max-width: 90% !important;
        border-radius: 5px;
        height: 70px !important;
    }
    .card-title {
        font-size: 9px !important;
    }
    .overlay{
        display: none;
    }
}
@media(max-width: 1023px){
    .card-size{
        height: auto;
    }
    .card-title {
        font-size: 14px;
    }
}

@media(max-width: 400px){
    .card-size {
        max-width: 90px !important;
    }
}

/* Header */
<?php include("../header.php"); ?>


</style>

<body>

<div class="container mt-3 h1-container ">
    <div class="row justify-content-center">
            <h1 class="text-center" style="font-size: 27px;">Health Assessments</h1>        
    </div>        
</div>


<!-- Category buttons -->
    <div class="container mt-1">
        <div class="row justify-content-center">
            <button class="btn btn-lg py-2 mr-2 categorize-button text-center text-bold text-nowrap col-lg-1 col-md-2 col-3" onclick="showAllForms()">All</button>
            <button class="btn btn-lg py-2 mr-2 categorize-button text-center text-bold text-nowrap col-lg-1 col-md-2 col-3" onclick="showMentalHealthForms()">Mental Health</button>
            <button class="btn btn-lg py-2 mr-2 categorize-button text-center text-bold text-nowrap col-lg-1 col-md-2 col-3" onclick="showAdultForms()">Adult </button>
            <button class="btn btn-lg py-2 mr-2 categorize-button text-center text-bold text-nowrap col-lg-1 col-md-2 col-3" onclick="showChildForms()">Child</button>
            <button class="btn btn-lg py-2 mr-2 categorize-button text-center text-bold text-nowrap col-lg-1 col-md-2 col-3" onclick="showRelationshipForms()">Relationship</button>
        </div>
    </div>
    <style>

        .card-text{
            font-size: 11px;
            color: #000;
            /* padding: 30px; */
            padding: 8px 15px 8px 15px;
            margin-top: 33px;
        }
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #ffffffe6;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .card-size:hover .overlay {
            height: 100%;
        }
       </style>
<div class="container-fluid">
    <!-- 1st Row -->
    <div class="row justify-content-center mb-2">
        <div class="col-md-3 card card-size m-4 card-animation " id="adhdCard" >
        
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\ADHD.webp" alt="Card image" >
            </div>

            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">ADHD</h4>
                        <!-- <p class="card-text">Take our ADHD Self-Report Scale (ASRS-v1.1) Symptom Checklist to understand your symptoms related to Adult Attention-Deficit/Hyperactivity Disorder</p> -->
                        
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our ADHD Self-Report Scale (ASRS-v1.1) Symptom Checklist to understand your symptoms related to Adult Attention-Deficit/Hyperactivity Disorder</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../ADHD_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center mt-auto mb-1 button-row" style="width: 100%; margin: auto !important; margin-bottom: 19px !important;">
                <a href="../ADHD_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
            </div>             -->
                     
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="autismCard">
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\Autism.webp" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Autism</h4>
                        <!-- <p class="card-text">Take our Autism Form to provide insights into your unique neurological condition, influencing social interactions and communication styles</p> -->
                
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Autism Form to provide insights into your unique neurological condition, influencing social interactions and communication styles</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Autism_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>  
                    <!-- <div class="row justify-content-center mt-auto mb-1 button-row" style="width: 100%; margin: auto !important; margin-bottom: 19px !important;">
                        <a href="../Autism_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                    </div>      -->
        </div>


        <div class="col-md-3 card card-size m-4 card-animation" id="mental-health-card" >
        
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\Mental-health.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Mental Health Tracker</h4>
                        <!-- <p class="card-text">Take our Mental Health Tracker to monitor and manage your emotional well-being, gaining valuable insights into your mental health journey</p> -->

                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Mental Health Tracker to monitor and manage your emotional well-being, gaining valuable insights into your mental health journey</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Mental_Health_Tracker/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>

                </div>
            </div>
                
        </div>

   

        <!-- 2nd Row -->
    
        <div class="col-md-3 card card-size m-4 card-animation" id="anxiousCard" >
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\Anxious-form.webp" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Do you feel Anxious?</h4>
                        <!-- <p class="card-text">Take our Anxious test to gain insights into your unique emotional state, which may influence your social interactions and communication styles</p> -->
                
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Anxious test to gain insights into your unique emotional state, which may influence your social interactions and communication styles</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Anxious_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="depressionCard">
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\Depression-test.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Am I sad or depressed?</h4>
                        <!-- <p class="card-text">Take our Depression Test to delve into your individual emotional state, potentially influencing your social interactions and communication styles</p> -->
                
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Depression Test to delve into your individual emotional state, potentially influencing your social interactions and communication styles</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Depression_Test/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="ocdCard" >
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\OCD.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title ">OCD Symptom </h4>
                        <!-- <p class="card-text">Take our OCD Questionnaire to explore your individual emotional state, potentially influencing your social interactions and communication styles</p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our OCD Questionnaire to explore your individual emotional state, potentially influencing your social interactions and communication styles</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../OCD_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
        

  

        <!-- 3rd ROW -->

    
        <div class="col-md-3 card card-size m-4 card-animation" id="sleepCard" >
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\sleep.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Are you sleeping well?</h4>
                        <!-- <p class="card-text">Take our Sleep Test to explore and gain insights into your sleep patterns, helping you understand and improve your overall sleep quality</p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Sleep Test to explore and gain insights into your sleep patterns, helping you understand and improve your overall sleep quality</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Sleep_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="feel-about-yourselfCard">
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\How-do-you-feel-about-yourself.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">How do you feel about yourself?</h4>
                        <!-- <p class="card-text">Take our Self-Esteem Assessment to reflect on and gain insights into your feelings about yourself.</p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Self-Esteem Assessment to reflect on and gain insights into your feelings about yourself.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../How_do_you_feel_about_yourself/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="addictionCard" >
            
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\addiction.webp" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Is my Addiction in my control?</h4>
                        <!-- <p class="card-text">Take our Addiction Assessment to explore and gain insights into your relationship with addictive behaviors</p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Addiction Assessment to explore and gain insights into your relationship with addictive behaviors</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Addiction_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>     
    

     <!-- 4th Row -->

    
        <div class="col-md-3 card card-size m-4 card-animation" id="stressCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\stress.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">How well do you cope with stress?</h4>
                        <!-- <p class="card-text">Take our Stress Management Assessment to understand and enhance your coping mechanisms, providing insights into your stress levels </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Stress Management Assessment to understand and enhance your coping mechanisms, providing insights into your stress levels</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Stress_Management/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="marriageCard">
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\marriage-solidarity.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">The Marriage Solidarity Scale</h4>
                        <!-- <p class="card-text">Take our Marriage Solidarity Scale to assess and strengthen your relationship, offering insights into the level of solidarity in your marriage </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Marriage Solidarity Scale to assess and strengthen your relationship, offering insights into the level of solidarity in your marriager</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Marriage_Solidarity_Scale/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="partnerCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\rely-on-partner.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Can you rely on your partner?</h4>
                        <!-- <p class="card-text">Take our assessment to evaluate the reliability of your partner, providing valuable insights into the trustworthiness and dependability within your relationship</p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our assessment to evaluate reliability of your partner, providing valuable insights into the trustworthiness and dependability in your relationship</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Can_You_Rely_on_Your_Partner/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    
   

        <!-- 5th Row -->

    
        <div class="col-md-3 card card-size m-4 card-animation" id="fitnessCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\physical-fitness.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Physical Fitness Measure</h4>
                        <!-- <p class="card-text">Take our Physical Fitness Measure to assess and enhance your overall physical well-being, gaining valuable insights into your fitness levels and lifestyle choices </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Physical Fitness Measure to assess and enhance your overall physical well-being, gaining valuable insights into your fitness levels and lifestyle choices </p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Physical_Fitness_Measure/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="parentCard">
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\protective-parent.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Are you a protective parent?</h4>
                        <!-- <p class="card-text">Take our Protective Parent Assessment to evaluate and strengthen your parenting style, offering insights into your protective instincts and approaches </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Protective Parent Assessment to evaluate and improve your parenting style, offering insights into your protective instincts.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Are_You_a_Protective_Parent/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="jobCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\job.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">What is your job doing to you?</h4>
                        <!-- <p class="card-text">Take our Job Impact Assessment to explore the effects of your job on your well-being, providing insights into the potential impact of your work on various aspects of your life </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our Job Impact Assessment to explore how your job affects your well-being and impacts various aspects of your life.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../What_Is_Your_Job_Doing_to_You/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    

        <!-- 6th Row -->

        <div class="col-md-3 card card-size m-4 card-animation" id="postpartumCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\postpartum.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Postpartum Depression</h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our assessment to address postpartum depression and gain insights into your mental well-being during this period.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Postpartum_depression/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 card card-size m-4 card-animation" id="psychosisCard">
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\psychosis.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Psychosis & Schizophrenia</h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Explore your mental health with our assessment to identify signs of psychosis or schizophrenia and gain insights into managing these conditions.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Psychosis&Schizophrenia/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="PTSDCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\PTSD.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">PTSD </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Assess the impact of traumatic events on your mental health and discover ways to manage PTSD effectively with our tailored assessment.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../PTSD_Form/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <!-- 7th Row -->

        <div class="col-md-3 card card-size m-4 card-animation" id="childmentalCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\child_health.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Child's Mental Health </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Learn about your child’s emotional and mental well-being through our assessment, designed to help you provide better care and support.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Child_Mental_Test/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="youthmentalCard">
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\young_health.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Youth's Mental Health </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Take our assessment to address mental health challenges faced by youth and access insights to navigate this crucial stage of life.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Youth_Mental_Test/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="bipolarCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\bipolar.webp" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Bipolar Test </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Understand mood patterns and identify signs of bipolar disorder with our comprehensive assessment for personalized insights.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Bipolar_Test/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
        
        
        <!-- 8th Row -->

        <div class="col-md-3 card card-size m-4 card-animation" id="eatingdisorderCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\eating-disorder.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Eating Disorder </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Identify potential eating disorders and gain understanding into their effects on mental and physical health with our assessment.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Eating_disorder/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="petCard">
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\pets.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Pets and Mental Health </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Discover the positive impact of pets on mental health through our assessment, offering insights into their role in emotional well-being.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Pet_Test/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 card card-size m-4 card-animation" id="selfinjuryCard" >
            <div class="row img-row">
                <img class="card-img-top mx-auto d-block mt-3" src="images\self-injury.jpg" alt="Card image" >
            </div>
            
            <div class="row">
                <div class="card-body d-flex flex-column align-items-center" >
                        <h4 class="card-title">Self Injury </h4>
                        <!-- <p class="card-text">Take our assessment to understand and address postpartum depression, gaining valuable insights into your mental well-being during the postpartum period </p> -->
                        <div class="overlay" style="text-align: center;">
                            <div class="card-text">
                                <p>Explore the underlying causes of self-injury and receive guidance on healing and recovery with our carefully designed assessment.</p>
                                <div class="take-assessment" style="text-align: center;">
                                    <a href="../Self_injury/index.php" class="btn btn-bg-color">Take Assessment</a>
                                </div>
                                
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

    </div>  
</div>
<?php include("../arrow-button.php"); ?> 

<?php include("../footer.php"); ?>

<!-- Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Animation -->

<script>
    // event listener to card for redirection
    document.getElementById('autismCard').addEventListener('click', function() {
        window.location.href = '../Autism_Form/index.php';
    });

    document.getElementById('adhdCard').addEventListener('click', function() {
        window.location.href = '../ADHD_Form/index.php';
    });

    document.getElementById('mental-health-card').addEventListener('click', function() {
        window.location.href = '../Mental_Health_Tracker/index.php';
    });

    document.getElementById('anxiousCard').addEventListener('click', function() {
        window.location.href = '../Anxious_Form/index.php';
    });

    document.getElementById('depressionCard').addEventListener('click', function() {
        window.location.href = '../Depression_Test/index.php';
    });

    document.getElementById('ocdCard').addEventListener('click', function() {
        window.location.href = '../OCD_Form/index.php';
    });

    document.getElementById('sleepCard').addEventListener('click', function() {
        window.location.href = '../Sleep_Form/index.php';
    });

    document.getElementById('feel-about-yourselfCard').addEventListener('click', function() {
        window.location.href = '../How_do_you_feel_about_yourself/index.php';
    });

    document.getElementById('addictionCard').addEventListener('click', function() {
        window.location.href = '../Addiction_Form/index.php';
    });

    document.getElementById('stressCard').addEventListener('click', function() {
        window.location.href = '../Stress_Management/index.php';
    });

    document.getElementById('marriageCard').addEventListener('click', function() {
        window.location.href = '../Marriage_Solidarity_Scale/index.php';
    });

    document.getElementById('partnerCard').addEventListener('click', function() {
        window.location.href = '../Can_You_Rely_on_Your_Partner/index.php';
    });

    document.getElementById('fitnessCard').addEventListener('click', function() {
        window.location.href = '../Physical_Fitness_Measure/index.php';
    });

    document.getElementById('parentCard').addEventListener('click', function() {
        window.location.href = '../Are_You_a_Protective_Parent/index.php';
    });

    document.getElementById('jobCard').addEventListener('click', function() {
        window.location.href = '../What_Is_Your_Job_Doing_to_You/index.php';
    });

    document.getElementById('postpartumCard').addEventListener('click', function() {
        window.location.href = '../Postpartum_depression/index.php';
    });

    document.getElementById('psychosisCard').addEventListener('click', function() {
        window.location.href = '../Psychosis&Schizophrenia/index.php';
    });

    document.getElementById('PTSDCard').addEventListener('click', function() {
        window.location.href = '../PTSD_Form/index.php';
    });

    document.getElementById('childmentalCard').addEventListener('click', function() {
        window.location.href = '../Child_Mental_Test/index.php';
    });

    document.getElementById('youthmentalCard').addEventListener('click', function() {
        window.location.href = '../Youth_Mental_Test/index.php';
    });

    document.getElementById('bipolarCard').addEventListener('click', function() {
        window.location.href = '../Bipolar_Test/index.php';
    });

    document.getElementById('eatingdisorderCard').addEventListener('click', function() {
        window.location.href = '../Eating_disorder/index.php';
    });

    document.getElementById('petCard').addEventListener('click', function() {
        window.location.href = '../Pet_Test/index.php';
    });

    document.getElementById('selfinjuryCard').addEventListener('click', function() {
        window.location.href = '../Self_injury/index.php';
    });
    
    
function showAllForms() {
            showForms(['adhdCard', 'autismCard', 'mental-health-card', 'anxiousCard', 'depressionCard', 'ocdCard', 'sleepCard', 'feel-about-yourselfCard', 'addictionCard', 'stressCard', 'marriageCard', 'partnerCard', 'fitnessCard', 'parentCard', 'jobCard','postpartumCard','psychosisCard','PTSDCard','childmentalCard','youthmentalCard','bipolarCard','eatingdisorderCard','petCard','selfinjuryCard']);
        }

function showMentalHealthForms() {
            showForms(['adhdCard', 'mental-health-card', 'anxiousCard', 'depressionCard', 'ocdCard', 'stressCard','postpartumCard','psychosisCard','PTSDCard','childmentalCard','youthmentalCard','bipolarCard','petCard']);
        }

function showAdultForms(){
            showForms(['sleepCard','feel-about-yourselfCard','addictionCard', 'stressCard', 'marriageCard', 'partnerCard', 'fitnessCard', 'parentCard', 'jobCard','postpartumCard'])
        }

function showChildForms(){
            showForms(['autismCard','parentCard','childmentalCard'])
        }

function showRelationshipForms(){
            showForms(['marriageCard','partnerCard'])
}
        function showForms(formIds) {
            // Hide all forms
            hideAllForms();

            // Show the selected forms
            formIds.forEach(function (formId) {
                var form = document.getElementById(formId);
                if (form) {
                    form.style.display = 'block';
                }
            });
        }

        function hideAllForms() {
            // Hide all forms
            var allForms = document.querySelectorAll('.card-size');
            allForms.forEach(function (form) {
                form.style.display = 'none';
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
    
 
</body>
</html>
