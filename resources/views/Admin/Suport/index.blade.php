<h2>Listagens dos suportes</h2>

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
                    >
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
