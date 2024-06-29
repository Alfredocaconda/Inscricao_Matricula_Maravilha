<h1>Detalhes da duvida {{$valor->id}}</h1>
<ul>
    <li>Objectivo :{{$valor->objectivo}}</li>
    <li>Status :{{$valor->status}}</li>
    <li>Informacoes :{{$valor->informacoes}}</li>
</ul>
    <form action="{{route('suport.apagar',$valor->id)}}" method="post">
        @csrf()
        @method('DELETE')
        <button type="submit">apagar</button>
    </form>
