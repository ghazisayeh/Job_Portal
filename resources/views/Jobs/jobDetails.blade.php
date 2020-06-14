@extends('layouts.app')

@section('content')
<main>
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                            <a href="#"><img src="{{$ownerDetails->er_pic}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <h4 class="mt-5">{{$details->j_title}}</h4>
                                <ul>
                                    <li>{{$categoryDetails->cat_name}}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{$details->j_location}}</li>
                                <li>$3500 - ${{$details->j_salary}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                        <p>{{$details->j_discription}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                           <ul>
                               <li>System Software Development</li>
                               <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                               <li>Research and code , libraries, APIs and frameworks</li>
                               <li>Strong knowledge on software development life cycle</li>
                               <li>Strong problem solving and debugging skills</li>
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                           <ul>
                               <li>3 or more years of professional design experience</li>
                               <li>Direct response email experience</li>
                               <li>Ecommerce website design experience</li>
                               <li>Familiarity with mobile and web apps preferred</li>
                               <li>Experience using Invision a plus</li>
                           </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Job Overview</h4>
                       </div>
                      <ul>
                      <li>Posted date : <span>{{$details->created_at}}</span></li>
                          <li>Vacancy : <span>02</span></li>
                          <li>Job nature : <span>Full time</span></li>
                          <li>Salary :  <span>${{$details->j_salary}} monthly</span></li>
                      </ul>
                                    <?php
                                        if(auth()->user()->type == "1"){
                                    ?>
                                    <div class="apply-btn2">
                                        <a class="btn" href="#">Apply Now</a>
                                    </div>
                                    <?php
                                        }else{
                                    ?>
                                    <div class="row">

                                        <a href="{{ route('jobs.edit', $details->id) }}"><i class="far fa-edit text-success mr-5 ml-5" style='font-size:48px;color:green'></i></a>
                                        <a href="#"
                                        onclick="event.preventDefault();
                                        document.querySelector('#delete-job-form').submit();"> <i class='fas fa-trash-alt ml-5' style='font-size:48px;color:red'></i> </a>
                                        <form id="delete-job-form" action="{{ route('jobs.destroy', $details->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                    <?php
                                        }
                                    ?>

                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Company Information</h4>
                       </div>
                    <span>{{$ownerDetails->er_company}}</span>
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <ul>
                            <li>Name: <span>{{$ownerDetails->er_company}} </span></li>
                            <li>Phone : <span> {{$ownerDetails->er_phno}}</span></li>
                            <li>Email: <span>{{$ownerDetails->email}}</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>


@endsection
