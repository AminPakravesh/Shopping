@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <div>
            <h3 class="box-title">محصولات</h3>
        </div>
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr  >
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">نام</th>
                <th class="th_text">قیمت</th>
                <th class="th_text">برند</th>
                <th class="th_text">دسته بندی</th>
                <th class="th_text">تصویر</th>
                <th class="th_text">گالری</th>
                <th class="th_text">ویژگی ها</th>
                <th class="th_text">تخفیف</th>
                <th class="th_text">نظرات</th>
                <th class="th_text">تاریخ ایجاد</th>
                <th class="th_text">ویرایش</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="td_text th_text_pl">{{$product->id}}</td>
                    <td class="td_text">{{$product->name}}</td>
                    <td class="td_text">{{$product->cost}}</td>
                    <td class="td_text">{{$product->brand->name}}</td>
                    <td class="td_text">{{$product->category->title}}</td>
                    <td class="td_text"><img src="{{str_replace('public','/storage',$product->image)}}" alt="{{$product->name}}" width="70" style="border-radius: 5px"></td>
                    <td class="td_text"><a href="{{route('products.pictures.index',$product)}}" class="btn btn-warning btn-sm">گالری</a></td>
                    <td class="td_text"><a href="{{route('products.properties.index',$product)}}" class="btn btn-warning btn-sm">ویژگی</a></td>
                    <td class="td_text">
                        @if(!$product->has_discount)
                            <a href="{{route('products.discounts.create',['product'=>$product,'discount'=>$product->discount])}}"
                               class="btn btn-info btn-sm">
                                ایجاد
                            </a>
                        @else
                            <a href="{{route('products.discounts.create',$product)}}"
                               class="btn btn-active-color-muted btn-sm">
                                <span><span>{{$product->discount->value}}</span>درصد</span>
                            </a>
                            <form action="{{route('products.discounts.destroy',['product'=>$product,'discount'=>$product->discount])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                            </form>
                        @endif
                    </td>
                    <td class="td_text"><a href="{{route('products.comments.index',$product)}}" class="btn btn-warning btn-sm">نظرات</a></td>
                    <td class="td_text">*</td>
                    <td class="td_text">
                        <a href="{{route('products.edit' , $product)}}"
                           class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td>

                        <form action="{{route('products.destroy' , $product)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection





