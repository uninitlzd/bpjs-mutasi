<?php

namespace App\Http\Controllers\Admin;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class ChatController extends Controller
{
    public function index()
    {
        $user = auth()->user();


        $serviceAccount = ServiceAccount::fromJsonFile(public_path().'/firechat-demo-1f4dd-46688e564ca1.json');

        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $firebaseToken = $firebase->getAuth()->createCustomToken($user->id);

        return view('admin.chats.index', compact('firebaseToken'));
    }
}
