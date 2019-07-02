<?php

/* @galleries/settings.twig */
class __TwigTemplate_313c07bf0b49966941033fe9446c95aca5497085b12c7cce200cd8504f61dc2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'gallery_preview_figure_attributes' => array($this, 'block_gallery_preview_figure_attributes'),
            'gallery_preview_image_attributes' => array($this, 'block_gallery_preview_image_attributes'),
            'settginsFigCaption' => array($this, 'block_settginsFigCaption'),
            'content' => array($this, 'block_content'),
            'proHiddenSettings' => array($this, 'block_proHiddenSettings'),
            'area' => array($this, 'block_area'),
            'galleryTypeSelectorItems' => array($this, 'block_galleryTypeSelectorItems'),
            'openByLink' => array($this, 'block_openByLink'),
            'browserUrlTooltipHide' => array($this, 'block_browserUrlTooltipHide'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'mosaicImagesCount' => array($this, 'block_mosaicImagesCount'),
            'mosaicGalleryImageCountText' => array($this, 'block_mosaicGalleryImageCountText'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'captionSettingsType' => array($this, 'block_captionSettingsType'),
            'overlaySettings' => array($this, 'block_overlaySettings'),
            'backgroundImageForHoverEffect' => array($this, 'block_backgroundImageForHoverEffect'),
            'backgroundColorForShowOnHover' => array($this, 'block_backgroundColorForShowOnHover'),
            'icons' => array($this, 'block_icons'),
            'proCaptionAndIconSettings' => array($this, 'block_proCaptionAndIconSettings'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'captionEffectInPro' => array($this, 'block_captionEffectInPro'),
            'captionAndIconEffectsSign' => array($this, 'block_captionAndIconEffectsSign'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
            'icon_wrap_item_class' => array($this, 'block_icon_wrap_item_class'),
            'settingsOtherPro' => array($this, 'block_settingsOtherPro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 26
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 58
        $this->displayBlock('tabs', $context, $blocks);
        // line 59
        echo "    </h2>
";
    }

    // line 58
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 62
    public function block_preview($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "watermark", array(), "any", true, true)) {
            // line 64
            echo "        ";
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "watermark", array()), array("galleryId" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array())));
            // line 65
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", (isset($context["settingsWatermark"]) ? $context["settingsWatermark"] : null))), "html", null, true);
            echo "
    ";
        }
        // line 67
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 67);
        // line 68
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 68);
        // line 69
        echo "\t";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 69);
        // line 70
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 81
        echo "
                <li title=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 105
        if ( !twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()))) {
            // line 106
            echo "            <div style=\"
            ";
            // line 107
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "area", array()), "photo_width", array())))) {
                // line 108
                echo "                width:";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "area", array()), "photo_width", array()) + 40), "html", null, true);
                echo "px;
            ";
            }
            // line 110
            echo "            margin: 10px auto;
            max-width: 330px;
            clear:both;
            \">
                <figure
\t\t\t\t\t";
            // line 115
            $this->displayBlock('gallery_preview_figure_attributes', $context, $blocks);
            // line 121
            echo "\t\t\t\t\t>
                   ";
            // line 122
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 123
            echo "
                    ";
            // line 124
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0)) {
                // line 125
                echo "                        ";
                $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array());
                // line 126
                echo "                    ";
            }
            // line 127
            echo "
                    ";
            // line 128
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0)) {
                // line 129
                echo "                        ";
                $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array());
                // line 130
                echo "                    ";
            }
            // line 131
            echo "
                    ";
            // line 132
            if (((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3"))) {
                // line 133
                echo "                        ";
                $context["crop"] = 1;
                // line 134
                echo "                    ";
            } else {
                // line 135
                echo "                        ";
                $context["height"] = null;
                // line 136
                echo "                    ";
            }
            // line 137
            echo "
                    ";
            // line 138
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 139
                echo "                        ";
                $context["cropQuality"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "cropQuality", array());
                // line 140
                echo "                    ";
            } else {
                // line 141
                echo "                        ";
                $context["cropQuality"] = null;
                // line 142
                echo "                    ";
            }
            // line 143
            echo "                    <img
\t\t\t\t\t\t";
            // line 144
            $this->displayBlock('gallery_preview_image_attributes', $context, $blocks);
            // line 160
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t";
            // line 161
            ob_start();
            // line 162
            echo "\t\t\t\t\t\t<figcaption style=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div style=\"display: table; height: 100%; width: 100%;\">
\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
\t\t\t\t\t\t\t\t\t<span>Gallery by Supsystic</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t";
            $context["figcaptionBlockFree"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 170
            echo "\t\t\t\t\t";
            // line 171
            echo "\t\t\t\t\t\t";
            // line 172
            echo "\t\t\t\t\t";
            // line 173
            echo "\t\t\t\t\t";
            $this->displayBlock('settginsFigCaption', $context, $blocks);
            // line 176
            echo "                </figure>
            </div>
        ";
        } else {
            // line 179
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 181
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 185
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 190
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\" class=\"gg-preview-bottom-bar\">
\t\t\t<a class=\"button button-primary\" target=\"_blank\"
\t\t\t   href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-fw fa-eye\"></i>
\t\t\t\t";
        // line 200
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
\t\t\t</a>

            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 203
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
\t\t\t<a class=\"button\" id=\"ggCreateClone\" href=\"#\" target=\"_blank\" data-url=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("_wpnonce" => (isset($context["_wpnonce"]) ? $context["_wpnonce"] : null))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-clone\"></i>
\t\t\t\t";
        // line 206
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone")), "html", null, true);
        echo "
\t\t\t</a>
        </div>
\t\t<div class=\"gg-sett-preview-other-plugin\">
\t\t\t<label for=\"enableForMembership\" class=\"gg-sett-plugin-member-lbl\">";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable for Membership:")), "html", null, true);
        echo "</label>
\t\t\t";
        // line 211
        if (($this->getAttribute((isset($context["pageOptions"]) ? $context["pageOptions"] : null), "isMembershipPluginActive", array()) == "true")) {
            // line 212
            echo "\t\t\t\t<select id=\"enableForMembership\" style=\"width: auto;\" name=\"plugins[membership][enable]\" ";
            echo twig_escape_filter($this->env, (isset($context["disableMembershipOpt"]) ? $context["disableMembershipOpt"] : null), "html", null, true);
            echo " >
\t\t\t\t\t<option value=\"0\" ";
            // line 213
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins", array()), "membership", array()), "enable", array()) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 214
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"1\" ";
            // line 216
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins", array()), "membership", array()), "enable", array()) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 217
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t</select>
\t\t\t";
        } else {
            // line 221
            echo "\t\t\t\t<div class=\"gg-membership-plug-info\">
\t\t\t\t\t";
            // line 222
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Membership by Supsystic to use this feature. ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageOptions"]) ? $context["pageOptions"] : null), "membershipInstallUrl", array()), "html", null, true);
            echo "\">Install</a>
\t\t\t\t\t";
            // line 224
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" plugin from your admin area, or visit it's official page on Wordpress.org ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageOptions"]) ? $context["pageOptions"] : null), "membershipInstallWpUrl", array()), "html", null, true);
            echo "\">here</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 228
        echo "\t\t</div>
    </div>
