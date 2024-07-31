<div class="all">
<?php
echo '<link rel="stylesheet" href="quiz.css">';
$all_questions  = [
    '1.What is the capital of France?',
    '2.What is 5+7?',
    '3.This is not a programming language',
    '4.The author of world famous Harry Potter series is',
    '5.What is celebrated in Cameroon on the 11th of February'
];
$correct_answers=['Paris','12','HTML','J K Rowling','Youth Day'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
session_start();
$total = 0;
$_SESSION['total'] = $total;
echo '<center><p style="font-size: 35px; font-weight: bolder;">Quiz Results</p></center>';
echo "<center><div class='results'>";
echo "<div class='each_results'>";
if ($answer1 == $correct_answers[0]) {
    echo "<div class='questions'>",$all_questions[0],'<br>',"</div>";
    echo 'Your answer is:', $answer1,'<br>';
    echo 'The correct answer is:', $correct_answers[0],'<br>';
    $_SESSION['total']++;
}
else {
    echo "<div class='questions'>",$all_questions[0],'<br>',"</div>";
    echo 'Your answer is:',$answer1,'<br>';
    echo 'The correct answer is:',$correct_answers[0],'<br>';
}
echo '</div>';
echo "<div class='each_results'>";
if ($answer2 == $correct_answers[1]) {
    echo "<div class='questions'>",$all_questions[1],'<br>',"</div>";
    echo 'Your answer is:',$answer2,'<br>';
    echo 'The correct answer is:',$correct_answers[1],'<br>';
    $_SESSION['total']++;
}
else {
    echo "<div class='questions'>",$all_questions[1],'<br>',"</div>";
    echo 'Your answer is:',$answer2,'<br>';
    echo 'The correct answer is:',$correct_answers[1],'<br>';
}
echo '</div>';
echo "<div class='each_results'>";
if ($answer3 == $correct_answers[2]) {
    echo "<div class='questions'>",$all_questions[2],'<br>',"</div>";
    echo 'Your answer is:',$answer3,'<br>';
    echo 'The correct answer is:',$correct_answers[2],'<br>';
    $_SESSION['total']++;
}
else {
    echo "<div class='questions'>",$all_questions[2],'<br>',"</div>";
    echo 'Your answer is:',$answer3,'<br>';
    echo 'The correct answer is:',$correct_answers[2],'<br>';
}
echo '</div>';
echo "<div class='each_results'>";
if ($answer4 == $correct_answers[3]) {
    echo "<div class='questions'>",$all_questions[3],'<br>',"</div>";
    echo 'Your answer is:',$answer4,'<br>';
    echo 'The correct answer is:',$correct_answers[3],'<br>';
    $_SESSION['total']++;
}
else {
    echo "<div class='questions'>",$all_questions[3],'<br>',"</div>";
    echo 'Your answer is:',$answer4,'<br>';
    echo 'The correct answer is:',$correct_answers[3],'<br>';
}
echo '</div>';
echo "<div class='each_results'>";
if ($answer5 == $correct_answers[4]) {
    echo "<div class='questions'>",$all_questions[4],'<br>',"</div>";
    echo 'Your answer is:',$answer5,'<br>';
    echo 'The correct answer is:',$correct_answers[4],'<br>';
    $_SESSION['total']++;
}
else {
    echo "<div class='questions'>",$all_questions[4],'<br>',"</div>";
    echo 'Your answer is:',$answer5,'<br>';
    echo 'The correct answer is:',$correct_answers[4],'<br>';
}
echo '</div>';
echo "</div></center> <center> ";
echo 'Total number of questions: 5 <br>';
echo 'Correct answers:',$_SESSION['total'],'<br>';
echo 'Score:',($_SESSION['total']/5)*100,'% <br>';
echo '<button style="background-color: blue; font-size: 30px;"><a href="./quiz.html">Try again</a></button>';
echo "</center>";
die;
?>
</div>`