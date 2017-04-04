<?php


/**
 *
 * @author 001305794
 */
interface IMessage {
    
      public function addMessage($key, $msg);
      public function removeMessage($key);
      public function getAllMessages();
    
}
