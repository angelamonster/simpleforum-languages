<?php

return [
/* common */
    'Home' => '首页',
    'Top' => '置顶',
    'topic' => '主题',
    'comment' => '回复',
    'Favorite' => '加入收藏',
    'Cancel Favorite' => '取消收藏',
    'Post' => '发表',
    'Add' => '添加',
    'Reply' => '回复',
    'Delete' => '删除',
    'Edit' => '修改',
    'Inactive'=>'未激活',
    'Awating verification' => '管理员验证中',
    'Are you sure you want to delete it? This operation cannot be undone.' => '注意：删除后将不能恢复！请确认删除！',
    'Create a topic' => '发表新主题',
    'Tags' => '标签',
    'Signup' => '注册',
    'Login' => '登录',
    'Logout' => '退出',
    'Submit' => '确定',
    'Edit {target}' => '修改{target}',
    'Node' => '节点',
    '{name} does not exist.' => '{name}不存在。',
/* layouts */
    'Setting' => '设置',
    'Search' => '搜索',
    'Admin Panel' => '管理后台',
/* index-right */
    'Forum\'s Information' => '社区运行状况',
    'Members' => '注册会员',
    'Nodes' => '节点',
    'Topics' => '主题',
    'Comments' => '回复',
    'Hot topics' => '24小时内热议主题',
    'Links' => '友情链接',
    'Sign Up' => '现在注册',
    'Already have an account?' => '已注册用户请',
    'nodes' => '节点收藏',
    'topics' => '主题收藏',
    'members' => '特别关注',
    '{0,number} new messages' => '{0,number} 条未读提醒',
    '{attribute} cannot contain "{value}".' => '{attribute}不能包含"{value}"',
/* site/login */
    'Username' => '用户名',
    'Email' => '电子邮箱',
    'Password' => '密码',
    'Remember me for one week' => '记住我一周',
    'Enter Code' => '验证码',
    'Forgot Password' => '忘记密码了',
    'Third-party login' => '第三方账号登录',
/* site/signup */
    'Create an account and bind a third-party account' => '创建帐号并绑定第三方帐号',
    'Create an account and bind it' => '创建帐号并绑定',
    'You have logged in with your {name} account.' => '您已通过{name}帐号登录',
    'Have an account?' => '已有本站帐号',
    'Bind your account' => '绑定已有帐号',
    'Create an account' => '创建本站账号',
/* site/authBindAccount */
    'Don\'t have an account?' => '还没本站帐号',
    'Bind' => '绑定',
/* site/offline */
    'Forum Under Maintenance' => '论坛维护中，暂时关闭',
/* site/opResult */
    'Operation Result' => '操作结果',
/* site/fogotPassword */
    'Enter Your Email Address to Reset Password' => '输入电子邮箱重设密码',
    'Reset Password' => '重设密码',
    'Continue' => '继续',
/* site/error */
    'Error Occurred' => '出错了',
    'The above error occurred while the Web server was processing your request.' => '服务器处理您的请求时，发生了以上错误。',
    'Please contact us( {adminEmail} ) if you think this is a server error. Thank you.' => '如果您认为是服务器错误，请联系我们( {adminEmail} )。谢谢。',
/* user/setting */
    'Account Settings' => '会员设置',
    'Account Activation' => '会员激活',
    'Your account is not activated. Please check your email({email}) to activate your account.' => '您的账户还没有激活，请进您注册时填写的邮箱({email})，点击激活链接。',
    'Resend Activation Email' => '重发激活邮件',
    'Edit Profile' => '修改信息',
    'Status' => '状态',
    'Change {name}' => '修改{name}',
    'Avatar' => '头像',
    'My {name}' => '我的{name}',
    'Upload' => '上传',
    'Email Address' => '邮箱',
    'Unbind' => '解除绑定',
    'Bound Account' => '已绑定',
    'Bind Account' => '未绑定',
    'Registered Email' => '已注册邮箱',
    'Old Password' => '当前密码',
    'New Password' => '新密码',
/* user/view */
    'Follow' => '加入特别关注',
    'Unfollow' => '取消特别关注',
    'Manage' => '管理',
    'The {n, plural, =1{#st} =2{#nd} =3{#rd} other{#th}} member, joined at {time}.' => '第 {n} 号会员，加入于 {time} 。',
    '{username}\'s Latest Topics' => '{username} 最近创建的主题',
    '{username}\'s All Topics' => '{username} 创建的全部主题',
    '{username}\'s Latest Comments' => '{username} 最近回复了',
    '{username}\'s All Comments' => '{username} 的全部回复',
    'Commented on {author}\'s topic' => '回复了 {author} 的主题',
/* user/topics */
    'All Topics' => '全部主题',
    'All Comments' => '全部回复',
/* user/notifiations */
    'Notifications' => '我的提醒',
    'commented on your topic [{title}].' => '回复了您的主题【{title}】。',
    '+{n, plural, =1{# time} other{# times}}' => '省略类似通知{n}次',
    'mentioned you in the topic [{title}].' => '在主题【{title}】中提到了您。',
    'mentioned you in a comment on the topic [{title}].' => '在主题【{title}】的回复中提到了您。',
    'favorited your topic [{title}].' => '收藏了您发布的主题【{title}】。',
    'followed you.' => '关注了您。',
/* common/edit */
    'Visible Comment' => '公开回复',
    'Invisible Comment' => '屏蔽回复',
/* common/edit */
    'Add a comment' => '添加回复',
/* favorite/topics */
    'My Favorite Topics' => '我收藏的主题',
/* favorite/nodes */
    'My Favorite Nodes' => '我收藏的节点',
/* favorite/following */
    'Topics of My Following' => '我关注的人的最新主题',
/* node/index */
    'All Nodes' => '全部节点',
    '{n, plural, =0{no nodes} =1{# node} other{# nodes}}' => '{n}个节点',
/* models/LoginForm.php */
    'The username or password you entered is incorrect.' => '用户名或密码不正确。',
/* models/SignupForm.php */
    'Please use alphanumeric(a-zA-Z0-9) or Chinese characters.' => '请使用字母(a-zA-Z),数字(0-9)或中文',
    'Confirm Password' => '确认密码',
    'Username should contain 4-16 characters(1 Chinese characters=2 characters).' => '用户名长度为4到16位（1个中文等于2位）',
/* models/UserInfo.php */
    'Website' => '个人网站',
    'Bio' => '个人简介',
/* models/UploadForm.php */
    'Select a picture'=>'选择一个图片文件',
/* models/ChangeEmailForm.php */
    'New Email'=>'新邮箱',
    'Forum Password'=>'论坛登录密码',
    '{attribute} is incorrect.' => '{attribute}不正确',
    '{attribute} must not be equal to {compareAttribute}.' => '{attribute}和{compareAttribute}不能相同。',
    'Please check your email and click the verification link.' => '验证网址已发送到您的新邮箱，请进邮箱点击确认链接。',
    'Email Change Verification' => '修改邮箱确认',
    'An error occured when sending email. Please try later or contact the administrator ({adminEmail}).' => '邮件发送出错，请稍后重试或联系管理员 ({adminEmail})。',
/* models/Topic.php */
    'Node Name' => '所属节点',
    'Invisible' => '隐藏主题',
    'Close Comment' => '关闭评论',
    'Home Top' => '全局置顶',
    'Node Top' => '节点置顶',
    'Title' => '标题',
/* topic/index */
    'Latest' => '最近更新',
    'View all nodes' => '浏览全部节点',
    'All topics' => '全部',
    'Node Navi' => '节点导航',
    'Page {0,number}' => '第{0,number}页',
/* topic/node */
    '{n, plural, =0{no topics} =1{# topic} other{# topics}}' => '主题总数 {0}',
/* topic/view */
    'Move' => '转移节点',
    '{0,number} clicks' => '{0,number} 点击',
    'Font' => '字体',
    'Bigger' => '加大',
    'Smaller' => '缩小',
    '{n, plural, =0{no comments} =1{# comment} other{# comments}}' => '{n} 条回复',
    'This {target} is blocked.' => '此{target}已被屏蔽',
    '#{0,number}' => '{0,number}楼',
    'until {time}' => '直到 {time}',
    'Go to top' => '回到顶部',
/* topic/navi */
    'More' => '更多主题',
/* topic/new */
    'Please select a node' => '请选择一个节点',
    'Topic Title' => '主题标题',
    'Topic Content' => '主题内容',
    'Topic content can be empty.' => '如果标题能够表达完整内容，主题内容可为空',
    'max: 4 tags, delimiter: blank' => '最多4个，以空格分隔',
    'Upload Images' => '图片上传',
    'Hot nodes' => '热门节点',
/* topic/edit */
    'Edit a topic' => '修改主题',
/* site/login */
/* lib/Editor.php */
    'Insert it' => '插入图片',

];
