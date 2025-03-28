<?php

namespace Brain\Games\Games;

use Brain\Games\Engine;

class Progression implements GameInterface
{
    private function generateProgression(int $startElement, int $step, int $progressionLength): array
    {
        $progression = [];

        for ($i = 0; $i < $progressionLength; $i++) {
            $progression[] = $startElement + $step * $i;
        }

        return $progression;
    }

    public function play(): void
    {
        $description = "What number is missing in the progression?";

        $generateGameData = function (): array {
            $startElement       = rand(1, 40);
            $step               = rand(2, 6);
            $progressionLength  = 8;
            $progression        = $this->generateProgression($startElement, $step, $progressionLength);

            $hiddenElementIndex = rand(0, 8 - 1);
            $answer             = "{$progression[$hiddenElementIndex]}";
            $progression[$hiddenElementIndex] = '..';
            $question           = implode(' ', $progression);

            return [$question, $answer];
        };

        $game = new Engine();
        $game->runGame($description, $generateGameData);
    }
}
