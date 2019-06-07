@extends('layouts.appadmin')
@section('content')
	<link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet" type='text/css' media="all" />

	<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Home</a>
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Icon</a></li>
				</ul>

				<div class="row-fluid">
					<div class="box span12">
						<div class="box-header">
							<h2><i class="halflings-icon white picture"></i><span class="break"></span>Glyphicons PRO - Halflings (SVG, PNG, Font)</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<section id="icons1">

							  <div class="row-fluid bs-icons">
								<div class="span3">
								  <ul class="the-icons">
									<li><i class="halflings-icon glass"></i> halflings-icon glass</li>
									<li><i class="halflings-icon music"></i> halflings-icon music</li>
									<li><i class="halflings-icon search"></i> halflings-icon search</li>
									<li><i class="halflings-icon envelope"></i> halflings-icon envelope</li>
									<li><i class="halflings-icon heart"></i> halflings-icon heart</li>
									<li><i class="halflings-icon star"></i> halflings-icon star</li>
									<li><i class="halflings-icon star-empty"></i> halflings-icon star-empty</li>
									<li><i class="halflings-icon user"></i> halflings-icon user</li>
									<li><i class="halflings-icon film"></i> halflings-icon film</li>
									<li><i class="halflings-icon th-large"></i> halflings-icon th-large</li>
									<li><i class="halflings-icon th"></i> halflings-icon th</li>
									<li><i class="halflings-icon th-list"></i> halflings-icon th-list</li>
									<li><i class="halflings-icon ok"></i> halflings-icon ok</li>
									<li><i class="halflings-icon white remove"></i> halflings-icon white remove</li>
									<li><i class="halflings-icon zoom-in"></i> halflings-icon zoom-in</li>
									<li><i class="halflings-icon zoom-out"></i> halflings-icon zoom-out</li>
									<li><i class="halflings-icon off"></i> halflings-icon off</li>
									<li><i class="halflings-icon signal"></i> halflings-icon signal</li>
									<li><i class="halflings-icon cog"></i> halflings-icon cog</li>
									<li><i class="halflings-icon trash"></i> halflings-icon trash</li>
									<li><i class="halflings-icon home"></i> halflings-icon home</li>
									<li><i class="halflings-icon file"></i> halflings-icon file</li>
									<li><i class="halflings-icon time"></i> halflings-icon time</li>
									<li><i class="halflings-icon road"></i> halflings-icon road</li>
									<li><i class="halflings-icon download-alt"></i> halflings-icon download-alt</li>
									<li><i class="halflings-icon download"></i> halflings-icon download</li>
									<li><i class="halflings-icon upload"></i> halflings-icon upload</li>
									<li><i class="halflings-icon inbox"></i> halflings-icon inbox</li>
									<li><i class="halflings-icon play-circle"></i> halflings-icon play-circle</li>
									<li><i class="halflings-icon repeat"></i> halflings-icon repeat</li>
									<li><i class="halflings-icon refresh"></i> halflings-icon refresh</li>
									<li><i class="halflings-icon list-alt"></i> halflings-icon list-alt</li>
									<li><i class="halflings-icon lock"></i> halflings-icon lock</li>
									<li><i class="halflings-icon flag"></i> halflings-icon flag</li>
									<li><i class="halflings-icon headphones"></i> halflings-icon headphones</li>
								  </ul>
								</div>
								<div class="span3">
								  <ul class="the-icons">
									<li><i class="halflings-icon volume-off"></i> halflings-icon volume-off</li>
									<li><i class="halflings-icon volume-down"></i> halflings-icon volume-down</li>
									<li><i class="halflings-icon volume-up"></i> halflings-icon volume-up</li>
									<li><i class="halflings-icon qrcode"></i> halflings-icon qrcode</li>
									<li><i class="halflings-icon barcode"></i> halflings-icon barcode</li>
									<li><i class="halflings-icon tag"></i> halflings-icon tag</li>
									<li><i class="halflings-icon tags"></i> halflings-icon tags</li>
									<li><i class="halflings-icon book"></i> halflings-icon book</li>
									<li><i class="halflings-icon bookmark"></i> halflings-icon bookmark</li>
									<li><i class="halflings-icon print"></i> halflings-icon print</li>
									<li><i class="halflings-icon camera"></i> halflings-icon camera</li>
									<li><i class="halflings-icon font"></i> halflings-icon font</li>
									<li><i class="halflings-icon bold"></i> halflings-icon bold</li>
									<li><i class="halflings-icon italic"></i> halflings-icon italic</li>
									<li><i class="halflings-icon text-height"></i> halflings-icon text-height</li>
									<li><i class="halflings-icon text-width"></i> halflings-icon text-width</li>
									<li><i class="halflings-icon align-left"></i> halflings-icon align-left</li>
									<li><i class="halflings-icon align-center"></i> halflings-icon align-center</li>
									<li><i class="halflings-icon align-right"></i> halflings-icon align-right</li>
									<li><i class="halflings-icon align-justify"></i> halflings-icon align-justify</li>
									<li><i class="halflings-icon list"></i> halflings-icon list</li>
									<li><i class="halflings-icon indent-left"></i> halflings-icon indent-left</li>
									<li><i class="halflings-icon indent-right"></i> halflings-icon indent-right</li>
									<li><i class="halflings-icon facetime-video"></i> halflings-icon facetime-video</li>
									<li><i class="halflings-icon white picture"></i> halflings-icon white picture</li>
									<li><i class="halflings-icon pencil"></i> halflings-icon pencil</li>
									<li><i class="halflings-icon map-marker"></i> halflings-icon map-marker</li>
									<li><i class="halflings-icon adjust"></i> halflings-icon adjust</li>
									<li><i class="halflings-icon tint"></i> halflings-icon tint</li>
									<li><i class="halflings-icon edit"></i> halflings-icon edit</li>
									<li><i class="halflings-icon share"></i> halflings-icon share</li>
									<li><i class="halflings-icon check"></i> halflings-icon check</li>
									<li><i class="halflings-icon move"></i> halflings-icon move</li>
									<li><i class="halflings-icon step-backward"></i> halflings-icon step-backward</li>
									<li><i class="halflings-icon fast-backward"></i> halflings-icon fast-backward</li>
								  </ul>
								</div>
								<div class="span3">
								  <ul class="the-icons">
									<li><i class="halflings-icon backward"></i> halflings-icon backward</li>
									<li><i class="halflings-icon play"></i> halflings-icon play</li>
									<li><i class="halflings-icon pause"></i> halflings-icon pause</li>
									<li><i class="halflings-icon stop"></i> halflings-icon stop</li>
									<li><i class="halflings-icon forward"></i> halflings-icon forward</li>
									<li><i class="halflings-icon fast-forward"></i> halflings-icon fast-forward</li>
									<li><i class="halflings-icon step-forward"></i> halflings-icon step-forward</li>
									<li><i class="halflings-icon eject"></i> halflings-icon eject</li>
									<li><i class="halflings-icon chevron-left"></i> halflings-icon chevron-left</li>
									<li><i class="halflings-icon chevron-right"></i> halflings-icon chevron-right</li>
									<li><i class="halflings-icon plus-sign"></i> halflings-icon plus-sign</li>
									<li><i class="halflings-icon minus-sign"></i> halflings-icon minus-sign</li>
									<li><i class="halflings-icon white remove-sign"></i> halflings-icon white remove-sign</li>
									<li><i class="halflings-icon ok-sign"></i> halflings-icon ok-sign</li>
									<li><i class="halflings-icon question-sign"></i> halflings-icon question-sign</li>
									<li><i class="halflings-icon info-sign"></i> halflings-icon info-sign</li>
									<li><i class="halflings-icon screenshot"></i> halflings-icon screenshot</li>
									<li><i class="halflings-icon white remove-circle"></i> halflings-icon white remove-circle</li>
									<li><i class="halflings-icon ok-circle"></i> halflings-icon ok-circle</li>
									<li><i class="halflings-icon ban-circle"></i> halflings-icon ban-circle</li>
									<li><i class="halflings-icon arrow-left"></i> halflings-icon arrow-left</li>
									<li><i class="halflings-icon arrow-right"></i> halflings-icon arrow-right</li>
									<li><i class="halflings-icon arrow-up"></i> halflings-icon arrow-up</li>
									<li><i class="halflings-icon arrow-down"></i> halflings-icon arrow-down</li>
									<li><i class="halflings-icon share-alt"></i> halflings-icon share-alt</li>
									<li><i class="halflings-icon resize-full"></i> halflings-icon resize-full</li>
									<li><i class="halflings-icon resize-small"></i> halflings-icon resize-small</li>
									<li><i class="halflings-icon plus"></i> halflings-icon plus</li>
									<li><i class="halflings-icon minus"></i> halflings-icon minus</li>
									<li><i class="halflings-icon asterisk"></i> halflings-icon asterisk</li>
									<li><i class="halflings-icon exclamation-sign"></i> halflings-icon exclamation-sign</li>
									<li><i class="halflings-icon gift"></i> halflings-icon gift</li>
									<li><i class="halflings-icon leaf"></i> halflings-icon leaf</li>
									<li><i class="halflings-icon fire"></i> halflings-icon fire</li>
									<li><i class="halflings-icon eye-open"></i> halflings-icon eye-open</li>
								  </ul>
								</div>
								<div class="span3">
								  <ul class="the-icons">
									<li><i class="halflings-icon eye-close"></i> halflings-icon eye-close</li>
									<li><i class="halflings-icon warning-sign"></i> halflings-icon warning-sign</li>
									<li><i class="halflings-icon plane"></i> halflings-icon plane</li>
									<li><i class="halflings-icon calendar"></i> halflings-icon calendar</li>
									<li><i class="halflings-icon random"></i> halflings-icon random</li>
									<li><i class="halflings-icon comment"></i> halflings-icon comment</li>
									<li><i class="halflings-icon magnet"></i> halflings-icon magnet</li>
									<li><i class="halflings-icon white chevron-up"></i> halflings-icon white chevron-up</li>
									<li><i class="halflings-icon chevron-down"></i> halflings-icon chevron-down</li>
									<li><i class="halflings-icon retweet"></i> halflings-icon retweet</li>
									<li><i class="halflings-icon shopping-cart"></i> halflings-icon shopping-cart</li>
									<li><i class="halflings-icon folder-close"></i> halflings-icon folder-close</li>
									<li><i class="halflings-icon folder-open"></i> halflings-icon folder-open</li>
									<li><i class="halflings-icon resize-vertical"></i> halflings-icon resize-vertical</li>
									<li><i class="halflings-icon resize-horizontal"></i> halflings-icon resize-horizontal</li>
									<li><i class="halflings-icon hdd"></i> halflings-icon hdd</li>
									<li><i class="halflings-icon bullhorn"></i> halflings-icon bullhorn</li>
									<li><i class="halflings-icon bell"></i> halflings-icon bell</li>
									<li><i class="halflings-icon certificate"></i> halflings-icon certificate</li>
									<li><i class="halflings-icon thumbs-up"></i> halflings-icon thumbs-up</li>
									<li><i class="halflings-icon thumbs-down"></i> halflings-icon thumbs-down</li>
									<li><i class="halflings-icon hand-right"></i> halflings-icon hand-right</li>
									<li><i class="halflings-icon hand-left"></i> halflings-icon hand-left</li>
									<li><i class="halflings-icon hand-up"></i> halflings-icon hand-up</li>
									<li><i class="halflings-icon hand-down"></i> halflings-icon hand-down</li>
									<li><i class="halflings-icon circle-arrow-right"></i> halflings-icon circle-arrow-right</li>
									<li><i class="halflings-icon circle-arrow-left"></i> halflings-icon circle-arrow-left</li>
									<li><i class="halflings-icon circle-arrow-up"></i> halflings-icon circle-arrow-up</li>
									<li><i class="halflings-icon circle-arrow-down"></i> halflings-icon circle-arrow-down</li>
									<li><i class="halflings-icon globe"></i> halflings-icon globe</li>
									<li><i class="halflings-icon white wrench"></i> halflings-icon white wrench</li>
									<li><i class="halflings-icon tasks"></i> halflings-icon tasks</li>
									<li><i class="halflings-icon filter"></i> halflings-icon filter</li>
									<li><i class="halflings-icon briefcase"></i> halflings-icon briefcase</li>
									<li><i class="halflings-icon fullscreen"></i> halflings-icon fullscreen</li>
								  </ul>
								</div>

							</div>

						</div>
					</div><!--/span-->

				</div><!--/row-->

				<hr>

				<div class="row-fluid">
					<div class="box span12">
						<div class="box-header">
							<h2><i class="halflings-icon white picture"></i><span class="break"></span>Glyphicons PRO (SVG, PNG, Font)</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content glyphicons">

							<p><i class="glyphicons-icon glass"></i> glyphicons-icon glass</p>
							<p><i class="glyphicons-icon leaf"></i> glyphicons-icon leaf</p>
							<p><i class="glyphicons-icon dog"></i> glyphicons-icon dog</p>
							<p><i class="glyphicons-icon user"></i> glyphicons-icon user</p>
							<p><i class="glyphicons-icon girl"></i> glyphicons-icon girl</p>
							<p><i class="glyphicons-icon car"></i> glyphicons-icon car</p>
							<p><i class="glyphicons-icon user_add"></i> glyphicons-icon user_add</p>
							<p><i class="glyphicons-icon user_remove"></i> glyphicons-icon user_remove</p>
							<p><i class="glyphicons-icon film"></i> glyphicons-icon film</p>
							<p><i class="glyphicons-icon magic"></i> glyphicons-icon magic</p>
							<p><i class="glyphicons-icon envelope"></i> glyphicons-icon envelope</p>
							<p><i class="glyphicons-icon camera"></i> glyphicons-icon camera</p>
							<p><i class="glyphicons-icon heart"></i> glyphicons-icon heart</p>
							<p><i class="glyphicons-icon beach_umbrella"></i> glyphicons-icon beach_umbrella</p>
							<p><i class="glyphicons-icon train"></i> glyphicons-icon train</p>
							<p><i class="glyphicons-icon print"></i> glyphicons-icon print</p>
							<p><i class="glyphicons-icon bin"></i> glyphicons-icon bin</p>
							<p><i class="glyphicons-icon music"></i> glyphicons-icon music</p>
							<p><i class="glyphicons-icon note"></i> glyphicons-icon note</p>
							<p><i class="glyphicons-icon heart_empty"></i> glyphicons-icon heart_empty</p>
							<p><i class="glyphicons-icon home"></i> glyphicons-icon home</p>
							<p><i class="glyphicons-icon snowflake"></i> glyphicons-icon snowflake</p>
							<p><i class="glyphicons-icon fire"></i> glyphicons-icon fire</p>
							<p><i class="glyphicons-icon magnet"></i> glyphicons-icon magnet</p>
							<p><i class="glyphicons-icon parents"></i> glyphicons-icon parents</p>
							<p><i class="glyphicons-icon binoculars"></i> glyphicons-icon binoculars</p>
							<p><i class="glyphicons-icon road"></i> glyphicons-icon road</p>
							<p><i class="glyphicons-icon search"></i> glyphicons-icon search</p>
							<p><i class="glyphicons-icon cars"></i> glyphicons-icon cars</p>
							<p><i class="glyphicons-icon notes_2"></i> glyphicons-icon notes_2</p>
							<p><i class="glyphicons-icon pencil"></i> glyphicons-icon pencil</p>
							<p><i class="glyphicons-icon bus"></i> glyphicons-icon bus</p>
							<p><i class="glyphicons-icon wifi_alt"></i> glyphicons-icon wifi_alt</p>
							<p><i class="glyphicons-icon luggage"></i> glyphicons-icon luggage</p>
							<p><i class="glyphicons-icon old_man"></i> glyphicons-icon old_man</p>
							<p><i class="glyphicons-icon woman"></i> glyphicons-icon woman</p>
							<p><i class="glyphicons-icon file"></i> glyphicons-icon file</p>
							<p><i class="glyphicons-icon coins"></i> glyphicons-icon coins</p>
							<p><i class="glyphicons-icon airplane"></i> glyphicons-icon airplane</p>
							<p><i class="glyphicons-icon notes"></i> glyphicons-icon notes</p>
							<p><i class="glyphicons-icon stats"></i> glyphicons-icon stats</p>
							<p><i class="glyphicons-icon charts"></i> glyphicons-icon charts</p>
							<p><i class="glyphicons-icon pie_chart"></i> glyphicons-icon pie_chart</p>
							<p><i class="glyphicons-icon group"></i> glyphicons-icon group</p>
							<p><i class="glyphicons-icon keys"></i> glyphicons-icon keys</p>
							<p><i class="glyphicons-icon calendar"></i> glyphicons-icon calendar</p>
							<p><i class="glyphicons-icon router"></i> glyphicons-icon router</p>
							<p><i class="glyphicons-icon camera_small"></i> glyphicons-icon camera_small</p>
							<p><i class="glyphicons-icon dislikes"></i> glyphicons-icon dislikes</p>
							<p><i class="glyphicons-icon star"></i> glyphicons-icon star</p>
							<p><i class="glyphicons-icon link"></i> glyphicons-icon link</p>
							<p><i class="glyphicons-icon eye_open"></i> glyphicons-icon eye_open</p>
							<p><i class="glyphicons-icon eye_close"></i> glyphicons-icon eye_close</p>
							<p><i class="glyphicons-icon alarm"></i> glyphicons-icon alarm</p>
							<p><i class="glyphicons-icon clock"></i> glyphicons-icon clock</p>
							<p><i class="glyphicons-icon stopwatch"></i> glyphicons-icon stopwatch</p>
							<p><i class="glyphicons-icon projector"></i> glyphicons-icon projector</p>
							<p><i class="glyphicons-icon history"></i> glyphicons-icon history</p>
							<p><i class="glyphicons-icon truck"></i> glyphicons-icon truck</p>
							<p><i class="glyphicons-icon cargo"></i> glyphicons-icon cargo</p>
							<p><i class="glyphicons-icon compass"></i> glyphicons-icon compass</p>
							<p><i class="glyphicons-icon keynote"></i> glyphicons-icon keynote</p>
							<p><i class="glyphicons-icon paperclip"></i> glyphicons-icon paperclip</p>
							<p><i class="glyphicons-icon power"></i> glyphicons-icon power</p>
							<p><i class="glyphicons-icon lightbulb"></i> glyphicons-icon lightbulb</p>
							<p><i class="glyphicons-icon tag"></i> glyphicons-icon tag</p>
							<p><i class="glyphicons-icon tags"></i> glyphicons-icon tags</p>
							<p><i class="glyphicons-icon cleaning"></i> glyphicons-icon cleaning</p>
							<p><i class="glyphicons-icon ruller"></i> glyphicons-icon ruller</p>
							<p><i class="glyphicons-icon gift"></i> glyphicons-icon gift</p>
							<p><i class="glyphicons-icon umbrella"></i> glyphicons-icon umbrella</p>
							<p><i class="glyphicons-icon book"></i> glyphicons-icon book</p>
							<p><i class="glyphicons-icon bookmark"></i> glyphicons-icon bookmark</p>
							<p><i class="glyphicons-icon wifi"></i> glyphicons-icon wifi</p>
							<p><i class="glyphicons-icon cup"></i> glyphicons-icon cup</p>
							<p><i class="glyphicons-icon stroller"></i> glyphicons-icon stroller</p>
							<p><i class="glyphicons-icon headphones"></i> glyphicons-icon headphones</p>
							<p><i class="glyphicons-icon headset"></i> glyphicons-icon headset</p>
							<p><i class="glyphicons-icon warning_sign"></i> glyphicons-icon warning_sign</p>
							<p><i class="glyphicons-icon signal"></i> glyphicons-icon signal</p>
							<p><i class="glyphicons-icon retweet"></i> glyphicons-icon retweet</p>
							<p><i class="glyphicons-icon refresh"></i> glyphicons-icon refresh</p>
							<p><i class="glyphicons-icon roundabout"></i> glyphicons-icon roundabout</p>
							<p><i class="glyphicons-icon random"></i> glyphicons-icon random</p>
							<p><i class="glyphicons-icon heat"></i> glyphicons-icon heat</p>
							<p><i class="glyphicons-icon repeat"></i> glyphicons-icon repeat</p>
							<p><i class="glyphicons-icon display"></i> glyphicons-icon display</p>
							<p><i class="glyphicons-icon log_book"></i> glyphicons-icon log_book</p>
							<p><i class="glyphicons-icon adress_book"></i> glyphicons-icon adress_book</p>
							<p><i class="glyphicons-icon building"></i> glyphicons-icon building</p>
							<p><i class="glyphicons-icon eyedropper"></i> glyphicons-icon eyedropper</p>
							<p><i class="glyphicons-icon adjust"></i> glyphicons-icon adjust</p>
							<p><i class="glyphicons-icon tint"></i> glyphicons-icon tint</p>
							<p><i class="glyphicons-icon crop"></i> glyphicons-icon crop</p>
							<p><i class="glyphicons-icon vector_path_square"></i> glyphicons-icon vector_path_square</p>
							<p><i class="glyphicons-icon vector_path_circle"></i> glyphicons-icon vector_path_circle</p>
							<p><i class="glyphicons-icon vector_path_polygon"></i> glyphicons-icon vector_path_polygon</p>
							<p><i class="glyphicons-icon vector_path_line"></i> glyphicons-icon vector_path_line</p>
							<p><i class="glyphicons-icon vector_path_curve"></i> glyphicons-icon vector_path_curve</p>
							<p><i class="glyphicons-icon vector_path_all"></i> glyphicons-icon vector_path_all</p>
							<p><i class="glyphicons-icon font"></i> glyphicons-icon font</p>
							<p><i class="glyphicons-icon italic"></i> glyphicons-icon italic</p>
							<p><i class="glyphicons-icon bold"></i> glyphicons-icon bold</p>
							<p><i class="glyphicons-icon text_underline"></i> glyphicons-icon text_underline</p>
							<p><i class="glyphicons-icon text_strike"></i> glyphicons-icon text_strike</p>
							<p><i class="glyphicons-icon text_height"></i> glyphicons-icon text_height</p>
							<p><i class="glyphicons-icon text_width"></i> glyphicons-icon text_width</p>
							<p><i class="glyphicons-icon text_resize"></i> glyphicons-icon text_resize</p>
							<p><i class="glyphicons-icon left_indent"></i> glyphicons-icon left_indent</p>
							<p><i class="glyphicons-icon right_indent"></i> glyphicons-icon right_indent</p>
							<p><i class="glyphicons-icon align_left"></i> glyphicons-icon align_left</p>
							<p><i class="glyphicons-icon align_center"></i> glyphicons-icon align_center</p>
							<p><i class="glyphicons-icon align_right"></i> glyphicons-icon align_right</p>
							<p><i class="glyphicons-icon justify"></i> glyphicons-icon justify</p>
							<p><i class="glyphicons-icon list"></i> glyphicons-icon list</p>
							<p><i class="glyphicons-icon text_smaller"></i> glyphicons-icon text_smaller</p>
							<p><i class="glyphicons-icon text_bigger"></i> glyphicons-icon text_bigger</p>
							<p><i class="glyphicons-icon embed"></i> glyphicons-icon embed</p>
							<p><i class="glyphicons-icon embed_close"></i> glyphicons-icon embed_close</p>
							<p><i class="glyphicons-icon table"></i> glyphicons-icon table</p>
							<p><i class="glyphicons-icon message_full"></i> glyphicons-icon message_full</p>
							<p><i class="glyphicons-icon message_empty"></i> glyphicons-icon message_empty</p>
							<p><i class="glyphicons-icon message_in"></i> glyphicons-icon message_in</p>
							<p><i class="glyphicons-icon message_out"></i> glyphicons-icon message_out</p>
							<p><i class="glyphicons-icon message_plus"></i> glyphicons-icon message_plus</p>
							<p><i class="glyphicons-icon message_minus"></i> glyphicons-icon message_minus</p>
							<p><i class="glyphicons-icon message_ban"></i> glyphicons-icon message_ban</p>
							<p><i class="glyphicons-icon message_flag"></i> glyphicons-icon message_flag</p>
							<p><i class="glyphicons-icon message_lock"></i> glyphicons-icon message_lock</p>
							<p><i class="glyphicons-icon message_new"></i> glyphicons-icon message_new</p>
							<p><i class="glyphicons-icon inbox"></i> glyphicons-icon inbox</p>
							<p><i class="glyphicons-icon inbox_plus"></i> glyphicons-icon inbox_plus</p>
							<p><i class="glyphicons-icon inbox_minus"></i> glyphicons-icon inbox_minus</p>
							<p><i class="glyphicons-icon inbox_lock"></i> glyphicons-icon inbox_lock</p>
							<p><i class="glyphicons-icon inbox_in"></i> glyphicons-icon inbox_in</p>
							<p><i class="glyphicons-icon inbox_out"></i> glyphicons-icon inbox_out</p>
							<p><i class="glyphicons-icon cogwheel"></i> glyphicons-icon cogwheel</p>
							<p><i class="glyphicons-icon cogwheels"></i> glyphicons-icon cogwheels</p>
							<p><i class="glyphicons-icon picture"></i> glyphicons-icon picture</p>
							<p><i class="glyphicons-icon adjust_alt"></i> glyphicons-icon adjust_alt</p>
							<p><i class="glyphicons-icon database_lock"></i> glyphicons-icon database_lock</p>
							<p><i class="glyphicons-icon database_plus"></i> glyphicons-icon database_plus</p>
							<p><i class="glyphicons-icon database_minus"></i> glyphicons-icon database_minus</p>
							<p><i class="glyphicons-icon database_ban"></i> glyphicons-icon database_ban</p>
							<p><i class="glyphicons-icon folder_open"></i> glyphicons-icon folder_open</p>
							<p><i class="glyphicons-icon folder_plus"></i> glyphicons-icon folder_plus</p>
							<p><i class="glyphicons-icon folder_minus"></i> glyphicons-icon folder_minus</p>
							<p><i class="glyphicons-icon folder_lock"></i> glyphicons-icon folder_lock</p>
							<p><i class="glyphicons-icon folder_flag"></i> glyphicons-icon folder_flag</p>
							<p><i class="glyphicons-icon folder_new"></i> glyphicons-icon folder_new</p>
							<p><i class="glyphicons-icon edit"></i> glyphicons-icon edit</p>
							<p><i class="glyphicons-icon new_window"></i> glyphicons-icon new_window</p>
							<p><i class="glyphicons-icon check"></i> glyphicons-icon check</p>
							<p><i class="glyphicons-icon unchecked"></i> glyphicons-icon unchecked</p>
							<p><i class="glyphicons-icon more_windows"></i> glyphicons-icon more_windows</p>
							<p><i class="glyphicons-icon show_big_thumbnails"></i> glyphicons-icon show_big_thumbnails</p>
							<p><i class="glyphicons-icon show_thumbnails"></i> glyphicons-icon show_thumbnails</p>
							<p><i class="glyphicons-icon show_thumbnails_with_lines"></i> glyphicons-icon show_thumbnails_with_lines</p>
							<p><i class="glyphicons-icon show_lines"></i> glyphicons-icon show_lines</p>
							<p><i class="glyphicons-icon playlist"></i> glyphicons-icon playlist</p>
							<p><i class="glyphicons-icon imac"></i> glyphicons-icon imac</p>
							<p><i class="glyphicons-icon macbook"></i> glyphicons-icon macbook</p>
							<p><i class="glyphicons-icon ipad"></i> glyphicons-icon ipad</p>
							<p><i class="glyphicons-icon iphone"></i> glyphicons-icon iphone</p>
							<p><i class="glyphicons-icon iphone_transfer"></i> glyphicons-icon iphone_transfer</p>
							<p><i class="glyphicons-icon iphone_exchange"></i> glyphicons-icon iphone_exchange</p>
							<p><i class="glyphicons-icon ipod"></i> glyphicons-icon ipod</p>
							<p><i class="glyphicons-icon ipod_shuffle"></i> glyphicons-icon ipod_shuffle</p>
							<p><i class="glyphicons-icon ear_plugs"></i> glyphicons-icon ear_plugs</p>
							<p><i class="glyphicons-icon phone"></i> glyphicons-icon phone</p>
							<p><i class="glyphicons-icon step_backward"></i> glyphicons-icon step_backward</p>
							<p><i class="glyphicons-icon fast_backward"></i> glyphicons-icon fast_backward</p>
							<p><i class="glyphicons-icon rewind"></i> glyphicons-icon rewind</p>
							<p><i class="glyphicons-icon play"></i> glyphicons-icon play</p>
							<p><i class="glyphicons-icon pause"></i> glyphicons-icon pause</p>
							<p><i class="glyphicons-icon stop"></i> glyphicons-icon stop</p>
							<p><i class="glyphicons-icon forward"></i> glyphicons-icon forward</p>
							<p><i class="glyphicons-icon fast_forward"></i> glyphicons-icon fast_forward</p>
							<p><i class="glyphicons-icon step_forward"></i> glyphicons-icon step_forward</p>
							<p><i class="glyphicons-icon eject"></i> glyphicons-icon eject</p>
							<p><i class="glyphicons-icon facetime_video"></i> glyphicons-icon facetime_video</p>
							<p><i class="glyphicons-icon download_alt"></i> glyphicons-icon download_alt</p>
							<p><i class="glyphicons-icon mute"></i> glyphicons-icon mute</p>
							<p><i class="glyphicons-icon volume_down"></i> glyphicons-icon volume_down</p>
							<p><i class="glyphicons-icon volume_up"></i> glyphicons-icon volume_up</p>
							<p><i class="glyphicons-icon screenshot"></i> glyphicons-icon screenshot</p>
							<p><i class="glyphicons-icon move"></i> glyphicons-icon move</p>
							<p><i class="glyphicons-icon more"></i> glyphicons-icon more</p>
							<p><i class="glyphicons-icon brightness_reduce"></i> glyphicons-icon brightness_reduce</p>
							<p><i class="glyphicons-icon brightness_increase"></i> glyphicons-icon brightness_increase</p>
							<p><i class="glyphicons-icon circle_plus"></i> glyphicons-icon circle_plus</p>
							<p><i class="glyphicons-icon circle_minus"></i> glyphicons-icon circle_minus</p>
							<p><i class="glyphicons-icon circle_remove"></i> glyphicons-icon circle_remove</p>
							<p><i class="glyphicons-icon circle_ok"></i> glyphicons-icon circle_ok</p>
							<p><i class="glyphicons-icon circle_question_mark"></i> glyphicons-icon circle_question_mark</p>
							<p><i class="glyphicons-icon circle_info"></i> glyphicons-icon circle_info</p>
							<p><i class="glyphicons-icon circle_exclamation_mark"></i> glyphicons-icon circle_exclamation_mark</p>
							<p><i class="glyphicons-icon remove"></i> glyphicons-icon remove</p>
							<p><i class="glyphicons-icon ok"></i> glyphicons-icon ok</p>
							<p><i class="glyphicons-icon ban"></i> glyphicons-icon ban</p>
							<p><i class="glyphicons-icon download"></i> glyphicons-icon download</p>
							<p><i class="glyphicons-icon upload"></i> glyphicons-icon upload</p>
							<p><i class="glyphicons-icon shopping_cart"></i> glyphicons-icon shopping_cart</p>
							<p><i class="glyphicons-icon lock"></i> glyphicons-icon lock</p>
							<p><i class="glyphicons-icon unlock"></i> glyphicons-icon unlock</p>
							<p><i class="glyphicons-icon electricity"></i> glyphicons-icon electricity</p>
							<p><i class="glyphicons-icon ok_2"></i> glyphicons-icon ok_2</p>
							<p><i class="glyphicons-icon remove_2"></i> glyphicons-icon remove_2</p>
							<p><i class="glyphicons-icon cart_out"></i> glyphicons-icon cart_out</p>
							<p><i class="glyphicons-icon cart_in"></i> glyphicons-icon cart_in</p>
							<p><i class="glyphicons-icon left_arrow"></i> glyphicons-icon left_arrow</p>
							<p><i class="glyphicons-icon right_arrow"></i> glyphicons-icon right_arrow</p>
							<p><i class="glyphicons-icon down_arrow"></i> glyphicons-icon down_arrow</p>
							<p><i class="glyphicons-icon up_arrow"></i> glyphicons-icon up_arrow</p>
							<p><i class="glyphicons-icon resize_small"></i> glyphicons-icon resize_small</p>
							<p><i class="glyphicons-icon resize_full"></i> glyphicons-icon resize_full</p>
							<p><i class="glyphicons-icon circle_arrow_left"></i> glyphicons-icon circle_arrow_left</p>
							<p><i class="glyphicons-icon circle_arrow_right"></i> glyphicons-icon circle_arrow_right</p>
							<p><i class="glyphicons-icon circle_arrow_top"></i> glyphicons-icon circle_arrow_top</p>
							<p><i class="glyphicons-icon circle_arrow_down"></i> glyphicons-icon circle_arrow_down</p>
							<p><i class="glyphicons-icon play_button"></i> glyphicons-icon play_button</p>
							<p><i class="glyphicons-icon unshare"></i> glyphicons-icon unshare</p>
							<p><i class="glyphicons-icon share"></i> glyphicons-icon share</p>
							<p><i class="glyphicons-icon chevron-right"></i> glyphicons-icon chevron-right</p>
							<p><i class="glyphicons-icon chevron-left"></i> glyphicons-icon chevron-left</p>
							<p><i class="glyphicons-icon bluetooth"></i> glyphicons-icon bluetooth</p>
							<p><i class="glyphicons-icon euro"></i> glyphicons-icon euro</p>
							<p><i class="glyphicons-icon usd"></i> glyphicons-icon usd</p>
							<p><i class="glyphicons-icon gbp"></i> glyphicons-icon gbp</p>
							<p><i class="glyphicons-icon retweet_2"></i> glyphicons-icon retweet_2</p>
							<p><i class="glyphicons-icon moon"></i> glyphicons-icon moon</p>
							<p><i class="glyphicons-icon sun"></i> glyphicons-icon sun</p>
							<p><i class="glyphicons-icon cloud"></i> glyphicons-icon cloud</p>
							<p><i class="glyphicons-icon direction"></i> glyphicons-icon direction</p>
							<p><i class="glyphicons-icon brush"></i> glyphicons-icon brush</p>
							<p><i class="glyphicons-icon pen"></i> glyphicons-icon pen</p>
							<p><i class="glyphicons-icon zoom_in"></i> glyphicons-icon zoom_in</p>
							<p><i class="glyphicons-icon zoom_out"></i> glyphicons-icon zoom_out</p>
							<p><i class="glyphicons-icon pin"></i> glyphicons-icon pin</p>
							<p><i class="glyphicons-icon albums"></i> glyphicons-icon albums</p>
							<p><i class="glyphicons-icon rotation_lock"></i> glyphicons-icon rotation_lock</p>
							<p><i class="glyphicons-icon flash"></i> glyphicons-icon flash</p>
							<p><i class="glyphicons-icon google_maps"></i> glyphicons-icon google_maps</p>
							<p><i class="glyphicons-icon anchor"></i> glyphicons-icon anchor</p>
							<p><i class="glyphicons-icon conversation"></i> glyphicons-icon conversation</p>
							<p><i class="glyphicons-icon chat"></i> glyphicons-icon chat</p>
							<p><i class="glyphicons-icon male"></i> glyphicons-icon male</p>
							<p><i class="glyphicons-icon female"></i> glyphicons-icon female</p>
							<p><i class="glyphicons-icon asterisk"></i> glyphicons-icon asterisk</p>
							<p><i class="glyphicons-icon divide"></i> glyphicons-icon divide</p>
							<p><i class="glyphicons-icon snorkel_diving"></i> glyphicons-icon snorkel_diving</p>
							<p><i class="glyphicons-icon scuba_diving"></i> glyphicons-icon scuba_diving</p>
							<p><i class="glyphicons-icon oxygen_bottle"></i> glyphicons-icon oxygen_bottle</p>
							<p><i class="glyphicons-icon fins"></i> glyphicons-icon fins</p>
							<p><i class="glyphicons-icon fishes"></i> glyphicons-icon fishes</p>
							<p><i class="glyphicons-icon boat"></i> glyphicons-icon boat</p>
							<p><i class="glyphicons-icon delete"></i> glyphicons-icon delete</p>
							<p><i class="glyphicons-icon sheriffs_star"></i> glyphicons-icon sheriffs_star</p>
							<p><i class="glyphicons-icon qrcode"></i> glyphicons-icon qrcode</p>
							<p><i class="glyphicons-icon barcode"></i> glyphicons-icon barcode</p>
							<p><i class="glyphicons-icon pool"></i> glyphicons-icon pool</p>
							<p><i class="glyphicons-icon buoy"></i> glyphicons-icon buoy</p>
							<p><i class="glyphicons-icon spade"></i> glyphicons-icon spade</p>
							<p><i class="glyphicons-icon bank"></i> glyphicons-icon bank</p>
							<p><i class="glyphicons-icon vcard"></i> glyphicons-icon vcard</p>
							<p><i class="glyphicons-icon electrical_plug"></i> glyphicons-icon electrical_plug</p>
							<p><i class="glyphicons-icon flag"></i> glyphicons-icon flag</p>
							<p><i class="glyphicons-icon credit_card"></i> glyphicons-icon credit_card</p>
							<p><i class="glyphicons-icon keyboard-wireless"></i> glyphicons-icon keyboard-wireless</p>
							<p><i class="glyphicons-icon keyboard-wired"></i> glyphicons-icon keyboard-wired</p>
							<p><i class="glyphicons-icon shield"></i> glyphicons-icon shield</p>
							<p><i class="glyphicons-icon ring"></i> glyphicons-icon ring</p>
							<p><i class="glyphicons-icon cake"></i> glyphicons-icon cake</p>
							<p><i class="glyphicons-icon drink"></i> glyphicons-icon drink</p>
							<p><i class="glyphicons-icon beer"></i> glyphicons-icon beer</p>
							<p><i class="glyphicons-icon fast_food"></i> glyphicons-icon fast_food</p>
							<p><i class="glyphicons-icon cutlery"></i> glyphicons-icon cutlery</p>
							<p><i class="glyphicons-icon pizza"></i> glyphicons-icon pizza</p>
							<p><i class="glyphicons-icon birthday_cake"></i> glyphicons-icon birthday_cake</p>
							<p><i class="glyphicons-icon tablet"></i> glyphicons-icon tablet</p>
							<p><i class="glyphicons-icon settings"></i> glyphicons-icon settings</p>
							<p><i class="glyphicons-icon bullets"></i> glyphicons-icon bullets</p>
							<p><i class="glyphicons-icon cardio"></i> glyphicons-icon cardio</p>
							<p><i class="glyphicons-icon t-shirt"></i> glyphicons-icon t-shirt</p>
							<p><i class="glyphicons-icon pants"></i> glyphicons-icon pants</p>
							<p><i class="glyphicons-icon sweater"></i> glyphicons-icon sweater</p>
							<p><i class="glyphicons-icon fabric"></i> glyphicons-icon fabric</p>
							<p><i class="glyphicons-icon leather"></i> glyphicons-icon leather</p>
							<p><i class="glyphicons-icon scissors"></i> glyphicons-icon scissors</p>
							<p><i class="glyphicons-icon bomb"></i> glyphicons-icon bomb</p>
							<p><i class="glyphicons-icon skull"></i> glyphicons-icon skull</p>
							<p><i class="glyphicons-icon celebration"></i> glyphicons-icon celebration</p>
							<p><i class="glyphicons-icon tea_kettle"></i> glyphicons-icon tea_kettle</p>
							<p><i class="glyphicons-icon french_press"></i> glyphicons-icon french_press</p>
							<p><i class="glyphicons-icon coffe_cup"></i> glyphicons-icon coffe_cup</p>
							<p><i class="glyphicons-icon pot"></i> glyphicons-icon pot</p>
							<p><i class="glyphicons-icon grater"></i> glyphicons-icon grater</p>
							<p><i class="glyphicons-icon kettle"></i> glyphicons-icon kettle</p>
							<p><i class="glyphicons-icon hospital"></i> glyphicons-icon hospital</p>
							<p><i class="glyphicons-icon hospital_h"></i> glyphicons-icon hospital_h</p>
							<p><i class="glyphicons-icon microphone"></i> glyphicons-icon microphone</p>
							<p><i class="glyphicons-icon webcam"></i> glyphicons-icon webcam</p>
							<p><i class="glyphicons-icon temple_christianity_church"></i> glyphicons-icon temple_christianity_church</p>
							<p><i class="glyphicons-icon temple_islam"></i> glyphicons-icon temple_islam</p>
							<p><i class="glyphicons-icon temple_hindu"></i> glyphicons-icon temple_hindu</p>
							<p><i class="glyphicons-icon temple_buddhist"></i> glyphicons-icon temple_buddhist</p>
							<p><i class="glyphicons-icon bicycle"></i> glyphicons-icon bicycle</p>
							<p><i class="glyphicons-icon life_preserver"></i> glyphicons-icon life_preserver</p>
							<p><i class="glyphicons-icon share_alt"></i> glyphicons-icon share_alt</p>
							<p><i class="glyphicons-icon comments"></i> glyphicons-icon comments</p>
							<p><i class="glyphicons-icon flower"></i> glyphicons-icon flower</p>
							<p><i class="glyphicons-icon baseball"></i> glyphicons-icon baseball</p>
							<p><i class="glyphicons-icon rugby"></i> glyphicons-icon rugby</p>
							<p><i class="glyphicons-icon ax"></i> glyphicons-icon ax</p>
							<p><i class="glyphicons-icon table_tennis"></i> glyphicons-icon table_tennis</p>
							<p><i class="glyphicons-icon bowling"></i> glyphicons-icon bowling</p>
							<p><i class="glyphicons-icon tree_conifer"></i> glyphicons-icon tree_conifer</p>
							<p><i class="glyphicons-icon tree_deciduous"></i> glyphicons-icon tree_deciduous</p>
							<p><i class="glyphicons-icon more_items"></i> glyphicons-icon more_items</p>
							<p><i class="glyphicons-icon sort"></i> glyphicons-icon sort</p>
							<p><i class="glyphicons-icon filter"></i> glyphicons-icon filter</p>
							<p><i class="glyphicons-icon gamepad"></i> glyphicons-icon gamepad</p>
							<p><i class="glyphicons-icon playing_dices"></i> glyphicons-icon playing_dices</p>
							<p><i class="glyphicons-icon calculator"></i> glyphicons-icon calculator</p>
							<p><i class="glyphicons-icon tie"></i> glyphicons-icon tie</p>
							<p><i class="glyphicons-icon wallet"></i> glyphicons-icon wallet</p>
							<p><i class="glyphicons-icon piano"></i> glyphicons-icon piano</p>
							<p><i class="glyphicons-icon sampler"></i> glyphicons-icon sampler</p>
							<p><i class="glyphicons-icon podium"></i> glyphicons-icon podium</p>
							<p><i class="glyphicons-icon soccer_ball"></i> glyphicons-icon soccer_ball</p>
							<p><i class="glyphicons-icon blog"></i> glyphicons-icon blog</p>
							<p><i class="glyphicons-icon dashboard"></i> glyphicons-icon dashboard</p>
							<p><i class="glyphicons-icon certificate"></i> glyphicons-icon certificate</p>
							<p><i class="glyphicons-icon bell"></i> glyphicons-icon bell</p>
							<p><i class="glyphicons-icon candle"></i> glyphicons-icon candle</p>
							<p><i class="glyphicons-icon pushpin"></i> glyphicons-icon pushpin</p>
							<p><i class="glyphicons-icon iphone_shake"></i> glyphicons-icon iphone_shake</p>
							<p><i class="glyphicons-icon pin_flag"></i> glyphicons-icon pin_flag</p>
							<p><i class="glyphicons-icon turtle"></i> glyphicons-icon turtle</p>
							<p><i class="glyphicons-icon rabbit"></i> glyphicons-icon rabbit</p>
							<p><i class="glyphicons-icon globe"></i> glyphicons-icon globe</p>
							<p><i class="glyphicons-icon briefcase"></i> glyphicons-icon briefcase</p>
							<p><i class="glyphicons-icon hdd"></i> glyphicons-icon hdd</p>
							<p><i class="glyphicons-icon thumbs_up"></i> glyphicons-icon thumbs_up</p>
							<p><i class="glyphicons-icon thumbs_down"></i> glyphicons-icon thumbs_down</p>
							<p><i class="glyphicons-icon hand_right"></i> glyphicons-icon hand_right</p>
							<p><i class="glyphicons-icon hand_left"></i> glyphicons-icon hand_left</p>
							<p><i class="glyphicons-icon hand_up"></i> glyphicons-icon hand_up</p>
							<p><i class="glyphicons-icon hand_down"></i> glyphicons-icon hand_down</p>
							<p><i class="glyphicons-icon fullscreen"></i> glyphicons-icon fullscreen</p>
							<p><i class="glyphicons-icon shopping_bag"></i> glyphicons-icon shopping_bag</p>
							<p><i class="glyphicons-icon book_open"></i> glyphicons-icon book_open</p>
							<p><i class="glyphicons-icon nameplate"></i> glyphicons-icon nameplate</p>
							<p><i class="glyphicons-icon nameplate_alt"></i> glyphicons-icon nameplate_alt</p>
							<p><i class="glyphicons-icon vases"></i> glyphicons-icon vases</p>
							<p><i class="glyphicons-icon bullhorn"></i> glyphicons-icon bullhorn</p>
							<p><i class="glyphicons-icon dumbbell"></i> glyphicons-icon dumbbell</p>
							<p><i class="glyphicons-icon suitcase"></i> glyphicons-icon suitcase</p>
							<p><i class="glyphicons-icon file_import"></i> glyphicons-icon file_import</p>
							<p><i class="glyphicons-icon file_export"></i> glyphicons-icon file_export</p>
							<p><i class="glyphicons-icon bug"></i> glyphicons-icon bug</p>
							<p><i class="glyphicons-icon crown"></i> glyphicons-icon crown</p>
							<p><i class="glyphicons-icon smoking"></i> glyphicons-icon smoking</p>
							<p><i class="glyphicons-icon cloud-upload"></i> glyphicons-icon cloud-upload</p>
							<p><i class="glyphicons-icon cloud-download"></i> glyphicons-icon cloud-download</p>
							<p><i class="glyphicons-icon restart"></i> glyphicons-icon restart</p>
							<p><i class="glyphicons-icon security_camera"></i> glyphicons-icon security_camera</p>
							<p><i class="glyphicons-icon expand"></i> glyphicons-icon expand</p>
							<p><i class="glyphicons-icon collapse"></i> glyphicons-icon collapse</p>
							<p><i class="glyphicons-icon collapse_top"></i> glyphicons-icon collapse_top</p>
							<p><i class="glyphicons-icon globe_af"></i> glyphicons-icon globe_af</p>
							<p><i class="glyphicons-icon global"></i> glyphicons-icon global</p>
							<p><i class="glyphicons-icon spray"></i> glyphicons-icon spray</p>
							<p><i class="glyphicons-icon nails"></i> glyphicons-icon nails</p>
							<p><i class="glyphicons-icon claw_hammer"></i> glyphicons-icon claw_hammer</p>
							<p><i class="glyphicons-icon classic_hammer"></i> glyphicons-icon classic_hammer</p>
							<p><i class="glyphicons-icon hand_saw"></i> glyphicons-icon hand_saw</p>
							<p><i class="glyphicons-icon riflescope"></i> glyphicons-icon riflescope</p>
							<p><i class="glyphicons-icon electrical_socket_eu"></i> glyphicons-icon electrical_socket_eu</p>
							<p><i class="glyphicons-icon electrical_socket_us"></i> glyphicons-icon electrical_socket_us</p>
							<p><i class="glyphicons-icon pinterest"></i> glyphicons-icon pinterest</p>
							<p><i class="glyphicons-icon dropbox"></i> glyphicons-icon dropbox</p>
							<p><i class="glyphicons-icon google_plus"></i> glyphicons-icon google_plus</p>
							<p><i class="glyphicons-icon jolicloud"></i> glyphicons-icon jolicloud</p>
							<p><i class="glyphicons-icon yahoo"></i> glyphicons-icon yahoo</p>
							<p><i class="glyphicons-icon blogger"></i> glyphicons-icon blogger</p>
							<p><i class="glyphicons-icon picasa"></i> glyphicons-icon picasa</p>
							<p><i class="glyphicons-icon amazon"></i> glyphicons-icon amazon</p>
							<p><i class="glyphicons-icon tumblr"></i> glyphicons-icon tumblr</p>
							<p><i class="glyphicons-icon wordpress"></i> glyphicons-icon wordpress</p>
							<p><i class="glyphicons-icon instapaper"></i> glyphicons-icon instapaper</p>
							<p><i class="glyphicons-icon evernote"></i> glyphicons-icon evernote</p>
							<p><i class="glyphicons-icon xing"></i> glyphicons-icon xing</p>
							<p><i class="glyphicons-icon zootool"></i> glyphicons-icon zootool</p>
							<p><i class="glyphicons-icon dribbble"></i> glyphicons-icon dribbble</p>
							<p><i class="glyphicons-icon deviantart"></i> glyphicons-icon deviantart</p>
							<p><i class="glyphicons-icon read_it_later"></i> glyphicons-icon read_it_later</p>
							<p><i class="glyphicons-icon linked_in"></i> glyphicons-icon linked_in</p>
							<p><i class="glyphicons-icon forrst"></i> glyphicons-icon forrst</p>
							<p><i class="glyphicons-icon pinboard"></i> glyphicons-icon pinboard</p>
							<p><i class="glyphicons-icon behance"></i> glyphicons-icon behance</p>
							<p><i class="glyphicons-icon github"></i> glyphicons-icon github</p>
							<p><i class="glyphicons-icon youtube"></i> glyphicons-icon youtube</p>
							<p><i class="glyphicons-icon skitch"></i> glyphicons-icon skitch</p>
							<p><i class="glyphicons-icon foursquare"></i> glyphicons-icon foursquare</p>
							<p><i class="glyphicons-icon quora"></i> glyphicons-icon quora</p>
							<p><i class="glyphicons-icon badoo"></i> glyphicons-icon badoo</p>
							<p><i class="glyphicons-icon spotify"></i> glyphicons-icon spotify</p>
							<p><i class="glyphicons-icon stumbleupon"></i> glyphicons-icon stumbleupon</p>
							<p><i class="glyphicons-icon readability"></i> glyphicons-icon readability</p>
							<p><i class="glyphicons-icon facebook"></i> glyphicons-icon facebook</p>
							<p><i class="glyphicons-icon twitter"></i> glyphicons-icon twitter</p>
							<p><i class="glyphicons-icon instagram"></i> glyphicons-icon instagram</p>
							<p><i class="glyphicons-icon posterous_spaces"></i> glyphicons-icon posterous_spaces</p>
							<p><i class="glyphicons-icon vimeo"></i> glyphicons-icon vimeo</p>
							<p><i class="glyphicons-icon flickr"></i> glyphicons-icon flickr</p>
							<p><i class="glyphicons-icon last_fm"></i> glyphicons-icon last_fm</p>
							<p><i class="glyphicons-icon rss"></i> glyphicons-icon rss</p>
							<p><i class="glyphicons-icon skype"></i> glyphicons-icon skype</p>
							<p><i class="glyphicons-icon e-mail"></i> glyphicons-icon e-mail</p>

						</div>
					</div><!--/span-->

				</div><!--/row-->

				<hr>

				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header">
							<h2><i class="halflings-icon white picture"></i><span class="break"></span>Font Awesome (Font)</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
							</div>
						</div>
						<div class="box-content">

							<h3>Web Application Icons</h3>
							<div class="row-fluid bs-icons">
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-adjust"></i> fa-icon-adjust</li>
							      <li><i class="icon-asterisk"></i> fa-icon-asterisk</li>
							      <li><i class="icon-ban-circle"></i> fa-icon-ban-circle</li>
							      <li><i class="icon-bar-chart"></i> fa-icon-bar-chart</li>
							      <li><i class="icon-barcode"></i> fa-icon-barcode</li>
							      <li><i class="icon-beaker"></i> fa-icon-beaker</li>
							      <li><i class="icon-bell"></i> fa-icon-bell</li>
							      <li><i class="icon-bolt"></i> fa-icon-bolt</li>
							      <li><i class="icon-book"></i> fa-icon-book</li>
							      <li><i class="icon-bookmark"></i> fa-icon-bookmark</li>
							      <li><i class="icon-bookmark-empty"></i> fa-icon-bookmark-empty</li>
							      <li><i class="icon-briefcase"></i> fa-icon-briefcase</li>
							      <li><i class="icon-bullhorn"></i> fa-icon-bullhorn</li>
							      <li><i class="icon-calendar"></i> fa-icon-calendar</li>
							      <li><i class="icon-camera"></i> fa-icon-camera</li>
							      <li><i class="icon-camera-retro"></i> fa-icon-camera-retro</li>
							      <li><i class="icon-certificate"></i> fa-icon-certificate</li>
							      <li><i class="icon-check"></i> fa-icon-check</li>
							      <li><i class="icon-check-empty"></i> fa-icon-check-empty</li>
							      <li><i class="icon-cloud"></i> fa-icon-cloud</li>
							      <li><i class="icon-cog"></i> fa-icon-cog</li>
							      <li><i class="icon-cogs"></i> fa-icon-cogs</li>
							      <li><i class="icon-comment"></i> fa-icon-comment</li>
							      <li><i class="icon-comment-alt"></i> fa-icon-comment-alt</li>
							      <li><i class="icon-comments"></i> fa-icon-comments</li>
							      <li><i class="icon-comments-alt"></i> fa-icon-comments-alt</li>
							      <li><i class="icon-credit-card"></i> fa-icon-credit-card</li>
							      <li><i class="icon-dashboard"></i> fa-icon-dashboard</li>
							      <li><i class="icon-download"></i> fa-icon-download</li>
							      <li><i class="icon-download-alt"></i> fa-icon-download-alt</li>
							      <li><i class="icon-edit"></i> fa-icon-edit</li>
							      <li><i class="icon-envelope"></i> fa-icon-envelope</li>
							      <li><i class="icon-envelope-alt"></i> fa-icon-envelope-alt</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-exclamation-sign"></i> fa-icon-exclamation-sign</li>
							      <li><i class="icon-external-link"></i> fa-icon-external-link</li>
							      <li><i class="icon-eye-close"></i> fa-icon-eye-close</li>
							      <li><i class="icon-eye-open"></i> fa-icon-eye-open</li>
							      <li><i class="icon-facetime-video"></i> fa-icon-facetime-video</li>
							      <li><i class="icon-film"></i> fa-icon-film</li>
							      <li><i class="icon-filter"></i> fa-icon-filter</li>
							      <li><i class="icon-fire"></i> fa-icon-fire</li>
							      <li><i class="icon-flag"></i> fa-icon-flag</li>
							      <li><i class="icon-folder-close"></i> fa-icon-folder-close</li>
							      <li><i class="icon-folder-open"></i> fa-icon-folder-open</li>
							      <li><i class="icon-gift"></i> fa-icon-gift</li>
							      <li><i class="icon-glass"></i> fa-icon-glass</li>
							      <li><i class="icon-globe"></i> fa-icon-globe</li>
							      <li><i class="icon-group"></i> fa-icon-group</li>
							      <li><i class="icon-hdd"></i> fa-icon-hdd</li>
							      <li><i class="icon-headphones"></i> fa-icon-headphones</li>
							      <li><i class="icon-heart"></i> fa-icon-heart</li>
							      <li><i class="icon-heart-empty"></i> fa-icon-heart-empty</li>
							      <li><i class="icon-home"></i> fa-icon-home</li>
							      <li><i class="icon-inbox"></i> fa-icon-inbox</li>
							      <li><i class="icon-info-sign"></i> fa-icon-info-sign</li>
							      <li><i class="icon-key"></i> fa-icon-key</li>
							      <li><i class="icon-leaf"></i> fa-icon-leaf</li>
							      <li><i class="icon-legal"></i> fa-icon-legal</li>
							      <li><i class="icon-lemon"></i> fa-icon-lemon</li>
							      <li><i class="icon-lock"></i> fa-icon-lock</li>
							      <li><i class="icon-unlock"></i> fa-icon-unlock</li>
							      <li><i class="icon-magic"></i> fa-icon-magic</li>
							      <li><i class="icon-magnet"></i> fa-icon-magnet</li>
							      <li><i class="icon-map-marker"></i> fa-icon-map-marker</li>
							      <li><i class="icon-minus"></i> fa-icon-minus</li>
							      <li><i class="icon-minus-sign"></i> fa-icon-minus-sign</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-money"></i> fa-icon-money</li>
							      <li><i class="icon-move"></i> fa-icon-move</li>
							      <li><i class="icon-music"></i> fa-icon-music</li>
							      <li><i class="icon-off"></i> fa-icon-off</li>
							      <li><i class="icon-ok"></i> fa-icon-ok</li>
							      <li><i class="icon-ok-circle"></i> fa-icon-ok-circle</li>
							      <li><i class="icon-ok-sign"></i> fa-icon-ok-sign</li>
							      <li><i class="icon-pencil"></i> fa-icon-pencil</li>
							      <li><i class="icon-picture"></i> fa-icon-picture</li>
							      <li><i class="icon-plane"></i> fa-icon-plane</li>
							      <li><i class="icon-plus"></i> fa-icon-plus</li>
							      <li><i class="icon-plus-sign"></i> fa-icon-plus-sign</li>
							      <li><i class="icon-print"></i> fa-icon-print</li>
							      <li><i class="icon-pushpin"></i> fa-icon-pushpin</li>
							      <li><i class="icon-qrcode"></i> fa-icon-qrcode</li>
							      <li><i class="icon-question-sign"></i> fa-icon-question-sign</li>
							      <li><i class="icon-random"></i> fa-icon-random</li>
							      <li><i class="icon-refresh"></i> fa-icon-refresh</li>
							      <li><i class="icon-remove"></i> fa-icon-remove</li>
							      <li><i class="icon-remove-circle"></i> fa-icon-remove-circle</li>
							      <li><i class="icon-remove-sign"></i> fa-icon-remove-sign</li>
							      <li><i class="icon-reorder"></i> fa-icon-reorder</li>
							      <li><i class="icon-resize-horizontal"></i> fa-icon-resize-horizontal</li>
							      <li><i class="icon-resize-vertical"></i> fa-icon-resize-vertical</li>
							      <li><i class="icon-retweet"></i> fa-icon-retweet</li>
							      <li><i class="icon-road"></i> fa-icon-road</li>
							      <li><i class="icon-rss"></i> fa-icon-rss</li>
							      <li><i class="icon-screenshot"></i> fa-icon-screenshot</li>
							      <li><i class="icon-search"></i> fa-icon-search</li>
							      <li><i class="icon-share"></i> fa-icon-share</li>
							      <li><i class="icon-share-alt"></i> fa-icon-share-alt</li>
							      <li><i class="icon-shopping-cart"></i> fa-icon-shopping-cart</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-signal"></i> fa-icon-signal</li>
							      <li><i class="icon-signin"></i> fa-icon-signin</li>
							      <li><i class="icon-signout"></i> fa-icon-signout</li>
							      <li><i class="icon-sitemap"></i> fa-icon-sitemap</li>
							      <li><i class="icon-sort"></i> fa-icon-sort</li>
							      <li><i class="icon-sort-down"></i> fa-icon-sort-down</li>
							      <li><i class="icon-sort-up"></i> fa-icon-sort-up</li>
							      <li><i class="icon-star"></i> fa-icon-star</li>
							      <li><i class="icon-star-empty"></i> fa-icon-star-empty</li>
							      <li><i class="icon-star-half"></i> fa-icon-star-half</li>
							      <li><i class="icon-tag"></i> fa-icon-tag</li>
							      <li><i class="icon-tags"></i> fa-icon-tags</li>
							      <li><i class="icon-tasks"></i> fa-icon-tasks</li>
							      <li><i class="icon-thumbs-down"></i> fa-icon-thumbs-down</li>
							      <li><i class="icon-thumbs-up"></i> fa-icon-thumbs-up</li>
							      <li><i class="icon-time"></i> fa-icon-time</li>
							      <li><i class="icon-tint"></i> fa-icon-tint</li>
							      <li><i class="icon-trash"></i> fa-icon-trash</li>
							      <li><i class="icon-trophy"></i> fa-icon-trophy</li>
							      <li><i class="icon-truck"></i> fa-icon-truck</li>
							      <li><i class="icon-umbrella"></i> fa-icon-umbrella</li>
							      <li><i class="icon-upload"></i> fa-icon-upload</li>
							      <li><i class="icon-upload-alt"></i> fa-icon-upload-alt</li>
							      <li><i class="icon-user"></i> fa-icon-user</li>
							      <li><i class="icon-user-md"></i> fa-icon-user-md</li>
							      <li><i class="icon-volume-off"></i> fa-icon-volume-off</li>
							      <li><i class="icon-volume-down"></i> fa-icon-volume-down</li>
							      <li><i class="icon-volume-up"></i> fa-icon-volume-up</li>
							      <li><i class="icon-warning-sign"></i> fa-icon-warning-sign</li>
							      <li><i class="icon-wrench"></i> fa-icon-wrench</li>
							      <li><i class="icon-zoom-in"></i> fa-icon-zoom-in</li>
							      <li><i class="icon-zoom-out"></i> fa-icon-zoom-out</li>
							    </ul>
							  </div>
							</div>
							<h3>Text Editor Icons</h3>
							<div class="row-fluid bs-icons">
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-file"></i> fa-icon-file</li>
							      <li><i class="icon-cut"></i> fa-icon-cut</li>
							      <li><i class="icon-copy"></i> fa-icon-copy</li>
							      <li><i class="icon-paste"></i> fa-icon-paste</li>
							      <li><i class="icon-save"></i> fa-icon-save</li>
							      <li><i class="icon-undo"></i> fa-icon-undo</li>
							      <li><i class="icon-repeat"></i> fa-icon-repeat</li>
							      <li><i class="icon-paper-clip"></i> fa-icon-paper-clip</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-text-height"></i> fa-icon-text-height</li>
							      <li><i class="icon-text-width"></i> fa-icon-text-width</li>
							      <li><i class="icon-align-left"></i> fa-icon-align-left</li>
							      <li><i class="icon-align-center"></i> fa-icon-align-center</li>
							      <li><i class="icon-align-right"></i> fa-icon-align-right</li>
							      <li><i class="icon-align-justify"></i> fa-icon-align-justify</li>
							      <li><i class="icon-indent-left"></i> fa-icon-indent-left</li>
							      <li><i class="icon-indent-right"></i> fa-icon-indent-right</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-font"></i> fa-icon-font</li>
							      <li><i class="icon-bold"></i> fa-icon-bold</li>
							      <li><i class="icon-italic"></i> fa-icon-italic</li>
							      <li><i class="icon-strikethrough"></i> fa-icon-strikethrough</li>
							      <li><i class="icon-underline"></i> fa-icon-underline</li>
							      <li><i class="icon-link"></i> fa-icon-link</li>
							      <li><i class="icon-columns"></i> fa-icon-columns</li>
							      <li><i class="icon-table"></i> fa-icon-table</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-th-large"></i> fa-icon-th-large</li>
							      <li><i class="icon-th"></i> fa-icon-th</li>
							      <li><i class="icon-th-list"></i> fa-icon-th-list</li>
							      <li><i class="icon-list"></i> fa-icon-list</li>
							      <li><i class="icon-list-ol"></i> fa-icon-list-ol</li>
							      <li><i class="icon-list-ul"></i> fa-icon-list-ul</li>
							      <li><i class="icon-list-alt"></i> fa-icon-list-alt</li>
							    </ul>
							  </div>
							</div>
							<h3>Directional Icons</h3>
							<div class="row-fluid bs-icons">
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-arrow-down"></i> fa-icon-arrow-down</li>
							      <li><i class="icon-arrow-left"></i> fa-icon-arrow-left</li>
							      <li><i class="icon-arrow-right"></i> fa-icon-arrow-right</li>
							      <li><i class="icon-arrow-up"></i> fa-icon-arrow-up</li>
							      <li><i class="icon-chevron-down"></i> fa-icon-chevron-down</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-circle-arrow-down"></i> fa-icon-circle-arrow-down</li>
							      <li><i class="icon-circle-arrow-left"></i> fa-icon-circle-arrow-left</li>
							      <li><i class="icon-circle-arrow-right"></i> fa-icon-circle-arrow-right</li>
							      <li><i class="icon-circle-arrow-up"></i> fa-icon-circle-arrow-up</li>
							      <li><i class="icon-chevron-left"></i> fa-icon-chevron-left</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-caret-down"></i> fa-icon-caret-down</li>
							      <li><i class="icon-caret-left"></i> fa-icon-caret-left</li>
							      <li><i class="icon-caret-right"></i> fa-icon-caret-right</li>
							      <li><i class="icon-caret-up"></i> fa-icon-caret-up</li>
							      <li><i class="icon-chevron-right"></i> fa-icon-chevron-right</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-hand-down"></i> fa-icon-hand-down</li>
							      <li><i class="icon-hand-left"></i> fa-icon-hand-left</li>
							      <li><i class="icon-hand-right"></i> fa-icon-hand-right</li>
							      <li><i class="icon-hand-up"></i> fa-icon-hand-up</li>
							      <li><i class="icon-chevron-up"></i> fa-icon-chevron-up</li>
							    </ul>
							  </div>
							</div>
							<h3>Video Player Icons</h3>
							<div class="row-fluid bs-icons">
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-play-circle"></i> fa-icon-play-circle</li>
							      <li><i class="icon-play"></i> fa-icon-play</li>
							      <li><i class="icon-pause"></i> fa-icon-pause</li>
							      <li><i class="icon-stop"></i> fa-icon-stop</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-step-backward"></i> fa-icon-step-backward</li>
							      <li><i class="icon-fast-backward"></i> fa-icon-fast-backward</li>
							      <li><i class="icon-backward"></i> fa-icon-backward</li>
							      <li><i class="icon-forward"></i> fa-icon-forward</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-fast-forward"></i> fa-icon-fast-forward</li>
							      <li><i class="icon-step-forward"></i> fa-icon-step-forward</li>
							      <li><i class="icon-eject"></i> fa-icon-eject</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-fullscreen"></i> fa-icon-fullscreen</li>
							      <li><i class="icon-resize-full"></i> fa-icon-resize-full</li>
							      <li><i class="icon-resize-small"></i> fa-icon-resize-small</li>
							    </ul>
							  </div>
							</div>
							<h3>Social Icons</h3>
							<div class="row-fluid bs-icons">
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-phone"></i> fa-icon-phone</li>
							      <li><i class="icon-phone-sign"></i> fa-icon-phone-sign</li>
							      <li><i class="icon-facebook"></i> fa-icon-facebook</li>
							      <li><i class="icon-facebook-sign"></i> fa-icon-facebook-sign</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-twitter"></i> fa-icon-twitter</li>
							      <li><i class="icon-twitter-sign"></i> fa-icon-twitter-sign</li>
							      <li><i class="icon-github"></i> fa-icon-github</li>
							      <li><i class="icon-github-sign"></i> fa-icon-github-sign</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-linkedin"></i> fa-icon-linkedin</li>
							      <li><i class="icon-linkedin-sign"></i> fa-icon-linkedin-sign</li>
							      <li><i class="icon-pinterest"></i> fa-icon-pinterest</li>
							      <li><i class="icon-pinterest-sign"></i> fa-icon-pinterest-sign</li>
							    </ul>
							  </div>
							  <div class="span3">
							    <ul class="the-icons">
							      <li><i class="icon-google-plus"></i> fa-icon-google-plus</li>
							      <li><i class="icon-google-plus-sign"></i> fa-icon-google-plus-sign</li>
							      <li><i class="icon-sign-blank"></i> fa-icon-sign-blank</li>
							    </ul>
							  </div>
							</div>

						</div>

					</div><!--/span-->

				</div><!--/row-->


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
