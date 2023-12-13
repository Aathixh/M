<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book Tickets</title>
</head>

<body>
    <h1> book tickets</h1>
    <a href="/logout"><button>
            <div class="text">Logout</div>
        </button>
    </a>

    <!-- here this /locate url is given to the book now button for the tym being... in real program it must redirect somewhere else like payment gateway.... -->


    <table border="1">
        <tr>
            <th>Sl.No</th>
            <th>Bus_No</th>
            <th>Date</th>
            <th>From</th>
            <th>To</th>
            <th>Departure_Time</th>
            <th>Duration</th>
            <th>Arrival_Time</th>
            <th>Price</th>
            <th>Tickets</th>
        </tr>
        @foreach($BusData as $key => $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->Bus_No}}</td>
            <td>{{$data->Date}}</td>
            <td>{{$data->From}}</td>
            <td>{{$data->To}}</td>
            <td>{{$data->Departure_Time}}</td>
            <td>{{$data->Duration}}</td>
            <td>{{$data->Arrival_Time}}</td>
            <td>{{$data->Price}}</td>
            <td><a href="/locate_new">
                    <button>
                        <div class="text">Book Now</div>
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>