@extends('layouts.app')

@section('title', 'Bill')

@section('content')
<br><br>
    <div class="content-wrapper">
        <section class="content">            
                    <center>
                    <div class="col-md-6 mb-3">
                        <div class="card" style="background: #CCCCFF;">
                            <div class="card-body">
                                <h5 class="card-title" >Order Detail</h5>
                                <br>
                                <div style="display: flex; justify-content: space-around;">
                                    <div>
                                        <p class="card-text"><strong>Date:</strong> {{ $order->date_order }}</p>
                                    </div>
                                    <div>
                                        <p class="card-text"><strong>Total:</strong> ${{ $order->total }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                    <center>
                    <div class="col-md-6 mb-3">
                        <div class="card" style="background: #CCCCFF;">
                            <div class="card-body">
                                <h5 class="card-title">Client Detail</h5>
                                <br>    
                                <div style="display: flex; justify-content: space-around;">
                                    <div>
                                        <p class="card-text"><strong>Client:</strong> {{ $client->name }}</p>
                                    </div>
                                    <div>
                                        <p class="card-text"><strong>Document:</strong> {{ $client->document }}</p>
                                    </div>
                                    <div>
                                        <p class="card-text"><strong>Phone:</strong> {{ $client->phone }}</p>
                                    </div>                                   
                                </div>                                
                            </div>
                        </div>
                    </div>
                    </center>
                <br>
                <div class="card">
                    <div class="card-header text-white" style="background: #6699FF;">
                        <center><h3 class="card-title">Order Items</h3></center>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered mb-0" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($details as $detail)
                                    <tr>
                                        <td>{{ $detail->product->name }}</td>
                                        <td>{{$detail->product->price }}</td>
                                        <td>{{ $detail->quantity }}</td>
                                        <td style="background: #FF5A5A;">${{ number_format($detail->subtotal, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br><br><br><br>    
@endsection