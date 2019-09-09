<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\OnboardingConversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        //$botman->hears('Start conversation', BotManController::class.'@startConversation');

        $botman->hears('(Hi|Yo|Hello|Hey|Hola|Holi|Saludos|Buenos Dias|Buenas Noches|Buenas Tardes|Good Morning|Good Evening|Good Afternoon|Good Day)', 
            BotManController::class.'@startConversation');

        $botman->fallback(function($bot) {
            $bot->reply(trans('Sorry, I did not understand the command. Here is a list of commands I understand: ...'));
        });

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new OnboardingConversation());
    }
}
