<div class="dashboard__sidebar-wrap">
    <div class="dashboard__sidebar-title mb-20">
        <h6 class="title">Welcome, Shivam Pal</h6>
    </div>
    <nav class="dashboard__sidebar-menu">
        <ul class="list-wrap">
            <li class="active">
                <a href="{{route('student.dashboard')}}">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('student.my-profile')}}">
                    <i class="skillgro-avatar"></i>
                    My Profile
                </a>
            </li>
            <li>
                <a href="{{route('student.id-card')}}">
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
            <li>
                <a href="{{route('student.result')}}">
                    <i class="skillgro-certificate"></i>
                    Result
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
            <form method="POST" action="{{ route('student.logout') }}" id="logout-form">
    @csrf
    <li>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="skillgro-logout"></i>
            Logout
        </a>
    </li>
</form>

        </ul>
    </nav>
</div>
