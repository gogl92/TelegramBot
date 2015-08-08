SUOI'S TELEGRAM BOT SDK TUTORIAL
============================

In this tutorial you'll learn, how to configure your bot and connect them to the database for graphic mode.

Definiciones:
Bot: Web service que envia por post lo que los mensajes le mandan y recibe por get/post lo que los
Apis: Funciones, clases, servicos etc. de tercera o segunda fiesta que nos ayudan a realizar una tarea en específico.

Alcances:
1. Configuración y guardado de credenciales de un bot en la base de datos.
2. Conexión del bot con el que podrá enviar mensajes a un usuario de la tabla de usuarios.
3. Envío de cualquier archivo del bot a el usuario. 
4. Recepción de mensajes del usuario y guardado en la bd.
5. Posibilidad de enviar mensajes en un momento determinado de tiempo, los mensajes serán leidos desde la base de datos.
6. Descripción de Forms:

Form de reglas simples (simple rules) siguiente:
command ---> List of commands, populated from the command list. ->List
Recieved message-> ________________ There will appear a suggest list from the table recieved___messages. ->TextBox with suggestions.
Tipo -------> Equals different containts < > >= <= between (Fileds text popup).
Action ------> Send message (Text field pops up), Send file (File fild pops up) -> List with actions
id_next_rule ---> list with none for default.
Reglas para mensajes de texto.

Form de reglas complejas(Complex rules):
File(List will appear: File,Audio, Image, Video, Sticker Location AND Max );
Action ------> Send message (Text field pops up), Send file (File fild pops up) -> List with actions
id_next_rule ---> list with none for default.
Reglas para archivos.


Form de apis:
Api name:
Api description:
Company:
Version:
Oaut: ? (true, false)
key1
key2 //Hashes or keys that can be used by the api
key3
key4

Form de api_action:
Api_id -> id_api 
Action -> Api command, and extras.
Rule -> id_simple or id_complex.

---
/Commands are:
Commands present a more flexible way to communicate with your bot. The following syntax may be used:

/command [optional] [argument]
A command must always start with the ‘/’ symbol and may not be longer than 32 characters. Commands can use latin letters, numbers and underscores. Here are a few examples:

/get_messages_stats
/set_timer 10min Alarm!
/get_timezone London, UK
Form de commands:
command_name
value
arguments

---
Tabla de Aplicación: This table will let the application to be registered as a new Telegram api, so the application can commmunicate with the bothefather to configure and create bots, and also can download files that users sends to the bot.
application_name
key_application
hash_application
...

---
Yii Users table: this table will need to have the fields that the users table has in yii applications but also has to be linked to the cellphone to let the application manage their bots.
(all common yii fields)
(Cellphone)

---
Form de api_action:
Api_id -> id_api
Action -> Api command, and extras.
Rule -> id_simple or id_complex.

---
Form de acciones: (solo se puede seleccionar una de las siguientes acciones)
Text -> Text (Text Field)
File(List will appear: File,Audio, Image, Video, Sticker, Location, etc);

