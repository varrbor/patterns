<?php
class InstantMessenger implements Messenger
{
    public function send($body)
    {
        echo "InstantMessenger: " . $body;
    }
}