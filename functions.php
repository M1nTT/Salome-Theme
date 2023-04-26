<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


/* 自定义首页文章分布数量，如 5 */
function themeInit($archive) {
if ($archive->is('index')) {
$archive->parameter->pageSize = 5;
}
}

//获取评论的锚点链接
function get_comment_at($coid)
{
    $db = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
        ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
            ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href = '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        echo $href;
    } else {
        echo '';
    }
}

//输出评论内容
function get_filtered_comment($coid)
{
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('text')->from('table.comments')
        ->where('coid = ? AND status = ?', $coid, 'approved'));
    $content = $rs['text'];
    echo $content;
}



