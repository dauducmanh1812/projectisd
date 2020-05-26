@extends('layouts.client')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Opportunities</h1>
          <span>Broadcast Your Opportunities</span>
        </h2>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="align-items-stretch">
        <div class="box">
            <div class="box-title font-weight-bold">
                Expertise Category
            </div>
            <div class="row">
                <div class="col-6 col-md-6">
                    <div class="alert alert-info" role="alert" aria-live="polite" aria-atomic="true">
                        <i class="fas fa-info"></i>
                            <span>Please select one by clicking directly item below</span>
                    </div>
                </div>
            </div>
            <div role="group" class="bv-no-focus-ring">
                <div class="row justify-content-start">
                    <div class="col-6 col-md-3">
                        <div class="form-check">
                            <input type="radio" name="expertise" autocomplete="off" class="custom-control-input" value="creative_writing_design" id="expertise1">
                            <label class="custom-control-label font-weight-light" for="expertise1">
                                <span>Creative, Writing and Design</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-check">
                            <input type="radio" name="expertise" autocomplete="off" class="custom-control-input" value="technical_development" id="expertise2">
                            <label class="custom-control-label font-weight-light" for="expertise2">
                                <span>Technical Development</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-6 col-md-3">
                        <div class="form-check">
                            <input type="radio" name="expertise" autocomplete="off" class="custom-control-input" value="qa_testing" id="expertise3">
                            <label class="custom-control-label font-weight-light" for="expertise3">
                                <span>QA and Testing</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-check">
                            <input type="radio" name="expertise" autocomplete="off" class="custom-control-input" value="project_management" id="expertise4">
                            <label class="custom-control-label font-weight-light" for="expertise4">
                                <span>Project Management</span>
                             </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="form-check">
                            <input type="radio" name="expertise" autocomplete="off" class="custom-control-input" value="development_operations" id="expertise5">
                            <label class="custom-control-label font-weight-light" for="expertise5">
                                <span>Development Operations</span>
                             </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-check">
                            <input type="radio" name="expertise" autocomplete="off" class="custom-control-input" value="finance_bi" id="expertise6">
                            <label class="custom-control-label font-weight-light" for="expertise6">
                                    <span>Finance and BI</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-title font-weight-bold">
                Skill
            </div>
            <div class="row justify-content-start">
                <div class="col-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Required skills</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="projectname" class="form-control" placeholder="Ex: Big Heart">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Desirable skills (Optional)</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="referenceurl" class="form-control" placeholder="Enter reference link">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
            </div>
            <div class="box-title font-weight-bold">
                Job Description 
            </div>
            <div class="row justify-content-start">
                <div class="col-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Opportunity name</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="projectname" class="form-control" placeholder="Ex: Big Heart">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div> 
            </div>
            <div class="row justify-content-start">
                <div class="col-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Opportunity description (Optional)</legend>
                        <div class="bv-no-focus-ring">
                            <textarea class="form-control" name="summary" rows="3" placeholder="At least 100 characters to describe about yourself"></textarea>
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div> 
            </div>
            <div class="box-title font-weight-bold">
                When do you want the project to start? 
            </div>
            <div class="row justify-content-start">
                <div class="col-3">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Estimated start date</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="projectname" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-3">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Estimated end date</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="referenceurl" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="form-group col-6">
                    <label for="locationtowork">Choose working place</label>
                    <select class="form-control" id="locationtowork">
                      <option selected>1</option>
                      <option>Remote working</option>
                      <option>On-site with specific location</option>
                    </select>
                </div>
            </div>
            <div class="box-title font-weight-bold">
                What level of commitment are you expecting from the consultant?
            </div>
            <div class="row justify-content-start">
                <div class="col-3">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Company name</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="projectname" class="form-control" placeholder="Ex: Big Heart">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-3">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Hiring manager</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="projectname" class="form-control" placeholder="Ex: Big Heart">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>  
            </div>
            <div role="group" class="bv-no-focus-ring">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="creative_writing_design" id="expertise1">
                            <label class="custom-control-label font-weight-light" for="expertise1">
                                <span>Part-time</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="checkbox--category custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" name="expertise" autocomplete="off" class="custom-control-input" value="technical_development" id="expertise2">
                            <label class="custom-control-label font-weight-light" for="expertise2">
                                <span>Full-time</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-3">
                    <fieldset class="form-group">
                     <legend class="bv-no-focus-ring col-form-label pt-0">Expected working hours</legend>
                     <div class="bv-no-focus-ring">
                           <input type="text" name="projectname" class="form-control" placeholder="Ex: Big Heart">
                     </div>
                    <div class="clear-fix"></div>
                </fieldset>
                </div> 
            </div>
        </div>
    </div>
</section>
@endsection