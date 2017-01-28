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
                <div class="page-title">
                    <div class="title_left">
                        <h3>Create Candidates <small></small></h3>
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
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Current portfolio <small>Portfolio</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                </p>
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Candidate Portfolio</th>
                                        <th>Name of Candidate</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    @if(!empty($candidate))
                                    @foreach($candidate as $candidate)
                                    <tr>
                                        <td>{{$candidate->porfolio_id}}</td>
                                        <td>{{$candidate->full_name}}</td>
                                        <td>
                                            <form action="{{ url('/admin/candidate',$candidate->id)}}" method="post">
                                                <span><a class="btn btn-default" href="#"><i class="fa fa-edit"></i> Edit</a></span>

                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <span><button type="submit" class="btn btn-danger delete"><i class="fa fa-trash-o"></i></button></span>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Create new Candidates <small></small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form action="{{url ('/admin/candidate')}}" method="post" class="candidate-form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-group col-lg-12">
                                        <label for="portfolio-name">Name of Candidate <span class="required">*</span></label>
                                        <input name="full_name" class="form-control" placeholder="Name of candidate">
                                    </div>
                                    <br/>
                                    <div class="input-group col-lg-12">
                                        <label for="portfolio-name">Select a portfolio <span class="required">*</span></label>
                                        <select name="select_portfolio"  class="form-control" id="">
                                            <option value="">-- Select one portfolio --</option>
                                            @foreach($portfolio as $portfolio)
                                            <option value="{{$portfolio->id}}">{{ $portfolio->portfolio_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="input-group col-lg-12">
                                        <label for="portfolio-name">Select an image
                                            <span class="required">*</span></label><br>

                                        <div class="fileUpload btn btn-default">
                                        <span><i class="fa fa-upload"></i> Select an Image</span>
                                            <article class="styled">
                                            <input type="file" class="upload"  onchange="previewImage(this,[256],4);" />
                                                <div class="imagePreview"></div>
                                            </article>
                                    </div>

                                    </div>
                                    <br/>

                                    <div class="input-group">
                                        <button  type="submit" class="btn btn-success"><i class="fa fa-plus"></i><b> Create Candidate</b></button>
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