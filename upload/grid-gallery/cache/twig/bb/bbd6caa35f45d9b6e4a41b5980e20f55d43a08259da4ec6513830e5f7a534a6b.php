<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_bc4bd4eb17352839e42d7b169079a7e38b76c3256d206444e6ae152d43c79874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ggFigureWidth' => array($this, 'block_ggFigureWidth'),
            'ggMosaicHiddenItem' => array($this, 'block_ggMosaicHiddenItem'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'a_attributes_class_set' => array($this, 'block_a_attributes_class_set'),
            'a_attributes_href' => array($this, 'block_a_attributes_href'),
            'figure_before' => array($this, 'block_figure_before'),
            'galleryTypeBlock' => array($this, 'block_galleryTypeBlock'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'previewImageUrlVar' => array($this, 'block_previewImageUrlVar'),
            'imageAttributesStyleSize' => array($this, 'block_imageAttributesStyleSize'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_class' => array($this, 'block_figcaption_class'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
            'oneGalleryImage' => array($this, 'block_oneGalleryImage'),
            'mosaicLastImageNumberWrapper' => array($this, 'block_mosaicLastImageNumberWrapper'),
            'mosaicFigcaptionWrapper' => array($this, 'block_mosaicFigcaptionWrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 12
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        $this->displayBlock('ggFigureWidth', $context, $blocks);
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
";
        // line 23
        ob_start();
        // line 24
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array())))) {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 27
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
";
        // line 31
        ob_start();
        // line 32
        echo "\t";
        if (((( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) && ( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0"))) {
            // line 33
            echo "\t\tgg-colorbox
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        if ((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0"))) {
            // line 37
            echo "\t\tgg-video
\t";
        }
        // line 39
        echo "
\t";
        // line 40
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && (( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))))))) {
            // line 41
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
";
        // line 45
        ob_start();
        // line 46
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) {
            // line 47
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 48
            $context["link"] = true;
            // line 49
            echo "\t";
        } else {
            // line 50
            echo "\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
";
        // line 54
        ob_start();
        // line 55
        echo "\t";
        if (((isset($context["link"]) ? $context["link"] : null) && $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 56
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 58
        echo "\t";
        if ((((isset($context["link"]) ? $context["link"] : null) == false) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "enabled", array()) == "false"))) {
            // line 59
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
";
        // line 63
        ob_start();
        // line 64
        echo "
\t";
        // line 65
        ob_start();
        // line 66
        echo "\t\t";
        $this->displayBlock('ggMosaicHiddenItem', $context, $blocks);
        // line 68
        echo "\t";
        $context["ggMosaicHiddenItemVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 69
        echo "
\t";
        // line 71
        echo "\t";
        ob_start();
        // line 72
        echo "\t\t";
        $this->displayBlock('a_attributes', $context, $blocks);
        // line 100
        echo "\t";
        $context["var_a_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 101
        echo "
\t";
        // line 102
        ob_start();
        // line 103
        echo "\t\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 108
        echo "\t";
        $context["var_figure_before"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 109
        echo "
\t";
        // line 110
        ob_start();
        // line 111
        echo "\t\t";
        $this->displayBlock('galleryTypeBlock', $context, $blocks);
        // line 134
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 135
        echo "
\t";
        // line 136
        ob_start();
        // line 137
        echo "\t\t";
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 160
        echo "\t";
        $context["var_figure_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 161
        echo "
\t";
        // line 162
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 163
        echo "
\t";
        // line 164
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0)) {
            // line 165
            echo "\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array());
            // line 166
            echo "\t";
        } else {
            // line 167
            echo "\t\t";
            // line 168
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width_unit", array()) == 0)) {
                // line 169
                echo "\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())));
                // line 170
                echo "\t\t";
            } else {
                // line 171
                echo "\t\t\t";
                $context["width"] = null;
                // line 172
                echo "\t\t";
            }
            // line 173
            echo "\t";
        }
        // line 174
        echo "
\t";
        // line 175
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0)) {
            // line 176
            echo "\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array());
            // line 177
            echo "\t";
        } else {
            // line 178
            echo "\t\t";
            // line 179
            echo "\t\t";
            $context["height"] = null;
            // line 180
            echo "\t\t";
            // line 181
            echo "\t\t";
            // line 182
            echo "\t\t";
            // line 183
            echo "\t\t";
            // line 184
            echo "\t\t";
            // line 185
            echo "\t";
        }
        // line 186
        echo "
\t";
        // line 187
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 3))) {
            // line 188
            echo "\t\t";
            $context["crop"] = 1;
            // line 189
            echo "\t";
        }
        // line 190
        echo "
