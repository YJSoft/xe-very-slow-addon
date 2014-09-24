<?php
if(!defined('__XE__')) exit();
if($called_position == 'after_module_proc' && (Context::getResponseMethod() == "HTML" || !isCrawler()))
{
	sleep(rand(1,4));
}
/* End of file very_slow_addon.addon.php */
/* Location: ./addons/very_slow_addon/very_slow_addon.addon.phpp */
