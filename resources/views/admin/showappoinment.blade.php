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
                    <table class="g-5px px-3" >
                        <tr style="backgroud-color:balck; gap:5px">
                          <th style="padding:10px; margin-right:5px;">Name</th>
                          <th style="padding:10px; margin-right:5px;">Email</th>
                          <th style="padding:10px; margin-right:5px;">Phone</th>
                            <th style="padding:10px; margin-right:5px;">Doctor Name</th>
                            <th style="padding:10px; margin-right:5px;">Speciality</th>
                            <th style="padding:10px; margin-right:5px;">Date</th>
                            <th style="padding:10px; margin-right:5px;">Message</th>
                            <th style="padding:10px; margin-right:5px;">Status</th>
                            <th style="padding:10px; margin-right:5px;">Approved</th>
                            <th style="padding:10px; margin-right:5px;">Cancel Appoinment</th>
                            <th style="padding:10px; margin-right:5px;">Send Mail</th>
                        </tr>

                        @foreach ($data as $d)
                            
                        
                   <tr style="background-color:grey; text-align:center; gap:5px;">
                  <td>{{$d->name}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->phone}}</td>
                  <td>{{$d->doctor_name}}</td>
                  <td>{{$d->speciality}}</td>
                  <td>{{$d->date}}</td>
                  <td>{{$d->message}}</td>
                  <td>{{$d->status}}</td>
                  <td>
                    <a class="btn btn-success" href="{{url('approved',$d->id)}}">Approved</a>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="{{url('canceled',$d->id)}}">Canceled</a>
                  </td>
                  <td>
                    <a class="btn btn-primary" href="{{url('emailview',$d->id)}}">Mail</a>
                  </td>
                  
                </tr>
                @endforeach
                        
                </table>
            </div>

        </div>
        @include('admin.script');
</body>

</html>
