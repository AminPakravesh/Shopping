@extends('admin.layout.master')


@section('content')

    <div class="main-content box table-responsive table-bordered">
        <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
            <thead class="thead_dark ">
            <tr>
                <th class="th_text th_text_pl">#</th>
                <th class="th_text">کد</th>
                <th class="th_text">تاریخ آغاز</th>
                <th class="th_text">تاریخ پایان</th>
                <th class="th_text">ویرایش</th>
                <th class="th_text">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <td class="td_text th_text_pl">{{$offer->id}}</td>
                    <td class="td_text">{{$offer->code}}</td>
                    <td class="td_text">{{$offer->starts_at}}</td>
                    <td class="td_text">{{$offer->expires_at}}</td>
                    <td class="td_text">
                        <a href="{{route('offers.edit' , $offer)}}"
                           class="btn btn-sm btn-primary">ویرایش</a>
                    </td>
                    <td class="td_text">

                        <form action="{{route('offers.destroy' , $offer)}}" method="post">
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





