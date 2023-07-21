@foreach ($doctors as $doctor)
<div class="item">
		<div class="card-doctor">
				<div class="header">
						<img height="300px" src="doctorimage/{{$doctor->image}}" alt="">
						<div class="meta">
								<a href="#"><span class="mai-call"></span></a>
								<a href="#"><span class="mai-logo-whatsapp"></span></a>
						</div>
				</div>
				<div class="body">
						<p class="text-xl mb-0">{{ $doctor->name }}</p>
						<span class="text-sm text-grey">{{ $doctor->speciality }}</span>
				</div>
		</div>
</div>
@endforeach