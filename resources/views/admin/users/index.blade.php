@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <div>
            <h3 class="box-title">;کاربران</h3>
        </div>
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr  >
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">نام</th>
                <th class="th_text">ایمیل</th>
                <th class="th_text">نقش</th>
                <th class="th_text">ویرایش</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="td_text th_text_pl">{{$user->id}}</td>
                    <td class="td_text">{{$user->name}}</td>
                    <td class="td_text">{{$user->email}}</td>
                    <td class="td_text">{{$user->role->title}}</td>
                    <td class="td_text">
                        <a href="{{route('users.edit',$user)}}"
                           class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td class="td_text">

                        <form action="{{route('users.destroy',$user)}}" method="post">
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





