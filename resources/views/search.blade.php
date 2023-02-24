@include('common.html-start')

<form action="/search" method="GET">
    <input type="text" name="q" placeholder="Search...">
    <button type="submit">Search</button>
</form>

@if ($results->count() > 0)
    <ul>
        Animals:
        @foreach ($results as $result)
            <li>{{ $result->name}}</li>
        @endforeach
    </ul>

    <ul>
        Owners:
        @foreach ($results as $result)
            <li>{{ $result->surname }}</li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif

@include('common.html-end')