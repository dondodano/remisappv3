<?php
/**
 * File location
 */
function getFileFullLocation($fileName)
{
    return realpath(public_path() . '/storage'. '/'.  $fileName);
}

function getFileShortLocation($fileName)
{   if(file_exists(realpath(public_path() . '/storage'. '/'.  $fileName)))
    {
        return '/storage'. '/'.  $fileName;
    }
    return '/storage/images/default_logo.png';
}

/**
 * Get Quarter
 */
function getQuarter($perMonths = 3)
{
    return ceil(date('m', time()) / $perMonths);
}

/**
 * Session Current Quarter and Year
 */
function getQuarterSuffix()
{
    return [
        '1' => 'st',
        '2' => 'nd',
        '3' => 'rd',
        '4' => 'th'
    ];
}

/**
 * Date
 */
function setDate($date, $format = 'Y-m-d'){
    return date($format, strtotime($date));
}

function setToday($format = "Y-m-d")
{
    return now()->format($format);
}

function setTimestamp()
{
    return setDate(setToday(),'Y-m-d H:i:s');
}

/**
 * Currency Format
 */
function currencyFormat($num)
{
    return is_numeric($num) ? number_format($num, 2, '.', ',') : $num;
}

function setCurrency($val){
    if(empty($val) == false){
        if(is_numeric($val))
        {
            return currencyFormat($val);
        }else{
            return $val;
        }
    }else{
        return $val;
    }
}

/**
 * Generate Random String
 */
function randomStr($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/**
 * Session
 */
function sessionSet($key, $val)
{
    if(gettype($key) == 'array')
    {
        if(count((array)$key) > 0)
        {
            foreach($key as $index => $value)
            {
                session([
                    $index => $value
                ]);
            }
        }
    }else{
        session([
            $key =>  $val
        ]);
    }

}

function sessionForget($key)
{
    if(gettype($key) == 'array')
    {
        foreach($key as $each_key)
        {
            session()->forget($each_key);
        }
    }else{
        session()->forget($key);
    }
}

function sessionGet($key)
{
    return session()->get($key);
}

function sessionHas($key)
{
    return session()->has($key);
}

/**
 * Generate Series No
 */
function seriesNo($endnumber, $series = '0000')
{
    $newseries = '';
    if(strlen($endnumber) <= strlen($series)){
        $newseries = substr($series, 0, (strlen($series) - strlen($endnumber)) ) . $endnumber;
    }else{
        $diff = (strlen($endnumber) - strlen($series));
        for($i=0; $i<=$diff; $i++){
            $series .= '0';
        }
        $newseries = substr($series, 0, (strlen($series) - strlen($endnumber)) ) . $endnumber;
    }
    return $newseries;
}

/**
 * Concatination
 */
function concat($separator, $array)
{
    $string = '';

    $subIndex =  $separator != null || strlen($separator) > 0 ? 1: 0;

    if(gettype($array) === 'array')
    {
        foreach($array as $item)
        {
            $string .= $item . $separator;
        }
    }
	$string = substr($string, 0, (strlen($string) - $subIndex));
    return $string;
}

/**
 * Convert to String
 */
function toStr($string)
{
    if(gettype($string) == 'integer')
    {
        return empty($string) == false ? strval($string) : "0";
    }else if(gettype($string) == 'double')
    {
        return empty($string) == false ? strval($string) : "0.00";
    }

}

/**
 * File
 */
function getFileName($fileName)
{
    return pathinfo($fileName)['filename'];
}

function getFileSize($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

function getFileExtension($fileName)
{
    return pathinfo($fileName)['extension'];
}

function removeFileExtension($filename)
{
    return preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
}


/**
 * Shorten String
 */
function shorten($str, $limit = 30)
{
    $string = strip_tags($str);
    if (strlen($string) > $limit) {

        $stringCut = substr($string, 0, $limit);
        $endPoint = strrpos($stringCut, ' ');

        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= '...';
    }
    return $string;
}


/**
 * Show Elapse Time
 */
function elapse($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full)
    {
        $string = array_slice($string, 0, 1);
    }
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

/**
 * Maintenance
 */
function setMaintenance()
{
    $path = storage_path('framework/') .'poop';
    writeFile($path,'true');
}

function isMaintenance()
{
    $bool = false;
    if(file_exists( storage_path('framework/') . 'poop'))
    {
        $bool = true;
    }
    return $bool;
}

function liftMaintenance()
{
    $path = storage_path('framework/') . 'poop';
    if(file_exists($path ))
    {
        unlink($path);
    }
}

/**
 * Write File
 */
function writeFile($filePath, $contents)
{
    try{

        $file = fopen($filePath, "w");
        fwrite($file, $contents );
        fclose($file);

    }catch(Exception $e)
    {
        report($e);
    }

}

/**
 * URL Segment
 */
function urlSegment()
{
    return array_reverse((array)explode('/', strtolower(getSegmentsURL())));
}

function getSegmentsURL()
{
    $set_url = "";
    $limiter = 3;
    $newstring = "";

    if (count(request()->segments()) > 0 ){
        for ($i=count(request()->segments()); $i>=0;$i--){
            $set_url .= Str::upper(request()->segment($i)) . "/";
        }

        $set_url = substr($set_url,0, strlen($set_url)-2);
        $newstring = $set_url;
    }
    return $newstring;
}

/**
 * URL Case
 */
function urlCase($url)
{
    if(strlen($url) <= 3)
    {
        return strtoupper($url);
    }else{
        return ucfirst(strtolower($url));
    }
}

/**
 * Check if base64
 */
function isBase64($s)
{
    // Check if there are valid base64 characters
    if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s)) return false;

    // Decode the string in strict mode and check the results
    $decoded = base64_decode($s, true);
    if(false === $decoded) return false;

    // Encode the string again
    if(base64_encode($decoded) != $s) return false;

    return true;
}

