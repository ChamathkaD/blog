@extends('layouts.app')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>

            <div class="col-4">

                <h3>My Profile</h3>
                <hr>

                <form action="#" method="#">
                @csrf

                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="firstName">
                                    <i class="far fa-user-circle mr-2"></i>
                                    First Name</label>
                                <input
                                    type="text"
                                    name="firstName"
                                    id="firstName"
                                    class="form-control"
                                    placeholder="Enter Your First Name">
                            </div>

                            <div class="form-group">
                                <label for="lastName">
                                    <i class="far fa-user-circle mr-2"></i>
                                    Last Name</label>
                                <input
                                    type="text"
                                    name="lastName"
                                    id="lastName"
                                    class="form-control"
                                    placeholder="Enter Your Last Name">
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    <i class="far fa-envelope mr-2"></i>
                                    Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                    placeholder="Enter Your Email">
                            </div>

                            <div class="form-group">
                                <label for="phone">
                                    <i class="fas fa-mobile-alt mr-2"></i>
                                    Phone Number</label>
                                <input
                                    type="phone"
                                    name="phone"
                                    id="phone"
                                    class="form-control"
                                    placeholder="Enter Your Phone Number">
                            </div>

                            <button class="btn btn-success">
                                <i class="far fa-save mr-2"></i>

                                Update Profile</button>
                        </div>

                        <div class="col-4">
                            <div class="col-3">
                                <img src="{{ asset('img/form-v6.jpg') }}" alt="comment pro_pic" class="" style="width: 150px; ">
                            </div>
                        </div>

                    </div>






            </form>


            </div>





        </div>
    </div>

@endsection
