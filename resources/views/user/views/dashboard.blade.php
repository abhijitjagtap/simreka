
@extends('user.layout.layout')

@section("content")

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9">
<h4 class="card-title mt-5 " >User Dashboard</h4>
</div>
</div>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-8">
  <div class="card">
                    <!--Add borders-->
                    <div class="card-body">
  <div class="table-responsive">
                        <table class="table" id="laravel_datatable">
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
                    </div>
                    </div>
                    <div class="col-sm-1"></div>
                    </div>


              
                @endsection