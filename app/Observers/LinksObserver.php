<?php

namespace App\Observers;

use App\Models\Links;

class LinksObserver
{
    /**
     * @param  \App\Models\Links  $links
     * @return void
     */
    public function created(Links $links)
    {
        //
    }

    /**
     * @param  \App\Models\Links  $links
     * @return void
     */
    public function updating(Links $links)
    {
        $data = $links->getAttributes();
        if(!$data["button_name"] || !$data["link"])
        {
            $links->delete($data["id"]);
            return false;
        }
    }

    public function updated(Links $links)
    {

    }

    /**
     * @param  \App\Models\Links  $links
     * @return void
     */
    public function deleted(Links $links)
    {
        //
    }

    /**
     * @param  \App\Models\Links  $links
     * @return void
     */
    public function restored(Links $links)
    {
        //
    }

    /**
     * @param  \App\Models\Links  $links
     * @return void
     */
    public function forceDeleted(Links $links)
    {
        //
    }
}
