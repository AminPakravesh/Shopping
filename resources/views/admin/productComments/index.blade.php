@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <div>
            <h3 class="box-title">نظرات محصول {{$product->name}}</h3>
        </div>
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr  >
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">نام کاربر</th>
                <th class="th_text">متن کامنت</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product->comments as $comment)
                <tr>
                    <td class="td_text th_text_pl">{{$comment->id}}</td>
                    <td class="td_text">{{$comment->user->name}}</td>
                    <td class="td_text">{{$comment->content}}</td>
                    <td class="td_text">

                        <form action="{{route('comments.destroy' , $comment)}}" method="post">
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





