@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ویرایش نقش {{$role->title}}
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('roles.update',$role)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title" class="mt-3">عنوان</label>
                            <input type="text" class="form-control mt-4" name="title" id="title" value="{{$role->title}}">
                        </div>
                        <div class="form-group">
                            <label >انتخاب نقش ها</label>
                            <div class="row">
                                @foreach($permissions as $permission)
                                    <label  class="col-sm-2">
                                        <input
                                            @if($role->permissions()->where('permission_id',$permission->id)->exists())
                                                checked
                                            @endif
                                                style="opacity: 1 !important;
                                                position: static !important;
                                                left: 0; right: 0;"
                                            type="checkbox" name="permissions[]" value="{{$permission->id}}" >
                                        {{$permission->label}}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ویرایش" class="btn btn-primary mt-4">
                        </div>
                    </form>

                    @if(count($errors->all())>0)
                        <ul class="bg-danger">
                            @foreach($errors->all() as $error)
                                <li class="text-white">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
