@extends('frontend.layouts.app')
@section('content')
<div id="savedcourses_page">
    <div class="row no-gutters">
        @include('userdashboard.partials.side-nav')
        <div class="col-md-8 col-lg-9">
              <div class="savedcourses_content">
            <div class="d_breadcrumb">
              <ul>
                <li>
                  <a href="{{ URL::to('/userdashboard') }}"> Home </a>
                </li>
                <li>/</li>
                <li class="active">
                  <a href="">
                    <span>title</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
            <div class="course_container">  
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row pl-5 pr-5 pt-2">
                                        <div class="col-md-6">
                                            <img src="{{ URL::to(getSiteSetting('logo') ?? ' ') }}" height="100">
                                        </div>
                
                                        <div class="col-md-6 text-right">
                                            <p class="font-weight-bold mb-1">Invoice #{{ $masterOrder->invoice_no }}</p>
                                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                                        </div>
                                    </div>
                
                                    <hr class="my-2">
                
                                    <div class="row pb-5 p-5">
                                        <div class="col-md-6">
                                            <p class="font-weight-bold mb-4">Client Information</p>
                                            <p class="mb-1">{{ $user->first_name }}</p>
                                            <p class="mb-1">{{ $user->address ?? ' ' }}</p>
                                            <p class="mb-1">{{ $user->email }}</p>
                                        </div>
                
                                        <div class="col-md-6 text-right">
                                            <p class="font-weight-bold mb-4">Payment Details</p>
                                            <p class="mb-1"><span class="text-muted">Payment Type: </span>{{ $masterOrder->payment_method }}</p>
                                            <p class="mb-1"><span class="text-muted">Name: </span> {{ $user->first_name }} {{ $user->last_name }}</p>
                                        </div>
                                    </div>
                
                                    <div class="row p-5">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="border-0 text-uppercase small font-weight-bold">S.No</th>
                                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                                        <th class="border-0 text-uppercase small font-weight-bold">Course Type</th>
                                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                                        {{-- <th class="border-0 text-uppercase small font-weight-bold">Total</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($courses as $course)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $course->courseList->title }}</td>
                                                            <td>{{ $course->courseList->type ?? '' }}</td>
                                                            <td>{{ $course->courseList->offer_price }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                
                                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                        <div class="py-3 px-5 text-right">
                                            <div class="mb-2">Grand Total</div>
                                            <div class="h2 font-weight-light">Rs. {{ $masterOrder->grandTotal }}</div>
                                        </div>
                
                                        <div class="py-3 px-5 text-right">
                                            <div class="mb-2">Sub - Total amount</div>
                                            <div class="h2 font-weight-light">Rs. {{ $masterOrder->grandTotal }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="">an4soft.com</a></div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection