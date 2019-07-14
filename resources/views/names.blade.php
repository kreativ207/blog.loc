<a href="/form">Добавить</a>
<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Last Name</td>
    </tr>
    @foreach($names as $name);
        <tr>
            <td>{{ $name->id }}</td>
            <td>{{ $name->first_name }}</td>
            <td>{{ $name->last_name }}</td>
        </tr>
    @endforeach;
</table>