@extends('layouts.app')

@section('title','Edit the Product')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	@include('layouts.partial.msg')
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-secondary">
							<h3>@yield('title')</h3>
						</div>
                        <form method="POST" action="{{ route('products.update',$product) }}" enctype="multipart/form-data">

                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label" style="font-size: 18px; font-weight: bold;">Name <strong style="color:red; font-size: 12px;">(Obligatory field)</strong></label>
											<input type="text" class="form-control" name="name" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->name }}">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label" style="font-size: 18px; font-weight: bold;">Description <strong style="color:red; font-size: 12px;">(Obligatory field)</strong></label>
											<input type="text" class="form-control" name="description" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->description }}">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label" style="font-size: 18px; font-weight: bold;">Price <strong style="color:red; font-size: 12px;">(Obligatory field)</strong></label>
											<input type="text" class="form-control" name="price" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->price }}">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label" style="font-size: 18px; font-weight: bold;">cuantity <strong style="color:red; font-size: 12px;">(Obligatory field)</strong></label>
											<input type="text" class="form-control" name="quantity" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->quantity }}">
										</div>
									</div>
								</div>
<br>
                                <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Image</label>
                                                <input type="file" class="form-control-file" name="image"
                                                    id="image">
                                            </div>
                                        </div>
                                </div>
<br>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-primary btn-block btn-flat" style="font-size: 18px; font-weight: bold;">Edit</button>
										<a href="{{ route('products.index') }}" class="btn btn-danger btn-block btn-flat" style="font-size: 18px; font-weight: bold;">back</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection