@extends("admin.layouts.app_admin")
@section("main")

    <div class="content-body">
        <div class="d-flex">
            <div class="container">
                <form action="" method="post">
                <div class="container mt-5">
                    <div class="col-xl-12 col-lg-10">
                        <div class="card m-">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="selectGroupAddress">Chọn thông tin người gửi:</label>
                                        <select class="form-control selectpicker" data-live-search="true" id="selectGroupAddress" name="selectGroupAddress">
                                            <option value="">Chọn thông tin người gửi</option>
                                            <option value="15627197"> truong quang nam - emtesttinhnang, LÀNG Cót, PHƯỜNG YÊN HÒA, QUẬN CẦU... - 0362171394 </option>
                                        </select>
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
                                                    <input type="text" class="form-control" placeholder="Tên Người Nhận">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Số Điện Thoại</label>
                                                    <input type="number" class="form-control" placeholder="Số Điện Thoại Người Nhận">
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Địa Chỉ</label>
                                                    <input type="text" class="form-control" placeholder="Địa Chỉ Người Nhận">
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
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                    <input type="radio" class="form-check-input" id="customRadioBox1" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox1">Bưu Kiện </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-secondary">
                                                    <input type="radio" class="form-check-input" id="customRadioBox2" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox2">Tài Liệu</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Tên Hàng</label>
                                                <input type="text" class="form-control" placeholder="Tên Hàng Hóa">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Số Lượng</label>
                                                <input type="text" class="form-control" placeholder="Số Lượng">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Trọng Lượng</label>
                                                <input type="number" class="form-control" placeholder="Trọng Lượng">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Giá Trị</label>
                                                <input type="number" class="form-control" placeholder="Giá Trị">
                                            </div>
                                            <label class="form-label">Kích Thước (CM)</label>
                                            <div class="mb-3 col-md-4">
                                                <input type="text" class="form-control" placeholder="Dài">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <input type="number" class="form-control" placeholder="Rộng">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <input type="number" class="form-control" placeholder="Cao">
                                            </div>

                                        </div>

                                    <button type="button" class="btn btn-primary"></i>Tạo Đơn</button>
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
