## Git: useful command line instructions

- [Git global user setup](#git-global-user-setup)
- [Create a new repository](#create-a-new-repository)
- [Init repository in existing folder](#init-repository-in-existing-folder)
- [Bind remote repository with local one](#bind-remote-repository-with-local-one)
- [Switch existing Git repository](#switch-existing-git-repository)
- [Store credentials](#store-credentials)
- [Revert commit](#revert-commit)
- [Case sensitive file names](#case-sensitive-file-names)
- [Transfer a gist to a GitHub repository](#transfer-a-gist-to-a-github-repository)

### Git global user setup
```
git config --global user.name "Dmytro Zarezenko"
git config --global user.email "dmytro.zarezenko@gmail.com"
```

### Create a new repository
```
git clone https://github.com/dzarezenko/devTips.git
cd devTips
touch README.md
git add README.md
git commit -m "add README"
git push -u origin master
```

### Init repository in existing folder
```
cd existing_folder
git init
git remote add origin https://github.com/dzarezenko/devTips.git
git add .
git commit -m "Initial commit"
git push -u origin master
```

### Bind remote repository with local one
```
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/dzarezenko/devTips.git
git pull origin master --allow-unrelated-histories
git push -u origin master
```

### Switch existing Git repository
```
cd existing_repo
git remote rename origin old-origin
git remote add origin https://github.com/dzarezenko/devTips.git
git push -u origin --all
git push -u origin --tags
```

### Store credentials

For temporary store credentials in memory use:

```
git config --global credential.helper cache
```

For permanent store use:

```
git config --global credential.helper store
```

After that use:

```
git config --global credential.https://github.com.username github
```
or
```
git config --global credential.https://bitbucket.org@myemail.gmail.com bitbucket
```

Then clone repository and type password when it will ask you.

More details:
1. [`gitcredentials` - providing usernames and passwords to Git](https://git-scm.com/docs/gitcredentials)
2. [How to provide username and password when run `git clone git@remote.git`?
](https://stackoverflow.com/questions/10054318/how-to-provide-username-and-password-when-run-git-clone-gitremote-git)

### Revert commit

Revert last commit locally:

```
git reset --soft HEAD~1
```

Apply revert on the remote repository:

```
git push -f origin local_branch_name:remote_branch_name
```

More information:
1. [What is difference between `git reset --hard HEAD~1` and `git reset --soft HEAD~1`?
](https://stackoverflow.com/questions/24568936/what-is-difference-between-git-reset-hard-head1-and-git-reset-soft-head)
2. [`git-reset` - Reset current HEAD to the specified state](https://git-scm.com/docs/git-reset)

### Case sensitive file names

To tell Git to be case-senstive, simply set this setting to `false`...

```
git config core.ignorecase false
```

Remove a file from a Git repository without deleting it from the local filesystem.

```
git rm --cached filename.ext
```

### Transfer a gist to a GitHub repository

https://gist.github.com/ishu3101/830b556b487de5d69690