\t<input type=\"hidden\" id=\"ggMsgCloningGallery\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cloning gallery...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgServerInternalError\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Server internal error")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImgOptimizationErrorOcured\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery image optimization error ocured.")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggIoParams\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["ioServiceParams"]) ? $context["ioServiceParams"] : null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggCdnParams\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["cdnServiceParams"]) ? $context["cdnServiceParams"] : null), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOptimized\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimized")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgTransfer\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfered")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOf\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImages\" value=\"";
        // line 238
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryImageOptimizing\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Image optimizing...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryTransferToCnd\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tranfer images to CDN")), "html", null, true);
        echo "\"/>

\t<div id=\"ggCloneModalWndId\" style=\"display: none;\">
\t\t<label for=\"ggCloneTypeSelector\">";
        // line 243
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type:")), "html", null, true);
        echo "</label>
\t\t";
        // line 244
        echo $context["form"]->getselect("CloneTypeSelector", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone with images")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone without images"))), 0, array("style" => "width: auto;", "id" => "ggCloneTypeSelector"));
        // line 252
        echo "
\t</div>

";
    }

    // line 115
    public function block_gallery_preview_figure_attributes($context, array $blocks = array())
    {
        // line 116
        echo "\t\t\t\t\t\tclass=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\"
\t\t\t\t\t\t";
        // line 117
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 118
            echo "\t\t\t\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t";
    }

    // line 144
    public function block_gallery_preview_image_attributes($context, array $blocks = array())
    {
        // line 145
        echo "\t\t\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), (isset($context["crop"]) ? $context["crop"] : null), (isset($context["cropQuality"]) ? $context["cropQuality"] : null))), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array())), "html", null, true);
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array());
        echo "\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\tmax-width: 290px; max-height: 290px;
\t\t\t\t\t\t\t\t";
        // line 148
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())))) {
            // line 149
            echo "\t\t\t\t\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 153
        echo "\t\t\t\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array())))) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\theight: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t\t\t\t\theight: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t";
    }

    // line 173
    public function block_settginsFigCaption($context, array $blocks = array())
    {
        // line 174
        echo "\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, (isset($context["figcaptionBlockFree"]) ? $context["figcaptionBlockFree"] : null), "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 257
    public function block_content($context, array $blocks = array())
    {
        // line 258
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 258);
        // line 259
        echo "    ";
        $context["f"] = $this;
        // line 260
        echo "
\t<div class=\"gg-wraper-anchor-nav-links\" style=\"display: none;\">
\t\t<a href=\"#gg-anl-main\" class=\"gg-anchor-nav-links\">";
        // line 262
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Type")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-mosaic-image-count-text-wrapper\" class=\"gg-anchor-nav-links ggSettingsDisplNone\" id=\"gg-anl-mosaic-settings-link\">";
        // line 263
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Count Text")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-soc-share\" class=\"gg-anchor-nav-links\">";
        // line 264
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-load-more\" class=\"gg-anchor-nav-links\" id=\"gg-anl-load-more-link\">";
        // line 265
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load More")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-cust-button\" class=\"gg-anchor-nav-links\">";
        // line 266
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons")), "html", null, true);
        echo "</a>
        <a href=\"#gg-anl-horiz-scroll\" class=\"gg-anchor-nav-links\">";
        // line 267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-border-type\" class=\"gg-anchor-nav-links\">";
        // line 268
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-shadow\" class=\"gg-anchor-nav-links\">";
        // line 269
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-popup\" class=\"gg-anchor-nav-links\">";
        // line 270
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lightbox")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-preloader\" class=\"gg-anchor-nav-links\">";
        // line 271
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loader")), "html", null, true);
        echo "</a>
\t</div>
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 273
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 274
        echo $context["form"]->getopen("post", $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "_wpnonce" => (isset($context["_wpnonce"]) ? $context["_wpnonce"] : null))), "method"), array("id" => "form-settings", "class" => "form-gall-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>
\t\t";
        // line 279
        echo $context["form"]->gethidden("plugins[membership][enable]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins", array()), "membership", array()), "enable", array()), array("id" => "hiddenInpMembershipEnableVal"));
        echo "
\t\t";
        // line 280
        $this->displayBlock('proHiddenSettings', $context, $blocks);
        // line 281
        echo "
        <div data-tab=\"area\">
            ";
        // line 283
        $this->displayBlock('area', $context, $blocks);
        // line 452
        echo "
            ";
        // line 453
        $this->displayBlock('mosaicImagesCount', $context, $blocks);
        // line 455
        echo "
\t\t\t";
        // line 456
        $this->displayBlock('mosaicGalleryImageCountText', $context, $blocks);
        // line 458
        echo "
            ";
        // line 459
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 603
        echo "
            <div class=\"load-more-button-preview\" id=\"gg-anl-load-more\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 606
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 611
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\" id=\"gg-anl-cust-button\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 621
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")),         // line 622
$context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

\t\t\t";
        // line 628
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 666
        echo "
            ";
        // line 667
        $this->displayBlock('border', $context, $blocks);
        // line 712
        echo "
            ";
        // line 713
        $this->displayBlock('shadow', $context, $blocks);
        // line 780
        echo "
            ";
        // line 781
        $this->displayBlock('popup', $context, $blocks);
        // line 1081
        echo "
            ";
        // line 1082
        $this->displayBlock('preload', $context, $blocks);
        // line 1134
        echo "        </div>

        ";
        // line 1136
        $this->displayBlock('post', $context, $blocks);
        // line 1153
        echo "
\t\t<div data-tab=\"overlay\">
\t\t\t";
        // line 1156
        echo "\t\t\t";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube", "show-on-hover" => "Show on Hover");
        // line 1186
        echo "\t\t\t";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1193
        echo "\t\t\t";
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1194
        echo "\t\t\t";
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1195
        echo "
            ";
        // line 1196
        $this->displayBlock('captionSettingsType', $context, $blocks);
        // line 1215
        echo "\t\t\t";
        echo $context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1217
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"));
        // line 1219
        echo "
\t\t\t";
        // line 1220
        echo         // line 1221
$context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), array("id" => "iconsEffectName"));
        // line 1222
        echo "

\t\t\t<div class=\"ggCaptionBuilderWrap\">
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"captions-icons\">
\t\t\t\t\t";
        // line 1226
        $this->displayBlock('overlaySettings', $context, $blocks);
        // line 1468
        echo "
\t\t\t\t\t";
        // line 1469
        $this->displayBlock('icons', $context, $blocks);
        // line 1596
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"caption-builder\">
\t\t\t\t\t";
        // line 1598
        $this->displayBlock('proCaptionAndIconSettings', $context, $blocks);
        // line 1600
        echo "\t\t\t\t</div>
\t\t\t</div>
        </div>

        ";
        // line 1604
        $this->displayBlock('categories', $context, $blocks);
        // line 1635
        echo "
        ";
        // line 1636
        $this->displayBlock('watermark', $context, $blocks);
        // line 1651
        echo "
        ";
        // line 1652
        $this->displayBlock('form', $context, $blocks);
        // line 1654
        echo "
        ";
        // line 1655
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1657
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1660
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1664
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1665
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1669
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1671
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1673
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1676
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1678
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1685
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1689
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1694
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1696
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
\t\t\t<div class=\"popupPlacementTypeWrapper\">
\t\t\t\t";
        // line 1699
        $context["popupPlacementType"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array()), "placementType", array()) == null)) ? (0) : ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array()), "placementType", array())));
        // line 1700
        echo "\t\t\t\t<h4>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("How to fit image in lightbox")), "html", null, true);
        echo "</h4>
