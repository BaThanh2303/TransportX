@extends("admin.layouts.app_admin")
@section("main")
    <div class="content-body">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Address</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="number" class="form-control" placeholder="Telephone">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Address</label>
                                <input placeholder="Detail Address" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Province/City</label>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    @foreach($province as $item)
                                    <option value="{{$item->code}}">{{$item->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">District</label>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    @foreach($province as $item)
                                        <option value="{{$item->code}}">{{$item->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Ward/Commune</label>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
