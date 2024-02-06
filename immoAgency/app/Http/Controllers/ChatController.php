<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //
    public function homeChat(){
        $idpatient = auth()->id();

        $listUsers = DB::table('users')
            ->where('id', '!=', $idpatient)
            ->get();
        $usersOnline = DB::table('users')
            ->where('id', $idpatient)
            ->first();


        return view('chat.home', [
            'listUsers' => $listUsers,
            'usersOnline' => $usersOnline
        ]);
    }
    public function messageblade(Request $request){
        $path = $request->path(); // Obtient le chemin de l'URL, par exemple "chat/8"
        $segments = explode('/', $path); // Divise le chemin en segments en utilisant le délimiteur "/"
        $idUrl = end($segments); // Récupère le dernier segment de l'URL, qui est "8"

        return view('chat.message', ['idUrl' => $idUrl]);
    }

    public function sendMessage(Request $request){ 
        $idpatient = auth()->id();


        $listUsers = DB::table('users')
            ->where('id', '!=', $idpatient)
            ->get();
        $path = $request->path(); 
        $message = $request->input('message');

        $usersOnline = DB::table('users')
            ->where('id', $idpatient)
            ->first();

        if($path !== '/homechat'){
            $segments = explode('/', $path); 
            $idUrl = end($segments); 
            $listMessages = DB::table('chatkak')
                ->where('idpatient', $idpatient)
                ->where('idmedecin', $idUrl)
                ->get();
            $nameOnline = DB::table('users')
                ->where('id', $idUrl)
                ->first();
        }

        if(!empty($message)){
            DB::table('chatkak')->insert([
                'idpatient' => $idpatient,
                'idmedecin' => $idUrl,
                'message' => $message,
            ]);
        }
       
        return view('chat.home', [
            'listUsers' => $listUsers,
            'listMessages' => $listMessages,
            'nameOnline' => $nameOnline,
            'usersOnline' => $usersOnline
        ]);
    }
}