/**
 * Sidebar Active
 */
function activeSide($current)
{
    if(gettype($current) == 'array')
    {
        foreach($current as $each)
        {
            if(in_array($each,request()->segments()) ){
                return ' active';
            }
        }
    }else{
        if(in_array($current,request()->segments()) ){
            return ' active';
        }
    }
}

/**
 * Sidebar Open Side
 */
function openSide($menu)
{
    foreach($menu as $each)
    {
        if(in_array($each,request()->segments()) ){
            return 'active open';
        }
    }
}

/**
 * Tokenized
 */
function token()
{
    return time() . date('Ymdhis');
}

/**
 * Name
 */
function initialName()
{
    $name = (array)sessionGet('name_array');

    $firstName = isset($name['firstname']) ? $name['firstname'][0] : 'Temp';
    $middleName = isset($name['middlename']) ? (strlen($name['middlename']) > 1 ? $name['middlename'][0].'. ' :  '') : '';
    $lastName = isset($name['lastname']) ? $name['lastname'] : 'Name';

    return $firstName . '. '.$middleName.' '. $lastName;
}

/**
 * Get First Letter
 */
function getFirstLettersOfName($firstname, $lastname)
{
    return strtoupper($firstname[0] . $lastname[0]);
}

/**
 * Middle Initial of Name
 */
function getMiddleInitial($middlename)
{
    return strlen($middlename) > 0 ? strtoupper($middlename[0]).'.' : "";
}

/**
 * User Full Name
 */
function fullName()
{
    $name = (array)sessionGet('name_array');

    return ucwords(
        concat(' ',[
            $name['firstname'],
            strlen($name['middlename']) > 1 ? $name['middlename'][0].'.' : "",
            $name['lastname']
        ])
    );
}

/**
 * Background Switch
 */
function bgSwitch($prefix = 'bg-label')
{
    $min = 0;
    $max = 6;
    $index = rand($min,$max);

    $color = [
        'primary',
        'secondary',
        'success',
        'danger',
        'warning',
        'info',
        'dark',
    ];

    return concat('-',[
        $prefix,
        $color[$index]
    ]);
}

/**
 * Temporary Avatar
 */
function avatar($size = "")
{
    $avatar = sessionGet('avatar');
    if(strlen($avatar) > 0 || $avatar != null)
    {
        return '<img src="'.getFileShortLocation($avatar).'" alt="Avatar" width="96"  />';
    }

    $temp_avatar = sessionGet('temp_avatar');
    if(strlen($temp_avatar) > 0 || $temp_avatar != null)
    {
        return avatarWrapper($temp_avatar, $size);
    }

    $firstName = isset(sessionGet('name_array')['firstname']) ? sessionGet('name_array')['firstname'] : 'Temp';
    $lastName = isset(sessionGet('name_array')['lastname']) ? sessionGet('name_array')['lastname'] : 'Name';

    return avatarWrapper('<span class="avatar-initial rounded-circle '.bgSwitch().'">'.getFirstLettersOfName( $firstName, $lastName).'</span>', $size);
}

function avatarWrapper($content , $size = "")
{
    return concat('',[
        '<div class="avatar-wrapper">',
        '<div class="avatar '.$size.' me-3">',
        $content,
        '</div>',
        '</div>'
    ]);
}

function avatarWrapperBg($userTempAvatar)
{
    return !empty($userTempAvatar) ? $userTempAvatar : bgSwitch();
}

/**
 * Empty Row
 */

function emptyEndRow($colSpan = 6)
{
    return concat("",[
            '<tr>',
            '<td valign="top" colspan="'.$colSpan.'" class="text-center bg-light">No data available in table</td>',
            '</tr>'
            ]);
}
