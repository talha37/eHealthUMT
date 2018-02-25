@extends('default')
@section('content')
    <!-- BEGIN: Landing (First Fold) -->
		<section>
			<div class="fold" id="landing">
				<div class="row v-center">
					<div class="col-md-12 col-xs-12 text-center">
						<!-- content + book it button here -->
						<h1>Looking for a place to book a match?</h1>
						<h2>Look no further!</h2>
						<!-- Book It button -->
						@if(Auth::user()==NULL)
						<a href="{{ url('/prebooking') }}"><button type="button" class="btn btn-default">Book Now!</button></a>
						@else
						<a href="{{ route('booking.index') }}"><button type="button" class="btn btn-default">Book Now!</button></a>
						@endif
					</div>
				</div>
			</div>
		</section>
		<!-- END: Landing (First Fold) -->

		<!-- BEGIN: About -->
		<section>
			<div class="row clearfix fold" id="about-us">
				<div class="col-md-12 text-center">
					<h1>About Us</h1>
					<hr>
					<p>Inspired by sports arenas in the UK, Play On Lahore is the first of its kind in Pakistan.</p>
</p>

					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<i class="fa fa-sign-in"></i>
							<br>
							<p>Concrete courts surrounded by nets</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<i class="fa fa-clock-o"></i>
							<br>
							<p>Open 24/7 with all <br> available facilities</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<i class="fa fa-soccer-ball-o"></i>
							<br>
							<p>Lights with a back-up <br> power supply
							</div>
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>Loyalty Program</h3>
							<hr>
							<ul>
								<li>For football, after 3 bookings in a week, your 4th booking will be free.</li>
								<li>For cricket, after 2 bookings in a week, your 3rd will be charged at 50 percent.</li>
							</ul>
							<em><small>* This policy should not be abused</small></em>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: About -->
	

	<!-- BEGIN: Venue Slots Tables-->
	<section>
		<div class="row clearfix fold" id="venue-tables">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Today's Timings</h1>
					<hr>
					<h2>PCSIR</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<table class="table table-responsive">
							{{-- insert table 1 --}}
							<thead>
                            <!-- Number of columns -->
                            <th class="text-center">#</th>
                            <th>Playing Field 1</th>
                            <th>Playing Field 2</th>
                            <th>Playing Field 3</th>
                            </thead>
                            <tbody>
								@foreach($times as $time)
                                    <tr>
										<td>{{$time->id}}</td>
										@if(Auth::user()!=NULL)
											@if($time->status_pcsir_1==0)
											<td><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#pcsir-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}" onClick="calculateCosts()">{{date('g:i A', strtotime($time->available_times))}}</button></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
											@if($time->status_pcsir_2==0)
											<td><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#pcsir-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}">{{date('g:i A', strtotime($time->available_times))}}</button></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
											@if($time->status_pcsir_3==0)
											<td><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#pcsir-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}">{{date('g:i A', strtotime($time->available_times))}}</button></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
										@else
										@if($time->status_pcsir_1==0)
											<td><a href="{{route('prebooking')}}"><button class="btn btn-default green-out"  title="This slot is available."  name="time" id="btn" >{{date('g:i A', strtotime($time->available_times))}}</button></a></td>
											
										@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
										@endif
										@if($time->status_pcsir_2==0)
											<td><a href="{{route('prebooking')}}"><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available.">{{date('g:i A', strtotime($time->available_times))}}</button></a></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
										@if($time->status_pcsir_3==0)	
											<td><a href="{{route('prebooking')}}"><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#pcsir-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}">{{date('g:i A', strtotime($time->available_times))}}</button></a></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
										@endif
                                    </tr>
							@endforeach	
                            </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<hr>
					<h2>Bedian</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<table class="table table-responsive">
							{{-- insert table 2 --}}
							<thead>
                            <!-- Number of columns -->
                            <th class="text-center">#</th>
                            <th>Playing Field 1</th>
                            <th>Playing Field 2</th>
                            <th>Playing Field 3</th>
                            </thead>
                            <tbody>
							@foreach($times as $time)
                                    <tr>
										<td>{{$time->id}}</td>
										@if(Auth::user()!=NULL)
											@if($time->status_bedian_1==0)
											<td><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#bedian-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}" onClick="calculateCosts()">{{date('g:i A', strtotime($time->available_times))}}</button></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
											@if($time->status_bedian_2==0)
											<td><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#bedian-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}">{{date('g:i A', strtotime($time->available_times))}}</button></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
											@if($time->status_bedian_3==0)
											<td><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#bedian-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}">{{date('g:i A', strtotime($time->available_times))}}</button></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
										@else
											@if($time->status_bedian_1==0)
											<td><a href="{{route('prebooking')}}"><button class="btn btn-default green-out"  title="This slot is available."  name="time" id="btn" >{{date('g:i A', strtotime($time->available_times))}}</button></a></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif	
											@if($time->status_bedian_2==0)
											<td><a href="{{route('prebooking')}}"><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available.">{{date('g:i A', strtotime($time->available_times))}}</button></a></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
											@if($time->status_bedian_3==0)
											<td><a href="{{route('prebooking')}}"><button class="btn btn-default green-out" value="{{$time->available_times}}" title="This slot is available." data-toggle="modal" data-target="#bedian-{{$time->id}}" name="time" id="btn" data-body="{{$time->available_times}}">{{date('g:i A', strtotime($time->available_times))}}</button></a></td>
											@else
											<td>{{date('g:i A', strtotime($time->available_times))}}:Not available</td>
											@endif
										@endif
                                    </tr>
							@endforeach		
                            </tbody>
						</table>
					</div>
				</div>
			</div>


			@include('modals.modal-1')
			@include('modals.modal-2')
			@include('modals.modal-3')
			@include('modals.modal-4')
			@include('modals.modal-5')
			@include('modals.modal-6')
			@include('modals.modal-7')
			@include('modals.modal-8')
			@include('modals.modal-9')
			@include('modals.modal-10')
			@include('modals.modal-11')
			@include('modals.modal-12')
			@include('modals.modal-13')
		</div>
	</section>
	<script>
    $(document).ready(function(){
        $('#submit').click(function(){
            $('.alert-success').show();
        })
    });
</script>
	<!-- END: Venue Slots Tables-->
</br>
	<!-- BEGIN: Contact Us -->
	{{-- <section>
		<div class="row clearfix fold" id="contact-form">
			<div class="col-md-12 text-center">
				<hr>
				<h1>Contact Us</h1>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form role="form" method="POST" action="{{route('contact')}}">
					{{csrf_field()}}
						<div class="form-group">
							<label for="email_address">Email Address</label>
							<input type="email" name="email" id="email_address" class="form-control">
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<input type="subject" id="subject" class="form-control" name="subject">
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<textarea rows="2" cols="5" name="message" id="message"></textarea>
						</div>
						<button type="submit" value="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	 --}}
	<!-- END: Contact Us -->
@stop