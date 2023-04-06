<?php
namespace Opencart\Catalog\Controller\Extension\LanguageSpain\Startup;
class Spain extends \Opencart\System\Engine\Controller {
	public function index(): void {

        if ($this->config->get('language_spain_es_status')) {
            $code = 'es-es';
            if (isset($this->request->get['language']) && $this->request->get['language'] == $code) {
                $this->load->model('localisation/language');

                $language_info = $this->model_localisation_language->getLanguageByCode($code);

                if ($language_info) {
                    $this->language->addPath(DIR_EXTENSION . 'language_spain/catalog/language/');
                    $this->language->load($code);
                }
            }
        }

        if ($this->config->get('language_spain_cn_status')) {
            $code = 'zh-cn';
            if (isset($this->request->get['language']) && $this->request->get['language'] == $code) {
                $this->load->model('localisation/language');

                $language_info = $this->model_localisation_language->getLanguageByCode($code);

                if ($language_info) {
                    $this->language->addPath(DIR_EXTENSION . 'language_spain/catalog/language/');
                    $this->language->load($code);
                }
            }
        }

	}
}
