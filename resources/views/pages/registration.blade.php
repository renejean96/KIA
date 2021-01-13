@extends('layout.kia')

  @section('header')
    @include('inc.header')
    @include('inc.form-wizard-head')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')


    <!-- ======= About Section ======= -->
    <section id="about" class="about">

    <div class="container">
        <div class="row">

            <div class="col-md-2"></div>
            <div class=" col-md-8 col-md-offset-2 form-box">

                {!! Form::open(['action' => 'PupilController@store','method' => 'POST', 'role' => 'form', 'class' => 'f1']) !!}            

                    <h3>Register a pupil</h3>
                    <p class="subtitle">Your children's future starts here, right now!</p>
                    
                    <div class="f1-steps">
                        <div class="f1-step active">
                                <div class="f1-step-icon"><i class="bx bx-user"></i></div>
                                <p>Pupil's Details</p>
                        </div>
                        <div class="f1-step">
                                <div class="f1-step-icon"><i class="bx bx-been-here"></i></div>
                                <p>Pupil's Address</p>
                        </div>
                        <div class="f1-step">
                                <div class="f1-step-icon"><i class="bx bx-group"></i></div>
                                <p>Parents Details</p>
                        </div>
                    </div>
                    
                    <fieldset>
                        <!-- <h4>Tell us who you are:</h4> -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="first-name" placeholder="First name..." class="f1-first-name form-control" id="f1-first-name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="last-name" placeholder="Last name..." class="f1-last-name form-control" id="f1-last-name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nationality" placeholder="Nationality" class="f1-first-name form-control" id="f1-first-name">
                        </div>
                        <div class="form-group">
                            <h6><b>Date of Birth</b> &nbsp&nbsp&nbsp</h6>
                            <input type="date" name="dob" class="f1-first-name form-control" id="f1-first-name">
                        </div>                                        
                        <div class="form-group">
                            <h6><b>Sex</b> &nbsp&nbsp&nbsp</h6>
                            <input type="radio" value="male" name="sex"> Male &nbsp&nbsp
                            <input type="radio" value="female" name="sex"> Female
                        </div>                                
                        <div class="form-group">
                            <h6><b>What will the pupil have at school?</b> &nbsp&nbsp&nbsp</h6>
                            <input type="checkbox" name = "lunch"> Lunch  &nbsp&nbsp&nbsp
                            <input type="checkbox" name = "breakfast"> Breakfast  &nbsp&nbsp&nbsp
                            <input type="checkbox" name = "transport"> Transport  &nbsp&nbsp&nbsp
                        </div>                        
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>

                    <fieldset>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-email">Country</label>
                                <input type="text" value="Rwanda" name="country" class="f1-email form-control" id="f1-email" >
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-text">Province</label>
                                <input type="text" name="province" placeholder="Province..." class="f1-text form-control" id="f1-text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-email">District</label>
                                <input type="text" placeholder="District..." name="district" class="f1-email form-control" id="f1-email">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-text">Sector</label>
                                <input type="text" name="sector" placeholder="Sector..." class="f1-text form-control" id="f1-text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-text">Cell</label>
                                <input type="text" name="cell" placeholder="Cell..." class="f1-text form-control" id="f1-text">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-text">Village</label>
                                <input type="text" name="village" placeholder="Village..." class="f1-text form-control" id="f1-text">
                            </div>
                        </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h5>Father Details:</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-facebook"></label>
                                <input type="text" name="father-names" placeholder="Names..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-twitter"></label>
                                <input type="text" name="father-idn" placeholder="ID Number..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-facebook"></label>
                                <input type="text" name="father-phone" placeholder="Phone Number..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-twitter"></label>
                                <input type="text" name="father-email" placeholder="Email Address..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label class="sr-only" for="f1-google-plus">Occupation</label>
                            <input type="text" name="father-occupation" placeholder="Occupation..." class="f1-google-plus form-control" id="f1-google-plus">
                        </div>

                        <h5>Mother Details:</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-facebook"></label>
                                <input type="text" name="mother-names" placeholder="Names..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-twitter"></label>
                                <input type="text" name="mother-idn" placeholder="ID Number..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-facebook"></label>
                                <input type="text" name="mother-phone" placeholder="Phone Number..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-twitter"></label>
                                <input type="text" name="mother-email" placeholder="Email Address..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label class="sr-only" for="f1-google-plus">Occupation</label>
                            <input type="text" name="mother-occupation" placeholder="Occupation..." class="f1-google-plus form-control" id="f1-google-plus">
                        </div>                        

                        <h5>Guardian Details:</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-facebook"></label>
                                <input type="text" name="guardian-names" placeholder="Names..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-twitter"></label>
                                <input type="text" name="guardian-idn" placeholder="ID Number..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-facebook"></label>
                                <input type="text" name="guardian-phone" placeholder="Phone Number..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="sr-only" for="f1-twitter"></label>
                                <input type="text" name="guardian-email" placeholder="Email Address..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label class="sr-only" for="f1-google-plus">Occupation</label>
                            <input type="text" name="guardian-occupation" placeholder="Occupation..." class="f1-google-plus form-control" id="f1-google-plus">
                        </div>

                        <div class="f1-buttons">
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="submit" class="btn btn-submit">Finish Registration</button>
                        </div>
                    </fieldset>
                
                {!! Form::close() !!}       
            </div>
            <div class="col-md-2"></div>
            
        </div>        
    </div>

</section>

@endsection
@section('footer')
  @include('inc.footer')    
  @include('inc.form-wizard-tail')
@endsection