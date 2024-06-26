@extends('admin.dashboard')

@section('content')
<main class="addproduct-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <h3 class="card-header text-center">Thêm Sản Phẩm</h3>
                    <div class="card-body">
                        <form action="{{ route('product.addproduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Danh mục</span></div>
                                            <div class="col-md-9">
                                                <select id="id_category" name="id_category" class="form-control"
                                                    required autofocus onchange="handleCategoryChange()">
                                                    <option value="" disabled selected hidden>--Chọn danh mục--</option>
                                                    @foreach($categorys as $category)
                                                    <option value="{{ $category->id_category }}">
                                                        {{ $category->name_category }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" id="selected_category" name="selected_category" value="">
                                            </div>
                                        </div>
                                        @if ($errors->has('id_category'))
                                        <span class="text-danger"> $errors->first('id_category')</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Hãng sản xuất</span></div>
                                            <div class="col-md-9">
                                                <select id="id_manufacturer" name="id_manufacturer"
                                                    class="form-control" required autofocus onchange="handleManufacturerChange()">
                                                    <option value="" disabled selected hidden>--Chọn hãng sản xuất--</option>
                                                    @foreach($manufacturers as $manufacturer)
                                                    <option value="{{ $manufacturer->id_manufacturer }}">
                                                        {{ $manufacturer->name_manufacturer }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" id="selected_manufacturer" name="selected_manufacturer" value="">
                                            </div>
                                        </div>
                                        @if ($errors->has('id_manufacturer'))
                                        <span class="text-danger"> $errors->first('id_manufacturer')</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Tên sản phẩm</span></div>
                                            <div class="col-md-9"> <input type="text" id="name_product"
                                                    class="form-control" name="name_product" required autofocus></div>
                                        </div>
                                        @if ($errors->has('name_product'))
                                        <span class="text-danger">{{ $errors->first('name_product') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Số lượng</span></div>
                                            <div class="col-md-9"> <input type="text" id="quantity_product"
                                                    class="form-control" name="quantity_product" required autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('quantity_product'))
                                        <span class="text-danger">{{ $errors->first('quantity_product') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Giá</span></div>
                                            <div class="col-md-9"> <input type="text" id="price_product"
                                                    class="form-control" name="price_product" required autofocus></div>
                                        </div>
                                        @if ($errors->has('price_product'))
                                        <span class="text-danger">{{ $errors->first('price_product') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Ảnh sản phẩm</span></div>
                                            <div class="col-md-9"><input type="file" id="fileToUpload"
                                                    class="form-control" name="image_address_product" required></div>
                                        </div>

                                        @if ($errors->has('image_address_product'))
                                        <span class="text-danger"> $errors->first('image_address_product')</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Mô tả</span></div>
                                            <div class="col-md-9"> <input type="text" id="describe_product"
                                                    class="form-control" name="describe_product" required autofocus>
                                            </div>
                                        </div>
                                        @if ($errors->has('describe_product'))
                                        <span class="text-danger">{{ $errors->first('describe_product') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-3"><span>Thông số</span></div>
                                            <div class="col-md-9"> <input type="text" id="specifications"
                                                    class="form-control" name="specifications" required autofocus></div>
                                        </div>
                                        @if ($errors->has('specifications'))
                                        <span class="text-danger">{{ $errors->first('specifications') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row btn_login">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6"><a href="#"></a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-grid mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">Lưu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function handleCategoryChange() {
        var selectedCategory = document.getElementById('id_category').value;
        document.getElementById('selected_category').value = selectedCategory;
    }

    function handleManufacturerChange() {
        var selectedManufacturer = document.getElementById('id_manufacturer').value;
        document.getElementById('selected_manufacturer').value = selectedManufacturer;
    }
</script>
@endsection