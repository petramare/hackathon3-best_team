@include('common.html-start')

<h3>{{$owner->first_name}} {{$owner->surname}}</h3>
<ul>
    <li>email: {{$owner->species}}</li>
    <li>phone: {{$owner->email}}</li>
    <li>adress: {{$owner->phone}}</li>
</ul>

@include('common.html-end')