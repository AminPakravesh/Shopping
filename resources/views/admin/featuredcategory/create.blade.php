@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ایجاد دسته ویژه
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('featuredCategory.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="category_id">دسته ویژه</label>
                            <select name="category_id" id="category_id" class="form-control mt-3">
                                <option value="" selected>دسته ویژه را انتخاب کنید ...</option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
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
