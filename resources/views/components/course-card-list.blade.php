<div class="col course-card list">
    <div class="courses__item courses__item-three shine__animate-item">
        <div class="courses__item-thumb">
            <a href="course-details.html" class="shine__animate-link">
            <img src="{{ asset($course->image) }}" alt="{{ $course->name }}">
            </a>
        </div>
        <div class="courses__item-content">
            <ul class="courses__item-meta list-wrap">
                <li class="courses__item-tag">
                    <a href="course.html">{{ $course->parent->name }}</a>
                    <div class="avg-rating">
                        <!-- <i class="fas fa-star"></i> (4.5 Reviews) -->
                    </div>
                </li>
                <li class="price">₹ {{ $course->fees }}</li>
            </ul>
            <h5 class="title"><a href="course-details.html">{{ $course->name }}</a></h5>
            <p class="info">when an unknown printer took a galley of type and
                scrambled type specimen book It has survived not only.</p>
            <div class="courses__item-bottom">
                <div class="button">
                    <a href="course-details.html">
                        <span class="text">Enroll Now</span>
                        <i class="flaticon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>