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
                                                        <button class="nav-link active" id="itemOne-tab" data-bs-toggle="tab" data-bs-target="#itemOne-tab-pane" type="button" role="tab" aria-controls="itemOne-tab-pane" aria-selected="true">Profile</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="itemTwo-tab" data-bs-toggle="tab" data-bs-target="#itemTwo-tab-pane" type="button" role="tab" aria-controls="itemTwo-tab-pane" aria-selected="false">Password</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="itemThree-tab" data-bs-toggle="tab" data-bs-target="#itemThree-tab-pane" type="button" role="tab" aria-controls="itemThree-tab-pane" aria-selected="false">Social Share</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="itemOne-tab-pane" role="tabpanel" aria-labelledby="itemOne-tab" tabindex="0">
                                                    <div class="instructor__profile-form-wrap">
                                                        <form action="" method="POST"  class="instructor__profile-form">
                                                          
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-grp">
                                                                        <label for="firstname">Name</label>
                                                                        <input id="firstname" type="text" name="name" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-grp">
                                                                        <label for="username">Email</label>
                                                                        <input id="username" type="email" name="email" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-grp">
                                                                        <label for="lastname">Mobile</label>
                                                                        <input id="lastname" type="number" name="mobile" value="">
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="submit-btn mt-25">
                                                                <button type="submit" class="btn">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="itemTwo-tab-pane" role="tabpanel" aria-labelledby="itemTwo-tab" tabindex="0">
                                                    <div class="instructor__profile-form-wrap">
                                                        <form action="" method="POST" class="instructor__profile-form">
                                                            <div class="form-grp">
                                                                <label for="currentpassword">Current Password</label>
                                                                <input id="currentpassword" name="current_password" type="password" placeholder="Current Password">
                                                            </div>
                                                            <div class="form-grp">
                                                                <label for="newpassword">New Password</label>
                                                                <input id="newpassword" type="password" name="password" placeholder="New Password">
                                                            </div>
                                                            <div class="form-grp">
                                                                <label for="repassword">Re-Type New Password</label>
                                                                <input id="repassword" type="password" name="password_confirmation" placeholder="Re-Type New Password">
                                                            </div>
                                                            <div class="submit-btn mt-25">
                                                                <button type="submit" class="btn">Update Password</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="itemThree-tab-pane" role="tabpanel" aria-labelledby="itemThree-tab" tabindex="0">
                                                    <div class="instructor__profile-form-wrap">
                                                        <form action="#" class="instructor__profile-form">
                                                            <div class="form-grp">
                                                                <label for="facebook">Facebook</label>
                                                                <input id="facebook" type="url" placeholder="https://facebook.com/">
                                                            </div>
                                                            <div class="form-grp">
                                                                <label for="twitter">Twitter</label>
                                                                <input id="twitter" type="url" placeholder="https://twitter.com/">
                                                            </div>
                                                            <div class="form-grp">
                                                                <label for="linkedin">Linkedin</label>
                                                                <input id="linkedin" type="url" placeholder="https://linkedin.com/">
                                                            </div>
                                                            <div class="form-grp">
                                                                <label for="website">Website</label>
                                                                <input id="website" type="url" placeholder="https://website.com/">
                                                            </div>
                                                            <div class="form-grp">
                                                                <label for="github">Github</label>
                                                                <input id="github" type="url" placeholder="https://github.com/">
                                                            </div>
                                                            <div class="submit-btn mt-25">
                                                                <button type="submit" class="btn">Update Profile</button>
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
    </section>
    <!-- dashboard-area-end -->

</main>


@endsection