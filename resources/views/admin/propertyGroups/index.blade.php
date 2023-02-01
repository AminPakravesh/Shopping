@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <h2>گروه مشخصات</h2>
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr>
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">عنوان</th>
                <th class="th_text">ویرایش</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($properties as $property)
                <tr>
                    <td class="td_text th_text_pl">{{$property->id}}</td>
                    <td class="td_text">{{$property->title}}</td>
                    <td class="td_text">
                        <a href="{{route('propertyGroups.edit' , $property)}}"
                           class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td class="td_text">

                        <form action="{{route('propertyGroups.destroy' , $property)}}" method="post">
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





