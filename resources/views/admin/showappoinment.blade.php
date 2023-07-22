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
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div style="text-align:center " style="padding: 100px">
                    <table >
                        <tr style="backgroud-color:balck;">
                          <th style="padding:10px; margin-right:5px;">Name</th>
                          <th style="padding:10px; margin-right:5px;">Email</th>
                          <th style="padding:10px; margin-right:5px;">Phone</th>
                            <th style="padding:10px; margin-right:5px;">Doctor Name</th>
                            <th style="padding:10px; margin-right:5px;">Speciality</th>
                            <th style="padding:10px; margin-right:5px;">Date</th>
                            <th style="padding:10px; margin-right:5px;">Message</th>
                            <th style="padding:10px; margin-right:5px;">Status</th>
                            <th style="padding:10px; margin-right:5px;">User id</th>
                            <th style="padding:10px; margin-right:5px;">Cancel Appoinment</th>
                        </tr>
                   <tr style="background-color:grey; text-align:center;">
                  <td>gg</td>
                  <td>vvv</td>
                  <td>vv</td>
                  <td>vv</td>
                  <td>vv</td>
                  <td>vv</td>
                  <td>vv</td>
                  <td>vv</td>
                  <td>vv</td>
                  <td>vv</td>
                </tr>
                        
                </table>
            </div>

        </div>
        @include('admin.script');
</body>

</html>
