
@extends('layouts.templete')
 
@section('css')
@endsection
@section('content')
@if (session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss='alert'>x</button>
  {{session()->get('message')}}
</div>
    
@endif
<div align="center" style="padding: 70px">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Doctor Name</th>
      <th scope="col">Speciality</th>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
      <th scope="col">Cancel Appoinment</th>
    </tr>
  </thead>
  <tbody>
			@foreach ($appoints as $appoint)
						
    <tr class="bg-primary">
      <td>{{$appoint->doctor_name}}</td>
      <td>{{$appoint->speciality}}</td>
      <td>{{$appoint->date}}</td>
      <td>{{$appoint->message}}</td>
      <td class="bg-warning">{{$appoint->status}}</td>
      <td class="bg-danger"><a class="text-white text-center" style="text-decoration: none" href="{{url('/cancel_appoint',$appoint->id)}}}" onclick="return confirm('Are you sure cancel your appoinment?')">Cancel</a></td>
    </tr>
				@endforeach
  </tbody>
</table>
</div>
@endsection
