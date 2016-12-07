<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
/*
 * Mysql Ajax Table Editor
 *
 * Copyright (c) 2008 Chris Kitchen <info@mysqlajaxtableeditor.com>
 * All rights reserved.
 *
 * See COPYING file for license information.
 *
 * Download the latest version from
 * http://www.mysqlajaxtableeditor.com
 */
require_once('php/lang/LangVars-en.php');
require_once('php/AjaxTableEditor.php');
class Example2 extends Common
{

	function displayHtml()
	{
		require_once("header.php");
		?>
        <div align="left" style="position: relative;"><div id="ajaxLoader1"><img src="images/ajax_loader.gif" alt="Loading..." /></div></div>

			<div id="historyContainer">
				<div id="information">
				</div>
		
				<div id="titleLayer" style="padding: 2px; font-weight: bold; font-size: 18px; text-align: center;">
				</div>
		
				<div id="tableLayer" align="center">
				</div>
				
				<div id="recordLayer" align="center">
				</div>		
				
				<div id="searchButtonsLayer" align="center">
				</div>
			</div>
			<script type="text/javascript">
				trackHistory = true;
				var ajaxUrl = '<?php echo $_SERVER['PHP_SELF']; ?>';
				toAjaxTableEditor('update_html','');
			</script>
            
		<?php
	require_once("footer.php");
		}

	function initiateEditor()
	{
		$tableColumns['SC_ID'] = array('display_text' => 'SC_ID', 'perms' => '');
		$tableColumns['HEI_ID'] = array('display_text' => 'HEI', 'perms' => 'EVCTAXQ', 'join' => array('table' => 'hei_tbl', 'column' => 'HEI_ID', 'display_mask' => "concat(hei_tbl.HEI_ACRONAM,' ',hei_tbl.HEI_NAM)", 'type' => 'left'));
		$tableColumns['SC_USERNAM'] = array('display_text' => 'User Name', 'perms' => 'EVCTAXQ');
		$tableColumns['SC_PASS'] = array('display_text' => 'Password', 'perms' => 'EVCAXQT','mysql_add_fun' => 'PASSWORD','mysql_edit_fun' => 'PASSWORD'); 
		$tableColumns['SC_NAM3'] = array('display_text' => 'Surname', 'perms' => 'EVCTAXQ');
		$tableColumns['SC_NAM2'] = array('display_text' => 'Middle', 'perms' => 'EVCTAXQ');
		$tableColumns['SC_NAM1'] = array('display_text' => 'First', 'perms' => 'EVCTAXQ');
		
		//$tableColumns['account_type'] = array('display_text' => 'Account Type', 'perms' => 'EVCTAXQ', 'select_array' => array('Admin' => 'Admin', 'User' => 'User'), 'default' => 'User'); 
		
		$tableName = 'coordinator_tbl';
		$primaryCol = 'SC_ID';
		$errorFun = array(&$this,'logError');
		$permissions = 'EAVDQCSM';
		
		require_once('php/AjaxTableEditor.php');
		$this->Editor = new AjaxTableEditor($tableName,$primaryCol,$errorFun,$permissions,$tableColumns);
		$this->Editor->setConfig('tableInfo','cellpadding="1" width="800" class="mateTable"');
		$this->Editor->setConfig('orderByColumn','SC_ID');
	}
	
	
	function Example2()
	{
		if(isset($_POST['json']))
		{
			session_start();
			$this->mysqlConnect(); // Comes from extended Common class
			if(ini_get('magic_quotes_gpc'))
			{
				$_POST['json'] = stripslashes($_POST['json']);
			}
			if(function_exists('json_decode'))
			{
				$data = json_decode($_POST['json']);
			}
			else
			{
				require_once('php/JSON.php');
				$js = new Services_JSON();
				$data = $js->decode($_POST['json']);
			}
			if(empty($data->info) && strlen(trim($data->info)) == 0)
			{
				$data->info = '';
			}
			$this->initiateEditor();
			$this->Editor->main($data->action,$data->info);
			if(function_exists('json_encode'))
			{
				echo json_encode($this->Editor->retArr);
			}
			else
			{
				echo $js->encode($this->Editor->retArr);
			}
		}
		else if(isset($_GET['export']))
		{
			session_start();
			ob_start();
			$this->mysqlConnect(); // Comes from extended Common class
			$this->initiateEditor();
			echo $this->Editor->exportInfo();
			header("Cache-Control: no-cache, must-revalidate");
			header("Pragma: no-cache");
			header("Content-type: application/x-msexcel");			
			header('Content-Type: text/csv');
			header('Content-Disposition: attachment; filename="'.$this->Editor->tableName.'.csv"');
			exit();
		}
		else
		{
			$this->displayHeaderHtml(); // Comes from extended Common class
			$this->displayHtml();
			$this->displayFooterHtml(); // Comes from extended Common class
		}
	}
}
$lte = new Example2();
?>

<?php
}
else
{
		echo "<script>alert('Access Denied! You Must be logged-in first!');
				window.location.href='index.php';
			</script>";
}
?>