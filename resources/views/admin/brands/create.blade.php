@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ایجاد برند
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="mt-3">نام </label>
                            <input type="text" class="form-control mt-4" name="name" id="name">
                        </div>
                        <div class="form-group">

                            <label for="image">تصویر</label>
                            <input type="file" name="image" id="image" class="form-control">

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

