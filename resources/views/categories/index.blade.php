<h1>Categories</h1>

<ul>
    @foreach($categories as $row)
    <li>{{ $row->name }}</li>
    @endforeach
</ul>