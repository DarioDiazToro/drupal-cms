<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/seed_cms_blog_theme/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_fd036e5833cf3f8dd2f5de3648992c1d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "
";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("seed_theme_cms/breadcrumb"), "html", null, true);
        yield "

";
        // line 13
        if (($context["breadcrumb"] ?? null)) {
            // line 14
            yield "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            yield "</h2>
    <div class=\"breadcrumb__content\">
      <ol class=\"breadcrumb__list\">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                yield "          <li class=\"breadcrumb__item\">
            ";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20)) {
                    // line 21
                    yield "              <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 21), "html", null, true);
                    yield "\" class=\"breadcrumb__link\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 21), "html", null, true);
                    yield "</a>
            ";
                } else {
                    // line 23
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 23), "html", null, true);
                    yield "
            ";
                }
                // line 25
                yield "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "      </ol>
    </div>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/seed_cms_blog_theme/templates/navigation/breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  93 => 27,  86 => 25,  80 => 23,  72 => 21,  70 => 20,  67 => 19,  63 => 18,  57 => 15,  54 => 14,  52 => 13,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/seed_cms_blog_theme/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/custom/seed_cms_blog_theme/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13, "for" => 18];
        static $filters = ["escape" => 11, "t" => 15];
        static $functions = ["attach_library" => 11];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
