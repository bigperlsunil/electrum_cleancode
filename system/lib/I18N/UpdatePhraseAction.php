<?php


class SJB_UpdatePhraseAction
{
	/**
	 * @param SJB_I18N $i18n
	 * @param unknown_type $phrase_data
	 */
	function SJB_UpdatePhraseAction($i18n, $phrase_data)
	{
		$this->i18n = $i18n;
		$this->phrase_data = $phrase_data;
	}
	
	function canPerform()
	{
		$translations = array(
			'phraseId' => $this->phrase_data['phrase'],
			'domainId' => $this->phrase_data['domain'],
			'translations' => array()
		);
		foreach($this->phrase_data['translations'] as $k => $v){
			$langData = $this->i18n->getLanguageData($k);
			$translations['translations'][] = array('LanguageId' => $k, 'LanguageCaption' => $langData['caption'], 'Translation' => $v);
		}

		$this->validator = $this->i18n->createUpdateTranslationValidator($translations);
		return $this->validator->isValid();
	}
	
	function perform()
	{
		return $this->i18n->updatePhrase($this->phrase_data);
	} 

	function getErrors()
	{
		return $this->validator->getErrors();
	}
}

