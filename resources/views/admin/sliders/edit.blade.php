@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ویرایش اسلاید
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('sliders.update',$slider)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="link" class="mt-3">لینک </label>
                            <input type="text" class="form-control mt-4" name="link" id="link" value="{{$slider->link}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <td><img src="{{str_replace('public','/storage',$slider->image)}}" alt="{{$slider->name}}" width="150" style="border-radius: 10px"></td>
                            </div>
                            <div class="col-sm-6">
                                <label for="image">تصویر</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
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

