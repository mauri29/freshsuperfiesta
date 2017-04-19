<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Requests\ChannelUpdateRequest;
use App\Jobs\UploadImage;

class ChannelSettingsController extends Controller
{
    public function edit(Channel $channel)
    {
    	//dd($channel);
    	//generate with getRouteKeyName in Channel.php according to slug
    	//Connect with Resources/views/Channel/settings
		$this->authorize('edit', $channel);
    	return view('channel.settings.edit',[
    		'channel' => $channel
    	]);
    }

    public function update(ChannelUpdateRequest $request, Channel $channel)
    {
    	//dd('update');
    	//dd($channel);
    	$this->authorize('update', $channel);
    	//die('update');
    	$channel->update([
            'address' => $request->address,
            'number' => $request->number,
            'post' => $request->post,
            'city' => $request->city,
            //'slug' => $request->slug,
            'name' => $request->name,
            'description' => $request->description,
            'image_filename',
    	]);
        //image upload
        if($request->file('image')){
            //move to temp location
            $request->file('image')->move(storage_path() . '/uploads', $fileId = uniqid(true));
            //dispatch a job
            $this->dispatch(new UploadImage($channel, $fileId));
        }
        alert()->success('Änderungen gespeichert <br>-<br> Cambios guardados', 'Perfekto!')->html()->autoclose(2500);
    	return redirect()->to("/channel/{$channel->slug}/edit")->with('success', 'Änderungen gespeichert - Cambios guardados');
    }
}
