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
                        <h4 class="card-title">Kitap Ekle</h4>
                    </div>
                    <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('admin.kitap.create.post')}}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Adı:</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Yazarı:</label>
                                    <select name="yazarid" class="form-control" id="">
                                        @foreach ($yazar as $key=>$value)
                                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kategori Adı:</label>
                                    <select name="kategoriid" class="form-control" id="">
                                        @foreach ($kategori as $key=>$value)
                                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>YayınEvi Adı:</label>
                                    <select name="yayineviid" class="form-control" id="">
                                        @foreach ($yayinevi as $key=>$value)
                                            <option value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Resmi:</label>
                                    <input type="file" name="image" style="position:inherit; opacity:1" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Fiyatı:</label>
                                    <input type="text" name="fiyat" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Açıklama:</label>
                                    <textarea name="aciklama" id="" cols="30" rows="20" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Kitap Ekle</button>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection