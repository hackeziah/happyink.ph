
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | Manage Product</title>
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
                                            <li class="breadcrumb-item active">Manage Product</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manage Product</h4>
                                </div>
                            </div>
                    </div>

                <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">All Product</h4>

                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline">
                                            <thead>
                                                <tr>
                                                    <th width="">Image</th>
                                                    <th width="">Name</th>
                                                    <th width="">Category</th>
                                                    <th width="">Price</th>
                                                    <th width="" >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($categories as $item) --}}
                                                     <tr>
                                                        <td><img src="users/neha/assets/img/shop/shop-grid-1/sh1.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket1</td>
                                                        <td>Baby 1</td>
                                                        <td>230.00</td>
                                                        <td>
                                                            <button type="button" id="editProduct" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteProduct" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>

                                                        </td>
                                                     </tr>
                                                     <tr>
                                                        <td><img src="users/neha/assets/img/shop/shop-grid-1/sh2.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket 2</td>
                                                        <td>Baby 2</td>
                                                        <td>400.00</td>
                                                        <td>
                                                          <button type="button" id="editProduct" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteProduct" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                     <tr>
                                                        <td><img src="users/neha/assets/img/shop/shop-grid-1/sh3.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket3</td>
                                                        <td>Baby 3</td>
                                                        <td>315.00</td>
                                                        <td>
                                                            <button type="button" id="editProduct" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteProduct" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                      <tr>
                                                        <td><img src="users/neha/assets/img/shop/shop-grid-1/sh4.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket 4</td>
                                                        <td>Baby 2 1</td>
                                                        <td>230.00</td>
                                                        <td>
                                                            <button type="button" id="editProduct" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteProduct" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                     <tr>
                                                        <td><img src="users/neha/assets/img/shop/shop-grid-1/sh5.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket 5</td>
                                                        <td>Baby 1</td>
                                                        <td>243.00</td>
                                                        <td>
                                                            <button type="button" id="editProduct" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteProduct" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                     <tr>
                                                        <td><img src="users/neha/assets/img/shop/shop-grid-1/sh6.jpg" alt="" width="100" heigh="112"> </td>
                                                        <td>Blanket Bb</td>
                                                        <td>Baby 3</td>
                                                        <td>230.00</td>
                                                        <td>
                                                            <button type="button" id="editProduct" class="btn btn-primary waves-effect waves-light"><i class="fe-edit"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteProduct" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button>
                                                            <input type="hidden" id="product_id" name= "product_id" value="">
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
$(document).on('click', '#editProduct', function(){
    $('#editProductModal').modal('show');
    // alert("ksksksk");
//   alert(id);

});


$(document).on('click','#deleteProduct', function(){
	// var id = $(this).attr('id');
	Swal.fire({
		title: 'Are you sure?',
		text: "This record will be trash.",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonColor: '#B0AEAE',
		confirmButtonText: 'Confirm'
	}).then((result) => {
		if (result.value) {
			$.ajax({
					type: 'DELETE',
					url: "",
					success:function(data){
						if(data.success){
							toastr.success(data.success, 'Success!');
						}
							window.location.reload(true);
                        // 	Swal.fire(
						// 	'Done',
						// 	'Record was trash.',
						// 	'success'
						// )


					}
			});
		}
	});
});

//
    // add
		// $('#category-form').on('submit', function (e) {
		// 	e.preventDefault(e);
		// 	// var category = $('#product_id').val();
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

    <div class="modal fade bs-example-modal-sm show" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Manage Product the Item</h4>
                    <button type="button" id="addStock" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                    <form id="editProdForm" method="post" role="form" class="form-horizontal">
                        <div class="modal-body">
                            <input type="hidden" name="_method" value="PUT"> <div class="col-md-8 offset-2 mb-2">
                            <label for="Productname">Product Name: </label>
                             <input type="text" name="Productname" value="Sample Blanket"id="Productname" required="required" class="form-control "></div>
                            <div class="col-md-5 offset-2 mb-2"><label for="Category">
                            Category: </label>
                            <select name="Category" id="Category" required="required" class="form-control">
                                <option value="2">Baby 1</option>
                                <option value="1">Baby 2</option>
                                <option value="4">Rock</option>
                                <option value="5">Girl</option>
                                <option value="3">Boys</option>
                              </select>
                              </div>
                            <div class="row col-md-3 offset-2 mb-2"><label for="Size">
                            Size: </label>
                                <select name="Size" id="size" required="required" class="form-control">
                                    <option value="325ml">70 X 70 cm</option>
                                    <option value="325ml">152.5 X 183 cm</option>
                                    <option value="1.75L">200 X 130 cm</option>
                                    <option value="1.75L">200 X 150 cm</option>
                                 </select>
                                </div>
                                 <div class="col-md-4 offset-2 mb-2">
                         <label for="Price">Price: </label>
                         <input type="number" min="1.00" max="" step="0.01" id="price" value="300.00" name="Price" required="required" class="form-control"></div>
                             <div class="col-md-8 offset-2 mb-2">
                            <label for="Description">Description: </label>
                             <textarea name="Description" rows="4" id="Description" required="required" class="form-control">
                             This is blanket classic came from africa.
                             </textarea></div></div>
                             <div class="modal-footer">
                            <input type="submit" value="Update" class="btn btn-warning uptProd" id="5d918ebdb7a5b">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>


</html>
