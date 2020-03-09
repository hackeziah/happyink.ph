
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
                <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">

                                        </a>

                                    </div>

                                    <h4 class="header-title mt-0 mb-2">Customers</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="80" height="80" style="width: 64px; height: 64px;"></canvas>
                                                <input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#f05050 " data-bgcolor="#F9B9B9" value="" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(240, 80, 80); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> </h2>
                                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">

                                        </a>

                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Total Orders</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="80" height="80" style="width: 64px; height: 64px;"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#675db7" data-bgcolor="#e8e7f4" value="" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(103, 93, 183); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1">23 </h2>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">

                                        </a>

                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Total Product</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="80" height="80" style="width: 64px; height: 64px;"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#23b397" data-bgcolor="#c8ece5" value="" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(35, 179, 151); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> </h2>
                                                     </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">

                                        </a>

                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Total Sales</h4>

                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <div style="display:inline;width:64px;height:64px;"><canvas width="80" height="80" style="width: 64px; height: 64px;"></canvas><input data-plugin="knob" data-width="64" data-height="64" data-fgcolor="#ffbd4a" data-bgcolor="#FFE6BA" value="" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".15" readonly="readonly" style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(255, 189, 74); padding: 0px; -webkit-appearance: none;"></div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1">
                                                Php <span></span>
                                                {{-- @foreach ($total_sales as  $sales )
                                                        {{ $sales->total_sales }}
                                                @endforeach --}}
                                            </h2>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->


        @include('admin/layouts/js')
    </body>
</html>
