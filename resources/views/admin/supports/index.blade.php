<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }}">Novo Suporte</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Mensagem</th>
        <th></th>
    </thead>
    <tbody>

        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>