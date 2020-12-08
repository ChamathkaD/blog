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

                    <div class="form-group">
                        <label for="name">
                            <i class="far fa-user-circle mr-2"></i>
                             Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            placeholder="Enter Your Name">
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




                    <button class="btn btn-success">
                        <i class="far fa-save mr-2"></i>

                        Update Profile</button>
            </div>



                </form>

            </div>

        </div>
    </div>

@endsection
