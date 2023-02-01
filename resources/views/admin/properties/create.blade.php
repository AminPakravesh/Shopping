@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ایجاد مشخصات
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('properties.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title" class="mt-3">عنوان</label>
                            <input type="text" class="form-control mt-4" name="title" id="title">
                        </div>


                        <div class="form-group">
                            <label for="property_group_id" class="mt-5"> گروه ویژگی</label>
                            <select name="property_group_id" id="property_group_id" class="form-control mt-3">
                                <option value="" selected>گروه ویژگی را انتخاب کنید ...</option>
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->title}}</option>
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
