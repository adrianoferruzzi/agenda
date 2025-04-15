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



# start git
git init

# add files on project
# in this case the "." means the current working directory
git add .

# salve the changes
git commit . -m "IFSP"

# shows informations about changes
git status

# view a chronological list of commit history
git log

# remove file
git rm file1.txt

# pull files from github and refresh your local project
git pull main

# push files from your local project to github
git push agenda
