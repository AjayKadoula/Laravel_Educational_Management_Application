@extends('layouts.appstudent')
@section('content')

	<!-- start: Content -->
	<div id="content" class="span10">


	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="#">Home</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Messages</a></li>
	</ul>

	<div class="row-fluid">

		<div class="span7">
			<h1>Inbox</h1>

			<ul class="messagesList">
@foreach ($query as $users)
<a  href="{{ asset('/home/student/messageShow') }}" onclick="event.preventDefault();
													document.getElementById('message_show{{$users->id}}').submit();">

	<li>
		<span class="from"><span class="icon-envelope"></span>@if ($users->status=='1')<span class="halflings-icon ok"></span>@endif<i>{{ $users->name }}</i>  </span><span class="title">{{$users->title}}</span><span class="date">{{$users->create_time}}</span>
	</li>
</a>
	<form id="message_show{{$users->id}}" style="display: none;" enctype="multipart/form-data" action="{{ url('/home/student/messageShow')}}" method="POST">
								@csrf
								<input type="text" value="{{$users->id}}" name="from_id" style="display:none;">

	</form>

@endforeach

			</ul>


		</div>
		<div class="span5 noMarginLeft">

			<div class="message dark">
@if($queryy != "")
 @foreach ($queryy as $user)
        <div  >Title:
				<div class="header">
					<h1>{{ $user->title }}</h1>
					<div class="from"><i class="halflings-icon user"></i> <b>{{ $user->name }}</b> / {{ $user->email }}</div>
					<div class="date"><i class="halflings-icon time"></i> {{ $user->create_time }}</div>

					<div class="menu"></div>

				</div>

				<div class="content">
             {{ $user->body }}
				</div>

			</div>
@endforeach
@endif
				<div class="attachments">
					<ul>
          <h1>Send Message</h1>
					</ul>
				</div>
				<div>
				 @foreach ($errors->all() as $error)
				 <div class="alert alert-danger " style="text-align:center;">
	        <a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Error!</strong>		{{ $error }}
				 </div>

	      @endforeach
				</div>
				<form class="form-horizontal" enctype="multipart/form-data" action="{{ url('/home/student/message/send_message')}}" method="POST">
											@csrf

					<fieldset>
           <div>
						 <div>To Email:</div>
						<input type="text" required="required" class="span12 typeahead" @if($queryy != "")
						 @foreach ($queryy as $user) value="{{$user->email}}"@endforeach
						 @endif
						  name="toemail"  / >
          </div>
						<div >
							<div>Title</div>
							<input type="text" required="required" class="span12 typeahead" name="title"  />
						</div>
						<div>
							<div>Body</div>
						<textarea tabindex="3" required="required" class="input-xlarge span12" name="body" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
            </div>
						<div class="actions">

							<button tabindex="3" type="submit" class="btn btn-success">Send message</button>

						</div>

					</fieldset>

				</form>

			</div>

		</div>

	</div>



</div><!--/.fluid-container-->

	<!-- end: Content -->
	</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2018 <a href="#">School Admin</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-1.0.0.min.js') }}"></script>

		<script src="{{ asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>

		<script src="{{ asset('js/jquery.ui.touch-punch.js') }}"></script>

		<script src="{{ asset('js/modernizr.js') }}"></script>

		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('js/jquery.cookie.js') }}"></script>

		<script src="{{ asset('js/fullcalendar.min.js') }}"></script>

		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ asset('js/excanvas.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>

		<script src="{{ asset('js/jquery.chosen.min.js') }}"></script>

		<script src="{{ asset('js/jquery.uniform.min.js') }}"></script>

		<script src="{{ asset('js/jquery.cleditor.min.js') }}"></script>

		<script src="{{ asset('js/jquery.noty.js') }}"></script>

		<script src="{{ asset('js/jquery.elfinder.min.js') }}"></script>

		<script src="{{ asset('js/jquery.raty.min.js') }}"></script>

		<script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>

		<script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>

		<script src="{{ asset('js/jquery.gritter.min.js') }}"></script>

		<script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>

		<script src="{{ asset('js/jquery.masonry.min.js') }}"></script>

		<script src="{{ asset('js/jquery.knob.modified.js') }}"></script>

		<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>

		<script src="{{ asset('js/counter.js') }}"></script>

		<script src="{{ asset('js/retina.js') }}"></script>

		<script src="{{ asset('js/custom.js') }}"></script>
	<!-- end: JavaScript-->
@endsection
