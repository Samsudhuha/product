@extends('layouts.home')

@section('title','Manage Product')

@section('navbar')

@endsection

@section('sidebar')

@endsection

@section('custom-css')

@endsection

@section('content')
            <a class="btn btn-success" href="/" style="margin-bottom: 10px">Back to Dashboard</a>
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
                    <a class="btn btn-info" href="/product/category/form" style="margin-bottom: 10px">Add Category</a>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Category</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="dataTable" class="display expandable-table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="40%">Category Name</th>
                                                            <th width="40%">Image</th>
                                                            <th width="20%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($categories as $item)
                                                            <tr>
                                                                <td>{{ $item->nama }}</td>
                                                                <td><img src="{{$item->image}}" alt="your image" style="height: 150px; width:150px" /></td>
                                                                <td>
                                                                    <a class="btn btn-warning" href="/product/category/edit/{{$item->id}}">Edit</a>
                                                                    <button class="btn btn-danger" onclick="deleteKategoriConfirmation({{$item->id}})" type="button">Delete</button>

                                                                    <form action="/product/category/delete" method="post" hidden class="kategori{{$item->id}}">
                                                                        @csrf
                                                                        <input type="text" value="{{$item->id}}" name="id" hidden>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin">
                    <a class="btn btn-info" href="/product/form" style="margin-bottom: 10px">Add Product</a>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Product</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="dataTable2" class="display expandable-table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="25%">Category Name</th>
                                                            <th width="25%">Product name</th>
                                                            <th width="30%">Image</th>
                                                            <th width="20%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $item)
                                                            <tr>
                                                                <td>{{$item->kategori->nama}}</td>
                                                                <td>{{$item->nama}}</td>
                                                                <td><img src="{{$item->image}}" alt="your image" style="height: 150px; width:150px" /></td>
                                                                <td>
                                                                    <a class="btn btn-warning" href="/product/edit/{{$item->id}}">Edit</a>
                                                                    <button class="btn btn-danger" onclick="deleteProductConfirmation({{$item->id}})" type="button">Delete</button>

                                                                    <form action="/product/delete" method="post" hidden class="product{{$item->id}}">
                                                                        @csrf
                                                                        <input type="text" value="{{$item->id}}" name="id" hidden>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('custom-js')

<script>
    
    $(function () {
        $('#dataTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#dataTable2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    function deleteKategoriConfirmation(flag) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You can't change the data if it's already saved",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancel',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                $( ".kategori" + flag ).submit();
            }
        })
    }

    function deleteProductConfirmation(flag) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You can't change the data if it's already saved",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancel',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                $( ".product" + flag ).submit();
            }
        })
    }
</script>
@endsection