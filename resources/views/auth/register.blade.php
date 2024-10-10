@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
    <input type="submit" value="Register">
</form>