<?php
/**
 * 設定
 */
define( 'LOG_FILE', dirname( __FILE__ ) . '/hook.log' );
define( 'LOG_ERR', dirname( __FILE__ ) . '/hook-error.log' );
define( 'SECRET_KEY', 'secretkey' );

/**
 * 実行するコマンド
 */
$commands = array(
  'develop' => '',//developブランチ
  'master'  => 'echo "Pong from master branch."' // masterブランチ
);
