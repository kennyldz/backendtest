@extends('front.layouts.master')
@section('TitlePage',"Person Create")
@section('content')
    <div class="page-wrapper" style="margin-top:-4%">
        <!-- Person View -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1 text-black-50">Person Create</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="card text-center bg-white">
                        <strong style="font-size: 2rem" >New<br>Person</strong>
                    </div>
                    <div class="card p-3">
                        <p class=" small"> <i class="fa fa-info-circle text-warning "></i>
                            After creating the person, you can add an address by clicking the address add button next to the relevant person on the <b>persons</b> page.</p>
                    </div>
                </div>

                <!--person ınfo -->
                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('person.store')}}">
                                @csrf
                                <table class="table table-sm border-0 small">
                                    <tr>
                                        <td>Name</td>
                                        <td ><input type="text" name="name"  maxlength="30" class="form-control form-control-sm "></td>
                                    </tr>
                                    <tr >
                                        <td>Birthday</td>
                                        <td ><input type="date" name="birthday"  class="form-control form-control-sm border-0" required></td>
                                    </tr>
                                    <tr >
                                        <td>Gender</td>
                                        <td >
                                            <select class="form-control form-control-sm border-0" name="gender" required>
                                                <option value="">Select Gender</option>
                                                    <option value="female">Female</option>
                                                    <option value="male">Male</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
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
