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
                        <h4 class="card-title">Kitap Düzenle</h4>
                    </div>
                    <div class="card-body">
                    <form enctype="multipart/form-data" action="{{route('admin.kitap.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Adı:</label>
                                    <input type="text" name="name" class="form-control" value="{{$data[0]['name']}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Yazarı:</label>
                                    <select name="yazarid" class="form-control" id="">
                                        @foreach ($yazar as $key => $value)
                                            <option @if ($value['id'] == $data[0]['yazarid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kategori Adı:</label>
                                    <select name="kategoriid" class="form-control" id="" value="{{$data[0]['kategoriid']}}">
                                        @foreach ($kategori as $key=>$value)
                                            <option @if ($value['id'] == $data[0]['kategoriid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>YayınEvi Adı:</label>
                                    <select name="yayineviid" class="form-control" id="" value="{{$data[0]['yayineviid']}}">
                                        @foreach ($yayinevi as $key=>$value)
                                            <option @if ($value['id'] == $data[0]['yayineviid']) selected @endif value="{{$value['id']}}">{{$value['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    @if ($data[0]['image'] != "")
                                        <label>Kitap Resmi:</label>
                                        <img src="{{asset($data[0]['image'])}}" style="width:120px; height:120px;" alt="">
                                    @endif                                 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Fiyatı:</label>
                                    <input type="text" name="fiyat" class="form-control" value="{{$data[0]['fiyat']}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Açıklama:</label>
                                    <textarea name="aciklama" id="" cols="30" rows="20" class="form-control">{{$data[0]['aciklama']}}</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Kitap Düzenle</button>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection