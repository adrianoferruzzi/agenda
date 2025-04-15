# clone the project
git clone https://github.com/adrianoferruzzi/agenda.git

# start your github on terminal
# create ssh keys
ssh-keygen -t ed25519 -C "email@mail.com"
# add the public key on github
# Settings --> SSH and GPG keys 
# put your public keys

# set yout remote access
git remote set-url origin git@github.com:yourusername/agenda.git

# test your remote access
ssh -T git@github.com
# the answer should be:
# Hi User! You've successfully authenticated, but GitHub does not provide shell access.

# start git for news projects
git init

# add files on project
# in this case the "." means the current working directory
git add .

# salve the changes
git commit . -m "message"

# shows informations about changes
git status

# view a chronological list of commit history
git log

# remove file
git rm file1.txt

# pull files from github and refresh your local project
git pull main

# push files from your local project to github
git push origin agenda

# create your workflow 
mkdir -p .github/workflows

# add ssh private key of your server
# In your project enter 
# Settings --> Secrets and variables --> Actions
# Include your SSH Private Key