<x-app-layout>
    {{-- <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
		{{ __('Dashboard') }}
</h2>
</x-slot> --}}
</x-app-layout>

<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        table, th, td {
    border: 2px rgb(43, 31, 31) solid;
    padding: 2px;
  }
      </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')

        <div class=" page-body-wrapper">

            <div style="text-align:left" style="padding: 80px; ">

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ session()->get('message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


                <table class="g-5px">
                    <tr style="backgroud-color:balck; gap:5px">
                        <th style="padding:10px; margin-right:5px;">Doctor Name</th>
                        {{-- <th style="padding:10px; margin-right:5px;">Email</th> --}}
                        <th style="padding:10px; margin-right:5px;">Phone</th>
                        <th style="padding:10px; margin-right:5px;">Speciality</th>
                        <th style="padding:10px; margin-right:5px;">Room number</th>
                        <th style="padding:10px; margin-right:5px;">Institute</th>
                        <th style="padding:10px; margin-right:5px;">Achievement</th>
                        <th style="padding:10px; margin-right:5px;">Image</th>

                        <th style="padding:10px; margin-right:5px;">Action</th>


                    </tr>

                    @foreach ($doctor as $d)
                        <tr style="background-color:grey; text-align:center; padding:0px 10px  ">
                            <td>{{ $d->name }}</td>
                            {{-- <td>{{ $d->email }}</td> --}}
                            <td>{{ $d->phone }}</td>

                            <td>{{ $d->speciality }}</td>
                            <td>{{ $d->room_number }}</td>
                            <td>{{ $d->institute }}</td>
                            <td>{{ $d->achievement }}</td>
                            <td>
                                <img src="{{ asset('doctorimage/' . $d->image) }}" height="100px" alt="">
                            </td>

                            <td>
                                <a class="btn btn-success" href="{{ url('/editdoctor', $d->id) }}">Edit</a>
                                <a onclick="return confirm('Are you sure this doctor data deleted')"
                                    class="btn btn-danger" href="{{ url('/deleted', $d->id) }}">Deleted</a>
                            </td>
                            {{-- <td>
                                <a class="btn btn-success" href="{{ url('approved', $d->id) }}">Edit</a>
																																<a class="btn btn-danger" href="{{ url('canceled', $d->id) }}">Canceled</a>
                            </td> --}}


                        </tr>
                    @endforeach

                </table>
            </div>

        </div>
        @include('admin.script');


</body>

</html>
