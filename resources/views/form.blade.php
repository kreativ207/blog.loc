<form action="/form" method="post">
    @csrf
    First Name: <input type="text" name="first_name" value="{{ old('first_name') }}">
    Last Name: <input type="text" name="last_name" value="{{ old('last_name') }}">
    <button type="submit">Send</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif