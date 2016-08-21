<?php
Twig_Autoloader::register();

class Template {
    public static function render($templatePath, $arr = array())
    {
        $loader = new Twig_Loader_Filesystem(ROOT.'/views/templates');
        $twig = new Twig_Environment($loader);

        $template = $twig->loadTemplate($templatePath);

        echo $template->render($arr);

        return true;
    }
}