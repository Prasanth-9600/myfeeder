<?
    function load_template($name)
    {
       // include __DIR__."/../_templates/$name.php"; ==> this is also correct
        include $_SERVER["DOCUMENT_ROOT"]."/myfeeder/_templates/$name.php";//$_SERVER["DOCUMENT_ROOT"] contains root directory /var/www/html
    }

    function validate_credentials($username,$password)
    {
        if($username=="prasanth@gmail.com" && $password=="123")
        {
                  return true;
        }
        else
            return false;
    }

?>