\t";
        // line 191
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 1)) {
            // line 192
            echo "\t\t";
            $context["height"] = null;
            // line 193
            echo "\t";
        }
        // line 194
        echo "
\t";
        // line 195
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 2)) {
            // line 196
            echo "\t\t";
            $context["width"] = null;
            // line 197
            echo "\t";
        }
        // line 198
        echo "
\t";
        // line 199
        ob_start();
        // line 200
        echo "\t\t";
        $this->displayBlock('previewImageUrlVar', $context, $blocks);
        // line 207
        echo "\t";
        $context["previewImgUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 208
        echo "
\t";
        // line 209
        ob_start();
        // line 210
        echo "\t\t";
        $this->displayBlock('imageAttributesStyleSize', $context, $blocks);
        // line 218
        echo "\t";
        $context["imageAttributesStyleSizeVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 219
        echo "
\t";
        // line 220
        ob_start();
        // line 221
        echo "\t\t";
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 230
        echo "\t";
        $context["var_image_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 231
        echo "
\t";
        // line 232
        ob_start();
        // line 233
        echo "\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 256
        echo "\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 257
        echo "
\t";
        // line 258
        ob_start();
        // line 259
        echo "\t\tclass=\"";
        $this->displayBlock('figcaption_class', $context, $blocks);
        echo "\"
\t\t";
        // line 260
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 267
        echo "\t";
        $context["var_figcaption_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 268
        echo "
\t";
        // line 269
        $context["prepareImgUrl"] = (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        // line 270
        echo "
\t";
        // line 271
        ob_start();
        // line 272
        echo "\t\t";
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 346
        echo "\t";
        $context["var_figcaption_wrap"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 347
        echo "
\t";
        // line 348
        ob_start();
        // line 349
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 389
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 390
        echo "
\t";
        // line 391
        ob_start();
        // line 392
        echo "\t\t";
        $this->displayBlock('figure_after', $context, $blocks);
        // line 397
        echo "\t";
        $context["var_figure_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 398
        echo "
\t";
        // line 400
        echo "\t";
        $this->displayBlock('oneGalleryImage', $context, $blocks);
        // line 434
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 14
    public function block_ggFigureWidth($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 16
            echo "\t\t\twidth:auto;
\t\t";
        } else {
            // line 18
            echo "\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t";
        }
        // line 20
        echo "\t";
    }

    // line 66
    public function block_ggMosaicHiddenItem($context, array $blocks = array())
    {
        // line 67
        echo "\t\t";
    }

    // line 72
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 73
        echo "
\t\t\tid=\"gg-";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
        echo "\"

\t\t\t";
        // line 76
        $this->displayBlock('a_attributes_class_set', $context, $blocks);
        // line 79
        echo "
\t\t\t";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["ggMosaicHiddenItemVar"]) ? $context["ggMosaicHiddenItemVar"] : null), "html", null, true);
        echo "
\t\t\t";
        // line 81
        $this->displayBlock('a_attributes_href', $context, $blocks);
        // line 85
        echo "\t\t\ttitle=\"";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
        echo "\"

\t\t\t";
        // line 88
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
            // line 89
            echo "\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 90
(isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()) == null)) {
            // line 91
            echo "\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, (isset($context["aRel"]) ? $context["aRel"] : null), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 93
        echo "\t\t\t";
        // line 94
        echo "
\t\t\t";
        // line 95
        if (((isset($context["link"]) ? $context["link"] : null) == true)) {
            // line 96
            echo "\t\t\t\tdata-type=\"link\"
\t\t\t";
        }
        // line 98
        echo "\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t";
    }

    // line 76
    public function block_a_attributes_class_set($context, array $blocks = array())
    {
        // line 77
        echo "\t\t\t\tclass=\"gg-link ";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aClass"]) ? $context["aClass"] : null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t";
    }

    // line 81
    public function block_a_attributes_href($context, array $blocks = array())
    {
        // line 82
        echo "\t\t\t\thref=\"";
        echo twig_escape_filter($this->env, htmlspecialchars_decode(twig_trim_filter((isset($context["aHref"]) ? $context["aHref"] : null))), "html", null, true);
        echo "\"
\t\t\t\ttarget=\"";
        // line 83
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t";
    }

    // line 103
    public function block_figure_before($context, array $blocks = array())
    {
        // line 104
        echo "\t\t\t";
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 105
            echo "\t\t\t\t<a ";
            echo twig_escape_filter($this->env, (isset($context["var_a_attributes"]) ? $context["var_a_attributes"] : null), "html", null, true);
            echo " >
\t\t\t";
        }
        // line 107
        echo "\t\t";
    }

    // line 111
    public function block_galleryTypeBlock($context, array $blocks = array())
    {
        // line 112
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 113
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
                // line 114
                echo "\t\t\t\t\ticons
\t\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t\tnone
\t\t\t\t";
            }
            // line 118
            echo "\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
                // line 120
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 121
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 127
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 129
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t";
            }
            // line 132
            echo "\t\t\t";
        }
        // line 133
        echo "\t\t";
    }

    // line 137
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 138
        echo "\t\t\tclass=\"grid-gallery-caption
