<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Participants;
use App\Repositories\LinksRepository;
use App\Repositories\ParticipantsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ParticipantsController extends Controller
{
    /**
     * @param ParticipantsRepository $participantsRepository
     * @return \Illuminate\View\View
     */
    public function index(ParticipantsRepository $participantsRepository)
    {
        $paginate = $participantsRepository->getAllWithPaginate();

        return view('main.participants.index')->with('paginate', $paginate);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $item = new Participants();

        return view('main.participants.EditOrCreate')->with('item', $item);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $links = $this->getForLinks($data);


        $item = new Participants();

        $result = $item->create($data);
        if ($result)
        {
            foreach ($links as $link)
            {
                $data = ['button_name' => $link[1], 'link' => $link[0],];
                $result->links()
                    ->create($data);
            }
            return redirect()
                ->route('main.participants.create')
                ->with(['success' => 'Запись успешно создана']);
        } else
        {
            return back()
                ->withInput()
                ->withErrors(['msg' => 'Ошибка создания']);
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id, ParticipantsRepository $participantsRepository)
    {
        $item = $participantsRepository->getEdit($id);
        return view('main.participants.EditOrCreate')->with('item', $item);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id,
        ParticipantsRepository $participantsRepository,
        LinksRepository $linksRepository)
    {
        $data = $request->all();
        $item = $participantsRepository->getEdit($id);

        $ids = collect($data['ids'] ?? []);
        $links = collect($this->getForLinks($data))->transform(function ($item)
        {
            return ['button_name' => $item[1], 'link' => $item[0]];
        });
        $result = $item->update($data);


        if ($result)
        {
            $ids->each(function ($id, $index) use ($linksRepository, $links)
            {
                $participantWithLinks = $linksRepository->getEdit($id);
                $participantWithLinks->update($links[$index]);
                $links[$index] = null;
            });

            $links->each(function ($link) use ($item)
            {
                if ($link !== null) {
                    $item->links()->create($link);
                }
            });
            return redirect()
                ->route('main.participants.edit', $item->id)
                ->with(['success' => 'Запись успешно обновлена']);
        } else
        {
            back()
                ->withInput()
                ->withErrors(['msg' => 'С изменением записи что-то пошло не так']);
        }

        dd($result);
    }

    private function getForLinks($data)
    {

        /** @var Collection $links */
        $links = collect($data['link']);
        $links->transform(function ($item, $index) use ($data)
        {
            $newObj = [$item, $data['button_name'][$index]];
            if ($newObj[0] !== null && $newObj[1] !== null)
                return $newObj;
        });

        $col = $links->filter()
            ->all();
        return $col;
    }

    private function setLinksValid()
    {

    }
}
