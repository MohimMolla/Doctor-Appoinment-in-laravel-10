<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
	<base href="/public">
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
													{{-- {{ url('store_doctor') }} --}}
													<form action=" {{ url('sendemail',$data->id) }}" method="POST">
																	@csrf
																	<fieldset>
																					<legend>Add Doctor</legend>
																					<div style="padding: 15px;">
																									<label for="">Greeting</label>
																									<input type="text" style="color: black;" name="greeting">
																					</div>
																					<div style="padding: 15px;">
																									<label for="">Body:</label>
																									<input type="text" style="color: black;" name="body">
																					</div>
																				
																					<div style="padding: 15px;">
																									<label for="">Action Text</label>
																									<input type="text" style="color: black;" name="actiontext">
																													
																					</div>
																				
																					<div style="padding: 15px;">
																									<label for="">Action Url</label>
																									<input type="text" style="color: black;" name="actionurl">
																													
																					</div>
																					<div style="padding: 15px;">
																									<label for="">End part</label>
																									<input type="text" style="color: black;" name="endpart">
																													
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
