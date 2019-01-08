<?php

interface Transmitter

{
    public function setSender(Messenger $sender);

    public function send($body);

}