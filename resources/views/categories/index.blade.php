@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
               <div class="d-flex justify-content-between align-baseline">
                   <h3>Categories</h3>


                   <div>
                       <a href="#" class="btn btn-sm btn-outline-success">Show Deleted Categories </a>
                   </div>
               </div>
                <hr>
             <div class="py-4">
                 <table class="table table table-sm table-borderless">
                     <thead>
                     <tr>
                         <th>Category Name</th>
                         <th>Created At</th>
                         <th>Action</th>
                     </tr>
                     </thead>

                     <tbody>
                     <tr>
                         <td>Health</td>
                         <td>2020-12-2</td>
                         <td><a href="{{ route('categories.edit') }}" class="btn-sm btn-secondary">Edit</a>
                         <a href="#" class="btn-sm btn-danger">Delete</a>
                         </td>
                     </tr>
                     </tbody>
                 </table>
             </div>

            </div>


        </div>
    </div>

@endsection
