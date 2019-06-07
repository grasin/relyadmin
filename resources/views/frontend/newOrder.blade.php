@extends('frontend.layouts.newapp')
@section('style')
@endsection
@section('content')
<div class="content-i">

<div class="content-box">
    <div class="row">
        <div class="col-lg-12">
            <div class="element-wrapper">
                <h6 class="element-header">Create New Order</h6>
                <div class="element-box">
                    <form>
                        <div class="row">
                        <div class="col-lg-12">
                        <h5 class="form-header"> Order Details</h5>
                            <div class="form-group">
                            <label for="">Client Name</label>
                            <select class="form-control">
                                <option >Select the Client</option>
                                <option>New York</option>
                                <option>California</option>
                                <option>Boston</option>
                                <option>Texas</option>
                                <option>Colorado</option>
                            </select>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"><label for=""> Order No: </label><input class="form-control" placeholder="Password" type="text"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group"><label for=""> Password</label><input class="form-control" placeholder="Password" type="password"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group"><label for="">Confirm Password</label><input class="form-control" placeholder="Password" type="password"></div>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <legend><span>Section Example</span></legend>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group"><label for=""> First Name</label><input class="form-control" placeholder="First Name" type="text"></div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group"><label for="">Last Name</label><input class="form-control" placeholder="Last Name" type="text"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group"><label for=""> Date Picker</label>
                                        <div class="date-input"><input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978"></div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group"><label for="">Twitter Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div><input class="form-control" placeholder="Twitter Username" type="text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label> Example textarea</label><textarea class="form-control" rows="3"></textarea></div>
                        </fieldset>
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to terms and conditions</label></div>
                        <div class="form-buttons-w"><button class="btn btn-primary" type="submit"> Submit</button></div>
                        </div>
                        </div>
                    </form>
                    <div class="element-wrapper">
                        <div class="element-box">
                            <h5 class="form-header">Product details</h5>
                            <form class="form-inline"><label class="sr-only"> First Name</label><input class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="First Name" type="text"><label class="sr-only"> Last Name</label><input class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Last Name" type="text"><label class="sr-only"> Username</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div><input class="form-control" placeholder="Username" type="text"></div><button class="btn btn-primary" type="submit"> Submit</button></form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!--------------------
-------------------->
    
@include('frontend.includes.chat')
</div>
@endsection
@section('script')
@endsection
