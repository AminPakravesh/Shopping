@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <div>
            <h3 class="box-title">برند ها</h3>
        </div>
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr  >
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">نام</th>
                <th class="th_text">تصویر</th>
                <th class="th_text">ویرایش</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td class="td_text th_text_pl">{{$brand->id}}</td>
                    <td class="td_text">{{$brand->name}}</td>
                    <td class="td_text"><img src="{{str_replace('public','/storage',$brand->image)}}" alt="{{$brand->name}}" width="70" style="border-radius: 5px"></td>
                    <td class="td_text">
                        <a href="{{route('brands.edit' , $brand)}}"
                           class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td class="td_text">

                        <form action="{{route('brands.destroy' , $brand)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection





