<style>

body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.footer-container{
    /* border: 1px solid; */
    background-color: #343a40;
    color: #ffffff;
    padding-top: 20px;
    left: 0;
    bottom: 0;
    right: 0;
    margin-top: auto;
}

.footer-title{
    font-size: 17px;
}

a{
    color:#ffffff;
    font-size: 15px;
}
.footer-row {   
    padding:25px;
}

#viewMoreBtn {
    background-color: #343a40;
    color: white;
    border: 10px 20px;
    padding: 6px 15px;
    cursor: pointer;
    font-size: 11px;
}

#viewMoreBtn:hover {
    background-color: #007bff;
}

#quick-links li,
#assessments li,
#stay-connected li{
    margin: 13px 0px;
}
#quick-links li a,
#assessments li a,
#stay-connected li a{
    /* color: #cfcfcf; */
    text-decoration: none;
    font-size: 12px;
}

@media only screen and (max-width: 600px) {
    
.footer-title{
    font-size: 19px !important;
}

a{
    color:#ffffff;
    font-size: 12px;
}
/* .footer-row {   
    padding:25px; 
}
*/
}

</style>


<!-- Footer -->
<footer class="bg-dark text-white footer-container">
    <div class="container ">
        <div class="row footer-row mb-4">
            <div class="col-md-4 col-6 mb-3">
                <h5 class="text-nowrap footer-title">Quick Links</h5>
                <ul class="list-unstyled" id="quick-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Centers</a></li>
                    <li><a href="#">Employers</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-6">
                <h5 class="footer-title">Stay Connected</h5>
                <ul class="list-unstyled" id="stay-connected">
                    <li><a class="text-nowrap" href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a class="text-nowrap" href="#">Instagram</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-7 ">
                <h5 class="text-nowrap footer-title">Assessments</h5>
                    <ul class="list-unstyled" id="assessments">
                        <li><a class="text-nowrap" href="../ADHD_Form/index.php">ADHD</a></li>
                        <li><a class="text-nowrap" href="../Autism_Form/index.php">Autism</a></li>
                        <li><a class="text-nowrap" href="../Mental_Health_Tracker/index.php">Mental Health Tracker</a></li>
                        <li><a class="text-nowrap" href="../Anxious_Form/index.php">Anxious</a></li>
                        <li><a class="text-nowrap" href="../Depression_Test/index.php">Sad or depressed?</a></li>
                        <li><a class="text-nowrap" href="../OCD_Form/index.php">OCD Symptom </a></li>
                        <li><a class="text-nowrap" href="../Sleep_Form/index.php">Sleep</a></li>
                        <li><a class="text-nowrap" href="../How_do_you_feel_about_yourself/index.php">Self-Reflection</a></li>
                        <li><a class="text-nowrap" href="../Addiction_Form/index.php">Addiction</a></li>
                        <li><a class="text-nowrap" href="../Stress_Management/index.php">Stress</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Marriage_Solidarity_Scale/index.php">Marriage Solidarity</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Can_You_Rely_on_Your_Partner/index.php">Partner Reliability</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Physical_Fitness_Measure/index.php">Fitness Assessment</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Are_You_a_Protective_Parent/index.php">Parental Protectiveness</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../What_Is_Your_Job_Doing_to_You/index.php">Job Impact</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Postpartum_depression/index.php">Postpartum Depression</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Psychosis&Schizophrenia/index.php">Psychosis & Schizophrenia</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../PTSD_Form/index.php">PTSD</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Child_Mental_Test/index.php">Child's Mental Health</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Youth_Mental_Test/index.php">Youth's Mental Health</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Bipolar_Test/index.php">Bipolar Disorder</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Eating_disorder/index.php">Eating Disorder</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Pet_Test/index.php">Pets and Mental Health</a></li>
                        <li class="more-links" style="display:none;"><a class="text-nowrap" href="../Self_injury/index.php">Self Injury</a></li>
                        <!-- Add more hidden links here -->
                    </ul>

                    <button id="viewMoreBtn" onclick="toggleLinks()">View More</button>

            </div>
        </div>
        <div class="row p-3 justify-content-center border-top " style="border-top: 1px solid;">
            <p style="font-size: 13px; text-align:center;">© 2024, Survey Forms. All Rights Reserved & Maintained By Jórim Technology Solutions Pvt. Ltd.</p>
        </div>
    </div>
</footer>


<script>
    function toggleLinks() {
    var links = document.querySelectorAll('.more-links');
    var button = document.getElementById('viewMoreBtn');
    
    links.forEach(link => {
        link.style.display = link.style.display === 'none' ? 'block' : 'none';
    });

    // Toggle the button text
    if (button.innerHTML === 'View More') {
        button.innerHTML = 'View Less';
    } else {
        button.innerHTML = 'View More';
    }
}

</script>