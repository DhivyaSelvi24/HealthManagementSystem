<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Mental Health Test - Score</title>

    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Link your custom CSS -->
    <link rel="stylesheet" href="styles.css" />

    <script src="https://cdn.jsdelivr.net/npm/progressbar.js@1.1.0/dist/progressbar.min.js"></script>

    <style>

        h1 {
            /* margin-top: 20px; */
            color: #000; 
            font-size: 32px;
        }

        /* Container Styles */
        #score-container {
            max-width: 800px;    /* 700px */
            margin: 0 auto;
            margin-top: 270px;
            padding: 20px;
            background-color: #f0f0f0; 
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
            width: 200px;
        }

        .btn:hover {
            background-color: #205FAD; 
        }

        .gauge-container {
            width: 100%;
            max-width: 250px;
            position: relative;
            /* margin-top: 65px; */
        }

        .gauge {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .percentage-text {
            margin-top: 110px;
            text-align: center;
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #004033;
            z-index: 2;
        }

        /* Mobile Response */
        @media screen and (max-width: 600px) {

        h2{
            font-size:21px;
            /* color:red; */
        }
        p{
            font-size:14px;
            /* color:blue; */
        }

        .ques-row,.form-check{
            font-size: 14px;
            text-align: justify;
        }

        /* .gauge-container {
            max-width: 200px;
            margin-top: 96px;
        } */

        #gauge-container{
            max-width: 200px;
            margin-top: 96px;
        }
        .percentage-text {
        margin-top: 95px;
        }
        .btn{
            font-size:12px;
        }

        #score-container {
        margin-top: 230px;
        }
        }
        <?php include("../header.php"); ?>
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="header-container" class="text-center">
                    <h2>Youth Mental Health Test</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-1"id="gauge-container">
        <div class="row justify-content-center">
            <div class="gauge-container">
                <div id="gaugeContainer" class="gauge"></div>
                <div class="percentage-text">0%</div>
            </div>
        </div>
    </div>

    <div class="container col-md-12 col-sm-12 mb-2" id="score-container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <h2>Your Youth Mental Health Test Score</h2>
                <p class="mt-3">Thanks for completing the assessment. Your score is: <span id="totalScore">0</span></p>
                <div class="interpretation">
                    <p>Congratulations on taking this step towards understanding your mental well-being!</p>
                    <i class="fas fa-heart icon"></i>
                    <!-- <p>Your mental health matters. It's okay not to be perfect.</p>
                    <p>Explore self-care and reach out for support when needed.</p> -->
                </div>
                <div class="row button-container justify-content-center">
                    <button type="button" onclick="location.href='index.php'" class="btn btn-lg btn-primary col-5 col-sm-4 col-md-4 m-2 text-nowrap">Test again</button>
                    <button id="shareButton" onclick="return redirect();" class="btn btn-lg btn-secondary col-5 col-sm-4 col-md-4 m-2">Share</button>
                    <button id="appoinment" onclick="location.href='../form/appoinment.php'" class="btn btn-lg btn-secondary col-5 col-sm-4 col-md-4 m-2 p-3 text-nowrap">Book an Appointment</button>
                    <button id="back-button" onclick="location.href='../Landing_page/index.php'" class="btn btn-lg btn-secondary col-5 col-sm-4 col-md-4 m-2 p-3 text-nowrap">Home</button>
                </div>
            </div>
        </div>
    </div>

    <form name="Youth_mental_test">
    </form>
    <?php include("../footer.php"); ?>   
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const totalScore = parseInt(urlParams.get('score'));
        
        // console.log(totalScore);
        const maximumPossibleScore = 4; 
        const normalizedScore = totalScore / (35 * maximumPossibleScore); 

        document.getElementById('totalScore').innerText = (normalizedScore * 100).toFixed(2) + '%';

        // GUAGE BAR
        document.addEventListener("DOMContentLoaded", function () {
            const gaugeContainer = document.getElementById("gaugeContainer");
            const percentageText = document.querySelector(".percentage-text");

            const gauge = new ProgressBar.Circle(gaugeContainer, {
                strokeWidth: 13,
                easing: 'easeInOut',
                duration: 1400,
                color: getColorForPercentage(normalizedScore * 100),
                trailColor: '#b4c0be',
                trailWidth: 13,
                svgStyle: {
                    display: 'block',
                    width: '100%',
                    height: 'auto',
                    margin: '0 auto',
                    position: 'relative', 
                },
                text: {
                    autoStyleContainer: false,
                    alignToBottom: false,
                    value: '',
                    className: 'score-text',
                    fontSize: '24px', 
                    position: {
                        x: '50%', 
                        y: '50%', 
                    },
                    padding: 0,
                    margin: 0,
                    transform: {
                        prefix: true,
                        value: 'translate(-50%, -50%)',
                    },
                },
            });

            gauge.animate(normalizedScore);

            function getColorForPercentage(percentage) {
                if (percentage <= 25) {
                    return '#2ECC71'; // Green
                } else if (percentage <= 50) {
                    return '#F1C40F'; // Yellow
                } else if (percentage <= 75) {
                    return '#E67E22'; // Orange
                } else {
                    return '#E74C3C'; // Red
                }
            }

            //percentage Text in gauge bar
            percentageText.textContent = `${Math.round(normalizedScore * 100)}%`;
        });



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
        window.location.href = `../form/form.php?formName=Youth_mental_test&Score=${(normalizedScore * 100).toFixed(0) }`;
        return false; // Prevent the default form submission
    }

      
    </script>

</body>

</html>
