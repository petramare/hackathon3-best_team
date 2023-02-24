@include('common.html-start')

    <h3>Animals:</h3>
    @if (count($resultAnimals)>0)
    <ul>
        @foreach ($resultAnimals as $animal)
            <li>
                <a href="{{route('animal.showAnimal', $animal->id)}}">{{ $animal->name }}</a> 
                <br>
                owner:
                <a href="{{route('owner.showOwner', $animal->owner->id)}}"><strong>{{ $animal->owner->surname }}</strong> {{ $animal->owner->first_name  }} </a>
            </li>
        @endforeach
    </ul>
    @else <p>No animals found</p>
    @endif

    <br>

    <h3>Owners:</h3>
    @if (count($resultOwners)>0)
    <ul>
        @foreach ($resultOwners as $owner)
            <li> <a href="{{route('owner.showOwner', $owner->id)}}"><strong>{{ $owner->surname }}</strong> {{ $owner->first_name }} </a> 
                <ul>
                    @foreach ($owner->animals as $animal)
                        <li>
                            <a href="{{route('animal.showAnimal', $animal->id)}}">{{ $animal->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    @else <p>No owners found</p>
    @endif

@include('common.html-end')