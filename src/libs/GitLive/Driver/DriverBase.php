<?php
/**
 * @category   GitCommand
 * @package    Git-Live
 * @subpackage Core
 * @author     akito<akito-artisan@five-foxes.com>
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright Project Git Live
 * @license MIT
 * @version    GIT: $Id$
 * @link https://github.com/Git-Live/git-live
 * @see https://github.com/Git-Live/git-live
 * @since      Class available since Release 1.0.0
 */
namespace GitLive\Driver;

use GitLive\GitBase;

/**
 * @category   GitCommand
 * @package    Git-Live
 * @subpackage Core
 * @author     akito<akito-artisan@five-foxes.com>
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright Project Git Live
 * @license MIT
 * @version    GIT: $Id$
 * @link https://github.com/Git-Live/git-live
 * @see https://github.com/Git-Live/git-live
 * @since      Class available since Release 1.0.0
 */
class DriverBase extends \GitLive\GitBase
{
    protected $GitLive;
    protected $GitCmdExecuter;

    /**
     * +-- コンストラクタ
     *
     * @access      public
     * @param  var_text $GitLive
     * @return void
     * @codeCoverageIgnore
     */
    public function __construct($GitLive)
    {
        $this->GitLive        = $GitLive;
        $this->GitCmdExecuter = $GitLive->getGitCmdExecuter();
    }
    /* ----------------------------------------- */

    /**
     * +-- 今のブランチを取得する
     *
     * @access      public
     * @return string
     * @codeCoverageIgnore
     */
    public function getSelfBranchRef()
    {
        return $this->GitLive->getSelfBranchRef();
    }
    /* ----------------------------------------- */


    /**
     * +-- 今のブランチを取得する
     *
     * @access      public
     * @return string
     */
    public function getSelfBranch()
    {
        return $this->GitLive->getSelfBranch();
    }

    /* ----------------------------------------- */



    /**
     * +--
     *
     * @access      public
     * @param  string                     $driver_name
     * @return \GitLive\Driver\DriverBase
     * @codeCoverageIgnore
     */
    public function Driver($driver_name)
    {
        return $this->GitLive->Driver($driver_name);
    }
    /* ----------------------------------------- */

    /**
     * +-- 引数配列を返す
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @return array
     * @codeCoverageIgnore
     */
    public function getArgv()
    {
        return $this->GitLive->getArgv();
    }
    /* ----------------------------------------- */

    /**
     * +-- 引数の取得
     *
     * 指定した引数の次の値(-f "filename"のfilename)
     * を取得します。<br />
     * 存在しない場合は、
     * $default_paramの値を返す。
     *
     * @access      public
     * @param  string $name
     * @param  mix    $default_param (optional:false)
     * @return mix
     * @codeCoverageIgnore
     */
    public function getOption($name, $default_param = false)
    {
        return $this->GitLive->getOption($name, $default_param);
    }
    /* ----------------------------------------- */

    /**
     * +-- 引数の取得
     *
     * 指定した引数の次の値(-f "filename"のfilename)
     * を取得します。<br />
     * 存在しない場合は、
     * $default_paramの値を返す。
     *
     * @access      public
     * @param  string $name
     * @return array
     * @codeCoverageIgnore
     */
    public function getOptions($name)
    {
        return $this->GitLive->getOptions($name);
    }
    /* ----------------------------------------- */

    /**
     * +--$nameで指定された引数が存在するかどうかを確認する
     *
     * @access      public
     * @param  string $name
     * @return bool
     * @codeCoverageIgnore
     */
    public function isOption($name)
    {
        return $this->GitLive->isOption($name);
    }
    /* ----------------------------------------- */

    /**
     * +-- 色つきecho
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @param  var_text $text
     * @param  var_text $color
     * @return void
     * @codeCoverageIgnore
     */
    public function cecho($text, $color)
    {
        return $this->GitLive->cecho($text, $color);
    }
    /* ----------------------------------------- */

    /**
     * +-- 色なしecho
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @param  var_text $text
     * @return void
     * @codeCoverageIgnore
     */
    public function ncecho($text)
    {
        return $this->GitLive->ncecho($text);
    }
    /* ----------------------------------------- */

    /**
     * +-- chdirへのAlias
     *
     * @access      public
     * @param  var_text $dir
     * @return void
     * @codeCoverageIgnore
     */
    public function chdir($dir)
    {
        return $this->GitLive->chdir($dir);
    }
    /* ----------------------------------------- */

    /**
     * +-- 対話シェル
     *
     * @access      public
     * @param  var_text    $shell_message
     * @param  bool|string $using_default OPTIONAL:false
     * @return string
     */
    public function interactiveShell($shell_message, $using_default = false)
    {
        return $this->GitLive->interactiveShell($shell_message, $using_default);
    }
    /* ----------------------------------------- */

    /**
     * +-- デバッグメッセージ
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @param  var_text $text
     * @param  var_text $color OPTIONAL:null
     * @return void
     * @codeCoverageIgnore
     */
    public function debug($text, $color = null)
    {
        return $this->GitLive->debug($text, $color);
    }
    /* ----------------------------------------- */

    /**
     * +-- Commandの実行
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @param  string   $cmd
     * @param  bool $quiet OPTIONAL:false
     * @return string
     * @codeCoverageIgnore
     */
    public function exec($cmd, $quiet = false)
    {
        return $this->GitLive->exec($cmd, $quiet);
    }
    /* ----------------------------------------- */

    /**
     * +-- デバッグモードかどうか
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @return bool
     * @codeCoverageIgnore
     */
    public function isDebug()
    {
        return $this->GitLive->isDebug();
    }
    /* ----------------------------------------- */

    /**
     * +-- Windowsかどうか
     *
     * 単体テストを楽にするために、処理を上書きして委譲する
     *
     * @access      public
     * @return bool
     * @codeCoverageIgnore
     */
    public function isWin()
    {
        return $this->GitLive->isWin();
    }
    /* ----------------------------------------- */
}
