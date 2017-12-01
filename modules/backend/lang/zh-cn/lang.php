<?php

return [
    'auth' => [
        'title' => '管理区域'
    ],
    'field' => [
        'invalid_type' => '不合法的字段类型 :type.',
        'options_method_invalid_model' => "属性 ':field' 不能解析为一个有效的模型. 请尝试为模型类:model指定一个可选的方法.",
        'options_method_not_exists' => "模型 :model 必须定义一个返回 ':field' 表单字段选项的方法 :method()。"
    ],
    'widget' => [
        'not_registered' => "部件 ':name' 还没注册",
        'not_bound' => "部件 ':name' 没绑到控制器"
    ],
    'page' => [
        'untitled' => '未命名',
        'access_denied' => [
            'label' => '访问拒绝',
            'help' => "你没有访问这个页面需要的权限.",
            'cms_link' => '返回后台'
        ],
        'no_database' => [
            'label' => '找不到数据库',
            'help' => "需要一个数据库来访问后端. 在再次尝试之前，检查数据库的配置和迁移.",
            'cms_link' => '返回首页'
        ],
        'invalid_token' => [
            'label' => '非法的security token'
        ]
    ],
    'partial' => [
        'not_found_name' => "部件 ':name' 没找到."
    ],
    'account' => [
        'sign_out' => '登出',
        'login' => '登录',
        'reset' => '重置',
        'restore' => '还原',
        'login_placeholder' => '登录',
        'password_placeholder' => '密码',
        'forgot_password' => '忘记你的密码?',
        'enter_email' => '输入你的邮件',
        'enter_login' => '输入账号',
        'email_placeholder' => '邮件',
        'enter_new_password' => '输入新密码',
        'password_reset' => '密码重置',
        'restore_success' => '密码重置的邮件已发往你的邮箱.',
        'restore_error' => "找不到用户 ':login'",
        'reset_success' => '你的密码已经重置成功. 你现在可以登录了.',
        'reset_error' => '密码重置失败. 请重试!',
        'reset_fail' => '不能重置你的密码!',
        'apply' => '应用',
        'cancel' => '取消',
        'delete' => '删除',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => '仪表盘',
        'widget_label' => '小工具',
        'widget_width' => '宽度',
        'full_width' => '全部宽度',
        'manage_widgets' => '管理小部件',
        'add_widget' => '添加小工具',
        'widget_inspector_title' => '小工具配置',
        'widget_inspector_description' => '配置报表小工具',
        'widget_columns_label' => '宽度 :columns',
        'widget_columns_description' => '小工具宽度, 1 到 10.',
        'widget_columns_error' => '请输入小工具宽度, 1 到 10.',
        'columns' => '{1} 栏|[2,Inf] 栏',
        'widget_new_row_label' => '强制新列',
        'widget_new_row_description' => '把小工具放到新列.',
        'widget_title_label' => '小工具标题',
        'widget_title_error' => '需要小工具标题.',
        'reset_layout' => '重置布局',
        'reset_layout_confirm' => '重置布局恢复为默认？',
        'reset_layout_success' => '布局已经复位',
        'make_default' => '设为默认',
        'make_default_confirm' => '设置当前布局作为默认？',
        'make_default_success' => '现在目前的布局是默认',
        'collapse_all' => '全部折叠',
        'expand_all' => '全部展开',
        'status' => [
            'widget_title_default' => '系统状态',
            'update_available' => '{0} 更新可用!|{1} 更新可用!|[2,Inf] 更新可用!',
            'updates_pending' => '待定软件更新',
            'updates_nil' => '软件是最新的',
            'updates_link' => '更新',
            'warnings_pending' => '有些问题需要注意',
            'warnings_nil' => '没有警告显示',
            'warnings_link' => '查看',
            'core_build' => '系统建设',
            'event_log' => '事件日志',
            'request_log' => '请求日志',
            'app_birthday' => '在线日期',
        ],
        'welcome' => [
            'widget_title_default' => '欢迎',
            'welcome_back_name' => '欢迎归来 :app, :name.',
            'welcome_to_name' => '欢迎到 :app, :name.',
            'first_sign_in' => '这是你第一次登陆.',
            'last_sign_in' => '你最后登陆是',
            'view_access_logs' => '访问登陆日志',
            'nice_message' => '祝你有美好的一天!',
        ]
    ],
    'user' => [
        'name' => '管理员',
        'menu_label' => '管理员',
        'menu_description' => '管理后台管理员用户, 组和权限.',
        'list_title' => '管理',
        'new' => '新管理员',
        'login' => '登录',
        'first_name' => '名',
        'last_name' => '姓',
        'full_name' => '全名',
        'email' => '邮件',
        'groups' => '团队',
        'groups_comment' => '指明这个人属于哪个组.',
        'avatar' => '头像',
        'password' => '密码',
        'password_confirmation' => '确认密码',
        'permissions' => '权限',
        'account' => '帐号',
        'superuser' => '超级用户',
        'superuser_comment' => '选中并允许这个人访问全部区域.',
        'send_invite' => '发送邀请邮件',
        'send_invite_comment' => '发送一封包含用户名和密码的欢迎邮件',
        'delete_confirm' => '你真的想要删除这个管理员?',
        'return' => '返回管理员列表',
        'allow' => '允许',
        'inherit' => '继承',
        'deny' => '拒绝',
        'activated' => '已激活',
        'last_login' => '最后登陆',
        'created_at' => '创建时间',
        'updated_at' => '更新时间',
        'group' => [
            'name' => '组',
            'name_comment' => '该名字将在群组列表中展示',
            'name_field' => '名字',
            'description_field' => '描述',
            'is_new_user_default_field_label' => '默认组',
            'is_new_user_default_field_comment' => '默认增加新管理员到这个组',
            'code_field' => '代码',
            'code_comment' => '如果你想访问 API, 请输入唯一码.',
            'menu_label' => '群组',
            'list_title' => '管理群组',
            'new' => '新管理组',
            'delete_confirm' => '你真的想要删除这个管理组?',
            'return' => '返回组列表',
            'users_count' => '用户'
        ],
        'preferences' => [
            'not_authenticated' => '没有认证用户加载或保存设置.'
        ]
    ],
    'list' => [
        'default_title' => '列表',
        'search_prompt' => '搜索...',
        'no_records' => '当前视图中没有记录.',
        'missing_model' => ':class 中的列表没有定义好的模型。',
        'missing_column' => '没有 :columns 的栏定义.',
        'missing_columns' => ':class 中使用的列表没有定义好的栏.',
        'missing_definition' => "列表不包含 ':field' 栏.",
        'missing_parent_definition' => "List 的行为未包含一个 ':definition'.",
        'behavior_not_ready' => '列表没有初始化, 确认你的控制器中调用了makeLists().',
        'invalid_column_datetime' => "栏值 ':column' 不是时间对象, 缺少了 \$dates 在模型中的引用吗?",
        'pagination' => '显示记录: :from-:to :total',
        'first_page' => 'First page',
        'last_page' => 'Last page',
        'prev_page' => '上一页',
        'next_page' => '下一页',
        'refresh' => '刷新',
        'updating' => '更新中...',
        'loading' => '加载中...',
        'setup_title' => '建立列表',
        'setup_help' => '使用多选框选择你想在列表中看到的栏. 你可以通过拖拽调整栏的位置.',
        'records_per_page' => '每页的记录',
        'records_per_page_help' => '选择每页想显示的记录数量. 请注意一页中太多记录可能会降低性能.',
        'check' => 'Check',
        'delete_selected' => '删除选择的',
        'delete_selected_empty' => '没有需要删除的记录.',
        'delete_selected_confirm' => '删除选中的记录?',
        'delete_selected_success' => '成功删除选择的记录.',
        'column_switch_true' => 'Yes',
        'column_switch_false' => 'No'
    ],
    'fileupload' => [
        'attachment' => '附件',
        'help' => '给附件添加标题和描述.',
        'title_label' => '标题',
        'description_label' => '描述',
        'default_prompt' => '点击 %s 或者拖动一个文件到这里来上传',
        'attachment_url' => '附件地址',
        'upload_file' => '上传文件',
        'upload_error' => '上传错误',
        'remove_confirm' => '你确定吗？',
        'remove_file' => '删除文件'
    ],
    'form' => [
        'create_title' => '新 :name',
        'update_title' => '编辑 :name',
        'preview_title' => '预览 :name',
        'create_success' => ':name 创建成功',
        'update_success' => ':name 更新成功',
        'delete_success' => ':name 删除成功',
        'reset_success' => '成功恢复默认',
        'missing_id' => '表单记录ID没有指定.',
        'missing_model' => ':class 中使用的表单没有定义的model.',
        'missing_definition' => "表单不包含字段 ':field'.",
        'not_found' => '表单 ID :id 找不到.',
        'action_confirm' => '你确定?',
        'create' => '创建',
        'create_and_close' => '创建和关闭',
        'creating' => '创建中...',
        'creating_name' => '创建 :name...',
        'save' => '保存',
        'save_and_close' => '保存和关闭',
        'saving' => '保存...',
        'saving_name' => '保存 :name...',
        'delete' => '删除',
        'deleting' => '删除中...',
        'confirm_delete' => '你确定删除记录?',
        'confirm_delete_multiple' => '确定删除选中的的记录?',
        'deleting_name' => '删除 :name...',
        'reset_default' => '重置到默认',
        'resetting' => '重置',
        'resetting_name' => '重置 :name',
        'undefined_tab' => '杂项',
        'field_off' => '关',
        'field_on' => '开',
        'add' => '增加',
        'apply' => '应用',
        'cancel' => '取消',
        'close' => '关闭',
        'confirm' => '确认',
        'reload' => '重载',
        'complete' => '完成',
        'ok' => 'OK',
        'or' => '或',
        'confirm_tab_close' => '你真的想要关闭这个标签吗? 未保存的改变会丢失.',
        'behavior_not_ready' => '表单还没初始化, 确保你调用了控制器中的 initForm().',
        'preview_no_files_message' => '文件没有上传。',
        'preview_no_media_message' => '没有选中的媒体.',
        'preview_no_record_message' => '没有选择记录。',
        'select' => '选择',
        'select_all' => '全部',
        'select_none' => '无',
        'select_placeholder' => '请选择',
        'insert_row' => '插入行',
        'insert_row_below' => '在下面插入行',
        'delete_row' => '删除行',
        'concurrency_file_changed_title' => '文件改动',
        'concurrency_file_changed_description' => "你正在编辑的文件正在被其他用户修改. 你可以重载或覆盖磁盘上的文件.",
        'return_to_list' => '返回列表'
    ],
    'recordfinder' => [
        'find_record' => '查找记录',
        'cancel' => '取消',
    ],
    'pagelist' => [
        'page_link' => '页面链接',
        'select_page' => '选择一个页面...'
    ],
    'relation' => [
        'missing_config' => "关系没有':config'的配置文件.",
        'missing_definition' => "关系不包含 ':field' 的定义.",
        'missing_model' => "用于 :class 的关系没有定义好的model.",
        'invalid_action_single' => "这个操作不能在单一关系上执行.",
        'invalid_action_multi' => "这个操作不能在多重关系上执行.",
        'help' => "点击增加",
        'related_data' => "相关的 :name",
        'add' => "增加",
        'add_selected' => "增加选中的",
        'add_a_new' => "增加一个新的 :name",
        'link_selected' => "关联选中",
        'link_a_new' => "关联一个新的 :name",
        'cancel' => "取消",
        'close' => "关闭",
        'add_name' => "增加 :name",
        'create' => "创建",
        'create_name' => "创建 :name",
        'update' => "更新",
        'update_name' => "更新 :name",
        'preview' => "预览",
        'preview_name' => "预览 :name",
        'remove' => "移除",
        'remove_name' => "移除 :name",
        'delete' => "删除",
        'delete_name' => "删除 :name",
        'delete_confirm' => "你确定?",
        'link' => "关联",
        'link_name' => "关联 :name",
        'unlink' => "取消关联",
        'unlink_name' => "取消关联 :name",
        'unlink_confirm' => "你确定?",
    ],
    'reorder' => [
        'default_title' => '重新排序记录',
        'no_records' => '没有可供排序的记录.'
    ],
    'model' => [
        'name' => '模型',
        'not_found' => "ID为 :id 的 模型 ':class' 找不到",
        'missing_id' => '没有找到指定ID的模型记录.',
        'missing_relation' => "模型 ':class' 不包含 ':relation'.",
        'missing_method' => "模型 ':class' 不包含 ':method'.",
        'invalid_class' => "模型 :model 在 :class 中是不合法的, 它必须继承 \\Model 类.",
        'mass_assignment_failed' => "为Model属性':attribute'赋值失败."
    ],
    'warnings' => [
        'tips' => '系统配置技巧',
        'tips_description' => '你需要注意下面的问题, 以使系统更好的工作。',
        'permissions' => '目录 :name 或子目录对PHP不可写. 请在服务器上对这个目录设置正确的权限.',
        'extension' => 'PHP扩展 :name 没安装，请安装这个库并且激活扩展.',
        'plugin_missing' => '依赖于插件 :name,但是该插件未安装 . 请安装该插件.'
    ],
    'editor' => [
        'menu_label' => '代码编辑器选项',
        'menu_description' => '自定义代码编辑器选项, 比如字体大小和颜色主题.',
        'font_size' => '字体大小',
        'tab_size' => '标签大小',
        'use_hard_tabs' => '使用tabs缩进',
        'code_folding' => '代码折叠',
        'code_folding_begin' => 'Mark begin',
        'code_folding_begin_end' => 'Mark begin and end',
        'autocompletion' => '自动完成',
        'word_wrap' => '自动换行',
        'highlight_active_line' => '高亮活动的行',
        'auto_closing' => '自动关闭标签',
        'show_invisibles' => '显示隐藏字符',
        'show_gutter' => '显示侧边栏',
        'basic_autocompletion'=> '基本的自动完成 (Ctrl + Space)',
        'live_autocompletion'=> 'Live Autocompletion',
        'enable_snippets'=> '开启代码片段 (Tab)',
        'display_indent_guides'=> '显示缩进指南',
        'show_print_margin'=> '显示打印边距',
        'mode_off' => 'Off',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40个字符',
        '80_characters' => '80个字符',
        'theme' => '色彩主题',
        'markup_styles' => '标记样式',
        'custom_styles' => '定制样式表',
        'custom styles_comment' => '在HTML编辑器中包含自定义样式',
        'markup_classes' => '标记类',
        'paragraph' => '段落',
        'link' => '链接',
        'table' => '表格',
        'table_cell' => '单元格',
        'image' => '图像',
        'label' => '标签',
        'class_name' => '类名字',
        'markup_tags' => '标记标签',
        'allowed_empty_tags' => '允许空标签',
        'allowed_empty_tags_comment' => '当标签内没有内容的时候,该标签不会被移除.',
        'allowed_tags' => '允许标签',
        'allowed_tags_comment' => '允许标签的列表.',
        'no_wrap' => '不能包裹的标签',
        'no_wrap_comment' => '列出的标签不能包裹在快级标签中.',
        'remove_tags' => '移除标签',
        'remove_tags_comment' => '列出的标签将会和它包裹的内容一起删除.'
    ],
    'tooltips' => [
        'preview_website' => '预览网站'
    ],
    'mysettings' => [
        'menu_label' => '我的设置',
        'menu_description' => '设置涉及到你的管理帐号'
    ],
    'myaccount' => [
        'menu_label' => '我的账户',
        'menu_description' => '更新你的账户细节, 比如名字, 邮件地址和密码.',
        'menu_keywords' => '安全登录'
    ],
    'branding' => [
        'menu_label' => '自定义后台',
        'menu_description' => '自定义管理区域, 比如名字, 颜色和logo.',
        'brand' => '品牌',
        'logo' => 'Logo',
        'logo_description' => '上传自定义logo到后台.',
        'app_name' => '站点名称',
        'app_name_description' => '这个名称显示在后台的标题区域.',
        'app_tagline' => '站点标语',
        'app_tagline_description' => '标语显示在后台的登录界面.',
        'colors' => '颜色',
        'primary_color' => '主要 color',
        'secondary_color' => '次要 color',
        'accent_color' => 'Accent color',
        'styles' => '样式',
        'custom_stylesheet' => '自定义样式',
        'navigation' => '导航',
        'menu_mode' => '菜单样式',
        'menu_mode_inline' => '行内',
        'menu_mode_tile' => '标题',
        'menu_mode_collapsed' => '已折叠'
    ],
    'backend_preferences' => [
        'menu_label' => '后台设置',
        'menu_description' => '管理你的后台设置, 比如希望使用的语言。',
        'region' => '地区',
        'code_editor' => '代码编辑器',
        'timezone' => '时区',
        'timezone_comment' => '选择你希望使用的本地语言。',
        'locale' => '语言',
        'locale_comment' => '选择您想要的语言环境.'
    ],
    'access_log' => [
        'hint' => '这个日志显示了管理员成功登录的信息. 记录保持 :days 天。',
        'menu_label' => '访问日志',
        'menu_description' => '查看成功登陆后台用户日志。',
        'created_at' => '日期 & 时间',
        'login' => '登录',
        'ip_address' => 'IP地址',
        'first_name' => '名',
        'last_name' => '姓',
        'email' => '电子邮箱'
    ],
    'filter' => [
        'all' => '全部',
        'options_method_not_exists' => "模型 :model中必须定义一个方法 :method()为过滤器 ':filter'返回可选项.",
        'date_all' => '所有时期'
    ],
    'import_export' => [
        'upload_csv_file' => '1. 上传一个CSV 文件',
        'import_file' => '导入文件',
        'first_row_contains_titles' => '第一行包含列标题',
        'first_row_contains_titles_desc' => 'Leave this checked if the first row in the CSV is used as the column titles.',
        'match_columns' => '2. 将文件的列跟数据库的字段匹配',
        'file_columns' => '文件列',
        'database_fields' => '数据库字段',
        'set_import_options' => '3. 设置导入选项',
        'export_output_format' => '1. 导出输出格式',
        'file_format' => '文件格式',
        'standard_format' => '标准格式',
        'custom_format' => '自定义格式',
        'delimiter_char' => '定界符',
        'enclosure_char' => 'Enclosure character',
        'escape_char' => '转义字符',
        'select_columns' => '2. 选择导出的列',
        'column' => '列',
        'columns' => '列',
        'set_export_options' => '3. 设置导出选项',
        'show_ignored_columns' => '显示忽略的列',
        'auto_match_columns' => '自动匹配列',
        'created' => '已创建',
        'updated' => '已更新',
        'skipped' => '已跳过',
        'warnings' => '警告',
        'errors' => '错误',
        'skipped_rows' => '跳过的行数',
        'import_progress' => '导入进度',
        'processing' => '处理中...',
        'import_error' => '导入错误',
        'upload_valid_csv' => '请上传正确的CSV 文件.',
        'drop_column_here' => '删除列在这里……',
        'ignore_this_column' => '忽略该列',
        'processing_successful_line1' => '文件导出完成!',
        'processing_successful_line2' => '浏览器现在将重定向到文件下载.',
        'export_progress' => '导出进度',
        'export_error' => '导出错误',
        'column_preview' => '预览列',
        'file_not_found_error' => '文件未找到',
        'empty_error' => '没有提供导出的数据',
        'empty_import_columns_error' => '请指定要导入的列.',
        'match_some_column_error' => '请先与一些列匹配.',
        'required_match_column_error' => 'Please specify a match for the required field :label.',
        'empty_export_columns_error' => '请指定要导出的列.',
        'behavior_missing_uselist_error' => 'You must implement the controller behavior ListController with the export "useList" option enabled.',
        'missing_model_class_error' => 'Please specify the modelClass property for :type',
        'missing_column_id_error' => 'Missing column identifier',
        'unknown_column_error' => '位置的列',
        'encoding_not_supported_error' => '源文件编码不能识别. 请选择自定义文件格式选项和正确的编码来导入您的文件.',
        'encoding_format' => '文件编码',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => '管理媒体'
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Click the %s button to find a media item'
    ],
   'media' => [
        'menu_label' => '媒体',
        'upload' => '上传',
        'move' => '移动',
        'delete' => '删除',
        'add_folder' => '增加文件夹',
        'search' => '搜索',
        'display' => '显示',
        'filter_everything' => '所有',
        'filter_images' => '图片',
        'filter_video' => '视频',
        'filter_audio' => '音频',
        'filter_documents' => '文档',
        'library' => '库',
        'size' => '大小',
        'title' => '标题',
        'last_modified' => '最近修改',
        'public_url' => '公开URL',
        'click_here' => '点击这里',
        'thumbnail_error' => '生产缩略图错误.',
        'return_to_parent' => '返回上层文件夹',
        'return_to_parent_label' => '返回 ..',
        'nothing_selected' => '没有选中.',
        'multiple_selected' => '多选.',
        'uploading_file_num' => '上传 :number 文件...',
        'uploading_complete' => '上传完毕',
        'order_by' => '排序',
        'folder' => '文件夹',
        'no_files_found' => '没找到你请求的文件.',
        'delete_empty' => '请选择删除项.',
        'delete_confirm' => '你是否想要删除选中项?',
        'error_renaming_file' => '重命名错误.',
        'new_folder_title' => '新文件',
        'folder_name' => '文件夹名',
        'error_creating_folder' => '新建文件夹错误',
        'folder_or_file_exist' => '文件夹或文件已经存在.',
        'move_empty' => '请选择移动项.',
        'move_popup_title' => '移动文件或文件夹',
        'move_destination' => '目标文件夹',
        'please_select_move_dest' => '请选择目标文件夹.',
        'move_dest_src_match' => '请选择另一个目标文件夹.',
        'empty_library' => '媒体库是空的. 从上传文件或创建文件夹开始.',
        'insert' => '插入',
        'crop_and_insert' => '裁剪并插入',
        'select_single_image' => '请选择一张图片.',
        'selection_not_image' => '选择的不是一张图片.',
        'restore' => '取消所有更改',
        'resize' => '调整大小...',
        'selection_mode_normal' => '正常',
        'selection_mode_fixed_ratio' => '固定比例',
        'selection_mode_fixed_size' => '固定大小',
        'height' => '高度',
        'width' => '宽度',
        'selection_mode' => '选择模式',
        'resize_image' => '调整图片',
        'image_size' => '图片大小:',
        'selected_size' => '选中:'
    ]
];
