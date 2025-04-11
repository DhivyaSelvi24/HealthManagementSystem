<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>

/* Custom styles for the header */
.navbar {
    background-color: #3498db; 
    padding: 10px 0;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); 
    font-weight: bold;
}

.navbar-brand img {
    width: 60px;
    /* height:50px; */
    /* border-radius: 50%; */
}

.navbar-toggler-icon {
    /* background-color: #ecf0f1; */
}

.navbar-toggler {
    border: none;
}

.navbar-toggler:focus {
    outline: none;
}

.navbar-nav .nav-link {
    color: #ecf0f1 !important;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
    font-size: 14px;
}

/* Hover effect for navigation links */
.navbar-nav .nav-link:hover {
    background-color: #2980b9;
    border-radius: 5px;
}

/* Active link style */
.navbar-nav .nav-item.active .nav-link {
    background-color: #2980b9;
}

.dropdown-menu {
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    background-color: #2c3e50;
    padding: 15px;
  }

  .dropdown-item {
    color: #ecf0f1; 
    padding: 10px 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .dropdown-item:hover {
    background-color: #34495e;
    color: #ffffff; 
    border-radius: 5px;
  }

</style>

<header>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
    <div class="container-fluid">

        <!-- Brand/logo -->
        <a class="navbar-brand ml-3" href="../Landing_page/index.php">
            <img class="img" src="images\jorim.webp" alt="logo" style="width: 60px; border-radius: 50%; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
        </a>

        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="../Landing_page/index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Experts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Centers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Employers</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Resources</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="../ADHD_Form/index.php">ADHD </a>
                        <a class="dropdown-item" href="../Autism_Form/index.php">Autism</a>
                        <a class="dropdown-item" href="../Mental_Health_Tracker/index.php">Mental Health Tracker</a>
                        <a class="dropdown-item" href="../Anxious_Form/index.php">Do you feel Anxious?</a>
                        <a class="dropdown-item" href="../Depression_Test/index.php">Am I sad or depressed?</a>
                        <a class="dropdown-item" href="../OCD_Form/index.php">OCD Symptom Assessment</a>
                        <a class="dropdown-item" href="../Sleep_Form/index.php">Are you sleeping well?</a>
                        <a class="dropdown-item" href="../How_do_you_feel_about_yourself/index.php">How do you feel about yourself?</a>
                        <a class="dropdown-item" href="../Addiction_Form/index.php">Is my Addiction in my control?</a>
                        <a class="dropdown-item" href="../Stress_Management/index.php">How well do you cope with stress?</a>
                        <a class="dropdown-item" href="../Marriage_Solidarity_Scale/index.php">Marriage Solidarity Scale</a>
                        <a class="dropdown-item" href="../Can_You_Rely_on_Your_Partner/index.php">Can you rely on your partner?</a>
                        <a class="dropdown-item" href="../Physical_Fitness_Measure/index.php">Physical Fitness Measure</a>
                        <a class="dropdown-item" href="../Are_You_a_Protective_Parent/index.php">Are you a protective parent?</a>
                        <a class="dropdown-item" href="../What_Is_Your_Job_Doing_to_You/index.php">What Is Your Job Doing to You?</a>
                        <a class="dropdown-item" href="../Postpartum_depression/index.php">Postpartum Depression</a>
                        <a class="dropdown-item" href="../Psychosis&Schizophrenia/index.php">Psychosis & Schizophrenia</a>
                        <a class="dropdown-item" href="../PTSD_Form/index.php">PTSD</a>
                        <a class="dropdown-item" href="../Child_Mental_Test/index.php">Child's Mental Health</a>
                        <a class="dropdown-item" href="../Youth_Mental_Test/index.php">Youth's Mental Health</a>
                        <a class="dropdown-item" href="../Bipolar_Test/index.php">Bipolar Disorder</a>
                        <a class="dropdown-item" href="../Eating_disorder/index.php">Eating Disorder</a>
                        <a class="dropdown-item" href="../Pet_Test/index.php">Pets and Mental Health</a>
                        <a class="dropdown-item" href="../Self_injury/index.php">Self Injury</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</header>


<!-- BOOTSTRAP JS, JQUERY, AND POPPER.JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--  -->