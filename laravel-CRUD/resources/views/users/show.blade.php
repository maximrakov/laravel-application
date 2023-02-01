@if($error)
    {{$error}}
    <br>
@else
    Name: {{ $user -> name }}
    <br>
    Email: {{ $user -> email }}
    <br>
    <button onclick="location.href = '{{ $user -> id }}/edit';">Edit</button>
    <form action="/users/{{$user -> id}}" method="POST">
        @csrf
        @method('DELETE')
        <button name="delete" value="Delete">Delete</button>
    </form>
@endif
<button onclick="location.href = '/users';">Back</button>
