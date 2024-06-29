<h1> Duvida {{$valor->id}}</h1>

<form action="{{route('suport.update', $valor->id)}}" method="post">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Assunto" value="{{$valor->objectivo}}" name="objectivo">
    <textarea name="informacoes" id="" cols="30" rows="10" placeholder="Descrição">
        {{$valor->informacoes}}
    </textarea>
    <button type="submit">enviar</button>
</form>
