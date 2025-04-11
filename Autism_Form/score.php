<!-- const percentage = Math.round(normalizedScore * 100);  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autism Questionnaire-Score</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link your custom CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>

        .h1-container {
            font-size:32px;
        }
        .gauge {
            width: 100%;
            max-width: 250px;
            font-family: "Roboto", sans-serif;
            font-size: 32px;
            color: #004033;
            /* margin-top: 65px; */
        }

        .gauge__body {
            width: 100%;
            height: 0;
            padding-bottom: 50%;
            background: #b4c0be;
            position: relative;
            border-top-left-radius: 100% 200%;
            border-top-right-radius: 100% 200%;
            overflow: hidden;
        }

        .gauge__fill {
            position: absolute;
            top: 100%;
            left: 0;
            width: inherit;
            height: 100%;
            background: #009578;
            transform-origin: center top;
            transform: rotate(0.25turn);
            transition: transform 0.2s ease-out;
        }

        .gauge__cover {
            width: 75%;
            height: 150%;
            background: #ffffff;
            border-radius: 50%;
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translateX(-50%);

            /* Text */
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 25%;
            box-sizing: border-box;
        }

.no-autism{
    background-color: #40bf40;

    &:hover {
            background-color: #40bf40;
            }
}
.normal{
    background-color: #66cc66;

    &:hover {
            background-color: #66cc66;
            }
}
.mild{
    background-color: #ffff33;

    &:hover {
            background-color: #ffff33;
            }
}
.moderate{
    background-color: #ffbf00;

    &:hover {
            background-color: #ffbf00;
            }
}
.severe{
    background-color: #ff8000;

    &:hover {
             background-color: #ff8000;  
            }
}
.extreme{
    background-color: red;

    &:hover {
            background-color: red;
            }
}

.no-autism, .normal, .mild, .moderate, .severe, .extreme{
    height: 45px;
    font-size: 13px;
}

.btn {
            border-color:  #3498db;
            color: #fff;
            box-shadow: 0 0 40px 40px #2980b9 inset, 0 0 0 0 #2980b9;
            transition: all 150ms ease-in-out;
            font-weight: 500;
            width:100px;
            height: 55px;


            
            &:hover {
              box-shadow: 0 0 10px 0 #2980b9 inset, 0 0 10px 4px #2980b9;
            }
          }

.img{
    width:60px;
}

/* Mobile Response */
@media (max-width: 600px) {

h2{
    font-size:21px!important;
    /* color:red; */
}

.gauge {
    width: 70%;
}

.gauge__cover {
    font-size: 23px;
}
p{
    font-size:14px;
    /* color:blue; */
}

.btn{
    font-size:11px;
}

.no-autism, .normal, .mild, .moderate, .severe, .extreme {
    font-size: 12px;
}
}

@media(max-width: 1023px){
    .btn {
        font-size: 12px;
    }
}

@media(max-width: 400px){
    .btn {
        font-size: 10px;
    }
}

<?php include("../header.php"); ?>
</style>
</head>
<body>

    <div class="container mt-3">
        <div class="row text-center">
            <div id="header-container" class="container-fluid">
                 <h2 class="h1-container text-center">Autism Questionnaire</h2>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="gauge ">
                <div class="gauge__body">
                    <div class="gauge__fill"></div>
                    <div class="gauge__cover"></div>
                </div>
            </div>
        </div>
    </div>

<style>
    .score-row{
        margin-top: 10px;
    }
