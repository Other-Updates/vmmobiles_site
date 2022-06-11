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

/* Demo-Store/template/common/header.twig */
class __TwigTemplate_570875859dd8538af0e9736679d3215948d733359346b675025a1b8a1d5a273f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.js\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" /> 
<link href=\"catalog/view/theme/";
        // line 26
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap\" rel=\"stylesheet\"> 
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 29
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/lightbox.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 30
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 31
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 33
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/animate.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.transitions.css\" />
";
        // line 36
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 37
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo ($context["mytemplate"] ?? null);
            echo "/stylesheet/webdigify/rtl.css\">
";
        }
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 41);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 41);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 47
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 47);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 47);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 50
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "<!-- webdigify www.templatemela.com - Start -->
<script src=\"catalog/view/javascript/webdigify/custom.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jstree.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/carousel.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/webdigify.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.custom.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.formalize.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.elevatezoom.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/bootstrap-notify.min.js\"></script>  
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/tabs.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.hoverdir.js\"></script>
<script src=\"catalog/view/javascript/webdigify/modernizr.js\"></script>
<script src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/inview.js\"></script>


<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if (\$(window).width() > 767) {
    \$('.quickview-button').magnificPopup({
      type:'iframe',
      delegate: 'a',
      preloader: true,
      tLoading: 'Loading image #%curr%...',
    });
 }  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

</script>

<!-- webdigify www.templatemela.com - End -->

<script src=\"catalog/view/javascript/common.js\"></script>

</head>

";
        // line 93
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 94
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 95
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 96
            if (($context["column_left"] ?? null)) {
                // line 97
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 98
($context["column_right"] ?? null)) {
                // line 99
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 102
            $context["layoutclass"] = "layout-1";
        }
        // line 104
        echo "
<body class=\"";
        // line 105
        echo ($context["class"] ?? null);
        echo " ";
        echo " ";
        echo " ";
        echo ($context["layoutclass"] ?? null);
        echo "\">
<header>
<div class=\"header_top\">
  <div class=\"container\">
\t<div class=\"row\">
      <div class=\"col-sm-3 header-logo\">
        <div id=\"logo\">";
        // line 111
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 112
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 114
        echo "        </div>
      </div>
      <div class=\"col-sm-4 pr-0\">";
        // line 116
        echo ($context["headerleft"] ?? null);
        echo " </div>  
    
    <!-- <div id=\"_desktop_contact_link\"></div> -->

     <div class=\"nav2\">
      <div class=\"lang-curr-wrapper\">
          ";
        // line 122
        echo ($context["language"] ?? null);
        echo "
           ";
        // line 123
        echo ($context["currency"] ?? null);
        echo "
          </div>
    <div class=\"account\">     
      <div class=\"dropdown myaccount\"><a href=\"";
        // line 126
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"></a>
          <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
            <span class=\"drop_account\">
        <div class=\"login_acc\">
        ";
        // line 130
        if (($context["logged"] ?? null)) {
            // line 131
            echo "          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 132
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
          <li><a class=\"account_logout1\" href=\"";
            // line 133
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 135
            echo "          \t<li><a class=\"login\" href=\"";
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
          <li><a class=\"reg\" href=\"";
            // line 136
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 137
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
        ";
        }
        // line 139
        echo "        </div>\t
        
          </span>      
         </ul>
        </div>
      </div>
      <div class=\"header_wishlist\"><span>";
        // line 145
        echo ($context["text_wishlist"] ?? null);
        echo "</span><a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"></a></div>
    </div>
    <div class=\"header_right header_cart\">";
        // line 147
        echo ($context["cart"] ?? null);
        echo "</div>
    <div class=\"col-sm-5 header_search\">";
        // line 148
        echo ($context["search"] ?? null);
        echo "</div>
    </div>
  </div>
  </div>
</div>
<div class=\"header_bottom_cover dnone\">
<div class=\"header_bottom\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 157
        echo ($context["headerleft"] ?? null);
        echo " 
\t\t  <div class=\"header_center\">
\t\t\t";
        // line 159
        echo ($context["menu"] ?? null);
        echo "
\t\t</div>\t\t\t
   <!-- <div class=\"col-sm-3 header_cart\">";
        // line 161
        echo ($context["cart"] ?? null);
        echo "</div> -->
\t</div> 
    </div>
  </div>
</div>
</header>
<div class=\"content-top-breadcum\">
<div class=\"container\">
</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 161,  407 => 159,  402 => 157,  390 => 148,  386 => 147,  379 => 145,  371 => 139,  362 => 137,  356 => 136,  349 => 135,  342 => 133,  334 => 132,  325 => 131,  323 => 130,  314 => 126,  308 => 123,  304 => 122,  295 => 116,  291 => 114,  283 => 112,  271 => 111,  258 => 105,  255 => 104,  252 => 102,  248 => 99,  246 => 98,  244 => 97,  242 => 96,  240 => 95,  238 => 94,  236 => 93,  193 => 52,  185 => 50,  181 => 49,  170 => 47,  166 => 46,  157 => 44,  153 => 43,  140 => 41,  136 => 40,  133 => 39,  127 => 37,  125 => 36,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  97 => 26,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/common/header.twig", "");
    }
}
