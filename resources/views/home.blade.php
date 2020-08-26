@extends('layouts.app')

   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                                        
                                        <form action="{{route('postForm')}}" method="post" class="number-tab-steps wizard-circle">

                                            <!-- Step 1 -->
                                            <h6>Step 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Age">Age </label>
                                                            <input type="number" class="form-control" id="age">
                                                        </div>
                                                    </div>

                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="sex">Sex</label>
                                                            <select class="custom-select form-control" id="sex" name="sex">
                                                                <option value="M">Male</option>
                                                                <option value="F">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="temperature">Temperature</label>
                                                            <!-- <input type="number" step="0.01" class="form-control" id="temperature"> -->
                                                            <input type="text" class="form-control" data-bts-step="0.5" data-bts-decimals="2" id="temperature" name="temperature">
                                                        </div>
                                                    </div>

                                            <!--         <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="location1">City</label>
                                                            <select class="custom-select form-control" id="location1" name="location">
                                                                <option value="new-york">New York</option>
                                                                <option value="chicago">Chicago</option>
                                                                <option value="san-francisco">San Francisco</option>
                                                                <option value="boston">Boston</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6>Step 2</h6>
                                            <fieldset>
                                                <div class="row">
                                       <!--              <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle1">Proposal Title</label>
                                                            <input type="text" class="form-control" id="proposalTitle1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jobtitle">Job Title</label>
                                                            <input type="text" class="form-control" id="jobtitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription1">Short Description :</label>
                                                            <textarea name="shortDescription" id="shortDescription1" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div> -->
                                                             <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <label ><b>Which symptoms you have?</b></label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms1[]" value="Breathing Problem" >
                                                        Breathing Problem
                                                    </label>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms1[]" value="Dry Cough">
                                                        Dry Cough
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms1[]" value="Sore Throat">
                                                        Sore Throat
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms1[]" value="Weakness">
                                                        Weakness
                                                    </label>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms1[]" value="Running Nose">
                                                        Running Nose
                                                    </label>
                                                </fieldset>
                                            </li>

                                    
                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                </div>


                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Step 3</h6>
                                <fieldset>
                            <div class="row">
                                               
                        
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <label ><b>Is there anymore symptoms you have?</b></label>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Abdominal Pain" >
                                                        Abdominal Pain
                                                    </label>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Vomiting">
                                                        Vomiting
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Diarrhoea">
                                                        Diarrhoea
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Chest Pain or Pressure">
                                                        Chest Pain or Pressure
                                                    </label>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Muscle Pain">
                                                        Muscle Pain
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Loss of taste or smell">
                                                        Loss of taste or smell
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Rash on skin, or discoloration of fingers or toes">
                                                        Rash on skin, or discoloration of fingers or toes
                                                    </label>
                                                </fieldset>
                                            </li>

                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <label>
                                                        <input type="checkbox" name="symptoms2[]" value="Loss of speech or movement">
                                                        Loss of speech or movement
                                                    </label>
                                                </fieldset>
                                            </li>
                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                             
                                                </div>
                                            </fieldset>
                                        </form>
                                    
              
                </div>
            </div>
        </div>
    </div>
       <footer>
        <p>
           This COVID-19 Self Assessment System is only for software development purpose and may not yield actual result. Any information given by users of this system will not be disclosed or store to anywhere.
        </p>
    </footer>
</div>
@endsection
@section('script')
<script src="vendors/js/vendors.min.js"></script>
<script src="js/app.min.js"></script>
<script src="js/app-menu.min.js"></script>
<script src="vendors/js/extensions/jquery.steps.min.js"></script>
<script src="vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="js/wizard-steps.min.js"></script>
<script src="js/scripts/components.js"></script>
@endsection


