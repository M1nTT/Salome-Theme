<?php
/**
 * 排除多余干扰，立即开始写作！
 * 
 * @package Salome
 * @author teeengmod26
 * @version 0.1.0
 * @link https://blog.tongmingzhi.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="autopagerize_page_element">
    <div class="content">


<?php while($this->next()): ?> 


    <div class="post animated fadeInDown">


         <div class="post_title">
            <h2>
                <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h2>
         </div>


                <div class="list">
                    <div class="post_content">
                        <p><?php $this->excerpt(120, '[...]'); ?></p>
                    </div>
                </div>


                    <div class="post_footer">
                        <div class="meta">
                            <div class="info">
                                <span class="field">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span class="date"><?php $this->date('l Y-m-d'); ?></span>
                                </span>
                            </div>
                        </div>
                    </div>

    </div>

<?php endwhile; ?>

            <div class="pagination">
                <div class="left">
                    <?php if ($this->_currentPage == 1) : ?>
                        <a href="<?php $this->options->siteUrl(); ?>">&nbsp;&nbsp;&nbsp;</a>
                    <?php else : ?>
                        <?php $this->pageLink('上一页'); ?>
                    <?php endif; ?>
                </div>
                <div class="center">
                    <?php if ($this->_currentPage > 1) echo $this->_currentPage; else echo 1; ?>&nbsp;/&nbsp;<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>
                </div>
                <div class="right">
                    <?php $this->pageLink('下一页', 'next'); ?>
                </div>
            </div>

    </div>
</div>


<?php $this->need('footer.php'); ?>