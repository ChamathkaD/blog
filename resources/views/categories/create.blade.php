@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Create Category</h3>
                <hr>

                <form action="#" class="py-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Category Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            placeholder="Enter category Name"
                        >
                    </div>
                    <button class="btn btn-outline-success float-end" type="submit">Create Category</button>
                </form>

            </div>


        </div>
    </div>

@endsection
