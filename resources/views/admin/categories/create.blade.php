@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ایجاد دسته بندی
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="category_id">دسته والد</label>
                            <select name="category_id" id="category_id" class="form-control mt-3">
                                <option value="" selected>دسته والد را انتخاب کنید ...</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title" class="mt-3">عنوان</label>
                            <input type="text" class="form-control mt-4" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label >انتخاب گروه ویژگی ها</label>
                            <div class="row">
                                @foreach($properties as $property)
                                    <label  class="col-sm-2">
                                        <input type="checkbox" name="properties[]" value="{{$property->id}}" >
                                        {{$property->title}}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ایجاد" class="btn btn-primary mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
