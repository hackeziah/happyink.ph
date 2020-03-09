<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Itemsif | Items Info</title>
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
                                            <li class="breadcrumb-item active">Items</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Items</h4>
                                </div>
                            </div>
                    </div>


                <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Items</h4>

                                        <table id="basic-datatable" class="table dt-responsive nowrap" style="width:98%;display:block;margin:auto">
                                            <thead>
                                                <tr>
                                                    <th width="10%">ID</th>
                                                    <th width="10%">Category</th>
                                                    <th width="10%">Name</th>
                                                    <th width="10%">Image</th>
                                                    <th width="10%">Price</th>
                                                    <th width="10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach($allItems as $key => $data) --}}
                                                    <tr>
                                                        <td>3434</td>
                                                        <td>tests</td>
                                                        <td>MLs;dfsdf</td>
                                                        <td>
                                                        <img height="150" width="80" class="rounded-square" src="" alt="">
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                        <button type="button" id="editItems" class="btn btn-info waves-effect waves-light" style="background:#49cd6e">
                                                            <i class="mdi mdi-pencil"></i>
                                                            <input type="hidden" id="modal-product_id" name= "video" value="">
                                                            <input type="hidden" id="modal-category" name= "video" value="">
                                                            <input type="hidden" id="modal-name" name= "name" value="">
                                                            <input type="hidden" id="modal-price" name= "price" value="">
                                                            <input type="hidden" id="modal-author_name" name= "author_name" value="">
                                                            <input type="hidden" id="modal-date_publish" name= "date_publish" value="">
                                                            <input type="hidden" id="modal-synposis" name= "synposis" value="">
                                                        </button>
                                                        <button type="button" id="deleteBook" class="btn btn-danger waves-effect waves-light"style="background:#dc4242"><i class="mdi mdi-trash-can"></i>
                                                        <input type="hidden" id="product_id" name="product_id" value="">
                                                        </button></td>
                                                    </tr>
                                                {{-- @endforeach --}}
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-4">
                                 <div class="card">
                                    <div class="card-body">`
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Add</h4>
                                        <form action="POST" id="form-items" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name">Book Name</label>
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter your Book Title" >
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Category</label>

                                                        {{-- <select id ="category_id" name= "category_id" class="form-control">
                                                            @foreach ($cat as $value )
                                                                <option value="{{ $value->category_id }}"> {{ $value->category_name }}</option>
                                                            @endforeach
                                                        </select> --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Price</label>
                                                <input class="form-control" type="text" id="price" name="price"  placeholder="Enter your Price">
                                            </div>

                                            <div class="form-group">
                                                <label for="author_name">Author Name</label>
                                                <input class="form-control" type="text" id="author_name" name="author_name"  placeholder="Enter your Author Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="date-pub">Date Publish</label>
                                                <input class="form-control" type="date" id="date_publish" name="date_publish" >
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input class="form-control" type="file" id="image" name="image" >
                                            </div>


                                            <div class="form-group">
                                                <label for="image">Synposis</label>
                                                <textarea class="form-control" id="synposis" name="synposis" >
                                                </textarea>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-danger btn-block" type="submit">Add Book </button>
                                            </div>
                                        </form>
                                    </div>
                                 </div>
                            </div>
                </div>
                        <!-- end row-->

                <!-- Footer Start -->
              @include('admin/layouts/footer');

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <!-- Right bar overlay-->
                @include('admin.layouts/js')
        {{-- <script> --}}
        {{-- <script type="text/javascript">
             // delete
                $(document).on('click', '#deleteBook', function(){
                var product_id = $(this).find('#product_id').val();
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                if (willDelete.value) {

                    $.ajax({
                    url: "{{ route('booktrash')}}",
                    method: 'post',
                    data: {product_id: product_id},
                    success: function(data){
                    Swal.fire(
                        'Deleted!',
                        'The file has been deleted.',
                        'success'
                        )
                        window.location.reload();
                    }
                    });
                }
                });
                });
            // // delete

		// add
		$('#form-items').on('submit', function (e) {
			e.preventDefault(e);
			var name = $('#name').val();
			var price = $('#price').val();
			var image = $('#image').val();
			var author_name = $('#author_name').val();
			var category_id = $('#category_id').val();
			var synposis = $('#synposis').val();
			var date_publish = $('#date_publish').val();


		if (name == '' || price == '' || image == ''|| author_name == '' || category_id == ''|| synposis == '' || date_publish == ''){

			   Swal.fire({
				type: 'error',
				title: 'Oops...',
				text: 'Please fill All Field!',
				});

			}else {

				Swal.fire({
					title: "Are you sure?",
					text: "You are about to add a new Book",
					icon: "warning",
					buttons: true,
					dangerMode: true,
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Done'
				}).then((result) => {
					if (result.value) {

						$.ajax({
							url: "{{ route('itemsave')}}",
							method: 'post',
							data: new FormData(this),
							contentType: false,
							cache: false,
							processData: false,
							success: function (data) {
							window.location.reload(true);
							}
						})
						Swal.fire(
							'Done',
							'Book was added.',
							'success'
						)

					}

				})
			}

		})
		// add

    // EDIT
	$(document).on('click', '#editItems', function(){
				$('#Edit-product_id').val($(this).find('#modal-product_id').val());
				$('#Edit-category').val($(this).find('#modal-category').val());
				$('#Edit-name').val($(this).find('#modal-name').val());
				$('#Edit-price').val($(this).find('#modal-price').val());
				// $('#Edit-image').val($(this).find('#modal-image').val());
				$('#Edit-author_name').val($(this).find('#modal-author_name').val());
				$('#Edit-date_publish').val($(this).find('#modal-date_publish').val());
				$('#Edit-synposis').val($(this).find('#modal-synposis').val());

				$('#editItemsModal').modal('show');
			});

    // EDIT

    //update

		$('#form-update').on('submit', function (e) {
			e.preventDefault(e);

        var product_id = $('#Edit-product_id').val();
        var name = "sammsms";
        var price = $('#Edit-price').val();
        var author_name = $('#Edit-author_name').val();
        var date_publish = $('#Edit-date_publish').val();
        var image = $('#Edit-image').val();
        var category_id = $('#Edit-category');
        var synposis = $('#Edit-synposis').val();
            alert(name);

        });
//update


        </script> --}}

</body>


	<div class="modal fade" id="editItemsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">Update Book</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body px-4">
                                        <form action="" id="form-update" enctype="multipart/form-data">

								<input type="hidden" class="form-control" id="Edit-product_id"value="">
								<div class="box-body">
									<div class="form-group">
									    <label for="Book-title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="Edit-name" placeholder="Enter Title Book">
										</div>
									</div>

                                    <div class="form-group">
									    <label for="price-title" class="col-sm-2 control-label">Category</label>
										<div class="col-sm-12">
											 <select id ="Edit-category" name= "category_id" class="form-control">

                                                 {{-- @foreach ($cat as $value )
                                                    <option value="{{ $value->category_id }}"> {{ $value->category_name }}</option>
                                                 @endforeach --}}

                                            </select>
										</div>
									</div>


									<div class="form-group">
									    <label for="price-title" class="col-sm-2 control-label">Price</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="Edit-price" placeholder="Enter Book Price">
										</div>
									</div>


									<div class="form-group">
									    <label for="author-title" class="col-sm-2 control-label">Authour Name</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="Edit-author_name" placeholder="Enter Author Name">
										</div>
									</div>

									<div class="form-group">
									    <label for="date_publish-title" class="col-sm-2 control-label">Date Publish</label>
										<div class="col-sm-12">
											<input type="date" class="form-control" id="Edit-date_publish" placeholder="Enter Date Publish">
										</div>
									</div>



									<div class="form-group">
										<div>
											<label for="image" class="col-sm-1 control-label">Image</label>
											   <div class="col-sm-12">
													  <input type="file" id="Edit-image" name = "image" class="form-control" placeholder="Enter Image File">
												</div>
										</div>
									</div>

                                    <div class="form-group">
									    <label for="date_publish-title" class="col-sm-2 control-label">Synposis</label>
										<div class="col-sm-12">
											<textarea class="form-control" id="Edit-synposis" placeholder="Enter Synposis">
											</textarea>
										</div>
									</div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-danger btn-block" type="submit">Update Book </button>

                            </div>
				</div>
                </form>
			</div>
	</div>

</html>
