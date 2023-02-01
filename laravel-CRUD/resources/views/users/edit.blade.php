<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" name="id " value="{{ $user->id }}" class="form-control"
           placeholder="id">
    <br>
    <strong>Name: </strong>
    <input type="text" name="name" value="{{ $user->name }}" class="form-control"
           placeholder="Name">
    <br>
    <strong>Email: </strong>
    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
    <input type="text" name="password" value="{{ $user->password }}" class="form-control"
           placeholder="password">
    <br>
    <button type="submit">Save Changes</button>
</form>
<button onclick="location.href = '/users/{{$user->id}}';">Back</button>
