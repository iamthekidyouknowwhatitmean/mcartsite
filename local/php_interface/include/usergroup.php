<? 
   AddEventHandler("main", "OnAfterUserAdd", Array("MyClass", "OnAfterUserAddHandler")); 
   class MyClass{
        static function OnAfterUserAddHandler(&$arFields) 
        { 
            if($arFields["ID"] > 0) 
            {
                if($arFields["UF_GROUP"] === "41") 
                {
                    $arGroups = CUser::GetUserGroup($arFields["ID"]); 
                    $arGroups[] = 7; 
                    CUser::SetUserGroup($arFields["ID"], $arGroups);
                } 
                elseif($arFields["UF_GROUP"] === "42")  
                { 
                    $arGroups = CUser::GetUserGroup($arFields["ID"]); 
                    $arGroups[] = 6;
                    CUser::SetUserGroup($arFields["ID"], $arGroups); 
                } 
            } 
        } 
   }
   
?>