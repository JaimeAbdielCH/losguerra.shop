<?php

namespace Opencart\Admin\Controller\Extension\LanguageSpain\Language;
class Spain extends \Opencart\System\Engine\Controller
{

    public function index(): void
    {
        $this->load->language('extension/language_spain/language/spain');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];


        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/language_spain/language/spain', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['save'] = $this->url->link('extension/language_spain/language/spain|save', 'user_token=' . $this->session->data['user_token']);
        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language');

        $data['language_spain_status'] = $this->config->get('language_spain_status');

        $this->load->model('localisation/language');

        $language_info = $this->model_localisation_language->getLanguageByCode('es-es');

        if ($language_info) {
            $data['entry_language_es_name'] = $language_info['name'];
            $data['language_spain_language_es_status'] = $language_info['status'];
        }

        $language_info = $this->model_localisation_language->getLanguageByCode('zh-cn');

        if ($language_info) {
            $data['entry_language_cn_name'] = $language_info['name'];
            $data['language_spain_language_cn_status'] = $language_info['status'];
        }


        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/language_spain/language/spain', $data));
    }

    public function save(): void
    {
        $this->load->language('extension/language_spain/language/spain');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/language_spain/language/spain')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('setting/setting');

            $this->model_setting_setting->editSetting('language_spain', $this->request->post);

            // Update languages
            $this->load->model('localisation/language');

            // SPAIN (ES)
            $language_info = $this->model_localisation_language->getLanguageByCode('es-es');

            $language_info['status'] = (empty($this->request->post['language_spain_language_es_status']) ? '0' : '1');

            $this->model_localisation_language->editLanguage($language_info['language_id'], $language_info);

            $json['success'] = $this->language->get('text_success');

            // CHINA (CN)
            $language_info = $this->model_localisation_language->getLanguageByCode('zh-cn');

            $language_info['status'] = (empty($this->request->post['language_spain_language_cn_status']) ? '0' : '1');

            $this->model_localisation_language->editLanguage($language_info['language_id'], $language_info);

            $json['success'] = $this->language->get('text_success');

        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install(): void
    {
        // v1.0 if ($this->user->hasPermission('modify', 'extension/language_spain/language/german')) {
        if ($this->user->hasPermission('modify', 'extension/language')) {

            $language_data = [
                'name' => 'español (ES)',
                'code' => 'es-es',
                'locale' => 'es,es-es,es_ES.UTF-8,es_ES,es-ES',
                'extension' => 'language_spain',
                'status' => 1,
                'sort_order' => 3
            ];

            $this->load->model('localisation/language');

            $this->model_localisation_language->addLanguage($language_data);


            $language_data = [
                'name' => '中文 (CN)',
                'code' => 'zh-cn',
                'locale' => 'cn,zh-cn,zh_CN.UTF-8,zh_CN,zh-CN',
                'extension' => 'language_spain',
                'status' => 1,
                'sort_order' => 3
            ];

            $this->load->model('localisation/language');

            $this->model_localisation_language->addLanguage($language_data);


            $this->load->model('setting/startup');

            // Add startup to catalog
            $startup_data = [
                'code' => 'language_spain',
                'description' => 'spain catalog language translation',
                'action' => 'catalog/extension/language_spain/startup/spain',
                'status' => 1,
                'sort_order' => 2
            ];

            // startup no longer needed
            //	$this->model_setting_startup->addStartup($startup_data);

            // Add startup for admin

            $startup_data = [
                'code' => 'language_spain',
                'description' => 'spain admin language translation',
                'action' => 'admin/extension/language_spain/startup/spain',
                'status' => 1,
                'sort_order' => 2
            ];

            //	$this->model_setting_startup->addStartup($startup_data);

            // copy translation files for standard opencart extension due to a OpenCart 4.0.1.1 error
            $extension_folder = implode('', glob(DIR_EXTENSION));

            if (is_dir($extension_folder . 'language_spain/extension/opencart/')) {

                $src = $extension_folder . '/language_spain/extension/opencart/';
                $dst = $extension_folder . '/opencart/';

                $this->custom_copy($src, $dst);
            } else {
                $this->log->write('Source (' . $src . ') is not present');
            }
        }
    }

    public function uninstall(): void
    {
        // v1.0 if ($this->user->hasPermission('modify', 'extension/language_spain/language/german')) {
        if ($this->user->hasPermission('modify', 'extension/language')) {
            $this->load->model('localisation/language');

            // spain (es-es)
            $language_info = $this->model_localisation_language->getLanguageByCode('es-es');

            if ($language_info) {
                $this->model_localisation_language->deleteLanguage($language_info['language_id']);
            }

            // chinese (zh-cn)
            $language_info = $this->model_localisation_language->getLanguageByCode('zh-cn');

            if ($language_info) {
                $this->model_localisation_language->deleteLanguage($language_info['language_id']);
            }


            // Remove startup entries

            $this->load->model('setting/startup');

            $this->model_setting_startup->deleteStartupByCode('language_spain');
        }
    }

    private function custom_copy($src, $dst): void
    {
        // open the source directory
        $dir = opendir($src);

        // Make the destination directory if not exist
        //@mkdir($dst);
        if (!is_dir($dst)) {
            mkdir($dst, 0755);
        }

        // Loop through the files in source directory
        while ($file = readdir($dir)) {

            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    // Recursively calling custom copy function for sub directory
                    $this->custom_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }

        closedir($dir);
    }
}
