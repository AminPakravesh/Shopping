@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
ویرایش برند {{$brand->name}}
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('brands.update',$brand)}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name" class="mt-3">نام </label>
                            <input type="text" class="form-control mt-4" name="name" id="name" value="{{$brand->name}}">
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6">
                                    <td><img src="{{str_replace('public','/storage',$brand->image)}}" alt="{{$brand->name}}" width="70"></td>
                                </div>
                                <div class="col-sm-6">
                                    <label for="image">تصویر</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="بروزرسانی" class="btn btn-primary mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('admin.layout.errors')
    </div>

@endsection

