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

/* Demo-Store/template/common/footer.twig */
class __TwigTemplate_98cd5b7f59d6140ea825b6011c074167bf82df2c9ed059d995c30a63e399c569 extends \Twig\Template
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
        echo "<footer>
\t<div class=\"footer-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t";
        // line 5
        echo ($context["footertop"] ?? null);
        echo "
\t</div>
\t</div>
</div>
<div class=\"footer-middle\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t";
        // line 12
        echo ($context["footermiddle"] ?? null);
        echo "
\t</div>
\t</div>
</div>
  <div id=\"footer\" >
    <div class=\"container\">
     <div class=\"row\">
     
     <div class=\"footer-blocks\">
      ";
        // line 21
        echo ($context["footerleft"] ?? null);
        echo "
      ";
        // line 22
        if (($context["informations"] ?? null)) {
            // line 23
            echo "      <div id=\"info\" class=\"col-sm-3 column\">
        <h5>";
            // line 24
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 27
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 27);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          <li><a href=\"";
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
        </ul>
      </div>
      ";
        }
        // line 33
        echo "    <div class=\"col-sm-3 column\">
        <h5>";
        // line 34
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 36
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 38
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 39
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 40
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div id=\"extra-link\" class=\"col-sm-3 column\">
        <h5>";
        // line 44
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 46
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 47
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 48
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 49
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 50
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div id=\"account_link\" class=\"col-sm-3 column\">
        <h5>";
        // line 54
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 56
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 57
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 58
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 59
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 60
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div> 
    </div>
    </div>
</div>
  

</div>
<div class=\"bottomfooter\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"content_footer_bottom\"> ";
        // line 72
        echo ($context["footerbottom"] ?? null);
        echo "</div>\t
 <p class=\"powered\">";
        // line 73
        echo ($context["powered"] ?? null);
        echo "</p>
</div>
</div>
</div>
</footer>
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 79
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "<script type=\"text/javascript\">

\$(document).ready(function(){
\$('#wdtestimonial-carousel').owlCarousel({
\t\titems: 1,
\t\tautoPlay: false,
\t\tsingleItem: true,
\t\tnavigation: true,
\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
\t\tpagination: true,
\t});
});\t
</script>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 81,  245 => 79,  241 => 78,  233 => 73,  229 => 72,  212 => 60,  206 => 59,  200 => 58,  194 => 57,  188 => 56,  183 => 54,  174 => 50,  168 => 49,  162 => 48,  156 => 47,  150 => 46,  145 => 44,  136 => 40,  130 => 39,  124 => 38,  118 => 37,  112 => 36,  107 => 34,  104 => 33,  94 => 29,  83 => 27,  79 => 26,  74 => 24,  71 => 23,  69 => 22,  65 => 21,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/common/footer.twig", "");
    }
}
