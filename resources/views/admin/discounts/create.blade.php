@extends('admin.layout.master')
@section('content')

    <div class="row col-sm-8">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ایجاد تخفیف
                    </h2>
                </div>
                <div class="box-body">
                    <form action="{{route('products.discounts.store',$product)}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="value" class="mt-3">مقدار </label>
                            <input type="number" max="100" min="1" class="form-control mt-4" name="value" id="value">
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

