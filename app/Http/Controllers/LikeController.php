<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([/*'user_id' => auth()->id*/'user_id' => 1]);
        return response('Liked it', Response::HTTP_ACCEPTED);
    }

    public function unlikeIt(Reply $reply)
    {
        $reply->like()->where(['user_id' => /*auth()->id()*/1])->first()->delete();
        return response('Unliked it', Response::HTTP_NO_CONTENT);
    }
}
