@include('common.html-start')

<h3>{{$animal->name}}</h3>
<ul>
    <li>species: {{$animal->species}}</li>
    <li>breed: {{$animal->breed}}</li>
    <li>age: {{$animal->age}}</li>
    <li>weight: {{$animal->weight}}</li>
</ul>

<img src="/images/pets/{{$animal->image->path}}" alt="doggo">


@include('common.html-end')
