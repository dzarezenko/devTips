## Command line instructions

- [Git global user setup](#git-global-user-setup)
- [Create a new repository](#create-a-new-repository)
- [Existing folder](#existing-folder)
- [Existing Git repository](#existing-git-repository)
- [Store credentials](#store-credentials)

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

### Existing folder
```
cd existing_folder
git init
git remote add origin https://github.com/dzarezenko/devTips.git
git add .
git commit -m "Initial commit"
git push -u origin master
```

### Existing Git repository
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
2. [How to provide username and password when run “git clone git@remote.git”?
](https://stackoverflow.com/questions/10054318/how-to-provide-username-and-password-when-run-git-clone-gitremote-git)

