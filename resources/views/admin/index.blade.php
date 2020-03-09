
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <link rel="shortcut icon" href="images/booksif.ico"/> --}}
        <!-- third party css -->
        @include('admin/layouts/links')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            {{-- Sidebar --}}
             @include('admin/layouts/sidebar');

            {{-- Sidebar --}}
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
               <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Dashboard </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-2">New Customers</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="64" height="64"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#f05050 " data-bgcolor="#F9B9B9" value="58" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(240, 80, 80); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> 268 </h2>
                                            <p class="text-muted mb-0">Since last week</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Online Orders</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="64" height="64"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#675db7" data-bgcolor="#e8e7f4" value="80" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(103, 93, 183); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> 8715 </h2>
                                            <p class="text-muted mb-0">Since last month</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Revenue</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="64" height="64"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#23b397" data-bgcolor="#c8ece5" value="77" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(35, 179, 151); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> Php 925 </h2>
                                            <p class="text-muted mb-0">This week</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Daily Average</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="64" height="64"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#ffbd4a" data-bgcolor="#FFE6BA" value="35" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(255, 189, 74); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> Php 78.58 </h2>
                                            <p class="text-muted mb-0">Revenue today</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Earning Reports</h4>
                                    <p class="text-muted">1 Mar - 31 Mar Showing Data</p>
                                    <h2 class="mb-4"><i class="mdi mdi-currency-usd text-primary"></i>25,632.78</h2>

                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <p class="text-muted mb-1">This Month</p>
                                            <h3 class="mt-0 font-20">Php 120,254 <small class="badge badge-light-success font-13">+15%</small></h3>
                                        </div>

                                        <div class="col-6">
                                            <p class="text-muted mb-1">Last Month</p>
                                            <h3 class="mt-0 font-20">Php 98,741 <small class="badge badge-light-danger font-13">-5%</small></h3>
                                        </div>
                                    </div>

                                    <h5 class="font-16"><i class="mdi mdi-chart-donut text-primary"></i> Weekly Earning Report</h5>

                                    <div class="mt-5">
                                        <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="80" style="display: none;">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span><svg class="peity" height="80" width="100%"><rect data-value="5" fill="#f7b84b" x="1.3542814814814816" y="35.55555555555556" width="10.83425185185185" height="44.44444444444444"></rect><rect data-value="3" fill="#ebeff2" x="14.897096296296297" y="53.333333333333336" width="10.83425185185185" height="26.666666666666664"></rect><rect data-value="9" fill="#f7b84b" x="28.439911111111112" y="0" width="10.83425185185185" height="80"></rect><rect data-value="6" fill="#ebeff2" x="41.982725925925926" y="26.66666666666667" width="10.834251851851846" height="53.33333333333333"></rect><rect data-value="5" fill="#f7b84b" x="55.52554074074074" y="35.55555555555556" width="10.83425185185186" height="44.44444444444444"></rect><rect data-value="9" fill="#ebeff2" x="69.06835555555556" y="0" width="10.83425185185186" height="80"></rect><rect data-value="7" fill="#f7b84b" x="82.61117037037037" y="17.77777777777778" width="10.83425185185186" height="62.22222222222222"></rect><rect data-value="3" fill="#ebeff2" x="96.15398518518519" y="53.333333333333336" width="10.834251851851846" height="26.666666666666664"></rect><rect data-value="5" fill="#f7b84b" x="109.6968" y="35.55555555555556" width="10.83425185185186" height="44.44444444444444"></rect><rect data-value="2" fill="#ebeff2" x="123.23961481481481" y="62.22222222222222" width="10.83425185185186" height="17.77777777777778"></rect><rect data-value="9" fill="#f7b84b" x="136.78242962962963" y="0" width="10.83425185185186" height="80"></rect><rect data-value="7" fill="#ebeff2" x="150.32524444444445" y="17.77777777777778" width="10.83425185185186" height="62.22222222222222"></rect><rect data-value="2" fill="#f7b84b" x="163.86805925925927" y="62.22222222222222" width="10.83425185185186" height="17.77777777777778"></rect><rect data-value="1" fill="#ebeff2" x="177.4108740740741" y="71.11111111111111" width="10.83425185185186" height="8.888888888888886"></rect><rect data-value="3" fill="#f7b84b" x="190.9536888888889" y="53.333333333333336" width="10.834251851851832" height="26.666666666666664"></rect><rect data-value="5" fill="#ebeff2" x="204.4965037037037" y="35.55555555555556" width="10.83425185185186" height="44.44444444444444"></rect><rect data-value="2" fill="#f7b84b" x="218.03931851851854" y="62.22222222222222" width="10.834251851851803" height="17.77777777777778"></rect><rect data-value="9" fill="#ebeff2" x="231.58213333333336" y="0" width="10.834251851851803" height="80"></rect><rect data-value="7" fill="#f7b84b" x="245.12494814814818" y="17.77777777777778" width="10.834251851851832" height="62.22222222222222"></rect><rect data-value="2" fill="#ebeff2" x="258.66776296296297" y="62.22222222222222" width="10.834251851851832" height="17.77777777777778"></rect><rect data-value="5" fill="#f7b84b" x="272.2105777777778" y="35.55555555555556" width="10.834251851851832" height="44.44444444444444"></rect><rect data-value="3" fill="#ebeff2" x="285.7533925925926" y="53.333333333333336" width="10.834251851851832" height="26.666666666666664"></rect><rect data-value="9" fill="#f7b84b" x="299.29620740740745" y="0" width="10.834251851851775" height="80"></rect><rect data-value="6" fill="#ebeff2" x="312.8390222222223" y="26.66666666666667" width="10.834251851851718" height="53.33333333333333"></rect><rect data-value="5" fill="#f7b84b" x="326.38183703703703" y="35.55555555555556" width="10.834251851851832" height="44.44444444444444"></rect><rect data-value="9" fill="#ebeff2" x="339.9246518518519" y="0" width="10.834251851851775" height="80"></rect><rect data-value="7" fill="#f7b84b" x="353.46746666666667" y="17.77777777777778" width="10.834251851851832" height="62.22222222222222"></rect></svg>
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-xl-8">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-3">Transaction History</h4>

                                    <div class="table-responsive">
                                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-centered table-borderless table-hover mb-0 dataTable no-footer" id="datatable" role="grid" aria-describedby="datatable_info">
                                            <thead class="thead-light">
                                            <tr role="row"><th class="border-top-0 sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 222.406px;">Name</th><th class="border-top-0 sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Card: activate to sort column ascending" style="width: 131.406px;">Card</th><th class="border-top-0 sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 71.4063px;">Date</th><th class="border-top-0 sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 85.4063px;">Amount</th><th class="border-top-0 sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 74.4063px;">Status</th></tr>
                                            </thead>
                                            <tbody>










                                            <tr role="row" class="odd">
                                                <td class="sorting_1">
                                                    <img src="admin/light/dist/assets/images/users/user-9.jpg" alt="user-pic" class="rounded-circle avatar-sm">
                                                    <span class="ml-2">Beatrice L. Iacovelli</span>
                                                </td>
                                                <td>
                                                    <img src="admin/light/dist/assets/images/cards/discover.png" alt="user-card" height="24">
                                                    <span class="ml-2">**** 9058</span>
                                                </td>
                                                <td>29.03.2018</td>
                                                <td>Php 6,542.32</td>
                                                <td><span class="badge badge-pill badge-success">Paid</span></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">
                                                    <img src="admin/light/dist/assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm">
                                                    <span class="ml-2">Dolores J. Pooley</span>
                                                </td>
                                                <td>
                                                    <img src="admin/light/dist/assets/images/cards/american-express.png" alt="user-card" height="24">
                                                    <span class="ml-2">**** 6950</span>
                                                </td>
                                                <td>29.03.2018</td>
                                                <td>Php 2,005.89</td>
                                                <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">
                                                    <img src="admin/light/dist/assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm">
                                                    <span class="ml-2">Francisca S. Lobb</span>
                                                </td>
                                                <td>
                                                    <img src="admin/light/dist/assets/images/cards/master.png" alt="user-card" height="24">
                                                    <span class="ml-2">**** 8451</span>
                                                </td>
                                                <td>28.03.2018</td>
                                                <td>Php 1,250</td>
                                                <td><span class="badge badge-pill badge-success">Paid</span></td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">
                                                    <img src="admin/light/dist/assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm">
                                                    <span class="ml-2">Imelda J. Stanberry</span>
                                                </td>
                                                <td>
                                                    <img src="admin/light/dist/assets/images/cards/visa.png" alt="user-card" height="24">
                                                    <span class="ml-2">**** 3256</span>
                                                </td>
                                                <td>27.03.2018</td>
                                                <td>Php 345.98</td>
                                                <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                            </tr></tbody>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 4 of 10 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                                    </div> <!-- end table-responsive -->

                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                        </div>
                        <!-- end row -->

                    </div>
            </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->


        @include('admin/layouts/js')
    </body>
</html>
