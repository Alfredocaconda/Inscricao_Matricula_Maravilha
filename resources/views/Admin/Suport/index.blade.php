<h2>Listagens dos suportes</h2>
<p><a href="{{route('suport.create')}}">Criar Dúvidas</a></p>
<table>
    <thead>
        <th>Objectivo</th>
        <th>status</th>
        <th>informacoes</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($suports as $suport)
            <tr>
                <td>{{$suport->objectivo}}</td>
                <td>{{$suport->status}}</td>
                <td>{{$suport->informacoes}}</td>
                <td>
                    <a href="{{route('suport.show',$suport->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
