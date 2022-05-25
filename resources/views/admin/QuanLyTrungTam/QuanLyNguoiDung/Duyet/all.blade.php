@extends('admin.admin_layout')
@section('admin_content')
<!--Start Page Title-->
<div class="page-title-box">
    <h4 class="page-title">{{$title}}</h4>
    <ol class="breadcrumb">
        <li>
            <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li>
            <a>Quản lý người dùng</a>
        </li>
        <li class="active">
            <a href="{{$url}}">{{$title}}</a>
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<!--End Page Title-->          

<!--Start row-->
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 my-2">
                    <h2 class="header-title">{{$title}}</h2>
                </div>
            </div>
            
            <div id="table_data">
                <div class="table-responsive">
                    <table id="example" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Mã người dùng</th>
                                <th style="width: 200px">Ảnh đại diện</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Ngày sinh</th>
                                <th>Số điện thoại</th>
                                <th>CCCD</th>
                                <th>Địa chỉ</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($user) > 0)
                                @foreach ($user as $key => $usernd )
                                    <tr>
                                        <td>{{$usernd->id}}</td>
                                        <td><img src="{{asset('public/admin/uploads/users/'.$usernd->anhDaiDien)}}" width="150px" /></td>
                                        <td>{{$usernd->hoTen}}</td>
                                        <td>{{$usernd->email}}</td>
                                        <td>{{date('d-m-Y', strtotime($usernd->ngaySinh))}}</td>
                                        <td>{{$usernd->soDienThoai}}</td>
                                        <td>{{$usernd->CCCD}}</td>
                                        <td>{{$usernd->diaChi}}</td>
                                        <td class="text-center">
                                            <a href="{{route('browseuser.detail',$usernd->id)}}" type="button" class="btn btn-info edit-user" style="border-radius: 7px"><i class="fa fa fa-check-circle"></i></a>
                                            <a href=""  type="button" data-id="{{$usernd->id}}" class="btn btn-danger delete-user" style="border-radius: 7px"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="9" style="text-align: center">Chưa có đơn đăng ký nào</td>
                            @endif
                        </tbody>
                    </table>  
                    
                    {{-- <div class="col-sm-12 text-right text-center-xs mt-2">
                        <div class="pagination d-flex justify-content-center">
                            {!!$user->links('paginationlinks')!!}
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--End row-->
@endsection

@section('ajax_js')
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('click', '.delete-user', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                var token = $("meta[name='csrf-token']").attr("content");
                swal({
                    title: "Bạn có chắc muốn xoá đăng ký này?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Có",
                    cancelButtonText: "Không"
                    },
                    function() {
                        $.ajax({
                            type: "DELETE",
                            url: 'delete-user/'+id,
                            data: {id:id, _token:token},
                            success: function (data) {
                                swal("Xoá thành công!", "Không thể khôi phục dữ liệu đã xoá", "success");
                                window.setTimeout(function(){
                                    location.reload();
                                }, 2000);
                            }         
                        });
                });
            });
            
        });
    </script>
@endsection