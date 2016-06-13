# Git Live Flow

## git-flow

[git-flow](http://nvie.com/posts/a-successful-git-branching-model/)
は[github-flow](http://scottchacon.com/2011/08/31/github-flow.html)で指摘されているような複雑さはあるものの、
すでに標準的なワークフローとして馴染んでいます。

それと同時に、ソースコードを管理するシステムとしてGitHubやそれに類するホスティングサービスを採用するプロジェクトもまた多くなっています。
GitHubを採用する恩恵は非常に大きなものですが、その最たるものはプルリクエストです。
[github-flow](http://scottchacon.com/2011/08/31/github-flow.html)では、

> 「GitHub has an amazing code review system called Pull Requests that I fear not enough people know about.」
> (GitHubには、残念だが十分な人々には知られていない プルリクエスト と呼ばれる素晴らしいコードレビューの仕組みがある。)

と言われていますが、2016年現在、GitHubを使っていてプルリクエストを知らない人はいないのではないでしょうか。

git-flowはGit Hubを用いない開発手法であるため、残念ながら、プルリクエストの仕組みがgit-flowには含まれません。

git-live-flowはその問題点を解決するべく、git-flowにプルリクエストの機構を組み込みました。
    


