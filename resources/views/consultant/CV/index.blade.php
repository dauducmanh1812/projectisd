@extends('layouts.consultant')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Digital CV</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="align-items-stretch">
        <div class="box">
            <!-- Form -->
            <div class="box-title font-weight-bold">
                Identification information
            </div>
            <form method="" action="">
                {{-- @method('POST')
                @csrf --}}
                <div class="row">
                    <div class="col-6 col-md-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Full name</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->fullname))
                                    <input type="text" name="fullname" class="form-control" value="{{ $identification->fullname }}" readonly>
                                @else
                                    <input type="text" name="fullname" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-6 col-md-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Gender</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->gender))
                                    <input type="text" name="gender" class="form-control" value="{{ $identification->gender }}" readonly>
                                @else
                                    <input type="text" name="gender" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-6 col-md-6">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Preferred environment</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->preferredenviroment))
                                    <input type="text" name="preferredenviroment" class="form-control" value="{{ $identification->preferredenviroment }}" readonly>
                                @else
                                    <input type="text" name="preferredenviroment" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Date of birth</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->dateofbirth))
                                    <input type="text" name="dateofbirth" class="form-control" value="{{ $identification->dateofbirth }}" readonly>
                                @else
                                    <input type="text" name="dateofbirth" class="form-control" placeholder="dd/mm/yyyy" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-6 col-md-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Availability</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->availability))
                                    <input type="text" name="availability" class="form-control" value="{{ $identification->availability }}" readonly>
                                @else
                                    <input type="text" name="availability" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Summary about yourself</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->summary))
                                    <textarea class="form-control" name="summary" rows="3" value="{{ $identification->summary }}" readonly></textarea>
                                @else
                                    <textarea class="form-control" name="summary" rows="3" value="" readonly></textarea>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Job title</legend>
                            <div class="bv-no-focus-ring">
                                @if (isset($identification->jobtitle))
                                    <input type="text" name="jobtitle" class="form-control" value="{{ $identification->jobtitle }}" readonly>
                                @else
                                    <input type="text" name="jobtitle" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-6 col-md-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Years of experience</legend>
                            <div class="bv-no-focus-ring">
                                {{-- <input type="text" name="yearsofexperience" class="form-control" placeholder="How long have you worked?"> --}}
                                @if (isset($identification->yearsofexperience))
                                    <input type="text" name="yearsofexperience" class="form-control" value="{{ $identification->yearsofexperience }}" readonly>
                                @else
                                    <input type="text" name="yearsofexperience" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-6">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">LinkedIn public profile url (Optional)</legend>
                            <div class="bv-no-focus-ring">
                                {{-- <input type="text" name="linkedin" class="form-control"> --}}
                                @if (isset($identification->linkedin))
                                    <input type="text" name="linkedin" class="form-control" value="{{ $identification->linkedin }}" readonly>
                                @else
                                    <input type="text" name="linkedin" class="form-control" value="" readonly>
                                @endif
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <!-- Expertise -->  
                <div class="box-title box-title font-weight-bold">
                    Expertise
                </div>
                {{-- <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="alert alert-info" role="alert" aria-live="polite" aria-atomic="true">
                            <i class="fas fa-info"></i>
                                <span>Please select one by clicking directly item below</span>
                        </div>
                    </div>
                </div> --}}
                <div role="group" class="bv-no-focus-ring">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="checkbox--category custom-control custom-control-inline custom-checkbox">\
                                {{-- @if ($expertise->expertise == $data->'creative_writing_design')
                                    <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="creative_writing_design" id="expertise1" checked>
                                @else
                                    <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="creative_writing_design" id="expertise1" disabled>
                                @endif --}}
                                <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="creative_writing_design" id="expertise1">
                                <label class="custom-control-label font-weight-light" for="expertise1">
                                    <span>Creative, Writing and Design</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="technical_development" id="expertise2">
                                <label class="custom-control-label font-weight-light" for="expertise2">
                                    <span>Technical Development</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="qa_testing" id="expertise3">
                                <label class="custom-control-label font-weight-light" for="expertise3">
                                    <span>QA and Testing</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="project_management" id="expertise4">
                                <label class="custom-control-label font-weight-light" for="expertise4">
                                    <span>Project Management</span>
                                 </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="development_operations" id="expertise5">
                                <label class="custom-control-label font-weight-light" for="expertise5">
                                    <span>Development Operations</span>
                                 </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                                <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="finance_bi" id="expertise6">
                                <label class="custom-control-label font-weight-light" for="expertise6">
                                        <span>Finance and BI</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <fieldset class="form-group">
                                <legend class="bv-no-focus-ring col-form-label pt-0">Featured skills</legend>
                                <div class="bv-no-focus-ring">
                                    <input type="text" name="featuredskill" class="form-control">
                                </div>
                                <div class="clear-fix"></div>
                            </fieldset>
                        </div>
                        <div class="col-6">
                            <fieldset class="form-group">
                                <legend class="bv-no-focus-ring col-form-label pt-0">Other skills (Optional)</legend>
                                <div class="bv-no-focus-ring">
                                    <input type="text" name="otherskill" class="form-control">
                                </div>
                                <div class="clear-fix"></div>
                            </fieldset>
                        </div>
                    </div>    
                </div>
                <!-- /.Expertise --> 
                
                <!-- Project Portfolio -->
                <div class="box-title box-title font-weight-bold">
                    Project Portfolio
                </div>
                <div class="row justify-content-start">
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Project name</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="projectname" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Reference Url (Optional)</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="referenceurl" class="form-control" placeholder="Enter reference link">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Technologies</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="projecttechnology" class="form-control" placeholder="Ex: Laravel">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Attachment (Optional))</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="attachment" class="form-control" placeholder="Add any attachment">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <!-- /.Project-Portfolio -->  
                
                <!-- Work Experience -->
                <div class="box-title box-title font-weight-bold">
                    Work Experience
                </div>
                <div class="row justify-content-start">
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Company Name</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="companyname" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Job Title</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="experiencejobtitle" class="form-control" placeholder="Ex: PM">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">From</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="timefrom" class="form-control" placeholder="Ex: 2017">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">To</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="timeto" class="form-control" placeholder="Ex: Present">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Location</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="worklocation" class="form-control" placeholder="Ex: 23th Street">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-6">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Job description</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="jobdescription" class="form-control" placeholder="Enter detail here">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <!-- /.Work-Experience -->

                <!-- Education (Optional) -->
                <div class="box-title box-title font-weight-bold">
                    Education (Optional)
                </div>
                <div class="row justify-content-start">
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">School name</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="schoolname" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Major</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="major" class="form-control" placeholder="Enter reference link">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">From</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="schoolfrom" class="form-control" placeholder="Enter reference link">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">To</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="schoolto" class="form-control" placeholder="Enter reference link">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-3">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Location</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="edulocation" class="form-control" placeholder="Enter reference link">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <!-- /.Education-(Optional) -->

                <!-- Certifications (Optional) -->
                <div class="box-title box-title font-weight-bold">
                    Certifications (Optional)
                </div>
                <div class="row justify-content-start">
                    <div class="col-8">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Certifications name</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="certname" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-4">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Year</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="certyear" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-8">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Technologies (Optional)</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="certtech" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                    <div class="col-4">
                        <fieldset class="form-group">
                            <legend class="bv-no-focus-ring col-form-label pt-0">Certification Url (Optional)</legend>
                            <div class="bv-no-focus-ring">
                                <input type="text" name="certurl" class="form-control" placeholder="Ex: Big Heart">
                            </div>
                            <div class="clear-fix"></div>
                        </fieldset>
                    </div>
                </div>
                <!-- /.Certifications (Optional) -->
                <div class="d-flex flex-column flex-sm-row-reverse mt-3">
                    <a class="btn btn-primary btn-lg btn-block" href="{{ route('consultantCV.CV.edit',$user->id) }}" role="button">Edit</a>
                </div>
            </form>
            <!-- /.form -->
        </div>
    </div>        
</section>
<!-- End Main content -->

@endsection