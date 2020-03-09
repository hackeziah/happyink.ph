
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | Manage Orders</title>
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
                                            <li class="breadcrumb-item active">Manage Orders</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manage Transactions</h4>
                                </div>
                            </div>
                    </div>

                <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">All Orders</h4>

                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline">
                                            <thead>
                                                <tr>
                                                    <th width="20%">TransactionID</th>
                                                    <th width="28%">Client Name</th>
                                                    <th width="15%">Status</th>
                                                    <th width="13%">Total Amount</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($categories as $item) --}}
                                                     <tr>
                                                        <td>TRANS-202990</td>
                                                        <td>Juan Dela Cruz</td>
                                                        <td><span class="btn btn-success btn-sm w-100">Delivered</span></td>
                                                        <td>₱ 230.00</td>
                                                        <td>
                                                            <button type="button" id="showOrder" class="btn btn-primary waves-effect waves-light"><i class="fe-eye"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="acceptOrder" class="btn btn-success waves-effect waves-light">Accept</button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="shipOrder" class="btn btn-info waves-effect waves-light"><i class="fe-truck"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteOrder" class="btn btn-danger waves-effect waves-light"><i class="fe-delete"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                      <tr>
                                                        <td>TRANS-8293892</td>
                                                        <td>Jose Rizal</td>
                                                        <td><span class="btn btn-danger btn-sm w-100">Cancelled</span></td>
                                                        <td>₱ 323.00</td>
                                                        <td>
                                                            <button type="button" id="showOrder" class="btn btn-primary waves-effect waves-light"><i class="fe-eye"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="acceptOrder" class="btn btn-success waves-effect waves-light">Accept</button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="shipOrder" class="btn btn-info waves-effect waves-light"><i class="fe-truck"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteOrder" class="btn btn-danger waves-effect waves-light"><i class="fe-delete"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                      <tr>
                                                        <td>TRANS-32323</td>
                                                        <td>Camille Lamadrid</td>
                                                        <td><span class="btn btn-warning btn-sm w-100">Pending</span></td>
                                                        <td>₱ 323.00</td>
                                                        <td>
                                                            <button type="button" id="showOrder" class="btn btn-primary waves-effect waves-light"><i class="fe-eye"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="acceptOrder" class="btn btn-success waves-effect waves-light">Accept</button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="shipOrder" class="btn btn-info waves-effect waves-light"><i class="fe-truck"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteOrder" class="btn btn-danger waves-effect waves-light"><i class="fe-delete"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>
                                                        </td>
                                                     </tr>

                                                      <tr>
                                                        <td>TRANS-2122323</td>
                                                        <td>Rey Paul Morales</td>
                                                        <td><span class="btn btn-primary btn-sm w-100">Preparing</span></td>
                                                        <td>₱ 2323.00</td>
                                                        <td>
                                                            <button type="button" id="showOrder" class="btn btn-primary waves-effect waves-light"><i class="fe-eye"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="acceptOrder" class="btn btn-success waves-effect waves-light">Accept</button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="shipOrder" class="btn btn-info waves-effect waves-light"><i class="fe-truck"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                                                            </button>|
                                                            <button type="button" id="deleteOrder" class="btn btn-danger waves-effect waves-light"><i class="fe-delete"></i></button>
                                                            <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
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
//show transaction
$(document).on('click', '#showOrder', function(){
    $('#showOrderModal').modal('show');
    // alert("ksksksk");
//   alert(id);

});
//cancel the transaction
$(document).on('click','#deleteOrder', function(){
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

//accept of transacrion
$(document).on('click', '#acceptOrder', function(){
	var id = $(this).attr('id');
	Swal.fire({
		title: 'Are you sure?',
		text: "This order will be Accepted.",
		type: 'info',
		showCancelButton: true,
		cancelButtonColor: '#B0AEAE',
		confirmButtonText: 'Confirm'
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url: "",
				type: "PATCH",
				data:{
					id : id,
					_token : '{{ csrf_token()}}',
				},
				dataType: "json",
				success:function(data){
					if(data.success){
					toastr.success(data.success, 'Success!');
				}else{
					toastr.error(data.error, 'Error!');

                }
                window.location.reload(true);

				}
			});
		}
	});

});
//shipping of Orders
$(document).on('click', '#shipOrder', function(){
	var id = $(this).attr('id');
	Swal.fire({
		title: 'Are you sure?',
		text: "This order will be Delieved.",
		type: 'info',
		showCancelButton: true,
		cancelButtonColor: '#B0AEAE',
		confirmButtonText: 'Confirm'
	}).then((result) => {
		if (result.value) {
			$.ajax({
				url: "",
				type: "PATCH",
				data:{
					id : id,
					_token : '{{ csrf_token()}}',
				},
				dataType: "json",
				success:function(data){
					if(data.success){
					toastr.success(data.success, 'Success!');
                    }
                window.location.reload(true);
				}
			});
		}
	});

});


//
    // add
		// $('#category-form').on('submit', function (e) {
		// 	e.preventDefault(e);
		// 	// var category = $('#trasaction_id').val();
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

      <div id="showOrderModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>TransactionID: <span>20191001</span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
                <div class="row mb-1" >
                    <div class="col-md-6 offset-1">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" readonly value="Juan Dela Cruz">
                    </div>
                    <div class="col-md-3">
                    <label for="">Date:</label>
                    <input type="text" name="date" id="date" class="form-control" readonly value="05-12-2019">
                    </div>
                        </div>
                        <div class="row mb-1">
                        <div class="col-md-6 offset-1">
                            <label for="name">Contact Number:</label>
                            <input type="text" name="contactnum" id="contactnum" class="form-control" readonly value="0955593242">
                        </div>
                        <div class="col-md-3">
                            <label for="">Total:</label>
                            <input type="text" id="totalPrice" class="form-control" readonly value="₱ 10, 200.00">
                        </div>
                            </div>
                        <div class="row">
                        <div class="col-md-9 offset-1 mb-3">
                            <label for="">Location:</label>
                            <textarea name="name" id="address" rows="2" cols="50" class="form-control" readonly value="">Block 23 Lot 32 C5-Road Western Bicutan Taguig City</textarea>

                        </div>
                        </div>
                    <div class="row col-md-10 offset-1">
                        <table id="showORdersTbl"  class="table table-striped table-bordered">
                        <thead>
                            <th  width="60%">Product</th>
                            <th width="20%">Quantity</th>
                        </thead>
                     <tbody>
                            <tr>
                                <td>Jack Daniel's Old No. 7</td><td>2</td>
                            </tr>
                            <tr>
                                <td>Jose Cuervo Blue Agave</td><td>2</td>
                            </tr>
                            <tr>
                                <td>Patron Silver</td><td>2</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>

                <div class="row">
                    <div class="form-group col-md-1">
                        <label for="">NOTE:</label>
                    </div>
                    <div class="form-group col-md-9">

                            <textarea name="name" id="address" rows="2" cols="50" class="form-control" readonly value="">Can i get this items in just 2 days?</textarea>
                    </div>
                    <div class="form-group col-md-2">
                         <button type="button" id="messageCustomer" class="btn btn-primary waves-effect waves-light"><i class="fe-message-square"></i></button>
                        <input type="hidden" id="trasaction_id" name= "trasaction_id" value="">
                        </button>
                    </div>
                </div>

            </div>




</html>
