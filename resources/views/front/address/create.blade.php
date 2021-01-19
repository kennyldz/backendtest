@extends('front.layouts.master')
@section('TitlePage',"Address Create")
@section('content')
    <div class="page-wrapper" style="margin-top:-4%">
        <!-- Person View -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1 text-black-50">Address Create</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="card text-center bg-white">
                        <strong style="font-size: 2rem" >New<br>Address</strong>
                    </div>
                    <div class="card p-3">
                        <p class=" small"> <i class="fa fa-info-circle text-warning "></i>
                            Click the <b>Save</b> button after entering the address information.</p>
                    </div>
                </div>

                <!--person ınfo -->
                <div class="col-lg-9 col-md-12 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('address.store')}}">
                                @csrf
                                <table class="table table-sm border-0 small">
                                    <tr>
                                        <td>Name</td>
                                        <td><input name="person_id" value="{{$Person->id}}" hidden>{{$Person->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td ><textarea  name="address"  maxlength="150" class="form-control form-control-sm " required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Post Code</td>
                                        <td ><input type="text" name="post_code"  class="form-control form-control-sm " required></td>
                                    </tr>
                                    <tr>
                                        <td>City Name</td>
                                        <td><input type="text" name="city_name" maxlength="40" class="form-control form-control-sm" required></td>
                                    </tr>
                                    <tr>
                                        <td>Country Name</td>
                                        <td><input type="text" name="country_name" maxlength="50" class="form-control form-control-sm" required></td>
                                    </tr>
                                    <tr >
                                        <td></td>
                                        <td >
                                            <button type="submit" class="btn btn-default text-center btn-sm form-control"  name="save"><strong>Save</strong></button>
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
