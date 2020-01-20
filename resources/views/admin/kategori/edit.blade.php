@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status')}}
                  </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori Düzenle</h4>
                        <p class="category">{{$data[0]['name']}}</p>
                    </div>
                    <div class="card-body">
                    <form action="{{route('admin.kategori.edit.post', ['id'=>$data[0]['id']])}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kategori Adı:</label>
                                    <input type="text" value="{{$data[0]['name']}}" name="name" class="form-control" placeholder="Company" value="Mike">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Kaydet</button>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection