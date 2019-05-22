<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    body{
        width: 891px;
        margin: 0 auto;
    }
    .table-wrapper{
        display: inline-block;
        width: 442px;
        margin: 0 auto;
    }
    .table-wrapper table{
        width: 100%;
        border-spacing: 0;
    }
    .table-wrapper table td{
        border: 1px solid black;
        border-bottom: none;
        padding: 4px;
        font-size: 18px;
    }
    .table-wrapper table tr:last-of-type td{
        border-bottom: 1px solid black;
    }
    h1{
        font-size: 34px;
        margin: 0;
        margin-bottom: 5px;
        margin-top: 10px;
    }
    h2{
        margin: 0;
        margin-bottom: 5px;
        margin-top: 10px;
    }
</style>
<body>

<div class="day">
    <h1>Fredag</h1>
@foreach($dayOne as $ship)
<div class="table-wrapper">
    <h2>{{$ship['name']}}</h2>
    <table>
        <tbody>
            @foreach($ship['teams'] as $team)
                @foreach($team['persons'] as $person)
                    <tr>
                        <td>{{$person['id']}}. {{$person['name']}}</td>

                    </tr>
                @endforeach

            @endforeach
        </tbody>
    </table>
</div>
@endforeach
</div>

<div class="day">
    <h1 style="margin-top:80px;">Lørdag</h1>
@foreach($dayTwo as $ship)
        <div class="table-wrapper">
            <h2>{{$ship['name']}}</h2>
            <table>
                <tbody>
                @foreach($ship['teams'] as $team)
                    @foreach($team['persons'] as $person)
                        <tr>
                            <td>{{$person['id']}}. {{$person['name']}}</td>
                        </tr>
                    @endforeach

                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>






</body>
</html>