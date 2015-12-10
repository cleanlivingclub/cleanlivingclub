<?php

require_once BASE_PATH.'model/dbconfig/class.mprocess.php';


/**
 *	Class Name Is User
 *	Module Name Is User Module
 *	Database Table Names Is  users And user_levels
 * 	If You Want To See The Tables Structure open user.txt file
 *	Total Functions List(Names)
 *	insertUserTypes()			selectUserTypes()				userTypeIdByName()				updateUserTypes()
 *  deleteUsertypes() 			insertStudentTypes()			selectStudentTypes()			studentTypeIdByName()
 *  updateStudentTypes()		deleteStudentTypes()			userDataInsert()				userDataView()
 *  selectUserByULevelId() 		selectUserByStudentTypeId()		userIdByName()					userDataUpdate()
 *  userDataDelete() 			userDataLogin()					userLevelsInsert()				userLevelsSelect()
 *  selectULByUTypeId() 		userLevelsSelectByType()		userLevelIdByName()				userLevelsUpdate()
 *  userLevelsDelete() 			userIdSelect()					sectionUsersSelect()			userDataApprovedUpdat()
 *	userTempDataAprdDelete() 	userTempUpdateApprove()			userTempDataApprovedDelete()	userTempDataInsert()
 *  userTempIdByName() 			classIdSelect()					sectionDataSelect()				userDataApprovedList()
 *  userDataTempList() 			selectModuleByBnchId()			selectModuleById()				selectModuleByUserLevId()
 *  selectUserAccessData() 		schoolBranchSelect()			selectClassByBranch()			selectUserByClassId()
 *  moduleGroupSelect() 		selectModuleGroupIdByCode()		adminDataSelect()				importExcelFile()
 *   
 *	
 */

class User {

	/**
     *	Variable Declaration
     */
	 
	private $logObj;
	private $dbObj;
	private $mailObj;
	
	/**
     *	Alert Message Declaration
     */
	 
	private $message		= MESSAGE;
	
	/**
	 *	Log Variable Declaration
	 */
	
	private $emergency		= EMERGENCY_ACTION_REQUIRED;
	private $alert			= ALERT; 
	private $errors			= ERRORS;
	private $warnings		= WARNINGS;
	private $notices		= NOTICES;
	private $information	= INFORMATION;
	
	/**
	 *	Tables Declaration  
	 */
	 
	private $tbUsers	 	= TABLE_USERS;
	private $tbUserLevels	= TABLE_USER_LEVELS;
	private $tbUsersTemp	= TABLE_USERS_TEMP;
	private $tbClass		= TABLE_CLASS;
	private $tbSection		= TABLE_SECTION;
	private	$tbSchool		= TABLE_SCHOOL;
	private	$tbSchoolBranch	= TABLE_SCHOOL_BRANCH;
	private $tbModuleAccess	= TABLE_MODULE_ACCESS;
	private $tbUsrBrchAccess= TABLE_USER_ACCESS_BRANCH;
	private $tbUserAccess	= TABLE_USER_ACCESS;
	private $tbUserTypes	= TABLE_USER_TYPES;
	private $tbStudentTypes	= TABLE_STUDENT_TYPE;
	private $tbModuleGroup  = TABLE_MODULE_GROUPS;
	private $tbModuleLinks	= TABLE_MODULE_LINKS;
	private	$tbAdminLevel	= TABLE_ADMIN_LEVEL;
	private $tbAdminAccess	= TABLE_ADMIN_ACCESS;
	private $tbAdmin		= TABLE_ADMIN;
	private $tbUserBranches = TABLE_USER_BRANCHES;
	
	private $tbScNetwork	= TABLE_SOCIAL_NETWORK;
	private $tbScConfig 	= TABLE_SOCIAL_CONFIG;
	
	private $tbMainHome		= TABLE_MAIN_HOME;
	private $tbMenuBar	 	= TABLE_MENU_BAR;
	private $tbSubMenu	 	= TABLE_SUB_MENU;
	private $tbSubMenuLinks = TABLE_SUB_MENU_LINKS;

	private $tbHeadImage	= TABLE_HEAD_IMAGE;
	
	private	$tbMarks	    = TABLE_MARKS;
	private	$tbExamName	  	= TABLE_EXAM_NAME;
	private	$tbExamTypes	= TABLE_EXAM_TYPES;
	private $tbSubjects		= TABLE_SUBJECTS;
	private $tbSubjectsName	= TABLE_SUBJECTS_NAMES;
	
	
	private $tbBoard		= TABLE_BOARD;
	private $tbMedium		= TABLE_MEDIUM;
	
	private	$tbexamconfig	= TABLE_EXAM_CONFIG;
	private $totalSubjectId = TOTAL_SUBJECT_ID;
	private $tbStuAttend	= TABLE_ATTENDANCE;
	private $tbHour			= TABLE_HOUR;
	
	private	$tbTitles		= TABLE_TITLES;
	private	$tbServices		= TABLE_SERVICES;
	private	$tbSftwrTypes	= TABLE_SOFTWARE_TYPES;
	private	$tbRequiredFor	= TABLE_REQUIRED_FOR;
	private	$tbQuotation	= TABLE_QUOTATION;
	private $tbregister      = TABLE_REGISTER;
	
	public function __construct(){
		$this->dbObj  		= new DataBasePDO();
		$this->logObj		= new Logging();
		$this->logObj		= new Logging();
	}
	
	
	public function registerinsert($valueArray) {	
		
		$this->logObj->log(__FILE__,__LINE__," '".__FUNCTION__."': Starting firstname => ",$valueArray['firstname'],$this->information);
			
		$res					= $this->dbObj->insertData($this->tbregister,$valueArray);
		
		if ($res) {
			$this->logObj->log(__FILE__,__LINE__," usrDataLogin: Ending Status =>", $res ,$this->alert);
		}else{
			$this->logObj->log(__FILE__,__LINE__," getFaqs : Ending Status =>", "No result", $this->warnings);
		} 
		
		return $res;
	}
}

?>
