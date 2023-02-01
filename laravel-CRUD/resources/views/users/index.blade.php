<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>
                {{$user->id}}
            </td>
            <td> <a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
</table>

<button onclick="location.href = '/';">Back</button>
