<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{route('home')}}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <!-- <li><a href="{{route('admin.courses.index')}}" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Courses</span>
						</a>
                       
                    </li> -->

            <!-- <li><a  href="{{route('admin.admission.index')}}" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Admissions</span>
						</a>
                    </li> -->

            <li>
                <a href="{{ auth()->guard('frenchies')->check() 
                                    ? route('frenchies.admission.index') 
                                    : route('admin.admission.index') }}"
                    aria-expanded="false">
                    <i class="flaticon-086-star"></i>
                    <span class="nav-text">Admissions</span>
                </a>
            </li>
            @if (auth()->guard('frenchies')->check())
            <!-- Franchise Navigation -->
            <li>
                <a href="{{ route('frenchies.center.index') }}" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Centers</span>
                </a>
            </li>
            @else
            <!-- Admin Navigation -->
            <li class="has-arrow">
                <a href="#" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Centers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.center.index') }}">All Centers</a></li>
                    <li><a href="{{ route('admin.pending.center') }}">Pending Centers</a></li>
                    <li><a href="{{ route('admin.rejected.center') }}">Rejected Centers</a></li>
                </ul>
            </li>
            @endif


            @if (!auth()->guard('frenchies')->check())
            <!-- Admin Courses Menu -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.courses.index') }}">Courses</a></li>
                    <li><a href="{{ route('admin.subject.index') }}">Subjects</a></li>
                </ul>
            </li>
            @endif


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">Mange Results</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="uc-select2.html">Results</a></li>
                    <li><a href="{{route('admin.marksheet.index')}}">Marksheet</a></li>
                </ul>
            </li>

            <!-- <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                  
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="empty-page.html">Empty Page</a></li>
                        </ul>
                    </li> -->
        </ul>

    </div>
</div>