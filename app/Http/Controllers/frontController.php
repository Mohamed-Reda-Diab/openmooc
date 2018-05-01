<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 5/1/2018
 * Time: 1:08 PM
 */

namespace App\Http\Controllers;


use OpenMooc\Courses\Services\coursesCategoriesService;
use OpenMooc\Courses\Services\coursesService;

class frontController extends Controller
{
    private $catogry ;
    private $course ;

    public function __construct()
    {
        $this->catogry = new coursesCategoriesService();
        $this->course = new coursesService();
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
    public function courseCategory($id){

        $course = $this->course->getCoursesByCategory($id);

        // not finshed :)

    }

    public function joinCoures(){

    }
    public function getCoures(){

    }
    public function instructorDtalis(){

    }

}