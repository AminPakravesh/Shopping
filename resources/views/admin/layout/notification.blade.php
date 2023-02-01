@if(session()->has('success'))

    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" style="padding-left: 10px" data-dismiss="alert" aria-label="close" position="left">&times;</a>
        <strong>عالی!</strong> {{session()->get('success')}}
    </div>


@endif
