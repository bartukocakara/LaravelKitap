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
                        <h4 class="card-title">Yayın Evi  Ekle</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{route('admin.yayinevi.create.post')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Yayın Evi Adı:</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Yayın Evi Ekle</button>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection