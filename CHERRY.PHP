<?php

function StudentInformation($name, $courseCode, $quizScores, $examScores) 
{
    $studentInfo = array(
        "Name" => $name,
        "CourseCode" => $courseCode,
        "QuizScores" => $quizScores,
        "ExamScores" => $examScores
    );

    return $studentInfo;
}

$studentData = storeStudentInfo($name, $courseCode, $quizScores, $examScores);

$name = "randly";
$courseCode = "CICS";
$quizScores = array(10, 15, 19, 18, 20);
$examScores = array(50, 30, 40);

echo "Student Information:<br>";
echo "Name: " . $studentData['Name'] . "<br>";
echo "Course Code: " . $studentData['CourseCode'] . "<br>";
echo "Quiz Scores: " . implode(", ", $studentData['QuizScores']) . "<br>";
echo "Exam Scores: " . implode(", ", $studentData['ExamScores']) . "<br>";


function calculateAverageQuizScore($quizScores) 
{
    // Calculate the total score of all quizzes
    $totalQuizScore = array_sum($quizScores);

    // Calculate the average score of all quizzes
    $averageQuizScore = $totalQuizScore / count($quizScores);

    return $averageQuizScore;
}

function calculateAverageExamScore($examScores) 
{
    // Calculate the total score of all exams
    $totalExamScore = array_sum($examScores);

    // Calculate the average score of all exams
    $averageExamScore = $totalExamScore / count($examScores);

    return $averageExamScore;
}


function calculateFinalGrade($quizAverage, $examAverage)
{
    $quizWeight = 40;
    $examWeight = 60;

    $weightedQuizScore = calculateWeightedScore($quizAverage, $quizWeight);
    $weightedExamScore = calculateWeightedScore($examAverage, $examWeight);

    // Calculate final grade
    $finalGrade = $weightedQuizScore + $weightedExamScore;

    return $finalGrade;
}

$quizAverage = 16.4;
$examAverage = 40;

$studentData = [
    'Name' => 'Student Name',
    'CourseCode' => 'Course Code'
];

$finalGrade = calculateFinalGrade($quizAverage, $examAverage);

echo "Student Information:<br>";
echo "Name: ". $studentData['Name']. "<br>";
echo "Course Code: ". $studentData['CourseCode']. "<br>";
echo "Final Grade: ". $finalGrade;












?>
