
@extends('admin.layout.layout')

@section("content")


<h4 class="card-title mt-5 " >Admin Dashboard data</h4>


  <div class="card">
                    <!--Add borders-->
                    <div class="card-body">
 
                        <table class="table table-bordered" id="laravel_datatable">
                            <thead class="bg-info text-white">
                            <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Action</th>
                  </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                        </div>
                        </div>
                   


              
                @endsection