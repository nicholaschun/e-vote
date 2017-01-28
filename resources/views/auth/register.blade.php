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
                    <p>*Provide the information below</p>
                </span>
            <div class="login-form">
                <form>
                    <p><input name="name" type="text" placeholder="Full name"/></p>
                    <p><input name="organization" type="text" placeholder="Organization"/></p>
                    <p><input name="email" type="text" placeholder="Email address"/></p>
                    <p><input name="password" type="text" placeholder="password"/></p>
                    <p><input name="confirm-password" type="text" placeholder="confirm password"/></p>
                    <button><i class="fa fa-check"></i> Register</button>
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