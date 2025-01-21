<div class="dashboard__sidebar-wrap">
    <div class="dashboard__sidebar-title mb-20">
        <h6 class="title">Welcome, Shivam Pal</h6>
    </div>
    <nav class="dashboard__sidebar-menu">
        <ul class="list-wrap">
            <li class="active">
                <a href="{{ route('user-dashboard') }}">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('my-profile')}}">
                    <i class="skillgro-avatar"></i>
                    My Profile
                </a>
            </li>
            <li>
                <a href="{{route('enrolled')}}">
                    <i class="skillgro-book"></i>
                    Enrolled Courses
                </a>
            </li>
            <li>
                <a href="{{route('certificate')}}">
                    <i class="skillgro-certificate"></i>
                    Certificate
                </a>
            </li>
            <li>
                <a href="{{route('result')}}">
                    <i class="skillgro-certificate"></i>
                    Result
                </a>
            </li>
            <li>
                <a href="{{route('id-card')}}">
                    <i class="skillgro-book-2"></i>
                    ID Card
                </a>
            </li>
            <li>
                <a href="{{route('admit-card')}}">
                    <i class="skillgro-satchel"></i>
                    Admit Card
                </a>
            </li>
        </ul>
    </nav>
    <div class="dashboard__sidebar-title mt-30 mb-20">
        <h6 class="title">User</h6>
    </div>
    <nav class="dashboard__sidebar-menu">
        <ul class="list-wrap">
            <li>
                <a href="{{route('setting')}}">
                    <i class="skillgro-settings"></i>
                    Settings
                </a>
            </li>
            <li>
                <a href="">
                    <i class="skillgro-logout"></i>
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</div>
