@extends('admin.layout.master')


@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header mb-8">
                    <h2 class="box-title">
                        ویژگی های محصول  {{$product->name}}
                    </h2>
                </div>

                @php

                    $propertyGroups=$product->category->propertyGroups

                @endphp



                <div class="box-body">
                    <form action="{{route('products.properties.store',$product)}}" method="post" enctype="multipart/form-data">
                        @csrf



                        @foreach($propertyGroups as $group)
                            <h3>{{$group->title}}</h3>
                            <div class="row">
                                @foreach($group->properties as $property)
                                    <div class="form-group col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label for="name" class="mt-3">{{$property->title}}</label>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mt-4" name="properties[{{$property->id}}][value]" value="{{$property->getValueForProduct($product)}}">

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach



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


