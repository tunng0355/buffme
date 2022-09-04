<?php

namespace  tungmmo\api;

class Buffme
{
    public static $apikey;
    public static $domain;

    public static $url;
    public static $header;
    public static $cookie;

    static public function curl($path, $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, static::$url . $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, static::$cookie);
        curl_setopt($ch, CURLOPT_HTTPHEADER, static::$header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function apikey($apikey)
    {
        static::$apikey = $apikey;
    }

    public function domain($domain)
    {
        static::$domain = $domain;
    }

    static public function run($theloai, $dichvu, $data)
    {

        if (static::$domain == 'subgiare.vn') :

            static::$url = "https://thuycute.hoangvanlinh.vn/api/service/";
            static::$header = ['api-token:' . static::$apikey];
            static::$cookie = null;
            if ($theloai == 'facebook') :

                switch ($dichvu):

                    case 'like-post-sale':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_post' => $data['uid'],
                            'reaction' => $data['reaction'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'like-post-speed':
                        return static::curl("$theloai/$dichvu/order", [
                            'idpost' => $data['uid'],
                            'reaction' => $data['reaction'],
                            'server_order' => $data['server'],
                            'speed' => $data['speed'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'like-comment':
                        return static::curl("$theloai/$dichvu/order", [
                            'idcomment' => $data['uid'],
                            'reaction' => $data['reaction'],
                            'server_order' => $data['server'],
                            'speed' => $data['speed'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'comment-sale':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_post' => $data['uid'],
                            'server_order' => $data['server'],
                            'comment' => $data['comment'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'comment-speed':
                        return static::curl("$theloai/$dichvu/order", [
                            'idpost' => $data['uid'],
                            'server_order' => $data['server'],
                            'comment' => $data['comment'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub-quality':
                        return static::curl("$theloai/$dichvu/order", [
                            'idfb' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub-sale':
                        return static::curl("$theloai/$dichvu/order", [
                            'idfb' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub-speed':
                        return static::curl("$theloai/$dichvu/order", [
                            'idfb' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub-vip':
                        return static::curl("$theloai/$dichvu/order", [
                            'idfb' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub-speed':
                        return static::curl("$theloai/$dichvu/order", [
                            'idpage' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;


                    case 'like-page-quality':
                        return static::curl("$theloai/$dichvu/order", [
                            'idpage' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'like-page-sale':
                        return static::curl("$theloai/$dichvu/order", [
                            'idpage' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;


                    case 'like-page-speed':
                        return static::curl("$theloai/$dichvu/order", [
                            'idpage' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;
                    default:
                        return false;
                        break;
                endswitch;

            elseif ($theloai == 'instagram') :
                switch ($dichvu):

                    case 'like-post':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_post' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub':
                        return static::curl("$theloai/$dichvu/order", [
                            'username' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;
                    default:
                        return false;
                        break;
                endswitch;
            elseif ($theloai == 'tiktok') :
                switch ($dichvu):

                    case 'like':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_video' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'comment':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_video' => $data['uid'],
                            'comment'    => $data['comment'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'share':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_video' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                    case 'sub':
                        return static::curl("$theloai/$dichvu/order", [
                            'username' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                        ]);
                        break;


                    case 'view':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_video' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;
                    default:
                        return false;
                        break;
                endswitch;
            elseif ($theloai == 'youtube') :
                switch ($dichvu):

                    case 'like':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_video' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;

                endswitch;
            elseif ($theloai == 'twitter') :
                switch ($dichvu):

                    case 'like':
                        return static::curl("$theloai/$dichvu/order", [
                            'link_post' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                            'note' => $data['note']
                        ]);
                        break;
                    case 'sub':
                        return static::curl("$theloai/$dichvu/order", [
                            'username' => $data['uid'],
                            'server_order' => $data['server'],
                            'amount' => $data['amount'],
                        ]);
                        break;
                    default:
                        return false;
                        break;

                endswitch;
            else :
                return false;
            endif;
        elseif (static::$domain == 'submeta.vn') :

            static::$url = "https://submeta.vn/api/";
            static::$cookie = 'Authorization=' . static::$apikey;

            return static::curl("$theloai/$dichvu", [
                'objectId' => $data['uid'],
                'raw_link' => null,
                'nameServer' => $data['server'],
                'amount' => $data['amount'],
                'comment' => $data['comment'],
                'discount_code' => null
            ]);

        elseif (static::$domain == 'baostar.pro') :
        else:

            return false;
        endif;
    }
}

// $Buffme = new Buffme;
// $Buffme->domain('subgiare.vn');
// $Buffme->apikey('eyJpdiI6IkRlY3BESGpZd2tTTzdiSGhZemJDT1E9PSIsInZhbHVlIjoiMmdKQ3c2SldLcVVSQW0xRnY1cE1lZE12ZkFRTVVNbjUwVDVFaFdEVTUvcDh5MU1wVkNTT1lFVFhTQ3V4dzBic3VKdjdhK2pmMXN5VndRcWZ6WUFVU0FkT0xCa1ZtS1Y1OC9QMytNcUJkVXlxK0orOXQyMkdCckJKM1ZtZGJyMFA5cFl0ekxlb0Z4YTNVdWNUZmkvS0NnPT0iLCJtYWMiOiJmYWM1MTVlZGU2ZmRiNmExMDEyMGEwMTM0YzdmYTUxM2Y0NmJmZjdlZTE0ZmU3YzliMGI2NjdiODQ0MmEwZTVlIiwidGFnIjoiIn0=');
// echo json_decode(Buffme::run('facebook', 'sub-vip', ['uid' => '100030199396627', 'server' => 'sv1', 'amount' => '10000', 'note' => null]))->message;