</style>
    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-3 col-sm-0 col-12 "></div>
                <div class="col-lg-2 col-sm-3 col-3  text-right">
                    <img class="img" src="images\score-1.webp">
                </div>
            <div class="col-lg-2 col-sm-4 col-7  no-autism ">
                <div class="row score-row">
                    <div class="col text-left font-weight-bold  text-nowrap">0-17%</div>
                    <div class="col text-right font-weight-bold text-nowrap">No Autism</div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3 col-2 "></div>
        </div>

        <div class="row justify-content-center mt-2 ">
            <div class="col-lg-3 col-sm-0 col-12"></div>
            <div class="col-lg-2 col-sm-3 col-3 text-right"><img  class="img" src="images\score-2.webp"></div>
            <div class="col-lg-2 col-sm-4 col-7 normal ">
                <div class="row score-row">
                    <div class="col text-left font-weight-bold text-nowrap">17-33%</div>
                    <div class="col text-right font-weight-bold text-nowrap">Normal</div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3 col-2"></div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-lg-3 col-sm-0 col-12"></div>
            <div class="col-lg-2 col-sm-3 col-3 text-right"><img  class="img" src="images\score-3.webp"></div>
            <div class="col-lg-2 col-sm-4 col-7 mild ">
                <div class="row score-row">
                    <div class="col text-left font-weight-bold text-nowrap">33-50%</div>
                    <div class="col text-right font-weight-bold text-nowrap">Mild</div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3 col-2"></div>
        </div>
    
        <div class="row justify-content-center mt-2">
            <div class="col-lg-3 col-sm-0 col-12"></div>
            <div class="col-lg-2 col-sm-3 col-3 text-right"><img  class="img" src="images\score-4.webp"></div>
            <div class="col-lg-2 col-sm-4 col-7 moderate  ">
                <div class="row score-row">
                    <div class="col text-left font-weight-bold text-nowrap">50-67%</div>
                    <div class="col text-right font-weight-bold text-nowrap">Moderate</div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3 col-2"></div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-lg-3 col-sm-0 col-12"></div>
            <div class="col-lg-2 col-sm-3 col-3 text-right"><img  class="img" src="images\score-5.webp"></div>
            <div class="col-lg-2 col-sm-4 col-7 severe  ">
                <div class="row score-row">
                    <div class="col text-left font-weight-bold text-nowrap">67-83%</div>
                    <div class="col text-right font-weight-bold text-nowrap">Severe</div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3 col-2"></div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-lg-3 col-sm-0 col-12"></div>
            <div class="col-lg-2 col-sm-3 col-3 text-right"><img  class="img" src="images\score-6.webp"></div>
            <div class="col-lg-2 col-sm-4 col-7 extreme  ">
                <div class="row score-row">
                    <div class="col text-left font-weight-bold text-nowrap">83 - 100%</div>
                    <div class="col text-right font-weight-bold text-nowrap">Extreme</div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3 col-2"></div>
        </div>
    
        <div>
            
        </div>
    
            
        

        <div class="row ">
            
        </div>


    </div>

    <div class="container-fluid">
        <!-- <div class="row mt-2 justify-content-center">
                        <button class="btn  d-flex justify-content-center test-again-button mt-2 m-2 text-nowrap  p-3 " name="btn" onclick="location.href='index.php'">Test again</button>
                        <a class="btn d-flex justify-content-center share-btn mt-2 text-nowrap m-2 p-3" name="btn" href="form.php" onclick="return redirect();">Share</a>
        </div> -->

        <div  class="row justify-content-center">
                        <a class="btn d-flex justify-content-center appoinment-btn mt-2 p-3 text-nowrap m-2 col-md-2 col-4" name="btn" onclick="location.href='index.php'" onclick="return redirect();">Test again</a>      
                        <a class="btn d-flex justify-content-center appoinment-btn mt-2 p-3 text-nowrap m-2 col-md-2 col-4" name="btn"  onclick="return redirect();">Share</a>         
        </div>
        
        <div  class="row mb-3 justify-content-center">
                        <a class="btn d-flex justify-content-center appoinment-btn mt-2 p-3 text-nowrap m-2 col-md-2 col-4" name="btn" onclick="location.href='../form/appoinment.php'" onclick="return redirect();">Book and Appoinment</a>      
                        <a class="btn d-flex justify-content-center appoinment-btn mt-2 p-3 text-nowrap m-2 col-md-2 col-4" name="btn" onclick="location.href='../Landing_page/index.php'" onclick="return redirect();">Home</a>         
        </div>

    </div>
    <!-- <button id="back-button" onclick="location.href='../Landing_page/index.php'" class="btn btn-lg btn-secondary col-8 col-sm-4 col-md-4 m-2 p-3 text-nowrap">Home</button> -->

<form name="Autism_Form"></form>
    <?php include("../footer.php"); ?>   
    
<script>
      
        // Gauge bar
        const gaugeElement = document.querySelector(".gauge");

        const urlParams = new URLSearchParams(window.location.search);
        const score = parseInt(urlParams.get('score'));

        function setGaugeValue(gauge, value) {
            if (value < 0 || value > 1) {
                return;
            }

            const percentage = Math.round(value * 100);
            gauge.querySelector(".gauge__fill").style.transform = `rotate(${value * 180}deg)`;
            gauge.querySelector(".gauge__cover").textContent = `${percentage}%`;
        }

        const normalizedScore = score / 30;
        setGaugeValue(gaugeElement, normalizedScore);

// function share(){
//     window.location.href = `form.php`;
// }

console.log(score)
console.log(normalizedScore)
console.log(normalizedScore*100);


// prevent right-click and short cuts
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
        window.location.href = `../form/form.php?formName=Autism_Form&Score=${(normalizedScore * 100).toFixed(0) }`;
        return false; 
    }

</script>
    
</body>
</html>
