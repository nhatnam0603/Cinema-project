<html>
<head>
    <style>
        body {
            background-color: Thistle;
            font-family: "Yanone Kaffeesatz", sans-serif;
            font-weight: 600;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .ticket {
            width: 400px;
            background-color: white;
            margin: 25px auto;
            position: relative;
        }

        .holes-top {
            height: 50px;
            width: 50px;
            background-color: Thistle;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            margin-left: -25px;
            top: -25px;
        }

        .holes-top:before,
        .holes-top:after {
            content: "";
            height: 50px;
            width: 50px;
            background-color: Thistle;
            position: absolute;
            border-radius: 50%;
        }

        .holes-top:before {
            left: -200px;
        }

        .holes-top:after {
            left: 200px;
        }

        .holes-lower {
            position: relative;
            margin: 25px;
            border: 1px dashed #aaa;
        }

        .holes-lower:before,
        .holes-lower:after {
            content: "";
            height: 50px;
            width: 50px;
            background-color: Thistle;
            position: absolute;
            border-radius: 50%;
        }

        .holes-lower:before {
            top: -25px;
            left: -50px;
        }

        .holes-lower:after {
            top: -25px;
            left: 350px;
        }

        .title {
            padding-top: 5px;
            padding-left: 10px;
        }

        .cinema {
            color: #aaa;
            font-size: 22px;
        }

        .movie-title {
            padding-top: -5px;
            font-size: 40px;
        }

        .info {
            padding: 15px 25px;
        }

        table {
            width: 100%;
            font-size: 18px;
            margin-bottom: 15px;
        }

        table tr {
            margin-bottom: 10px;
        }

        table th {
            text-align: left;
        }

        table th:nth-of-type(1) {
            width: 38%;
        }

        table th:nth-of-type(2) {
            width: 40%;
        }

        table th:nth-of-type(3) {
            width: 15%;
        }

        table td {
            width: 33%;
            font-size: 32px;
        }

        .bigger {
            font-size: 48px;
        }

        .serial {
            padding: 25px;
        }

        .serial table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        .serial td {
            width: 3px;
            height: 50px;
        }

        .numbers td {
            font-size: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--
Inspired by: https://dribbble.com/shots/1166639-Movie-Ticket/attachments/152161
-->
    @foreach($ticketList as $ticket)
  
    <div class="ticket">
        <div class="holes-top"></div>
        <div class="title">
            <p class="cinema">4GROUP CINEMA PRESENTS</p>
            <p class="movie-title">{{$movieName}}</p>
        </div>
        <div class="poster">
            <img src="{{asset('assets/img/movie/'.$image)}}" alt="Movie: {{$image}}" height="300px"/>
        </div>
        <div class="info">
            <table>
                <tr>
                    <th>SCREEN</th>
                    <th>ROW</th>
                    <th>SEAT</th>
                </tr>
                <tr>
                    <td class="bigger">{{$screenName}}</td>
                    <td class="bigger">{{$ticket['row']}}</td>
                    <td class="bigger">{{$ticket['seat']}}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>PRICE(VND)</th>
                    <th>DATE</th>
                    <th>TIME</th>
                </tr>
                <tr>
                    <td>{{number_format($price,0,' ', ' ')}}</td>
                    <td>{{date('d/m/Y',strtotime($date))}}</td>
                    <td>{{$time}}</td>
                </tr>
            </table>
        </div>
        <div class="holes-lower"></div>
        <div class="serial">
            <table class="barcode" >
                <tr>    {!! DNS1D::getBarcodeHTML('TicektId-'.$ticket['bookingid'], "C128",1.4,22) !!} <tr>
            </table>
        </div>
    </div>
    <br>
    @endforeach
</body>
</html>