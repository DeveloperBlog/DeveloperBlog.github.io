<?php
/**
 * git上传执行钩子
 */
//TODO 安全限制
//TODO 其他钩子行为
// 清除opcache
if (version_compare(PHP_VERSION, '5.5.0', '>=')) {
 opcache_reset();
}
