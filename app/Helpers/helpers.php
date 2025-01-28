<?php

use App\Models\Center;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;




// if (!function_exists('centerCode')) {
//     /**
//      * Generate a unique sequential center code with the prefix 'BKVS'.
//      *
//      * @return string
//      */
//     function centerCode()
//     {
//         // Retrieve the last center code from the database
//         $lastCode = Center::latest('id')->value('center_code');

//         // Extract the numeric part from the last center code
//         if ($lastCode) {
//             // Extract the numeric part, after 'BKVS'
//             $lastNumber = intval(substr($lastCode, 4)); // Remove 'BKVS' and convert to an integer
//         } else {
//             $lastNumber = 99; // Start from 100 if no center code exists
//         }

//         // Increment the number and generate a new center code with proper padding
//         $newNumber = $lastNumber + 1;
//         $newCode = 'BKVS' . str_pad($newNumber, 3, '0', STR_PAD_LEFT); // Ensure 3 digits are used

//         return $newCode;
//     }
// }


if (!function_exists('centerCode')) {
    /**
     * Generate a unique sequential center code with the prefix 'BKVS'.
     *
     * @return string
     */
    function centerCode()
    {
        // Retrieve the last center code from the database
        $lastCode = Center::latest('id')->value('center_code');

        // Extract the numeric part from the last center code
        if ($lastCode) {
            // Extract the numeric part, after 'BKVS'
            $lastNumber = intval(substr($lastCode, 4)); // Remove 'BKVS' and convert to an integer
        } else {
            $lastNumber = 99; // Start from 100 if no center code exists
        }

        // Increment the number and generate a new center code with proper padding
        do {
            $newNumber = $lastNumber + 1;
            $newCode = 'BKVS' . str_pad($newNumber, 3, '0', STR_PAD_LEFT); // Ensure 3 digits are used
            $lastNumber++; // Increment the number for the next check
        } while (Center::where('center_code', $newCode)->exists()); // Check if the generated code already exists in the database

        return $newCode;
    }
}




if (!function_exists('calculateFirstYearTotals')) {
    /**
     * Calculate the total marks and maximum marks for the first year.
     *
     * @param \Illuminate\Database\Eloquent\Collection $firstCourseDetails
     * @param array $firstSubjectsData
     * @return array
     */
    function calculateFirstYearTotals($firstCourseDetails, $firstSubjectsData)
    {
        $totals = [
            'totalMarks1' => 0,
            'firstTotalMaximumMarks' => 0,
        ];

        foreach ($firstCourseDetails as $course) {
            foreach ($course->subjects as $index => $subject) {
                $subjectData = $firstSubjectsData[$index] ?? [];
                $marksObtained = $subjectData['marks_obtained'] ?? 0;
                $internalMarks = $subjectData['internal_marks'] ?? 0;
                $maximumMarks = $subject->maximum_marks ?? 0;

                $totals['totalMarks1'] += ($marksObtained + $internalMarks);
                $totals['firstTotalMaximumMarks'] += $maximumMarks;
            }
        }

        return $totals;
    }
}



if (!function_exists('generateEnrollNo')) {
    /**
     * Generate a unique EnrollNo with the prefix 'BKVS' and session year.
     *
     * @param string $session
     * @return string
     */
    function generateEnrollNo(string $session): string
    {
        try {
            // Generate random 6-digit number
            $uniqueNo = str_pad(rand(100000, 999999), 6, '0', STR_PAD_LEFT);

            // Generate the EnrollNo with the session and unique number
            $enrollNo = 'BKVS' . $session . $uniqueNo;

            // Check if this EnrollNo already exists in the database
            if (DB::table('admissions')->where('enroll_no', $enrollNo)->exists()) {
                // If it already exists, regenerate the number
                return generateEnrollNo($session);
            }

            return $enrollNo;
        } catch (\Exception $e) {
            Log::error('Error generating EnrollNo: ' . $e->getMessage());
            throw new \Exception('Error generating EnrollNo');
        }
    }
}

if (!function_exists('generateRollNo')) {
    /**
     * Generate a unique RollNo with the session year.
     *
     * @param string $session
     * @return string
     */
    function generateRollNo(string $session): string
    {
        try {
            // Generate random 6-digit number
            $uniqueRollNo = str_pad(rand(100000, 999999), 6, '0', STR_PAD_LEFT);

            // Generate the RollNo with the session and unique number
            $rollNo = $session . $uniqueRollNo;

            // Check if this RollNo already exists in the database
            if (DB::table('admissions')->where('roll_no', $rollNo)->exists()) {
                // If it already exists, regenerate the number
                return generateRollNo($session);
            }

            return $rollNo;
        } catch (\Exception $e) {
            Log::error('Error generating RollNo: ' . $e->getMessage());
            throw new \Exception('Error generating RollNo');
        }
    }
}







