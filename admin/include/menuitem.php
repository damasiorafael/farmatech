<?php
class MenuItem
{	
	/**
	 * Element depth
	 *
	 * @var int
	 */
	var $depth;
	/**
	 * Link id
	 *
	 * @var int
	 */
	var $id;
	/**
	 * Link href
	 *
	 * @var string
	 */
	var $href;
	/**
	 * Params for link href
	 *
	 * @var string
	 */
	var $params;
	/**
	 * Type of link
	 *
	 * @var string
	 */
	var $type;
		
	// for separator
	var $name;
	var $nameType;		
	var $style;
		
	/**
	 * source table name
	 *
	 * @var string
	 */
	var $table;
	/**
	 * type of link
	 *
	 * @var string
	 */
	var $linkType;
	/**
	 * type of page
	 *
	 * @var string
	 */
	var $pageType;
	/**
	 * Show this link or not
	 *
	 * @var bool
	 */
	var $showAsLink;		
	/**
	 * Show as group or not
	 *
	 * @var bool
	 */
	var $showAsGroup;	
	/**
	 * Collection of all pageTypes of menu links for this table
	 *
	 * @var array
	 */
	var $pageTypesInMenuForThisTable = array();
	/**
	 * tag a title attr
	 *
	 * @var string
	 */	
	var $title;
	/**
	 * Open in new window or not attr
	 *
	 * @var string
	 */
	var $openType;
	/**
	 * Array of children
	 *
	 * @var array
	 */
	var $children=array();
	
	var $pageName = "";
		
	/**
	 * Constructor, builds tree structure with item attributes
	 *
	 * @param array $menuItemInfo
	 * @param array $menuNodes
	 * @param obj $menuParent
	 * @return MenuItem
	 */
	function MenuItem(&$menuItemInfo, &$menuNodes, &$menuParent)
	{
		global $pageObject;
		
		if (isset($pageObject))
		{
			$this->pageName = $pageObject->getPageType();	
		}
		
		// calculate menu depth
		if ($menuItemInfo['id'] == 0)
		{
			$this->depth = 0;	
		}
		else
		{
			$this->depth = $menuParent->depth+1;
		}
			
		// simple attributes
		$this->id = $menuItemInfo['id'];
		$this->name = $menuItemInfo['name'];
		$this->nameType = $menuItemInfo['nameType'];
		$this->style = $menuItemInfo['style'];
		$this->href = $menuItemInfo['href'];
		$this->params = $menuItemInfo['params'];
		$this->table = $menuItemInfo['table'];
		$this->type = $menuItemInfo['type'];
		$this->linkType = $menuItemInfo['linkType'];
		$this->pageType = $menuItemInfo['pageType'];			
		$this->title = $menuItemInfo['title'];
		$this->openType = $menuItemInfo['openType'];
		// show as link attribute
		$this->showAsLink = $this->checkLinkShowStatus();
		//build tree structure
		$this->buildTreeMenuStructure($this, $menuNodes);
		// show as group attribute
		$this->showAsGroup = $this->checkGroupShowStatus();
		
		
	}
	/**
	 * Adds child
	 *
	 * @param link $child
	 */
	function AddChild(&$child)
	{
		global $globalEvents;
		$res = true;
		if($globalEvents->exists('ModifyMenuItem'))
		{
			$res = $globalEvents->ModifyMenuItem($child);
		}			 
		if ($res)
		{
			$this->children[]=$child;
		}
	}
	
	function setUrl($href) 
	{
		$this->href = $href;
		if ($this->linkType == 'Internal')
		{		
			$this->linkType = 'External';
		}
	}
	
	function getUrl() 
	{
		return $this->href;
	}
	
	function setParams($params) 
	{
		$this->params = $params;
	}
	
	function getParams() 
	{
		return $this->params;
	}
	function setTitle($title) 
	{
		$this->title = $title;
	}
	
	function getTitle() 
	{
		return $this->title;
	}
	
	function setTable($table) 
	{
		$this->table;
	}
	
	function getTable() {
		return $this->table;
	}
	
	function setPageType($pType)
	{
		$this->pageType = $pType;
	}
	
	function getPageType() 
	{
		return $this->pageType;
	}
	
