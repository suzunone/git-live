<?php

return array (
  'Alert: An update to the Git Live is available. Run "git live update" to get the latest version.' => 'Alert: "git live update" を実行して、最新版にアップデートしてください。',
  'Add a remote repository %s.' => 'リモートリポジトリ%sを追加してください。',
  'Not a git repository.' => 'Gitリモートリポジトリではありません。',
  '%1$s close is failed.' => '%1$s closeに失敗しました。',
  '%1$s branch has a commit that is not on the %2$s branch' => '%1$sブランチに%2$sより新しいコミットが存在します。',
  'Already %1$s opened.' => '既に%1$s openされています。',
  '%1$s is not open.' => '%1$s openされていません。',
  '%1$s is open.' => '%1$s is open.',
  '%1$s is close.' => '%1$s is close.',
  'Please enter only your remote-repository.' => 'フォークしたあなた専用のリモートリポジトリを入力してください。',
  'Please enter common remote-repository.' => 'フォーク元の共有リモートリポジトリを入力してください。',
  'Please enter deploying dedicated remote-repository.' => 'デプロイ用のリモートリポジトリを入力してください。',
  'If you return in the blank, it becomes the default setting.' => '空白のままにすると、デフォルトの設定が使用されます。',
  'Please enter work directory path.' => 'cloneするワークディレクトリを入力してください。',
  'Could not automatically get the local directory.' => 'ローカルディレクトリの自動取得に失敗しました。',
  'feature branch create fail.' => 'featureブランチの作成に失敗しました。',
  'Supports safe and efficient repository operation.' => '安全で効率的な、リポジトリ運用をサポートします。',
  'Create a new feature branch.(From upstream/develop)' => '新たな開発用ブランチを\'upstream\'(共通リモートサーバー)の\'develop\'ブランチをベースとして作成し、開発用ブランチにスイッチします。',
  'Checkout other feature branch.' => '作成済の別featureに移動します。',
  'Alias of "git live feature checkout".' => 'git live feature checkoutへのエイリアスです。',
  'Show feature list.' => 'featureの一覧を取得します。',
  'Safe push to upstream repository.' => '複数人と同じ開発ブランチで作業するとき、自分の変更分を\'upstream\'(共通リモートサーバー)にプッシュします。',
  'Safe checkout feature branch from upstream repository.' => '\'upstream\'(共通リモートサーバー)から、誰かが作成した開発用ブランチを取得します。',
  'Safe push to origin repository.' => '\'origin\'(個人用リモートサーバー)にFeatureブランチをpushします。(git live pushと動作は似ています)',
  'Safe pull to upstream repository.' => '\'upstream\'(共有リモートサーバー)からFeatureブランチをpullします。(git live feature trackと動作は似ていますが、trackは新規にブランチを作成するところが異なります)',
  'Remove feature branch, from all repository.' => 'すべての場所から、開発ブランチを削除します。プルリクエストがマージされたあとに実行してください。',
  '\'Checkout pull request locally.' => '\'upstream\'(共通リモートサーバー)からプルリクエストされているコードを取得します。',
  'Pull pull request locally.' => 'pr trackしたプルリクエストの内容を最新化',
  'Merge pull request locally.' => 'プルリクエストの内容をマージする。',
  'Feature start from pull request.' => 'プルリクエストから新たなfeatureを作成します。',
  'Feature start and merge pull request.。' => 'プルリクエストをマージした新しいfeatureを作成する。',
  'Hotfixes arise from the necessity to act immediately upon an undesired state of a live production version.' => '緊急対応のためのフローを開始します。',
  'May be branched off from the corresponding tag on the master branch that marks the production version.' => 'マスターから緊急対応用のブランチを作成します。',
  'Finishing a hotfix it gets merged back into develop and master. Additionally the master merge is tagged with the hotfix version.' => 'masterとdevelopにマージしてタグを作成し、緊急対応を修正します。',
  'Run git live hotfix pull and git live hotfix push in succession.' => 'git live hotfix pullとgit live hotfix pushを連続で実行します。',
  'Check the status of hotfix.' => 'ホットフィクスの状態を確認します。',
  'Check the status of hotfix.Also display merge commit.' => 'ホットフィクスの状態を確認します。表示する差分には、マージコミットを含めます。',
  'Whether the hotfix is open, or to see what is closed.' => 'ホットフィクスが開いているか、閉じているかを確認する。',
  'Checkout remote hotfix branch.' => '誰かが開けたhotfixを取得します。',
  'Pull upstream/hotfix and deploy/hotfix.' => '\'deploy\'(デプロイ用リモートサーバー)と\'upstream\'(共通リモートサーバー)からpullします。',
  'Push upstream/hotfix and deploy/hotfix.' => '\'deploy\'(デプロイ用リモートサーバー)と\'upstream\'(共通リモートサーバー)からpullします。',
  'Discard hotfix. However, keep working in the local repository.' => 'ホットフィクスの破棄。ローカルの作業ブランチは残す。',
  'Discard hotfix. Also discard work in the local repository.' => 'ホットフィクスの破棄。すべてを破棄し、ローカルでの作業も破棄する。',
  'Support preparation of a new production release/.' => '通常リリースのためのフローを開始します。',
  'Allow for minor bug fixes and preparing meta-data for a release' => '簡単なバグフィクスも、release open後に行うことができます。',
  'Finish up a release.Merges the release branch back into \'master\'.Tags the release with its name.Back-merges the release into \'develop\'.Removes the release branch.' => '\'master\'と\'develop\'にコードをマージ、タグを作成し、releaseを終了します。',
  'Finish up a release.Ignore errors.' => 'developとの差分を確認せずマージします。',
  'Run git live release pull and git live release push in succession.' => 'git live release pullとgit live release pushを連続で実行します。',
  'Check the status of release.' => 'releaseの状態を確認します。',
  'Check the status of release.Also display merge commit.' => 'リリースの状態を確認します。表示する差分には、マージコミットを含めます。',
  'Whether the release is open, or to see what is closed.' => 'リリースが開いているか、閉じているかを確認する。',
  'Pull upstream/release and deploy/release.' => 'リリース用のリモートリポジトリ(upstream/release と deploy/release)からpullします。',
  'Push upstream/release and deploy/release.' => 'リリース用のリモートリポジトリ(upstream/release と deploy/release)にpushします。',
  'Discard release. However, keep working in the local repository.' => 'リリースの破棄。ローカルの作業ブランチは残す。',
  'Discard release. Also discard work in the local repository.' => 'リリースの破棄。すべてを破棄し、ローカルでの作業も破棄する。',
  'Pull from the appropriate remote repository.' => '適当なリモートリポジトリからpullします。',
  'Push from the appropriate remote repository.' => '適当なリモートリポジトリにpushします。',
  'Will reset the branch before the last commit.' => 'ブランチを最後のコミットの状態にします。',
  'Update git-live.' => 'git-liveコマンドを更新します。',
  'Merge upstream/develop and develop.' => 'developをマージします。',
  'Merge upstream/master and master.' => 'masterをマージします。',
  'show diff upstream/develop.' => 'developとのdiffを表示します。',
  'show diff upstream/master.' => 'masterとのdiffを表示します。',
  'Start Git Live Flow.' => '初期化します。',
  'Restart Git Live Flow.' => 'リポジトリを再構築します。',
  'Initialize Git Live Flow.' => 'git live で管理するリポジトリを対話形式、あるいはオプションを指定して作成します。',
  'Initialize git live.' => 'git live で管理するリポジトリを作成します。',
  'Forked remote repository.' => '個人開発用のリモートリポジトリ(origin)。',
  'Original remote repository.' => 'originのfork元、共有のリモートリポジトリ(upstream)。',
  'Remote repository for deployment.' => 'デプロイ用リポジトリ。',
  'Path to clone.' => 'cloneするローカルのディレクトリ。',
);