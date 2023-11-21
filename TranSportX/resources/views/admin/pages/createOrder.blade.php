@extends("admin.layouts.app_admin")
@section("main")

    <div class="content-body">
        <div class="d-flex">
            <div class="container">
                <form action="{{url("/product/create")}}" method="post">
                    @csrf
                    <div class="container mt-5">
                        <div class="col-xl-12 col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="vicc-title">Người Gửi</span>
                                    </div>
                                    <div class="basic-form">

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Họ Tên</label>
                                                <input type="text" name="sender_name" class="form-control" placeholder="Tên Người Gửi">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Số Điện Thoại</label>
                                                <input type="number" name="sender_telephone" class="form-control" placeholder="Số Điện Thoại Người Gửi">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Địa Chỉ</label>
                                                <select id="Province" class="form-control">
                                                    <option value="">Chọn Tỉnh/Thành Phố</option>
                                                    @foreach($provinces as $data)
                                                        <option value="{{$data->code}}">{{$data->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label"><br></label>
                                                <select id="District" class="form-control"></select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <select id="Ward" class="form-control"></select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" name="sender_address" class="form-control" placeholder="Địa Chỉ Cụ Thể">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="col-xl-12 col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="vicc-title">Người nhận</span>
                                    </div>
                                    <div class="basic-form">

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Họ Tên</label>
                                                <input type="text" name="full_name" class="form-control" placeholder="Tên Người Nhận">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Số Điện Thoại</label>
                                                <input type="number" name="telephone" class="form-control" placeholder="Số Điện Thoại Người Nhận">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Địa Chỉ</label>
                                                <select id="Province-2" class="form-control">
                                                    <option value="">Chọn Tỉnh/Thành Phố</option>
                                                    @foreach($provinces as $data)
                                                        <option value="{{$data->code}}">{{$data->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label"><br></label>
                                                <select id="District-2" class="form-control"></select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <select id="Ward-2" class="form-control"></select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" name="sender_address" class="form-control" placeholder="Địa Chỉ Cụ Thể">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="col-xl-12 col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="vicc-title">Thông Tin Hàng Hóa</span>
                                    </div>
                                    <div class="basic-form">

                                        <div class="row">
                                            {{--                                        @foreach($cart as $item)--}}
                                            {{--                                        <div class="mb-3 col-md-12">--}}
                                            {{--                                            <label class="form-label">Tên Hàng</label>--}}
                                            {{--                                            <label type="text" class="form-control"></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                            <label class="form-label">Số Lượng</label>--}}
                                            {{--                                            <label type="text" class="form-control"></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                            <label class="form-label">Trọng Lượng</label>--}}
                                            {{--                                            <label type="number" class="form-control" ></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                            <label class="form-label">Giá Trị</label>--}}
                                            {{--                                            <label type="number" class="form-control" ></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <label class="form-label">Kích Thước (CM)</label>--}}
                                            {{--                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                            <label type="text"  class="form-control" ></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                            <label type="number" class="form-control" ></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                            <label type="number" class="form-control" ></label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        @endforeach--}}
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Tên Hàng</label>
                                                <input type="text" name="name_product" class="form-control" placeholder="Tên Hàng Hóa">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Số Lượng</label>
                                                <input type="text" name="qty" class="form-control" placeholder="Số Lượng">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Trọng Lượng</label>
                                                <input type="number" name="weight" class="form-control" placeholder="Trọng Lượng">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Giá Trị</label>
                                                <input type="number" name="price" class="form-control" placeholder="Giá Trị">
                                            </div>
                                            <label class="form-label">Kích Thước (CM)</label>
                                            <div class="mb-3 col-md-4">
                                                <input type="text" name="length" class="form-control" placeholder="Dài">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <input type="number" name="width" class="form-control" placeholder="Rộng">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <input type="number" name="height" id="height" class="form-control" placeholder="Cao">
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="mb-3 col-md-3">
                                                    <input type="radio" id="nguoiNhan" name="select_pay">
                                                    <label class="form-label"> Người Nhận Trả Cước</label>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <input type="radio" id="nguoiGui" name="select_pay">
                                                    <label class="form-label"> Người Gửi Trả Cước</label>
                                                </div>
                                            </div>
                                            {{--                                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">--}}
                                            {{--                                            Thêm Hàng Hóa--}}
                                            {{--                                        </button>--}}
                                            {{--                                        <div class="modal fade" id="exampleModalCenter">--}}
                                            {{--                                            <div class="modal-dialog modal-dialog-centered" role="document">--}}
                                            {{--                                                <div class="modal-content">--}}
                                            {{--                                                    <div class="modal-header">--}}
                                            {{--                                                        <h5 class="modal-title">Thêm Hàng Hóa</h5>--}}
                                            {{--                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="modal-body">--}}
                                            {{--                                                        <div class="row">--}}
                                            {{--                                                        <div class="mb-3 col-md-12">--}}
                                            {{--                                                            <label class="form-label">Tên Hàng</label>--}}
                                            {{--                                                            <input type="text" name="name_product" class="form-control" placeholder="Tên Hàng Hóa">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                                            <label class="form-label">Số Lượng</label>--}}
                                            {{--                                                            <input type="text" name="qty" class="form-control" placeholder="Số Lượng">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                                            <label class="form-label">Trọng Lượng</label>--}}
                                            {{--                                                            <input type="number" name="weight" class="form-control" placeholder="Trọng Lượng">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                                            <label class="form-label">Giá Trị</label>--}}
                                            {{--                                                            <input type="number" name="price" class="form-control" placeholder="Giá Trị">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <label class="form-label">Kích Thước (CM)</label>--}}
                                            {{--                                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                                            <input type="text" name="length" class="form-control" placeholder="Dài">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                                            <input type="number" name="width" class="form-control" placeholder="Rộng">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="mb-3 col-md-4">--}}
                                            {{--                                                            <input type="number" name="height" class="form-control" placeholder="Cao">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="modal-footer">--}}
                                            {{--                                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Đóng</button>--}}
                                            {{--                                                        <a href="{{url("product/addProduct")}}" class="btn btn-primary">Thêm</a>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <button type="submit" class="btn btn-primary " value="submit-1">Tạm Tính</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="col-xl-12 col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="vicc-title">Thông Tin Hàng Hóa</span>
                                    </div>
                                    <div class="basic-form">
                                        <div class="row">
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">Tổng Cước</label>
                                                    <label type="text" id="total" class="form-control"></label>
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">Tiền thu hộ</label>
                                                    <label type="number" id="collect" class="form-control" ></label>
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">Tiền thu người gửi</label>
                                                    <label type="number" id="collect_sender" class="form-control" ></label>
                                                </div>
                                            <button type="submit" class="btn btn-primary" value="submit-2">Tạo Đơn</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Province').change(function(event) {
                let idCountry = this.value;
                $('#District').html('');
                $.ajax({
                    url: "{{url("/product/districts")}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {province_id: idCountry,_token:"{{ csrf_token() }}"},
                    success:function(response){
                        $('#District').html('<option value="">Chọn Quận/Huyện</option>');
                        $.each(response.district,function(index, val){
                            $('#District').append('<option value="'+val.code+'"> '+val.name+' </option>')
                        });
                        $('#Ward').html('<option value="">Chọn Xã/Phường</option>');
                    }
                })

            });
            $('#District').change(function(event) {
                var idState = this.value;
                $('#Ward').html('');
                $.ajax({
                    url: "{{url("/product/wards")}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {wards_id: idState,_token:"{{ csrf_token() }}"},
                    success:function(response){
                        $('#Ward').html('<option value="">Chọn Xã/Phường</option>');
                        $.each(response.ward,function(index, val){
                            $('#Ward').append('<option value="'+val.id+'"> '+val.name+' </option>')
                        });
                    }
                })
            });
            $('#Province-2').change(function(event) {
                let idCountry = this.value;
                $('#District-2').html('<option value="">Select State</option>');
                $.ajax({
                    url: "{{url("/product/districts")}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {province_id: idCountry,_token:"{{ csrf_token() }}"},
                    success:function(response){
                        $('#District-2').html('<option value="">Chọn Quận/Huyện</option>');
                        $.each(response.district,function(index, val){
                            $('#District-2').append('<option value="'+val.code+'"> '+val.name+' </option>')
                        });
                        $('#Ward-2').html('<option value="">Chọn Xã/Phường</option>');
                    }
                })
            });
            $('#District-2').change(function(event) {
                var idState = this.value;
                $('#Ward-2').html('');
                $.ajax({
                    url: "{{url("/product/wards")}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {wards_id: idState,_token:"{{ csrf_token() }}"},
                    success:function(response){
                        $('#Ward-2').html('<option value="">Chọn Xã/Phường</option>');
                        $.each(response.ward,function(index, val){
                            $('#Ward-2').append('<option value="'+val.code+'"> '+val.name+' </option>')
                        });
                    }
                })
            });
        });
    </script>
@endsection
