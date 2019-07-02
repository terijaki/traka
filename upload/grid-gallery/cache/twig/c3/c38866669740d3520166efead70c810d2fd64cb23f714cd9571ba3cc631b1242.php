<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_0c13df490983941de36dea60a73435884e1c679a8c71b64b540cf2b58050f57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'additionalGridGalleryClass' => array($this, 'block_additionalGridGalleryClass'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/shortcode/gallery.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("gallery", $context) &&  !twig_test_empty((isset($context["gallery"]) ? $context["gallery"] : null)))) {
            // line 4
            echo "\t";
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<div
\t\t";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 191
            echo ">

\t\t";
            // line 193
            if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "enabled", array()) == "true") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "enabled", array()) == null))) {
                // line 194
                echo "\t\t\t";
                if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "icon_name", array()) == "default") || ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "enabled", array()) == null))) {
                    // line 195
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 204
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 205
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "icon_name", array()), "html", null, true);
                    echo "\" style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "background", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 206
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "icon_items", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 207
                        echo "\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 212
                echo "\t\t";
            }
            // line 213
            echo "
\t\t";
            // line 214
            $this->displayBlock('photos_before', $context, $blocks);
            // line 216
            echo "
\t\t";
            // line 217
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "enabled", array())) {
                // line 218
                echo "            <div id=\"social-share-html\" style=\"display:none;\">
                ";
                // line 219
                echo $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "html", array());
                echo "
                ";
                // line 221
                echo "            </div>
        ";
            }
            // line 223
            echo "
        <div id=\"gallery-sharing-top\"></div>
\t\t<div
\t\t\t";
            // line 226
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 229
            echo ">

\t\t\t";
            // line 231
            $this->displayBlock('photos', $context, $blocks);
            // line 239
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</div>
        <div id=\"gallery-sharing-bottom\"></div>

\t\t<div class=\"grid-gallery-clearfix\"></div>

\t\t";
            // line 246
            $this->displayBlock('photos_after', $context, $blocks);
            // line 248
            echo "\t</div>
\t
\t<!-- Gallery by Supsystic plugin ";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            echo "  ";
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->
";
        }
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon:hover { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
            echo " .hi-icon { width: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
            echo " .hi-icon:before { font-size: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
            echo "px !important; line-height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "\"
\t\t\tdata-title=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array()), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "position", array()), "html", null, true);
        echo "\"
\t\t\tdata-icons=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\tdata-preloader = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\t";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 25
            echo " \t\t\t\tdata-width=\"auto\"
 \t\t\t";
        } else {
            // line 27
            echo " \t\t\t\tdata-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), "html", null, true);
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 1)) {
                echo "%";
            }
            echo "\"
 \t\t\t";
        }
        // line 29
        echo "\t\t\tdata-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "padding", array()), "html", null, true);
        echo "\"
\t\t\tdata-quicksand = \"";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand", array()), "enabled", array()) == "1")) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration = \"";
        // line 32
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand", array()), "duration", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "quicksand", array()), "duration", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"
\t\t\t\t";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "enabled", array()) == "false"))) {
            // line 34
            echo "\t\t\t\t\tdata-popup-type = \"disable\"
\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\tdata-popup-theme = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "theme", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true"))) {
            // line 39
            echo "\t\t\t\t\tdata-popup-type =\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut = \"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "fadeOut", array()), 300)) : (300)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true")) && ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 43
            echo "\t\t\t\t\tdata-popup-type = \"pretty-photo\"
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && ((isset($context["mobile"]) ? $context["mobile"] : null) != "true")) && ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 46
            echo "\t\t\t\t\tdata-popup-type = \"photobox\"
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3")) {
            // line 49
            echo "\t\t\t\t\tdata-columns-number = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "columns", array()), "number", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "captions", array()) == "on")) {
            // line 52
            echo "\t\t\t\t\tdata-popup-captions = 'hide'
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\tdata-popup-image-text = \"";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array()), "title")) : ("title")), "html", null, true);
        echo "\"

