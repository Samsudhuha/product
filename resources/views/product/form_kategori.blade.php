@extends('layouts.home')

@section('title','Product Category - Form')

@section('navbar')

@endsection

@section('sidebar')

@endsection

@section('custom-css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product Category</h4>
                    <form class="pt-3" method="POST" action="/product/category"enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" class="form-control" required placeholder="Category Name" name="name">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type='file' name="image" onchange="readURL(this);" accept="image/*"/>
                            </div>
                            <img id="blah" src="#" alt="your image" />
                            <br><br>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-js')

<script>
    $(document).ready(function() {
        $("#blah").hide();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
                $('#blah').show()
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

@endsection