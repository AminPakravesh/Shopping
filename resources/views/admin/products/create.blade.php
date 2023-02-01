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
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_id">دسته بندی</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" disabled selected>دسته بندی را انتخاب کنید ...</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">برند</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" disabled selected>برند را انتخاب کنید ...</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name" class="mt-3">نام </label>
                            <input type="text" class="form-control mt-4" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="mt-3">اسلاگ</label>
                            <input type="text" class="form-control mt-4" name="slug" id="slug">
                        </div>
                        <div class="form-group">
                            <label for="cost" class="mt-3">قیمت</label>
                            <input type="number" class="form-control mt-4" name="cost" id="cost">
                        </div>

                        <div class="form-group">

                            <label for="image">تصویر</label>
                            <input type="file" name="image" id="image" class="form-control">

                        </div>
                        <div class="form-group">

                            <label for="description">توضیحات</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
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

