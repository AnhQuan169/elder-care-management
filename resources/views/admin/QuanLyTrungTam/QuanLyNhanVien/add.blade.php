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
            <a>Quản lý nhân viên</a>
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
                
                <form class="js-validation-bootstrap form-horizontal" action="{{route('employee.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="text-center">Thông tin nhân viên</h4>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Họ tên người dùng: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="hoTen" value="{{old('hoTen')}}" class="form-control" type="text" placeholder="Nhập họ tên người dùng">
                            <span style="color: red;">
                                @error('hoTen')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Loại nhân viên: <span class="text-danger">*</span></label>
                        <div class="col-md-9" style="display: flex">
                            <select class="form-control" id="val-skill" name="loaiTaiKhoan">
                                <option value="1">Nhân viên kho</option>
                                <option value="2">Nhân viên y tế</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Email: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="email" value="{{old('email')}}" class="form-control" type="text" placeholder="Nhập email">
                            <span style="color: red;">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Giới tính: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <div style="margin-top: 5px;">
                                <span>
                                    <label><input name="gioiTinh" value="1" type="radio" checked> Nam</label>
                                </span>
                                <span style="margin-left: 20px">
                                    <label><input name="gioiTinh" value="0" type="radio"> Nữ</label>
                                </span>
                            </div>
                            <span style="color: red;">
                                @error('gioiTinh')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Ngày sinh: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="ngaySinh" value="{{old('ngaySinh')}}" class="form-control" type="date">
                            <span style="color: red;">
                                @error('ngaySinh')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Ảnh đại diện: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="anhDaiDien" class="form-control" type="file">
                            <span style="color: red;">
                                @error('anhDaiDien')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Số căn cước công dân: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="CCCD" placeholder="Nhập số căn cước công dân" value="{{old('CCCD')}}" class="form-control" type="text">
                            <span style="color: red;">
                                @error('CCCD')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Số điện thoại: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="soDienThoai" placeholder="Nhập số điện thoại" value="{{old('soDienThoai')}}" class="form-control" type="text">
                            <span style="color: red;">
                                @error('soDienThoai')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Địa chỉ: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="diaChi" placeholder="Nhập địa chỉ" value="{{old('diaChi')}}" class="form-control" type="text">
                            <span style="color: red;">
                                @error('diaChi')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 class="text-center"> Tài khoản</h4>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Tên tài khoản: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="name" value="{{old('name')}}" class="form-control" type="text" placeholder="Nhập tên tài khoản">
                            <span style="color: red;">
                                @error('name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Mật khẩu: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="password" class="form-control" type="password" placeholder="Nhập mật khẩu">
                            <span style="color: red;">
                                @error('password')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label " for="val-username">Nhập lại mật khẩu: <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input name="confirmpww" class="form-control" type="password" placeholder="Nhập lại mật khẩu">
                            <span style="color: red;">
                                @error('confirmpww')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-3">
                            <a href="{{route('employee.all')}}" class="btn btn-instagram" type="button">Quay lại</a>
                            <button class="btn btn-success save_employee" type="submit">Thêm</button>
                        </div>
                    </div>
                </form>
        </div>  
    </div>
</div>
<!--End row-->
@endsection

@section('ajax_js')
    <script type="text/javascript">
        $(document).ready(function(){

            
        });
    </script>
@endsection