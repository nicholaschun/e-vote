@include('admin.includes.head')
@include('admin.includes.delete_confirmation')

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
                <div class="page-title">
                    <div class="title_left">
                        <h3>New Portfolio <small></small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Current portfolio <small>Portfolio</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                </p>
                                <table id="myTable" class="table table-striped table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>Portfolio Name</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($portfolio as $portfolio)
                                    <tr>
                                        <td>{{$portfolio->portfolio_name}}</td>
                                        <td>
                                            <form action="{{ url('/admin/portfolio',$portfolio->id)}}" method="post">
                                                <span><a class="btn btn-default" href="#"><i class="fa fa-edit"></i> Edit</a></span>

                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <span><button type="button"  class="btn btn-danger delete" data-toggle="modal" data-target="#confirmDelete" data-title="Delete User" data-message='Are you sure you want to delete this user ?'><i class="fa fa-trash-o"></i></button></span>


                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add new Portfolio <small></small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form action="/admin/portfolio" method="post" class="portfolio-form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-group col-lg-12">
                                        <label for="portfolio-name">Portfolio Name</label>
                                        <input  name="portfolio_name" class="form-control" placeholder="Name of portfolio eg.President">
                                    </div>
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i><b> Add portfolio</b></button>
                                    </div>
                                </form>

                            </div>
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