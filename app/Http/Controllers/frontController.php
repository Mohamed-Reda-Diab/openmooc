<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 5/1/2018
 * Time: 1:08 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use OpenMooc\Courses\Services\coursesCategoriesService;
use OpenMooc\Courses\Services\coursesService;
use OpenMooc\Users\Services\usersService;

class frontController extends Controller
{
    private $catogry ;
    private $course ;
    private $users ;

    public function __construct()
    {
        $this->catogry = new coursesCategoriesService();
        $this->course = new coursesService();
        $this->users = new usersService();

    }

    // front bage
    public function index(){
        // get all categories
        $catogry = $this->catogry->getCategories();
        // get all courses
        $courses = $this->course->getCourses();

        // return all Data in view
       return view('front.home')
              ->with('catogry',$catogry)
              ->with('courses',$courses);
    }
    // get course by category id
    public function courseCategory($id)
    {
        // get category
        $catogry = $this->catogry->getCategory($id);


        // didnt have catogry
        if(!$catogry){
            return redirect()->back();
        }
        // if have get coures
        $courses = $this->course->getCoursesByCategory($id);
        return view('front.category')
            ->with('catogry',$catogry)
            ->with('courses',$courses);


    }

    public function joinCoures()
    {

    }
    // details course and lesson
    // not finsihed
    public function getCoures($id)
    {

        // get course
        $course = $this->course->getCourse($id);
        // w8 coures.html
        return view('front.coursedetails')
            ->with('course',$course);




    }
    public function instructorDetails()
    {

    }

    // register to website
    public function register()
    {
        return view('front.register');

    }
     public function prossRegister(Request $request)
     {
         // get data
         $data = $request->all();

         $user = $this->users->addUser($data);
         if($user){
             return redirect('login');
         }
         $errors = $this->users->errors();
         return redirect()
             ->back()
             ->with('errors',$errors);

    }
    public function login()
    {
        return view('front.login');
    }
     public function prossLogin(Request $request)
     {
         // make auth
         if(Auth::attempt(['email'=>$request->get('email'),'password'=>$request->get('password')])){

            return redirect('/');
         }
         return redirect()
             ->back()
             ->with('massage','invalid email or password ');

    }

    // logout method
    public function logout(){

        \Auth::logout();
        return view('login');
    }

}