\t\t\t";
        // line 139
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        // line 140
        echo "\t\t\t";
        echo twig_escape_filter($this->env, (isset($context["ggMosaicHiddenItemVar"]) ? $context["ggMosaicHiddenItemVar"] : null), "html", null, true);
        echo "
\t\t\t";
        // line 141
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 142
            echo "\t\t\t\tshadow-show
\t\t\t";
        }
        // line 144
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 145
            echo "\t\t\t\tshadow-hide
\t\t\t";
        }
        // line 146
        echo "\"
\t\t\tdata-grid-gallery-type=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["galleryType"]) ? $context["galleryType"] : null)), "html", null, true);
        echo "\"
\t\t\tdata-index=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
        echo "\"
\t\t\tstyle=\"display:none;";
        // line 149
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figureStyle"]) ? $context["figureStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 150
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true")) {
            // line 151
            echo "\t\t\t\t\t";
            ob_start();
            // line 152
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 153
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 155
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 158
            echo "\t\t\t\t";
        }
        // line 159
        echo "\t\t";
    }

    // line 200
    public function block_previewImageUrlVar($context, array $blocks = array())
    {
        // line 201
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "isNotRealAttachment", array()) == 1)) {
            // line 202
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 204
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "id", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
            echo "
\t\t\t";
        }
        // line 206
        echo "\t\t";
    }

    // line 210
    public function block_imageAttributesStyleSize($context, array $blocks = array())
    {
        // line 211
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())))) {
            // line 212
            echo "\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 214
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array())))) {
            // line 215
            echo "\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 217
        echo "\t\t";
    }

    // line 221
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 222
        echo "\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["previewImgUrl"]) ? $context["previewImgUrl"] : null)), "html", null, true);
        echo "\"
\t\t\talt=\"";
        // line 223
        if ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array()) == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\ttitle=\"";
        // line 224
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-description=\"";
        // line 225
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-caption=\"";
        // line 226
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\tdata-title=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["imageAttributesStyleSizeVar"]) ? $context["imageAttributesStyleSizeVar"] : null), "html", null, true);
        echo "\"
\t\t";
    }

    // line 233
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 234
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 235
            echo "\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 236
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 237
                echo "\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\theight : 100%;
\t\t\t\t\t";
                // line 240
                echo "\t\t\t\t";
            } else {
                // line 241
                echo "\t\t\t\t\theight : 100%;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t";
            }
            // line 244
            echo "\t\t\t";
        } else {
            // line 245
            echo "\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\tbackground-color:";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\tfont-size:";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\ttext-align:";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\tfont-family:";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 250
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 251
                echo "\t\t\t\t\topacity:1;
\t\t\t\t\tbottom:0;
\t\t\t\t";
            }
            // line 254
            echo "\t\t\t";
        }
        // line 255
        echo "\t\t";
    }

    // line 259
    public function block_figcaption_class($context, array $blocks = array())
    {
    }

    // line 260
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 261
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 262
            echo "\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 264
        echo "\t\t\tdata-alpha=\"";
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 265
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\"
\t\t";
    }

    // line 272
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 273
        echo "\t\t\t";
        // line 274
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 275
            echo "\t\t\t\t<div
