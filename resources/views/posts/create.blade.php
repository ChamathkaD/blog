@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Create Post</h3>
                <hr>

                <form action="#" class="py-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Category Title</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control"
                            placeholder="Enter category Title"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="slug">Slug</label>
                        <input
                            type="text"
                            name="slug"
                            id="slug"
                            class="form-control"
                            placeholder="Enter category Title"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="category">Category</label>
                        <select id="category" class="form-control">
                            <option selected>Select Category</option>
                            <option>Travel</option>
                            <option>Travel</option>
                            <option>Travel</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="body">

                            Post Body</label>
                        <textarea
                            type="text"
                            name="body"
                            id="body"
                            class="form-control @error('body') is-invalid @enderror"
                            placeholder="Type Some Thing...">{{\Illuminate\Support\Facades\Auth::user()->body}}</textarea>

                        @error('bio')
                        <small class="invalid-feedback">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            {{ $message }}
                        </small>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="image">

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



                    <button class="btn btn-outline-success float-end" type="submit">Create Post</button>
                </form>

            </div>


        </div>
    </div>

@endsection
