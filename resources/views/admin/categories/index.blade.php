@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr>
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">عنوان</th>
                <th class="th_text">دسته والد</th>
                <th class="th_text">ویرایش</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td class="td_text th_text_pl">{{$category->id}}</td>
                    <td class="td_text">{{$category->title}}</td>
                    <td class="td_text">{{optional($category->parent)->title}}</td>
                    <td class="td_text">
                        <a href="{{route('categories.edit' , $category)}}"
                           class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td class="td_text">

                        <form action="{{route('categories.destroy' , $category)}}" method="post">
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





