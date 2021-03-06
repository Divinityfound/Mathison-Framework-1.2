@extends('superAdmin.master')

@section('content')
	<h2>Craigslist Scraper List</h2>
	<ul  class="nav nav-tabs">
		<li class="active">
       		<a  href="#list" data-toggle="tab">List</a>
		</li>
		<li>
			<a href="#favorites" data-toggle="tab">Favorites</a>
		</li>
		<li>
			<a href="#history" data-toggle="tab">History</a>
		</li>
	</ul>
	<br />
	<div class="tab-content clearfix">
		<div class="tab-pane active" id="list">
			{!! $table !!}
		</div>
		<div class="tab-pane" id="favorites">
			{!! $favoriteTable !!}
		</div>
		<div class="tab-pane" id="history">
        	{!! $viewedTable !!}
		</div>
	</div>


	<script>
		$('.clclicklistener').click(function() {
			var href = $(this).attr('href');
			$.ajax({
				url: '/admin/super/craigslistScraper/addToCache',
				type: 'POST',
				data: {url: href},
			}).done(function() {
				console.log("Craigslist Item Stored");
			});
		});
		$('.favoriteit').click(function() {
			var href = $(this).attr('href');
			$.ajax({
				url: '/admin/super/craigslistScraper/favoriteit',
				type: 'POST',
				data: {url: href},
			}).done(function() {
				console.log("Craigslist Item Stored");
			});
		});
		$('.unfavoriteit').click(function() {
			var href = $(this).attr('href');
			$.ajax({
				url: '/admin/super/craigslistScraper/unfavoriteit',
				type: 'POST',
				data: {url: href},
			}).done(function() {
				console.log("Craigslist Item Stored");
			});
		});
	</script>
@stop