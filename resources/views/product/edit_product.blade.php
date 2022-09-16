@extends('layouts.home')

@section('title','Product - Edit')

@section('navbar')

@endsection

@section('sidebar')

@endsection

@section('custom-css')
<link rel="stylesheet" href="{{url('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{url('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
@endsection

@section('content')
            <div class="row">
                <div class="col-md-12 grid-margin">
                    @if (count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ session('success') }}</li>
                        </ul>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Product</h4>
                                    <form class="pt-3" method="POST" action="/product/update/{{$product->id}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1">Category Name</label>
                                                    <select class="js-example-basic-single w-100" name="product_categories_id">
                                                        <option disabled selected>Choose Category</option>
                                                        @foreach($categories as $key => $value)
                                                            <option value="{{$value->id}}"@if ($value->id == $product->product_categories_id) selected @endif>{{$value->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1">Product Name</label>
                                                    <input type="text" class="form-control" required hidden name="id" value="{{$product->id}}">
                                                    <input type="text" class="form-control" required placeholder="Product Name" name="nama" value="{{$product->nama}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type='file' name="image" onchange="readURL(this);" accept="image/*" />
                                                </div>
                                                <img id="blah" src="#" alt="your image" />
                                                <br><br>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('custom-js')
<script src="{{url('vendors/select2/select2.min.js')}}"></script>
<script src="{{url('js/select2.js')}}"></script>
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