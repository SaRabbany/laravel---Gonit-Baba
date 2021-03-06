@extends('layout.header')
@section( 'content')

 <!-- Question section in top -->
    <div class="top_question">
        <div class="top_question_body container">
            <h1 id="Main-question">How do I make the most out of a MS in Business Analytics?</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nesciunt.</p>
        </div>

    </div>

    <!-- Body and slider section start  -->

    <div class=" answer-section container">
        <div class="row">
            <!-- Answer section -->
            <div class="col-md-9 page_content">

                <div class="ans_page_content">
                    <div class="ans_page_title">
                        <h2>Answer (2)</h2>

                    </div>
                    <div class="ans_page_body">
                        <div class="row">
                            <div class="col-2 author_img">
                                <a href="">
                                    <img src="https://2code.info/demo/themes/ask-me/wp-content/uploads/2017/07/team-8-65x65.jpg"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-10 p-0 ans_page_left">
                                <div class="author_name">Mohammod Nayim</div>
                                <!-- <div class="publish_date d-flex">
                                    <a href="#"><i class="fas fa-heart"></i> </a> <span>89</span>
                                    <a href=""><i class="fas fa-thumbs-down"></i> </a>
                                    <span>12</span>

                                    <i class="fas fa-calendar-week"></i>
                                    <span>01-02-02003</span>

                                </div> -->
                                <div class="ans_body_content">
                                    <p>The biggest piece of advice I could give is to take a course in
                                        microeconometrics/labour econometrics as a part of your course. If your course
                                        coordinator won???t let you, beg. If they still won???t let you, then go off-line
                                        for a week or two and properly digest Mostly Harmless Econometrics (or if your
                                        stats isn???t too good yet, Mastering Metrics). If you want to go and work in
                                        health analytics, then replace what I just wrote with the equivalent for
                                        research design.

                                        Why learn microemet? Basically, many of the big questions in business are of the
                                        form ???what will happen if we do x???. Predictive models that aren???t informed by
                                        causal reasoning do *terribly* at this question???they answer the question ???what
                                        do we see happening to y when we see x???. Inferring what will happen to y when
                                        you fiddle with x is a difficult task when all your data come from a world in
                                        which you did not fiddle with x. Too often we come across people with great
                                        technical chops who aren???t even aware they???re making mistakes when answering
                                        these questions. Don???t be one of these people.

                                        The second biggest piece of advice would be to not become too enamoured by the
                                        sexy end of data science (especially predictive algorithms), but *do spend the
                                        time learning this stuff in depth*. Often the simple stuff done well is far more
                                        useful to real-world decisionmaking.

                                        Third: read very widely.
                                    </p>
                                    <img src="image/math image.jpg"  class="img-fluid"alt="">
                                    <div class="publish_date d-flex ">
                                        <a href="#"><i class="fas fa-heart"></i> </a> <span>89</span>
                                        <a href=""><i class="fas fa-thumbs-down"></i> </a>
                                        <span>12</span>

                                        <i class="fas fa-calendar-week"></i>
                                        <span>01-02-02003</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ans_page_content">
                    <div class="ans_page_title">
                        <h2>Answer (2)</h2>

                    </div>
                    <div class="ans_page_body">
                        <div class="row">
                            <div class="col-2 author_img">
                                <a href="">
                                    <img src="https://2code.info/demo/themes/ask-me/wp-content/uploads/2017/07/team-8-65x65.jpg"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-10 p-0 ans_page_left">
                                <div class="author_name">Mohammod Nayim</div>
                                <!-- <div class="publish_date d-flex">
                                       <a href="#"><i class="fas fa-heart"></i> </a> <span>89</span>
                                       <a href=""><i class="fas fa-thumbs-down"></i> </a>
                                       <span>12</span>

                                       <i class="fas fa-calendar-week"></i>
                                       <span>01-02-02003</span>

                                   </div> -->
                                <div class="ans_body_content text-dark">
                                    <p>The biggest piece of advice I could give is to take a course in
                                        microeconometrics/labour econometrics as a part of your course. If your
                                        course
                                        coordinator won???t let you, beg. If they still won???t let you, then go off-line
                                        for a week or two and properly digest Mostly Harmless Econometrics (or if
                                        your
                                        stats isn???t too good yet, Mastering Metrics). If you want to go and work in
                                        health analytics, then replace what I just wrote with the equivalent for
                                        research design.

                                        Why learn microemet? Basically, many of the big questions in business are of
                                        the
                                        form ???what will happen if we do x???. Predictive models that aren???t informed by
                                        causal reasoning do *terribly* at this question???they answer the question
                                        ???what
                                        do we see happening to y when we see x???. Inferring what will happen to y when
                                        you fiddle with x is a difficult task when all your data come from a world in
                                        which you did not fiddle with x. Too often we come across people with great
                                        technical chops who aren???t even aware they???re making mistakes when answering
                                        these questions. Don???t be one of these people.

                                        The second biggest piece of advice would be to not become too enamoured by
                                        the
                                        sexy end of data science (especially predictive algorithms), but *do spend
                                        the
                                        time learning this stuff in depth*. Often the simple stuff done well is far
                                        more
                                        useful to real-world decisionmaking.

                                        Third: read very widely.
                                    </p>
                                    <div class="publish_date d-flex ">
                                        <a href="#"><i class="fas fa-heart"></i> </a> <span>89</span>
                                        <a href=""><i class="fas fa-thumbs-down"></i> </a>
                                        <span>12</span>

                                        <i class="fas fa-calendar-week"></i>
                                        <span>01-02-02003</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- leave the answer section -->
                <div class="leave_answer">
                   <div class="leave_answer_title">
                        <h2>Leave An Answer </h2>
                   </div>
                   <div class="leave_answer_form">
                       <form class="row g-3">
                            <div class="col-md-4">
                                <label for="validationDefaultUsername" class="form-label">Username</label>
                                <div class="input-group">
                                    <!-- <span class="input-group-text" id="inputGroupPrepend2">@</span> -->
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                        aria-describedby="inputGroupPrepend2" placeholder="Username" required>
                                </div>
                            </div>
                           <div class="col-md-4">
                               <label for="validationDefault01" class="form-label">Email</label>
                               <input type="email" class="form-control" id="validationDefault01" value="Mark@domain.com" required>
                           </div>
                           <div class="col-md-4">
                               <label for="validationDefault02" class="form-label">Website</label>
                               <input type="text" class="form-control" id="validationDefault02" value="sarlex.com" required>
                           </div>
                               <div class="col-md-12">
                                   <div class="mb-3">
                                       <label for="formFile" class="form-label">Featured image</label>
                                       <input class="form-control" type="file" id="formFile" required>
                                   </div>
                               </div>
                           <div class="col-md-12">
                               <div class="mb-3">
                                   <label for="exampleFormControlTextarea1" class="form-label">Answer*</label>
                                   <textarea class="form-control" id="validationDefault03" rows="5" required></textarea>
                               </div>
                           </div>



                           <div class="col-12">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                   <label class="form-check-label" for="invalidCheck2">
                                       Agree to terms and conditions
                                   </label>
                               </div>
                           </div>
                           <div class="col-12">
                               <button class="btn common-button d-block" type="submit">Submit Form</button>
                           </div>
                       </form>
                   </div>
                </div>





            </div>


            <!-- slider section -->
            <!-- slider section -->
            <div class="col-md-3">

                <div class="ask_question">
                    <a href="" class="common-button btn d-block"> Ask Your Question</a>
                </div>



                <!-- login register slider section -->
                <div class="login_reg_slider">
                    <div class="login_title">
                        <h2>Login</h2>
                    </div>
                    <div class="login_form">
                        <div class="mb-3 row">
                            <!-- <label for="forEmail" class="col-sm-2 col-form-label"></label> -->
                            <div class="col-sm-12">
                                <input type="Email" class="form-control " id="inputEmail" placeholder="Email/User Name">
                            </div>
                        </div>
                        <div class="mb-3 row ">
                            <!-- <label for="inputPassword" class="col-sm-2 col-form-label"></label> -->
                            <div class="col-sm-12 ">
                                <input type="password" class="form-control " id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="ask_question">
                            <a href="" class="common-button btn d-block"> Login</a>
                        </div>
                    </div>
                </div>


                <!-- Point section -->

                <section>
                    <div class="slider_point">
                        <div class="slider_point_title">
                            <h2>Highest Point</h2>
                        </div>
                        <div class="slider_point_body">

                            <!-- First card -->
                            <div class="slider_card">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ URL::asset('image/team-9-65x65.jpg') }}" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Ahmed Hassan</h5>
                                                <button class="btn point_btn btn-sm"> Explainer</button>
                                                <p class="card-text"><small class="">390 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Second card -->
                            <div class="slider_card">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ URL::asset('image/team-9-65x65.jpg') }}" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Ahmed Hassan</h5>
                                                <button class="btn point_btn btn-sm"> Explainer</button>
                                                <p class="card-text"><small class="">390 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Second card -->
                            <div class="slider_card">

                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ URL::asset('image/team-9-65x65.jpg') }}" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Ahmed Hassan</h5>
                                                <button class="btn point_btn btn-sm"> Explainer</button>
                                                <p class="card-text"><small class="">390 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>


@endsection