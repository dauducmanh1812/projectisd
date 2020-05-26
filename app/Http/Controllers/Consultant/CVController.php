<?php

namespace App\Http\Controllers\Consultant;

use App\User;
use App\Identification;
use App\Expertise;
use App\Certification;
use App\Education;
use App\Opportunity;
use App\ProjectPortfolio;
use App\WorkExperience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $identification = DB::table('identifications')->where('user_id', '=', $user->id)->first();
        $expertise= DB::table('expertises')->where('user_id', '=', $user->id)->first();
        $projectPortfolio = DB::table('project_portfolios')->where('user_id', '=', $user->id)->first();
        $workExperience = DB::table('work_experiences')->where('user_id', '=', $user->id)->first();
        $education = DB::table('education')->where('user_id', '=', $user->id)->first();
        $certification = DB::table('certifications')->where('user_id', '=', $user->id)->first();
        // dd($identification,$expertise,$projectPortfolio,$workExperience,$education,$certification);
        return view('consultant.CV.index', compact('user','identification','expertise','projectPortfolio','workExperience','education','certification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('consultant.CV.edit')->with(['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestArray = $request->all();

        $identification = Identification::where('user_id',$id);
        $identificationData = [
            'user_id' => $id,
            'fullname' => $requestArray['fullname'],
            'gender' => $requestArray['gender'],
            'preferredenviroment' => $requestArray['preferredenvironment'],
            'dateofbirth' => $requestArray['dateofbirth'],
            'availability' => $requestArray['availability'],
            'summary' => $requestArray['summary'],
            'jobtitle' => $requestArray['jobtitle'],
            'yearsofexperience' => $requestArray['yearsofexperience'],
            'linkedin' => $requestArray['linkedin']
        ];
        if(!($identification->exists())){
            // create new
            $createIdentification = Identification::create($identificationData);
        }else{
            //update
            $updateIdentification = $identification->update($identificationData);
        }

        $expertise = Expertise::where('user_id',$id);
        $expertiseData = [
            'user_id' => $id,
            'expertise' => $requestArray['expertise'],
            'featuredskill' => $requestArray['featuredskill'],
            'otherskill' =>$requestArray['otherskill']
        ];
        if(!($expertise->exists())){
            // create new
            $createExpertise = Expertise::create($expertiseData);
        }else{
            //update
            $updateExpertise = $expertise->update($expertiseData);
        }

        $projectPortfolio = ProjectPortfolio::where('user_id', $id);
        $projectPortfolioData = [
            'user_id' => $id,
            'projectname' => $requestArray['projectname'],
            'referenceurl' => $requestArray['referenceurl'],
            'projecttechnology' => $requestArray['projecttechnology'],
            'attachment' => $requestArray['attachment'],
        ];
        if(!($projectPortfolio->exists())){
            // create new
            $createProjectPortfolio = ProjectPortfolio::create($projectPortfolioData);
        }else{
            // update
            $updateProjectPortfolio = $projectPortfolio->update($projectPortfolioData);
        }
        

        $workExperience = WorkExperience::where('user_id',$id);
        $workExperienceData = [
            'user_id' => $id,
            'companyname' => $requestArray['companyname'],
            'experiencejobtitle' => $requestArray['experiencejobtitle'],
            'timefrom' => $requestArray['timefrom'],
            'timeto' => $requestArray['timeto'],
            'worklocation' =>$requestArray['worklocation'],
            'jobdescription' =>$requestArray['jobdescription'],
        ];
        if(!($workExperience->exists())){
            // create new
            $createWorkExperience = WorkExperience::create($workExperienceData);
        }else{
            // update
            $updateWorkExperience = $workExperience->update($workExperienceData);
        }

        $education = Education::where('user_id',$id);
        $educationData = [
            'user_id' => $id,
            'schoolname' => $requestArray['schoolname'],
            'major' => $requestArray['major'],
            'schoolfrom' => $requestArray['schoolfrom'],
            'schoolto' => $requestArray['schoolto'],
            'edulocation' => $requestArray['edulocation'],
        ];
        if(!($education->exists())){
            // create new
            $createEducation = Education::create($educationData);
        }else{
            // update
            $updateEducation = $education->update($educationData);
        }

        $certification = Certification::where('user_id', $id);
        $certificationData = [
            'user_id' => $id,
            'certname' => $requestArray['certname'],
            'certyear' => $requestArray['certyear'],
            'certtech' => $requestArray['certtech'],
            'certurl' => $requestArray['certurl'],
        ];
        if(!($certification->exists())){
            //create new
            $createCertification = Certification::create($certificationData);
        }else{
            // update
            $updateCertification = $certification->update($certificationData);
        }
        return redirect()->route('consultantCV.CV.index');
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
