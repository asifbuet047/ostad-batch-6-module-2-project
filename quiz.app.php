<?php
$answers = [];
$score = 0;
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

foreach ($questions as $index => $question) {
    echo $question['question'] . PHP_EOL;
    $answer = readline('Your answer: ');
    array_push($answers, $answer);
}

$score = evaluateQuiz($questions, $answers);
echo 'You scored ' . $score. ' out of ' . count($questions) . PHP_EOL;


if ($score == count($questions)) {
    echo 'Execellent job!';
} elseif ($score >= count($questions) / 2) {
    echo 'Good effort!';
} else {
    echo 'Better luck next time!';
}


function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    for ($i = 0; $i < count($questions); $i++) {
        if (strtolower($questions[$i]['correct']) == strtolower($answers[$i])) {
            $score++;
        }
    }
    return $score;
}
