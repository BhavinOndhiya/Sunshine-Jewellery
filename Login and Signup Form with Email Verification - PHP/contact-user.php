<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .inputDiv  
        {
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        .inputTitle
        {
            font-weight: bold;
        }
        /* body
        {
            background-color: rgb(255, 255, 255);
        } */
        .inputC
        {
            border-radius: 10px;
            padding: 10px;
        }
    </style>
    <title>Contact Us</title>
</head>
<link rel="stylesheet" href="style.css">
<body style="background: url(background.jpg);">

<nav>
        <div class="toggle-btn" onclick="toggleNav()">

        </div>
    <div style="display: flex; width: 100%;">
        <div>
            <img src="img/logo.png" style="height: 100px;" alt="">
        </div>
      </nav>

      <form action="contact-mail.php" method="POST" class="was-validated">
    <div class="container" style="z-index: -1;display: flex ;flex-direction: column ;width:500px;margin:auto ;text-align:center;height:auto">
    <div style=" display: flex;justify-content: center; margin-top: 50px;color:#a8741a;font-family:sans-serif,Poppins;">
        <h2>Feedback Form</h2>
    </div>
        <div style="margin-top: 50px; background: linear-gradient(135deg,#a8741a);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 30px;
        height:380px;
    border-radius: 20px;
    box-shadow: 0 8px 32px 0 #efb85a">
    <div class="inputDiv">
        <span class="inputTitle">
        </span>
        <!-- <textarea name="Name" class="form-control inputC" id="validationTextarea" -->
        <input name="Name" placeholder="Name" class="inputC" required>
        <!-- </textarea> -->
    </div>
    <div class="inputDiv">
        <span class="inputTitle">
        </span>
        <!-- <textarea name="Email" class="form-control inputC" id="validationTextarea" -->
            <input name="Email" placeholder="Email" class="inputC" required>
        <!-- </textarea> -->
    </div>    
    <div class="inputDiv">
        <span class="inputTitle">
        </span>
        <!-- <textarea name="subject" class="form-control inputC" id="validationTextarea" -->
            <input  name="subject" placeholder="Enter Your Subject Here" class="inputC" required>
        <!-- </textarea> -->
    </div>
    <div class="inputDiv">
        <span class="inputTitle">
        </span>
        <!-- <textarea name="message" class="form-control inputC" id="validationTextarea" -->
            <input name="message" placeholder="Enter Your Message Here" class="inputC" required>
        <!-- </textarea> -->
    </div>
    <input name="submit" type="submit" value="submit" style="width: 150px;">
    </div>
    </div>  
    </form>
</body>

</html>