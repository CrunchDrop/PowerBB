<?php
	$DB_TableName=$table_prefix."spelling_words";
	$Language_Text = array('Suche nach %d W�rtern.    %d zu korrigierende W�rter gefunden.');
	$Language_Javascript = array('Bitte Warten','Keine St�rungen gefunden...', 'OK','Abbrechen','Rechtschreibpr�fung abgeschlossen','Korrigieren', 'Alle','Ignorieren','Hinzuf�gen','Vorschlagen', 'Definition','Thesaurus','�ndern in:','Keine Vorschl�ge');
	$Spell_Config["PSPELL_LANGUAGE"] = "de";
	$Translation_Table = array();
	$Replacement_Table = array();
	$Language_Character_List = "abcdefghijklmnopqrstuvwxyz�������'";
	$Language_Common_Words = "der,die,das,ist,war,sein,sind,waren,bin,von,vom,und,ein,eine,einer,innen,zu,zum,haben,hat,habe,hatten,er,sie,es,seiner,seine,seines,ich,mein,mir,mich,wir,unser,unsere,euer,eures,ihnen,nicht,nein,f�r,du,deins,ihrs,mit,auf,dieses,dies,jeses,tun,tat,getan,bei,beim,aber,leider,jedoch,von,als,oder,wird,sagen,sagte,sage,w�rde,w�rdest,was,dort,hier,wenn,kann,wer,wessen,so,gehen,geht,gegangen,mehr,anders,andere,eins,sehen,sah,gesehen,wissen,wei�,wu�te";

	function Translate_Word($Word)
	{
		return ($Word);
	}

	function Word_Sound_Function($Word)
	{
		return (metaphone($Word));
	}

	function Language_Decode(&$Data)
	{
		if (strpos(@$_SERVER['HTTP_USER_AGENT'], 'MSIE') > 0 || strpos(@$_SERVER['ALL_HTTP'], 'MSIE') > 0)
		{
			if (function_exists('utf8_decode')) $Data = utf8_decode($Data);
		}
		return ($Data);
	}

	function Language_Encode(&$Data)
	{
		global $Spell_Config;
		if (!$Spell_Config['IE_UTF_Encode']) return ($Data);
		if (strpos(@$_SERVER['HTTP_USER_AGENT'], 'MSIE') > 0 || strpos(@$_SERVER['ALL_HTTP'], 'MSIE') > 0)
		{
			if (function_exists('utf8_encode')) $Data = utf8_encode($Data);
		}
		return ($Data);
	}

	function Language_Lower(&$Data)
	{
		return(strtolower($Data));
	}

	function Language_Upper(&$Data)
	{
		return(strtoupper($Data));
	}
?>