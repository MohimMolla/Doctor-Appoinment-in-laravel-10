<x-app-layout>
    {{-- <x-slot name="header">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
					{{ __('Dashboard') }}
			</h2>
	</x-slot> --}}
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css ">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            {{-- <h1>Add Doctor</h1>
			<br> --}}
       
            <div class="container" align="center" style="paddding-top:100px;">
                @if (session()->has('message'))

                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss='alert'>x</button>
                  {{session()->get('message')}}
                </div>
                    
                @endif

                <form action="{{ url('store_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Add Doctor</legend>
                        <div style="padding: 15px;">
                            <label for="">Doctor Name:</label>
                            <input type="text" style="color: black;" name="name" placeholder="Write name">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Phone Number:</label>
                            <input type="text" style="color: black;" name="phone" placeholder="Write Phone Number">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Speciality:</label>
                            <select name="speciality" id="speciality" style="color: black; width:200px;">
                                <option value="-1">Select</option>
                                <option value="skin">Skin</option>
                                <option value="hart">Hart</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Room Number:</label>
                            <input type="text" style="color: black;" name="room_number"
                                placeholder="Write room number">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Achievement : </label>
                            <input type="text" style="color: black;" name="achievement"
                                placeholder="Write Achievement">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Institute : </label>
                            <input type="text" style="color: black;" name="institute" placeholder="Write Institute">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Doctor Details : </label>
                            <input type="text" style="color: black;" name="doctor_details"
                                placeholder="Write Doctor Details">
                        </div>

                        <div style="padding: 15px;">
                            <label for="">Doctor Image:</label>
                            <input type="file" name="file">
                        </div>
                        <div style="padding: 15px;">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script');
</body>

</html>
