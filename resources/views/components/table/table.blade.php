<table class="table table-striped table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Birth Date</th>
        <th>Created At</th>
        <th >Updated At</th>
        <th>Car</th>
    </tr>
    @foreach($players as $player)
        <tr>
            <th>{{$player->id}}</th>
            <th>{{$player->name}}</th>
            <th>{{$player->birth_date}}</th>
            <th>{{$player->created_at}}</th>
            <th>{{$player->updated_at}}</th>
            <th>
                @foreach($player->cars as $car)
                   <p>{{$car->name}}</p>
                @endforeach
            </th>
            <th>
                {{$player->address->address}}
                {{$player->address->country->name}}
            </th>
        </tr>
    @endforeach
</table>
