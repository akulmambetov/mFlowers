<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\open_server_5_3_5_basic_premium_ultimate\OSPanel\domains\october/themes/lovata-bootstrap-shopaholic/layouts/content.htm */
class __TwigTemplate_04654d96643a8adaa3fc0fade6992707fc6d992f58d2747984f55b4d92ca9d9b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start();
        // line 2
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["path_css"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "    ";
        if (($context["seo_toolbox_is_available"] ?? null)) {
            // line 10
            echo "        ";
            $context['__placeholder_seo_tags_default_contents'] = null;            ob_start();            // line 11
            echo "            ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoToolbox"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 12
            echo "        ";
            $context['__placeholder_seo_tags_default_contents'] = ob_get_clean();            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('seo_tags', $context['__placeholder_seo_tags_default_contents']);
            unset($context['__placeholder_seo_tags_default_contents']);            // line 13
            echo "    ";
        }
        // line 14
        echo "</head>
<body class=\"body\">
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "    <div class=\"site-content\">
        <div class=\"container wysiwyg\">
            ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "        </div>
    </div>
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["path_js"] ?? null), "html", null, true);
        echo "\"></script>
    ";
        // line 24
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 25
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 26
        echo "</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/layouts/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  108 => 25,  97 => 24,  92 => 23,  88 => 22,  84 => 20,  82 => 19,  78 => 17,  74 => 16,  70 => 14,  67 => 13,  65 => 10,  63 => 12,  58 => 11,  56 => 10,  53 => 9,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"{{ path_css }}\">
    {% styles %}
    {% if seo_toolbox_is_available %}
        {% placeholder seo_tags default %}
            {% component 'SeoToolbox' %}
        {% endplaceholder %}
    {% endif %}
</head>
<body class=\"body\">
    {% partial 'header/header' %}
    <div class=\"site-content\">
        <div class=\"container wysiwyg\">
            {% page %}
        </div>
    </div>
    {% partial 'footer/footer' %}
<script src=\"{{ path_js }}\"></script>
    {% framework extras %}
    {% scripts %}
</body>
</html>
{% endspaceless %}", "D:\\open_server_5_3_5_basic_premium_ultimate\\OSPanel\\domains\\october/themes/lovata-bootstrap-shopaholic/layouts/content.htm", "");
    }
}
