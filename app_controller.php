<?php
/**
 * <one line to give the program's name and a brief idea of what it does.>
    Copyright (C) <year>  <name of author>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class AppController extends Controller {
   //var $components = array( 'Auth', 'Session');
   
   var $_Filter = array();
   var $components = array( 'Auth', 'Session','RequestHandler','Filter','DebugKit.Toolbar');
   var $helpers = array('Html','Form','Session','DatePicker','Js');

	 // default datetime filter  
    var $_Form_options_datetime = array();  

    function beforeFilter() {
        
                // for index actions  
        if($this->action == 'index') {  
            // setup filter component  
            $this->_Filter = $this->Filter->process($this);  
            $url = $this->Filter->url;  
            if(empty($url)) {  
                $url = '/';  
            }  
            $this->set('filter_options',array('url'=>array($url)));  
            // setup default datetime filter option  
            $this->_Form_options_datetime = array('type'=>'date','dateFormat'=>'DMY','empty'=>'-','minYear'=>date("Y")-2,'maxYear'=>date("Y"));  
            // reset filters  
            if(isset($this->data['reset']) || isset($this->data['cancel'])) {  
                $this->redirect(array('action'=>'index'));  
            }  
        } 
        //Configure AuthComponent
        Security::setHash('md5');
        //$this->Auth->allow('*');
        //$this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'after_login');
        $this->Auth->loginError = "Dados Incorrectos";
        $this->Auth->actionPath = 'controllers/';
		        

    }


  /** 
     * Builds up a selected datetime for the form helper 
     * @param string $fieldname 
     * @return null|string 
     */  
    function process_datetime($fieldname) {  
        $selected = null;  
        if(isset($this->params['named'][$fieldname])) {  
            $exploded = explode('-',$this->params['named'][$fieldname]);  
            if(!empty($exploded)) {  
                $selected = '';  
                foreach($exploded as $k=>$e) {  
                    if(empty($e)) {  
                        $selected .= (($k==0) ? '0000' : '00');  
                    } else {  
                        $selected .= $e;  
                    }  
                    if($k!=2) {$selected.='-';}  
                }  
            }  
        }  
    return $selected;  
    } 
	
	/**
 * uploads files to the server
 * @params:
 *		$folder 	= the folder to upload the files e.g. 'img/files'
 *		$formdata 	= the array containing the form files
 *		$itemId 	= id of the item (optional) will create a new sub folder
 * @return:
 *		will return an array with the success of each file upload
 */
function uploadFiles($folder, $formdata, $itemId = null) {
	// setup dir names absolute and relative
	$folder_url = WWW_ROOT.$folder;
	$rel_url = $folder;
	
	// create the folder if it does not exist
	if(!is_dir($folder_url)) {
		mkdir($folder_url);
	}
		
	// if itemId is set create an item folder
	if($itemId) {
		// set new absolute folder
		$folder_url = WWW_ROOT.$folder.'/'.$itemId; 
		// set new relative folder
		$rel_url = $folder.'/'.$itemId;
		// create directory
		if(!is_dir($folder_url)) {
			mkdir($folder_url);
		}
	}
	
	// list of permitted file types, this is only images but documents can be added
	$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
	
	// loop through and deal with the files
	foreach($formdata as $file) {
		// replace spaces with underscores
		$filename = str_replace(' ', '_', $file['name']);
		// assume filetype is false
		$typeOK = false;
		// check filetype is ok
		foreach($permitted as $type) {
			if($type == $file['type']) {
				$typeOK = true;
				break;
			}
		}
		
		// if file type ok upload the file
		if($typeOK) {
			// switch based on error code
			switch($file['error']) {
				case 0:
					// check filename already exists
					if(!file_exists($folder_url.'/'.$filename)) {
						// create full filename
						$full_url = $folder_url.'/'.$filename;
						$url = $rel_url.'/'.$filename;
						// upload the file
						$success = move_uploaded_file($file['tmp_name'], $url);
					} else {
						// create unique filename and upload file
						ini_set('date.timezone', 'Europe/London');
						$now = date('Y-m-d-His');
						$full_url = $folder_url.'/'.$now.$filename;
						$url = $rel_url.'/'.$now.$filename;
						$success = move_uploaded_file($file['tmp_name'], $url);
					}
					// if upload was successful
					if($success) {
						// save the url of the file
						$result['urls'][] = $url;
					} else {
						$result['errors'][] = "Error uploaded $filename. Please try again.";
					}
					break;
				case 3:
					// an error occured
					$result['errors'][] = "Error uploading $filename. Please try again.";
					break;
				default:
					// an error occured
					$result['errors'][] = "System error uploading $filename. Contact webmaster.";
					break;
			}
		} elseif($file['error'] == 4) {
			// no file was selected for upload
			$result['nofiles'][] = "No file Selected";
		} else {
			// unacceptable file type
			$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
		}
	}
return $result;
}


  


}
?>
