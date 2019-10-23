<?php

function init_msg(){
    $AccessToken ='8JylyVPskZ1lHFZmIjChyOClmjSkCH5g2EbjL6mKWiEraZnI7Pn2zf1JskQilnfGhGTmrUKa1nqDNZpEtG5QwsofNQ25c28xLHIWk/fd6mfUIUGawNaOaOaHPIqZeVK90UzMRyYqZjtyKDdC+b2Z/gdB04t89/1O/w1cDnyilFU=';

    return array(
        'Authorization: Bearer '.$AccessToken.'',
        'Content-Type:application/json'
        );
}

function log_print($data){
    $filestream = fopen("log","a");
    fwrite($filestream, $data."\n" );
    fclose($filestream);
}

function flex_msg($message){
        /*
    $msg_contents = '{
                "type": "bubble",
                "hero": {
                  "type": "image",
                  "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
                  "size": "full",
                  "aspectRatio": "20:13",
                  "aspectMode": "cover",
                  "action": {
                    "type": "uri",
                    "uri": "http://linecorp.com/"
                  }
                }
              }';
    */
    $flex_msg = '{  
        "type": "flex",
        "altText": "this is a flex message",
        "contents": '.$message.'
      }';
    $com_message = '{  "messages":[ 
    '.$flex_msg.'
    ] }';
    return $com_message;
}

function send_broadcast_flex_msg($message){
    $message = flex_msg($message);
    $headers =  init_msg();

    $ch = curl_init();

        // 푸시 내용, data 부분을 자유롭게 사용해 클라이언트에서 분기할 수 있음.
    /*
    $arr = array();
    $arr['messages'] = array();
	$arr['messages'][0]['type'] = "text";
    $arr['messages'][0]['text'] = "test1";
    $arr['messages'][1]['type'] = "text";
    $arr['messages'][1]['text'] = "test2";
    */
    //$arr = '{"messages":[{"type":"text","text":"test1"}] }';
    //$arr = '{ "messages":["type": "bubble",  "hero": {    "type": "image",    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",    "size": "full",    "aspectRatio": "20:13",    "aspectMode": "cover",    "action": {      "type": "uri",      "uri": "http://linecorp.com/"    }  },  "body": {    "type": "box",    "layout": "vertical",    "contents": [      {        "type": "text",        "text": "Brown Cafe",        "weight": "bold",        "size": "xl"      },      {        "type": "box",        "layout": "baseline",        "margin": "md",        "contents": [          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"          },          {            "type": "text",            "text": "4.0",            "size": "sm",            "color": "#999999",            "margin": "md",            "flex": 0          }        ]      },      {        "type": "box",        "layout": "vertical",        "margin": "lg",        "spacing": "sm",        "contents": [          {            "type": "box",            "layout": "baseline",            "spacing": "sm",            "contents": [              {                "type": "text",                "text": "Place",                "color": "#aaaaaa",                "size": "sm",                "flex": 1              },              {                "type": "text",                "text": "Miraina Tower, 4-1-6 Shinjuku, Tokyo",                "wrap": true,                "color": "#666666",                "size": "sm",                "flex": 5              }            ]          },          {            "type": "box",            "layout": "baseline",            "spacing": "sm",            "contents": [              {                "type": "text",                "text": "Time",                "color": "#aaaaaa",                "size": "sm",                "flex": 1              },              {                "type": "text",                "text": "10:00 - 23:00",                "wrap": true,                "color": "#666666",                "size": "sm",                "flex": 5              }            ]          }        ]      }    ]  },  "footer": {    "type": "box",    "layout": "vertical",    "spacing": "sm",    "contents": [      {        "type": "button",        "style": "link",        "height": "sm",        "action": {          "type": "uri",          "label": "CALL",          "uri": "https://linecorp.com"        }      },      {        "type": "button",        "style": "link",        "height": "sm",        "action": {          "type": "uri",          "label": "WEBSITE",          "uri": "https://linecorp.com"        }      },      {        "type": "spacer",        "size": "sm"      }    ],    "flex": 0  }}]}';

    
    curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/broadcast');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$message);



    $response = curl_exec($ch);
    echo $response;

    curl_close($ch);
}

function send_reply_text_msg($replyToken, $message){
    //$message = flex_msg($message);
    $headers =  init_msg();

    $ch = curl_init();

        // 푸시 내용, data 부분을 자유롭게 사용해 클라이언트에서 분기할 수 있음.
    /*
    $arr = array();
    $arr['messages'] = array();
	$arr['messages'][0]['type'] = "text";
    $arr['messages'][0]['text'] = "test1";
    $arr['messages'][1]['type'] = "text";
    $arr['messages'][1]['text'] = "test2";
    */
    //$arr = '{"messages":[{"type":"text","text":"test1"}] }';
    //$arr = '{ "messages":["type": "bubble",  "hero": {    "type": "image",    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",    "size": "full",    "aspectRatio": "20:13",    "aspectMode": "cover",    "action": {      "type": "uri",      "uri": "http://linecorp.com/"    }  },  "body": {    "type": "box",    "layout": "vertical",    "contents": [      {        "type": "text",        "text": "Brown Cafe",        "weight": "bold",        "size": "xl"      },      {        "type": "box",        "layout": "baseline",        "margin": "md",        "contents": [          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"          },          {            "type": "icon",            "size": "sm",            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"          },          {            "type": "text",            "text": "4.0",            "size": "sm",            "color": "#999999",            "margin": "md",            "flex": 0          }        ]      },      {        "type": "box",        "layout": "vertical",        "margin": "lg",        "spacing": "sm",        "contents": [          {            "type": "box",            "layout": "baseline",            "spacing": "sm",            "contents": [              {                "type": "text",                "text": "Place",                "color": "#aaaaaa",                "size": "sm",                "flex": 1              },              {                "type": "text",                "text": "Miraina Tower, 4-1-6 Shinjuku, Tokyo",                "wrap": true,                "color": "#666666",                "size": "sm",                "flex": 5              }            ]          },          {            "type": "box",            "layout": "baseline",            "spacing": "sm",            "contents": [              {                "type": "text",                "text": "Time",                "color": "#aaaaaa",                "size": "sm",                "flex": 1              },              {                "type": "text",                "text": "10:00 - 23:00",                "wrap": true,                "color": "#666666",                "size": "sm",                "flex": 5              }            ]          }        ]      }    ]  },  "footer": {    "type": "box",    "layout": "vertical",    "spacing": "sm",    "contents": [      {        "type": "button",        "style": "link",        "height": "sm",        "action": {          "type": "uri",          "label": "CALL",          "uri": "https://linecorp.com"        }      },      {        "type": "button",        "style": "link",        "height": "sm",        "action": {          "type": "uri",          "label": "WEBSITE",          "uri": "https://linecorp.com"        }      },      {        "type": "spacer",        "size": "sm"      }    ],    "flex": 0  }}]}';
    $send_text = '{    "replyToken":"'.$replyToken.'",    "messages":[        {            "type":"text",            "text":"'.$message.'"        }    ]}';
    
    curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/reply');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$send_text);


    $response = curl_exec($ch);
    echo $response;

    curl_close($ch);
}
?>