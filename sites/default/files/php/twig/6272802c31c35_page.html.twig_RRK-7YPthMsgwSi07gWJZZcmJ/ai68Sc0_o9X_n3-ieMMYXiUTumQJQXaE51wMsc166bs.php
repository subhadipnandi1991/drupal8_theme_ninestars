<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/edutech/templates/page.html.twig */
class __TwigTemplate_eaf7d85f9c1fa8dd6822498e16863909b6430563968b7a652d94b3d815c2f346 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Ninestars Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/favicon.png\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
        echo "
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"align-items-center\">
    ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "about", [])), "html", null, true);
        echo "
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services section-bg\">
      ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
        echo "
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
      ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "portfolio", [])), "html", null, true);
        echo "
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id=\"faq\" class=\"faq section-bg\">
      ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "faq", [])), "html", null, true);
        echo "
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team\">
      ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team", [])), "html", null, true);
        echo "
    </section>
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients section-bg\">
      ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
        echo "
    </section>
    <!-- End Clients Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">
<div class=\"section-title\">
<h2>Contact Us</h2>

<p>Contact us the get started</p>
</div>

<div class=\"row\">
<div class=\"col-lg-5 d-flex align-items-stretch\">
<div class=\"info\">
<div class=\"address\">
<h4>Location:</h4>

<p>A108 Adam Street, New York, NY 535022</p>
</div>

<div class=\"email\">
<h4>Email:</h4>

<p>info@example.com</p>
</div>

<div class=\"phone\">
<h4>Call:</h4>

<p>+1 5589 55488 55</p>
</div>
<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" style=\"border:0; width: 100%; height: 290px;\"></iframe></div>
</div>

<div class=\"col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch\">
  ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact", [])), "html", null, true);
        echo "
</div>

<!-- <div class=\"mt-5 mt-lg-0 d-flex align-items-stretch\">
  <form action=\"forms/contact.php\" class=\"php-email-form\" method=\"post\" role=\"form\">
    <div class=\"row\">
      <div class=\"form-group col-md-6\"><label for=\"name\">Your Name</label> <input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Your Name\" required=\"\" type=\"text\" /></div>

      <div class=\"form-group col-md-6 mt-3 mt-md-0\"><label for=\"name\">Your Email</label> <input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your Email\" required=\"\" type=\"email\" /></div>
    </div>

    <div class=\"form-group mt-3\"><label for=\"name\">Subject</label> <input class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Subject\" required=\"\" type=\"text\" /></div>
    <div class=\"form-group mt-3\"><label for=\"name\">Message</label><textarea class=\"form-control\" name=\"message\" required=\"\" rows=\"10\"></textarea></div>

    <div class=\"my-3\">
      <div class=\"loading\">Loading</div>

      <div class=\"error-message\">&nbsp;</div>

      <div class=\"sent-message\">Your message has been sent. Thank you!</div>
    </div>

    <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
  </form>
</div> -->


</div>
</div>

    </section>
    <!-- End Contact Us Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    ";
        // line 158
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
  </footer>
  <!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "themes/edutech/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 158,  209 => 120,  169 => 83,  160 => 77,  151 => 71,  142 => 65,  133 => 59,  124 => 53,  114 => 46,  103 => 38,  96 => 34,  73 => 14,  69 => 13,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Ninestars Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ directory }}/images/favicon.png\" rel=\"icon\">
  <link href=\"{{ directory }}/images/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        {{ page.logo }}
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        {{ page.menu }}
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"align-items-center\">
    {{ page.content }}
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      {{ page.about}}
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services section-bg\">
      {{ page.services }}
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
      {{ page.portfolio }}
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id=\"faq\" class=\"faq section-bg\">
      {{ page.faq }}
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team\">
      {{ page.team }}
    </section>
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients section-bg\">
      {{ page.clients }}
    </section>
    <!-- End Clients Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">
<div class=\"section-title\">
<h2>Contact Us</h2>

<p>Contact us the get started</p>
</div>

<div class=\"row\">
<div class=\"col-lg-5 d-flex align-items-stretch\">
<div class=\"info\">
<div class=\"address\">
<h4>Location:</h4>

<p>A108 Adam Street, New York, NY 535022</p>
</div>

<div class=\"email\">
<h4>Email:</h4>

<p>info@example.com</p>
</div>

<div class=\"phone\">
<h4>Call:</h4>

<p>+1 5589 55488 55</p>
</div>
<iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" style=\"border:0; width: 100%; height: 290px;\"></iframe></div>
</div>

<div class=\"col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch\">
  {{ page.contact }}
</div>

<!-- <div class=\"mt-5 mt-lg-0 d-flex align-items-stretch\">
  <form action=\"forms/contact.php\" class=\"php-email-form\" method=\"post\" role=\"form\">
    <div class=\"row\">
      <div class=\"form-group col-md-6\"><label for=\"name\">Your Name</label> <input class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Your Name\" required=\"\" type=\"text\" /></div>

      <div class=\"form-group col-md-6 mt-3 mt-md-0\"><label for=\"name\">Your Email</label> <input class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Your Email\" required=\"\" type=\"email\" /></div>
    </div>

    <div class=\"form-group mt-3\"><label for=\"name\">Subject</label> <input class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Subject\" required=\"\" type=\"text\" /></div>
    <div class=\"form-group mt-3\"><label for=\"name\">Message</label><textarea class=\"form-control\" name=\"message\" required=\"\" rows=\"10\"></textarea></div>

    <div class=\"my-3\">
      <div class=\"loading\">Loading</div>

      <div class=\"error-message\">&nbsp;</div>

      <div class=\"sent-message\">Your message has been sent. Thank you!</div>
    </div>

    <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
  </form>
</div> -->


</div>
</div>

    </section>
    <!-- End Contact Us Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    {{ page.footer }}
  </footer>
  <!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
</body>

</html>
", "themes/edutech/templates/page.html.twig", "/home/badshah007/public_html/drupal-8.9.20/themes/edutech/templates/page.html.twig");
    }
}
