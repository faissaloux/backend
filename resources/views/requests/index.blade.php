@extends('/layouts/app')


@section('content')
 <!-- main-content opened -->
<div class="main-content horizontal-content">
	<!-- container opened -->
	@if (!$orders->isEmpty())
	<div class="container">
					<!-- breadcrumb -->
					<div class="breadcrumb-header ">
						<div class="my-auto">
							<div class="d-flex my-xl-auto right-content">						
								<div class="pr-1 mb-3 mb-xl-0">
									<a href="{{ route('admin.') }}"><button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-arrow-left"></i></button></a>
								</div>	
								<div class="pr-1 mb-3 mb-xl-0">
								   <div class="d-flex">
									<h5 class="content-title mb-0 my-auto">{{ __('Dashboard') }} </h5><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Orders') }} </span>
								</div>
							</div>					 
						</div>
					</div>
 
					</div>
					<!-- breadcrumb -->
					@endif
					<!-- row opened -->
					 <div class="col-xl-12">
							<div class="card">
								@if ($orders->isEmpty())

								 <div class="card-body">
								 	 <div class="empty_state text-center">

									            <i class="fas fa-shopping-basket empty_state_icon"></i>
									           <h4 > 
									              <br>
									                {{ __('when you recieve new order , will apear here.') }}
									                </h4>
									             
									 
									 </div>
								</div>
      
        						@endif @if (!$orders->isEmpty())
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">{{ __('ORDERS TABLE') }}</h4>
										 
									</div> 
									
								<div class="card-body">
									<div class="table-responsive">
										<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
											<div class="row">
												<div class="col-sm-12 col-md-6"></div>
												<div class="col-sm-12 col-md-6">
													<div id="example1_filter" class="dataTables_filter">
													 
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
											<thead>
												<tr role="row">
													 
													 
													 <th class="wd-20p border-bottom-0 sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 70px;">{{ __('Id') }}</th>
													 <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 70px;">{{ __('Image') }}</th>
													 
													<th class="wd-15p border-bottom-0 sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 105px;">{{ __('Address') }}</th>
													<th class="wd-10p border-bottom-0 sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width:70px;">{{ __('Price') }}</th>
													
												 
													 
													<th class="wd-10p border-bottom-0 sorting text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 75px;">{{ __('More') }}</th>
												</tr>
											</thead>
											<tbody>
												@foreach($orders as $order)
												<tr>
													<td class="text-center">{{$order->id}}</td>
													<td><img src="{{ asset('spaces/' . $order->thumbnail) }}"
                                                                        class="w-75" alt=""></td>
											 	 
														 
												 
													<td class="text-center">{{$order->meeting["address"]}}</td>
													<td class="text-center">{{$order->price}}</td>

													
												
													<td class="text-center"><a href=" {{ route('admin.orders.details', ['id' => $order->id]) }}"><i class="fas fa-edit"></i>{{ __('details') }}</a></td>

												 
													 
													 
													

												</tr>
												@endforeach
												
 
											</tbody>																			 
										</table>
									</div>
								</div>
								@endif

								<div class="pagination-cont">
									{{$orders->links()}}
								</div>
					 
					     </div>
				   </div>
		
	</div>
	<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection