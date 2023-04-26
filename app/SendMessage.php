<?php

namespace App;

class SendMessage
{

    public $token, $user_id;

    public function __construct()
    {
    }

    public function SendMessage($textMessage)
    {
        $getQuery = array(
            "chat_id" => $this->user_id,
            "text" => $textMessage,
            "parse_mode" => "html",
            'reply_markup' => json_encode(
                array(
                    'inline_keyboard' => array(
                        array(
                            array(
                                'text' => 'Button 2',
                                'callback_data' => 'test_2',
                            ),
                        ),
                        array(
                            array(
                                'text' => 'Button 3',
                                'callback_data' => 'test_3',
                            ),

                            array(
                                'text' => 'Button 4',
                                'callback_data' => 'test_4',
                            ),
                        )
                    ),
                )
            ),
        );

        $ch = curl_init("https://api.telegram.org/bot" . $this->token . "/sendMessage?" . http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $resultQuery = curl_exec($ch);
        curl_close($ch);

    }
}