<?php

namespace App\Http\Controllers;

use App\Models\Anemities;
use App\Models\Gallery;
use App\Models\Room;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

//Laravel Filesystem

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function home()
    {
        $rooms = Room::get();

        return view('index', [
            'rooms' => $rooms,
        ]);
    }

    public function index()
    {
        $rooms = Room::get();

        return view('rooms.host', [
            'rooms' => $rooms,
        ]);
    }

    public function store(Request $request)
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

//        return $validatedAttributes;

        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            // make thumbnails
            $thumbStore = 'thumb.' . $filename . '_' . time() . '.' . $extension;
            $thumb = Image::make($request->file('cover_image')->getRealPath());
            $thumb->resize(600, 400);
            $thumb->save('storage/cover_images/' . $thumbStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post_data =
            [
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'price' => $request->input('price'),
                'type' => $request->input('type'),
                'guests' => $request->input('guests'),
                'beds' => $request->input('beds'),
                'country' => $request->input('country'),
                'city' => $request->input('city'),
                'cover_image' => $fileNameToStore,
                'user_id' => auth()->user()->id,
            ];

//        Room::create($post_data);

        $create = auth()->user()->rooms()->create($post_data);
        $create->id;

//        Room::create(request()->validate([
//            'title' => 'required',
//            'body' => 'required',
//            'user_id' =>  auth()->user()->id,
//            'cover_image' => $fileNameToStore,
//        ]));

//        $post = new Room;
//        $post->title = $request->input('title');
//        $post->body = $request->input('body');
//        $post->user_id = auth()->user()->id;
//        $post->cover_image = $fileNameToStore;
//        $post->save();
//        $post->id;

//        if($request->hasfile('imageFile')) {
//            foreach ($request->file('imageFile') as $file) {
//                $name = $file->getClientOriginalName();
//                $file->move(public_path() . '/uploads/', $name);
//                $fileModal = new Gallery();
//                $fileModal->name = $name;
//                $fileModal->room_id = $post->id;
//                $fileModal->image_path = $name;
//                $fileModal->save();
//            }

        if ($request->hasFile('imageFile')) {
            foreach ($request->file('imageFile') as $image) {
                if ($image->isValid()) {
                    $img = new Gallery();
                    $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
                    $path = public_path('/uploads/');
                    $imgx = Image::make($image->getRealPath());
                    $imgx->resize(600, 400, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($path . '/' . $image_name);
                    $img->room_id = $create->id;
                    $img->name = $image_name;
                    $img->image_path = 'uploads/' . $image_name;
                    $img->save();
                }
            }
        }

        Anemities::create([
            'room_id' => $create->id,
            'is_wifi' => request('is_wifi'),
            'is_heating' => request('is_heating'),
            'is_firstaidkit' => request('is_firstaidkit'),
            'is_iron' => request('is_iron'),
            'is_dryer' => request('is_dryer'),
            'is_coffeemaker' => request('is_coffeemaker'),
            'is_air' => request('is_air'),
            'is_tv' => request('is_tv'),
            'is_washingmachine' => request('is_washingmachine'),
        ]);

//        $amenities = new Anemities();
//        $amenities->room_id = $create -> id;
//        $amenities->is_wifi = $request->input('is_wifi');
//        $amenities->is_heating = $request->input('is_heating');
//        $amenities->is_firstaidkit = $request->input('is_firstaidkit');
//        $amenities->is_iron = $request->input('is_iron');
//        $amenities->is_dryer = $request->input('is_dryer');
//        $amenities->is_coffeemaker = $request->input('is_coffeemaker');
//        $amenities->is_air = $request->input('is_air');
//        $amenities->is_tv = $request->input('is_tv');
//        $amenities->is_washingmachine = $request->input('is_washingmachine');
//        $amenities->save();

        return redirect('/');
    }

    public function edit(Room $room)
    {
//        return view('rooms.edit', ['rooms' => DB::table('rooms')]);
        return view('rooms.edit', compact('room'));
    }

    public function update($id, Request $request)
    {

//        return $request;
        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            // make thumbnails
            $thumbStore = 'thumb.' . $filename . '_' . time() . '.' . $extension;
            $thumb = Image::make($request->file('cover_image')->getRealPath());
            $thumb->resize(600, 400);
            $thumb->save('storage/cover_images/' . $thumbStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $room = Room::find($id);
        $room->title = request('title');
        $room->body = request('body');
//        $room->body = request('price');
        $room->cover_image = $fileNameToStore;
        $room->save();

        Anemities::where('room_id', $id)->update([
            'is_wifi' => request('is_wifi'),
            'is_heating' => request('is_heating'),
            'is_firstaidkit' => request('is_firstaidkit'),
            'is_iron' => request('is_iron'),
            'is_dryer' => request('is_dryer'),
            'is_coffeemaker' => request('is_coffeemaker'),
            'is_air' => request('is_air'),
            'is_tv' => request('is_tv'),
            'is_washingmachine' => request('is_washingmachine'),
        ]);

        return redirect('/');
    }

    public function show(Room $room)
    {
        return view('rooms.show', [
            'room' => $room,
        ]);
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms');
    }

    public function users()
    {
        return view('dashboard.users');
    }

    protected function validateRoom()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);
    }
}
