@include('common.html-start')
<ul>
    @foreach ($owners as $owner)
        <li>{{$owner->first_name}} {{$owner->surname}}</li>
        <ul>
            @foreach ($owner->animals as $animal)
                <li>{{$animal->name}}</li>
            @endforeach
        </ul>
        <br>
    @endforeach
</ul>
@include('common.html-end')