<?php

namespace App\Http\Controllers;

use App\Http\Requests\Channel\StoreRequest;
use App\Repositories\ChannelRepository;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChannelRepository $model)
    {
        $channels = $model->all();

        return view('pages.channels.index', compact('channels'));
    }

    public function create()
    {
        return view('pages.channels.create');
    }

    public function store(StoreRequest $request, ChannelRepository $model)
    {
        $tt = $model->store($request);
        return redirect('channels')->with('success', 'Canal adicionado com sucesso!');
    }
}
