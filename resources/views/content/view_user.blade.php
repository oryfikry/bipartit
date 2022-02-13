<style>

</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="top-widget" class="container">
        <div class="card">
            <div class="card-header">
                <button id="sendMail" class="btn btn-primary"> Send The Mail <i class="fas fa-paper-plane"></i></button>
                <div class="float-right"><b> 450 </b> of 870 Mail Sent </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
                <div class="d-flex flex-row-reverse"><button
                        class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" id="createNewUser"><i
                            class="fas fa-plus"></i>add data </button></div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableUser">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    {{-- <th>No.</th> --}}
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Link</th>
                                    <th>Is Received ?</th>
                                    <th style="width:90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                {{-- @foreach ($users as $r_users)
                                    <tr>
                                <td>{{$r_users->id}}</td>
                                <td>{{$r_users->name}}</td>
                                <td>{{$r_users->email}}</td>
                                <td>{{$r_users->level}}</td>
                                <td>
                                    <div class="btn btn-success editUser" data-id="{{$r_users->id}}">Edit</div>
                                    <div class="btn btn-danger deleteUser" data-id="{{$r_users->id}}">Delete</div>
                                </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal User-->
<div class="modal fade" id="modal-user" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Modal User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUser" name="formUser">
                    <div class="form-group">

                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama"><br>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email"><br>
                        <input type="text" name="link" class="form-control" id="link" placeholder="link"><br>
                        <input type="text" name="is_receive" class="form-control" id="is_receive" placeholder="is_receive"><br>
                        <input type="text" name="password" class="form-control" placeholder="password"><br>
                        <input type="hidden" name="level" class="form-control" value="1"><br>
                        <input type="hidden" name="user_id" id="user_id" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold" id="saveBtn">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Send The mail-->
<div class="modal fade" id="modal-send-mail" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Modal Send Mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSendMail" name="formSendMail">
                    <div class="form-group">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($all_user as $r_user)
                                    <tr>
                                        <td>{{$r_user->name}} </td>
                                        <td>{{$r_user->email}} </td>
                                        <td>
                                            @if($r_user->is_receive == 0)
                                            <div class="fas fa-expand-arrow-alt text-danger"></div>
                                            @else 
                                            <div class="fas fa-check-circle text-success"></div>
                                            @endif
                                        </td>
                                    </tr>
                                @empty 
                                 no data
                                @endforelse
                       
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <a href="http://localhost:3000" target="_blank">
                    <button type="button" class="btn btn-primary font-weight-bold" id="go">Go</button>
                </a>
            </div>
        </div>
    </div>
</div>



@push('scripts')
<script>
    $('document').ready(function () {
        // success alert
        function swal_success() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1000
            })
        }
        // error alert
        function swal_error() {
            Swal.fire({
                position: 'centered',
                icon: 'error',
                title: 'Something goes wrong !',
                showConfirmButton: true,
            })
        }
        // table serverside
        var table = $('#tableUser').DataTable({
            processing: false,
            serverSide: true,
            ordering: false,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ],
            ajax: "{{ route('users.index') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'link',
                    name: 'link'
                },
                {
                    data: 'is_receives',
                    name: 'is_receives',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        
        // csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // initialize btn add
        $('#createNewUser').click(function () {
            $('#saveBtn').val("create user");
            $('#user_id').val('');
            $('#formUser').trigger("reset");
            $('#modal-user').modal('show');
        });
        // initialize btn edit
        $('body').on('click', '.editUser', function () {
            var user_id = $(this).data('id');
            $.get("{{route('users.index')}}" + '/' + user_id + '/edit', function (data) {
                $('#saveBtn').val("edit-user");
                $('#modal-user').modal('show');
                $('#user_id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#link').val(data.link);
                $('#is_receive').val(data.is_receive);

                // $('#level').val(data.level);
            })
        });
        // initialize btn save
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Save');

            $.ajax({
                data: $('#formUser').serialize(),
                url: "{{ route('users.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {

                    $('#formUser').trigger("reset");
                    $('#modal-user').modal('hide');
                    swal_success();
                    table.draw();

                },
                error: function (data) {
                    swal_error();
                    $('#saveBtn').html('Save');
                }
            });

        });
        // initialize btn delete
        $('body').on('click', '.deleteUser', function () {
            var user_id = $(this).data("id");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{route('users.store')}}" + '/' + user_id,
                        success: function (data) {
                            swal_success();
                            table.draw();
                        },
                        error: function (data) {
                            swal_error();
                        }
                    });
                }
            })
        });

        // new
        $('#sendMail').click(function(){
            $('#modal-send-mail').modal('show');
        });


    });

</script>
@endpush
