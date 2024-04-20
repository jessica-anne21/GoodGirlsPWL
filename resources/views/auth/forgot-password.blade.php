<?php
use Phppot\Member;

if (! empty($_POST["forgot-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $displayMessage = $member->handleForgot();
}
?>
    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Form | GoodGirls</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
    <link rel="stylesheet" href="{{ asset('path/to/style.css') }}">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        html,body{
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background: #C9FFBF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFAFBD, #C9FFBF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFAFBD, #C9FFBF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        ::selection{
            background: #4158d0;
            color: #fff;
        }
        .wrapper{
            width: 380px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
        }
        .wrapper .title{
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            line-height: 100px;
            color: #fff;
            user-select: none;
            border-radius: 15px 15px 0 0;
            background: #1F1C2C;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #928DAB, #1F1C2C);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #928DAB, #1F1C2C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .wrapper form{
            padding: 30px;
        }
        .wrapper form .field{
            height: 50px;
            width: 100%;
            margin-top: 20px;
            position: relative;
        }
        .wrapper form .field input,
        .wrapper form .field select {
            height: 100%;
            width: 100%;
            outline: none;
            font-size: 17px;
            padding-left: 20px;
            border: 1px solid lightgrey;
            border-radius: 25px;
            transition: all 0.3s ease;
            -webkit-appearance: none; /* Remove default arrow in Chrome/Safari */
            -moz-appearance: none; /* Remove default arrow in Firefox */
            appearance: none; /* Remove default arrow */
            background-image: url('data:image/svg+xml;utf8,<svg fill="#262626" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8.293 11.707a1 1 0 011.414 0L10 12.414l.293-.293a1 1 0 111.414 1.414l-1 1a1 1 0 01-1.414 0l-1-1a1 1 0 010-1.414zM10 4l-1-1-1 1a1 1 0 01-1-1 1 1 0 00-1-1H3a1 1 0 00-1 1 1 1 0 01-1 1V15a1 1 0 011 1h12a1 1 0 011-1V4a1 1 0 01-1-1 1 1 0 00-1-1h-1a1 1 0 00-1 1 1 1 0 01-1 1h-2a1 1 0 01-1-1 1 1 0 00-1-1zM7 16H4V8h3zm6 0h-3V8h3z"/></svg>');
            background-repeat: no-repeat;
            background-position: calc(100% - 10px) center;
            background-size: 20px;
            padding-right: 40px; /* Adjust for the arrow icon */
        }
        .wrapper form .field input:focus,
        .wrapper form .field select:focus {
            border-color: #4158d0;
        }
        .wrapper form .field label{
            position: absolute;
            top: 50%;
            left: 20px;
            color: #999999;
            font-weight: 400;
            font-size: 17px;
            pointer-events: none;
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }
        .wrapper form .field input:focus ~ label,
        .wrapper form .field input:valid ~ label,
        .wrapper form .field select:focus ~ label,
        .wrapper form .field select:valid ~ label{
            top: 0%;
            font-size: 16px;
            color: #4158d0;
            background: #fff;
            transform: translateY(-50%);
        }
        .wrapper form .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }
        .wrapper form .content .checkbox label,
        .wrapper form .content .pass-link a {
            color: #262626;
            user-select: none;
        }
        .wrapper form .field input[type="submit"]{
            color: #fff;
            border: none;
            padding-left: 0;
            margin-top: 20px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
            background: #d3959b;
            transition: all 0.3s ease;
        }
        .wrapper form .field input[type="submit"]:active{
            transform: scale(0.95);
        }
        .wrapper form .signup-link{
            margin-top: 20px;
            text-align: center;
        }
        .wrapper form .signup-link a{
            color: #d3959b;
            text-decoration: none;
        }
        .wrapper form .signup-link a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="title">
        Forgot Password
    </div>
    <?php
    if (isset($displayMessage)) {
        if ($displayMessage["status"] == "error") {
            echo '<div class="server-response error-msg">' . $displayMessage["message"] . '</div>';
        } else if ($displayMessage["status"] == "success") {
            echo '<div class="server-response success-msg">' . $displayMessage["message"] . '</div>';
        }
    }
    ?>

    <form action="{{ route('reset-password') }}">
        <div class="field">
            <input type="text" name="username" id="username" required>
            <label>Username<span class="required error" id="username-info"></span></label>
        </div>
        <div class="field">
            <input type="submit" value="Reset Password" onclick="handleClick()">
        </div>
</div>
</form>

<script>
    function loginValidation() {
        var valid = true;
        $("#username").removeClass("error-field");
        var UserName = $("#username").val();
        $("#username-info").html("").hide();

        if (UserName.trim() == "") {
            $("#username-info").html("required.").css("color", "#ee0000").show();
            $("#username").addClass("error-field");
            valid = false;
        }
        if (valid == false) {
            $('.error-field').first().focus();
            valid = false;
        }
        return valid;

    }
    function handleClick() {
        console.log('Button clicked!');
        if(loginValidation()) {
            $('form').submit();
        }
    }
</script>
</body>
</html>
