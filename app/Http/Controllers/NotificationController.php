<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('notifications.index', [
            'unreadNotifications' => auth()->user()->unreadNotifications,
            'readNotifications' => auth()->user()->readNotifications,
        ]);
    }

    public function read($id)
    {
        DatabaseNotification::find($id)->markAsRead();

        return redirect()->route('notifications.index')->withSuccess('El mensaje fue marcado como leido');
    }

    public function destroy($id)
    {
        DatabaseNotification::findOrFail($id)->delete();

        return redirect()->route('notifications.index')->withSuccess('El mensaje fue eliminado correctamente');
    }
}
