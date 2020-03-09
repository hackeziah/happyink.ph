
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | Add Product</title>
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
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Add Product</h4>
                                            <div class="container-fluid">
                                                <br>
                                                <div class="p-3 bg-white border rounded">
                                                    <div class="row">
                                                        <div class="col-md-10 offset-1">
                                                            {{-- <h4>Add Product</h4> --}}
                                                        </div>
                                                    </div>
                                                    <form id="addProduct" method="post" enctype="multipart/form-data">
                                                    <div class="row"  style="min-height:480px;">
                                                    <div class="col-md-8 offset-2">
                                                        <input type="hidden" name="_token" value="s9HHVWDzE4Iqq5yLF9LDYdEfFXtadYbetiWrXJZD">            <div class="col-md-6  mb-2">
                                                            <label for="Thumbnail">Image: </label>
                                                            <input type="file" class="form-control" name="Thumbnail" accept="image/*" required>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                            <label for="Productname">Product Name: </label>
                                                            <input type="text" class="form-control " name="Productname" required>
                                                            </div>
                                                            <div class="col-md-5 float-left mb-2">
                                                            <label for="Category">Category: </label>
                                                            <select name="Category" id="Category" required="required" class="form-control">
                                                                <option value="2">Baby 1</option>
                                                                <option value="1">Baby 2</option>
                                                                <option value="4">Rock</option>
                                                                <option value="5">Girl</option>
                                                                <option value="3">Boys</option>
                                                            </select>
                                                            </div>

                                                            <div class="col-md-3 float-left mb-2">
                                                            <label for="Size">Size: </label>
                                                                <select name="Size" id="size" required="required" class="form-control">
                                                                    <option value="325ml">70 X 70 cm</option>
                                                                    <option value="325ml">152.5 X 183 cm</option>
                                                                    <option value="1.75L">200 X 130 cm</option>
                                                                    <option value="1.75L">200 X 150 cm</option>
                                                                </select>
                                                             </div>
                                                            <div class="col-md-5 float-left mb-2">
                                                            <label for="Price">Price: </label>
                                                            <input type="number" min="1.00" max="10000.00"  step="0.01" name="Price" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-3 float-left mb-2">
                                                            <label for="Qty">Qty. : </label>
                                                            <input type="number" min="1" max="10000"  step="1" name="Qty" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-8 float-left mb-2">
                                                            <label for="Description">Description: </label>
                                                            <textarea name="Description" rows="4" name="Description"class="form-control" required></textarea>
                                                            </div>
                                                            <div class="col-md-4 float-left offset-5">
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                            <button type="button"  class="btn btn-secondary clr" name="button">Clear</button>
                                                            </div>
                                                    </div>
                                                </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                </div>
                        <!-- end row-->
            </div>
                @include('admin/layouts/footer');


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
