<?php
	/* which template ?*/
	$template_view	= $this->config->item('template_view');
	$menu_view		= $this->config->item('menu_view');

	/*data to load to template*/
	$data = array(
		'TITLE'=> 'PMB Administration',
		'CONTENT'=>'',
		'MENU'=> $this->load->view($menu_view, '', TRUE),
		'JS'=>'loadContent(base_url + "view/_dashboard");',	//the first is dashboard...
		'ASSET_URL' => base_url('asset/'),
		'TEMPLATE_URL' => base_url($this->config->item('template_asset')),
		'APP_CSS'=> $this->load->view('template/inc/_app_css', '', TRUE),
		'APP_JS'=> $this->load->view('template/inc/_app_js', '', TRUE)
	);

	$this->load->view($template_view, $data);
?>