<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Settings_Leads_MappingDelete_Action extends Settings_Vtiger_Index_Action {

	public function process(Vtiger_Request $request) {
		$recordId = $request->get('mappingId');
		$qualifiedModuleName = $request->getModule(false);

		$response = new Vtiger_Response();
		if ($recordId) {
			Settings_Leads_Mapping_Model::deleteMapping(array($recordId));
			$response->setResult(array(vtranslate('LBL_DELETED_SUCCESSFULLY', $qualifiedModuleName)));
		} else {
			$response->setError(vtranslate('LBL_INVALID_MAPPING', $qualifiedModuleName));
		}
		$response->emit();
	}
	
	public function validateRequest(Vtiger_Request $request) {
		$request->validateWriteAccess();
	}
}