\t\t\t\t";
        // line 1701
        echo ((((((((        // line 1702
$context["form"]->getradio("popup[placementType]", "0", twig_array_merge(array("id" => "popupPlacementTypeFts", "class" => "popupPlacementTypeRadio"), (((        // line 1705
(isset($context["popupPlacementType"]) ? $context["popupPlacementType"] : null) == 0)) ? (array("checked" => "checked")) : (array())))) .         // line 1707
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit To Screen")), "popupPlacementTypeFts")) . "<br/>") .         // line 1711
$context["form"]->getradio("popup[placementType]", "1", twig_array_merge(array("id" => "popupPlacementTypeFw", "class" => "popupPlacementTypeRadio"), (((        // line 1714
(isset($context["popupPlacementType"]) ? $context["popupPlacementType"] : null) == 1)) ? (array("checked" => "checked")) : (array()))))) .         // line 1716
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fit Width")), "popupPlacementTypeFw")) . "<br/>") .         // line 1720
$context["form"]->getradio("popup[placementType]", "2", twig_array_merge(array("id" => "popupPlacementTypeSo", "class" => "popupPlacementTypeRadio"), (((        // line 1723
(isset($context["popupPlacementType"]) ? $context["popupPlacementType"] : null) == 2)) ? (array("checked" => "checked")) : (array()))))) .         // line 1725
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Original")), "popupPlacementTypeSo")) . "<br/>");
        // line 1730
        echo "
\t\t\t</div>
            <div>
                ";
        // line 1733
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1742
        echo "
                ";
        // line 1743
        if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
            // line 1744
            echo "                    ";
            $context["bigImageThemes"] = twig_array_merge((isset($context["bigImageThemes"]) ? $context["bigImageThemes"] : null), array("theme_1_pro" => "Fullscreen popup"));
            // line 1745
            echo "                ";
        }
        // line 1746
        echo "
                ";
        // line 1747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bigImageThemes"]) ? $context["bigImageThemes"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1748
            echo "                    <div class=\"grid-gallery-caption ";
            if (($context["value"] == $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "theme", array()))) {
                echo "gg-active";
            }
            echo "\">
                        <img data-name=\"";
            // line 1749
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1750
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $context["value"]), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
                             title=\"";
            // line 1751
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1753
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
\t\t\t\t\t\t<div class=\"gg-selected-theme\">
\t\t\t\t\t\t\t<div class=\"gg-selected-theme-txt\">";
            // line 1756
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(("Selected " . $context["name"]))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1760
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1764
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1766
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1767
            echo "                    ";
            if (($context["type"] == "direction-aware")) {
                // line 1768
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1776
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1779
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 1782
$context["type"], array(0 => "show-on-hover"))) {
                // line 1783
                echo "\t\t\t\t\t\t";
                $this->displayBlock('captionEffectInPro', $context, $blocks);
                // line 1800
                echo "                    ";
            } elseif (($context["type"] == "3d-cube")) {
                // line 1801
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1812
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 1814
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                // line 1816
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1822
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1826
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1827
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1828
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1831
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1836
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1840
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1841
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1842
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 1843
        $this->displayBlock('captionAndIconEffectsSign', $context, $blocks);
        // line 1846
        echo "                    ";
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1870
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1874
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1876
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1879
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1951
        echo "

                ";
        // line 1953
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shadowPresets"]) ? $context["shadowPresets"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1954
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1955
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1956
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1957
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1960
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1964
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1987
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1991
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1995
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 1995);
        // line 1996
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1997
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 2000
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 2001
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 2002
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 2005
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 2007
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 2014
        $this->displayBlock('modals', $context, $blocks);
        // line 2064
        echo "
\t";
        // line 2065
        $this->displayBlock('settingsOtherPro', $context, $blocks);
    }

    // line 280
    public function block_proHiddenSettings($context, array $blocks = array())
    {
    }

    // line 283
    public function block_area($context, array $blocks = array())
    {
        // line 284
        echo "                <table class=\"form-table\" name=\"area\" id=\"gg-anl-main\">
                    <thead>
\t\t\t\t\t\t";
        // line 286
        $this->displayBlock('galleryTypeSelectorItems', $context, $blocks);
        // line 305
        echo "
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 309
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 310
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 320
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), (((((((((((((        // line 321
$context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) .         // line 322
$context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 324
$context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 325
$context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 327
$context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 328
(isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 329
$context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        echo "

                        ";
        // line 333
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 334
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")),         // line 335
$context["form"]->getinput("text", "title", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 336
        echo "

                        ";
        // line 338
        echo $context["form"]->getrow($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "translate", array(0 => "Gallery Position"), "method"),         // line 339
$context["form"]->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")));
        echo "


                        ";
        // line 342
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), (        // line 343
$context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) .         // line 344
$context["form"]->getspan("", "pixels")), "distance");
        echo "

                        ";
        // line 346
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), (        // line 347
$context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width", array()), array("style" => array("width" => "140px"))) .         // line 348
$context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        echo "

                        ";
        // line 351
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")),         // line 352
$context["form"]->getcheckbox("fullscreen", "1", (($this->getAttribute(        // line 355
(isset($context["settings"]) ? $context["settings"] : null), "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 358
        echo "

                        ";
        // line 360
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), (        // line 361
$context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        echo "

                        ";
        // line 368
        echo "
                        ";
        // line 369
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), (        // line 370
$context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) .         // line 371
$context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        echo "


                        ";
        // line 374
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), (        // line 375
$context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) .         // line 376
$context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        echo "

                        ";
        // line 378
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), (        // line 379
$context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) .         // line 380
$context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        echo "

                        ";
        // line 383
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 395
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")),         // line 396
$context["form"]->getselect("thumbnail[cropQuality]",         // line 398
(isset($context["qualityList"]) ? $context["qualityList"] : null), (($this->getAttribute($this->getAttribute(        // line 399
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 402
        echo "

                        ";
        // line 404
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")),         // line 405
$context["form"]->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute(        // line 408
(isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo", null, "display-first-photo-row");
        // line 413
        echo "

                        ";
        // line 415
        $this->displayBlock('openByLink', $context, $blocks);
        // line 423
        echo "
\t\t\t\t\t\t";
        // line 424
        $this->displayBlock('browserUrlTooltipHide', $context, $blocks);
        // line 433
        echo "
                        ";
        // line 434
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 436
        echo "
                        ";
        // line 437
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Make this settings - default")),         // line 438
$context["form"]->getcheckbox("defaultsettings", "1", (($this->getAttribute(        // line 441
(isset($context["settings"]) ? $context["settings"] : null), "defaultsettings", array())) ? (array("checked" => "checked")) : (array()))), "default-settings");
        // line 444
        echo "



                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 286
    public function block_galleryTypeSelectorItems($context, array $blocks = array())
    {
        // line 287
        echo "\t\t\t\t\t\t\t";
        $context["galleryTypeObj"] = array(0 => array("value" => "0", "title" => "Fixed"), 1 => array("value" => "1", "title" => "Vertical"), 2 => array("value" => "2", "title" => "Horizontal"), 3 => array("value" => "3", "title" => "Fixed Columns"), 4 => array("value" => "4", "title" => (("Mosaic(" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Available in Pro"))) . ")"), "disabled" => 1));
        // line 294
        echo "
\t\t\t\t\t\t\t";
        // line 295
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")),         // line 296
$context["form"]->getselectWithElem("area[grid]",         // line 298
(isset($context["galleryTypeObj"]) ? $context["galleryTypeObj"] : null), $this->getAttribute($this->getAttribute(        // line 299
(isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 303
        echo "
\t\t\t\t\t\t";
    }

    // line 415
    public function block_openByLink($context, array $blocks = array())
    {
        // line 416
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link",         // line 419
$context["form"]->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 421
        echo "
                        ";
    }

    // line 424
    public function block_browserUrlTooltipHide($context, array $blocks = array())
    {
        // line 425
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide browser url tooltip on image hover")), "utm_source=plugin&utm_medium=browser-url-tooltip-hide&utm_campaign=gallery", "browserUrlTooltipHideFree",         // line 428
$context["form"]->getcheckbox("browserUrlTooltipHideFree", "on", array("disabled" => "disabled")));
        // line 430
        echo "

\t\t\t\t\t\t";
    }

    // line 434
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 435
        echo "                        ";
    }

    // line 453
    public function block_mosaicImagesCount($context, array $blocks = array())
    {
        // line 454
        echo "            ";
    }

    // line 456
    public function block_mosaicGalleryImageCountText($context, array $blocks = array())
    {
        // line 457
        echo "\t\t\t";
    }

    // line 459
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 460
        echo "                <table class=\"form-table\" id=\"gg-anl-soc-share\">
                    <thead>
                    ";
        // line 462
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), (((        // line 463
$context["form"]->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) .         // line 464
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) .         // line 465
$context["form"]->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) .         // line 466
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 469
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "pluginInstalled", array())) {
            // line 470
            echo "                        ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "projectsList", array()))) {
                // line 471
                echo "

                            ";
                // line 473
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")),                 // line 474
$context["form"]->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute(                // line 475
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute(                // line 476
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 478
                echo "

                            ";
                // line 480
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")),                 // line 481
$context["form"]->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing");
                echo "

                            ";
                // line 483
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 484
$context["form"]->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 490
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 492
                echo "

                            ";
                // line 494
                echo $context["form"]->getrow("",                 // line 495
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                echo "

                            ";
                // line 497
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 498
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")),                 // line 499
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", true, ((((isset($context["enabled"]) ? $context["enabled"] : null) != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing");
                echo "

                            ";
                // line 501
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 502
$context["form"]->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 509
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 511
                echo "

                            ";
                // line 513
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 514
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 520
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 522
                echo "

                            ";
                // line 524
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 525
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 531
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 533
                echo "

                            ";
                // line 535
                echo $context["form"]->getrow("",                 // line 536
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                echo "

                            ";
                // line 538
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 539
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")),                 // line 540
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", true, ((((isset($context["enabled"]) ? $context["enabled"] : null) != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing");
                echo "

                            ";
                // line 542
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 543
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 550
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 552
                echo "

                            ";
                // line 554
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 555
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 561
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 563
                echo "

                            ";
                // line 565
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 566
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 572
(isset($context["settings"]) ? $context["settings"] : null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 574
                echo "

                        ";
            } else {
                // line 577
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 579
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 582
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 583
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 587
            echo "                    ";
        } else {
            // line 588
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 590
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 592
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 593
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 594
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 599
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 628
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 629
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-horiz-scroll\">
\t\t\t\t\t<thead>
\t\t\t\t\t";
        // line 631
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 632
        echo "\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), (((        // line 633
$context["form"]->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), (((isset($context["horizontalScrollEnabled"]) ? $context["horizontalScrollEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 634
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) .         // line 635
$context["form"]->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), (((isset($context["horizontalScrollEnabled"]) ? $context["horizontalScrollEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 636
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 639
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")),         // line 640
$context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        echo "

\t\t\t\t\t";
        // line 642
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")),         // line 643
$context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 657
(isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 658
        echo "

\t\t\t\t\t";
        // line 660
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 662
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"separator\"></div>
\t\t\t";
    }

    // line 660
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 661
        echo "\t\t\t\t\t";
    }

    // line 667
    public function block_border($context, array $blocks = array())
    {
        // line 668
        echo "                <table class=\"form-table\" name=\"border\" id=\"gg-anl-border-type\">
                    <thead>
                        ";
        // line 670
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 681
        echo "
                        ";
        // line 697
        echo "
                        ";
        // line 698
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), (        // line 699
$context["form"]->getselect("thumbnail[border][type]", (isset($context["borderTypes"]) ? $context["borderTypes"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) .         // line 700
$context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        echo "

                        ";
        // line 702
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),         // line 703
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        echo "

                        ";
        // line 705
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (        // line 706
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 707
$context["form"]->getspan("", "pixels")), "border-width");
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 713
    public function block_shadow($context, array $blocks = array())
    {
        // line 714
        echo "                <table class=\"form-table\" name=\"shadow\" id=\"gg-anl-shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 719
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 723
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 724
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 725
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 726
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 733
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 737
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 744
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                                ";
        // line 745
        echo $context["form"]->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 749
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 750
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 752
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 753
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 755
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 756
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 762
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")),         // line 763
$context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        echo "

                        ";
        // line 765
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")),         // line 766
$context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        echo "

                        ";
        // line 768
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")),         // line 769
$context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        echo "

                        ";
        // line 771
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")),         // line 772
$context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        echo "

                        ";
        // line 774
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")),         // line 775
$context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 781
    public function block_popup($context, array $blocks = array())
    {
        // line 782
        echo "                <table class=\"form-table\" id=\"gg-anl-popup\">
                    <thead>
                        ";
        // line 785
        echo "                        ";
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 786
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), (((        // line 787
$context["form"]->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), ((        // line 790
(isset($context["popUpEnabled"]) ? $context["popUpEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 792
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) .         // line 796
$context["form"]->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), ((        // line 799
(isset($context["popUpEnabled"]) ? $context["popUpEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 801
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 805
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 809
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), ((        // line 810
$context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) .         // line 815
$context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute(        // line 817
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()))) .         // line 819
$context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute(        // line 821
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "theme", array()), array("id" => "bigImageTheme"))));
        // line 824
        echo "

                        ";
        // line 827
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")),         // line 828
$context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute(        // line 831
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 834
        echo "

                        ";
        // line 837
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")),         // line 838
$context["form"]->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute(        // line 846
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 849
        echo "

                        ";
        // line 852
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 876
        echo "
\t\t\t\t\t\t";
        // line 878
        echo "\t\t\t\t\t\t";
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 896
        echo "
                        ";
        // line 898
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")),         // line 899
$context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute(        // line 902
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 905
        echo "

                        ";
        // line 907
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long titles")),         // line 908
$context["form"]->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute(        // line 911
(isset($context["settings"]) ? $context["settings"] : null), "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 913
        echo "

                        ";
        // line 916
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 917
$context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute(        // line 919
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 923
        echo "
                        
                        ";
        // line 926
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 927
$context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 942
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 945
        echo "

                        ";
        // line 948
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")),         // line 949
$context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute(        // line 952
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 956
        echo "

                        ";
        // line 959
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")),         // line 960
$context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute(        // line 963
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 967
        echo "

                        ";
        // line 970
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")),         // line 971
$context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 974
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 979
        echo "

                        ";
        // line 982
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")),         // line 983
$context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 986
(isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 990
        echo "

                        ";
        // line 993
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), (((        // line 994
$context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute(        // line 997
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) .         // line 1000
$context["form"]->getspan("", "x")) .         // line 1001
$context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute(        // line 1004
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) .         // line 1007
$context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 1009
        echo "


                        ";
        // line 1013
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")),         // line 1015
$context["form"]->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute(        // line 1018
(isset($context["settings"]) ? $context["settings"] : null), "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 1021
        echo "

                        ";
        // line 1024
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 1072
        echo "                    </tbody>
                </table>
\t\t\t\t";
        // line 1074
        echo $context["form"]->gethidden("popup[placementType]", (($this->getAttribute($this->getAttribute(        // line 1076
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "placementType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "placementType", array()), 0)) : (0)), array("id" => "popupPlacementTypeHidden"));
        // line 1078
        echo "
                <div class=\"separator\"></div>
            ";
    }

    // line 852
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 853
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 856
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 858
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 862
        echo $context["form"]->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 872
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 878
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 879
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 882
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 884
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 888
        echo $context["form"]->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 892
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
    }

    // line 1024
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 1025
        echo "                            ";
        // line 1026
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", (((        // line 1029
$context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1031
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) .         // line 1034
$context["form"]->getspan("", "x")) .         // line 1035
$context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1037
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) .         // line 1040
$context["form"]->getspan("", "pixels")));
        // line 1041
        echo "

                            ";
        // line 1044
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay",         // line 1047
$context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1050
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 1053
        echo "
                            
                            ";
        // line 1056
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd",         // line 1059
$context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1066
(isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 1069
        echo "

                        ";
    }

    // line 1082
    public function block_preload($context, array $blocks = array())
    {
        // line 1083
        echo "                <table class=\"form-table\" name=\"preload\" id=\"gg-anl-preloader\">
                    <thead>
                        ";
        // line 1085
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1086
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), (((        // line 1087
$context["form"]->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), (((isset($context["preloadEnabled"]) ? $context["preloadEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 1088
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) .         // line 1089
$context["form"]->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), (((isset($context["preloadEnabled"]) ? $context["preloadEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1090
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        echo "
                    </thead>
                ";
        // line 1092
        if ( !$this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
            // line 1093
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1097
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1099
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1103
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 1106
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 1116
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1120
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1122
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1126
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 1127
            echo twig_escape_filter($this->env, (isset($context["piconImg"]) ? $context["piconImg"] : null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 1132
        echo "                </table>
            ";
    }

    // line 1136
    public function block_post($context, array $blocks = array())
    {
        // line 1137
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1139
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1142
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1147
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1196
    public function block_captionSettingsType($context, array $blocks = array())
    {
        // line 1197
        echo "\t\t\t\t<table class=\"form-table captions-settings-type\" name=\"captionSettingsType\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 1199
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Caption Builder")), "utm_source=plugin&utm_medium=caption_settings_type&utm_campaign=gallery", "caption-settings-type-pro",         // line 1202
$context["form"]->getselect("caption-settings-type-pro", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1211
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1226
    public function block_overlaySettings($context, array $blocks = array())
    {
        // line 1227
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1230
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), (((        // line 1231
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), ((        // line 1234
(isset($context["enableCaptions"]) ? $context["enableCaptions"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 1236
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .         // line 1240
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), ((        // line 1243
(isset($context["enableCaptions"]) ? $context["enableCaptions"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1245
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 1250
        echo "

\t\t\t\t\t\t\t";
        // line 1253
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")),         // line 1254
$context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")), "chooseEffect");
        // line 1260
        echo "

\t\t\t\t\t\t\t";
        // line 1263
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundImageForHoverEffect', $context, $blocks);
        // line 1278
        echo "
\t\t\t\t\t\t\t";
        // line 1280
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundColorForShowOnHover', $context, $blocks);
        // line 1293
        echo "
\t\t\t\t\t\t\t";
        // line 1295
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")),         // line 1296
$context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1299
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1303
        echo "

\t\t\t\t\t\t\t";
        // line 1306
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")),         // line 1307
$context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))),         // line 1310
(isset($context["polaroidIsEnable"]) ? $context["polaroidIsEnable"] : null), array("style" => "width: auto;", "class" => "polaroid-effect-class")), "polaroid-effect");
        // line 1314
        echo "

\t\t\t\t\t\t\t";
        // line 1317
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")),         // line 1318
$context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1321
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1325
        echo "

\t\t\t\t\t\t\t";
        // line 1328
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")),         // line 1329
$context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1332
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1336
        echo "

\t\t\t\t\t\t\t";
        // line 1339
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")),         // line 1340
$context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1343
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width", null, "polaroid-fram-width-row");
        // line 1349
        echo "

\t\t\t\t\t\t\t";
        // line 1352
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1353
$context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1355
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1359
        echo "

\t\t\t\t\t\t\t";
        // line 1362
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")),         // line 1363
$context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1365
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1369
        echo "

\t\t\t\t\t\t\t";
        // line 1372
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 1373
$context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1376
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1380
        echo "

\t\t\t\t\t\t\t";
        // line 1383
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), (        // line 1384
$context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1387
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) .         // line 1390
$context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1393
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1397
        echo "

\t\t\t\t\t\t\t";
        // line 1400
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")),         // line 1401
$context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1404
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1408
        echo "

\t\t\t\t\t\t\t";
        // line 1411
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")),         // line 1412
$context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1415
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1419
        echo "

\t\t\t\t\t\t\t";
        // line 1422
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")),         // line 1423
$context["form"]->getselectv("thumbnail[overlay][font_family]",         // line 1425
(isset($context["fontList"]) ? $context["fontList"] : null), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1426
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1430
        echo "


\t\t\t\t\t\t\t";
        // line 1434
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")),         // line 1435
$context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute(        // line 1438
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1442
        echo "

\t\t\t\t\t\t\t";
        // line 1445
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")),         // line 1446
$context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1449
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1452
        echo "

\t\t\t\t\t\t\t";
        // line 1455
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")),         // line 1456
$context["form"]->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1459
(isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1462
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t";
    }

    // line 1263
    public function block_backgroundImageForHoverEffect($context, array $blocks = array())
    {
        // line 1264
        echo "\t\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery", "overlay-effect-image-on-hover-enable",         // line 1267
$context["form"]->getselect("thumbnail[overlay][imageOnHoverEnable]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1276
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1280
    public function block_backgroundColorForShowOnHover($context, array $blocks = array())
    {
        // line 1281
        echo "\t\t\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color for \"Show on hover\"")), "utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery", "backgroundColorForShowOnHoverFree",         // line 1284
$context["form"]->getselect("thumbnail[overlay][backgroundFoShowOnHover]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), 0, array("disabled" => "disabled")));
        // line 1291
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1469
    public function block_icons($context, array $blocks = array())
    {
        // line 1470
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"icons\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1472
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1473
        echo "\t\t\t\t\t\t\t";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), (((        // line 1474
$context["form"]->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), (((isset($context["iconsEnabled"]) ? $context["iconsEnabled"] : null)) ? (array("checked" => "checked")) : (array())))) .         // line 1475
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .         // line 1476
$context["form"]->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), (((isset($context["iconsEnabled"]) ? $context["iconsEnabled"] : null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1477
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 1478
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 1481
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")),         // line 1482
$context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")));
        // line 1483
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1487
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1491
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1497
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1501
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1507
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1511
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1517
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1521
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsSize\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1527
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1531
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsMargin\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1537
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1541
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlay\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1547
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"true\" ";
        // line 1552
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()), "true");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1553
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"false\" ";
        // line 1555
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()), "false");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1556
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1564
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1568
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayTransparency\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1574
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 1579
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1580
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1581
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1582
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 1583
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\" ";
        // line 1584
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 5);
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\" ";
        // line 1585
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\" ";
        // line 1586
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\" ";
        // line 1587
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\" ";
        // line 1588
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\" ";
        // line 1589
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
    }

    // line 1598
    public function block_proCaptionAndIconSettings($context, array $blocks = array())
    {
        // line 1599
        echo "\t\t\t\t\t";
    }

    // line 1604
    public function block_categories($context, array $blocks = array())
    {
        // line 1605
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1607
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1610
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1614
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1615
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1618
        $this->displayBlock('pagination', $context, $blocks);
        // line 1633
        echo "            </div>
        ";
    }

    // line 1618
    public function block_pagination($context, array $blocks = array())
    {
        // line 1619
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1620
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1623
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1627
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1628
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1636
    public function block_watermark($context, array $blocks = array())
    {
        // line 1637
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1639
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1642
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1645
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1646
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1652
    public function block_form($context, array $blocks = array())
    {
        // line 1653
        echo "        ";
    }

    // line 1783
    public function block_captionEffectInPro($context, array $blocks = array())
    {
        // line 1784
        echo "\t\t\t\t\t\t<figure class=\"grid-gallery-caption available-in-pro\" data-grid-gallery-type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 1785
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery")), "html", null, true);
        echo "\" class=\"caption-available-in-pro-link\">
\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
        // line 1786
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<figcaption style=\"";
        // line 1788
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
\t\t\t\t\t\t\t\t\t<div style=\"display:table;width:100%;height:100%;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"display:table-cell;font-size:";
        // line 1791
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo ";padding:10px;vertical-align:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
        echo ";\">Caption</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t<div class=\"get-in-pro-element\">
\t\t\t\t\t\t\t\t";
        // line 1796
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pro Feature")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t";
    }

    // line 1843
    public function block_captionAndIconEffectsSign($context, array $blocks = array())
    {
        // line 1844
        echo "\t\t\t\t\t\t<h3>Captions effects with icons</h3>
\t\t\t\t\t";
    }

    // line 1846
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1847
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1848
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1849
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1850
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1856
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1858
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1859
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1865
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1869
        echo "                    ";
    }

    // line 2014
    public function block_modals($context, array $blocks = array())
    {
        // line 2015
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 2017
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 2034
        echo "            ";
        ob_start();
        // line 2035
        echo "                ";
        $this->displayBlock('icon_wrap_item_class', $context, $blocks);
        // line 2038
        echo "            ";
        $context["var_icon_wrap_item_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2039
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsEffects"]) ? $context["iconsEffects"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 2040
            echo "                <div class=\"hi-icon-wrap ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background-color: #434A52; background-repeat: no-repeat; overflow: hidden;\">
                    <a href=\"#\" class=\"hi-icon ";
            // line 2041
            echo twig_escape_filter($this->env, (isset($context["var_icon_wrap_item_class"]) ? $context["var_icon_wrap_item_class"] : null), "html", null, true);
            echo "\" data-effect=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $context["name"]), "html", null, true);
            echo "\" style=\"\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2044
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 2047
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 2048
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 2051
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 2052
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 2055
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 2056
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 2059
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 2060
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 2035
    public function block_icon_wrap_item_class($context, array $blocks = array())
    {
        // line 2036
        echo "\t\t\t\t\ticon-fullscreen
                ";
    }

    // line 2065
    public function block_settingsOtherPro($context, array $blocks = array())
    {
        // line 2066
        echo "\t";
    }

    // line 2
    public function getlabel($__label__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
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
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3188 => 3,  3175 => 2,  3171 => 2066,  3168 => 2065,  3163 => 2036,  3160 => 2035,  3152 => 2060,  3148 => 2059,  3142 => 2056,  3138 => 2055,  3132 => 2052,  3128 => 2051,  3122 => 2048,  3118 => 2047,  3113 => 2044,  3100 => 2041,  3091 => 2040,  3086 => 2039,  3083 => 2038,  3080 => 2035,  3077 => 2034,  3075 => 2017,  3070 => 2015,  3067 => 2014,  3063 => 1869,  3053 => 1865,  3044 => 1859,  3040 => 1858,  3035 => 1856,  3026 => 1850,  3022 => 1849,  3017 => 1848,  3012 => 1847,  3009 => 1846,  3004 => 1844,  3001 => 1843,  2993 => 1796,  2982 => 1791,  2976 => 1788,  2971 => 1786,  2967 => 1785,  2962 => 1784,  2959 => 1783,  2955 => 1653,  2952 => 1652,  2943 => 1646,  2939 => 1645,  2933 => 1642,  2927 => 1639,  2923 => 1637,  2920 => 1636,  2911 => 1628,  2907 => 1627,  2900 => 1623,  2894 => 1620,  2891 => 1619,  2888 => 1618,  2883 => 1633,  2881 => 1618,  2875 => 1615,  2871 => 1614,  2864 => 1610,  2858 => 1607,  2854 => 1605,  2851 => 1604,  2847 => 1599,  2844 => 1598,  2833 => 1589,  2829 => 1588,  2825 => 1587,  2821 => 1586,  2817 => 1585,  2810 => 1584,  2806 => 1583,  2802 => 1582,  2798 => 1581,  2794 => 1580,  2790 => 1579,  2782 => 1574,  2773 => 1568,  2766 => 1564,  2755 => 1556,  2751 => 1555,  2746 => 1553,  2742 => 1552,  2734 => 1547,  2725 => 1541,  2718 => 1537,  2709 => 1531,  2702 => 1527,  2693 => 1521,  2686 => 1517,  2677 => 1511,  2670 => 1507,  2661 => 1501,  2654 => 1497,  2645 => 1491,  2638 => 1487,  2632 => 1483,  2630 => 1482,  2629 => 1481,  2624 => 1478,  2622 => 1477,  2621 => 1476,  2620 => 1475,  2619 => 1474,  2617 => 1473,  2615 => 1472,  2611 => 1470,  2608 => 1469,  2603 => 1291,  2601 => 1284,  2599 => 1281,  2596 => 1280,  2591 => 1276,  2589 => 1267,  2587 => 1264,  2584 => 1263,  2575 => 1462,  2573 => 1459,  2572 => 1456,  2570 => 1455,  2566 => 1452,  2564 => 1449,  2563 => 1446,  2561 => 1445,  2557 => 1442,  2555 => 1438,  2554 => 1435,  2552 => 1434,  2547 => 1430,  2545 => 1426,  2544 => 1425,  2543 => 1423,  2541 => 1422,  2537 => 1419,  2535 => 1415,  2534 => 1412,  2532 => 1411,  2528 => 1408,  2526 => 1404,  2525 => 1401,  2523 => 1400,  2519 => 1397,  2517 => 1393,  2516 => 1390,  2515 => 1387,  2514 => 1384,  2512 => 1383,  2508 => 1380,  2506 => 1376,  2505 => 1373,  2503 => 1372,  2499 => 1369,  2497 => 1365,  2496 => 1363,  2494 => 1362,  2490 => 1359,  2488 => 1355,  2487 => 1353,  2485 => 1352,  2481 => 1349,  2479 => 1343,  2478 => 1340,  2476 => 1339,  2472 => 1336,  2470 => 1332,  2469 => 1329,  2467 => 1328,  2463 => 1325,  2461 => 1321,  2460 => 1318,  2458 => 1317,  2454 => 1314,  2452 => 1310,  2451 => 1307,  2449 => 1306,  2445 => 1303,  2443 => 1299,  2442 => 1296,  2440 => 1295,  2437 => 1293,  2434 => 1280,  2431 => 1278,  2428 => 1263,  2424 => 1260,  2422 => 1254,  2420 => 1253,  2416 => 1250,  2414 => 1245,  2413 => 1243,  2412 => 1240,  2411 => 1236,  2410 => 1234,  2409 => 1231,  2407 => 1230,  2403 => 1227,  2400 => 1226,  2393 => 1211,  2391 => 1202,  2390 => 1199,  2386 => 1197,  2383 => 1196,  2374 => 1148,  2370 => 1147,  2362 => 1142,  2356 => 1139,  2352 => 1137,  2349 => 1136,  2344 => 1132,  2336 => 1127,  2332 => 1126,  2325 => 1122,  2320 => 1120,  2314 => 1116,  2304 => 1106,  2298 => 1103,  2291 => 1099,  2286 => 1097,  2280 => 1093,  2278 => 1092,  2273 => 1090,  2272 => 1089,  2271 => 1088,  2270 => 1087,  2268 => 1086,  2266 => 1085,  2262 => 1083,  2259 => 1082,  2253 => 1069,  2251 => 1066,  2250 => 1059,  2248 => 1056,  2244 => 1053,  2242 => 1050,  2241 => 1047,  2239 => 1044,  2235 => 1041,  2233 => 1040,  2232 => 1037,  2231 => 1035,  2230 => 1034,  2229 => 1031,  2228 => 1029,  2226 => 1026,  2224 => 1025,  2221 => 1024,  2214 => 892,  2212 => 888,  2205 => 884,  2200 => 882,  2195 => 879,  2192 => 878,  2185 => 872,  2183 => 862,  2176 => 858,  2171 => 856,  2166 => 853,  2163 => 852,  2157 => 1078,  2155 => 1076,  2154 => 1074,  2150 => 1072,  2147 => 1024,  2143 => 1021,  2141 => 1018,  2140 => 1015,  2138 => 1013,  2133 => 1009,  2131 => 1007,  2130 => 1004,  2129 => 1001,  2128 => 1000,  2127 => 997,  2126 => 994,  2124 => 993,  2120 => 990,  2118 => 986,  2117 => 983,  2115 => 982,  2111 => 979,  2109 => 974,  2108 => 971,  2106 => 970,  2102 => 967,  2100 => 963,  2099 => 960,  2097 => 959,  2093 => 956,  2091 => 952,  2090 => 949,  2088 => 948,  2084 => 945,  2082 => 942,  2081 => 927,  2079 => 926,  2075 => 923,  2073 => 919,  2072 => 917,  2070 => 916,  2066 => 913,  2064 => 911,  2063 => 908,  2062 => 907,  2058 => 905,  2056 => 902,  2055 => 899,  2053 => 898,  2050 => 896,  2047 => 878,  2044 => 876,  2041 => 852,  2037 => 849,  2035 => 846,  2034 => 838,  2032 => 837,  2028 => 834,  2026 => 831,  2025 => 828,  2023 => 827,  2019 => 824,  2017 => 821,  2016 => 819,  2015 => 817,  2014 => 815,  2013 => 810,  2011 => 809,  2006 => 805,  2004 => 801,  2003 => 799,  2002 => 796,  2001 => 792,  2000 => 790,  1999 => 787,  1997 => 786,  1994 => 785,  1990 => 782,  1987 => 781,  1978 => 775,  1977 => 774,  1972 => 772,  1971 => 771,  1966 => 769,  1965 => 768,  1960 => 766,  1959 => 765,  1954 => 763,  1953 => 762,  1944 => 756,  1938 => 755,  1933 => 753,  1927 => 752,  1922 => 750,  1916 => 749,  1909 => 745,  1905 => 744,  1895 => 737,  1888 => 733,  1878 => 726,  1872 => 725,  1868 => 724,  1862 => 723,  1855 => 719,  1848 => 714,  1845 => 713,  1836 => 707,  1835 => 706,  1834 => 705,  1829 => 703,  1828 => 702,  1823 => 700,  1822 => 699,  1821 => 698,  1818 => 697,  1815 => 681,  1813 => 670,  1809 => 668,  1806 => 667,  1802 => 661,  1799 => 660,  1792 => 662,  1790 => 660,  1786 => 658,  1784 => 657,  1783 => 643,  1782 => 642,  1777 => 640,  1776 => 639,  1770 => 636,  1769 => 635,  1768 => 634,  1767 => 633,  1765 => 632,  1763 => 631,  1759 => 629,  1756 => 628,  1749 => 599,  1741 => 594,  1737 => 593,  1733 => 592,  1728 => 590,  1724 => 588,  1721 => 587,  1714 => 583,  1710 => 582,  1704 => 579,  1700 => 577,  1695 => 574,  1693 => 572,  1692 => 566,  1691 => 565,  1687 => 563,  1685 => 561,  1684 => 555,  1683 => 554,  1679 => 552,  1677 => 550,  1676 => 543,  1675 => 542,  1670 => 540,  1668 => 539,  1666 => 538,  1661 => 536,  1660 => 535,  1656 => 533,  1654 => 531,  1653 => 525,  1652 => 524,  1648 => 522,  1646 => 520,  1645 => 514,  1644 => 513,  1640 => 511,  1638 => 509,  1637 => 502,  1636 => 501,  1631 => 499,  1629 => 498,  1627 => 497,  1622 => 495,  1621 => 494,  1617 => 492,  1615 => 490,  1614 => 484,  1613 => 483,  1608 => 481,  1607 => 480,  1603 => 478,  1601 => 476,  1600 => 475,  1599 => 474,  1598 => 473,  1594 => 471,  1591 => 470,  1589 => 469,  1583 => 466,  1582 => 465,  1581 => 464,  1580 => 463,  1579 => 462,  1575 => 460,  1572 => 459,  1568 => 457,  1565 => 456,  1561 => 454,  1558 => 453,  1554 => 435,  1551 => 434,  1545 => 430,  1543 => 428,  1541 => 425,  1538 => 424,  1533 => 421,  1531 => 419,  1529 => 416,  1526 => 415,  1521 => 303,  1519 => 299,  1518 => 298,  1517 => 296,  1516 => 295,  1513 => 294,  1510 => 287,  1507 => 286,  1496 => 444,  1494 => 441,  1493 => 438,  1492 => 437,  1489 => 436,  1487 => 434,  1484 => 433,  1482 => 424,  1479 => 423,  1477 => 415,  1473 => 413,  1471 => 408,  1470 => 405,  1469 => 404,  1465 => 402,  1463 => 399,  1462 => 398,  1461 => 396,  1459 => 395,  1456 => 383,  1451 => 380,  1450 => 379,  1449 => 378,  1444 => 376,  1443 => 375,  1442 => 374,  1436 => 371,  1435 => 370,  1434 => 369,  1431 => 368,  1426 => 361,  1425 => 360,  1421 => 358,  1419 => 355,  1418 => 352,  1416 => 351,  1411 => 348,  1410 => 347,  1409 => 346,  1404 => 344,  1403 => 343,  1402 => 342,  1396 => 339,  1395 => 338,  1391 => 336,  1389 => 335,  1388 => 334,  1385 => 333,  1380 => 329,  1379 => 328,  1378 => 327,  1377 => 325,  1376 => 324,  1375 => 322,  1374 => 321,  1373 => 320,  1366 => 316,  1357 => 310,  1353 => 309,  1347 => 305,  1345 => 286,  1341 => 284,  1338 => 283,  1333 => 280,  1329 => 2065,  1326 => 2064,  1324 => 2014,  1314 => 2007,  1309 => 2005,  1303 => 2002,  1299 => 2001,  1295 => 2000,  1289 => 1997,  1284 => 1996,  1282 => 1995,  1275 => 1991,  1268 => 1987,  1243 => 1964,  1233 => 1960,  1227 => 1957,  1217 => 1956,  1207 => 1955,  1204 => 1954,  1200 => 1953,  1196 => 1951,  1194 => 1879,  1188 => 1876,  1183 => 1874,  1177 => 1870,  1174 => 1846,  1172 => 1843,  1168 => 1842,  1165 => 1841,  1151 => 1840,  1144 => 1836,  1133 => 1831,  1127 => 1828,  1123 => 1827,  1118 => 1826,  1111 => 1822,  1102 => 1816,  1097 => 1814,  1092 => 1812,  1077 => 1801,  1074 => 1800,  1071 => 1783,  1069 => 1782,  1063 => 1779,  1057 => 1776,  1045 => 1768,  1042 => 1767,  1025 => 1766,  1020 => 1764,  1014 => 1760,  1004 => 1756,  998 => 1753,  993 => 1751,  987 => 1750,  981 => 1749,  974 => 1748,  970 => 1747,  967 => 1746,  964 => 1745,  961 => 1744,  959 => 1743,  956 => 1742,  954 => 1733,  949 => 1730,  947 => 1725,  946 => 1723,  945 => 1720,  944 => 1716,  943 => 1714,  942 => 1711,  941 => 1707,  940 => 1705,  939 => 1702,  938 => 1701,  933 => 1700,  931 => 1699,  925 => 1696,  920 => 1694,  912 => 1689,  905 => 1685,  895 => 1678,  890 => 1676,  884 => 1673,  879 => 1671,  874 => 1669,  867 => 1665,  863 => 1664,  856 => 1660,  850 => 1657,  845 => 1655,  842 => 1654,  840 => 1652,  837 => 1651,  835 => 1636,  832 => 1635,  830 => 1604,  824 => 1600,  822 => 1598,  818 => 1596,  816 => 1469,  813 => 1468,  811 => 1226,  805 => 1222,  803 => 1221,  802 => 1220,  799 => 1219,  797 => 1217,  795 => 1215,  793 => 1196,  790 => 1195,  787 => 1194,  784 => 1193,  781 => 1186,  778 => 1156,  774 => 1153,  772 => 1136,  768 => 1134,  766 => 1082,  763 => 1081,  761 => 781,  758 => 780,  756 => 713,  753 => 712,  751 => 667,  748 => 666,  746 => 628,  737 => 622,  736 => 621,  724 => 612,  720 => 611,  712 => 608,  707 => 606,  702 => 603,  700 => 459,  697 => 458,  695 => 456,  692 => 455,  690 => 453,  687 => 452,  685 => 283,  681 => 281,  679 => 280,  675 => 279,  671 => 278,  667 => 277,  663 => 276,  659 => 275,  655 => 274,  651 => 273,  646 => 271,  642 => 270,  638 => 269,  634 => 268,  630 => 267,  626 => 266,  622 => 265,  618 => 264,  614 => 263,  610 => 262,  606 => 260,  603 => 259,  600 => 258,  597 => 257,  590 => 174,  587 => 173,  582 => 158,  578 => 156,  572 => 154,  569 => 153,  565 => 151,  559 => 149,  557 => 148,  546 => 145,  543 => 144,  539 => 120,  535 => 118,  533 => 117,  530 => 116,  527 => 115,  520 => 252,  518 => 244,  514 => 243,  508 => 240,  504 => 239,  500 => 238,  496 => 237,  492 => 236,  488 => 235,  484 => 234,  480 => 233,  476 => 232,  472 => 231,  468 => 230,  464 => 228,  458 => 225,  454 => 224,  450 => 223,  446 => 222,  443 => 221,  436 => 217,  430 => 216,  425 => 214,  419 => 213,  414 => 212,  412 => 211,  408 => 210,  401 => 206,  396 => 204,  392 => 203,  386 => 200,  381 => 198,  368 => 190,  360 => 189,  354 => 185,  347 => 181,  343 => 179,  338 => 176,  335 => 173,  333 => 172,  331 => 171,  329 => 170,  317 => 162,  315 => 161,  312 => 160,  310 => 144,  307 => 143,  304 => 142,  301 => 141,  298 => 140,  295 => 139,  293 => 138,  290 => 137,  287 => 136,  284 => 135,  281 => 134,  278 => 133,  276 => 132,  273 => 131,  270 => 130,  267 => 129,  265 => 128,  262 => 127,  259 => 126,  256 => 125,  254 => 124,  251 => 123,  249 => 122,  246 => 121,  244 => 115,  237 => 110,  231 => 108,  229 => 107,  226 => 106,  224 => 105,  216 => 100,  206 => 93,  201 => 91,  192 => 85,  187 => 83,  183 => 82,  180 => 81,  174 => 70,  171 => 69,  168 => 68,  165 => 67,  159 => 65,  156 => 64,  153 => 63,  150 => 62,  145 => 58,  140 => 59,  138 => 58,  133 => 56,  125 => 51,  117 => 46,  109 => 41,  101 => 36,  90 => 30,  83 => 28,  75 => 26,  72 => 7,  69 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "/is/htdocs/wp10646851_1IA7E08J8L/traka/wordpress/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/settings.twig");
    }
}
