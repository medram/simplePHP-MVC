<?php
/**
* Desc: principal functions here to medram (bootstrap) to work
*
*/



/**
function load_file ($file_path)
{
    if (file_exists($file_path))
    {
        return require_once $file_path;
    }
    else
    {
        // file not found
        // log_error();
    }
}

*/

// set the enviroment of the project
function set_environment ()
{
    switch (ENVIRONMENT)
    {
        case 'development':
                // show all errors
                error_reporting(-1);
                @ini_set('display_errors',1);
                @ini_set('error_reporting',E_ALL);
            break;
        case 'product':
                // hide all errors
                error_reporting(0);
                @ini_set('display_errors',0);
                @ini_set('error_reporting',0);
            break;
        default:
            // show all errors
            // E_ALL & ~E_ERROR & ~E_WARNING & ~E_NOTICE
            error_reporting(E_ALL);
    }
}

if ( ! function_exists("custom_err"))
{
    //set_error_handler('custom_err');
    function custom_err ($errno,$errMsg,$errFile,$errLine)
    {
        // define('ENVIRONMENT','development');
        if (ENVIRONMENT == 'development')
        {
            echo '<br><pre>';
            echo '<b>Error type: </b>'.mapErrorCode($errno).'<br>';
            echo '<b>Error massage:</b> '.$errMsg.'<br>';
            echo '<b>File:</b> '.$errFile.'</b><br>';
            echo '<b>line:</b> '.$errLine.'<br></pre><br>';
            //die();
        }
    }



}

function mapErrorCode($code) {
    $error = $log = null;
    switch ($code) {
        case E_PARSE:
        case E_ERROR:
        case E_CORE_ERROR:
        case E_COMPILE_ERROR:
        case E_USER_ERROR:
            $error = 'Fatal Error';
            $log = LOG_ERR;
            break;
        case E_WARNING:
        case E_USER_WARNING:
        case E_COMPILE_WARNING:
        case E_RECOVERABLE_ERROR:
            $error = 'Warning';
            $log = LOG_WARNING;
            break;
        case E_NOTICE:
        case E_USER_NOTICE:
            $error = 'Notice';
            $log = LOG_NOTICE;
            break;
        case E_STRICT:
            $error = 'Strict';
            $log = LOG_NOTICE;
            break;
        case E_DEPRECATED:
        case E_USER_DEPRECATED:
            $error = 'Deprecated';
            $log = LOG_NOTICE;
            break;
        default :
            break;
    }
    return $error;
}

function log_error($msg,$kill=true)
{
    echo $msg;
    if ($kill)
    {
        die() or exit();
    }
}

?>