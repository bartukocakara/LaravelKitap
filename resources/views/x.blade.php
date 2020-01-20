{{__('helper.welcome',['name'=>'Mert'])}}
@lang('helper.welcome',['name'=>'Bartu'])
<form action="/" method="POST">


    {{ csrf_field() }}
    <input type="text" name="name">
    @if ($errors->first('name'))
        {{$errors->first('name')}}
    @endif
    <input type="text" name="surname">
    @if ($errors->first('surname'))
        {{$errors->first('surname')}}
    @endif
    <button>Gönder</button>
</form>