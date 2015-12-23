<h1>Products</h1>

<ul>
    @foreach($products as $row)
    <li>{{ $row->name }}</li>
    @endforeach
</ul>