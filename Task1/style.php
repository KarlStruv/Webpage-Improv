<?php Header ("Content-type: text/css; charset=utf-8");?>
*{
  margin: 0px;
    padding: 0px;
}
body{
    position: relative;
    width: 1920px;
    height: 1080px;
    background: #FFFFFF;
    padding: 0px;
    margin: 0px;
    overflow: hidden;
}

.top-bar{
    position: absolute;
    width: 480px;
    height: 40px;
    top: 100px;
    left: 100px;
}

.logo-pineapple{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 118px;
    height: 40px;
}
#pineapple{
    position: absolute;
    left: 40px;
    top: 20px;
}

#union{
    position: absolute;
    width: 25px;
    height: 40px;
}

#image-background img{
    position: absolute;
    width: 1620px;
    height: 1080px;
    left: 680px;
    top: 0px;
    overflow: hidden;
    background: url(image_summer.png);

}




#links{
    font-family: Arial;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 26px;
    color: #6A707B;
    white-space: nowrap
}
#links a1{
    position: absolute;
    width: 42px;
    height: 26px;
    left: 231px;
    top: 14px;
}



#links a2{
    position: absolute;
    width: 91px;
    height: 26px;
    left: 303px;
    top: 14px;
}

#links a3{
    position: absolute;
    width: 56px;
    height: 26px;
    left: 424px;
    top: 14px;
}

#links a1:hover{
    cursor: default;
}

#links a2:hover{
    cursor: default;
}
#links a3:hover{
    cursor: default;
}
#heading h1{
     position: absolute;
     width: 399px;
     height: 44px;
     left: 140px;
     top: 374px;
     font-family: Georgia;
     font-style: normal;
     font-weight: normal;
     font-size: 32px;
     line-height: 44px;
     color: #131821;
     margin: 0px;
     padding: 0px;
}

#subheading h2{
     position: absolute;
     width: 400px;
     height: 56px;
     left: 140px;
     top: 433px;
     font-family: Arial;
     font-style: normal;
     font-weight: normal;
     font-size: 16px;
     line-height: 28px;
     color: #6A707B;
     margin: 0px;
     padding: 0px;
}

.input{
    position: relative;
    width: 663px;
    height: 70px;
    left: 100px;
    top: 539px;
    border: 1px solid #E3E3E4;
    border-left-style: solid;
    border-left-width: 4px;
    border-left-color: #4066A5;
    background: #FFFFFF; 
}

#arrow{
    position: absolute;
    width: 24px;
    height: 14px;
    left: 599px;
    top: 20px;
    font-size: 30px;
    opacity: 0.3;
}



input{
    position: absolute;
    background: transparent;
    border: none;
    left: 0px;
    top: 0px;
    width: 618px;
    height: 69px;
    padding-left: 44px;
}
input:focus{
    outline: none; 
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
}

input::placeholder{
    font-family: Arial;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    color: #6A707B;
}

.input:hover{
    border: 1px solid #4066A5;
    border-left-style: solid;
    border-left-width: 4px;
    border-left-color: #4066A5;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
}

.input:hover #arrow{
    color: #4066A5;
    opacity: 1;
}

button{
    position: absolute;
    border: none;
    background: none;
    z-index: 2;
    outline: none;
    
}

.alert-messages{
    z-index: 2;
}

#error-label1{
    position: absolute;
    top: 90px;
    left: 180px;
    display: none;  
    color: #CC0000;  
}

#error-label2{
    position: absolute;
    top: 90px;
    left: 180px;
    display: none; 
    color: #CC0000;  
}
#error-label3{
    position: absolute;
    top: 90px;
    left: 180px;
    display: none;    
    color: #CC0000; 
}
#error-label4{
    position: absolute;
    top: 90px;
    left: 180px;
    display: none; 
    color: #CC0000;    
}




.tos{
    position: absolute;
    width: 400px;
    height: 28px;
    left: 140px;
    top: 662px;
}


input[type="checkbox"] + label{
    display: block;
}

input[type="checkbox"]{
    display: none;
}

input[type="checkbox"] + label:before{
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    content: "\f00c";
    background: #FFFFFF;
    border: 1px solid #E3E3E4;
    box-sizing: border-box;
    border-radius: 3px;
    display: inline-block;
    width: 26px;
    height: 26px;
    padding-left: 4px;
    padding-bottom: 7px;
    padding-top: 3px;
    vertical-align: bottom;
    color: transparent;
    align-items: center;
    justify-content: center;
    
}

