@extends('/layouts/app')

@section('content')
 <!-- main-content opened -->
<div class="container">
			<div class="main-content horizontal-content">
				<!-- container opened -->
				<div class="container">
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex my-xl-auto right-content">						
								<div class="pr-1 mb-3 mb-xl-0">
									<a href="{{ route('admin.coupons.index') }}">
										<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-arrow-left"></i></button>
									</a>
								</div>	
								<div class="pr-1 mb-3 mb-xl-0">
								   <div class="d-flex">
									<h5 class="content-title mb-0 my-auto">{{ __('Dashboard') }}</h5>
									<span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Coupons') }} </span>
									<span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Edit Coupon') }} </span>
								</div>
							</div>					 
						</div>
					</div>
	 
					</div>
					<!-- breadcrumb -->		 
					<!-- row -->
					<form method="POST" action="{{route('admin.coupons.update', ['id' => $content->id] )}}">
										@csrf
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										 {{ __('Coupon Modification') }}
									</div>
									
								<div class="pd-30 pd-sm-40 bg-gray-200">	
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Activate the coupon') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
											  <label class="switch">
															<input name='status' type="checkbox" value="{{$content->statue}}"  >
															<span class="slider round"></span>
												</label>
											</div>

										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Coupon Code') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input name="code" class="form-control" value="{{$content->code}}"  type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Title') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" name="title" value="{{$content->title}}" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Value') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" name="discount" value="{{$content->discount}}"   type="text">
											</div>
										</div>	 
																	
								       
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Type') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<select name="discount_type" id="input-role" class="form-control">
													
													@if($content->discount_type == 'percent')
													<option value="{{ $content->discount_type }}">{{ __('Percent Reduction') }} </option>
													<option value="fixed">{{ __('Third memorization') }}  </option>
													@elseif($content->discount_type == 'fixed')
													<option value="{{ $content->discount_type }}">{{ __('Third memorization') }}  </option>
													<option value="percent">{{ __('Percent Reduction') }}</option>
													@else
													<option value="fixed">{{ __('Third memorization') }}  </option>
													<option value="percent">{{ __('Percent Reduction') }}</option>
													@endif
											   </select> 

											</div>
										</div>
										 <div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Description') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<textarea class="form-control" name="description" type="text">{{$content->description}}</textarea>  
											</div>
										</div>
										 	 
									</div>
									
										<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5 btn-block">{{ __('Save Changes') }}</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->	
				</form>			 
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
		</div>
		<!-- End Page -->	
</div>	 
<script>

  $(function() {

    $('.toggle-class').change(function() {

        var status = $(this).prop('checked') == true ? 1 : 0; 

        var user_id = $(this).data('id'); 

         

        $.ajax({

            type: "GET",

            dataType: "json",

            url: '/changeStatus',

            data: {'statue': statue, 'id': id},

            success: function(data){

              console.log(data.success)

            }

        });

    })

  })

</script>
@endsection