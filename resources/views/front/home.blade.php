@extends('front.layout')
@section('content')


    <!--categories start-->
    <div class="category-box">
        <div class="container">
            <div class="text-center feature-head">
                <h1>welcome to Courses Website</h1>
                <p>Choose Your speciality and start learning</p>

                <ul id="filters" class="list-unstyled">
                    @foreach($catogry as $cat)
                        <li><a href="{{url('category/'.$cat->category_id)}}" data-filter=".design">{{$cat->category_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--categories end-->


    <div class="container">
        <div class="line"></div>
        <!--courses start-->
        <div class="text-center feature-head">
            <h1> New Online Courses </h1>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-3">
                    <div class="course-box">

                        <div class="course text-center">
                            <a href="{{url('course/'.$course->course_id)}}">
                                @if(\file_exists('public/upload/courses/'.$course->course_cover))
                                    <img src="{{asset('upload/courses'.$course->course_cover)}}" alt="">
                                @else
                                    <img src="{{asset('front/images/img.jpg')}}" alt="">
                                @endif
                            </a>
                        </div>
                        <div class="course-info text-center">
                            <h4>
                                <a href="{{url('course/'.$course->course_id)}}"> {{$course->course_name}} </a>
                            </h4>
                            Instructor  <a href="{{url('instrutor/'.$course->course_instructor)}}"> {{$course->name}} </a><br>
                            <a href="{{url('join'.$course->course_id)}}"><p class="btn btn-danger"> Start Course </p></a>
                        </div>


                    </div>
                </div>

             @endforeach
        </div>
        <!--courses end-->
    </div><!--/container end-->

@endsection