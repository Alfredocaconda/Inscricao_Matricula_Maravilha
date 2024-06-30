<h1> Duvida {{$valor->id}}</h1>
{{--- CODIGO PARA PODER EXIBIR MENSAGEM--}}
{{--obtemos uma condicao para saber se existe erro--}}
@if ($errors->any())
{{--inserimos um ciclo de repeticao para poder comparar varios valores--}}
    @foreach ($errors->all() as $error)
    {{--script para apresentar informacoes na tela--}}
       <script>alert('{{$error}}');</script>
    @endforeach
@endif
{{--fim da condicao--}}
<form action="{{route('suport.update', $valor->id)}}" method="post">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Assunto" value="{{$valor->objectivo}}" name="objectivo">
    <textarea name="informacoes" id="" cols="30" rows="10" placeholder="Descrição">
        {{$valor->informacoes}}
    </textarea>
    <button type="submit">enviar</button>
</form>
