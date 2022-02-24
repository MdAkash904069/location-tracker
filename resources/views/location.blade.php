<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>*#</th>
            <th>Country Name</th>
            <th>Reion Name</th>
            <th>City Name</th>
            <th>Date</th>
        </tr>
    @foreach($locations as $key => $location)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$location->country}}</td>
            <td>{{$location->region}}</td>
            <td>{{$location->city}}</td>
            <td>{{$location->created_at}}</td>
        </tr>
    @endforeach

    </table>
    <style>
        tr,td,th{
            border:1px solid #000;
            padding:5px
        }
    </style>
</body>
</html>