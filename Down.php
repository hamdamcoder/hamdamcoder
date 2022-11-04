<?php
$token = "5718436958:AAEJjv1_PosTYG4JKWj0BII2taJH0Hvo2Xg";
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 
function firdavs($method,$datas=[]){
 global $token;
    $url = "https://api.telegram.org/bot$token/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function dirs($dir){

 if(is_dir($dir)){
}else{

  return mkdir($dir);

 }

}



function contentectToArrays($contentect)
    {
        if (!is_contentect($contentect) && !is_array($contentect)) {
            return $contentect;
        }
        if (is_contentect($contentect)) {
            $contentect = get_contentect_vars($contentect);
        }
        return array_map("contentectToArrays", $contentect);
    }///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 

$update      = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$cid  = $update->message->chat->id;
$fid  = $update->message->from->id;
$text  = $update->message->text;
$mid  = $update->message->message_id;
$name  = $update->message->from->first_name;
$message = $update->message;
}
///Include('panel.php');

if(isset($update->callback_query)){
  $cid = $update->callback_query->message->chat->id;
  $qid = $update->callback_query->id;
  $fid    = $update->callback_query->from->id;  
  $data      = $update->callback_query->data;  
  $miid = $update->callback_query->message->message_id;
}

$u = explode("n",file_get_contents("memb.txt"));
$c = count($u)-1;

if ($update and !in_array($cid, $u)) {
    file_put_contents("memb.txt", $cid."\n",FILE_APPEND);
  }
  
dirs("dirs");
dirs("baza");




$add = json_encode([
"inline_keyboard"=>[
[["text"=>"Поделиться с друзьями↗️","switch_inline_query"=>"hi"],],
]
]);

///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 
$ad1 = json_encode([
"inline_keyboard"=>[
[["text"=>"Добавить в группу➕","url"=>"https://t.me/effectus_downloader_bot?startgroup=new"],],
]
]);

///`Пришлите мне ссылку на видео!`

if(mb_stripos($text,"/help") !== false){ 
firdavs("sendMessage",[
    "chat_id"=>$cid,
    "text"=>"Команды:
<i>🔹 /start - Запустить или перезапустить бота.
🔹 /help - Информация.</i>\n
🔻Функции:
<u>▪️Cкачивать видео, фотографии,  ссылок из социальной сети Instagram.
▪️Cкачивать видео из социальной сети TikTok без водяного знака.
▪️Скачивать видео из YouTube в выбранном пользователем формате.</u>
",
    "parse_mode"=>"html",
"reply_markup"=>$ad1,
]);
exit();
}
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 

if(mb_stripos($text,"/start") !== false){ 
firdavs("sendMessage",[
    "chat_id"=>$cid,
    "text"=>"
— 🇺🇿Привет! Могу ли я загружать видео и аудио из сети :\n<u>Instagram,Tik-Tok,YouTube! </u>\n/help - <u>Как использовать бота?</u>",
    "parse_mode"=>"html",
  ])->result->message_id;
firdavs("sendMessage",[
    "chat_id"=>$cid,
    "text"=>"
📥 Хотя автор *видео* запретил мне загружать его в приложение, я могу загрузить видео без водяных знаков.

*🎵 Любишь музыку?*- Я выложу в удобном для вас формате.


_Для начала пришлите мне ссылку на нужное вам видео..._


*@arabicsheikh*",
"reply_to_message_id"=>$up, 
    "parse_mode"=>"markdown",
"reply_markup"=>$ad1,
  ]);
exit();
 }

///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 


