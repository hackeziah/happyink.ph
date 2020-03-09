
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | Category</title>
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
                                            <li class="breadcrumb-item active">Category</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Category</h4>
                                </div>
                            </div>
                    </div>

                <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Category</h4>

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="15%">ID</th>
                                                    <th width="35%">Category</th>
                                                    <th width="25%">Description</th>
                                                    <th width="25%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $item)
                                                     <tr>
                                                     <td>{{ $item->category_id }}</td>
                                                     <td>{{ $item->name }}</td>
                                                     <td>{{ $item->description }}</td>

                                                        <td><button type="button" id="editCategory" class="btn btn-info waves-effect waves-light" style="background:#49cd6e"><i class="mdi mdi-pencil"></i>

                                                        	<input type="hidden" id="modal-cat_id" name= "video" value="">
                                                            <input type="hidden" id="modal-cat_name" name= "video" value="">
														    <input type="hidden" id="modal-description" name= "description" value="">
                                                        </button>
                                                        <button type="button" id="deleteCategory" class="btn btn-danger waves-effect waves-light"style="background:#dc4242"><i class="mdi mdi-trash-can"></i>
                                                        <input type="hidden" id="category_id" name= "category_id" value="{{ $item->category_id }}">
                                                        </button></td>
                                                     </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                            <div class="col-4">
                                 <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">Add</h4>
                                    <form action="{{ route('categorysave')}}" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                            <div class="form-group">
                                                <label for="name">Category </label>
                                                <input class="form-control" type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Category Name" >
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input class="form-control" type="description" id="description" name="description" class="form-control @error('descriptionn') is-invalid @enderror"  placeholder="Enter your Description">
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group mb-0 text-center">
                                                <button type="submit" id=""class="btn btn-danger btn-block" type="submit">Add Category </button>
                                            </div>
                                        </form>
                                    </div>
                                 </div>
                            </div>
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
            // delete
            $(document).on('click', '#deleteCategory', function(){
            var cat_id = $(this).find('#category_id').val();
                // alert(category_id);
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
                    url: "{{ route('categorytrash')}}",
                    method: 'post',
                    data: {category_id: cat_id, _token: '{{ csrf_token()}}'},
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

    	<div class="modal fade" id="editCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">Update Category</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body px-4">
							<form class="form-horizontal">
								<div class="box-body">
									<div class="form-group">
									<label for="category_name" class="col-sm-4 control-label">Category Name</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="Edit-category_name" placeholder="Category Name">
										</div>
									</div>
									<div class="form-group">
									<label for="description" class="col-sm-4 control-label">Description</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" id="Edit-description" placeholder="Description">
										</div>
									</div>
									<input type="hidden" class="form-control" id="Edit-category_id"value="">
							</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary w-25" id="updateCategory">Update</button>
					</div>
				</div>
			</div>
		</div>
</html>
