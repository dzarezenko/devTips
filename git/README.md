## Command line instructions

- [Git global user setup](#git-global-user-setup)
- [Create a new repository](#create-a-new-repository)
- [Existing folder](#existing-folder)
- [Existing Git repository](#existing-git-repository)

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