/////down
if($text) {
if ((mb_stripos($text,"http://www.youtube.com/")!==false) or (mb_stripos($text,"https://youtu.be/")!==false) or (mb_stripos($text,"instagram.com")!==false) or (mb_stripos($text,"tiktok")!==false)){
firdavs("deletemessage", [
"chat_id"=>$cid,
"message_id"=>$mid, 
]);
firdavs("SendMessage", [
"chat_id"=>$cid, 
"text"=>"*⌛| Подождите...*", 
"parse_mode"=>"markdown", 
])->result->message_id;
sleep(2);
$a=json_decode(file_get_contents("http://coderoff.uzxost.ru/Dowlander/Down.php?url=$text"),true);
$video=$a["url"][0]["url"];
$music=$a["url"][1]["url"];
$title=$a["meta"]["title"];
$rasmi=$a["thumb"];
firdavs("editmessageText", [
"chat_id"=>$cid,
"message_id"=>$mid+1, 
"text"=>"🔎", 
])->result->message_id;
sleep(2);
firdavs("editmessageText", [
"chat_id"=>$cid,
"message_id"=>$mid+1, 
"text"=>"✅ | Пожалуйста! 10 - секунд!", 
])->result->message_id;
sleep(4);
firdavs("deletemessage", [
"chat_id"=>$cid,
"message_id"=>$mid+1, 
]);
$yuklanagan = file_get_contents("down.txt");
$miqdor = $yuklanagan +1;
file_put_contents("down.txt",$miqdor);
 firdavs("sendVideo",[
"chat_id"=>$cid,
"video"=>$video, 
"caption"=>"✅ | <i>$text</i>  \n
🎬 | <i>$title</i>\n\n📁 | <u>Загружено: @effectus_downloader_bot 
</u>", 
"parse_mode"=>"html", 
"reply_markup"=>$add,
])->result->message_id;
firdavs("sendaudio",[
"chat_id"=>$cid,
"audio"=>$music, 
"caption"=>"✅ | <i>$text</i>  \n
🎬 | <i>$title</i>\n\n📁 | <u>Загружено: @effectus_downloader_bot 
</u>", 
"parse_mode"=>"html", 
"reply_markup"=>$add,
])->result->message_id;
firdavs("sendphoto",[
"chat_id"=>$cid,
"photo"=>$rasmi, 
"caption"=>"✅ | <i>$text</i>  \n
🎬 | <i>$title</i>\n\n📁 | <u>Загружено: @effectus_downloader_bot 
</u>", 
"parse_mode"=>"html", 
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"Поделиться с друзьями↗️","switch_inline_query"=>"hi"],],
]
]),
]);
 }
}
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 


$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;

if($inlineid !== null){
firdavs('answerInlineQuery',[
    'inline_query_id'=>$inline_id,
    'cache_time'=>1,
    'results'=>json_encode([
    ['type'=>'article',
    'id'=>1,
    'title'=>"⬇️Скачать видео⬇️",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"🔥 | <i>Загрузите аудио и видео за несколько секунд из социальной сети :</i>
 
<u>Instagram,Tik-Tok,YouTube!</u>

🔎 | Бот - @effectus_downloader_bot",
    ],
    'reply_markup'=>[
     'inline_keyboard'=>[
     [['text'=>"⬇️Скачать видео⬇️",'url'=>"https://t.me/effectus_downloader_bot?start="]]
     ]
     ]
     ],
])
]);
exit();
}
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 





///panelll





///panla
$update = json_decode(file_get_contents('php://input'));
$admin = "1495600314";
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$tx = $message->text;
$text= $message->text;
$ism = file_get_contents("Veb_code/$cid.ism");
$sguruhlar = file_get_contents("Stat/sguruh.dat");
$lichka = file_get_contents("Stat/lichka.dat");
$guruhlar = file_get_contents("Stat/guruh.dat");
$kanallar = file_get_contents("Stat/kanallar.dat");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$name = $message->chat->first_name;
$user = $message->from->username;
$soat = date('H•i', strtotime('2 hour'));
mkdir("Bot");
mkdir("Stat");
mkdir("Veb_code");

$adminpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔰 Azolarga Xabar"],['text'=>"🔰Azolarga forward"]],
[['text'=>"🔰 Guruhga Xabar"],['text'=>"🔰Guruhga forward"]],
[['text'=>"🔰 Shaxsiy Guruhlarga Xabar"]],
[['text'=>"🔰 Shaxsiy Guruhga forward"]],
[['text'=>"📊 Statistika"],['text'=>"Orqaga🔙"]],
]
]);



$ort = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Bekor qilish❌"]],
]
]);
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 

if($text=="/panel" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Panel ochildi!",
'reply_markup'=>$adminpanel,
]);
}





$lichka = file_get_contents("Stat/lichka.dat");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("Stat/lichka.dat","$lichka\n$cid");
}
}

$sguruhlar = file_get_contents("Stat/sguruh.dat");
if($type=="group"){
if(stripos($sguruhlar,"$cid") !==false){
}else{
file_put_contents("Stat/sguruh.dat","$sguruhlar\n$cid");
}
}
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 
$guruhlar = file_get_contents("Stat/guruh.dat");
if($type=="supergroup"){
if(stripos($guruhlar,"$cid") !==false){
}else{
file_put_contents("Stat/guruh.dat","$guruhlar\n$cid");
}
}

$kanallar = file_get_contents("Stat/kanallar.dat");
if($type=="channel"){
if(stripos($kanallar,"$cid") !==false){
}else{
file_put_contents("Stat/kanallar.dat","$kanallar\n$cid");
}
}



