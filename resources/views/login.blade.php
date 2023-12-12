<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous">
    </script>

    <title>Sign In & Sign Up Form</title>
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h2 class="title">Sign In</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    
                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign In with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </form>



                <form action="" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="email">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    
                    <input type="submit" value="Sign Up" class="btn solid">

                    <p class="social-text">Or Sign Up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </form>

            </div>

        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Welcome aboard! 🌟 If you're joining us for the first time, take the next step and create your account by clicking the button below."                        
                        "We're excited to have you become a part of our community. Let's embark on this journey together!"</p>

                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="{{ asset('backend/images/log.svg') }}" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>"Welcome to our community! 🎉 If you're already a valued member of our organization, simply tap or click the button below to access your account and dive right in."                        
                        "We're thrilled to have you as part of our team. Let's continue this exciting journey together!" </p>

                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="{{ asset('backend/images/register.svg') }}" class="image" alt="">
            </div>

        </div>

    </div>
    
    <script src="{{ asset('backend/js/app.js') }}">
    </script>

</body>
</html>