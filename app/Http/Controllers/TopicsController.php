<?php

namespace Demo\Http\Controllers;

use Illuminate\Http\Request;

use Demo\Http\Controllers\Controller;
use Demo\Topic;

class TopicsController extends Controller
{
    /**
     * @return Response
     */
    public function showLatestTopics()
    {
        return view('topics.latest', [
            'topics' => Topic::getLatestTopics()
        ]);
    }
}