if($tx=="🔰Azolarga forward" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step","forward");
}

if($step=="forward" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step","");
}else{
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=firdavs('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarok){
$us = substr_count($lichka,"\n");
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $us ta bot a'zolariga yetkazildi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step","");
unlink("Bot/$cid.step","");
exit();
}


///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 


if($tx=="🔰Guruhga forward" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step","12");
}

if($step=="12" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step","");
}else{
$guruhlarim = explode("\n",$guruhlar);
foreach($guruhlarim as $guruhs){
$xabarokkk=firdavs('ForwardMessage',[
'chat_id'=>$guruhs,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarokkk){
$gr = substr_count($guruhlar,"\n");
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $gr ta ommaviy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step","");
unlink("Bot/$cid.step","");
exit();
}

if($tx=="🔰 Shaxsiy Guruhlarga forward" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step","forwardsgr");
}

if($step=="forwardsgr" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step","");
}else{
$sguruhlarim = explode("\n",$sguruhlar);
foreach($sguruhlarim as $sguruhs){
$sxabarokkk=firdavs('ForwardMessage',[
'chat_id'=>$sguruhs,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($sxabarokkk){
$sgr = substr_count($sguruhlar,"\n");
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $sgr ta shaxsiy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step","");
unlink("Bot/$cid.step","");
exit();
}


if($tx=="❌Bekor qilish" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"*❌ Xabar yuborish bekor qilindi✅*",
'parse_mode'=>'markdown',
'reply_markup'=>$adminpanel,
]);
}


///oddiy xabar
if($tx=="🔰 Azolarga Xabar" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step","oddiy");
}
///Ushbu kod @veb_code yani firdavsga ga tegishli roza oyi uchun sovg'a ! Mualiflik huquqi bor buzmaysiz degan umidaman ! Men kormasam xudo korb turibdilar !

///Tarqatildi @PhpUzKod va @firdavs2004 
///Hamkorimiz : @php_bot_kodlari ga raxmat 
if($step=="oddiy" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step","");
}else{
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=firdavs('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarok){
$us = substr_count($lichka,"\n");
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $us ta bot a'zolariga yetkazildi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step","");
unlink("Bot/$cid.step","");
exit();
}

///oddiy guruhga

if($tx=="🔰 Guruhga Xabar" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step","1202");
}

if($step=="1202" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step","");
}else{
$guruhlarim = explode("\n",$guruhlar);
foreach($guruhlarim as $guruhs){
$xabarokkk=firdavs('sendmessage',[
'chat_id'=>$guruhs,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarokkk){
$gr = substr_count($guruhlar,"\n");
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $gr ta ommaviy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step","");
unlink("Bot/$cid.step","");
exit();
}


///odiy shaxsiy guruhga

if($tx=="🔰 Shaxsiy Guruhlarga Xabar" and $cid==$admin){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ort,
]);
file_put_contents("Bot/$cid.step","forwardsgr1");
}

if($step=="forwardsgr1" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step","");
}else{
$sguruhlarim = explode("\n",$sguruhlar);
foreach($sguruhlarim as $sguruhs){
$sxabarokkk=firdavs('sendMessage',[
'chat_id'=>$sguruhs,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($sxabarokkk){
$sgr = substr_count($sguruhlar,"\n");
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $sgr ta shaxsiy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step","");
unlink("Bot/$cid.step","");
exit();
}



if($text == "📗 Statistika" and $cid==$admin) {
$yuklangan=file_get_contents("down.txt");
$date = date('d.m.Y - H:s a');
$gr = substr_count($guruhlar,"\n");
$lc = substr_count($lichka,"\n");
$sgr = substr_count($sguruhlar,"\n");
$kn = substr_count($kanallar,"\n");
$jami = $gr+$sgr+$lc;
firdavs('SendMessage',[
'chat_id'=>$cid,
parse_mode=>html, 
'text'=>"
⏳ | $date Vaqtiga ko'ra \n 🔰 Umumiy obunachilar: $lc ta
🔰 | Ommaviy guruhlar: $gr ta
🔰 | Shaxsiy guruhlar: $sgr ta
🔰 | Hammasi boʻlib: $jami ta
✅ | Yuklangan videolar : $yuklangan ta
💻Dasturchi: @arabicsheikh",
'parse_mode'=>'html',
]);
}





if($text=="🔙Orqaga"){
firdavs('sendmessage',[
'chat_id'=>$cid,
'text'=>"Panel yopildi :)",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
]);
}

///Manbaa qolsin dostlar 😅 

?>