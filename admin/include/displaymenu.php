<?php
	
	global $pageObject;
	$pageType = "";
	if(isset($pageObject))
		$pageType = $pageObject->pageType;
		
	$xt = new Xtempl();
	if(array_key_exists("custom1",$menuparams) && $menuparams["custom1"]=="horizontal")
	{
		$xt->assign("horizontal_typemenu",true);//horizontal type menu
		$xt->assign("tophorizontal_item",true);//top item for horizontal menu
		$xt->assign("simplehorizontal_item",true);//simple item for horizontal menu
		$horiz=true;
	}	
	else{
		$xt->assign("vertical_typemenu",true);//vertical type menu
		$xt->assign("topvertical_item",true);//top item for vertical menu
		$xt->assign("simplevertical_item",true);//simple item for vertical menu
		$horiz=false;
	}
		
	// create menu nodes arr
	$menuNodes = array();
	$menuNode = array();
	$menuNode["name"] = "";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "1";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "empresa";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Empresa";
	$menuNodes[] = $menuNode;	
	
	$menuNode = array();
	$menuNode["name"] = "";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "2";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "laboratorio";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Laboratorio";
	$menuNodes[] = $menuNode;	
	
	$menuNode = array();
	$menuNode["name"] = "";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "3";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "servicos";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Servicos";
	$menuNodes[] = $menuNode;	
	
	$menuNode = array();
	$menuNode["name"] = "";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "4";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "contato";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Contato";
	$menuNodes[] = $menuNode;	
	
	$menuNode = array();
	$menuNode["name"] = "Orçamento";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "5";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "orcamento";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Orçamento";
	$menuNodes[] = $menuNode;	
	
	$menuNode = array();
	$menuNode["name"] = "Usuários";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "6";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "area-restrita-users";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Usuários";
	$menuNodes[] = $menuNode;	
	
	$menuNode = array();
	$menuNode["name"] = "Area Restrita";
	$menuNode["nameType"] = "Text";
	$menuNode["id"] = "7";
	$menuNode["parent"] = "0";
	$menuNode["style"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["params"] = "";
	$menuNode["table"] = "area-restrita";
	$menuNode["type"] = "Leaf";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";
	$menuNode["openType"] = "None";					 
	// set title		
			$menuNode["title"] = "Area Restrita";
	$menuNodes[] = $menuNode;	
	
	
	// need to predefine vars
	$nullParent = NULL;
	$rootInfoArr = array("id"=>0, "href"=>"");
	// create treeMenu instance
	$menuRoot = new MenuItem($rootInfoArr, $menuNodes, $nullParent);
	// call xtempl assign, set session params
	$menuRoot->setMenuSession();
	$menuRoot->assignMenuAttrsToTempl($xt);
	$menuRoot->setCurrMenuElem($xt);
//	$menuRoot->clearMenuSession();
	
	$xt->assign("mainmenu_block",true);
	$rOrder = $xt->getReadingOrder();
	
	$mainmenu=array();
	if(isEnableSection508()) 
	{
		$mainmenu["begin"]="<a name=\"skipmenu\"></a>";
	}
//	Javascript code for menu on page
	$mainmenu["end"]='
	<script type="text/javascript" language="javascript" src="include/jquery.dropshadow.js"></script>';
		
	$countLinks=0;
	$countGroups=0;
	foreach($menuRoot->children as $ind=>$val)
	{
		if($val->showAsLink)
			$countLinks++;			
		if ($val->showAsGroup)
			$countGroups++;			
	}
	if(($pageType == PAGE_MENU) || $countLinks>1 || $countGroups>0)
	{
		$xt->assignbyref("mainmenu_block",$mainmenu);
		$xt->assign("mainmenustyle_block",true);
		$xt->assign("mainmenuiestyle_block",true);
		if(isset($menuparams["quickjump"]))
			$xt->display("mainmenu_quickjump.htm");
		elseif(array_key_exists("custom1",$menuparams) && $menuparams["custom1"]=="horizontal")
			$xt->display("mainmenu_horiz.htm");
		else
			$xt->display("mainmenu.htm");
	}
	//for add ao delete &nbsp; 
?>
