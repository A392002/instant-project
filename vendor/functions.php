<?php
//C:\xampp\htdocs\project_instant
define('MAIN_URL', 'http://localhost/instant-project/');

function base_url($var = null)
{
    return MAIN_URL . $var;
}



function redirect($var = null)
{

    echo "<script> location.replace('http://localhost/instant-project/$var')</script>";
}



function auth($rule_2 = null, $rule_3 = null, $rule_4 = null)
{
    // Check if 'auth_user' cookie exists and if 'auth' session key is set
    if (isset($_COOKIE['auth_user']) && isset($_SESSION['auth'])) {

        if ($_SESSION['auth']['role'] == 1 || $_SESSION['auth']['role'] == $rule_2 || $_SESSION['auth']['role'] == $rule_3 || $_SESSION['auth']['role'] == $rule_4) {
            // User is authorized, do nothing
        } else {
            // Redirect to 404 page if the user is not authorized
            redirect('erorr404.php');
        }
    } else {
        // Redirect to login page if the session or cookie is not set
        redirect('login.php');
    }
}

function textvald($var)
{
    $var=rtrim($var);
    $var=ltrim($var);
    $var=strip_tags($var);
    $var=htmlspecialchars($var);
    $var=stripslashes($var);

    return $var;

}

function stringvald($var ,$maxlen=25,$minlen=5)
{
    
$isempty=empty($var);
$bigthan= strlen($var)>$maxlen;
$smallthan= strlen($var)<$minlen;


    if($isempty || $bigthan || $smallthan)
    {
        return true;
    } else
    {
        return false;
    }


}

function emailvald($var,$maxlen=25,$minlen=5){

    $isempty=empty($var);
    $bigthan= strlen($var)>$maxlen;
    $smallthan= strlen($var)<$minlen;
    $isnoteamil=!filter_var($var,FILTER_VALIDATE_EMAIL);
    
        if($isempty || $bigthan || $smallthan || $isnoteamil)
        {
            return true;
        } else
        {
            return false;
        }


}
