@extends('layouts.app')

@section('title', 'Create the clients')

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
                            <form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Name<strong
                                                        style="color:red; font-size: 12px;"> (Obligatory field)</strong></label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter the client name" autocomplete="off"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Document<strong
                                                        style="color:red; font-size: 12px;"> (Obligatory field)</strong></label>
                                                <input type="text" class="form-control" name="document"
                                                    placeholder="Enter the client document" autocomplete="off"
                                                    value="{{ old('document') }}">
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Photo</label>
                                                <input type="file" class="form-control-file" name="photo"
                                                    id="photo">
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Address<strong
                                                        style="color:red; font-size: 12px;"> (Obligatory field)</strong></label>
                                                <textarea class="form-control" name="address" placeholder="Enter the client address" id=""
                                                    cols="120" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Phone<strong
                                                        style="color:red; font-size: 12px;"> (Obligatory field)</strong></label>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Enter the client phone" autocomplete="off"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="font-size: 18px; font-weight: bold;">Email<strong
                                                        style="color:red; font-size: 12px;"> (Obligatory field)</strong></label>
                                                <input type="text" class="form-control" name="email"
                                                    placeholder="Enter the client email" autocomplete="off"
                                                    value="{{ old('nombre') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="status" value="1">
                                    <input type="hidden" class="form-control" name="registered_by"
                                        value="{{ Auth::user()->id }}">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2 col-xs-4">
                                            <button type="submit"
                                                class="btn btn-primary btn-block btn-flat" style="font-size: 18px; font-weight: bold;">Create</button>
                                            <a href="{{ route('clients.index') }}"
                                                class="btn btn-danger btn-block btn-flat" style="font-size: 18px; font-weight: bold;">Back</a>
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