	function getLinkType() {
		return $this->linkType;
	}
	
	
	/** 
	 * Recursively build tree menu structure
	 *
	 * @param array $menuNodes all nodes
	 * @param int $parentId parentNode id
	 * @param object $menuRoot parent obj
	 */
	function buildTreeMenuStructure(&$menuParent, &$menuNodes)
	{			
		// for all menuItems
		for($i=0;$i<count($menuNodes); $i++)
		{
			// if this element of array is child
			if ($menuNodes[$i]["parent"] == $menuParent->id)
			{
				// create new obj
				$menuChild = new MenuItem($menuNodes[$i], $menuNodes, $menuParent);				
				// adds to parent
				$menuParent->AddChild($menuChild);
			}
			// collect all pageTypes for this table			
			if ($menuNodes[$i]['type'] != 'Separator')
			{
				if (!isset($this->pageTypesInMenuForThisTable[$menuNodes[$i]['pageType']])&&$this->table==$menuNodes[$i]['table'])
				{					
					$this->pageTypesInMenuForThisTable[$menuNodes[$i]['pageType']]['count'] = 1;
					$this->pageTypesInMenuForThisTable[$menuNodes[$i]['pageType']]['ids'] = array('0'=>$menuNodes[$i]['id']);						
				}
				elseif ($this->table==$menuNodes[$i]['table'])
				{
					$this->pageTypesInMenuForThisTable[$menuNodes[$i]['pageType']]['count']++;
					$this->pageTypesInMenuForThisTable[$menuNodes[$i]['pageType']]['ids'][] = $menuNodes[$i]['id'];
				}
			}					
		}
	}
	
	
	
