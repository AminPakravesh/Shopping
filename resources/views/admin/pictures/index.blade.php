@extends('admin.layout.master')
@section('content')

    <div class="mb-18 mt-10 mb-10">
        <!--begin::Heading-->

        <!--end::Heading-->
        <!--begin::Wrapper-->

        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">

            <form action="{{route('products.pictures.store',$product)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image" class="pb-3">آپلود</label>
                    <input type="file" name="image" class="form-control mb-3">
                </div>
                <div class="form-group">
                    <input type="submit" value="آپلود" class="btn btn-sm btn-primary mb-10">
                </div>
            </form>


            <!--begin::آیتم-->

            @foreach($product->pictures as $picture)

                <div class="col text-center mb-9">
                    <!--begin::Photo-->
                    <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{str_replace('public','/storage',$picture->path)}}')"></div>
                    <!--end::Photo-->
                    <!--begin::Person-->
                    <div class="mb-0">
                        <form action="{{route('products.pictures.destroy',['product'=>$product,'picture'=>$picture])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                        </form>
                    </div>
                    <!--end::Person-->
                </div>

            @endforeach
            <!--end::آیتم-->
        </div>
        <!--end::Wrapper-->
    </div>


@endsection
