<h1> NOVO SUPORTE</h1>

<form action="{{route('suport.store')}}" method="post">
    <!---- input para pegar o token----->
    {{--<input type="hidden" value="{{csrf_token()}}" name="_token">---}}
    @csrf()
    <input type="text" placeholder="Assunto" name="objectivo">
    <textarea name="informacoes" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
    <button type="submit">enviar</button>
</form>
