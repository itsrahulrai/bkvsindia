@extends('front.layout.master')
@section('title', 'Certificate')
@section('content')

    <!-- main-area -->
    <main class="main-area fix">

        <!-- dashboard-area -->
        <section class="dashboard__area section-pb-120">
            <div class="dashboard__bg"><img src="{{ asset('front-assets/img/bg/dashboard_bg.jpg') }}" alt=""></div>
            <div class="container">
                @include('front.user.inc.profile')
                <div class="dashboard__inner-wrap">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('front.user.inc.sidebar')
                        </div>
                        <div class="col-lg-9">
                            <div class="dashboard__content-wrap">
                                <div class="dashboard__content-title">
                                    <h4 class="title">Certificate</h4>
                                </div>
                                <div class="row">
                                    <div class="dashboard__content-wrap">
                                        <div class="dashboard__content-title">
                                            <h4 class="title">Settings</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="dashboard__nav-wrap">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="itemOne-tab"
                                                                data-bs-toggle="tab" data-bs-target="#itemOne-tab-pane"
                                                                type="button" role="tab"
                                                                aria-controls="itemOne-tab-pane"
                                                                aria-selected="true">Profile</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="itemTwo-tab" data-bs-toggle="tab"
                                                                data-bs-target="#itemTwo-tab-pane" type="button"
                                                                role="tab" aria-controls="itemTwo-tab-pane"
                                                                aria-selected="false" tabindex="-1">Password</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="itemThree-tab" data-bs-toggle="tab"
                                                                data-bs-target="#itemThree-tab-pane" type="button"
                                                                role="tab" aria-controls="itemThree-tab-pane"
                                                                aria-selected="false" tabindex="-1">Social Share</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade active show" id="itemOne-tab-pane"
                                                        role="tabpanel" aria-labelledby="itemOne-tab" tabindex="0">
                                                        <div class="instructor__cover-bg"
                                                            data-background="assets/img/bg/student_bg.jpg"
                                                            style="background-image: url(&quot;assets/img/bg/student_bg.jpg&quot;);">
                                                            <div class="instructor__cover-info">
                                                                <div class="instructor__cover-info-left">
                                                                    <div class="thumb">
                                                                        <img src="assets/img/courses/details_instructors02.jpg"
                                                                            alt="img">
                                                                    </div>
                                                                    <button title="Upload Photo"><i
                                                                            class="fas fa-camera"></i></button>
                                                                </div>
                                                                <div class="instructor__cover-info-right">
                                                                    <a href="#" class="btn btn-two arrow-btn">Edit
                                                                        Cover Photo</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="instructor__profile-form-wrap">
                                                            <form action="#" class="instructor__profile-form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-grp">
                                                                            <label for="firstname">First Name</label>
                                                                            <input id="firstname" type="text"
                                                                                value="John">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-grp">
                                                                            <label for="lastname">Last Name</label>
                                                                            <input id="lastname" type="text"
                                                                                value="Due">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-grp">
                                                                            <label for="username">User Name</label>
                                                                            <input id="username" type="text"
                                                                                value="johndue">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-grp">
                                                                            <label for="phonenumber">Phone Number</label>
                                                                            <input id="phonenumber" type="tel"
                                                                                value="+123 599 8989">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-grp">
                                                                            <label for="skill">Skill/Occupation</label>
                                                                            <input id="skill" type="text"
                                                                                value="Full Stack Developer">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-grp select-grp">
                                                                            <label for="displayname">Display Name Publicly
                                                                                As</label>
                                                                            <select id="displayname" name="displayname">
                                                                                <option value="Emily Hannah">Emily Hannah
                                                                                </option>
                                                                                <option value="John">John</option>
                                                                                <option value="Due">Due</option>
                                                                                <option value="Due John">Due John</option>
                                                                                <option value="johndue">johndue</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="bio">Bio</label>
                                                                    <textarea id="bio">I am eager to bring my passion for creating user-friendly and efficient web interfaces to your dynamic team. I am applying for Front End Developer position in your company.</textarea>
                                                                </div>
                                                                <div class="submit-btn mt-25">
                                                                    <button type="submit" class="btn">Update
                                                                        Info</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="itemTwo-tab-pane" role="tabpanel"
                                                        aria-labelledby="itemTwo-tab" tabindex="0">
                                                        <div class="instructor__profile-form-wrap">
                                                            <form action="#" class="instructor__profile-form">
                                                                <div class="form-grp">
                                                                    <label for="currentpassword">Current Password</label>
                                                                    <input id="currentpassword" type="password"
                                                                        placeholder="Current Password">
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="newpassword">New Password</label>
                                                                    <input id="newpassword" type="password"
                                                                        placeholder="New Password">
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="repassword">Re-Type New Password</label>
                                                                    <input id="repassword" type="password"
                                                                        placeholder="Re-Type New Password">
                                                                </div>
                                                                <div class="submit-btn mt-25">
                                                                    <button type="submit" class="btn">Update
                                                                        Password</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="itemThree-tab-pane" role="tabpanel"
                                                        aria-labelledby="itemThree-tab" tabindex="0">
                                                        <div class="instructor__profile-form-wrap">
                                                            <form action="#" class="instructor__profile-form">
                                                                <div class="form-grp">
                                                                    <label for="facebook">Facebook</label>
                                                                    <input id="facebook" type="url"
                                                                        placeholder="https://facebook.com/">
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="twitter">Twitter</label>
                                                                    <input id="twitter" type="url"
                                                                        placeholder="https://twitter.com/">
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="linkedin">Linkedin</label>
                                                                    <input id="linkedin" type="url"
                                                                        placeholder="https://linkedin.com/">
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="website">Website</label>
                                                                    <input id="website" type="url"
                                                                        placeholder="https://website.com/">
                                                                </div>
                                                                <div class="form-grp">
                                                                    <label for="github">Github</label>
                                                                    <input id="github" type="url"
                                                                        placeholder="https://github.com/">
                                                                </div>
                                                                <div class="submit-btn mt-25">
                                                                    <button type="submit" class="btn">Update
                                                                        Profile</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- dashboard-area-end -->

    </main>


@endsection
