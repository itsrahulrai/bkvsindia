<div class="col course-card grid">
    <div class="courses__item shine__animate-item">
        <div class="courses__item-thumb">
            <a href="{{route('course-details',$course->slug)}}" class="shine__animate-link">
                <img src="{{ asset($course->image) }}" alt="{{ $course->name }}">
            </a>
        </div>
        <div class="courses__item-content">
            <ul class="courses__item-meta list-wrap">
                <li class="courses__item-tag">
                    <a href="#">{{ $course->parent->name }}</a>
                </li>
            </ul>
            <h5 class="title"><a href="{{route('course-details',$course->slug)}}">{{ $course->name }}</a></h5>
            <div class="courses__item-bottom">
                <div class="button">
                    <a href="{{route('course-details',$course->slug)}}">
                        <span class="text">Read more</span>
                        <i class="flaticon-arrow-right"></i>
                    </a>
                </div>
                <h5 class="price">₹ {{ $course->fees }}</h5>
            </div>
        </div>
    </div>
</div>