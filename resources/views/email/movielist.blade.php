<html>

<head>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <div class="table-responsive">
        <table class="table table-dark ">
            <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Begin at
                    </th>
                    <th>
                        End at
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $item)
                <tr>
                    <td>
                        {{ $item->name }}
                    </td>
                    @if ($item->image != null && $item->image != '')
                    <td class="py-1">
                        <img src="{{asset('assets/img/movie/'. $item->image)  }}" alt="{{ $item->name }}" style="with: 100px; height:auto;" />
                    </td>
                    @endif
                    <td>
                        {{ $item->description }}
                    </td>
                    <td>
                        {{ $item->type }}
                    </td>
                    <td>
                        {{ $item->began_at }}
                    </td>
                    <td>
                        {{ $item->end_at }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>