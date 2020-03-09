<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Happyink | Orders</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <link rel="shortcut icon" href="images/booksif.ico"/> --}}

        @include('admin/layouts/links')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin/layouts/sidebar')

            <div class="content-page">
                     <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maintenance</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Orders</h4>
                                </div>
                            </div>
                    </div>

                <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Orders</h4>

                                        <table id="basic-datatable" class="table dt-responsive nowrap" style="width:98%;display:block;margin:auto">
                                            <thead>
                                                <tr>
                                                    <th width="10%">ID</th>
                                                    <th width="15%">Customer Name</th>
                                                    <th width="10%">Contact</th>
                                                    <th width="15%">Address</th>
                                                    <th width="30%">Product Ordered</th>
                                                    <th width="10%">Status</th>
                                                    <th width="15%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              {{-- @foreach ($orders as $item) --}}
                                                <tr>
                                                    {{-- `order_id`, ``, `cart`, `street_address`, `province`, `city`, `zip`, `mobile_no`, `barangay`, `trash`, `created_at`, `updated_at` --}}
                                                    {{-- <td>{{ $item->order_id }}</td>
                                                    <td>{{ $item->user_id }}</td>
                                                    <td>{{ $item->mobile_no}}</td>
                                                    <td>{{ $item->address}}</td> --}}
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><textarea style="width: 85%; height: 150px; padding: 12px 20px; box-sizing: border-box;border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8; resize: none;">
                                                    {{-- {{ $item->cart }} --}}
                                                    </textarea></td>
                                                   <td>

                                                        <?php
                                                                // if($item->status== 'Delivered'){
                                                                //      echo ' <span class="badge badge-success">Delivered</span>';
                                                                // }
                                                                // if($item->status=='Canceled'){
                                                                //      echo ' <span class="badge badge-danger">Canceled</span>';
                                                                // }
                                                                //  if($item->status=='Request'){
                                                                //      echo ' <span class="badge badge-primary">Request</span>';
                                                                // }
                                                            ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-info waves-effect waves-light" style="background:#49cd6e"><i class="la la-eye"></i>
                                                            <input type="hidden" id="order_id" name="order_id" value="">


                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light"style="background:#00bfbf" id="delOrder"><i class="la la la-truck"></i>
                                                            <input type="hidden" id="order_id" name="order_id" value="">
                                                    </button>

                                                    <button type="button" class="btn btn-danger waves-effect waves-light"style="background:#ff0040" id="cancelOrder"><i class="la la la-remove"></i>
                                                            <input type="hidden" id="order_id" name="order_id" value="">
                                                    </button>
                                                </td>
                                                </tr>
                                              {{-- @endforeach --}}
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        @include('admin/layouts/footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
                @include('admin/layouts/js')
        {{-- <script> --}}

    </body>
</html>