input[type="checkbox"]:checked + label:before{
    background-color: #4066A5;
    color: #FFFFFF;
    border-color: #4066A5;
}
#tos-text a8{
    position: absolute;
    left: 41px;
    top: 0px;
    line-height: 28px;
    font-size: 16px;
    font-family: Arial;
    font-weight: normal;
    font-style: normal;
    color: #6A707B;
}
#tos-text a9{ 
    position: absolute;
    text-decoration-line: underline;
    color: #131821;
    white-space: nowrap;
    margin-left: 4px;
}
#tos-text a9:hover{
    cursor: default;
    color: #4066A5;
}
#tos-text a9:active{
    color:  #233759;
}

hr{
    position: absolute;
    border: 0px solid #E3E3E4;
width: 400px;
height: 1px;
left: 140px;
top: 740px;
background: #E3E3E4;

        
}

.social-icons-box{
    position: absolute;
    width: 244px;
    height: 46px;
    left: 218px;
    top: 791px;
}

#facebook{
    position: absolute;
    left: 16px;
    top: 13px;
    opacity: 0.3;
    z-index: 2;
    color: black;  
}

.facebook-base{
    position: absolute;
    border-radius: 50%;
    border: 2px solid #E3E3E4;
    box-sizing: border-box;
    height: 46px;
    width: 46px;
    z-index: 1;
}

#facebook::i{
    color: white;
    opacity: 1;
}

.facebook-base:hover{
        background: #4267B2;
    border-color:#4267B2;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
    
}

a4:hover #facebook{
    opacity: 1;
    color: white;
}

.facebook-base:active{
    background: #2F4A80;
    border-color: #2F4A80;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
}

#instagram{
    position: absolute;
    left: 14px;
    top: 13px;
    opacity: 0.3;
    z-index: 2;
    color: black;
}

.instagram-base{
    position: absolute;
    border-radius: 50%;
    border: 2px solid #E3E3E4;
    box-sizing: border-box;
    height: 46px;
    width: 46px;
    left: 66px;
    z-index: 1;
}

#instagram::i{
    color: white;
    opacity: 1;
}

.instagram-base:hover{
    background: #C13584;
    border-color:#C13584;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
    
}
a5:hover #instagram{
    opacity: 1;
    color: white;
}

.instagram-base:active{
    background: #8F2762;
    border-color: #8F2762;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
}


#twitter{
    position: absolute;
    left: 13px;
    top: 13px;
    opacity: 0.3;
    z-index: 2;
    color: black;
}

.twitter-base{
    position: absolute;
    border-radius: 50%;
    border: 2px solid #E3E3E4;
    box-sizing: border-box;
    height: 46px;
    width: 46px;
    left: 132px;
    z-index: 1;
}

#twitter::i{
    color: white;
    opacity: 1;
}

.twitter-base:hover{
    background: #1DA1F2;
    border-color:#1DA1F2;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
    
}

a6:hover #twitter{
    opacity: 1;
    color: white;
}

.twitter-base:active{
    background: #177FBF;
    border-color: #177FBF;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
}

#youtube{
    position: absolute;
    left: 12px;
    top: 13px;
    opacity: 0.3;
    z-index: 2;
    color: black;
}

.youtube-base{
    position: absolute;
    border-radius: 50%;
    border: 2px solid #E3E3E4;
    box-sizing: border-box;
    height: 46px;
    width: 46px;
    left: 198px;
    z-index: 1;
}

#youtube::i{
    color: white;
    opacity: 1;
}

.youtube-base:hover{
    background: #FF0000;
    border-color:#FF0000;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
    
}
a7:hover #youtube{
    opacity: 1;
    color: white;
}

.youtube-base:active{
    background: #CC0000;
    border-color: #CC0000;
    box-shadow: 0px 20px 40px rgba(19, 24, 33, 0.3);
}

p10{
    position: absolute;
    top: 630px;
    left: 284px;
    display: block;  
    color: #CC0000;
}
p11{
    position: absolute;
    top: 630px;
    left: 284px;
    display: block;  
    color: #CC0000;
}
p12{
    position: absolute;
    top: 630px;
    left: 284px;
    display: block;  
    color: #CC0000;
}
p13{
    position: absolute;
    top: 630px;
    left: 284px;
    display: block;   
    color: #CC0000;
}




