@extends('admin.layout.master')
@section('content')

    <div class="row col-sm-8">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ویرایش کد تخفیف
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('offers.update',$offer)}}" method="post" >
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="code" class="mt-3">کد</label>
                            <input type="text"  class="form-control mt-4" name="code" id="code" value="{{$offer->code}}">
                        </div>

                        <div class="form-group">
                            <label for="starts_at" class="mt-3">تاریخ آغاز</label>
                            <span style="padding-right: 10px">{{$offer->starts_at}}</span>
                            <input type="date"  class="form-control mt-4" name="starts_at" id="starts_at" value="{{$offer->starts_at}}">
                        </div>

                        <div class="form-group">
                            <label for="expires_at" class="mt-3">تاریخ پایان</label>
                            <span style="padding-right: 10px">{{$offer->expires_at}}</span>
                            <input type="date" class="form-control mt-4" name="expires_at" id="expires_at" value="{{$offer->expires_at}}">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ایجاد" class="btn btn-primary mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('admin.layout.errors')
    </div>

@endsection

