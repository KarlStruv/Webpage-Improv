<?php 
    if(!isset($_POST['email'])){
        $_POST['email'] = '';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Task 1</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" href="style.php">
        <link rel="stylesheet" href="css/all.min.css">
      


    </head>
    
    
    
    <body>
        
       
        
            <div id="image-background">
                <img>
            </div>
        
        
        <div class="top-bar">
            
            <div class="logo-pineapple">
                <div id="image-pineapple-icon-svg">
                    <img src="Union.svg" alt="union" id="union">
                </div>
                
                <div id="image-pineapple.">
                    <img src="pineapple..svg" alt="pineapple" id="pineapple" >
                </div> 
        
                
            </div>
            
            <div id="links">
                <a1 href="#">About</a1>
                <a2 href="#">How it works</a2>
                <a3 href="#">Contact</a3>
            </div>
        </div>
        
        <div id="heading">
            <h1>Subscribe to newsletter</h1>
        </div>
        
        <div id="subheading">
            <h2>Subscribe to our newsletter and get 10% discount on pineapple glasses</h2>
        </div>
        
        <form  method="POST" action="phppage.php">
            <div class="input">   
                <div id="placeholder">
                    <input onkeyup="check()" id="email" type="text" name="email" placeholder="Type your email address here..." value="<?php echo $_POST['email'];?>">
                
                </div>

                <div id="ic-arrow">
                    
                        <button id='button1'  onclick="terms()" type="submit" name="submit">
                            <i class="fas fa-long-arrow-alt-right" id="arrow"></i>
                        </button>
                 </div>

                <div class="alert-messages"></div>
                    <label id="error-label1">
                    Please provide a valid e-mail address
                    </label>
                    <label id="error-label2">
                    You must accept the terms and conditions
                    </label>
                    <label id="error-label3">
                    Email address is required
                    </label>
                    <label id="error-label4">
                    We are not accepting subscriptions from Colombia emails
                    </label>
                </div>
        
            </div>  
        
        
            <div class="tos">
            
                <div class="tos-checkbox">
                
                    <input type="checkbox" id="checkbox1" name="checkbox" onclick="terms()">
                    <label for="checkbox1" id="chblabel"></label>
              
                </div>
                <div id="tos-text">
                    <a8 id="agree">I agree to <a9 href="#"> terms of service</a9></a8>
                </div>
            </div>

        </form>
        
        <div id="line">
            <hr>
        </div>

        <div class="social-icons-box">
            <a4 href="#">    
                <div class="facebook-base">   
                    <i class="fab fa-facebook-f" id="facebook"></i>      
                </div >
            </a4> 
            
            <a5 href="#">    
                <div class="instagram-base">   
                    <i class="fab fa-instagram" id="instagram"></i>      
                </div >
            </a5>
            
            <a6 href="#">    
                <div class="twitter-base">   
                    <i class="fab fa-twitter" id="twitter"></i>      
                </div >
            </a6>
            
            <a7 href="#">    
                <div class="youtube-base">   
                    <i class="fab fa-youtube" id="youtube"></i>      
                </div >
            </a7>
        
        </div>
        
        
        
 
    </body>  
    
    
    
</html>

<script>
        const email = document.querySelector("#email");
        const error1 = document.querySelector("#error-label1");
        const error2 = document.querySelector("#error-label2");
        const error3 = document.querySelector("#error-label3");
        const error4 = document.querySelector("#error-label4");
        var btn = document.querySelector("#button1");
        btn.disabled = true;
        const chb = document.querySelector("#checkbox1");
        
        
        let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        let regExpCo = /^[^ ]+@[^ ]+\.co$/;

        function check(){
            if (email.value.match(regExp)) {
                error1.style.display = "none";
                error2.style.display = "none";
                error3.style.display = "none";
                error4.style.display = "none";
                btn.disabled = false;
               
                
                
            }else{
                error1.style.display = "block";
                error2.style.display = "none";
                error3.style.display = "none";
                error4.style.display = "none";
                btn.disabled = true;
                
                
                
            }
            if (email.value == "") {
                error1.style.display = "none";
                error2.style.display = "none";
                error3.style.display = "block";
                error4.style.display = "none";
                btn.disabled = true;
                
                
                
            }
            if (email.value.match(regExpCo)) {
                error1.style.display = "none";
                error2.style.display = "none";
                error3.style.display = "none";
                error4.style.display = "block";
                btn.disabled = true;
            }
            
        }
        function terms(){
            if (chb.checked == false) {
                error1.style.display = "none";
                error2.style.display = "block";
                error3.style.display = "none";
                error4.style.display = "none";
                btn.disabled = true;
            }
            if(chb.checked==true && email.value.match(regExp)){
                error1.style.display = "none";
                error2.style.display = "none";
                error3.style.display = "none";
                error4.style.display = "none";
                btn.disabled = false;
            }
            if (email.value.match(regExpCo)) {
                error1.style.display = "none";
                error2.style.display = "none";
                error3.style.display = "none";
                error4.style.display = "block";
                btn.disabled = true;
            }
        }
    </script>

