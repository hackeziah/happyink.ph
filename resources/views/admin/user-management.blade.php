<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HappyInk | User Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="images/booksif.ico"/>
        <!-- third party css -->
       @include('admin/layouts/links')

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin/layouts/sidebar')

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
                                            <li class="breadcrumb-item active">User Management</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Users</h4>
                                </div>
                            </div>
                    </div>

                <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:20px;margin-bottom:20px">User Management</h4>

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="10%">ID</th>
                                                    <th width="25%">Name</th>
                                                    <th width="20%">Email</th>
                                                    <th width="10%">User Type</th>
                                                    <th width="10%">Status</th>
                                                    <th width="5%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                   @foreach ($users as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ strtoupper($item->name) }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->role }}</td>
                                                        <td>
                                                          <?php
                                                                if($item->status == 1){
                                                                    echo '<span class="badge badge-success">Active</span>';
                                                                }elseif ($item->status == 2) {
                                                                    echo'<span class="badge badge-primary">Deactive</span>';
                                                                }else{
                                                                     echo ' <span class="badge badge-danger">Block</span>';
                                                                }
                                                            ?>
                                                        </td>
                                                    <td style="">
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(38px, 28px, 0px);">
                                                                <a class="dropdown-item" href="#" id ="updateUser"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle">
                                                                    <input type="hidden" id="modal-id" name= "id" value="{{$item->id}}">
                                                                    <input type="hidden" id="modal-status" name= "status" value="{{$item->status}}">
                                                                    <input type="hidden" id="modal-role" name= "role" value="{{$item->role}}">


                                                                </i>Edit User</a>
                                                                <a class="dropdown-item" href="#" id ="deleteUser"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle">
                                                                    <input type="hidden" id="id" name= "id" value="{{$item->id}}">
                                                                </i>Remove</a>
                                                            </div>
                                                        </div>

                                                    </td>
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
                                    <form action="{{ route('saveuser')}}" method="POST">
                                                @csrf
                                            <div class="form-group">
                                                <label for="fullname">Full Name</label>
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password"required="" id="password" placeholder="Enter your password">
                                            </div>
                                            <div class="form-group">
                                                <label for="role">User Type</label>
                                                <select class="form-control" id="role" name="role">
                                                    @foreach ($role as $items)
                                                <option name="role" value="{{ $items->role_name }}">{{ $items->role_name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-danger btn-block" type="submit">Add User </button>
                                            </div>
                                        </form>
                                    </div>
                                 </div>
                            </div>
                </div>
                        <!-- end row-->
                        @include('admin/layouts/footer')

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @include('admin/layouts/js')
        {{-- <SCRIPT> --}}







{{-- modal --}}
    <div class="modal fade bs-example-modal-sm show" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="updateuser">
                        @csrf
                        <input type="hidden" id="Edit-id" name= "id">
                        <div class="form-group">
                                <label for="role">User Type</label>
                                <select class="form-control" id="Edit-role" name="role">
                                    @foreach ($role as $items)
                                          <option name="role" id="role" value="{{ $items->role_name }}">{{ $items->role_name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                             <div>
                                <label for="status">Status</label>
                               <select class="form-control" id="Edit-status" name="status">
                                    @foreach ($status as $items)
                                          <option name="status" id="status" value="{{ $items->id }}">{{ $items->name }}</option>

                                    @endforeach
                                </select>
                             </div>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block" id="updateSave" type="submit">UPDATE </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- modal --}}

    </body>
  <script type="text/javascript">

         $(document).on('click', '#updateUser', function(){
            $('#editUserModal').modal('show');
            $('#Edit-id').val($(this).find('#modal-id').val());
            $('#Edit-role').val($(this).find('#modal-role').val());
            $('#Edit-status').val($(this).find('#modal-status').val());
            //   alert(id);

        });
        // update
         $(document).on('click', '#updateSave', function(){
            var id = $('#Edit-id').val();
            var role = $('#Edit-role').val();
            var status = $('#Edit-status').val();

            if (role == '' || status == ''){
			swal({
				title: "Form incomplete",
				text: "Please fill up the form!",
				icon: "warning",
				button: true,
				dangerMode: false
			});
			}else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, update it!'
                }).then((willDelete) => {
				if (willDelete) {
				$.ajax({
                    url: "{{ route('updateuser')}}",
					method: 'post',
					data: {id: id,role: role, status: status,_token: '{{ csrf_token()}}'},
					success: function(data){
					if (data) {
					   Swal.fire(
                        'Update!',
                        'The data has been Update.',
                        'success'
                        )
                        window.location.reload();
				 	}else {
						swal({
						title: "Failed to Update the User!",
						text: "",
						icon: "error",
						button: true,
						dangerMode: false,
						})
					}
					}
				});
				}
			});
			}

        });

        // update
        // delete
        $(document).on('click', '#deleteUser', function(){
          var id = $(this).find('#id').val();
            // alert(id);
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
              url: "{{ route('trashuser')}}",
              method: 'post',
              data: {id: id, _token: '{{ csrf_token()}}'},
              success: function(data,){
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
        // delete

 </script>

</html>
