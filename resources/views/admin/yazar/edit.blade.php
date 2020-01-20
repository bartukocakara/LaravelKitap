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
                        <h4 class="card-title">Yazar Düzenle</h4>
                    </div>
                    <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('admin.yazar.edit.post', ['id'=>$data[0]['id']])}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Yazar Adı:</label>
                                <input type="text" name="name" class="form-control" value="{{$data[0]['name']}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    @if($data[0]['image'] != "")
                                        <img src="{{asset($data[0]['image'])}}" style="width:120px; height:120px" alt="">
                                    @endif
                                <input style="opacity :1, position:inherit" type="file" name="image">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Yazar Bio:</label>
                                <textarea name="bio" id="" cols="30" rows="20" class="form-control">{{$data[0]['bio']}}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Yazar Düzenle</button>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection