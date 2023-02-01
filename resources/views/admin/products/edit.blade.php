@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ایجاد محصول
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('products.update',$product)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="category_id">دسته بندی</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" disabled selected>دسته بندی را انتخاب کنید ...</option>
                                @foreach($categories as $category)
                                    <option
                                        @if($product->category_id == $category->id)
                                            selected
                                        @endif
                                        value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">برند</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" disabled selected>برند را انتخاب کنید ...</option>
                                @foreach($brands as $brand)
                                    <option
                                        @if($product->brand_id == $brand->id)
                                            selected
                                        @endif
                                        value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name" class="mt-3">نام </label>
                            <input type="text" class="form-control mt-4" name="name" id="name"
                                   value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="mt-3">اسلاگ</label>
                            <input type="text" class="form-control mt-4" name="slug" id="slug"
                                   value="{{$product->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="cost" class="mt-3">قیمت</label>
                            <input type="number" class="form-control mt-4" name="cost" id="cost"
                                   value="{{$product->cost}}">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6" >
                                    <label for="image" class="pt-20">تصویر</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="col-sm-6" style="text-align: center">
                                    <img src="{{str_replace('public','/storage',$product->image)}}" alt="" class="pt-5"
                                    width="200px">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">

                            <label for="description">توضیحات</label>
                            <textarea name="description" id="description"
                                      class="form-control">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ایجاد" class="btn btn-primary mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('admin.layout.errors')
    </div>

@endsection

