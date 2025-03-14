<?php

declare(strict_types=1);
/**
 * This file is part of zhuchunshu.
 * @link     https://github.com/zhuchunshu
 * @document https://github.com/zhuchunshu/SForum
 * @contact  laravel@88.com
 * @license  https://github.com/zhuchunshu/SForum/blob/master/LICENSE
 */
Authority()->add('topic_edit', '编辑自己的帖子');
Authority()->add('topic_create', '发帖权限');
Authority()->add('topic_options', '修改帖子状态(置顶,精华等)');
Authority()->add('comment_create', '发布评论权限');
Authority()->add('comment_edit', '修改自己的评论');

Authority()->add('admin_topic_edit', '修改所有帖子');
Authority()->add('admin_comment_edit', '修改所有评论');

Authority()->add('admin_comment_remove', '删除所有(他人)评论');
Authority()->add('comment_remove', '删除自己评论');

Authority()->add('admin_comment_caina', '采纳所有帖子下的评论');
Authority()->add('comment_caina', '采纳自己帖子下的评论');

Authority()->add('admin_topic_delete', '删除所有帖子');
Authority()->add('topic_delete', '删除自己帖子');
Authority()->add('report_topic', '举报帖子');
Authority()->add('report_comment', '举报评论');
Authority()->add('admin_report', '受理举报');
Authority()->add('upload_file', '上传附件');
Authority()->add('upload_image', '上传图片');
Authority()->add('core_shortCode_InvitationCode', '使用邀请码ShortCode');

Itf()->add('core_auth_selected', 'topic_edit', 'topic_edit');
Itf()->add('core_auth_selected', 'topic_create', 'topic_create');
Itf()->add('core_auth_selected', 'comment_create', 'comment_create');
Itf()->add('core_auth_selected', 'comment_edit', 'comment_edit');
Itf()->add('core_auth_selected', 'comment_remove', 'comment_remove');
Itf()->add('core_auth_selected', 'comment_caina', 'comment_caina');
Itf()->add('core_auth_selected', 'topic_delete', 'topic_delete');
Itf()->add('core_auth_selected', 'report_topic', 'report_topic');
Itf()->add('core_auth_selected', 'report_comment', 'report_comment');
Itf()->add('core_auth_selected', 'upload_file', 'upload_file');
Itf()->add('core_auth_selected', 'upload_image', 'upload_image');

emoji_add('小黄脸', plugin_path('Core/resources/assets/emoji/小黄脸.json'), 'image');
emoji_add('小电视', plugin_path('Core/resources/assets/emoji/tv_小电视.json'), 'image');
emoji_add('热词系列', plugin_path('Core/resources/assets/emoji/热词系列一.json'), 'image');
emoji_add('斗图', plugin_path('Core/resources/assets/emoji/斗图.json'), 'image', true);
emoji_add('斗图2', plugin_path('Core/resources/assets/emoji/斗图.json'), 'image', true);
emoji_add('斗图3', plugin_path('Core/resources/assets/emoji/斗图.json'), 'image', true);
emoji_add('斗图4', plugin_path('Core/resources/assets/emoji/斗图.json'), 'image', true);
emoji_add('斗图5', plugin_path('Core/resources/assets/emoji/斗图.json'), 'image', true);

Itf()->add('ui-home-tabs-dropdown', 0, [
    'enable' => (function () {
        return true;
    }),
    'view' => 'App::widget.home.dropdown1',
]);

Itf()->add('ui-topic-right-start-hook', 0, [
    'enable' => (function () {
        return true;
    }),
    'view' => 'App::widget.topic.right_start_1',
]);

Itf()->add('ui-index-right-start-hook', 0, [
    'enable' => (function () {
        return true;
    }),
    'view' => 'App::widget.home.right_start_1',
]);

Itf()->add('ui-tags-right-start-hook', 0, [
    'enable' => (function () {
        return true;
    }),
    'view' => 'App::widget.topic.tags.right_start_1',
]);

Itf()->add('ui-keywords-right-start-hook', 0, [
    'enable' => (function () {
        return true;
    }),
    'view' => 'App::widget.topic.keywords.right_start_1',
]);

Itf()->add('ui-index-right-end-hook', 99999, [
    'view' => 'App::widget.friend_links',
    'enable' => (function () {
        if (get_options('theme_common_friend_links') === 'true' && get_options('theme_common_friend_links_position', 'home') === 'home') {
            return true;
        }
        return false;
    }),
]);
Itf()->add('ui-common-right-end-hook', 99999, [
    'view' => 'App::widget.friend_links',
    'enable' => (function () {
        if (get_options('theme_common_friend_links') === 'true' && get_options('theme_common_friend_links_position', 'home') === 'common') {
            return true;
        }
        return false;
    }),
]);
