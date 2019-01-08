<?php
class SMS implements Messenger
{
    public function send($body)
    {
        echo "SMS: " . $body;
    }
}