@extends('admin.dashboard')


<!-- Product section-->
@section('content')
<main class="listproduct-form">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Quản Lý Sản Phẩm</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('product.addproduct') }}" class="btn btn-success" data-toggle="modal"><i
                                    class="bi bi-pencil"></i><span>Thêm Sản Phẩm</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên danh mục</th>
                            <th>Tên hãng sản xuất</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Thông số kỹ thuật</th>
                            <th>Hành động</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id_product }}</td>
                                @foreach($categorys as $category)
                                    @if($product->id_category == $category->id_category)
                                        <td>{{ $category->name_category }}</td>
                                        @break
                                    @endif
                                @endforeach

                                @foreach($manufacturers as $manufacturer)
                                    @if($product->id_manufacturer == $manufacturer->id_manufacturer)
                                        <td>{{ $manufacturer->name_manufacturer }}</td>
                                        @break
                                    @endif
                                @endforeach

                                <td>{{ $product->name_product }}</td>
                                <td>{{ $product->quantity_product }}</td>
                                <td>{{ $product->price_product }}</td>
                                <td><img src="{{ asset('uploads/productimage/' . $product->image_address_product) }}"
                                        alt=""></td>
                                <td>{{ $product->describe_product }}</td>
                                <td>{{ $product->specifications }}</td>
                                <td>
                                    <a href="{{ route('product.indexUpdateproduct', ['id' => $product->id_product]) }}"
                                        class="mx-1 btn btn-primary">Sửa</a>
                                </td>
                                <td>
                                    <a href="{{ route('product.deleteproduct', ['id' => $product->id_product]) }}"
                                        class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">{{ $products->links() }}</div>
            <div class="col-md-5"></div>
        </div>
    </div>
</main>
<style>
    .listproduct-form table img {
        width: 100px;
        height: 100px;
    }
    table th, table td{
        border: 1px solid black;
    }
</style>
@endsection