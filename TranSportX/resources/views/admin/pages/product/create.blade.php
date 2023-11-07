@extends("admin.layouts.app_admin")
@section("main")
    <div class="container">
    <div class="container mt-5">
        <div class="col-xl-12 col-lg-10">
            <div class="card">
                <div class="card-body">
        <form action="{{url("/product/createProduct")}}" method="post">
            @csrf
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
        <button type="submit" class="btn btn-primary">Thêm Hàng Hóa</button>
        </form>
    </div>
            </div>
        </div>
    </div>
    </div>
@endsection
