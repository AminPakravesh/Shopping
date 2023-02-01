@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ویرایش مشخصات
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('propertyGroups.update' , $property)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title" class="mt-3">عنوان</label>
                            <input type="text" class="form-control mt-4" name="title" id="title" value="{{$property->title}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ایجاد"
                                   class="btn btn-primary mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
