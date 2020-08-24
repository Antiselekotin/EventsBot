<?php

namespace App\Observers;

use App\Models\Participants;
use App\Repositories\LinksRepository;

class ParticipantsObserver
{
    public function updating(Participants $participants) {
        if($participants->artist === '0') {
            $participants->music = 0;
            $participants->performance = 0;
            $participants->documentary = 0;
            $participants->visual = 0;
        }
    }
}
