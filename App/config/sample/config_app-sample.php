<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| APP Config
|--------------------------------------------------------------------------
*/
$config['app_name']			= 'CMS App';
$config['app_logo_mini']	= 'CMS';
$config['app_logo_lg']		= 'CMS App';
$config['app_version']		= '1.0 Beta';
/* Default Organization*/
$config['default_org_logo']	= 'asset/img/logo-sttiss.png';
$config['default_org_name']	= 'STTIS';
/* Default Report Note*/
$config['default_footer_note']	= '
	<div style="font-size:8px; font-weight:none;">
		Sesuai dengan ketentuan yang berlaku, '.$config['default_org_name'].' mengatur bahwa dokumen ini telah ditandatangani secara elektronik sehingga tidak diperlukan tanda tangan basah pada dokumen ini.
	</div>
	<div style="font-size:12px; text-align:right">Page {PAGENO} of {nb}</div>
	';

/*Template Config*/
$config['default_org_site'] = 11;

/*Template Config*/
$config['app_template'] = 'default';
/* for CMS */
$config['cms_template']		= 'cms/academy';	// default, blog, academic

/* view template config */
$config['template_view'] = 'template/'.$config['app_template'].'/index';
$config['menu_view'] = 'template/'.$config['app_template'].'/_menu';
$config['template_asset'] = 'asset/template/'.$config['app_template'].'/';

/* asset via ERP */
$config['asset_cms'] = 'https://localhost/a-erp/asset/files/cms/';

/* Email Sender Config */
$config['sys_email_sender']			= 'sample@yourdomain.com';
$config['sys_email_sender_name']	= 'Notifikasi App';
$config['sys_email_host']			= 'srv41.niagahoster.com';
$config['sys_email_port']			= '465';
$config['sys_email_user']			= 'sample@yourdomain.com';
$config['sys_email_pass']			= 'YOUREMAILPASSWORD';

/* default data */
$config['default_user_img'] = 'asset/img/profile/default-user.png';

/*seting time zone*/
date_default_timezone_set("Asia/Jakarta");

/* End of file config_app.php */
/* Location: ./application/config/config_app.php */