\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 276
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\tdata-margin=\"";
            // line 277
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t\t";
            // line 279
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())))) {
                // line 280
                echo "
\t\t\t\t\t\t";
                // line 281
                ob_start();
                // line 282
                echo "\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) {
                    // line 283
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()), (isset($context["youtube"]) ? $context["youtube"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 284
                    $context["videoSource"] = "youtube";
                    // line 285
                    echo "\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) {
                    // line 286
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()), (isset($context["vimeoPattern"]) ? $context["vimeoPattern"] : null), (isset($context["vimeoReplace"]) ? $context["vimeoReplace"] : null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 287
                    $context["videoSource"] = "vimeo";
                    // line 288
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 289
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 291
                echo "\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 292
                echo "
\t\t\t\t\t\t";
                // line 293
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 294
                echo "
\t\t\t\t\t\t";
                // line 295
                ob_start();
                // line 296
                echo "\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\tmargin-right:";
                // line 297
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 299
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 300
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["videoUrl"]) ? $context["videoUrl"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t   data-id=\"gg-";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t   title=\"";
                // line 302
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t   class=\"hi-icon gg-video ";
                // line 303
                echo twig_escape_filter($this->env, (isset($context["videoIcon"]) ? $context["videoIcon"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 304
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 305
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t   style=\"";
                // line 306
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t   data-video-source=\"";
                // line 307
                echo twig_escape_filter($this->env, (isset($context["videoSource"]) ? $context["videoSource"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 309
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1")) {
                    // line 310
                    echo "\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                } else {
                    // line 312
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 313
                    echo "\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t";
                    // line 315
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 316
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
                // line 318
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 320
            echo "
\t\t\t\t\t";
            // line 321
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) {
                // line 322
                echo "\t\t\t\t\t\t<a title=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                echo "\" data-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\" href=\"";
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on")) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["prepareImgUrl"]) ? $context["prepareImgUrl"] : null), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 324
            echo "
\t\t\t\t\t";
            // line 325
            if (( !array_key_exists("videoUrl", $context) && ( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()))))) {
                // line 326
                echo "\t\t\t\t\t\t<a title=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                echo "\" data-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["prepareImgUrl"]) ? $context["prepareImgUrl"] : null), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 327
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
                    // line 328
                    echo "\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                }
                // line 329
                echo ">Open in pop-up window</a>
\t\t\t\t\t";
            }
            // line 331
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 333
        echo "
\t\t\t";
        // line 334
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 335
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 336
                echo "\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
                    // line 337
                    echo "\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore\" style=\"font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t";
                    // line 339
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 343
                echo "\t\t\t\t";
            }
            // line 344
            echo "\t\t\t";
        }
        // line 345
        echo "\t\t";
    }

    // line 349
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 350
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 351
            echo "
\t\t\t\t";
            // line 352
            ob_start();
            // line 353
            echo "\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\tbackground-color:";
            // line 354
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\tfont-size:";
            // line 355
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\tfont-family:";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            // line 357
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 358
                echo "\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t";
            }
            // line 360
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 361
                echo "\t\t\t\t\t\topacity:1;
\t\t\t\t\t\tbottom:0;
\t\t\t\t\t";
            }
            // line 364
            echo "\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 366
            echo "
\t\t\t\t";
            // line 367
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 368
                echo "\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"caption-with-";
                // line 369
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\t\tstyle=\"";
                // line 370
                echo twig_escape_filter($this->env, (isset($context["captionStyle"]) ? $context["captionStyle"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-alpha=\"";
                // line 371
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 373
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
                    // line 374
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\t\t\tvertical-align:";
                    // line 375
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 376
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 379
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tvertical-align:";
                    // line 380
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 381
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 384
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 387
            echo "\t\t\t";
        }
        // line 388
        echo "\t\t";
    }

    // line 392
    public function block_figure_after($context, array $blocks = array())
    {
        // line 393
        echo "\t\t\t";
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 394
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 396
        echo "\t\t";
    }

    // line 400
    public function block_oneGalleryImage($context, array $blocks = array())
    {
        // line 401
        echo "\t\t";
        echo twig_escape_filter($this->env, (isset($context["var_figure_before"]) ? $context["var_figure_before"] : null), "html", null, true);
        echo "
\t\t<FIGURE ";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["var_figure_attributes"]) ? $context["var_figure_attributes"] : null), "html", null, true);
        echo " >
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 404
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 405
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 406
        echo "\"
\t\t\t\t style=\"
\t\t\t\t ";
        // line 408
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3"))) {
            // line 409
            echo "\t\t\t\t\t\t width:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t height:";
            // line 410
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t overflow:hidden;
\t\t\t\t ";
        }
        // line 412
        echo "\">

\t\t\t\t<img ";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["var_image_attributes"]) ? $context["var_image_attributes"] : null), "html", null, true);
        echo " />
\t\t\t</div>
\t\t\t";
        // line 416
        $this->displayBlock('mosaicLastImageNumberWrapper', $context, $blocks);
        // line 418
        echo "\t\t\t";
        $this->displayBlock('mosaicFigcaptionWrapper', $context, $blocks);
        // line 431
        echo "\t\t</FIGURE>
\t\t";
        // line 432
        echo twig_escape_filter($this->env, (isset($context["var_figure_after"]) ? $context["var_figure_after"] : null), "html", null, true);
        echo "
\t";
    }

    // line 416
    public function block_mosaicLastImageNumberWrapper($context, array $blocks = array())
    {
        // line 417
        echo "\t\t\t";
    }

    // line 418
    public function block_mosaicFigcaptionWrapper($context, array $blocks = array())
    {
        // line 419
        echo "\t\t\t\t<FIGCAPTION ";
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_attributes"]) ? $context["var_figcaption_attributes"] : null), "html", null, true);
        echo "\t>
\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t";
        // line 423
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 424
            echo "\t\t\t\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t\t";
        }
        // line 425
        echo "\">
\t\t\t\t\t\t";
        // line 426
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_wrap"]) ? $context["var_figcaption_wrap"] : null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</FIGCAPTION>
\t\t\t\t";
        // line 429
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_after"]) ? $context["var_figcaption_after"] : null), "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1392 => 429,  1386 => 426,  1383 => 425,  1377 => 424,  1375 => 423,  1367 => 419,  1364 => 418,  1360 => 417,  1357 => 416,  1351 => 432,  1348 => 431,  1345 => 418,  1343 => 416,  1338 => 414,  1334 => 412,  1328 => 410,  1323 => 409,  1321 => 408,  1317 => 406,  1313 => 405,  1311 => 404,  1306 => 402,  1301 => 401,  1298 => 400,  1294 => 396,  1290 => 394,  1287 => 393,  1284 => 392,  1280 => 388,  1277 => 387,  1272 => 384,  1266 => 381,  1262 => 380,  1256 => 379,  1250 => 376,  1246 => 375,  1240 => 374,  1238 => 373,  1233 => 371,  1229 => 370,  1221 => 369,  1218 => 368,  1216 => 367,  1213 => 366,  1207 => 364,  1202 => 361,  1199 => 360,  1193 => 358,  1191 => 357,  1187 => 356,  1182 => 355,  1178 => 354,  1173 => 353,  1171 => 352,  1168 => 351,  1165 => 350,  1162 => 349,  1158 => 345,  1155 => 344,  1152 => 343,  1145 => 339,  1138 => 337,  1135 => 336,  1132 => 335,  1130 => 334,  1127 => 333,  1123 => 331,  1119 => 329,  1115 => 328,  1113 => 327,  1096 => 326,  1094 => 325,  1091 => 324,  1063 => 322,  1061 => 321,  1058 => 320,  1054 => 318,  1051 => 316,  1048 => 315,  1045 => 313,  1043 => 312,  1039 => 310,  1036 => 309,  1032 => 307,  1028 => 306,  1025 => 305,  1021 => 304,  1017 => 303,  1013 => 302,  1007 => 301,  1003 => 300,  1000 => 299,  995 => 297,  990 => 296,  988 => 295,  985 => 294,  983 => 293,  980 => 292,  977 => 291,  971 => 289,  968 => 288,  966 => 287,  961 => 286,  958 => 285,  956 => 284,  951 => 283,  948 => 282,  946 => 281,  943 => 280,  941 => 279,  936 => 277,  930 => 276,  927 => 275,  924 => 274,  922 => 273,  919 => 272,  913 => 265,  908 => 264,  902 => 262,  899 => 261,  896 => 260,  891 => 259,  887 => 255,  884 => 254,  879 => 251,  877 => 250,  873 => 249,  869 => 248,  864 => 247,  860 => 246,  855 => 245,  852 => 244,  847 => 241,  844 => 240,  838 => 237,  836 => 236,  831 => 235,  828 => 234,  825 => 233,  819 => 228,  815 => 227,  807 => 226,  799 => 225,  791 => 224,  783 => 223,  778 => 222,  775 => 221,  771 => 217,  765 => 215,  762 => 214,  756 => 212,  753 => 211,  750 => 210,  746 => 206,  740 => 204,  734 => 202,  731 => 201,  728 => 200,  724 => 159,  721 => 158,  718 => 157,  714 => 155,  708 => 153,  705 => 152,  702 => 151,  700 => 150,  696 => 149,  692 => 148,  688 => 147,  685 => 146,  681 => 145,  678 => 144,  674 => 142,  672 => 141,  667 => 140,  663 => 139,  660 => 138,  657 => 137,  653 => 133,  650 => 132,  647 => 131,  641 => 129,  635 => 127,  632 => 126,  629 => 125,  623 => 123,  617 => 121,  614 => 120,  611 => 119,  608 => 118,  604 => 116,  600 => 114,  597 => 113,  594 => 112,  591 => 111,  587 => 107,  581 => 105,  578 => 104,  575 => 103,  569 => 83,  564 => 82,  561 => 81,  550 => 77,  547 => 76,  540 => 98,  536 => 96,  534 => 95,  531 => 94,  529 => 93,  523 => 91,  521 => 90,  518 => 89,  515 => 88,  509 => 85,  507 => 81,  503 => 80,  500 => 79,  498 => 76,  491 => 74,  488 => 73,  485 => 72,  481 => 67,  478 => 66,  474 => 20,  468 => 18,  464 => 16,  461 => 15,  458 => 14,  453 => 434,  450 => 400,  447 => 398,  444 => 397,  441 => 392,  439 => 391,  436 => 390,  433 => 389,  430 => 349,  428 => 348,  425 => 347,  422 => 346,  419 => 272,  417 => 271,  414 => 270,  412 => 269,  409 => 268,  406 => 267,  404 => 260,  399 => 259,  397 => 258,  394 => 257,  391 => 256,  388 => 233,  386 => 232,  383 => 231,  380 => 230,  377 => 221,  375 => 220,  372 => 219,  369 => 218,  366 => 210,  364 => 209,  361 => 208,  358 => 207,  355 => 200,  353 => 199,  350 => 198,  347 => 197,  344 => 196,  342 => 195,  339 => 194,  336 => 193,  333 => 192,  331 => 191,  328 => 190,  325 => 189,  322 => 188,  320 => 187,  317 => 186,  314 => 185,  312 => 184,  310 => 183,  308 => 182,  306 => 181,  304 => 180,  301 => 179,  299 => 178,  296 => 177,  293 => 176,  291 => 175,  288 => 174,  285 => 173,  282 => 172,  279 => 171,  276 => 170,  273 => 169,  270 => 168,  268 => 167,  265 => 166,  262 => 165,  260 => 164,  257 => 163,  255 => 162,  252 => 161,  249 => 160,  246 => 137,  244 => 136,  241 => 135,  238 => 134,  235 => 111,  233 => 110,  230 => 109,  227 => 108,  224 => 103,  222 => 102,  219 => 101,  216 => 100,  213 => 72,  210 => 71,  207 => 69,  204 => 68,  201 => 66,  199 => 65,  196 => 64,  194 => 63,  191 => 62,  186 => 59,  183 => 58,  177 => 56,  174 => 55,  172 => 54,  169 => 53,  162 => 50,  159 => 49,  157 => 48,  152 => 47,  149 => 46,  147 => 45,  144 => 44,  139 => 41,  137 => 40,  134 => 39,  130 => 37,  128 => 36,  125 => 35,  121 => 33,  118 => 32,  116 => 31,  113 => 30,  106 => 27,  100 => 25,  97 => 24,  95 => 23,  92 => 22,  88 => 14,  82 => 12,  79 => 11,  76 => 9,  73 => 8,  61 => 7,  59 => 6,  54 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "/is/htdocs/wp10646851_1IA7E08J8L/traka/wordpress/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/helpers.twig");
    }
}
