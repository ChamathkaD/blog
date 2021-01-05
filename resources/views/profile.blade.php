@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 p-5">
                <div>

                    <div class="d-flex justify-content-between">
                        <h3>Basic info</h3>
                        <div >

<!--                            <a href="#" class="btn-outline-success btn">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                Dashboard</a>-->
                            <a href="{{ route('categories.create') }}" class="btn-outline-success btn">
                                <i class="fas fa-sitemap mr-2"></i>
                                Categories</a>
                            <a href="{{ route('posts.create') }}" class="btn-outline-success btn">
                                <i class="far fa-clone mr-2"></i>
                                Posts</a>


                        </div>
<!--                        <div>
                            <a href="#" class="btn btn-outline-primary">Cancel</a>
                            <a href="#" class="btn btn-primary">Save</a>
                        </div>-->
                    </div>
                    <hr>

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {!! session()->get('success') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="firstname">
                                <i class="far fa-user-circle mr-2"></i>
                                First Name</label>
                            <input
                                type="text"
                                name="firstname"
                                id="firstname"
                                class="form-control @error('firstname') is-invalid @enderror"
                                placeholder="Enter Your First Name"
                                value="{{ Auth::user()->firstname }}"

                            >
                            @error('firstname')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastname">
                                <i class="far fa-user-circle mr-2"></i>
                                Last Name</label>
                            <input
                                type="text"
                                name="lastname"
                                id="lastname"
                                class="form-control @error('lastname') is-invalid @enderror"
                                placeholder="Enter Your Last Name"
                                value="{{ \Illuminate\Support\Facades\Auth::user()->lastname }}"
                            >
                            @error('lastname')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <i class="far fa-envelope mr-2"></i>
                                Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter Your Email"
                                value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"

                            >
                            @error('email')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bio">
                                <i class="fas fa-user-tie mr-2"></i>
                                Bio</label>
                            <textarea
                                type="text"
                                name="bio"
                                id="bio"
                                class="form-control @error('bio') is-invalid @enderror"
                                placeholder="Type Some Thing About You...">{{\Illuminate\Support\Facades\Auth::user()->bio}}</textarea>

                            @error('bio')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="image">
                                <i class="far fa-image mr-2"></i>
                                Image</label>

                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input  @error('image') is-invalid @enderror"
                                       id="customFile"
                                       name="image"
                                >
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('image')
                                <small class="invalid-feedback">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $message }}
                                </small>
                                @enderror

                            </div>


                        </div>

                       <div class="col-12 d-inline-flex justify-content-end gap-2">
                           <a href="{{url('/')}}" class="btn btn-outline-success">Cancel</a>
                           <button class="btn btn-success ml-2">
                               <i class="far fa-save mr-2"></i>
                               Update Profile</button>
                       </div>
                    </form>



                        <h3 class="mt-5">Security</h3>
                        <hr>

                        <form action="{{ route('update.password') }}" method="post" class="row g-3">
                            @csrf

                            <div class="col-md-4">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input
                                    type="password"
                                    class="form-control @error('current_password') is-invalid @enderror "
                                    id="current_password"
                                    name="current_password"
                                    placeholder="Enter Current Password"
                                >
                                @error('current_password')
                                <small class="invalid-feedback" role="alert">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="password" class="form-label">New Password</label>
                                <input
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    name="password"
                                    placeholder="Enter New Password"
                                >
                                @error('password')
                                <small class="invalid-feedback" role="alert">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="Re-Enter New Password"
                                >
                                @error('password_confirmation')
                                <small class="invalid-feedback" role="alert">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="col-12 d-inline-flex justify-content-end gap-2 py-3">
                                <a href="{{url('/')}}" class="btn btn-outline-success">Cancel</a>
                                <button type="submit" class="btn btn-success ml-2">Change Password</button>

                            </div>



                        </form>



                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center p-5">

                <div class="text-center">
                    @if(\Illuminate\Support\Facades\Auth::user()->image)

                        <img src="{{ asset('img/users/'.Auth::user()->image) }}" alt=""  style="width: 150px; height: 150px " class="  rounded-circle">

                    @else
                        <img src="{{ asset('img/woman.png') }}" alt="" style="width: 150px; height: 150px" >
                    @endif

                    <div class="py-4 text-center ">
                        <h2 class="text-success">{{ \Illuminate\Support\Facades\Auth::user()->firstname . " " . \Illuminate\Support\Facades\Auth::user()->lastname }}</h2>
                        <h5>
                            <i class="fas fa-envelope mr-2 py-1"></i>
                            {{ \Illuminate\Support\Facades\Auth::user()->email }}
                        </h5>

                        <p> {{ \Illuminate\Support\Facades\Auth::user()->bio }}</p>


                    </div>

                        <form action="{{ route('profile.destroy') }}" method="post" onsubmit="return confirm('Are you sure to delete your Account')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success">
                                <i class="far fa-trash-alt mr-2"></i>
                                Delete Profile
                            </button>
                        </form>



                </div>

                </div>

            </div>
        </div>

@endsection