\t\t\t\t";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupwidth", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 59
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupwidth", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupheight", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 65
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupheight", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        $context["popup_i18n_words"] = array("close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("close")), "next" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("next")), "previous" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("previous")), "start_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("start slideshow")), "stop_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("stop slideshow")), "image" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("image")), "of" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")));
        // line 70
        echo "\t\t\tdata-popup-i18n-words = \"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["popup_i18n_words"]) ? $context["popup_i18n_words"] : null)));
        echo "\"

            data-popup-slideshow = \"";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed = \"";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop = \"";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto = \"";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "background", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency = \"";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-popup-disable-history=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "disableHistory", array()), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 79
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fullscreen", array())) ? ("true") : ("false"));
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "tooltip", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-text-size=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo "\"
\t\t\tdata-is-mobile=\"";
        // line 83
        echo twig_escape_filter($this->env, ((array_key_exists("isMobile", $context)) ? (_twig_default_filter((isset($context["isMobile"]) ? $context["isMobile"] : null), "0")) : ("0")), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false")), "html", null, true);
        echo "\" ";
        // line 85
        echo "\t\t\tdata-hide-long-tltp-title=\"";
        echo ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hideLongTooltipTitles", array()) == "on")) ? ("1") : ("0"));
        echo "\"
\t\t\tdata-caption-disabled-on-mobile=\"";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\t";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) {
            // line 88
            echo "\t\t\t\tdata-polaroid-animation=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 90
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3")) {
            // line 93
            echo "\t\t\t\tdata-responsive-colums=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array()), "")) : (""))));
            echo "\"
\t\t\t";
        }
        // line 95
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array()), "enabled", array()) == "true"))) {
            // line 96
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array())));
            echo "\"
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 99
            echo "\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t";
        }
        // line 101
        echo "\t\t\tdata-popup-placement-type=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "placementType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "placementType", array()), 0)) : (0)), "html", null, true);
        echo "\"

            ";
        // line 103
        $context["imageSharingButPos"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array());
        // line 104
        echo "            ";
        $context["imageSharingWrapperClass"] = ((isset($context["imageSharingButPos"]) ? $context["imageSharingButPos"] : null) . " ");
        // line 105
        echo "            ";
        if ((((isset($context["imageSharingButPos"]) ? $context["imageSharingButPos"] : null) == "top") || ((isset($context["imageSharingButPos"]) ? $context["imageSharingButPos"] : null) == "bottom"))) {
            // line 106
            echo "                ";
            $context["imageSharingWrapperClass"] = ((isset($context["imageSharingWrapperClass"]) ? $context["imageSharingWrapperClass"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()));
            // line 107
            echo "            ";
        } else {
            // line 108
            echo "                    ";
            $context["imageSharingWrapperClass"] = (((isset($context["imageSharingWrapperClass"]) ? $context["imageSharingWrapperClass"] : null) . "vertical ") . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 109
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()));
            // line 110
            echo "            ";
        }
        // line 111
        echo "
            ";
        // line 122
        echo "
            ";
        // line 123
        $context["socialSharing"] = array("enabled" => $this->getAttribute($this->getAttribute(        // line 124
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "enabled", array()), "gallerySharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 126
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "gallerySharing", array()), "enabled", array()), "position" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 127
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array())), "imageSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 130
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 131
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 132
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 133
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 134
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array())), "method")), "popupSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 138
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 139
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 140
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 141
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 142
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array())), "method")));
        // line 148
        echo "\t\t\tdata-social-sharing = \"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["socialSharing"]) ? $context["socialSharing"] : null)));
        echo "\"
\t\t\t";
        // line 149
        ob_start();
        // line 150
        echo "\t\t\t\t";
        $this->displayBlock('additionalGridGalleryClass', $context, $blocks);
        // line 157
        echo "\t\t\t";
        $context["varAdditionalGalleryClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 158
        echo "\t\t\tclass=\"grid-gallery
\t\t\t\t";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["varAdditionalGalleryClass"]) ? $context["varAdditionalGalleryClass"] : null), "html", null, true);
        echo "
\t\t\t\t";
        // line 160
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbs", array()), "enable", array()) == "1")) {
            // line 161
            echo "\t\t\t\t\tgrid-gallery-thumbs
\t\t\t\t";
        }
        // line 163
        echo "
\t\t\t\t";
        // line 164
        if ((($this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
            // line 165
            echo "\t\t\t\t\t\toptimizations
\t\t\t\t";
        }
        // line 167
        echo "
\t\t\t\t";
        // line 168
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on")) {
            // line 169
            echo "\t\t\t\t    hidden-item
                ";
        }
        // line 171
        echo "
\t\t\t\t";
        // line 172
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on")) {
            // line 173
            echo "\t\t\t\t    one-photo
                ";
        }
        // line 175
        echo "                \"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 177
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 178
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "height", array()), "auto")) : ("auto")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 179
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "height", array()) != "auto") && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "height", array()) != null))) {
            echo "px ";
        }
        echo ";
\t\t\t\t";
        // line 180
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "position", array()) == "1") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "position", array()) == "left"))) {
            // line 181
            echo "\t\t\t\t\tfloat: left;
\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "position", array()) == "2") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "position", array()) == "right"))) {
            // line 184
            echo "\t\t\t\t\tfloat:right;
\t\t\t\t";
        }
        // line 186
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "position", array()) == "center")) {
            // line 187
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\t";
        }
        // line 190
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fullscreen", array()), "enabled", array())) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"
\t\t";
    }

    // line 150
    public function block_additionalGridGalleryClass($context, array $blocks = array())
    {
        // line 151
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "1")) {
            // line 152
            echo "\t\t\t\t\t\tgrid-gallery-fluid-height
\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\tgrid-gallery-fixed
\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t";
    }

    // line 214
    public function block_photos_before($context, array $blocks = array())
    {
        // line 215
        echo "\t\t";
    }

    // line 226
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 227
        echo "\t\t\t\tid=\"photos-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos\"
