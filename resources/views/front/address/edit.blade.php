@extends('front.layouts.master')
@section('TitlePage',"Addres Edit")
@section('content')
    <div class="page-wrapper" style="margin-top:-4%">
        <!-- Person View -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1 text-black-50">Address Edit</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="card text-center bg-white">
                        <strong style="font-size: 4rem" >{{$Adres->id}}</strong>
                        <p class="small">Address No</p>
                    </div>
                    <div class="card p-3">
                        <p class=" small"> <i class="fa fa-info-circle text-warning "></i>
                            Click on the <b>Update</b> button after making the relevant changes.</p>
                    </div>
                </div>

                <!--person ınfo -->
                <div class="col-lg-9 col-md-12">
                   <!--Address Delete -->
                   <form method="post" action="{{route('address.destroy',$Adres->id)}}">
                       @csrf
                       @method('delete')
                       <div class="card">
                           <button type="submit"  class="btn btn-default btn-sm form-control text-black-50"  ><strong>Delete Address</strong></button>
                       </div>
                   </form>


                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('address.update',$Adres->id)}}">
                                @method('put')
                                @csrf
                                <table class="table table-sm border-0 small">
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$Adres->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>
                                            <textarea type="text" name="address" minlength="10"  maxlength="150" class="form-control form-control-sm " >{{$Adres->address}}</textarea>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td>Post Code</td>
                                        <td ><input type="text" name="post_code" value="{{$Adres->post_code}}"  class="form-control form-control-sm " ></td>
                                    </tr>
                                    <tr>
                                        <td>City Name</td>
                                        <td><input type="text" name="city_name" value="{{$Adres->city_name}}" maxlength="40" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td>Country Name</td>
                                        <td><input type="text" name="country_name" value="{{$Adres->country_name}}" maxlength="50" class="form-control form-control-sm"></td>
                                    </tr>
                                    <tr>
                                        <td>Created Date</td>
                                        <td>{{$Adres->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Updated Date</td>
                                        <td>{{$Adres->updated_at}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td >
                                            <button type="submit" class="btn btn-default text-center btn-sm form-control"  name="update"><strong>Update</strong></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
