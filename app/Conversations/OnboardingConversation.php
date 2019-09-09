<?php

namespace App\Conversations;

use Validator;
use Illuminate\Support\Facades\Auth;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{
    public function askName()
    {
        if(Auth::check())
        {
            $this->bot->userStorage()->save([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ]);
            $this->say(trans('Hello').' '.Auth::user()->name.' '.trans('What can we help you with?'));
            $this->bot->startConversation(new SelectServiceConversation());
        }
        else
        {
            $this->ask(trans('Hello! What is your Name?'), function (Answer $answer) {
                $this->bot->userStorage()->save([
                    'name' => $answer->getText(),
                ]);

                $this->say(trans('Nice to meet you ').$answer->getText());
                $this->askEmail();
            });
        }
    }

    public function askEmail()
    {
        $this->ask(trans('What is your E-mail Address?'), function (Answer $answer) {
            $validator = Validator::make(['email' => $answer->getText()], [
                'email' => 'email',
            ]);

            if ($validator->fails()) {
                return $this->repeat(trans("That doesn't look like a valid email. Please enter a valid email."));
            }

            $this->bot->userStorage()->save([
                'email' => $answer->getText(),
            ]);

            $this->bot->startConversation(new SelectServiceConversation());
        });
    }

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askName();
    }
}
