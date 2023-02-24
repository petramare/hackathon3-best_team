@include('common.html-start')

    <h3>Animals:</h3>
    @if (count($resultAnimals)>0)
    <ul>
        @foreach ($resultAnimals as $animal)
            <li>{{ $animal->name }}  <br> owner: {{ $animal->owner->first_name }} {{ $animal->owner->surname }}</li>
        @endforeach
    </ul>
    @else <p>No animals found</p>
    @endif

    <br>

    <h3>Owners:</h3>
    @if (count($resultOwners)>0)
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
    @else <p>No owners found</p>
    @endif

@include('common.html-end')