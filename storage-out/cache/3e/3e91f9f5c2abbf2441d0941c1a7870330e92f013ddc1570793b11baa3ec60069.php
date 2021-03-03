<?php

/* default/template/extension/payment/pp_express.twig */
class __TwigTemplate_df591466695cd932bc7c3994825bf4300f46741ad960e03ded276b7d90bfb945 extends Twig_Template
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
        // line 1
        if (((isset($context["payment_pp_express_incontext_disable"]) ? $context["payment_pp_express_incontext_disable"] : null) != 1)) {
            // line 2
            echo "  <style>
    @media screen and (max-width: 400px) {
      .pp-checkout-button-container {
        width: 100%;
        margin-left:auto;
        margin-right:auto;
      }
    }

    @media screen and (min-width: 400px) {
      .pp-checkout-button-container {
        width: 400px;
        margin-left:auto;
        margin-right:auto;
      }
    }
  </style>

  <div class=\"buttons\">
    <div class=\"pp-checkout-button-container\">
      <div id=\"pp-checkout-button\" />
    </div>
  </div>

  <script>
    (function () {
      paypal.Button.render({
        env: '";
            // line 29
            echo (isset($context["paypal_environment"]) ? $context["paypal_environment"] : null);
            echo "',
        style: {
          layout: '";
            // line 31
            echo (isset($context["payment_pp_express_style_layout"]) ? $context["payment_pp_express_style_layout"] : null);
            echo "',
          size:   '";
            // line 32
            echo (isset($context["payment_pp_express_style_size"]) ? $context["payment_pp_express_style_size"] : null);
            echo "',
          shape:  '";
            // line 33
            echo (isset($context["payment_pp_express_style_shape"]) ? $context["payment_pp_express_style_shape"] : null);
            echo "',
          color:  '";
            // line 34
            echo (isset($context["payment_pp_express_style_color"]) ? $context["payment_pp_express_style_color"] : null);
            echo "'
        },
        commit: true,
        funding: {
          allowed: [";
            // line 38
            echo (isset($context["allowed_payment_methods"]) ? $context["allowed_payment_methods"] : null);
            echo "],
          disallowed: [";
            // line 39
            echo (isset($context["disallowed_payment_methods"]) ? $context["disallowed_payment_methods"] : null);
            echo "]
        },
        payment: function (data, actions) {
          return paypal.request.get(\"";
            // line 42
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\", {
            headers: {
              'Accept': 'application/paypal-json-token',
            }
          }).then(function (response) {
            if (!response || !response.token) {
              throw new Error('There was an error fetching the PayPal token');
            }

            return response.token;
          }).catch(function (err) {
            throw err;
          });
        },
        onAuthorize: function (data, actions) {
          return actions.redirect();
        },
        onCancel: function (data, actions) {
          return actions.redirect();
        },
        onError: function (error) {
          \$('.pp-checkout-button-container').empty().html('<div class=\"alert alert-danger\">' + error + '</div>');
          return;
        }
      }, '#pp-checkout-button');
    })();
  </script>
";
        } else {
            // line 70
            echo "  <div class=\"buttons\">
    <div class=\"pull-right\">
      <a href=\"";
            // line 72
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\" id=\"button-confirm\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
    \$('#button-confirm').on('click', function() {
      \$('#button-confirm').button('loading');
    });
  //--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/pp_express.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 72,  115 => 70,  84 => 42,  78 => 39,  74 => 38,  67 => 34,  63 => 33,  59 => 32,  55 => 31,  50 => 29,  21 => 2,  19 => 1,);
    }
}
/* {% if payment_pp_express_incontext_disable != 1 %}*/
/*   <style>*/
/*     @media screen and (max-width: 400px) {*/
/*       .pp-checkout-button-container {*/
/*         width: 100%;*/
/*         margin-left:auto;*/
/*         margin-right:auto;*/
/*       }*/
/*     }*/
/* */
/*     @media screen and (min-width: 400px) {*/
/*       .pp-checkout-button-container {*/
/*         width: 400px;*/
/*         margin-left:auto;*/
/*         margin-right:auto;*/
/*       }*/
/*     }*/
/*   </style>*/
/* */
/*   <div class="buttons">*/
/*     <div class="pp-checkout-button-container">*/
/*       <div id="pp-checkout-button" />*/
/*     </div>*/
/*   </div>*/
/* */
/*   <script>*/
/*     (function () {*/
/*       paypal.Button.render({*/
/*         env: '{{ paypal_environment }}',*/
/*         style: {*/
/*           layout: '{{ payment_pp_express_style_layout }}',*/
/*           size:   '{{ payment_pp_express_style_size }}',*/
/*           shape:  '{{ payment_pp_express_style_shape }}',*/
/*           color:  '{{ payment_pp_express_style_color }}'*/
/*         },*/
/*         commit: true,*/
/*         funding: {*/
/*           allowed: [{{ allowed_payment_methods }}],*/
/*           disallowed: [{{ disallowed_payment_methods }}]*/
/*         },*/
/*         payment: function (data, actions) {*/
/*           return paypal.request.get("{{ continue }}", {*/
/*             headers: {*/
/*               'Accept': 'application/paypal-json-token',*/
/*             }*/
/*           }).then(function (response) {*/
/*             if (!response || !response.token) {*/
/*               throw new Error('There was an error fetching the PayPal token');*/
/*             }*/
/* */
/*             return response.token;*/
/*           }).catch(function (err) {*/
/*             throw err;*/
/*           });*/
/*         },*/
/*         onAuthorize: function (data, actions) {*/
/*           return actions.redirect();*/
/*         },*/
/*         onCancel: function (data, actions) {*/
/*           return actions.redirect();*/
/*         },*/
/*         onError: function (error) {*/
/*           $('.pp-checkout-button-container').empty().html('<div class="alert alert-danger">' + error + '</div>');*/
/*           return;*/
/*         }*/
/*       }, '#pp-checkout-button');*/
/*     })();*/
/*   </script>*/
/* {% else %}*/
/*   <div class="buttons">*/
/*     <div class="pull-right">*/
/*       <a href="{{ continue }}" class="btn btn-primary" id="button-confirm" data-loading-text="{{ text_loading }}">{{ button_continue }}</a>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*     $('#button-confirm').on('click', function() {*/
/*       $('#button-confirm').button('loading');*/
/*     });*/
/*   //--></script>*/
/* {% endif %}*/
/* */
