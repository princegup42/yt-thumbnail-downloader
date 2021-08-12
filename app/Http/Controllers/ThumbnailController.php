<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThumbnailController extends Controller
{
    public function index_rel_link()
    {
        return view('thumbnail.index');
    }

    public function store(Request $request)
    {
        // Validating YouTube video URL
        $this->validate($request, [
            'url' => 'required|string|max:255|url'
        ]);

        // YouTube video URL.
        $url = $request->url;

        // YouTube video ID.
        $videoID = substr($url, strpos($url, "?v=") + 3);

        // Get video Thumbnail.
        $thumbnail = "https://img.youtube.com/vi/$videoID/maxresdefault.jpg";

        return view('thumbnail.download', [
            'thumbnail' => $thumbnail
        ]);
    }
}
