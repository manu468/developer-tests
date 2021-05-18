<?php

class LeagueTable
{
    public function __construct(array $players)
    {
    $this->stats = array();
    foreach($players as $index => $player) {
    $this->stats[$player] = array(
        'index'        => $index,
        'games_played' => 0,
        'score'        => 0
    );
        }
    }

    public function recordResult(string $player, int $score)
    {
    $this->stats[$player]['games_played']++;
    $this->stats[$player]['score'] += $score;
    }

    public function playerRank(int $rank)
    {
    if ($rank <= $this->stats['index']){
    $ranks = $this->stats;
    // Uasort allows us to move elements up or down the array in
    uasort($ranks, function ($a, $b) {
        if ($a['score'] < $b['score']) {
            return 1;
        }
        if ($a['score'] > $b['score']) {
            return -1;
        }
        if ($a['games_played'] > $b['games_played']) {
            return 1;
        }
        if ($a['games_played'] < $b['games_played']) {
            return -1;
        }
        return $a['index'] > $b['index'] ? 1 : -1;
        });
        
        $ranks = array_keys($ranks);
        return $ranks[--$rank];
    } else { 
        return "Entered rank is greter than the number of players, Please enter a valid rank";
    };
}
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 4);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);

echo $table->playerRank(4);