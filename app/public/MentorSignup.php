<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<!-- mentor apply page -->
<head>
    <meta charset="utf-8">
    <meta name="author" content="Youngjae Kim 40169282" />
    <meta name="description" content="signup" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=No"
    />
    <title>Apply mentor</title>
    <link rel="icon" href="images/mentorship logo.PNG">
    
    <style>
        body {
            font-family: roboto, Arial, Helvetica, "Droid Sans", sans-serif;
            margin: 0;
        }

        .firstrow {
            text-shadow: 2px 2px 2px black;
            color: white;
            background-image: url("uploads/person2.jpg");
            text-align: center;
            padding: 3px;
        }

        .firstrow h5 {
            text-align: right;
            font-size: 14px;
        }

        .firstrow a {
            font-size: smaller;
            color: rgb(255, 255, 255);
        }

        .firstrow a:hover {
            color: rgb(253, 8, 8);
        }

        .card {
            background-color: rgb(134, 134, 134, 0.2);
            padding: 10px;
            margin: 60px;
        }

        .cardinside {
            background-color: white;
            padding: 5px;
            margin: 10px;
        }

        .name {
            font-size: 20px;
            font-weight: bold;
        }

        .button {
            text-align: center;
        }

        .submit {
            border: none;
            padding: 10px;
            margin: 20px;
            background-color: rgb(134, 134, 134, 0.2);
            border-radius: 10px;
            box-shadow: 2px 2px 4px black;
            font-weight: bold;
        }

        input {
            margin-top: 10px;
        }

        .country {
            width: 15vw;
        }

        .country,
        #language {
            padding: 5px;
        }

        select {
            margin-top: 5px;
        }

        .city {
            margin-right: 25px;
        }

        .location {
            display: flex;
        }

        @media (max-width: 800px) {
            .location{
                     flex-direction: column;
                        }
               }

        .Footer {
            background-image: url("images/loginpage.jfif");
            color: white;
            padding: 10px;
        }

        .Footer a {
            color: white;
            font-style: italic;
            font-size: smaller;
        }

        .consent {
            border: none;
            margin-left: 40px;
        }
    </style>
    <script type="text/javaScript" src = "js/sign-up.js"></script>
</head>

<body>
    <div class="header">
        <a href="index.php"><img id="logo" src="images/mentorship logo.PNG"></a>
    </div>
    <div class="firstrow">
        <h2>Apply for a mentor</h2>
    </div>

  
    
        <div class="mainbody">
            <div class="card">
                <span class="name">Personal Information</span>
                <div class="cardinside">
                    <p>*FIRST NAME <br /> <input type="text" id="firstname" name="firstname" required><br /></p>
                    <p>*LAST NAME <br /> <input type="text" id="lastname" name="lastname" required><br /></p>
                    <p>MIDDLE NAME <br /> <input type="text" id="middlename" name="middlename"></p>
                </div>
            </div>
            <div class="card">
                <span class="name">Contact information</span>
                <div class="cardinside">
                  
                    <div class="location">
                        <p class="city">*CITY <br /> <input type="text" id="city" name="city" required></p>
                        <p>*COUNTRY <br /> <select class="country" name="country" required>
                                <option>Canada</option>
                            </select></p>
                    </div>
                    <p>*PROVINCE<br /> <select class="country" name="province" required>
                            <option>Alberta</option>
                            <option>British Columbia</option>
                            <option>Prince Edward Island</option>
                            <option>Manitoba</option>
                            <option>New Brunswick</option>
                            <option>Nova Scotia</option>
                            <option>Nunavut</option>
                            <option>Ontario</option>
                            <option>Quebec</option>
                            <option>Saskatchewan</option>
                            <option>Newfoundland and Labrador</option>
                            <option>Northwest Territories</option>
                            <option>Yukon</option>
                        </select></p>
                    <p>*PHONE NUMBER(without '-') for mentor activity <br /> <input type="text" id="phonenumber" placeholder="111-111-1111" name="phonenumber" required></p>
                    <p>*EMAIL <br /> <input type="email" id="email" name="email" required></p>
                    <p>*CONFIRM EMAIL <br /> <input type="email" id="confirmemail" name="confirmemail" onchange= "checkemail()" required><br/>
                        <span id="alertmessage" style="color:red; display:none;">Please confirm it again. Two email addresses are different.</span></p>
                    <p>*PREFERRED LANGUAGE <br /> <select id="language" name="language" required>
                            <option>English</option>
                            <option>French</option>
                        </select></p>
                </div>
            </div>
            <div class="card">
                <span class="name">University information</span>
                <div class="cardinside">
                    <p>*Name of the University<br />
                        <input type="text" name="name" placeholder="name" required>
                       
                    <p>*Academic year<br />
                        <input type="radio" name="year" value="year">1st
                        <input type="radio" name="year" value="year">2nd
                        <input type="radio" name="year" value="year">3rd
                        <input type="radio" name="year" value="year">4th</p>

                    <p>*Major of Study<br />
                        <input type="text" name="Study" placeholder="Major" required>
                </div> 
            </div>
            <div class="card">
                <span class="name">Mentor</span>
                <div class="cardinside">
                    <p>*How many students can you mentor per week?<br />
                        <input type="text" name="name" placeholder="number" required>

                    <p>*Why do you want to be a mentor<br /><br />
                    <textarea id="textarea" name="user_input" rows="5" cols="40" placeholder="Your motivation"></textarea> 
                </div> 
            </div>
        </div>
        <p class="consent" onmousemove="consentcheck()">Consent to Conditions of Use and protection of Personal Information Policy
            <br /><input type="checkbox" id="consentbox" >*Yes, I have read and accept the Conditions of Use and protection of Personal
            Information Policy
        </p> <span id="consentboxmessage" style="color:red; display:none; margin-left: 40px"> Please check the box to submit.</span>
        <br />
       
        <hr />
        <div class="button">
           <input type="submit" value="Apply" class="submit" name="submit">
        </div>
    

    <div class="Footer">
        <nav class="nav justify-content-center">
            <a class="nav-link" href="https://www.facebook.com/" target="_blank">Facebook</a>
            <a class="nav-link" href="https://twitter.com/?lang=en" target="_blank">Twitter</a>
            <a class="nav-link" href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a class="nav-link" href="https://www.pinterest.ca/" target="_blank">Pinterest</a>
        </nav>
        Photos contributors:
        <a
            href="https://unsplash.com/@neonbrand?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">NeONBRAND</a>
        on
        <a
            href="https://unsplash.com/s/photos/grocery?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
    </div>
</body>

</html>