	/**
	 * Checks link show status
	 *
	 * @return bool
	 */
	function checkLinkShowStatus()
	{
		// if link external and has href
		if ($this->linkType == "External" && strlen($this->href)>0)			
			return true;
		// allways show separators
		if ($this->linkType == "Separator")			
			return true;
		// if internal and has href and user have permissions
		if ($this->linkType == "Internal" && $this->isUserHaveTablePerm())
			return true;
		// else not show as link
		return false;
	}
	/**
	 * Check if user have permission for link
	 *
	 * @return bool
	 */
	function isUserHaveTablePerm()
	{
		global $strTableName;
		if($this->pageType=="WebReports")
			return true;
		if(!strlen($this->table))
			return false;
		$strPerm = GetUserPermissions($this->table);
		$pageType='';
		if ($this->pageType=="List" || $this->pageType=="Search" || $this->pageType=="Report" || $this->pageType=="Chart")
			$pageType="S";
		elseif ($this->pageType=="Add")
			$pageType="A";
		elseif ($this->pageType=="Edit")
			$pageType="E";
		elseif ($this->pageType=="Print")
			$pageType="P";
		if(strpos($strPerm,$pageType)!==false)		
			return true;
		else
			return false;
	}
	/**
	 * Checks show this element as separator
	 * Should be called allways after tree structure is initialized
	 *
	 * @return bool
	 */
	function checkGroupShowStatus() 
	{
		// if this element not group
		if (!$this->isGroup())
			return false;
		
		// for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// if there are children to show in this child, we need to show this group
			if ($this->children[$i]->checkGroupShowStatus())
				return true;
			// if we should show this descendant, not include separators
			elseif ($this->children[$i]->isShowAsLink() && !$this->children[$i]->isSeparator())
				return true;					
		}
		// if no descendants to show
		return false;
		
	}
	/**
	 * Getter, show status as group
	 *
	 * @return bool
	 */
	function isShowAsGroup() 
	{
		return $this->showAsGroup;
	}
	/**
	 * Getter, show status as link
	 *
	 * @return bool
	 */
	function isShowAsLink() 
	{
		return $this->showAsLink;
	}
	/**
	 * Checks if this element is group
	 *
	 * @return bool
	 */
	function isGroup() 
	{
		return $this->type=="Group";
	}
	/**
	 * Checks if this element is separator
	 *
	 * @return bool
	 */
	function isSeparator() 
	{
		return $this->type=="Separator";
	}
	/**
	 * Makes offset depending on item depth
	 *
	 * @param int $depth
	 * @return string
	 */
	function makeOffset($depth)
	{
		$nbsps='';
		for($i=0;$i<$depth;$i++)
			$nbsps.='&nbsp;&nbsp;';
		return $nbsps;	
	}
	/**
	 * Assign common attrs for menu items
	 *
	 * @param link $xt
	 */
	function assignMenuAttrsToTempl(&$xt) 
	{
		global $strTableName;
		//if tablemode
		if($strTableName)
			$xt->assign("needcurrent_item",true);
		// for menu if not tablemode
		else
			$xt->assign("notneedcurrent_item",true);
		// assign separator
		if ($this->isSeparator())
		{
			if ($this->name == "-------")
				$xt->assign("item".$this->id."_separator","<HR>");
			else
				$xt->assign("item".$this->id."_separator",'<a class="ahr" style="'.$this->style.'">'.$this->name.'</a>');
			$xt->assign("item".$this->id."_optionattrs","disabled");
		}
		// if not need to show
		if (!$this->isShowAsGroup()&& !$this->isShowAsLink()&&!$this->isSeparator()&&$this->id!=0)
			return;
		// add plus or minus images for groups
		if($this->isShowAsGroup())
			$xt->assign("item".$this->id."_groupimage", true);
		else
			$xt->assign("item".$this->id."_itemimage", true);
			
		// show element
		$xt->assign("item".$this->id."_menulink",true);		
		//making offset	
		$xt->assign("item".$this->id."_nbsps",$this->makeOffset($this->depth));				
		// if show as links
		if ($this->isShowAsLink())
			$this->assignLinks($xt);
		// if show as group only	
		elseif ($this->isShowAsGroup())
			$this->assignGroupOnly($xt);
		// recursively call for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// call children 
			$this->children[$i]->assignMenuAttrsToTempl($xt);			
		}
	}
	/**
	 * Sets selected element. Need to call after all parame
	 *
	 * @param link $xt
	 * @return bool
	 */
	function setCurrMenuElem(&$xt) 
	{		
		global $strTableName;
		// recursively call for all children, assign all links as not current before start assign as current
		$this->setNotCurrMenuElem($xt);		
				
		// if we have no page name, or table name differs with menu item, we can't identify menu link
		if($this->pageName && $strTableName==$this->table && $this->id!=0)
		{			
			// if we need to set curr by sess param.Need to be cheked first to prevent setting by other code
			if(isset($_SESSION['menuItemId'])&&$this->isIdInPageTypesArr($_SESSION['menuItemId'])&&$this->pageTypesInMenuForThisTable[$this->pageType]['count']>1){
				// do not combine with if above! 				
				if ($_SESSION['menuItemId'] == $this->id){
					$this->setAsCurrMenuElem($xt);
					return true;
				}
			//if we find current menu elemen. Check after session		
			}elseif ($this->pageName == strtolower($this->pageType)){
				$this->setAsCurrMenuElem($xt);
				return true;
			
			// if we need to set first element for this table following priority. Check as last statement
			}elseif(!$this->isSetParentElem() && !$this->isThisPageInMenu()){				
				$this->setAsCurrMenuElem($xt);
				return true;
			}		
		}				
		// recursively call for all children
		for($i=0;$i<count($this->children);$i++)
		{
			// If anyone from children assigned as current, we close recursion 
			if($this->children[$i]->setCurrMenuElem($xt))	
				return true;					
		}
		// if no one assigned as current
		return false;
	}
	/**
	 * Assign all links as not current
	 *
	 * @param link $xt
	 */
	function setNotCurrMenuElem(&$xt) {
		$xt->assign("item".$this->id."_notcurrent",true);
		// recursively call for all children, set notcurrent
		for($i=0;$i<count($this->children);$i++)
			$this->children[$i]->setNotCurrMenuElem($xt);		
	}
	/**
	 * Assign Menu link elem as current
	 *
	 * @param link $xt
	 */	
	function setAsCurrMenuElem(&$xt){
		// cancel not current assignment
		$xt->assign("item".$this->id."_notcurrent",false);
		$xt->assign("item".$this->id."_current",true);
	}
	
	/**
	 * Assign values for links
	 *
	 * @param link $xt
	 */
	function assignLinks(&$xt) 
	{	
		// assign title between tag a
		$xt->assign("item".$this->id."_title", $this->title);
		// assign common attr
		$attrForAssign = ' id="itemlink'.$this->id.'" title="'.$this->title.'" '.($this->style ? 'style="'.$this->style.'"' : '');
		// add target blank attr
		if ($this->openType == "NewWindow"){
			$attrForAssign .= ' target="_blank"';			
		}
		// for Internal links	
		if ($this->linkType == "Internal")
		{
			if ($this->pageType!="WebReports")
			{
				// add menu id param. Used for setting current menu element
				$menuIdGetParam = '';
				if ($this->pageTypesInMenuForThisTable[$this->pageType]["count"]>1)
					$menuIdGetParam = '?menuItemId='.$this->id;
				if($this->params)
				{
					if($menuIdGetParam)
						$menuIdGetParam .='&'.$this->params;
					else
						$menuIdGetParam .='?'.$this->params;
				}
							
				$attrForAssign .= ' href="'.GetTableURL($this->table).'_'.strtolower($this->pageType).'.php'.$menuIdGetParam.'"';					
				$xt->assign("item".$this->id."_optionattrs",'value="'.GetTableURL($this->table).'_'.strtolower($this->pageType).'.php" '.($this->openType == "NewWindow" ? 'link="External"' : ''));
			}
			else
			{
				$attrForAssign .= ' href="webreport.php"';
				$xt->assign("item".$this->id."_optionattrs",' value="webreport.php"');
			}
		// for External links
		}elseif($this->linkType == "External")
		{
			$attrForAssign .= ' href="'.$this->href.'"';				
			$xt->assign("item".$this->id."_optionattrs",'value="'.$this->href.'" '.($this->openType == "NewWindow" ? 'link="External"' : ''));	
		}
		$xt->assign("item".$this->id."_menulink_attrs", $attrForAssign);

		
	}
	/**
	 * Assign values for groups that not links
	 *
	 * @param link $xt
	 */
	function assignGroupOnly(&$xt)
	{
		// assign title between tag a
		$xt->assign("item".$this->id."_title", $this->title);
		// assign common attr
		$attrForAssign = ' id="itemlink'.$this->id.'" title="'.$this->title.'" '.($this->style ? ' style="cursor:default;text-decoration:none; '.$this->style.'"' : '');
		
		$xt->assign("item".$this->id."_menulink_attrs", $attrForAssign);
		$xt->assign("item".$this->id."_optionattrs","disabled");
	}
	/**
	 * Checks if isset parent menu element for this table by following prioriry:
	 * List->Chart->Report->Search->Add->Print
	 *
	 * @return bool
	 */
	function isSetParentElem() 
	{		
		// different page types, in List->Chart->Report->Search->Add->Print priority
		//$pageTypes = array('List', 'Chart', 'Report', 'Search', 'Add', 'Print');
		$pageTypes = array('list', 'chart', 'report', 'search', 'add', 'print');
		$pageTypesInLowCase = $this->changeKeysInLowerCaseFromArr($this->pageTypesInMenuForThisTable);
		
		
		switch (strtolower($this->pageType)) 
		{			
			case 'list':
				// do nothing, because list has highest priority
				return false;
				break;
			case 'chart':
				/*
				 * count elements of inner join between parent pageTypes of this pageType 
				 * and all menu link types of this table represented in this menu
				 * array_intersect(array_slice($pageTypes, 0, 1), $this->pageTypesInMenuForThisTable) returns all elements
				 * with higher priority than this pageType, same code for all cases. 
				 */
				if (count(array_intersect(array_slice($pageTypes, 0, 1), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'report':
				if (count(array_intersect(array_slice($pageTypes, 0, 2), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'search':
				if (count(array_intersect(array_slice($pageTypes, 0, 3), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'add':
				if (count(array_intersect(array_slice($pageTypes, 0, 4), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			case 'print':
				if (count(array_intersect(array_slice($pageTypes, 0, 5), $pageTypesInLowCase)))
					return true;
				else
					return false;
				break;
			default:
				// not supported type, check not to show as current
				break;
				
		}
	}
	
	/**
	 * Check if current page, that we want to show, isset in menu elements collection
	 *
	 * @param string $pageName
	 * @return bool
	 */
	function isThisPageInMenu() 
	{
		// get page types for this table in low case
		$pageTypesInLowCase = $this->changeKeysInLowerCaseFromArr($this->pageTypesInMenuForThisTable);
		// cut extension from $this->pageName
		//$extLen = strlen(".php");		
		//$pageNameWithoutExt = substr($pageName, 0, (strlen($pageName)-$extLen));
		
		//return in_array($pageNameWithoutExt, $pageTypesInLowCase);
		return in_array($this->pageName, $pageTypesInLowCase);
		
	}
	
	/**
	 * Checks if id in array of page types for this table
	 *
	 * @param int $id
	 * @return bool
	 */
	function isIdInPageTypesArr($id) 
	{		
		foreach ($this->pageTypesInMenuForThisTable as $pageTypeInfoArr)
		{
			if (in_array($id, $pageTypeInfoArr['ids']))
				return true;			
		}		
		return false;
	}	
	
	/**
	 * Returns array of keys in lower case
	 *
	 * @param array $arr
	 * @return array
	 */
	function changeKeysInLowerCaseFromArr($arr) {
		$lowArr = array();
		foreach ($arr as $key=>$val){
			$lowArr[] = strtolower($key);
		}
		return $lowArr;
	}
	/**
	 * Clear session params
	 *
	 */
	function clearMenuSession()
	{
		if (isset($_SESSION['menuItemId']))
			unset($_SESSION['menuItemId']);
		
	}
	/**
	 * Set session params before start
	 *
	 */
	function setMenuSession()
	{
		if (postvalue("menuItemId"))
			$_SESSION['menuItemId'] = postvalue("menuItemId");	
	}
}
?>
