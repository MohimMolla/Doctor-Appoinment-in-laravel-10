<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
				

        <form class="main-form" action="{{url('appointment')}}" method="POST">
					@csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                </div>
                {{-- Add extra field for doctor name start --}}
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
									<select name="speciality" id="departement" class="custom-select">
										<option value="-1">Select</option>
										@foreach ($doctors as $doctor)
												<option value="{{ $doctor->speciality }}">{{ $doctor->name }}------{{ $doctor->speciality }}
												</option>
										@endforeach
								</select>
                    
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input name="date" type="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
									<select name="doctor_name" id="doctorname" class="custom-select">
										<option value="-1">Select</option>
										@foreach ($doctors as $doctor)
												<option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
										@endforeach

								</select>
                </div>

                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="messege" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>

            </div>
						
							<button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
				
        </form>
    </div>
</div>
