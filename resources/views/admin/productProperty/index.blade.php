
@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">

                    <div class="row">
                        <div class="col-sm-8">
                            <h2 class="box-title">
                                ویژگی های محصول  {{$product->name}}
                            </h2>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-success btn-sm" href="{{route('products.properties.create',$product)}}">تغییر مقادیر ویژگی ها</a>
                        </div>
                    </div>
                </div>

                <table id="files_list" class="table table-striped dt-responsive table-bordered  " style="width:100%">
                    <thead class="thead_dark ">
                    <tr  >
                        <th class="th_text th_text_pl">#</th>
                        <th class="th_text">نام</th>
                        <th class="th_text">مقدار</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product->properties as $property)
                        <tr>
                            <td class="td_text th_text_pl">{{$property->id}}</td>
                            <td class="td_text">{{$property->title}}</td>
                            <td class="td_text">
                                {{$property->pivot->value}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        @include('admin.layout.errors')
    </div>


@endsection
