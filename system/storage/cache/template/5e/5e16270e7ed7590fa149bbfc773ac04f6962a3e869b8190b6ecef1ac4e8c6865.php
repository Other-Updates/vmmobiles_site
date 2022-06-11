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

/* Demo-Store/template/common/home.twig */
class __TwigTemplate_1e599305e0788f673086f209e129f9a5a442966912b02c6320fdfff329d9e18e extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 3
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 4
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 5
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
        <div class=\"content-top\">   
             ";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
        </div>
        <div class=\"container\">
            <div class=\"row\">
    ";
        // line 17
        echo ($context["content_bottom"] ?? null);
        echo "
    </div></div>
    ";
        // line 19
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 21
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
\$(document).ready(function(){
    \$('.service-area-carousel').owlCarousel({
            items: 4,
            autoPlay: true,
            singleItem: false,
            navigation: true,
            navigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
            pagination: false,
            itemsDesktop : [1500,4],
            itemsDesktopSmall:[1199,3],
            itemsTablet :\t[733,2],
            itemsTabletSmall : [575, 1],
            // itemsMobile: [479, 2]
        });

         \$('#wdcmsbanner-carousel').owlCarousel({
            items: 5,
            autoPlay: true,
            singleItem: false,
            navigation: true,
            navigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
            pagination: false,
            itemsDesktop : [1500,5],
            itemsDesktopSmall:[1199,4],
            itemsTablet :\t[991,3],
            itemsTabletSmall : [543, 2],
            itemsMobile: [479, 2]
        });
    });\t
</script>";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  85 => 19,  80 => 17,  73 => 13,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/common/home.twig", "");
    }
}
