<?php
//use Phppot\PasswordReset;
//use Phppot\Member;
//
////require_once __DIR__ . '/Model/PasswordReset.php';
//$passwordReset = new PasswordReset();

//if (empty($_GET["token"])) {
//    // token not found so exit
//    echo 'Invalid request!';
//    exit();
//} else {
//    $token = $_GET["token"];
//    // token found, let's validate it
//    $memberRecord = $passwordReset->getMemberForgotByResetToken($token);
//    if (empty($memberRecord)) {
//        // token expired
//        // do not say that your token has expired for security reasons
//        // never reveal system state to the end user
//        echo 'Invalid request!';
//        exit();
//    }
//}
//if (! empty($_POST["reset-btn"])) {
//    $passwordReset->expireToken($token);
//    require_once __DIR__ . '/Model/Member.php';
//    $member = new Member();
//    $displayMessage = $member->updatePassword($memberRecord[0]['member_id'], $_POST["password"]);
//}
?>

    <!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Reset Password | GoodGirls</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
    <link rel="stylesheet" href="{{ asset('path/to/style.css') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background: #C9FFBF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFAFBD, #C9FFBF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFAFBD, #C9FFBF);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        ::selection {
            background: #4158d0;
            color: #fff;
        }

        .wrapper {
            width: 380px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            line-height: 100px;
            color: #fff;
            user-select: none;
            border-radius: 15px 15px 0 0;
            background: #1F1C2C;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #928DAB, #1F1C2C);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #928DAB, #1F1C2C);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .wrapper form {
            padding: 30px;
        }

        .wrapper form .field {
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
            -webkit-appearance: none;
            /* Remove default arrow in Chrome/Safari */
            -moz-appearance: none;
            /* Remove default arrow in Firefox */
            appearance: none;
            /* Remove default arrow */
            background-image: url('data:image/svg+xml;utf8,<svg fill="#262626" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8.293 11.707a1 1 0 011.414 0L10 12.414l.293-.293a1 1 0 111.414 1.414l-1 1a1 1 0 01-1.414 0l-1-1a1 1 0 010-1.414zM10 4l-1-1-1 1a1 1 0 01-1-1 1 1 0 00-1-1H3a1 1 0 00-1 1 1 1 0 01-1 1V15a1 1 0 011 1h12a1 1 0 011-1V4a1 1 0 01-1-1 1 1 0 00-1-1h-1a1 1 0 00-1 1 1 1 0 01-1 1h-2a1 1 0 01-1-1 1 1 0 00-1-1zM7 16H4V8h3zm6 0h-3V8h3z"/></svg>');
            background-repeat: no-repeat;
            background-position: calc(100% - 10px) center;
            background-size: 20px;
            padding-right: 40px;
            /* Adjust for the arrow icon */
        }

        .wrapper form .field input:focus,
        .wrapper form .field select:focus {
            border-color: #4158d0;
        }

        .wrapper form .field label {
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

        .wrapper form .field input:focus~label,
        .wrapper form .field input:valid~label,
        .wrapper form .field select:focus~label,
        .wrapper form .field select:valid~label {
            top: 0%;
            font-size: 16px;
            color: #4158d0;
            background: #fff;
            transform: translateY(-50%);
        }

        .wrapper form .content {
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

        .wrapper form .field input[type="submit"] {
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

        .wrapper form .field input[type="submit"]:active {
            transform: scale(0.95);
        }

        .wrapper form .signup-link {
            margin-top: 20px;
            text-align: center;
        }

        .wrapper form .signup-link a {
            color: #d3959b;
            text-decoration: none;
        }

        .wrapper form .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<div class="wrapper">
    <div class="title">Reset Password</div>
    <form action="#" onsubmit="return resetPasswordValidation()">
        <?php
        if (! empty($displayMessage["status"])) {
        if ($displayMessage["status"] == "error") {
            ?>
        <div class="server-response error-msg">
                <?php echo $displayMessage["message"]; ?>
        </div>
            <?php
        } else if ($displayMessage["status"] == "success") {
            ?>
        <div class="server-response success-msg">
                <?php echo $displayMessage["message"]; ?>
        </div>
            <?php
        }
        }
        ?>
        <div class="field">
            <input type="password" name="password" id="password" required>
            <label>Password<span class="required error" id="forgot-password-info"></span></label>
        </div>
        <div class="field">
            <input type="password" name="confirm-password" id="confirm-password" required>
            <label>Confirm Password<span class="required error" id="confirm-password-info"></span></label>
        </div>
        <div class="field">
            <input class="btn" type="submit" name="reset-btn" id="reset-btn" value="Reset Password">
        </div>
</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    function resetPasswordValidation() {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm-password').value;

        if (password !== confirmPassword) {
            // Tampilkan SweetAlert untuk kesalahan
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Both passwords must be same.",
            });
            return false; // Prevent form submission
        } else {
            // Tampilkan SweetAlert untuk sukses
            Swal.fire({
                icon: "success",
                title: "Your password has been reset",
                showConfirmButton: false,
                timer: 1500
            });
            return true; // Allow form submission
        }
    }
</script>
</body>

</html>
