<?php

namespace app\models;

use Yii;

class TelegramBot{
    private $token;
    private $url_web_hook;
    

    function __construct($token){
        $this->token=$token;
    }

    private function open_url($url, $method="GET", $data=null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if($method==="POST"){
            if(isset($data)){
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                
            }
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        return curl_exec($ch);
    }

    private function control_api($action, $data=NULL){
        $token = $this->token;
        $response = json_decode($this->open_url("https://api.telegram.org/bot$token$action", "POST", $data));
        return $response;
    }

    public function status(){
        $response = $this->control_api("/getme");
        return($response);
    }

    public function get_updates(){
        $response = $this->control_api("/getUpdates");
        return($response);
    }

    public function send_action($to, $action){
        $data = array();
        $data["chat_id"]=$to;
        $data["action"]=$action;
        $response = $this->control_api("/sendChatAction", $data);
        
        return $response;
    }

    public function send_message($to, $msg, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        $data["text"]=$msg;
        $data["disable_web_page_preview"]="true";
        if(isset($id_msg))
            $data["reply_to_message_id"]=$id_msg;
        if(isset($reply))
            $data["reply_markup"]=$reply;
        $response = $this->control_api("/sendMessage", $data);
        return $response;
    }

    public function send_location($to, $lat, $lon, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        $data["latitude"]=$lat;
        $data["longitude"]=$lon;
        if(isset($id_msg))
            $data["reply_to_message_id"]=$id_msg;
        if(isset($reply))
            $data["reply_markup"]=$reply;
        $response = $this->control_api("/sendLocation", $data);
        
        return $response;
    }

    public function send_sticker($to, $sticker, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        if(file_exists($sticker))$sticker="@".$sticker;
        $data["sticker"]=$sticker;
        if(isset($id_msg))
            $data["reply_to_message_id"]=$id_msg;
        if(isset($reply))
            $data["reply_markup"]=$reply;
        $response = $this->control_api("/sendSticker", $data);
        
        return $response;
    }

    public function send_video($to, $video, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        if(file_exists($video))$video="@".$video;
        $data["video"]=$video;
        if(isset($id_msg))
            $data["reply_to_message_id"]=$id_msg;
        if(isset($reply))
            $data["reply_markup"]=$reply;
        $response = $this->control_api("/sendVideo", $data);
        return $response;
    }

    public function send_photo($to, $photo, $caption=null, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        
        if(file_exists($photo))$photo="@".$photo;
        $data["photo"]=$photo;
        if(isset($caption)){
            $data["caption"]=$caption;
        }
        if(isset($id_msg)){
            $data["reply_to_message_id"]=$id_msg;
        }
        if(isset($reply))
            $data["reply_markup"]=$reply;
            
        $response = $this->control_api("/sendPhoto", $data);
        
        return $response;
    }

    public function send_audio($to, $audio, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        
        if(file_exists($audio))$audio="@".$audio;
        $data["audio"]=$audio;
        if(isset($id_msg)){
            $data["reply_to_message_id"]=$id_msg;
        }
        if(isset($reply))
            $data["reply_markup"]=$reply;
            
        $response = $this->control_api("/sendAudio", $data);
        
        return $response;
    }

    public function send_document($to, $document, $id_msg=null, $reply=null){
        $data = array();
        $data["chat_id"]=$to;
        
        if(file_exists($audio))$document="@".$audio;
        $data["document"]=$document;
        if(isset($id_msg)){
            $data["reply_to_message_id"]=$id_msg;
        }
        if(isset($reply))
            $data["reply_markup"]=$reply;
            
        $response = $this->control_api("/sendDocument", $data);
        
        return $response;
    }

    public function forward_message($to, $from, $msg_id){
        $data = array();
        $data["chat_id"]=$to;
        $data["from_chat_id"]=$from;
        $data["message_id"]=$msg_id;
        $response = $this->control_api("/forwardMessage", $data);
        
        return $response;
    }
    
    public function set_webhook($url=null){
        $data = array();
        $data["url"]=$url;
        $response = $this->control_api("/setWebhook", $data);
        
        return $response;
    }
    
    public function get_user_profile_photos($id_user, $offset=null, $limit=null){
        $data = array();
        $data["user_id"]=$id_user;
        if(isset($offset)){
            $data["offset"]=$offset;
        }
        if(isset($limit)){
            $data["limit"]=$limit;
        }
        
        $response = $this->control_api("/getUserProfilePhotos", $data);
        
        return $response;
    }
    
    public function read_post_message(){
        // retrieve the request's body and parse it as JSON
        $body = @file_get_contents('php://input');
        $event_json = json_decode($body);
                return $event_json;
    }
        

}