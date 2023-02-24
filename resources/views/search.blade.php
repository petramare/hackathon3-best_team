@include('common.html-start')

<form action="/search" method="GET">
    <input type="text" name="q" placeholder="Search...">
    <button type="submit">Search</button>
</form>

@if ($resultAnimals->count() > 0)
    <h3>Animals:</h3>
    <ul>
        @foreach ($resultAnimals as $animal)
            <li>{{ $animal->name }}  <br> owner: {{ $animal->owner->first_name }} {{ $animal->owner->surname }}</li>
        @endforeach
    </ul>
    <br>

    <h3>Owners:</h3>
    <ul>
        @foreach ($resultOwners as $owner)
            <li> <strong>{{ $owner->surname }}</strong> {{ $owner->first_name }} 
                <ul>
                    @foreach ($owner->animals as $animal)
                        <li>
                            {{ $animal->name }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif

@include('common.html-end')