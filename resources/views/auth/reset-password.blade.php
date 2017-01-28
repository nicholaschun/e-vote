@include('front.includes.head')

<body>
<header>

</header>
<div class="container">
    <div class="col-lg-12">

        <div class="col-lg-7 image-container">

        </div>
        <div class="col-lg-4 login-container">
            <div class="login-heading">
                <h4>Easy Vote</h4>
            </div>
                <span class="login-info">
                    <p>*Provide your email address</p>
                </span>
            <div class="login-form">
                <form>
                    <p><input type="text" placeholder="Email address"/></p>
                    <button style="width: 100%"><i class="fa fa-lock"></i> Send reset link</button>
                </form>
                <div class="link-register">
                    <p>I have an account </p>
                    <p><span class="register-link"><a href="login"><i class="fa fa-lock"></i> Login</a></span></p>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!-- footer content -->
@include('front.includes.footer')
<!-- /footer content -->