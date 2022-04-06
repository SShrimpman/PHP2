<table style="border: 1px solid black">
    <tr style="border: 1px solid black">
        <th style="border: 1px solid black">ID</th>
        <th style="border: 1px solid black">Name</th>
        <th style="border: 1px solid black">Birth Date</th>
        <th style="border: 1px solid black">Created At</th>
        <th style="border: 1px solid black">Updated At</th>
    </tr>
    @foreach($players as $player)
        <tr style="border: 1px solid black">
            <th style="border: 1px solid black">{{$player->id}}</th>
            <th style="border: 1px solid black">{{$player->name}}</th>
            <th style="border: 1px solid black">{{$player->birth_date}}</th>
            <th style="border: 1px solid black">{{$player->created_at}}</th>
            <th style="border: 1px solid black">{{$player->updated_at}}</th>
        </tr>
    @endforeach
</table>