\t\t\t";
    }

    // line 231
    public function block_photos($context, array $blocks = array())
    {
        // line 232
        echo "\t\t\t    ";
        $context["i"] = 0;
        // line 233
        echo "
\t\t\t\t";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 235
            echo "\t\t\t\t\t";
            $this->loadTemplate("@galleries/shortcode/helpers.twig", "@galleries/shortcode/gallery.twig", 235)->display(array("gallery" => (isset($context["gallery"]) ? $context["gallery"] : null), "photo" => $context["photo"], "settings" => (isset($context["settings"]) ? $context["settings"] : null), "index" => (isset($context["i"]) ? $context["i"] : null)));
            // line 236
            echo "\t\t\t\t    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 237
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "\t\t\t";
    }

    // line 246
    public function block_photos_after($context, array $blocks = array())
    {
        // line 247
        echo "\t\t";
    }

    // line 112
    public function getgetSocialSharingWrapperClass($__position__ = null, $__horizontalAlign__ = null, $__verticalAlign__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "position" => $__position__,
            "horizontalAlign" => $__horizontalAlign__,
            "verticalAlign" => $__verticalAlign__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "                ";
            $context["class"] = ((isset($context["position"]) ? $context["position"] : null) . " ");
            // line 114
            echo "                ";
            if ((((isset($context["position"]) ? $context["position"] : null) == "top") || ((isset($context["position"]) ? $context["position"] : null) == "bottom"))) {
                // line 115
                echo "                    ";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . (isset($context["horizontalAlign"]) ? $context["horizontalAlign"] : null));
                // line 116
                echo "                ";
            } else {
                // line 117
                echo "                        ";
                $context["class"] = (((isset($context["class"]) ? $context["class"] : null) . "vertical ") .                 // line 118
(isset($context["verticalAlign"]) ? $context["verticalAlign"] : null));
                // line 119
                echo "                ";
            }
            // line 120
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "
            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 120,  735 => 119,  733 => 118,  731 => 117,  728 => 116,  725 => 115,  722 => 114,  719 => 113,  705 => 112,  701 => 247,  698 => 246,  694 => 238,  688 => 237,  685 => 236,  682 => 235,  678 => 234,  675 => 233,  672 => 232,  669 => 231,  661 => 227,  658 => 226,  654 => 215,  651 => 214,  647 => 156,  643 => 154,  639 => 152,  636 => 151,  633 => 150,  622 => 190,  617 => 187,  614 => 186,  610 => 184,  607 => 183,  603 => 181,  601 => 180,  595 => 179,  591 => 178,  587 => 177,  583 => 175,  579 => 173,  577 => 172,  574 => 171,  570 => 169,  568 => 168,  565 => 167,  561 => 165,  559 => 164,  556 => 163,  552 => 161,  550 => 160,  546 => 159,  543 => 158,  540 => 157,  537 => 150,  535 => 149,  530 => 148,  528 => 142,  527 => 141,  526 => 140,  525 => 139,  524 => 138,  523 => 134,  522 => 133,  521 => 132,  520 => 131,  519 => 130,  518 => 127,  517 => 126,  516 => 124,  515 => 123,  512 => 122,  509 => 111,  506 => 110,  504 => 109,  502 => 108,  499 => 107,  496 => 106,  493 => 105,  490 => 104,  488 => 103,  482 => 101,  478 => 99,  475 => 98,  469 => 96,  466 => 95,  460 => 93,  457 => 92,  452 => 90,  448 => 89,  443 => 88,  441 => 87,  437 => 86,  432 => 85,  429 => 84,  425 => 83,  420 => 82,  416 => 81,  412 => 80,  408 => 79,  404 => 78,  400 => 77,  396 => 76,  392 => 75,  388 => 74,  384 => 73,  380 => 72,  374 => 70,  372 => 69,  369 => 68,  364 => 66,  361 => 65,  355 => 63,  352 => 62,  347 => 60,  344 => 59,  338 => 57,  333 => 55,  330 => 54,  326 => 52,  323 => 51,  317 => 49,  314 => 48,  310 => 46,  307 => 45,  303 => 43,  300 => 42,  295 => 40,  292 => 39,  289 => 38,  283 => 36,  279 => 34,  277 => 33,  269 => 32,  261 => 31,  257 => 30,  249 => 29,  240 => 27,  236 => 25,  234 => 24,  230 => 23,  226 => 22,  222 => 21,  218 => 20,  214 => 19,  210 => 18,  205 => 17,  202 => 16,  198 => 13,  188 => 10,  180 => 9,  170 => 8,  160 => 7,  157 => 6,  154 => 5,  151 => 4,  139 => 250,  135 => 248,  133 => 246,  124 => 239,  122 => 231,  118 => 229,  116 => 226,  111 => 223,  107 => 221,  103 => 219,  100 => 218,  98 => 217,  95 => 216,  93 => 214,  90 => 213,  87 => 212,  82 => 209,  75 => 207,  71 => 206,  65 => 205,  62 => 204,  51 => 195,  48 => 194,  46 => 193,  42 => 191,  40 => 16,  36 => 14,  33 => 4,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/gallery.twig", "/is/htdocs/wp10646851_1IA7E08J8L/traka/wordpress/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/gallery.twig");
    }
}
