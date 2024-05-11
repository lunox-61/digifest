<?php

namespace App\Http\Controllers\Admin;

use App\Models\Embeds;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmbedFormRequest;

class EmbedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $embed = Embeds::all();
        return view('admin.embed.index', compact('embed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.embed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmbedFormRequest $request)
    {
        $data = $request->validated();
        $embed = new Embeds;
        $embed->title = $data['title'];
        $embed->description = $data['description'];
        $embed->embed_links = $data['embed_links'];
        $embed->save();
        return redirect('admin/embed')->with('message', 'Link embed Added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($embed_id)
    {
        $embed = Embeds::find($embed_id);
        return view('admin.embed.edit', compact('embed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmbedFormRequest $request, $embed_id)
    {
        $data = $request->validated();
        $embed = Embeds::find($embed_id);
        $embed->title = $data['title'];
        $embed->description = $data['description'];
        $embed->update();

        return redirect('admin/embed')->with('message', 'Link embed Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($embed_id)
    {
        $embed = Embeds::find($embed_id);
        if ($embed) {
            $embed->delete();
            return redirect('admin/embed')->with('message', 'Delete Success!!');
        } else {
            return redirect('admin/embed')->with('message', 'No Link Found');
        }
    }
}
