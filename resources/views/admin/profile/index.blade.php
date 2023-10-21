@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">
    @include('admin.includes.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('employee')}}">Profile</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box box-success">
                            <div class="panel">

                                <div class="panel-heading">
                                    <span class="panel-title">Personal Details</span>
                                </div>
                                <div class="panel-body pn pb5">
                                    <hr class="short br-lighter">


                                    <div class="box-body no-padding">

                                        <table class="table">
                                            <tbody>
                                            {{--@foreach($users as $user)--}}

                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Username</strong></td>
                                                    <td>{{$user->username}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Birthday</strong></td>
                                                    <td>{{$user->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-genderless"></i>
                                                    </td>
                                                    <td><strong>Gender</strong></td>
                                                    <td>{{$user->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-alt"></i>
                                                    </td>
                                                    <td><strong>Phone number</strong></td>
                                                    <td>{{$user->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-alt"></i>
                                                    </td>
                                                    <td><strong>Email</strong></td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-calendar-times"></i>
                                                    </td>
                                                    <td><strong>Join date</strong></td>
                                                    <td>{{$user->join_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-map-marker"></i>
                                                    </td>
                                                    <td><strong>Address</strong></td>
                                                    <td>{{$user->address}}</td>
                                                </tr>
                                            {{--@endforeach--}}
                                            </tbody>
                                        </table>
                                        {{--{{ $users->links() }}--}}

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box box-success">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Bank Details</span>
                            </div>
                            <div class="panel-body pn pb5">
                                <hr class="short br-lighter">

                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-credit-card"></i></td>
                                            <td><strong>Account Holder name</strong></td>
                                            <td>AAAAA</td>

                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-credit-card"></i></td>
                                            <td><strong>Account Number</strong></td>
                                            <td>12**********2458</td>

                                        </tr>
                                        <tr>

                                            <td style="width: 10px" class="text-center"><i class="fa fa-tags"></i></td>
                                            <td><strong>Pf Account Number</strong></td>
                                            <td>15**********4846</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-universal-access"></i></td>
                                            <td><strong>Bank Name</strong></td>
                                            <td>First Bank</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-accessible-icon"></i></td>
                                            <td><strong>Bank Branch</strong></td>
                                            <td>Abuja</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10px" class="text-center"><i class="fa fa-code"></i></td>
                                            <td><strong>Sort Code</strong></td>
                                            <td>5467556</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center">
                2023 All Rights Reserved Finca Micro Finance.
            </footer>
        </div>
    </div>

@endsection
