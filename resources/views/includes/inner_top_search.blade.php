<form action="{{route('job.list')}}" method="get">
	<!-- Page Title start -->
	<div class="container">
	<div class="pageSearch">
			
				<div class="row">
					<div class="col-lg-7">

						@if(Auth::guard('company')->check())
						<h3 class="seekertxt">   {{__('Quick way to find your Jobs and')}} <span>{{__('Search Jobseekers Today')}}.</span></h3>
						@else
						<h3 class="mb-3">{{__('Want to find a quick way to access jobs')}}. <span>{{__('Start by typing here')}}.</span></h3>				
						@endif

						<div class="searchform">
						<div class="input-group">
							<input type="text"  name="search" id="jbsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills or job title')}}" autocomplete="off" />
							
							<button type="submit" class="btn"><i class="fas fa-search"></i></button>
						</div>
						</div>
					</div>
				</div>
			
	</div>
	</div>
	<!-- Page Title end -->
</form>
