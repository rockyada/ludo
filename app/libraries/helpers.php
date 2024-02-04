<?php

use App\Models\Acl;
use  App\Models\Designation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use App\Model\User;
use App\Models\Setting;
// use Config;
/*Setting Name get Function*/


if(!function_exists('AclParnentByName'))
{
    function AclparentByName($parentid=Null)
    {
      $parentidname='';
        if(!empty($parentid))
        {
        
        $parentidname=Acl::where('id',$parentid)->value('title');
        return $parentidname; 
        }
    } 
}

if(!function_exists('DesignationbyName'))
{
    function DesignationbyName($Desid=Null)
    {
        if(!empty($Desid))
        {
          $Desginationname='';
        $Desginationname=Designation::where('id',$Desid)->value('name');
        return $Desginationname; 
        }
    } 
}

  function addhttp($url = "") {
  if($url == ""){
    return "";
  }
  if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
    $url = "http://" . $url;
  }
  return $url;
}

  function getUserPermission(){
  $user_id				=	Auth::user()->id;
  $path					=	Request()->path(); 
  $admin_module_id		=	DB::table("acls")->where('path',$path)->pluck("id");
  
  $permissionData			=	DB::table("user_permission_actions")->leftJoin("acl_admin_actions","acl_admin_actions.id","=","user_permission_actions.admin_module_action_id")->where('user_permission_actions.user_id',$user_id)->where('user_permission_actions.admin_sub_module_id',$admin_module_id)->where('user_permission_actions.is_active',1)->where('acl_admin_actions.name','!=','List')->select("user_permission_actions.is_active","acl_admin_actions.type")->lists('acl_admin_actions.type','acl_admin_actions.type'); 
  
  return $permissionData;
  die;
}

  function sideBarNavigation($menus){
 
    $website_url  = Config('constants.WEBSITE_URL');
    $treeView	=	"";  
    $segment3	=	Request()->segment(2); 
    $segment4	=	Request()->segment(2); 
    $segment5	=	Request()->segment(3);  
    $segment6	=	Request()->segment(4);  
    
    if(!empty($menus)){

      // dd($menus);
      $treeView	.=	"<ul class='menu-nav'>";
      foreach($menus as $record){
        // dd($menus);
        $currentSection	=	"";
        $currentPlugin	=	"";
        $plugin			=	explode('/',$record->path); 
        $pluginSlug3	=	isset($plugin[1])?$plugin[1]:'';        
        $myArray		=	[];
        $myArray1		=	[];      
        if(!empty($record->children)){
          $plugin_array	=	"";
          $plugin_array1	=	"";
          foreach($record->children as $li_record){         
            $plugin			=	explode('/',$li_record->path); 
            $slug			=	isset($plugin[0])?$plugin[0]:''; 
            $slug1			=	isset($plugin[1])?$plugin[1]:'';
            $plugin_array 	.= 	"".$slug.",";
            $plugin_array1 	.= 	"".$slug1.",";
          }
          $myArray = explode(',', $plugin_array);
          $myArray1 = explode(',', $plugin_array1);
        }   
        $class = (in_array($segment3,$myArray1) && ($segment3 != '')) ? 'menu-item-open':''; #* 
      
        $classActive		=	($pluginSlug3 == $segment3)?"menu-item-active":'';
        $style = (in_array($segment3,$myArray1) && ($segment3 != '')) ? 'display:block;':'display:none;'; 
        $classActive1 = "";


        $path	=	((!empty($record->path) && ($record->path != 'javascript::void()') && ($record->path != 'javascript::void(0)') && ($record->path != 'javascript:void()') && ($record->path != 'javascript::void();') && ($record->path != 'javascript:void(0);'))?URL($record->path):'javascript:void(0)');

        $second_icon	=	((!empty($record->path) && ($record->path == 'javascript::void()') || ($record->path == 'javascript::void(0)') || ($record->path == 'javascript:void()') || ($record->path == 'javascript::void();') || ($record->path == 'javascript:void(0);'))?'menu-arrow':'');   


        if((!empty($record->path) && ($record->path != 'javascript::void()') && ($record->path != 'javascript::void(0)') )){     
          $pluginData			=	explode('/',$record->path);  
          $plugin				=	isset($pluginData[0])?$pluginData[0]:'';      
          $plugin1			=	isset($pluginData[1])?$pluginData[1]:'';
          $classActive1		=	((($plugin == $segment3 && ($plugin1 == "")) || ($plugin1 == $segment3) || ($plugin == $segment3 && ($plugin1 == "user-chat")))?'menu-item-active':'');
        }      
        $treeView .= "<li class='menu-item menu-item-submenu  ".(!empty($record->children)? 'menu-item-submenu '.$class:' ').' '.$classActive1."' aria-haspopup='true' data-menu-toggle='hover'><a href='".$path."' class='menu-link menu-toggle'>"."<span class='svg-icon menu-icon'>".$record->icon."</span><span class='menu-text'>$record->title</span><i class='".$second_icon."'></i></a>";

        if(!empty($record->children)){       
          $treeView	.= "<div class='menu-submenu'><i class='menu-arrow'></i><ul class='menu-subnav'><li class='menu-item menu-item-parent' aria-haspopup='true'>
          <span class='menu-link'>
            <span class='menu-text'>".$record->title."</span>
          </span>
          </li>";
        
          foreach($record->children as $li_record){
            
            $path	=	((!empty($li_record->path) && ($li_record->path != 'javascript::void()') && ($li_record->path != 'javascript::void(0)') && ($li_record->path != 'javascript:void()') && ($li_record->path != 'javascript:void(0);'))?URL($li_record->path):'javascript:void(0)');            
            $second_icon	=	((!empty($li_record->path) && ($li_record->path == 'javascript::void()') || ($li_record->path == 'javascript::void(0)') || ($li_record->path == 'javascript:void()') || ($li_record->path == 'javascript::void();') || ($li_record->path == 'javascript:void(0);'))?'fa fa-angle-left pull-right':'');   
            $plugin			=	explode('/',$li_record->path); 
            $currentPlugin	=	isset($plugin[1])?$plugin[1]:'';
          
            $currentPlugin1	=	isset($plugin[2])?$plugin[2]:''; 
            
            $currentPlugin2	=	isset($plugin[3])?$plugin[3]:'';   
      
            $activeClass = "";
          
            if(  (!empty($segment5) && $segment5 == $currentPlugin1 && $segment5 =='Speaker' ) || (!empty($segment6) && $segment6 == $currentPlugin1 && $segment6=='Speaker' ) ){
              
              $activeClass =  "menu-item-active";
            }elseif( (!empty($segment5) && $segment5 == $currentPlugin1  && $segment5 =='Assistant' ) ||  (!empty($segment6) && $segment6 == $currentPlugin1 && $segment6=='Assistant' )){
              $activeClass =  "menu-item-active";
            }elseif( $segment4=='lookups-manager'){
              if(!empty($segment5) && $segment4=='lookups-manager' ){
                
              }
            }elseif($segment4=='settings'){
             
                if( $currentPlugin2 == $segment6 ){
                  $activeClass =  "menu-item-active";

                }elseif( $currentPlugin2 == $segment6 ){
                  $activeClass =  "menu-item-active";
                  
                }elseif( $currentPlugin2 == $segment6 ){
                  $activeClass =  "menu-item-active";

                }
              
            }else{
              if( $currentPlugin == $segment4 && $segment4 !='settings' && $segment4!='lookups-manager' && $segment5 !='Speaker' && $segment6 !='Speaker' && $segment5 !='Assistant' && $segment6 !='Assistant'  )
              $activeClass =  "menu-item-active";
            }
              
         
                $treeView .= "<li class='menu-item ".$activeClass."'  aria-haspopup='true'>
                <a href='".$path."' class='menu-link'>
                  <i class='menu-bullet menu-bullet-line'>
                    <span></span>
                  </i>
                  <span class='menu-text'>".$li_record->title."</span>
                </a>";
            if(!empty($li_record->children)){ 
              $treeView  .= sideBarNavigation($li_record->children);
            } 
            $treeView  .= "</li>"; 
          }
          $treeView  .= "</ul></div>";
        } 
        $treeView  .= "</li>"; 
      }
      $treeView  .= "</ul>";
    } 
    
    return $treeView;
}

  function functionCheckPermission($function_name = ""){
    if( Auth::guard('admin')->user()->id != 1){
     
    
    $user_id				  =	Auth::guard('admin')->user()->id;

    $permissionData			=	DB::table("user_permission_actions")
                              ->select("user_permission_actions.is_active")
                              ->leftJoin("acl_admin_actions","acl_admin_actions.id","=","user_permission_actions.admin_module_action_id")
                              ->where('user_permission_actions.user_id',$user_id)
                              ->where('user_permission_actions.is_active',1)
                              ->where('acl_admin_actions.function_name',$function_name)
                              ->first();
   
      if(!empty($permissionData)){
          return 1;
        }else{
          return 0;
        }
      }else {
        return 1;
      }
}


function setting($key='')
{
  $setting = Setting::where('key',$key)->first();
  return $setting;
}

function VPLAYID()
{ 
  return substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5).rand(111,999);
}

function ReferralCode($mobile=null)
{ 
  return substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 2)), 0, 2).substr($mobile, -4);
}

function Login(){
  return Auth::user();
}
