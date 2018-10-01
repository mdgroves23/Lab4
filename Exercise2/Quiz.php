<?php
    $answer1 = $_POST['q1'];
    $answer2 = $_POST['q2'];
    $answer3 = $_POST['q3'];
    $answer4 = $_POST['q4'];
    $answer5 = $_POST['q5'];
    $total_correct = 0;
    $user_ans1 = 0;
    $user_ans2 = 0;
    $user_ans3 = 0;
    $user_ans4 = 0;
    $user_ans5 = 0;
    $score_percent = 0;
    //Grade test and calculate number of correct answers
    if ($answer1 == "1") { $total_correct++; }
    if ($answer2 == "3") { $total_correct++; }
    if ($answer3 == "4") { $total_correct++; }
    if ($answer4 == "2") { $total_correct++; }
    if ($answer5 == "2") { $total_correct++; }
    $score_percent = ($total_correct/5) * 100;
    //Set user answer to be displayed for question 1
    if ($answer1 == 1) { $user_ans1 = "Tom Marvolo Riddle"; }
    else if ($answer1 == 2) { $user_ans1 = "Tom Marvilo Riddle"; }
    else if ($answer1 == 3) { $user_ans1 = "Tom Marvin Riddle"; }
    else { $user_ans1 = "Tom Ravolo Riddle"; }
    //Set user answer to be displayed for question 2
    if ($answer2 == 1) { $user_ans2 = "Goodbye, for now, Hogwarts."; }
    else if ($answer2 == 2) { $user_ans2 = "Harry, Ron, and Hermione looked at each other sheepishly and smiled."; }
    else if ($answer2 == 3) { $user_ans2 = "I'm going to have a lot of fun with Dudley this summer..."; }
    else { $user_ans2 = "'Until the fall,' said Dumbledore with a nod."; }
    //Set user answer to be displayed for question 3
    if ($answer3 == 1) { $user_ans3 = "In a plane crash"; }
    else if ($answer3 == 2) { $user_ans3 = "In a train crash"; }
    else if ($answer3 == 3) { $user_ans3 = "In a bus crash"; }
    else { $user_ans3 = "In a car crash"; }
    //Set user answer to be displayed for question 4
    if ($answer4 == 1) { $user_ans4 = "Society For the Promotion of Elfish Welfare"; }
    else if ($answer4 == 2) { $user_ans4 = "Society For the Protection of Elves and Wizards"; }
    else if ($answer4 == 3) { $user_ans4 = "Support For People, Elves, and Wizards"; }
    else { $user_ans4 = "Sorority For the Protection of Elves and Wands"; }
    //Set user answer to be displayed for question 5
    if ($answer5 == 1) { $user_ans5 = "Albus Wulfric Percival Brian Dumbledore"; }
    else if ($answer5 == 2) { $user_ans5 = "Albus Percival Wulfric Brian Dumbledore"; }
    else if ($answer5 == 3) { $user_ans5 = "Albus Percival Brian Wulfric Dumbledore"; }
    else { $user_ans5 = "Albus Brian Percival Wulfric Dumbledore"; }
    //Display results
    echo "Question 1: What is Lord Voldemort's real name?<br>Your answer: $user_ans1<br> Correct Answer: Tom Marvolo Riddle<br><br>";
    echo "Question 2: What's the last line of the book Harry Potter and the Sorcerer's Stone?<br>Your answer: $user_ans2<br> Correct Answer: I'm going to have a lot of fun with Dudley this summer...<br><br>";
    echo "Question 3: According to the Dursleys, how did Harry's parents die?<br>Your answer: $user_ans3<br> Correct Answer: A car crash<br><br>";
    echo "Question 4: What does S.P.E.W. stand for?<br>Your answer: $user_ans4<br> Correct Answer: Society For the Protection of Elves and Wizards<br><br>";
    echo "Question 5: What is Dumbledore's full name?<br>Your answer: $user_ans5<br> Correct Answer: Albus Percival Wulfric Brian Dumbledore<br><br>";
    echo "You answered: <div id='results'>$total_correct / 5 questions correctly.</div>";
    echo "Your score: $score_percent%";
?>