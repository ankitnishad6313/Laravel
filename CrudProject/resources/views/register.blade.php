@extends('layout')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Register</h2>
                <form class="row g-3 needs-validation" action="{{ route('store') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-md-4">
                      <label for="validationCustom01" class="form-label">Name</label>
                      <input type="text" class="form-control" id="validationCustom01" name="name" value="" required>
                      <div class="invalid-feedback">
                        Please Enter Your Name!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustom02" class="form-label">Phone</label>
                      <input type="number" class="form-control" id="validationCustom02" name="phone" value="" required>
                      <div class="invalid-feedback">
                        Please Enter Your Phone Number!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustomUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" class="form-control" id="validationCustomUsername" name="email" value="" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Please Enter Your Email!
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustom03" class="form-label">City</label>
                      <input type="text" name="city" value="" class="form-control" id="validationCustom03" required>
                      <div class="invalid-feedback">
                        Please provide a valid city.
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustom04" class="form-label">Gender</label>
                      <select class="form-select" name="gender" id="validationCustom04" required>
                        <option selected disabled value="">Choose Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid Gender.
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustom05" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="validationCustom05" required>
                      <div class="invalid-feedback">
                        Please provide a valid Password.
                      </div>
                    </div>
                    
                    <div class="col-12 text-center">
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection