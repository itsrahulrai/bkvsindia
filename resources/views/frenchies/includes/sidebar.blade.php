<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a  href="{{route('home')}}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a  href="{{route('frenchies.admission.index')}}" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Admissions</span>
						</a>
                    </li>
                    <li><a  href="{{route('frenchies.center.index')}}" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Centers</span>
						</a>
                       
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.courses.index')}}">Courses</a></li>
                            <li><a href="{{route('admin.subject.index')}}">Subjects</a></li>
                        </ul>
                    </li>
                  
                   
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Mange Results</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Results</a></li>
                            <li><a href="{{route('admin.marksheet.index')}}">Marksheet</a></li>
                        </ul>
                    </li>

                  
                </ul>
				
			</div>
        </div>