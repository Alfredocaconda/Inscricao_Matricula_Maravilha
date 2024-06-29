<h1> NOVO SUPORTE</h1>
{{--- CODIGO PARA PODER EXIBIR MENSAGEM--}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif
<form action="{{route('suport.store')}}" method="post">
    <!---- input para pegar o token----->
    {{--<input type="hidden" value="{{csrf_token()}}" name="_token">---}}
    @csrf()
    <input type="text" placeholder="Assunto" name="objectivo" value="{{old('objectivo')}}">
    {{--value="{{old('objectivo')
    old->ele serve para persistir os valores nos campos "--}}
    <textarea name="informacoes" id="" cols="30" rows="10" placeholder="Descrição">{{old('informacoes')}}</textarea>
    <button type="submit">enviar</button>
</form>
