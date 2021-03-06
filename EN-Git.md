# GIT EN

### Github Config Settings

**Set Name**
``` git config --global user.name "user.name" ``` <br />

**Set Email**
``` git config --global user.mail "user.email" ``` <br />

### Console Commands

**List All Files in Folder**
``` ls ``` <br />

**Go to the Folder**
``` cd <folder_name> ``` <br />

**Create File**
``` touch <file_name> ``` <br />

**Create File and Open with Visual Code**
``` code <file_name> ``` <br />

**Delete File/Folder Name**
``` git rm -r <file_name>/<folder_name> ``` <br />

### Github Commands

**Create a New Local Repository**
``` git init ``` <br />

**Create a Working Copy Of a Remote Repository**
``` git clone <link> ``` <br />

**Add One or More Files To Staging**
``` git add <file_name> / git add . (For All)``` <br />

**List Git Status**
``` git status ``` <br />

**Commit Changes to Head**
``` git commit -m "Commit Message" ``` <br />

**Connect Remote Repository (If You Use Local Repository)**
``` git remote add origin <link>``` <br />

**Create New Branch**
``` git checkout -b <branch_name> ``` <br />

**Switch From One Branch to Another**
``` git checkout <branch_name> ``` <br />

**List All Branches**
``` git branch ``` <br />

**Delete Branch**
``` git branch -d <branch_name> ``` <br />

**Push All Branches to Your Remote Repository**
``` git push --all origin ``` <br />

**Push All Changes to Your Remote Repository**
``` git push origin <branch_name> / git push ``` <br />

**Delete a Branch On Your Remote Repository**
``` git push origin :<branch_name> ``` <br />

**Fetch And Merge Changes On The Remote Server to Your Working Directory**
``` git pull ``` <br />

**To Merge a Different Branch Into Your Active Branch**
``` git merge <branch_name> ``` <br />

**View All The Merge Conflicts**
``` git diff ``` <br />

**View The Conflicts Against The Base File**
``` git diff --base <file_name> ``` <br />

**Preview Changes, Before Merging**
``` git diff <ilk_branch> <ikinci_branch> ``` <br />

**Assigning a Tag to a Commit**
``` git tag 1.0.0 <commit_id> ``` <br />

**Push All Tags to Remote Repository**
``` git push --tags origin ``` <br />

**Undoing Local Changes (New Files Are Not Deleted)**
``` git checkout -- <file_name> ``` <br />

**Undo All Changes in Local**
``` git fetch origin / git reset --hard origin/master ``` <br />
