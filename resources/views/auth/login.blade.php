@include('front.includes.head')

<body>
    <header>

    </header>
        <div class="container">
            <div class="col-lg-12">

            <div class="col-lg-7 image-container ">
                <p class="animate fadeInUp">Enjoy a new experience in electronic voting.
                Register in few steps to create your portfolio and voters register.</p>
                <p><a class="btn btn-danger" href="about">Read more</a></p>

            </div>
            <div class="col-lg-4 login-container">
                <div class="login-heading">
                    <h4>Easy Vote</h4>
                </div>
                <span class="login-info">
                    <p>*Login with your credentials</p>
                </span>
                <div class="login-form">
                    <form>
                       <p><input type="text" placeholder="Email address"/></p>
                       <p><input type="text" placeholder="password"/></p>
                        <button><i class="fa fa-lock"></i> Login</button>
                        <span class="reset-password"><a href="reset-password">Reset password</a></span>
                    </form>
                    <div class="link-register">
                        <p>Don't have an account </p>
                        <p><span class="register-link"><a href="register"><i class="fa fa-user"></i> Register</a></span></p>

                    </div>
                </div>
            </div>
        </div>
        </div>
</body>

<!-- footer content -->
@include('front.includes.footer')
<!-- /footer content -->