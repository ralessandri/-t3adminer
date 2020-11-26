<?php

/** Remembers and restores scollbar position of side menu
 *
 * @author Jiří @NoxArt Petruželka, www.noxart.cz
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerRestoreMenuScroll
{
    protected $script;

    /**
     * @param  string  $script
     */
    public function __construct(?string $script = null)
    {
        $this->script = $script ?? <<<EOT
(function(){
	var executed = false;
	var saveAndRestore = function() {
		if( executed ) {
			return;
		}
		executed = true;
		var menu = document.getElementById('tables');
		var scrolled = localStorage.getItem('_adminerScrolled');
		if( scrolled && scrolled >= 0 ) {
			menu.scrollTop = scrolled;
		}
		window.addEventListener('unload', function(){
			localStorage.setItem('_adminerScrolled', menu.scrollTop);
		});
	};
	document.addEventListener && document.addEventListener('DOMContentLoaded', saveAndRestore);
	document.attachEvent && document.attachEvent('onreadystatechange', saveAndRestore);
})();
EOT;
    }

    public function head()
    {
        echo script($this->script);
    }

}
