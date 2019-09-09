<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class SelectServiceConversation extends Conversation
{
    public function askService()
    {
        $question = Question::create(trans('What kind of Service you are looking for?'))
            ->callbackId('select_service')
            ->addButtons([
                Button::create(trans('About EvalDocente'))->value('About EvalDocente'),
                Button::create(trans('Evaluation').' '.trans('of').' '.trans('Teacher'))->value('Evaluation of Teacher'),
                Button::create(trans('Account Settings'))->value('Account Settings'),
            ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'service' => $answer->getValue(),
                ]);

                $this->bot->startConversation(new DateTimeConversation());
            }
        });
    }

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askService();
    }
}
