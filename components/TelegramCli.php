<?php 
/**
 * This class is used to connect to the BotFather to create and administrate bots.
 */	
class TelegramCli{
	private $command;
	
	function __construct($token){
		$this->command=$token;
	}

	private function create_bot($url, $method="GET", $data=null){
		return exec(command);
	}

	/* Exec a command to the Bot Father under the telegram cli */
	private function exec_command($msg, $BotFather, $command){
		$custom_command = "(echo \"$msg $BotFather\" \"$command\"; echo \"safe_quit\") | bin/telegram-cli -k tg-server.pub -W";
		exec($custom_command);
	}

	/* Add phone number */
	private function exec_command($phonenumber){
		$custom_command = "(echo \"$phonenumber\"; echo \"safe_quit\") | bin/telegram-cli -k tg-server.pub -W";
	}

}