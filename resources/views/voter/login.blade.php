@include('front.includes.head')

<body style="background-color: #f7f7f7">
<header>

</header>
<div class="container">
    <div class="col-lg-12">

        <div class="col-lg-6 image-container ">


        </div>
        <div class="col-lg-4 voter-login-container" style="margin-top: 130px">
            <div class="login-heading">
                <h4>Easy Vote</h4>
            </div>
                <span class="login-info">
                    <p style="font-size: 15px;font-weight: bold">*Enter your ID number and password</p>
                </span>
            <div class="voter-login-form">
                <form>
                    <p><input  type="text" placeholder="ID  number"/></p>
                    <p><input type="text" placeholder="password"/></p>
                    <button><i class="fa fa-lock"></i> Login</button>
                </form>

            </div>
        </div>
    </div>
</div>
</body>

<!-- footer content -->
@include('front.includes.footer')
<!-- /footer content -->