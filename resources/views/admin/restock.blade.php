
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | Restock</title>
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

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                     <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maintenance</a></li>
                                            <li class="breadcrumb-item active">Restock</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Stocks</h4>
                                </div>
                            </div>
                    </div>

                <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Restock</h4>

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="">Image</th>
                                                    <th width="">Name</th>
                                                    <th width="">Category</th>
                                                    <th width="">Stock</th>
                                                    <th width="" >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($categories as $item) --}}
                                                     <tr>
                                                        <td><img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket1</td>
                                                        <td>Bsby 1</td>
                                                        <td>23</td>
                                                        <td align="center">
                                                            <button type="button" id="addStock" class="btn btn-primary waves-effect waves-light"><i class="la la-plus"></i></button>
                                                            <input type="hidden" id="category_id" name= "category_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>
                                                     <tr>
                                                        <td><img src="users/neha/assets/img/quick-view/qv2.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket1</td>
                                                        <td>Bsby 1</td>
                                                        <td>23</td>
                                                        <td align="center">
                                                            <button type="button" id="addStock" class="btn btn-primary waves-effect waves-light"><i class="la la-plus"></i></button>
                                                            <input type="hidden" id="category_id" name= "category_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                        <tr>
                                                        <td><img src="users/neha/assets/img/quick-view/qv3.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket1</td>
                                                        <td>Bsby 1</td>
                                                        <td>23</td>
                                                        <td align="center">
                                                            <button type="button" id="addStock" class="btn btn-primary waves-effect waves-light"><i class="la la-plus"></i></button>
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
                    @include('admin/layouts/footer');

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        @include('admin/layouts/js')



<script type="text/javascript">
//
$(document).on('click', '#addStock', function(){
    $('#addStockModal').modal('show');
    // alert("ksksksk");
//   alert(id);

});
//
    // add
		// $('#category-form').on('submit', function (e) {
		// 	e.preventDefault(e);
		// 	// var category = $('#category_id').val();
		// 	var description = $('#description').val();
		// 	var name = $('#name').val();

		// if (name == '' || description == ''){

		// 	   Swal.fire({
		// 		type: 'error',
		// 		title: 'Oops...',
		// 		text: 'Please fill All Field!',
		// 		});

		// 	}else {

		// 		Swal.fire({
		// 			title: "Are you sure?",
		// 			text: "You are about to add a new category",
		// 			icon: "warning",
		// 			buttons: true,
		// 			dangerMode: true,
		// 			showCancelButton: true,
		// 			confirmButtonColor: '#3085d6',
		// 			cancelButtonColor: '#d33',
		// 			confirmButtonText: 'Done'
		// 		}).then((result) => {
		// 			if (result.value) {

		// 				$.ajax({
		// 					url: "{{ route('categorysave')}}",
		// 					method: 'post',
        //                     data: {name: name,description: description, _token: '{{csrf_token()}}'},
		// 					contentType: false,
		// 					cache: false,
		// 					processData: false,
		// 					success: function (data) {
		// 					window.location.reload(true);
		// 					}
		// 				})
		// 				Swal.fire(
		// 					'Done',
		// 					'New Category was added.',
		// 					'success'
		// 				)

		// 			}

		// 		})
		// 	}

		// })
        // add
    </script>


    </body>

    <div class="modal fade bs-example-modal-sm show" id="addStockModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Restock the Item</h4>
                    <button type="button" id="addStock" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        @csrf
                        <input type="hidden" id="Edit-id" name= "id">
                        <div class="form-group">
                                <label for="role">Stock</label>

                                <div class="form-group mb-12">
                                    <input type="text" id="simpleinput" class="form-control">

                            </div>

                        </div>
                        <div>
                            <button class="btn btn-primary btn-block" id="updateSave" type="submit">ADD STOCK </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</html>
