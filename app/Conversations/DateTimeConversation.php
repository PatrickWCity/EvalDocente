<?php

namespace App\Conversations;

use Carbon\Carbon;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class DateTimeConversation extends Conversation
{
    public function askDate()
    {
        $user = $this->bot->userStorage()->find();

        $this->say(trans("I'm sowwy, ").$user->get('name').trans(", This featuwe is stiww undew devewopment! UwU"));
    }

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askDate();
    }
}
