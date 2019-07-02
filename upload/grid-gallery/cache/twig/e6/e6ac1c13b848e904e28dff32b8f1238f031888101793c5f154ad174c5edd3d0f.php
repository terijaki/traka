<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_76b6d221e613a4c59081db8ca8e6d127b63f94b1a6bf95368dd990e632e59f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 82
        echo "
";
    }

    // line 1
    public function getshow($__areaWidth__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $__areaWidth__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr ";
            if (twig_test_empty((isset($context["galleryId"]) ? $context["galleryId"] : null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (isset($context["areaWidth"]) ? $context["areaWidth"] : null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>

            <h3 style=\"margin-top: 0px\">";
                // line 29
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from cloud services")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "googledrive", 1 => "index", 2 => array("id" => (isset($context["galleryId"]) ? $context["galleryId"] : null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 39
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery disabled\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "\" data-upload
                    data-src=\"https://supsystic.com/documentation/flickr/\" >
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 49
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery disabled\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "\" data-upload
                    data-src=\"https://supsystic.com/documentation/tumblr/\" >
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 56
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery disabled\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "\" data-upload
                    data-src=\"https://supsystic.com/documentation/facebook/\" >
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 63
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery disabled\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "\" data-upload
                    data-src=\"https://supsystic.com/documentation/ftp-import/\" >
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 70
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery disabled\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "\" data-upload
                    data-src=\"https://supsystic.com/documentation/google-drive-import/\" >
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 77
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 80
            echo "    </div>
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
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 80,  207 => 77,  201 => 74,  194 => 70,  188 => 67,  181 => 63,  175 => 60,  168 => 56,  162 => 53,  155 => 49,  149 => 46,  142 => 42,  135 => 39,  129 => 36,  124 => 34,  119 => 32,  114 => 30,  110 => 29,  104 => 26,  99 => 24,  94 => 22,  89 => 20,  84 => 18,  78 => 16,  76 => 15,  71 => 13,  66 => 11,  62 => 10,  57 => 8,  52 => 6,  46 => 3,  37 => 2,  24 => 1,  19 => 82,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/import.twig", "/is/htdocs/wp10646851_1IA7E08J8L/traka/wordpress/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/import.twig");
    }
}
