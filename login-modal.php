<?php require 'register.php';?>

<div id="loginModal" class="modal fade" role="dialog" xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <div class="form">
                    <ul class="tab-group">
                        <li class="tab active"><a href="#signup">Sign Up</a></li>
                        <li class="tab"><a href="#login">Log In</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="signup">
                            <h1>Sign Up for Free</h1>

                            <form action="register.php" method="POST">

                                <div class="top-row">
                                    <div class="field-wrap">
                                        <label>
                                            First Name<span class="req">*</span>
                                        </label>
                                        <input type="text" required name="fname" autocomplete="off"/>
                                    </div>

                                    <div class="field-wrap">
                                        <label>
                                            Last Name<span class="req">*</span>
                                        </label>
                                        <input type="text" required name="lname" autocomplete="off"/>
                                    </div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email" required name="email" autocomplete="off"/>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Set A Password<span class="req">*</span>
                                    </label>
                                    <input type="password" required name="password" autocomplete="off"/>
                                </div>

                                <input type="submit" name="Register" class="button button-block"/>


                            </form>

                        </div>

                        <div id="login">
                            <h1>Welcome Back!</h1>

                            <form action="login.php" method="post">

                                <div class="field-wrap">
                                    <label>
                                        Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email" required name="Lemail" autocomplete="off"/>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Password<span class="req">*</span>
                                    </label>
                                    <input type="password" name="Lpassword" required autocomplete="off"/>
                                </div>

                                <p class="forgot"><a href="#">Forgot Password?</a></p>

                                <input type="submit" name="Login" class="button button-block"/>

                            </form>

                        </div>

                    </div><!-- tab-content -->

                </div> <!-- /form -->
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .form {
        background: rgba(19, 35, 47, 0.9);
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }

    .tab-group {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
    }
    .tab-group:after {
        content: "";
        display: table;
        clear: both;
    }
    .tab-group li a {
        display: block;
        text-decoration: none;
        padding: 15px;
        background: rgba(160, 179, 176, 0.25);
        color: #a0b3b0;
        font-size: 20px;
        float: left;
        width: 50%;
        text-align: center;
        cursor: pointer;
        transition: .5s ease;
    }
    .tab-group li a:hover {
        background: #179b77;
        color: #ffffff;
    }
    .tab-group .active a {
        background: #1ab188;
        color: #ffffff;
    }

    .tab-content > div:last-child {
        display: none;
    }

    h1 {
        text-align: center;
        color: #ffffff;
        font-weight: 300;
        margin: 0 0 40px;
    }

    label {
        position: absolute;
        -webkit-transform: translateY(6px);
        transform: translateY(6px);
        left: 13px;
        color: rgba(255, 255, 255, 0.5);
        transition: all 0.25s ease;
        -webkit-backface-visibility: hidden;
        pointer-events: none;
        font-size: 22px;
    }
    label .req {
        margin: 2px;
        color: #1ab188;
    }

    label.active {
        -webkit-transform: translateY(50px);
        transform: translateY(50px);
        left: 2px;
        font-size: 14px;
    }
    label.active .req {
        opacity: 0;
    }

    label.highlight {
        color: #ffffff;
    }

    input, textarea {
        font-size: 22px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #a0b3b0;
        color: #ffffff;
        border-radius: 0;
        transition: border-color .25s ease, box-shadow .25s ease;
    }
    input:focus, textarea:focus {
        outline: 0;
        border-color: #1ab188;
    }

    textarea {
        border: 2px solid #a0b3b0;
        resize: vertical;
    }

    .field-wrap {
        position: relative;
        margin-bottom: 40px;
    }

    .top-row:after {
        content: "";
        display: table;
        clear: both;
    }
    .top-row > div {
        float: left;
        width: 48%;
        margin-right: 4%;
    }
    .top-row > div:last-child {
        margin: 0;
    }

    .button {
        border: 0;
        outline: none;
        border-radius: 0;
        padding: 15px 0;
        font-size: 2rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .1em;
        background: #1ab188;
        color: #ffffff;
        transition: all 0.5s ease;
        -webkit-appearance: none;
    }
    .button:hover, .button:focus {
        background: #179b77;
    }

    .button-block {
        display: block;
        width: 100%;
    }

    .forgot {
        margin-top: -20px;
        text-align: right;
    }

</style>
