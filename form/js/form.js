console.log("Testing");
    
// PREVENT RIGHT CLICK AND SHORTCUTS
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
 

// Parse the query parameter from the URL
const urlParams = new URLSearchParams(window.location.search);
const score = urlParams.get('Score');

// console.log(score);

// Set the value of the hidden input
document.querySelector('input[name="score"]').value = score + '%';

// VALIDATION

function validateAge(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Age should only contain numeric characters');
        }
    }

function validateContactNumber(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.patternMismatch) {
            input.setCustomValidity('Number should contain atleast 10 numeric characters');
        }
    }

function validateEmail(input) {
        if (input.validity.valueMissing) {
            input.setCustomValidity('Please select all questions and proceed');
        } else if (input.validity.typeMismatch) {
            input.setCustomValidity('Enter a valid email address. Please include "@" and ".com"');
        }
    }


function validate() {

    //getting form name 
const urlParams = new URLSearchParams(window.location.search);
const formName = urlParams.get('formName');

// Excel sheet
    let scriptURL;

    // Using formName parameter  
    if (formName === 'Anxious_Form') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbxuGdIIVG8SIa04j-T-q0ODG59GP9uxVNFitmTADeDs7m7QGE2ITSMa0vArvVBoRZNm/exec';
    } else if (formName === 'Autism_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbwtUIa2bMhmXuxlwmCVa9mtlWr4s7l3_Q1zrHjYNKy44ghyCBt_ZzhK3bwmZeT62mab/exec';  
    } else if (formName === 'ADHD_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbxQ6PZEw47nKHU7AkS31E4ulg3UL0nrPVrHE5E-i6x9VUWqX1Wi7ac1jghN50j8uMby7A/exec';
    } else if (formName === 'depression_form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbyJkaB-SKhWKm3cAX2osMSms3_oss8vf7r9Sj9Pef5tjgfN6k5lNtTvcnFgck169pEk/exec';
    } else if (formName === 'Mental_Health_Tracker'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbzfhOW_UI0lUE0A462Zz9cjVaxjq7q45-DkOpmfT2p4L3I9rpiOrRjKLhnjroXPkZrZ_Q/exec';
    } else if (formName === 'OCD_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbxq1fY1V-57p2JmJH5tKWsCUlA7IfAhouyRJinLshZLZNLdbeb2tL0lUh99mpsjBMIKLQ/exec';
    } else if (formName === 'Sleep_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbySB1x1W8mh79W7QeTfh4aH0QHtHP4yzUU0v9LU2oG_sZJ7c2JjgrpGNXDtRjJtMegN/exec';
    } else if (formName === 'feel-about-yourself'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbxOD7fU4ptkiujDA3ZvSJakgxaOilUJiMW-MafMyyaMqEH2SP4m3B-pbClXi_LlOTkOqQ/exec';
    } else if (formName === 'Addiction_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbywq_ApH3_wa4Mtm3i9OzFOqufIzGvH-3jTT0pJRDCXNsCTfpNhaUpILKARryTL5OJ4ag/exec';
    } else if (formName === 'Stress_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbzqLlA782UKgONRseZmokesYPnR2nxdekaXj5gvFDOnR3cNAiW-2M4aOPVWWgL2kUcNpw/exec';
    } else if (formName === 'Marriage_Solidarity_Scale'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbwQfoKtxzMCeWT2hwqj8wwNgkfRaXc7ItYXSGEl7xsheUDxt__ZW9zMut3lTEgMsZ_Z/exec';
    } else if (formName === 'Relationship_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbxkuwh79uCGLblm8ZfFTksOJjStmshs4spjndzyLScpzztawcDbW7pjB5TctDc8XbHN1Q/exec';
    } else if (formName === 'Fitness_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbwt2FbcB0e53HqUQ1wAw3hgj_m2zJsNtVOUmhtDMhlKgAhMOu0okg1bmM25njc6AG7r/exec';
    } else if (formName === 'Parent_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbxw1tyjLxqc1DRKN6SUwJInuinpg3Yfmaf7_F1jmRv8I6LNFANdzQbsfDCIWok9jwhh/exec';
    } else if (formName === 'Job_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycbxoQC-GMVIPBpK6LPHyORNNmJsQYpqSKPX4v8XbTnyxZfddE8REjLlv2nDd9vn-vQnE/exec';
    } else if (formName === 'Postpartum_Form'){
        scriptURL = 'https://script.google.com/macros/s/AKfycby5ma42pG0-TgRQKcSK7HGrg0_yXcgzNmPuLaXdkJLIZmtp8xfwKMcDgLaUG3bQAG9DIg/exec';
    }else if (formName === 'Psychosis_Form') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbyB5KZJmh8tW6rfYgRvfxFa7sRsrvS45LCFrcH86f4Y9ArP44hQAjKzGYk0AUM1u1oS/exec';
    }else if (formName === 'PTSD') {
        scriptURL = 'https://script.google.com/macros/s/AKfycby6Khrr3CnVP17skEqwUc3Tr9G7W7p3rZAm1NngP1jdaD8l0pxRiwGXO_0iNSEsTI7-/exec';
    }else if (formName === 'Child_mental_test') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbzmCLnbAENTcoPm2JnVGhUQDq4MUIBR24UyXGuyK6ZiywM8o9Jq17stJIR6bFaE_p6C/exec';
    }else if (formName === 'Youth_mental_test') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbwSTVOtgWHn10oL2Y2GQTKuymJpYxmATFhgpHzZdwKLU7sdHXeGAoMSOgV-vszMz1t8/exec';
    }else if (formName === 'Bipolar_test') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbyp8Lyptz124gktTca1cnTkgGu3UINCqWINK3BMBzFkedQn0F5tqE3rpMK7c0cHkNnb/exec';
    }else if (formName === 'Eating_disorder') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbyaphX9gLrcpwN2WLN9l53ces-ZSxLl8gOKOmoB5_rsDKXbUveds1waH6x5J-EbXoIX/exec';
    }else if (formName === 'Pet_Test') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbzmhM4B7pnoRaxBKNoRyptlqvGG18C1_pKYUmB07mCQkqk2ogocPYEhMd6Yf4j-Y3k1IA/exec';
    }else if (formName === 'Self_injury') {
        scriptURL = 'https://script.google.com/macros/s/AKfycbwZCHqgMAAXegJ5dAfULgi9YdoVFXAud_QAUGKlcVDOXvJi9TyAQHMyLtRNZ46Dj9xb/exec';
    }

    
    
    const form = document.querySelector('#form');
    const submitButton = document.querySelector("#submit");

    submitButton.disabled = true;
    const requestBody = new FormData(form);

    // Disable form submission if any validation fails
    if (!form.checkValidity()) {
        submitButton.disabled = false;
        return;
    }

    fetch(scriptURL, { method: 'POST', body: requestBody })
        .then(response => {
            // alert('Success!', response)
            submitButton.disabled = false;
            window.location.href = `acknowledgement.php?formName=${formName}`;
        })
        .catch(error => {
            console.error('Error loading:', error);
            alert('Error loading!', error.message);
            submitButton.disabled = false;
        });


    }
document.querySelector('#form').addEventListener('submit', function (e) {
    e.preventDefault();
    validate();
});
