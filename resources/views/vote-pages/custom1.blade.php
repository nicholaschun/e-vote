@include('front.includes.head2')

<body style="background-color: #f7f7f7">
<header>

</header>
<div class="row" >
    <h3 style="text-align: center">Portfolio Name</h3>
    <div class="col-lg-12">

        <div class="col-lg-2 vote-summary ">
        <div>
         <h4><i class="fa fa-paperclip"></i> Vote Summary</h4>
            <p><i class="fa fa-check"></i> Name of portfolio</p>
            <p><b>Candidate name</b></p>

            <p><i class="fa fa-check"></i> Name of portfolio</p>
            <p><b>Candidate name</b></p>
        </div>

        </div>
        <div class="col-lg-9 display-candidate">
            <div class="col-lg-1 image-box">
                <span><img src="{{ asset('/assets/img/candidate-image.png')}}" </span>
                <p class="candidate-name">
                    Name of candidate
                </p>
                <span>
                    <button class="vote-button btn btn-success hvr-grow"> <i class="fa fa-thumbs-o-up"></i> Vote</button>
                </span>
            </div>





        </div>
        <div class="container">
        <div class="skip-button" align="center" >
       <button class="btn btn-danger"><i class="fa fa-arrow-circle-right"></i> Skip</button>

        <p class="logged-in-user">Logged in as: Name of logged in user</p>
        </div>
        </div>

    </div>
</div>
</body>

<!-- footer content -->
@include('front.includes.footer')
<!-- /footer content -->