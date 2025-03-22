<?php

namespace Sprint\Migration;


class Version20250319172042 extends Version
{
    protected $author = "admin";

    protected $description = "";

    protected $moduleVersion = "4.18.2";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
      'NAME' => 'Agents',
      'TABLE_NAME' => 'db_agents',
      'LANG' => 
      array (
        'ru' => 
        array (
          'NAME' => 'Агенты',
        ),
        'en' => 
        array (
          'NAME' => 'Agents',
        ),
      ),
    ));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_FIO',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Full name',
    'ru' => 'ФИО',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Full name',
    'ru' => 'ФИО',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Full name',
    'ru' => 'ФИО',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_ACTIVITY',
  'USER_TYPE_ID' => 'boolean',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DEFAULT_VALUE' => 1,
    'DISPLAY' => 'CHECKBOX',
    'LABEL' => 
    array (
      0 => '',
      1 => '',
    ),
    'LABEL_CHECKBOX' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Activity',
    'ru' => 'Активность',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Activity',
    'ru' => 'Активность',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Activity',
    'ru' => 'Активность',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_EMAIL',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Email',
    'ru' => 'Почта',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Email',
    'ru' => 'Почта',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Email',
    'ru' => 'Почта',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_PHONE',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Phone',
    'ru' => 'Телефон',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Phone',
    'ru' => 'Телефон',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Phone',
    'ru' => 'Телефон',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_TYPE_ACTIVITY',
  'USER_TYPE_ID' => 'enumeration',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 4,
    'CAPTION_NO_VALUE' => '',
    'SHOW_NO_VALUE' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Type of activity',
    'ru' => 'Вид деятельности',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Type of activity',
    'ru' => 'Вид деятельности',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Type of activity',
    'ru' => 'Вид деятельности',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'ENUM_VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Брокер',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'broker',
    ),
    1 => 
    array (
      'VALUE' => 'Агент по продаже',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'sales_agent',
    ),
    2 => 
    array (
      'VALUE' => 'Агент по покупке',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'buy_agent',
    ),
    3 => 
    array (
      'VALUE' => 'Риэлтор',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'realtor',
    ),
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_PHOTO',
  'USER_TYPE_ID' => 'file',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'LIST_WIDTH' => 0,
    'LIST_HEIGHT' => 0,
    'MAX_SHOW_SIZE' => 0,
    'MAX_ALLOWED_SIZE' => 0,
    'EXTENSIONS' => 
    array (
    ),
    'TARGET_BLANK' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Photo',
    'ru' => 'Фото',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Photo',
    'ru' => 'Фото',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Photo',
    'ru' => 'Фото',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
  }

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
        $helper = $this->getHelperManager();

        $hlblockId = $helper->Hlblock()->getHlblockIdIfExists('Agents');

        $helper->UserTypeEntity()->deleteUserTypeEntitiesIfExists(
            'HLBLOCK_'. $hlblockId,
            [
                'UF_PHOTO',
                'UF_TYPE_ACTIVITY',
                'UF_PHONE',
                'UF_EMAIL',
                'UF_ACTIVITY',
                'UF_FIO'
            ]
        );
        $helper->Hlblock()->deleteHlblock($hlblockId);

    }
}
