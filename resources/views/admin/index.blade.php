@include('admin.includes.head')

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('admin.includes.side_up')
                <br />

                <!-- sidebar menu -->
                @include('admin.includes.side')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>

                    <a href="{{url('auth/logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            @include('admin.includes.top_header')
            <div class="message-container">
                @include('admin.includes.messages')
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="tile-stats">
                         <div class="icon"><i class="fa fa-users"></i></div>
                         <div class="count">179</div>
                         <h3>Accounts</h3>
                         <p>Available accounts on platform</p>
                       </div>
                     </div>


                </div>







            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.includes.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
@include('admin.includes.scripts')



</body>
</html>