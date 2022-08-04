@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@push('after-styles')
    <style>

        .card-counter {
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 120px;
            width : 300px;
            font-style:italic;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover {
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.primary {
            background-color: #007bff;
            color: #FFF;
        }

        .card-counter.danger {
            background-color: #ef5350;
            color: #FFF;
        }

        .card-counter.success {
            background-color: #66bb6a;
            color: #FFF;
        }

        .card-counter.info {
            background-color: #26c6da;
            color: #FFF;
        }

        .card-counter.request {
            background-color: #581845;
            color: #FFF;
        }

        

        .card-counter i {
            font-size: 5em;
            opacity: 0.2;
            
        }

        .card-counter .count-numbers {
            position: absolute;
            right: 170px;
            top: 10px;
            bottom:100px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name {
            position: absolute;
            right: 150px;
            left:50px;
            top: 55px;
            bottom : 10px;
            opacity: 0.6;
            display: block;
            font-size: 14px;
        }
    </style>
@endpush



@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    <strong>Success !</strong> {{ session('success') }}
</div>
@endif
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('You are logged in!')
                        <br>
                        
                        <div>
                           <a href="{{ route('frontend.user.products') }}">Create a cart</a>     
                        </div> 
                        
                    </x-slot>

                    <x-slot name="body">
                        
                        <div class="container py-4">
                            <div class="row">

                                        <div class="col-md-6 ">
                                            <a class="text-decoration-none" href="{{ route('frontend.user.account') }}">
                                                <div class="card-counter info">
                                                    <span class="count-numbers">Account</span>
                                                    <span class="count-name">Viewing and Editing the account details,Resetting password and Authentication of the account</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6 ">
                                            <a class="text-decoration-none" href="{{ route('frontend.user.products') }}">
                                                <div class="card-counter request">
                                                    <span class="count-numbers">Components</span>
                                                    <span class="count-name">View available components, Add components to cart, View details about avilable components.</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6 ">
                                            <a class="text-decoration-none" href="{{ route('frontend.user.cart') }}">
                                                <div class="card-counter success">
                                                    <span class="count-numbers">Cart</span>
                                                    <span class="count-name">View components in the cart, Edit the quantity of the reserving components, Placing the reservation</span>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-md-6 ">
                                            <a class="text-decoration-none" href="{{ route('frontend.user.orders.index') }}">
                                                <div class="card-counter danger">
                                                    <span class="count-numbers">Reservations</span>
                                                    <span class="count-name">View all the reservation details, View the status of the reservations, Mark the received reservations, Edit details</span>
                                                </div>
                                            </a>
                                        </div>

                            </div>   
                        </div>

                    </x-slot>
                </x-frontend.card>

                
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->


    
   

    
@endsection
