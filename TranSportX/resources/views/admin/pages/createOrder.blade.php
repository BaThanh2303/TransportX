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
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Địa Chỉ</label>
                                                <input type="text" name="sender_address" class="form-control" placeholder="Địa Chỉ Người Gửi">
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
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Địa Chỉ</label>
                                                    <input type="text" name="address" class="form-control" placeholder="Địa Chỉ Người Nhận">
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
                                            <input type="number" name="height" class="form-control" placeholder="Cao">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Tạo Đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
