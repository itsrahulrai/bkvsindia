@extends('layouts.admin')

@section('content')
<div class="marksheet">
    <h1>Marksheet for {{ $marksheet->student_name }}</h1>

    @if($firstYearCourseDetails->isNotEmpty())
        <h2>First Year</h2>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Subjects</th>
                    <th>Marks Obtained</th>
                    <th>Internal</th>
                    <th>Total Marks</th>
                    <th>Minimum Marks</th>
                    <th>Maximum Marks</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($firstYearCourseDetails as $course)
                    @foreach ($course->subjects as $index => $subject)
                        @php
                            $subjectData = $firstYearSubjectsData[$index] ?? [];
                            $marksObtained = $subjectData['marks_obtained'] ?? 0;
                            $internalMarks = $subjectData['internal_marks'] ?? 0;
                            $totalMarks = $marksObtained + $internalMarks;
                            $percentage = $subject->maximum_marks ? ($totalMarks / $subject->maximum_marks) * 100 : 0;
                            $grade = getGrade($percentage);
                        @endphp
                        <tr>
                            <td>{{ $subject->subject_code }}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $marksObtained }}</td>
                            <td>{{ $internalMarks }}</td>
                            <td>{{ $totalMarks }}</td>
                            <td>{{ $subject->minimum_marks }}</td>
                            <td>{{ $subject->maximum_marks }}</td>
                            <td>{{ $grade }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data for First Year.</p>
    @endif

    @if($secondYearCourseDetails->isNotEmpty())
        <h2>Second Year</h2>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Subjects</th>
                    <th>Marks Obtained</th>
                    <th>Internal</th>
                    <th>Total Marks</th>
                    <th>Minimum Marks</th>
                    <th>Maximum Marks</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($secondYearCourseDetails as $course)
                    @foreach ($course->subjects as $index => $subject)
                        @php
                            $subjectData = $secondYearSubjectsData[$index] ?? [];
                            $marksObtained = $subjectData['marks_obtained'] ?? 0;
                            $internalMarks = $subjectData['internal_marks'] ?? 0;
                            $totalMarks = $marksObtained + $internalMarks;
                            $percentage = $subject->maximum_marks ? ($totalMarks / $subject->maximum_marks) * 100 : 0;
                            $grade = getGrade($percentage);
                        @endphp
                        <tr>
                            <td>{{ $subject->subject_code }}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $marksObtained }}</td>
                            <td>{{ $internalMarks }}</td>
                            <td>{{ $totalMarks }}</td>
                            <td>{{ $subject->minimum_marks }}</td>
                            <td>{{ $subject->maximum_marks }}</td>
                            <td>{{ $grade }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data for Second Year.</p>
    @endif
</div>
@endsection
