<div>
    <table>
        <thead>
            <th>nome</th>
            <th>LE</th>
            <th>LD</th>
        </thead>
        <tbody>
            @foreach($usuario as $user)  
            <tr>
                <td> {{ $user->nome }}</td>
                <td> {{ $user->lado_esquerdo }}</td>
                <td> {{ $user->lado_direito }}</td>
            </tr>
            @endforeach
        
        </tbody>
    </table>